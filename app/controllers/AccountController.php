<?php
class AccountController extends BaseController
{
    public function register()
    {
        return View::make('account.register');
    }

    public function login()
    {
        return View::make('account.login');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::home()->with('message', 'Sesión terminada.');
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

    public function doRegister()
    {
        $rules = array(
            'username'       => 'required|min:5|unique:users',
            'name'           => 'required',
            'password'       => 'required|min:10',
            'password_check' => 'same:password',
        );

        $Validator = Validator::make(Input::all(), $rules);

        if ($Validator->fails()) {
            return Redirect::route('register')
                   ->withErrors($Validator)
                   ->withInput();
        } else {
            $User = new User();
            $User->username = Input::get('username');
            $User->name     = Input::get('name');
            $User->password = Hash::make(Input::get('password'));

            if($User->save()) {
                return Redirect::route('login')
                       ->with('message', 'Tu cuenta ha sido creada!');
            } else {
                return Redirect::route('register')
                       ->with('error', 'No se pudo crear la cuenta')
                       ->withInput();
            }
        }
    }
}