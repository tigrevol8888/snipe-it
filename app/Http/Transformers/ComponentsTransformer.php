<?php
namespace App\Http\Transformers;

use App\Models\Component;
use Illuminate\Database\Eloquent\Collection;
use App\Helpers\Helper;
use Gate;

class ComponentsTransformer
{
    public function transformComponents(Collection $components, $total)
    {
        $array = array();
        foreach ($components as $component) {
            $array[] = self::transformComponent($component);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformComponent(Component $component)
    {
        $array = [
            'id' => (int) $component->id,
            'name' => e($component->name),
            'serial_number' => e($component->serial),
            'location' => ($component->location) ? [
                'id' => (int) $component->location->id,
                'name' => e($component->location->name)
            ] : null,
            'qty' => number_format($component->qty),
            'min_amt' => e($component->min_amt),
            'category' => ($component->category) ? [
                'id' => (int) $component->category->id,
                'name' => e($component->category->name)
            ] : null,
            'order_number'  => e($component->order_number),
            'purchase_date' =>  Helper::getFormattedDateObject($component->purchase_date, 'date'),
            'purchase_cost' => Helper::formatCurrencyOutput($component->purchase_cost),
            'remaining'  => (int) $component->numRemaining(),
            'company'   => ($component->company) ? [
                'id' => (int) $component->company->id,
                'name' => e($component->company->name)
            ] : null,
            'created_at' => Helper::getFormattedDateObject($component->created_at, 'datetime'),
            'updated_at' => Helper::getFormattedDateObject($component->updated_at, 'datetime'),
        ];

        $permissions_array['available_actions'] = [
            'checkout' => (bool) Gate::allows('checkout', Component::class),
            'checkin' => (bool) Gate::allows('checkin', Component::class),
            'update' => (bool) Gate::allows('update', Component::class),
            'delete' => (bool) Gate::allows('delete', Component::class),
        ];
        $array += $permissions_array;

        return $array;
    }


    public function transformCheckedoutComponents(Collection $components_users, $total)
    {
        $array = array();
        foreach ($components_users as $user) {
            $array[] = (new UsersTransformer)->transformUser($user);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }
}
