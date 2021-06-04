<?php
	
	namespace App\Controllers\Admin;
	
	use App\Controllers\BaseController;
	
	class AyatHadist extends BaseController
	{
		public function index()
		{
			$data = [
				'ayatHadits' => $this->ayatHaditsModel->getAyatHadits(),
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Ayat Hadist Ekonomi | Quran Tazkia'
			];
			return view('admin/ayat_hadist', $data);
		}
		
		public function add()
		{
			$data = [
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Add Ayat Hadist Ekonomi | Quran Tazkia'
			];
			return view('admin/ayat_hadist_add', $data);
		}
		
		public function edit($id = null)
		{
			$data = [
				'detail' => $this->ayatHaditsModel->getAyatHadits($id),
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Edit Ayat Hadist Ekonomi | Quran Tazkia'
			];
			return view('admin/ayat_hadist_edit', $data);
		}
		
		public function save($id = false)
		{
			$post = $this->request->getPost();
			$users = $this->userModel->getUser(session("id"));
			if (!$id) {
				$data = [
					'user_id' => session("id"),
					'content' => $post['content'],
					'title' => $post['title']
				];
				
				$user = $this->ayatHaditsModel->insert($data, false);
				$user = $user->resultID;
				// insert log
				$this->logModel->insert(
					[
						'action' => "Menambah ayat hadits berjudul $post[title] baru oleh " . $users[0]->name,
						'created_at' => now('Asia/Jakarta'),
						'user_id' => session('id')
					]);
			} else {
				$ayat_hadits = $this->ayatHaditsModel->getAyatHadits($id);
				$user = $this->ayatHaditsModel->update($id, [
					'user_id' => session("id"),
					'content' => $post['content'],
					'title' => $post['title']
				]);
				// insert log
				$this->logModel->insert(
					[
						'action' => "Mensunting ayat hadits judul  $ayat_hadits->title oleh " . $users[0]->name,
						'created_at' => now('Asia/Jakarta'),
						'user_id' => session('id')
					]);
				
			}
			
			session()->setFlashdata('info', $user ? "Berhasil simpan " : "Gagal simpan ");
			return redirect()->to("/ayat-hadist");
		}
		
		//--------------------------------------------------------------------
		
	}
