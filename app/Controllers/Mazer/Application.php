<?php namespace App\Controllers\Mazer;

class Application extends BaseController
{
	public function email()
	{
		$title = 'Email Application';

		return view('mazer/application-email', compact('title'));
	}

	public function chat()
	{
		$title = 'Chat Application';

		return view('mazer/application-chat', compact('title'));
	}

	public function gallery()
	{
		$title = 'Gallery Application';

		return view('mazer/application-gallery', compact('title'));
	}

	public function checkout()
	{
		$title = 'Checkout Application';

		return view('mazer/application-checkout', compact('title'));
	}

	public function auth_login()
	{
		$title = 'Login';

		return view('mazer/auth-login', compact('title'));
	}

	public function auth_register()
	{
		$title = 'Register';

		return view('mazer/auth-register', compact('title'));
	}

	public function auth_forgotPassword()
	{
		$title = 'Forgot Password';

		return view('mazer/auth-forgot-password', compact('title'));
	}

	public function error_403()
	{
		$title = '403';

		return view('mazer/error-403', compact('title'));
	}

	public function error_404()
	{
		$title = '404';

		return view('mazer/error-404', compact('title'));
	}

	public function error_500()
	{
		$title = '500';

		return view('mazer/error-500', compact('title'));
	}
}
