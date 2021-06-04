<?php
	
	namespace App\Filters;
	
	use App\Models\UserModel;
	use CodeIgniter\Filters\FilterInterface;
	
	class Auth implements FilterInterface
	{
		
		/**
		 * @inheritDoc
		 */
		public function before(\CodeIgniter\HTTP\RequestInterface $request, $arguments = null)
		{
			$userModel = new UserModel();
			$user = $userModel->getUser(session("id"));
			if ($user == null)
				return redirect()->to('/login');
			if (!session('id') or $user[0]->status == "false")
				return redirect()->to('/login');
		}
		
		/**
		 * @inheritDoc
		 */
		public function after(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, $arguments = null)
		{
			// TODO: Implement after() method.
		}
	}