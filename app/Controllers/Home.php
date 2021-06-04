<?php

namespace App\Controllers;

use App\Models\IndexAyatMasterKlasifikasiModel;

class Home extends BaseController
{
	public function index()
	{
		$masterKlasifikasiModel = new IndexAyatMasterKlasifikasiModel();
		$data = [
			'index_ayat_master_klasifikasi' => $masterKlasifikasiModel->get()->getResult(),
			'title' => 'Quran Tazkia'
		];

		return view('home/index', $data);
	}

	//--------------------------------------------------------------------

}
