@section('right_buttons')
	@include('table.list.app-buttons')
	
	@if ($can_add)
		<a href="{{ url($controller->actionUrl('add')) }}" class="add-button">{{ $add_text }}</a>
	@endif
@endsection