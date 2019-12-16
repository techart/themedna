@php
	\Assets::setVar('layout-content-class', 'content-padded');
@endphp
@extends('~layout')

@include('table ~ form.header')
@include('table ~ form.right-buttons')

@section('content')
	<div class="content">
		@include('table ~ form.errors')
		@include('table ~ form.before-add')
		@include('table ~ form.form')
		@include('table ~ form.after-add')
	</div>
@endsection

