<?php
	
	namespace App\Filters;
	
	use App\Models\UserModel;
	use CodeIgniter\Filters\FilterInterface;
	use CodeIgniter\HTTP\RequestInterface;
	
	class IsAdmin implements FilterInterface
	{
		
		/**
		 * @inheritDoc
		 */
		public function before(RequestInterface $request, $arguments = null)
		{
			$userModel = new UserModel();
			$user = $userModel->getUser(session("id"));
			if ($user == null) {
				return redirect()->to('/login');
			}
			
			if (!session('id') or $user[0]->status == "false") {
				return redirect()->to('/login');
			} else
				if ($user[0]->is_admin == "false")
					return redirect()->to('/dashboard');
		}
		
		/**
		 * @inheritDoc
		 */
		public function after(RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, $arguments = null)
		{
			// TODO: Implement after() method.
		}
	}