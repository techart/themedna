<div class="filter-checkbox">
	<label for="{{ $field->name }}">{!! $field->labelInAdminForm() !!}</label>
	<input type="checkbox" name="{{ $field->name }}" value="1" @if ($field->checked()) checked @endif>
</div>
