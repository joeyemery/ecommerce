<?php

class UserController extends Controller {
	
	public function login()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if(Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended(Route('home'));
		}

		return Redirect::intended(Route('home'));
	}

	public function register()
	{
		$email = Input::get('email');
		$password = Hash::make(Input::get('password'));

		$user = new User;
		$user->email = $email;
		$user->password = $password;
		$user->save();
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::intended(Route('home'));
	}

}