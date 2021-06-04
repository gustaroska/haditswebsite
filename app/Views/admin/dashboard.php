<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>

<div class="row justify-content-center text-center">
    <div class="col-lg-6 mt-5">
        <h1>Selamat Datang Admin</h1>
        <p>di Dashboard admin web quran.tazkia.ac.id</p>
        <a href="https://analytics.google.com/" class="btn btn-4 mt-2">Lihat Data Google Analytic</a>
        <div>
            <a href="<?= base_url(); ?>" class="btn btn-4 mt-2">Go To Home</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>