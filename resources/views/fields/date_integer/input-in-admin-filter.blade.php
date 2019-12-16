@if ($with_datetimepicker)
	@bottomScript('/tao/scripts/moment-with-locales.min.js')
	@bottomScript('/tao/scripts/moment-timezone-with-data.min.js')
	@bottomScript('/tao/scripts/bootstrap-datetimepicker.min.js')
	@style('/tao/styles/bootstrap-datetimepicker.min.css')
    {{ \Assets::addBottomLine('<script>$(function() {$(".date_input_'.$field->name.'").datetimepicker('.json_encode($datetimepicker_options).');});</script>') }}
<div style="position:relative;">
@endif

<div class="filter-date">
	<label for="{{ $field->name }}">{!! $field->labelInAdminForm() !!}</label>
	<input type="text" name="{{ $field->name }}" class="date_input_{{ $field->name }} input" value="{{ $item[$field->name]==$field->nullValue()? '' : app('tao.utils')->date($field->generateFormat(), $item[$field->name]) }}">
</div>

@if ($with_datetimepicker)
</div>
@endif