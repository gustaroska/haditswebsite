<?php
	
	namespace App\Controllers;
	
	use App\Libraries\GoogleApi;
    use CodeIgniter\HTTP\RedirectResponse;

	class Login extends BaseController
	{
		
		
		public function __construct()
		{
		}
		
		public function index(): string
		{
			$google_client = new GoogleApi();
			$data = [
				'get' => $google_client->getRedirectUri(),
				'url_login_google' => $google_client->createAuthUrl(),
				'title' => 'Login - Quran Tazkia'
			];
			
			return view('login/index', $data);
		}
		
		function callback_auth(): RedirectResponse
		{
			$google_client = new GoogleApi();
			if (isset($_GET["code"])) {
				$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
				if (!isset($token["error"])) {
					$data = $google_client->userInfo();
					if ($this->userModel->getUser($data->id) == null) {
						$this->userModel->insert([
							'id' => $data->id,
							'name' => $data->name,
							'email' => $data->email,
							'photo' => $data->picture,
						]);
						// insert log
						$this->logModel->insert(
							[
								'action' => "Mencoba login nama $data->name, user belum di aktifasi",
								'created_at' => now('Asia/Jakarta'),
								'user_id' => $data->id
							]);
						session()->setFlashdata("info", ACTIVATION_REQ);
						return redirect()->to(base_url() . '/login');
					} else {
						$user = $users = $this->userModel->getUserActive($data->id);
						if ($user != null) {
							$this->userModel->update($data->id, [
								'name' => $data->name,
								'email' => $data->email,
								'photo' => $data->picture,
							]);
							// insert log
							$this->logModel->insert(
								[
									'action' => "Berhasil login nama $data->name",
									'created_at' => now('Asia/Jakarta'),
									'user_id' => $data->id
								]);
							$user = $this->userModel->getUser($data->id)[0];
							session()->set([
								"id" => $user->id
							]);
							return redirect()->to(base_url() . '/dashboard');
						} else {
							// insert log
							$this->logModel->insert(
								[
									'action' => "Mencoba login nama $data->name, user belum di aktifasi",
									'created_at' => now('Asia/Jakarta'),
									'user_id' => $data->id
								]);
							session()->setFlashdata("info", ACTIVATION_REQ);
							return redirect()->to(base_url() . '/login');
						}
						
					}
				}
			}
		}
		
		function active($id): RedirectResponse
		{
			$this->userModel->update($id, [
				'status' => 'active'
			]);
			return redirect()->to(base_url() . '/login');
		}
		
		function logout(): RedirectResponse
		{
			$users = $this->userModel->getUser(session("id"));
			// insert log
			$this->logModel->insert(
				[
					'action' => "Logout nama " . $users[0]->name,
					'created_at' => now('Asia/Jakarta'),
					'user_id' => session()->get("id")
				]);
			session()->destroy();
			return redirect()->to(base_url());
		}
		//--------------------------------------------------------------------
		
	}
