@extends('layouts.app')

@section('style')
<style>
	html, body {
		height: 100%;
	}
</style>
@endsection

@section('nav')
	@include('layouts.nav.login')
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-10 offset-1 col-md-6 offset-md-3 col-xl-4 offset-xl-4">
            <div class="card mt-5">
                <div class="card-header">
					<span class="fa fa-sign-in"></span> Login
				</div>
                <div class="card-block">
                    <form id="form" method="POST" action="{{ route('login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                            <label for="inputusername" class="col-form-label">Username</label>

							<input id="inputusername" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus autocomplete="off">

							@if($errors->has('username'))
								<div class="form-control-feedback"><strong>{{ $errors->first('username') }}</strong></div>
							@endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label for="inputpassword" class="control-label">Password</label>

							<input id="inputpassword" type="password" class="form-control" name="password" required aria-describedby="passwordHelpBlock">

							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif

							<small id="passwordHelpBlock" class="form-text text-muted">
								Your password must be 8-20 characters long.
							</small>
                        </div>

                        <div class="form-group">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="remember"{{ old('remember') ? ' checked' : '' }}> Remember Me
							</label>

							{{--<a href="{{ route('password.request') }}">
								Forgot Your Password?
							</a>--}}
                        </div>
                    </form>
                </div>
				<div class="card-footer">
					<button form="form" type="submit" class="btn btn-primary">
						Login
					</button>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
