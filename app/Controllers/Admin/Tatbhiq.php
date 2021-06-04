<?php
	
	namespace App\Controllers\Admin;
	
	use App\Controllers\BaseController;
	
	class Tatbhiq extends BaseController
	{
		public function index()
		{
			$data = [
				'tathbiqs' => $this->tathbiqModel->getTathiq(),
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Tatbhiq | Quran Tazkia'
			];
			return view('admin/tatbhiq', $data);
		}
		
		
		public function add()
		{
			$data = [
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Add Data Tatbhiq | Quran Tazkia'
			];
			return view('admin/tatbhiq_add', $data);
		}
		
		public function edit($ayat_id = null)
		{
			$user = $this->tathbiqModel->getData($ayat_id);
			if ($user == null) {
				return redirect()->to(base_url('/tatbhiq/add'));
			} else {
				$data = [
					'detail' => $user,
					'users' => $this->userModel->getUser(session("id")),
					'ayat_id' => $ayat_id,
					'title' => 'Edit Data Tatbhiq | Quran Tazkia'
				];
				return view('admin/tatbhiq_edit', $data);
			}
		}
		
		public function save($ayat_id = false)
		{
			$post = $this->request->getPost();
			$ayatid = $ayat_id == false ? $post["chapter_id"] . ":" . $post['ayat'] : $ayat_id;
			$check = $this->tathbiqModel->getData($ayatid);
			$users = $this->userModel->getUser(session("id"));
			if ($check == null) {
				$data = [
					'user_id' => session("id"),
					'ayat_id' => $ayatid,
					'content' => $post['content']
				];
				$user = $this->tathbiqModel->insert($data, false);
				$user = $user->resultID;
				// insert log
				$this->logModel->insert(
					[
						'action' => "Menambah tathbiq baru pada kode ayat $ayatid oleh " . $users[0]->name,
						'created_at' => now('Asia/Jakarta'),
						'user_id' => session('id')
					]);
			} else {
				$user = $this->tathbiqModel->update($ayatid, [
					'user_id' => session("id"),
					'content' => $post['content']
				]);
				
				// insert log
				$this->logModel->insert(
					[
						'action' => "Mensunting tathbiq baru pada kode ayat $ayatid oleh " . $users[0]->name,
						'created_at' => now('Asia/Jakarta'),
						'user_id' => session('id')
					]);
			}
			session()->setFlashdata('info', $user ? "Berhasil simpan " : "Gagal simpan ");
			return redirect()->to("/tatbhiq");
		}
		
	}
