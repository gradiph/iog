<nav class="navbar navbar-toggleable navbar-light">
	<div class="container">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="{{ url('') }}">
			<img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="logo">
			<span class="desktop_version">Ireum Eomneun Gage</span>
			<span class="mobile_version">IOG &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
		</a>

		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<div class="mr-auto"></div>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				@if(Auth::check())
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="fa fa-user"></span> {{ Auth::user()->name }}
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="{{ route('password.change') }}">Change Password</a>
							<a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
						</div>
					</li>
				@else
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('login') }}">Login</a>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>
