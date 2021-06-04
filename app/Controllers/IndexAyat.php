<?php
	
	namespace App\Controllers;
	
	use App\Models\IndexAyatMasterKlasifikasiModel;
	use App\Models\IndexAyatModel;
	
	class IndexAyat extends BaseController
	{
		public function index($id)
		{
			$indexAyatiModel = new IndexAyatModel();
			$indexAyatMasterKlasifikasiModel = new IndexAyatMasterKlasifikasiModel();
			$data = [
				'index_master' => $indexAyatMasterKlasifikasiModel->find($id),
				'index_ayat' => $indexAyatiModel->where('id_master', $id)->get()->getResult(),
				'title' => 'Index Klasifikasi Ayat'
			];
			return view('index_ayat/detail', $data);
		}
		
		//--------------------------------------------------------------------
		
	}
