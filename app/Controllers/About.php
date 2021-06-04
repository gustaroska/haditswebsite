<?php

namespace App\Controllers;

class About extends BaseController
{
     public function index()
     {
          $data = [
               'title' => 'About - Quran Tazkia'
          ];

          return view('about/index', $data);
     }

     //--------------------------------------------------------------------

}
