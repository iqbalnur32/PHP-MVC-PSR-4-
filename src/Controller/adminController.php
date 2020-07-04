<?php

namespace App\Controller;

class adminController extends Controller
{
	
	public function index()
	{
		$data['title'] = "Dashboard Admin";
		return $this->view('admin/home', $data);
	}

	public function management_user()
	{
		$data['title'] = "Dashboard Manjament Users";
		$data['users'] = $this->model('User')->getAll();

		// print_r($data['users']); die();
		return $this->view('admin/management_user', $data);
	}
	
}

?>