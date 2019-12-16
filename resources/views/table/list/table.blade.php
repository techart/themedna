@php
	\Assets::setVar('layout-content-class', 'content-padded');
@endphp
@extends('~layout')

@include('table.list.header')
@include('table.list.right-buttons')
@include('table.list.filter')

@section('content')
	@include('table.list.navigator-top')
	
	<div class="data-table-container">
		@if ($count == 0)
			@include('table.list.empty')
		@else
			@include('table.list.before-data')
			@include($template_data ?? 'table.list.data-table')
			@include('table.list.after-data')
		@endif
	</div>
	
	@include ('table.list.navigator-bottom')
@endsection