<?php
class HomeController extends BaseController {

	public function home()
	{
		return View::make('home');
	}

	public function login()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$auth = Auth::attempt(array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
		));

		if ($auth) {
			return Redirect::route('home');
		} else {
			return Redirect::route('login')
				   ->with('error', 'Datos de acceso incorrectos.');
		}
	}
}