@php
	\Assets::setVar('layout-content-class', 'content-padded');
	\Assets::useScss('themedna/tree');
@endphp
@extends('~layout')

@include('table.list.header')
@include('table.list.right-buttons')

@section('content')
	<div class="data-table-container">
		@if ($count == 0)
			@include('table.list.empty')
		@else
			@include('table.list.before-data')
			@include('table.list.data-tree')
			@include('table.list.after-data')
		@endif
	</div>
@endsection