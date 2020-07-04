<?php

namespace App\Controller;

use App\Database\DB;

class homeController extends Controller
{
	
	public function __construct()
	{

	}

	public function index()
	{
		$this->view('home');
	}

	public function login()
	{
		$email = request('email');
		$password = request('password');
		$this->model('Auth')->login($email, $password);
	}
}

?>