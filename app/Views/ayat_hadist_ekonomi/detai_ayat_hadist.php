<?= $this->extend('layout/main_layout'); ?>
<?= $this->section('content'); ?>

    <div class="container">
        <div class="header mt-5">
            <h2><?= $detail->title ?></h2>
            <div class="devider mb-5"></div>
        </div>
        <div class="main-content"><?= $detail->content ?></div>
    </div>
<?= $this->endSection(); ?>