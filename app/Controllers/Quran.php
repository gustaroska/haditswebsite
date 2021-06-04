<?php
	
	namespace App\Controllers;
	
	class Quran extends BaseController
	{
		public function index($chapter, $verse = false)
		{
			$data = [
				'next' => $chapter == 114 ? false : $chapter + 1,
				'prev' => $chapter == 1 ? false : $chapter - 1,
				'chapter_id' => $chapter,
				'verse_num' => $verse,
				'title' => 'Quran Tazkia'
			];
			
			return view('quran/index', $data);
		}
		//--------------------------------------------------------------------
		
	}
