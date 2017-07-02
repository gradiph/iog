<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title'){{ config('app.name', 'Laravel') }}</title>

		<link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}">

		<!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/tether.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/tether-theme-basic.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/tether-theme-arrows.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/tether-theme-arrows-dark.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		@yield('style')
	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">

					<!-- Collapsed Hamburger -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Branding Image -->
					<a class="navbar-brand" href="{{ url('/') }}">
						{{ config('app.name', 'Laravel') }}
					</a>
				</div>

				<div class="collapse navbar-collapse" id="app-navbar-collapse">
					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						@if (Auth::guest())
							<li><a href="{{ route('login') }}">Login</a></li>
							<li><a href="{{ route('register') }}">Register</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="{{ route('logout') }}"
											onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
											Logout
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								</ul>
							</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>

		<header>
			@yield('header')
		</header>

		<main>
			@yield('main')
		</main>

		<footer>
		</footer>

		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content"></div>
			</div>
		</div>

		<div class="loading">
			<span class="fa fa-spinner fa-pulse fa-5x fa-fw"></span>
			<div class="text-center">Loading...</div>
		</div>

		@if(session()->has('modal_messages'))
			<div class="modal" id="alertModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Pesan</h4>
						</div>
						<div class="modal-body">
							<p>{{ session('modal_messages') }}</p>
						</div>
					</div>
				</div>
			</div>
		@endif

		<!-- Scripts -->
		<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('js/tether.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script>
			window.Laravel = {!! json_encode([
				'csrfToken' => csrf_token(),
			]) !!};
		</script>
		@yield('script')
	</body>
</html>
