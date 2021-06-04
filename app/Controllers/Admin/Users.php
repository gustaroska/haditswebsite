<?php
	
	namespace App\Controllers\Admin;
	
	use App\Controllers\BaseController;
	
	class Users extends BaseController
	{
		public function index()
		{
			
			$data = [
				'data' => $this->userModel->getUsers(),
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'User Management | Quran Tazkia'
			];
			return view('admin/users', $data);
		}
		
		//--------------------------------------------------------------------
		
	}
