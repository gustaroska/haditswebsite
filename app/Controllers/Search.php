<?php
	
	namespace App\Controllers;
	
	use GuzzleHttp\RequestOptions;
	use PHPHtmlParser\Dom;
	use GuzzleHttp\Client as GuzzleClient;
	
	class Search extends BaseController
	{
		
		/**
		 * @var \App\Controllers\GuzzleClient
		 */
		private GuzzleClient $httpClient;
		
		public function __construct()
		{
			$this->httpClient = new GuzzleClient();
		}
		
		public function index()
		{
			
			$data = [
				'title' => 'Search - Quran Tazkia'
			];
			
			return view('search/index', $data);
		}
		
		/**
		 * @throws \PHPHtmlParser\Exceptions\ChildNotFoundException
		 * @throws \PHPHtmlParser\Exceptions\NotLoadedException
		 * @throws \PHPHtmlParser\Exceptions\ContentLengthException
		 * @throws \PHPHtmlParser\Exceptions\CircularException
		 * @throws \PHPHtmlParser\Exceptions\LogicalException
		 * @throws \PHPHtmlParser\Exceptions\StrictException
		 * @throws \Psr\Http\Client\ClientExceptionInterface
		 */
		function search()
		{
			$query = $this->request->getGet('query');
			$page = $this->request->getGet('page');
			$res = $this->httpClient->get("https://quran.com/search?&language=id&translation=0&query=$query&page=$page");
			$dom = new Dom;
			$dom->loadStr($res->getBody());
			$jump_to = $dom->find('.space-b-24');
			$results = $dom->find('.search-item');
			$data = [
				'jump_to' => $jump_to->find('a'),
				'results' => $results,
				'title' => 'Search - Quran Tazkia'
			];
			return view('search/index', $data);
			
		}
		
		//--------------------------------------------------------------------
		
	}
