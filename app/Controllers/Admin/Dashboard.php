<?php
	
	namespace App\Controllers\Admin;
	
	use App\Controllers\BaseController;
	
	class Dashboard extends BaseController
	{
		public function index(): string
		{
			
			$data = [
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Dashboard | Quran Tazkia'
			];
			return view('admin/dashboard', $data);
		}
		
		//--------------------------------------------------------------------
		
	}
