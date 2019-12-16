@if ($with_filter)
	@section('sidebar')
		<form class="tao-admin-filter" method="post" action="{!! $filter_url !!}">
			{{ csrf_field() }}
			<fieldset>
				@foreach($filter as $name => $field)
					@php 
						if ($field->param('disabled')) {
							continue;
						}
						$type = $field->type;
					@endphp
					<div class="field-container">
						<div class="input-container">{!! $field->renderInput(['template_extra' => '-in-admin-filter']) !!}</div>
					</div>
				@endforeach
			</fieldset>
			
			<div class="tao-filter-buttons">
				<button type="submit" class="button-filter-search">Искать</button>
				@if (!$filter_empty)
					<a href="{{ $reset_filter_url }}" class="tao-reset-filter-button" title="Сбросить фильтр">Сбросить</a>
				@endif
			</div>
		</form>
	@endsection
@endif