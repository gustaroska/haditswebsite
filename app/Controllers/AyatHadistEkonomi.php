<?php
	
	namespace App\Controllers;
	
	class AyatHadistEkonomi extends BaseController
	{
		public function index()
		{
			$data = [
				'ayatHadits' => $this->ayatHaditsModel->getAyatHadits(),
				'title' => 'Ayat Hadist Ekonomi - Quran Tazkia'
			];
			
			return view('ayat_hadist_ekonomi/index', $data);
		}
		
		public function detail($id = null)
		{
			$detail = $this->ayatHaditsModel->getData($id);
			if ($detail !== null) {
				$data = [
					'detail' => $this->ayatHaditsModel->getData($id),
					'title' => 'Hukum Jual Beli - Quran Tazkia'
				];
				return view('ayat_hadist_ekonomi/detai_ayat_hadist', $data);
			} else
				return redirect()->to(base_url('/ayat-hadist-ekonomi'));
		}
		
	}
