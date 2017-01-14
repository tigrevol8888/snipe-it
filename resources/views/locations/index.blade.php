@extends('layouts/default')

{{-- Page title --}}
@section('title')
{{ trans('general.locations') }}
@parent
@stop

@section('header_right')
<a href="{{ route('locations.create') }}" class="btn btn-primary pull-right">
  {{ trans('general.create') }}</a>
@stop
{{-- Page content --}}
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body">
        <div class="table-responsive">
          <table
          name="locations"
          class="table table-striped snipe-table"
          id="table"
          data-url="{{ route('api.locations.index') }}"
          data-cookie="true"
          data-click-to-select="true"
          data-cookie-id-table="locationsTable-{{ config('version.hash_version') }}">
            <thead>
              <tr>
                <th data-sortable="true" data-field="id" data-visible="false">{{ trans('general.id') }}</th>
                <th data-sortable="true" data-field="name">{{ trans('admin/locations/table.name') }}</th>
                <th data-sortable="true" data-field="parent">{{ trans('admin/locations/table.parent') }}</th>
                <th data-searchable="false" data-sortable="false" data-field="assets_default">{{ trans('admin/locations/table.assets_rtd') }}</th>
                <th data-searchable="false" data-sortable="false" data-field="assets_checkedout">{{ trans('admin/locations/table.assets_checkedout') }}</th>
                <th data-searchable="true" data-sortable="true" data-field="currency">{{ App\Models\Setting::first()->default_currency }}</th>
                <th data-searchable="true" data-sortable="true" data-field="address">{{ trans('admin/locations/table.address') }}</th>
                <th data-searchable="true" data-sortable="true" data-field="city">{{ trans('admin/locations/table.city') }}
                </th>
                <th data-searchable="true" data-sortable="true" data-field="state">
                 {{ trans('admin/locations/table.state') }}
                </th>
                  <th data-searchable="true" data-sortable="true" data-field="zip">
                      {{ trans('admin/locations/table.zip') }}
                  </th>
                <th data-searchable="true" data-sortable="true" data-field="country">
                {{ trans('admin/locations/table.country') }}</th>
                <th data-switchable="false" data-formatter="actionsFormatter" data-searchable="false" data-sortable="false" data-field="actions">{{ trans('table.actions') }}</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('moar_scripts')
@include ('partials.bootstrap-table', ['exportFile' => 'locations-export', 'search' => true])

  <script>
      function actionsFormatter(value, row) {
          return '<a href="{{ url('/') }}/locations/' + row.id + '/edit" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> '
          + '<a data-html="false" class="btn delete-asset btn-danger btn-sm" ' +
          + 'data-toggle="modal" href="" data-content="Are you sure you wish to delete this?" '
          + 'data-title="{{  trans('general.delete') }}?" onClick="return false;">'
          + '<i class="fa fa-trash"></i></a>';

      }
  </script>
@stop
