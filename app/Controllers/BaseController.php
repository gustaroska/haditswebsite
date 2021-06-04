<?php
	
	namespace App\Controllers;
	
	/**
	 * Class BaseController
	 *
	 * BaseController provides a convenient place for loading components
	 * and performing functions that are needed by all your controllers.
	 * Extend this class in any new controllers:
	 *     class Home extends BaseController
	 *
	 * For security be sure to declare any new methods as protected or private.
	 *
	 * @package CodeIgniter
	 */
	
	use App\Models\AyatHaditsModel;
	use App\Models\ChapterModel;
	use App\Models\LogModel;
	use App\Models\TafsirModel;
	use App\Models\TahsinModel;
	use App\Models\TathbiqModel;
	use App\Models\UserModel;
	use CodeIgniter\Controller;
	
	class BaseController extends Controller
	{
		
		/**
		 * An array of helpers to be loaded automatically upon
		 * class instantiation. These helpers will be available
		 * to all other controllers that extend BaseController.
		 *
		 * @var array
		 */
		public $logModel, $tathbiqModel, $userModel, $ayatHaditsModel, $tafsirModel, $tahsinModel, $chapterModel;
		
		/**
		 * Constructor.
		 */
		public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
		{
			// Do Not Edit This Line
			parent::initController($request, $response, $logger);
			
			helper('date');
			$this->logModel = new LogModel();
			$this->userModel = new UserModel();
			$this->tathbiqModel = new TathbiqModel();
			$this->ayatHaditsModel = new AyatHaditsModel();
			$this->tafsirModel = new TafsirModel();
			$this->tahsinModel = new TahsinModel();
			$this->chapterModel = new ChapterModel();
			
			//--------------------------------------------------------------------
			// Preload any models, libraries, etc, here.
			//--------------------------------------------------------------------
			// E.g.:
			// $this->session = \Config\Services::session();
		}
		
	}
