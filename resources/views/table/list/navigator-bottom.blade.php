<div class="table-navigator-bottom">
	@if ($additional_actions)
		<div class="additional_actions">
			@include('table.list.additional-actions')
		</div>
	@endif
	
	@if ($numpages>1)
		@if ($additional_actions)
		<div class="page-navigator page-navigator-bottom">
		@else
		<div class="page-navigator page-navigator-bottom">
		@endif
			@include('pager ~ admin')
		</div>
	@endif
</div>