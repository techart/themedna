@if (\Assets::getVar('without_layout', false))
@yield('content')
@else

@php
	$includeHeader = \Assets::getVar('with_header_and_footer', true) || \Assets::getVar('with_header', false);
	$includeFooter = \Assets::getVar('with_header_and_footer', true) || \Assets::getVar('with_footer', false);
@endphp
@include('themedna.config')
@include('admin.setup')
<!DOCTYPE html>
<html class="layout-public">
	@include('themedna.head')
	<body>{!! Assets::textBlock('begin_of_body') !!}<div class="wrapper">
		@if ($includeHeader)
			@include('themedna.header')
		@endif

		<div class="main {{ $includeFooter ? '' : 'main--without-footer' }}">
			@hasSection('sidebar')
				<div class="sidebar">
					<div class="inner">
						@yield('sidebar')
					</div>
				</div>
			@endif

			<div class="main-content @hasSection('sidebar') content-with-sidebar @else content-without-sidebar @endif {{ \Assets::getVar('layout-content-class') }}">
				@hasSection('h1')
					<div class="pagetitle">
						<h1 class="pagetitle__header">@yield('h1')</h1>
						<div class="pagetitle__buttons">@yield('right_buttons')</div>
					</div>
				@endif
				@yield('content')
			</div>
		</div>

		@if ($includeFooter)
			@include('themedna.footer')
		@endif

		<script src="/tao/scripts/bootstrap.min.js"></script>
		{!! Assets::bottomScripts() !!}
		{!! Assets::textBlock('bottom') !!}
		<script>
			$(function() {
				$('.top__navigation li.dropdown').click(function() {
					$('.top__dropdown').hide();
					$('.top__dropdown', $(this)).toggle();
				}).each(function() {
					var $el = $('.top__dropdown', $(this));
					$(document).mouseup(function (e) {
						if (!$el.is(e.target) && $el.has(e.target).length === 0) {
							$el.hide();
						}
					});
				});

				$('.top__menu-toggle').click(function() {
					$('.top__navigation').toggleClass('hideable');
					$('.top__auth').toggleClass('hideable');
				});

			});
		</script>
	</div>{!! Assets::textBlock('end_of_body') !!}</body>
</html>
@endif
