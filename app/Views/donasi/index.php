<?= $this->extend('layout/main_layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
     <div class="header mt-5">
          <h2>Terimakasi Telah Mendukung Kami</h2>
          <div class="devider mb-5"></div>
     </div>
     <div class="main-content">
          <p>Jazakumullahu khairan atas infaq yang telah diberikan.
               Infaq yang Bapak/Ibu/Saudari/i berikan sangat membantu kami dalam menjalankan program ini.
               Bagi Bapak/Ibu/Saudari/i yang ingin mensupport pengembangan dan pemeliharaan aplikasi Quran Tazkia dengan program 5T (Tahsin, Tahfidz, Tarjamah, Tafsir dan Tatbhiq) dapat menyalurkan infaqnya melalui rekening di bawah ini. </p>
          <div class="media my-4">
               <img src="<?= base_url(); ?>/img/bsm.png" class=" img-fluid mr-3" alt="bsm" width="90px">
               <div class="media-body">
                    <h5 class="mt-0">Bank syariah Mandiri</h5>
                    <p>No. Rek. 7016 161181<br>Atas Nama : UPZ Tazkia</p>
               </div>
          </div>
          <p>Konfirmasi Donasi via whatsapp ke nomor berikut <a href="https://wa.me/628567712914">+62 856 771 2914</a></p>
          <hr>
          <a href="<?= base_url(); ?>/donasi/laporan" class="btn btn-2 mt-5">Laporan Dana Donasi</a>
     </div>
</div>
<?= $this->endSection(); ?>