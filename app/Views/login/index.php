<?= $this->extend('layout/clear_layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="login">
        <div class="header text-center mb-4">
            <a href="<?= base_url(); ?>"><img class="img-fluid" src="<?= base_url(); ?>/img/qurankarim.svg" alt=""></a>
            <a href="<?= base_url(); ?>">
                <h3>Quran Tazkia</h3>
            </a>
            <small>Selamat datang di portal login Quran Tazkia (khusus admin tim Quran Tazkia)</small>
        </div>
        <?php
        if (session()->__isset('info')) {
            echo '<div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>' . session()->getFlashdata("info") . '</div>';
        }
        ?>
        <a href="<?= $url_login_google; ?>" class="btn btn-3 btn-block mb-5"><i class="fab fa-google mr-2"></i>LOGIN
            WITH GOOGLE</a>
        <div class="footer">
            <hr>
            <small>Copyright © 2021 Qur’an Tazkia. All Right Reserved.</small>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>