<?php

namespace App\Controllers;

class Donasi extends BaseController
{
     public function index()
     {
          $data = [
               'title' => 'Donasi - Quran Tazkia'
          ];

          return view('donasi/index', $data);
     }

     public function laporan()
     {
          $data = [
               'title' => 'Laporan Donasi - Quran Tazkia'
          ];

          return view('donasi/laporanDonasi', $data);
     }

     //--------------------------------------------------------------------

}
