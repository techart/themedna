@style("/themedna/styles/simplebar.css")
@bottomScript("/themedna/scripts/simplebar.js")
@bottomScript("/themedna/scripts/scroller.js")
@bottomScript("/themedna/scripts/filter-select.js")
@php
	$selectedTitle = '';
@endphp
<div class="filter-select closed">
	<div class="header">
		<p class="text">{!! $field->labelInAdminForm() !!}</p>
		<span>&nbsp;</span>
	</div>
	
	<div class="input">
		<input type="hidden" name="{{ $field->name }}" value="{{ $field->value() }}">
	</div>
	
	<div class="items customized-scroller">
		@foreach($field->items() as $id => $title)
			@php
				if ($id === 0 && ($title == '' || $title = '&nbsp;')) {
					continue;
				}
				if (($id === $field->value()) || ( (int)$id > 0 && ((int)$id == (int)$field->value())) ) {
					$selectedTitle = $title;
				}
			@endphp
			<div class="item{{ ($id === $field->value()? ' selected' : '') }}" data-id="{{ $id }}">{!! $title !!}</div>
		@endforeach
	</div>
	
	<div class="input">
		<input type="hidden" name="{{ $field->name }}" value="{{ $field->value() }}">
		<span{!! (empty($selectedTitle)? ' style="display: none"' : '') !!}>{!! $selectedTitle !!}</span>
	</div>
</div>
