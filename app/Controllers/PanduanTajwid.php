<?php

namespace App\Controllers;

class PanduanTajwid extends BaseController
{
     public function index()
     {
          $data = [
               'title' => 'Panduan Tajwid - Quran Tazkia'
          ];

          return view('tajwid/index', $data);
     }

     //--------------------------------------------------------------------

}
