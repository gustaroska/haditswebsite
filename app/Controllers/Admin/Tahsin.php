<?php
	
	namespace App\Controllers\Admin;
	
	use App\Controllers\BaseController;
	
	class Tahsin extends BaseController
	{
		public function index()
		{
			$data = [
				'users' => $this->userModel->getUser(session("id")),
				'tahsins' => $this->tahsinModel->getTahsin(),
				'title' => 'Tahsin | Quran Tazkia'
			];
			return view('admin/tahsin', $data);
		}
		
		public function add()
		{
			$data = [
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Add Data Tahsin | Quran Tazkia'
			];
			return view('admin/tahsin_add', $data);
		}
		
		
		public function edit($id = null)
		{
			$detail = $this->tahsinModel->getData($id);
			$ayat = explode(":", $detail->ayat_id);
			$data = [
				'detail' => $detail,
				'ayat' => $ayat[1],
				'chapter' => $this->chapterModel->find($ayat[0]),
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Edit Data Tahsin | Quran Tazkia'
			];
			return view('admin/tahsin_edit', $data);
		}
		
		public function save($ayat_id = false)
		{
			$post = $this->request->getPost();
			$ayatid = $ayat_id == false ? $post["chapter_id"] . ":" . $post['ayat'] : $ayat_id;
			$check = $this->tahsinModel->getData($ayatid);
			$users = $this->userModel->getUser(session("id"));
			if ($check == null) {
				$data = [
					'user_id' => session("id"),
					'ayat_id' => $ayatid,
					'link_youtube' => $post['link_youtube'],
					'content' => $post['content']
				];
				$user = $this->tahsinModel->insert($data, false);
				$user = $user->resultID;
				// insert log
				$this->logModel->insert(
					[
						'action' => "Menambah tahsin baru pada kode ayat $ayatid oleh " . $users[0]->name,
						'created_at' => now('Asia/Jakarta'),
						'user_id' => session('id')
					]);
				
			} else {
				$user = $this->tahsinModel->update($ayatid, [
					'user_id' => session("id"),
					'link_youtube' => $post['link_youtube'],
					'content' => $post['content']
				]);
				// insert log
				$this->logModel->insert(
					[
						'action' => "Mensunting tahsin baru pada kode ayat $ayatid oleh " . $users[0]->name,
						'created_at' => now('Asia/Jakarta'),
						'user_id' => session('id')
					]);
			}
			session()->setFlashdata('info', $user ? "Berhasil simpan " : "Gagal simpan ");
			return redirect()->to("/tahsin");
		}
		
		//--------------------------------------------------------------------
		
	}
