<head>
	{!! Assets::textBlock('begin_of_head') !!}
	<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="/images/favicon.png" />
	{!! Assets::meta() !!}
	@include('themedna.stdstyles')
	{!! Assets::styles() !!}
	@include('themedna.stdscripts')
	{!! Assets::scripts() !!}
	{!! Assets::textBlock('end_of_head') !!}
</head>
