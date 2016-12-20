<?php
namespace App\Http\Controllers;

use Config;
use Input;
use Lang;
use Redirect;
use App\Models\Setting;
use Validator;
use View;
use App\Models\Group;
use App\Helpers\Helper;

/**
 * This controller handles all actions related to User Groups for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class GroupsController extends Controller
{
    /**
    * Returns a view that invokes the ajax tables which actually contains
    * the content for the user group listing, which is generated in getDatatable.
    *
    * @author [A. Gianotto] [<snipe@snipe.net]
    * @see GroupsController::getDatatable() method that generates the JSON response
    * @since [v1.0]
    * @return \Illuminate\Contracts\View\View
     */
    public function getIndex()
    {
        // Show the page
        return View::make('groups/index', compact('groups'));
    }

    /**
    * Returns a view that displays a form to create a new User Group.
    *
    * @author [A. Gianotto] [<snipe@snipe.net]
    * @see GroupsController::postCreate()
    * @since [v1.0]
    * @return \Illuminate\Contracts\View\View
     */
    public function getCreate()
    {
        $group = new Group;
        // Get all the available permissions
        $permissions = config('permissions');
        $groupPermissions = array();
        $selectedPermissions = Input::old('permissions', $groupPermissions);

        // Show the page
        return View::make('groups/edit', compact('permissions', 'selectedPermissions', 'groupPermissions'))->with('group', $group);
    }

    /**
    * Validates and stores the new User Group data.
    *
    * @author [A. Gianotto] [<snipe@snipe.net]
    * @see GroupsController::getCreate()
    * @since [v1.0]
    * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate()
    {
        // create a new group instance
        $group = new Group();
        $group->name = e(Input::get('name'));
        $group->permissions = json_encode(Input::get('permission'));

        if ($group->save()) {
            return redirect()->to("admin/groups")->with('success', trans('admin/groups/message.success.create'));
        }
        return redirect()->back()->withInput()->withErrors($group->getErrors());
    }

    /**
    * Returns a view that presents a form to edit a User Group.
    *
    * @author [A. Gianotto] [<snipe@snipe.net]
    * @see GroupsController::postEdit()
    * @param int $id
    * @since [v1.0]
    * @return \Illuminate\Contracts\View\View
     */
    public function getEdit($id = null)
    {
        $group = Group::find($id);
        $permissions = config('permissions');
        $groupPermissions = $group->decodePermissions();
        $selected_array = Helper::selectedPermissionsArray($permissions, $groupPermissions);
        return View::make('groups/edit', compact('group', 'permissions', 'selected_array', 'groupPermissions'));
    }

    /**
    * Validates and stores the updated User Group data.
    *
    * @author [A. Gianotto] [<snipe@snipe.net]
    * @see GroupsController::getEdit()
    * @param int $id
    * @since [v1.0]
    * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit($id = null)
    {
        $permissions = config('permissions');
        if (!$group = Group::find($id)) {
            return redirect()->route('groups')->with('error', trans('admin/groups/message.group_not_found', compact('id')));
        }
        $group->name = e(Input::get('name'));
        $group->permissions = json_encode(Input::get('permission'));

        if (!config('app.lock_passwords')) {
            if ($group->save()) {
                return redirect()->to("admin/groups")->with('success', trans('admin/groups/message.success.update'));
            }
            return redirect()->back()->withInput()->withErrors($group->getErrors());
        }
        return redirect()->route('groups')->with('error', trans('general.feature_disabled'));
    }

    /**
    * Validates and deletes the User Group.
    *
    * @author [A. Gianotto] [<snipe@snipe.net]
    * @see GroupsController::getEdit()
    * @param int $id
    * @since [v1.0]
    * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id = null)
    {
        if (!config('app.lock_passwords')) {
            if (!$group = Group::find($id)) {
                return redirect()->route('groups')->with('error', trans('admin/groups/message.group_not_found', compact('id')));
            }
            $group->delete();
            // Redirect to the group management page
            return redirect()->route('groups')->with('success', trans('admin/groups/message.success.delete'));
        }
        return redirect()->route('groups')->with('error', trans('general.feature_disabled'));
    }


    /**
    * Generates the JSON used to display the User Group listing.
    *
    * @author [A. Gianotto] [<snipe@snipe.net>]
    * @since [v2.0]
    * @return String JSON
    */
    public function getDatatable()
    {

        $offset = request('offset', 0);
        $limit = request('limit', 50);

        if (Input::get('sort')=='name') {
            $sort = 'first_name';
        } else {
            $sort = e(Input::get('sort'));
        }

        // Grab all the groups
        $groups = Group::with('users')->orderBy('name', 'ASC');

        if (Input::has('search')) {
            $groups = $users->TextSearch(e(Input::get('search')));
        }

         $order = Input::get('order') === 'asc' ? 'asc' : 'desc';

        $allowed_columns = [
           'name','created_at'
         ];

        $sort = in_array($sort, $allowed_columns) ? $sort : 'name';
        $groups = $groups->orderBy($sort, $order);

        $groupsCount = $groups->count();
        $groups = $groups->skip($offset)->take($limit)->get();
        $rows = array();

        foreach ($groups as $group) {
            $actions = '<nobr>';
            $actions .= Helper::generateDatatableButton('edit', route('update/group', $group->id));

            if (!config('app.lock_passwords')) {
                $actions .= Helper::generateDatatableButton(
                    'delete',
                    route('delete/group', $group->id),
                    true, /*enabled*/
                    trans('admin/groups/message.delete.confirm'),
                    $group->name
                );
            } else {
                $actions .= ' <span class="btn delete-asset btn-danger btn-sm disabled"><i class="fa fa-trash icon-white"></i></span>';
            }

            $actions .= '</nobr>';

            $rows[] = array(
                'id'         => $group->id,
                'name'        => $group->name,
                'users'         => $group->users->count(),
                'created_at'        => $group->created_at->format('Y-m-d'),
                'actions'       => ($actions) ? $actions : '',
            );
        }
        $data = array('total'=>$groupsCount, 'rows'=>$rows);
        return $data;
    }
}
