<?php
	
	namespace App\Controllers\Admin;
	
	use App\Controllers\BaseController;
	
	class Tafsir extends BaseController
	{
		public function index()
		{
			$data = [
				'tafsifs' => $this->tafsirModel->getTafsirs(),
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Tafsir | Quran Tazkia'
			];
			return view('admin/tafsir', $data);
		}
		
		public function add()
		{
			$data = [
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Add Data Tafsir | Quran Tazkia'
			];
			return view('admin/tafsir_add', $data);
		}
		
		public function edit($id = null)
		{
			$detail = $this->tafsirModel->getTafsir($id);
			//dd($detail);
			$ayat = explode(":", $detail[0]->ayat_id);
			$data = [
				'detail' => $detail[0],
				'ayat' => $ayat[1],
				'chapter' => $this->chapterModel->find($ayat[0]),
				'tafsir_resource' => $this->tafsirModel->getTafsirResource($detail[0]->tafsir_resource_id),
				'users' => $this->userModel->getUser(session("id")),
				'title' => 'Edit Data Tafsir | Quran Tazkia'
			];
			return view('admin/tafsir_edit', $data);
		}
		
		public function save($id = false)
		{
			$post = $this->request->getPost();
			$check = null;
			$ayat_id = null;
			if (isset($post["chapter_id"])) {
				$ayat_id = $post["chapter_id"] . ":" . $post['ayat'];
				$check = $this->tafsirModel->getTafsir($ayat_id, $post['tafsir_resource_id']);
			}
			$users = $this->userModel->getUser(session("id"));
			if ($check == null and $id == false) {
				$data = [
					'user_id' => session("id"),
					'ayat_id' => $ayat_id,
					'tafsir_resource_id' => $post['tafsir_resource_id'],
					'content' => $post['content']
				];
				$user = $this->tafsirModel->insert($data, false);
				$user = $user->resultID;
				// insert log
				$log = $ayat_id;
				$this->logModel->insert([
					'action' => "Menambah tafsir $log baru oleh " . $users[0]->name,
					'created_at' => now('Asia/Jakarta'),
					'user_id' => session('id')
				]);
			} else {
				if (!$id) {
					session()->setFlashdata('info', "Tidak bisa menambah tasfir baru, karena sudah ada");
					return redirect()->to("/tafsir");
				}
				$user = $this->tafsirModel->save([
					'id' => $id,
					'user_id' => session("id"),
					'content' => $post['content']
				]);
				// insert log
				$this->logModel->insert(
					[
						'action' => "Mensunting tafsir $post[log] oleh " . $users[0]->name,
						'created_at' => now('Asia/Jakarta'),
						'user_id' => session('id')
					]);
			}
			session()->setFlashdata('info', $user ? "Berhasil simpan " : "Gagal simpan ");
			return redirect()->to("/tafsir");
			
		}
		
		//--------------------------------------------------------------------
		
	}
