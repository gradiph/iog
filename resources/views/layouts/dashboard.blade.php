<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script>
			window.Laravel = {!! json_encode([
				'csrfToken' => csrf_token(),
			]) !!};
		</script>

		<title>@yield('title'){{ config('app.name', 'Laravel') }}</title>

		<link rel="shortcut icon" href="{{ asset('images/Logo - no bg.png') }}">

		<!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/tether.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/tether-theme-basic.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/tether-theme-arrows.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/tether-theme-arrows-dark.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
		<style>
		</style>
		@yield('style')
	</head>
	<body>
		<div class="row d-flex d-md-block flex-nowrap wrapper no-gutters">
			<nav class="col-md-3 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
				<div class="list-group border-0 card text-center text-md-left">
					@yield('sidebar')
					{{-- SAMPLE NAV ITEM --}}
					{{--
					<a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><span class="fa fa-dashboard"></span> <span class="hidden-sm-down">Item 1</span> </a>
					<div class="collapse" id="menu1">
						<a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 1 </a>
						<div class="collapse" id="menu1sub1">
							<a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 1 a</a>
							<a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 2 b</a>
							<a href="#menu1sub1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 3 c </a>
							<div class="collapse" id="menu1sub1sub1">
								<a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem 3 c.1</a>
								<a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem 3 c.2</a>
							</div>
							<a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 4 d</a>
							<a href="#menu1sub1sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 5 e </a>
							<div class="collapse" id="menu1sub1sub2">
								<a href="#" class="list-group-item" data-parent="#menu1sub1sub2">Subitem 5 e.1</a>
								<a href="#" class="list-group-item" data-parent="#menu1sub1sub2">Subitem 5 e.2</a>
							</div>
						</div>
						<a href="#" class="list-group-item" data-parent="#menu1">Subitem 2</a>
						<a href="#" class="list-group-item" data-parent="#menu1">Subitem 3</a>
					</div>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-film"></span> <span class="hidden-sm-down">Item 2</span></a>
					<a href="#menu3" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><span class="fa fa-book"></span> <span class="hidden-sm-down">Item 3 </span></a>
					<div class="collapse" id="menu3">
						<a href="#" class="list-group-item" data-parent="#menu3">3.1</a>
						<a href="#menu3sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">3.2 </a>
						<div class="collapse" id="menu3sub2">
							<a href="#" class="list-group-item" data-parent="#menu3sub2">3.2 a</a>
							<a href="#" class="list-group-item" data-parent="#menu3sub2">3.2 b</a>
							<a href="#" class="list-group-item" data-parent="#menu3sub2">3.2 c</a>
						</div>
						<a href="#" class="list-group-item" data-parent="#menu3">3.3</a>
					</div>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-heart"></span> <span class="hidden-sm-down">Item 4</span></a>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-list"></span> <span class="hidden-sm-down">Item 5</span></a>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-clock-o"></span> <span class="hidden-sm-down">Link</span></a>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-th"></span> <span class="hidden-sm-down">Link</span></a>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-gear"></span> <span class="hidden-sm-down">Link</span></a>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-calendar"></span> <span class="hidden-sm-down">Link</span></a>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-envelope"></span> <span class="hidden-sm-down">Link</span></a>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-bar-chart-o"></span> <span class="hidden-sm-down">Link</span></a>
					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><span class="fa fa-star"></span> <span class="hidden-sm-down">Link</span></a>
					--}}
				</div>
			</nav>
			<div class="col-md-9 float-left">
				<nav id="topbar" class="py-2">
					<div class="container text-right">
						<button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="fa fa-user"></span> {{ Auth::user()->name }}
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#"><span class="fa fa-lock"></span> Change Password</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"><span class="fa fa-sign-out"></span> Log Out</a>
						</div>
					</div>
				</nav>

				@if(session()->has('alert_messages'))
				<div class="alert {{ session('alert_type') }} alert-dismissable fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					{!! session('alert_messages') !!}
				</div>
				@endif

				<div class="p-3">
					<header>
						@yield('header')
					</header>

					<main>
						@yield('main')
					</main>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content"></div>
			</div>
		</div>

		<div class="loading">
			<span class="fa fa-spinner fa-pulse fa-5x fa-fw"></span>
			<div class="text-center">Loading...</div>
		</div>

		@if(session()->has('modal_messages'))
			<div class="modal" id="alertModal" tabindex="-1" role="dialog" aria-label="Messages" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Messages</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
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
		<script src="{{ asset('js/ajaxLoad.js') }}"></script>
		@yield('script')
	</body>
</html>
