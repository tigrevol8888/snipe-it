@if($model->fieldset)
  @foreach($model->fieldset->fields AS $field)
    <div class="form-group{{ $errors->has($field->db_column_name()) ? ' has-error' : '' }}">
      <label for="{{ $field->db_column_name() }}" class="col-md-3 control-label">{{ $field->name }} </label>
      <div class="col-md-7 col-sm-12{{ ($field->pivot->required=='1') ? ' required' : '' }}">

          @if ($field->element!='text')
              <!-- Listbox -->
              @if ($field->element=='listbox')
                  {{ Form::select($field->db_column_name(), $field->formatFieldValuesAsArray(), Input::old($field->db_column_name(), $asset->{$field->db_column_name()}), ['class'=>'format select2 form-control']) }}

              @elseif ($field->element=='checkbox')
                    <!-- Checkboxes -->
                  @foreach ($field->formatFieldValuesAsArray() as $key => $value)

                      <div>
                          <label>
                              <input type="checkbox" value="1" name="{{ $field->db_column_name() }}[]" class="minimal" {{ Input::old($field->db_column_name()) != '' ? ' checked="checked"' : '' }}> key: {{ $key }} value: {{ $value }}
                          </label>
                      </div>
                  @endforeach

              @endif


          @else
            <!-- Text field -->

            @can('admin')
            <input type="text" value="{{ Input::old($field->db_column_name(),(isset($asset) ? \App\Helpers\Helper::gracefulDecrypt($field, $asset->{$field->db_column_name()}) : "")) }}" id="{{ $field->db_column_name() }}" class="form-control" name="{{ $field->db_column_name() }}" placeholder="Enter {{ strtolower($field->format) }} text">
                @else
                    <input type="text" value="{{ strtoupper(trans('admin/custom_fields/general.encrypted')) }}" class="form-control disabled" disabled>
            @endcan

          @endif

          <?php
          $errormessage=$errors->first($field->db_column_name());
          if ($errormessage) {
              $errormessage=preg_replace('/ snipeit /', '', $errormessage);
              print('<span class="alert-msg"><i class="fa fa-times"></i> '.$errormessage.'</span>');
            }
            ?>
      </div>

        @if ($field->field_encrypted)
        <div class="col-md-1 col-sm-1 text-left">
            <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="{{ trans('admin/custom_fields/general.value_encrypted') }}"></i>
        </div>
        @endif
    </div>
  @endforeach
@endif
