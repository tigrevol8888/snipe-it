@extends('layouts/default')

@section('title0')

@if (Input::get('status'))
@if (Input::get('status')=='Pending')
{{ trans('general.pending') }}
@elseif (Input::get('status')=='RTD')
{{ trans('general.ready_to_deploy') }}
@elseif (Input::get('status')=='Undeployable')
{{ trans('general.undeployable') }}
@elseif (Input::get('status')=='Deployable')
{{ trans('general.deployed') }}
@elseif (Input::get('status')=='Requestable')
{{ trans('admin/hardware/general.requestable') }}
@elseif (Input::get('status')=='Archived')
{{ trans('general.archived') }}
@elseif (Input::get('status')=='Deleted')
{{ trans('general.deleted') }}
@endif
@else
{{ trans('general.all') }}
@endif
{{ trans('general.assets') }}
@stop

{{-- Page title --}}
@section('title')
@yield('title0')  @parent
@stop

@section('header_right')
<a href="{{ route('hardware.create') }}" class="btn btn-primary pull-right"></i> {{ trans('general.create') }}</a>
@stop

{{-- Page content --}}
@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-body">
        {{ Form::open([
          'method' => 'POST',
          'route' => ['hardware/bulkedit'],
          'class' => 'form-inline',
           'id' => 'bulkForm']) }}
          <div class="row">
            <div class="col-md-12">
              @if (Input::get('status')!='Deleted')
              <div id="toolbar">
                <select name="bulk_actions" class="form-control select2">
                  <option value="edit">Edit</option>
                  <option value="delete">Delete</option>
                  <option value="labels">Generate Labels</option>
                </select>
                <button class="btn btn-default" id="bulkEdit" disabled>Go</button>
              </div>
              @endif

              <table
              name="assets"
              {{-- data-row-style="rowStyle" --}}
              data-toolbar="#toolbar"
              class="table table-striped snipe-table"
              id="table"
              data-url="{{route('api.assets.index', array(''=>e(Input::get('status')),'order_number'=>e(Input::get('order_number')), 'status_id'=>e(Input::get('status_id'))))}}"
              data-cookie="true"
              data-click-to-select="true"
              data-cookie-id-table="{{ e(Input::get('status')) }}assetTable-{{ config('version.hash_version') }}">
                <thead>
                  <tr>
                    @if (Input::get('status')!='Deleted')
                          <th data-checkbox="true" data-field="checkbox"></th>
                    @endif
                    <th data-sortable="true" data-field="id" data-visible="false">{{ trans('general.id') }}</th>
                    <th data-field="company" data-formatter="companiesLinkObjFormatter" data-searchable="true" data-sortable="true" data-switchable="true" data-visible="false">{{ trans('general.company') }}</th>
                    <th data-sortable="true" data-field="image" data-formatter="imageFormatter" data-visible="false">{{ trans('admin/hardware/table.image') }}</th>
                    <th data-sortable="true" data-field="name" data-visible="false" data-formatter="hardwareLinkFormatter">{{ trans('admin/hardware/form.name') }}</th>
                    <th data-sortable="true" data-field="asset_tag" data-formatter="hardwareLinkFormatter">{{ trans('admin/hardware/table.asset_tag') }}</th>
                    <th data-sortable="true" data-field="serial" data-formatter="hardwareLinkFormatter">{{ trans('admin/hardware/table.serial') }}</th>
                    <th data-sortable="true" data-field="model" data-formatter="modelsLinkObjFormatter">{{ trans('admin/hardware/form.model') }}</th>
                    <th data-sortable="true" data-field="model_number" data-visible="false">{{ trans('admin/models/table.modelnumber') }}</th>
                    <th data-sortable="true" data-field="status_label" data-formatter="statuslabelsLinkObjFormatter">{{ trans('admin/hardware/table.status') }}</th>
                    <th data-sortable="true" data-formatter="usersLinkObjFormatter" data-field="assigned_to">{{ trans('admin/hardware/form.checkedout_to') }}</th>
                    <th data-sortable="true" data-formatter="locationsLinkObjFormatter" data-field="location" data-searchable="true">{{ trans('admin/hardware/table.location') }}</th>
                    <th data-sortable="true" data-field="category" data-searchable="true" data-formatter="categoriesLinkObjFormatter">{{ trans('general.category') }}</th>
                    <th data-sortable="true" data-field="manufacturer" data-formatter="manufacturersLinkObjFormatter" data-searchable="true" data-visible="false">{{ trans('general.manufacturer') }}</th>
                    <th data-sortable="true" data-field="purchase_cost" data-searchable="true" data-visible="false">{{ trans('admin/hardware/form.cost') }}</th>
                    <th data-sortable="true" data-field="purchase_date" data-searchable="true" data-visible="false">{{ trans('admin/hardware/form.date') }}</th>
                    <th data-sortable="false" data-field="eol" data-searchable="true">{{ trans('general.eol') }}</th>
                    <th data-sortable="true" data-searchable="true" data-field="notes">{{ trans('general.notes') }}</th>
                    <th data-sortable="true" data-searchable="true"  data-field="order_number">{{ trans('admin/hardware/form.order') }}</th>
                    <th data-sortable="true" data-searchable="true" data-field="last_checkout">{{ trans('admin/hardware/table.checkout_date') }}</th>
                    <th data-sortable="true" data-field="expected_checkin" data-searchable="true">{{ trans('admin/hardware/form.expected_checkin') }}</th>
                    @foreach(\App\Models\CustomField::all() as $field)


                    <th data-sortable="{{ ($field->field_encrypted=='1' ? 'false' : 'true') }}" data-visible="false" data-field="{{$field->convertUnicodeDbSlug()}}">
                      @if ($field->field_encrypted=='1')
                      <i class="fa fa-lock"></i>
                      @endif

                      {{$field->name}}
                    </th>

                    @endforeach
                    <th data-sortable="true" data-field="created_at" data-formatter="createdAtFormatter" data-searchable="true" data-visible="false">{{ trans('general.created_at') }}</th>
                    <th data-switchable="false" data-searchable="false" data-sortable="false" data-field="change">{{ trans('admin/hardware/table.change') }}</th>

                    <th data-switchable="false" data-searchable="false" data-formatter="hardwareActionsFormatter" data-sortable="false" data-field="actions" >{{ trans('table.actions') }}</th>
                  </tr>
                </thead>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
        {{ Form::close() }}
      </div><!-- ./box-body -->
    </div><!-- /.box -->
  </div>
</div>
@stop

@section('moar_scripts')
@include ('partials.bootstrap-table', [
    'exportFile' => 'assets-export',
    'search' => true,
    'multiSort' => true
])

@stop
