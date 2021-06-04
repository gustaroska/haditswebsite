<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Quran Online Tazkia">
    <meta name="author" content="Institut Tazkia">
    <meta name="keywords" content="Quran, quran online, institut tazkia, ekonomi syariah">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <!-- datatables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    <!-- My style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/adminstyle.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/tajwid.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <!-- ckeditor -->
    <title><?= $title; ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQES4NDF1Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XQES4NDF1Z');
    </script>
</head>

<body>
<div>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <a class="logout" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </header>
    <aside>
        <div class="header">
            <a href="<?= base_url(); ?>">QURAN TAZKIA</a>
            <label for="check">
                <i class="far fa-times-circle"></i>
            </label>
        </div>
        <div class="profil-name">
            <img class="profil-photo" src="<?= $users[0]->photo ?>" alt="photo profil"/>
            <h3>Selamat Datang</h3>
            <p><?= $users[0]->name ?></p>
            <p><?= $users[0]->email ?></p>
        </div>
        <div class="menu">
            <a href="<?= base_url(); ?>/dashboard"><i class="fas fa-home"></i>Home</a>
            <a href="<?= base_url(); ?>/tahsin"><i class="fab fa-readme"></i>Tahsin & Tajwid</a>
            <a href="<?= base_url(); ?>/tafsir"><i class="fas fa-book"></i>Daftar Tafsir</a>
            <a href="<?= base_url(); ?>/tatbhiq"><i class="fas fa-book-reader"></i>Daftar Tatbhiq</a>
            <a href="<?= base_url(); ?>/ayat-hadist"><i class="fas fa-list"></i>Ayat Hadist Ekonomi</a>
			<?php
				if ($users[0]->is_admin == "true")
					echo '<a href="' . base_url() . '/users"><i class="fas fa-users-cog"></i>User Management</a>';
			?>
            <a href="<?= base_url(); ?>/history"><i class="fas fa-history"></i>Log History</a>
        </div>
    </aside>
    <main>
		<?= $this->renderSection('content'); ?>
    </main>
    <footer>
        <hr>
        <p class="text-muted text-center my-5">Copyright © 2021 Qur’an Tazkia. All Right Reserved</p>
    </footer>
</div>
<!--<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="https://cdn.tiny.cloud/1/77tdt0x0uleku7wwfcqg55aapm2mqwdrv1bspyi3o1gk1ky5/tinymce/5/tinymce.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js"></script>
<script data-main="<?= base_url(); ?>/js/script"
        src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>

</body>

</html>