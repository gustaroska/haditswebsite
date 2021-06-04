<?php
	
	
	namespace App\Controllers;
	
	use AlQuranCloud\Tools\Parser\Tajweed;
	use App\Models\AyatHaditsModel;
	use App\Models\ChapterModel;
	use App\Models\LogModel;
	use App\Models\TafsirModel;
	use App\Models\TahsinModel;
	use App\Models\TathbiqModel;
	use App\Models\UserModel;
	use CodeIgniter\RESTful\ResourceController;
	use GuzzleHttp\Client;
	
	class Api extends ResourceController
	{
		protected TafsirModel $tafsirModel;
		protected TathbiqModel $tathbiqModel;
		protected TahsinModel $tahsinModel;
		protected AyatHaditsModel $ayathaditsModel;
		protected ChapterModel $chapterModel;
		protected LogModel $logModel;
		protected UserModel $usersModel;
		
		public function __construct()
		{
			helper('date');
			$this->tathbiqModel = new TathbiqModel();
			$this->chapterModel = new ChapterModel();
			$this->logModel = new LogModel();
			$this->usersModel = new UserModel();
			$this->ayathaditsModel = new AyatHaditsModel();
			$this->tafsirModel = new TafsirModel();
			$this->tahsinModel = new TahsinModel();
		}
		
		// Get Tajweed from quran cloud
		function get_tadweed($id = NULL)
		{
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://api.alquran.cloud/ayah/' . $id . '/quran-tajweed',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'GET'
			));
			$response = curl_exec($curl);
			$response = json_decode($response);
			$parser = new Tajweed();
			$html = $parser->parse($response->data->text);
			return $this->respond(
				["data" => $html], 200);
		}
		
		// Tathbiq
		public function get_tatbhiq($ayat_id = null)
		{
			$user = $this->tathbiqModel->getData($ayat_id);
			if ($user !== null)
				return $this->respond(["message" => $user], 200);
			else
				return $this->respond(["message" => "not found"], 200);
		}
		
		// Tathbiq
		public function get_tahsin($ayat_id = null)
		{
			$user = $this->tahsinModel->getData($ayat_id);
			if ($user !== null)
				return $this->respond(["message" => $user], 200);
			else
				return $this->respond(["message" => "not found"], 200);
		}
		
		public function get_ayat_hadits($id = null)
		{
			$user = $this->ayathaditsModel->getData($id);
			if ($user !== null)
				return $this->respond(["message" => $user], 200);
			else
				return $this->respond(["message" => "not found"], 200);
		}
		
		public function ajax_user_action()
		{
			$post = $this->request->getJSON();
			$check = $this->usersModel->set_action($post->user_id, $post->action);
			return $this->respond(["message" => $check], 200);
		}
		
		public function ajax_list_users()
		{
			$where = [];
			$column_order = array('name', 'is_admin', 'status');
			$column_search = array('name');
			$order = array('name' => 'ASC');
			$list = $this->usersModel->get_datatables('users', $column_order, $column_search, $order, $where);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $lists) {
				$no++;
				$row = array();
				$checked_admin = $lists->is_admin == "true" ? "checked" : "";
				$checked_status = $lists->status == "true" ? "checked" : "";
				$set_admin = '
				<div class="custom-switch mr-4">
				      <input type="checkbox" name="is_admin"
				      		 class="custom-control-input" id="admin_' . $lists->id . '"
				      		 value="' . $lists->id . '" ' . $checked_admin . '
				      		 onchange="setAction(event)">
				      <label class="custom-control-label" for="admin_' . $lists->id . '">Set Admin</label>
				</div>';
				$set_status = '
				<div class="custom-switch mr-4">
	               <input type="checkbox" name="status"
	               	  	  class="custom-control-input" id="status_' . $lists->id . '"
	               	  	  value="' . $lists->id . '" ' . $checked_status . '
	               	  	  onchange="setAction(event)">
	               <label class="custom-control-label" for="status_' . $lists->id . '">Set Status</label>
	            </div>';
				$row[] = $lists->name;
				$row[] = $lists->email;
				$row[] = $set_admin;
				$row[] = $set_status;
				$data[] = $row;
			}
			$countFiltered = ($_POST['search']['value']) ? count($data) : $this->usersModel->count_all('users', $where);
			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->usersModel->count_all('users', $where),
				"recordsFiltered" => $countFiltered,
				"data" => $data,
			);
			echo json_encode($output);
		}
		
		public function ajax_list_logs()
		{
			$where = [];
			$column_order = array('waktu', 'name', 'action');
			$column_search = array('action', 'name');
			$order = array('waktu' => 'ASC');
			$list = $this->logModel->get_datatables('logs', $column_order, $column_search, $order, $where);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $lists) {
				$no++;
				$row = array();
				$row[] = $lists->waktu;
				$row[] = $lists->name;
				$row[] = $lists->action;
				$data[] = $row;
			}
			$countFiltered = ($_POST['search']['value']) ? count($data) : $this->logModel->count_all('logs', $where);
			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->logModel->count_all('logs', $where),
				"recordsFiltered" => $countFiltered,
				"data" => $data,
			);
			echo json_encode($output);
		}
		
		public function ajax_list_tafsir()
		{
			$where = [];
			$column_order = array('name_complex', 'tafsir_resource.name', 'users.name');
			$column_search = array('name_complex', 'tafsir_resource.name', 'users.name');
			$order = array('name_complex' => 'ASC');
			$list = $this->tafsirModel->get_datatables('tafsir', $column_order, $column_search, $order, $where);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $lists) {
				$no++;
				$view = '<a href="' . base_url('tafsir/edit') . "/" . $lists->id_tafsir . '" class="badge badge-1">Edit</a>';
				$row = array();
				$ayat = explode(":", $lists->ayat_id);
				$row[] = $lists->chapter_name . " : $ayat[1]";
				$row[] = $lists->user_name;
				$row[] = $lists->tafsir_resource_name;
				$row[] = $view;
				$data[] = $row;
			}
			$countFiltered = ($_POST['search']['value']) ? count($data) : $this->tafsirModel->count_all('tafsir', $where);
			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->tafsirModel->count_all('tafsir', $where),
				"recordsFiltered" => $countFiltered,
				"data" => $data,
			);
			echo json_encode($output);
		}
		
		public function ajax_list_tafsir_resources()
		{
			return $this->respond(array("tafsir_resources" => $this->tafsirModel->getTafsirResources()), 200);
		}
		
		public function ajax_list_tafsir_by_resource($ayat_id = null, $tafsir_resource_id = null)
		{
			return $this->respond(array("tafsir_resource" => $this->tafsirModel->getTafsirByResource($ayat_id, $tafsir_resource_id)), 200);
		}
		
		public function ajax_get_tafsir($id = false, $tafsir_resource_id = false)
		{
			if ($tafsir_resource_id < 4)
				return $this->respond($this->tafsirModel->getTafsir($id, $tafsir_resource_id), 200);
			
			else {
				$curl = curl_init();
				curl_setopt_array($curl, array(
					CURLOPT_URL => "https://api.quran.com/api/v4/quran/tafsirs/$tafsir_resource_id?verse_key=$id&fields=language_name",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "GET",
					CURLOPT_POSTFIELDS => "{}",
				));
				
				$response = curl_exec($curl);
				$err = curl_error($curl);
				
				curl_close($curl);
				
				if ($err) {
					echo "cURL Error #:" . $err;
				} else {
					
					$data = json_decode($response);
					$data = [
						"tafsir_resource_id" => $data->tafsirs[0]->resource_id,
						"ayat_id" => $data->tafsirs[0]->resource_id,
						"content" => $data->tafsirs[0]->text,
						"name" => $data->meta->tafsir_name . " - " . $data->tafsirs[0]->language_name,
						"author_name" => $data->meta->author_name
					];
					return $this->respond([$data], 200);
				}
			}
		}
		
		public function save_tafsir()
		{
			$post = $this->request->getJSON();
			$users = $this->usersModel->getUser(session("id"));
			if (isset($post->ayat_id)) {
				$data = [
					'user_id' => session("id"),
					'ayat_id' => $post->ayat_id,
					'tafsir_resource_id' => $post->tafsir_resource_id,
					'content' => $post->content
				];
				try {
					$user = $this->tafsirModel->insert(
						$data, false);
					// insert log
					$this->logModel->insert(
						[
							'action' => "Menambah tafsir $post->log baru oleh " . $users[0]->name,
							'created_at' => now('Asia/Jakarta'),
							'user_id' => session('id')
						]);
				} catch (\ReflectionException $e) {
					return $this->respond(["message" => $e], 200);
				}
			} else
				try {
					$user = $this->tafsirModel->update($post->id, [
						'user_id' => session("id"),
						'content' => $post->content
					]);
					// insert log
					$this->logModel->insert(
						[
							'action' => "Mensunting ayat hadits $post->log oleh " . $users[0]->name,
							'created_at' => now('Asia/Jakarta'),
							'user_id' => session('id')
						]);
				} catch (\ReflectionException $e) {
					return $this->respond(["message" => $e], 200);
				}
			
			if ($user)
				return $this->respond(["message" => "success", "status" => $user], 200);
			else
				return $this->respond(["message" => "failed", "status" => $user], 200);
		}
		
		
		/**
		 * @throws \ReflectionException
		 */
		function sycn_chapter()
		{
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://api.quran.com/api/v4/chapters?language=id',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'GET',
			));
			$response = curl_exec($curl);
			curl_close($curl);
			foreach (json_decode($response)->chapters as $row) {
				$data = [
					"id" => $row->id,
					"revelation_place" => $row->revelation_place,
					"bismillah_pre" => $row->bismillah_pre,
					"name_complex" => $row->name_simple,
					"name_arabic" => $row->name_arabic,
					"verses_count" => $row->verses_count,
					"translated_name" => $row->translated_name->name,
				];
				$this->chapterModel->save($data);
			}
		}
		
	}