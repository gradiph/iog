<?php

namespace App\Http\Controllers;

use App\Product;
use App\WelcomeSlider;
use Illuminate\Http\Request;

use Auth;

class GuestController extends Controller
{
    public function welcome()
	{
		$wss = WelcomeSlider::all();
		$blouses = Product::where('code', 'like', 'BL%')
			->get();
		$dresses = Product::where('code', 'like', 'DR%')
			->get();
		$top_bustiers = Product::where('code', 'like', 'BS%')
			->get();

		return view('welcome')
			->with([
				'wss' => $wss,
				'blouses' => $blouses,
				'dresses' => $dresses,
				'top_bustiers' => $top_bustiers,
			]);
	}

	public function login()
	{
		return view('auth.login');
	}

	public function loginPost(Request $request)
	{
		if(Auth::attempt(['username' => $request->username, 'password' => $request->password,], $request->remember))
		{
			return redirect('/admin');
		}
		else
		{
			return back()->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		return redirect('/');
	}
}
