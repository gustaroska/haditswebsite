<?php
	
	namespace App\Controllers\Admin;
	
	use App\Controllers\BaseController;
	
	class History extends BaseController
	{
		public function index()
		{
			$data = [
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'History | Quran Tazkia'
			];
			return view('admin/history', $data);
		}
		
		//--------------------------------------------------------------------
		
	}
