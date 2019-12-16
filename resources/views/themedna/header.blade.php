<header class="top">
	<div class="top__logo">
		@include('themedna.logo')
	</div>

	{!! TAO::navigation('admin')->render('themedna') !!}

	<span class="top__menu-toggle">@include('themedna.button.menu')</span>

	<div class="top__auth hideable">
		@if(Auth::check())
			<form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
			<span class="letter">{{ strtoupper(mb_substr(Auth::user()->name, 0, 1)) }}</span>
			<span class="name">{{ Auth::user()->name }}</span>
			<a href="{{ url('/admin/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Выход</a>
		@else
			<a href="/admin/login/">Авторизация</a>
		@endif
	</div>
</header>
