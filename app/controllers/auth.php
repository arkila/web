<?php

class Auth extends Controller
{
	public function index()
	{
		$this->view('auth/login-register');
	}

	public function login($username = '', $password = '')
	{
		echo 'success';
	}
}