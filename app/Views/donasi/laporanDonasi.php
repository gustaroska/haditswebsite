<?= $this->extend('layout/main_layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
     <div class="header mt-5">
          <h1>Laporan Dana Donasi</h1>
          <div class="devider mb-5"></div>
     </div>
     <div class="main-content">
          <p>Bismillahirrahmanirrahim. Assalamualaikum warahmatullah wa barakatuh<br>berikut kami laporkan penggunaan dana donasi untuk quran tazkia</p>
          <div class="embed-responsive embed-responsive-16by9 mt-5">
               <iframe class="embed-responsive-item" src="https://docs.google.com/spreadsheets/d/1qCDJB1g2xZG4HsbnaJIzm1zb0JD0WdxHdTdlpXJ2_e0/edit?usp=sharing"></iframe>
          </div>
     </div>
</div>
<?= $this->endSection(); ?>