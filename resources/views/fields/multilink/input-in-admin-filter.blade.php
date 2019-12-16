@style("/themedna/styles/simplebar.css")
@bottomScript("/themedna/scripts/simplebar.js")
@bottomScript("/themedna/scripts/scroller.js")
@bottomScript("/themedna/scripts/filter-multilink.js")
<div class="filter-multilink {{ (empty($field->attachedIds())? 'closed' : 'opened') }}">
	<div class="header">
		<p class="text">{!! $field->labelInAdminForm() !!}</p>
		<span>&nbsp;</span>
	</div>
	
	<div class="items customized-scroller">
		@foreach($field->items() as $id => $title)
			@if (!empty($title) && $title != '&nbsp;')
			<div class="item">
				<input type="checkbox" name="{{ $field->name }}[{{ $id }}]" value="1" @if ($field->isAttached($id)) checked @endif>
				<span class="caption">{!! $title !!}</span>
			</div>
			@endif
		@endforeach
	</div>
</div>
