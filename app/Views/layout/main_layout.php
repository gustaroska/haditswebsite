<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Quran Online Tazkia">
    <meta name="author" content="Institut Tazkia">
    <meta name="keywords" content="Quran, quran online, institut tazkia, ekonomi">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- datatables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.2/css/fixedColumns.bootstrap4.min.css">
    <!-- My style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/mainstyle.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />
    <title><?= $title; ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQES4NDF1Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-XQES4NDF1Z');
    </script>
</head>

<body>
    <div>
        <nav class="navbar sticky-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url(); ?>">QURAN TAZKIA</a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link" href="<?= base_url(); ?>/about">About</a>
                        <a class="nav-link" href="<?= base_url(); ?>/donasi">Donasi</a>
                        <a class="nav-link" href="<?= base_url(); ?>/panduan-tajwid">Panduan Tajwid</a>
                        <a class="nav-link" href="<?= base_url(); ?>/ayat-hadist-ekonomi">Ayat Hadist Ekonomi</a>
                        <?php
                        if (session()->__isset('id'))
                            echo '<a class="btn btn-1 px-4" href="' . base_url() . '/dashboard" tabindex="-1"
                       aria-disabled="true">Dashboard</a>';
                        else
                            echo '<a class="btn btn-1 px-4" href="' . base_url() . '/login" tabindex="-1"
                       aria-disabled="true">Login</a>';
                        ?>
                    </div>
                </div>
            </div>
        </nav>
        <?= $this->renderSection('content'); ?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 brand">
                        <a href="<?= base_url(); ?>">
                            <h2>QURAN TAZKIA</h2>
                        </a>
                        <p>PROGRAM QURAN 5T (TAHSIN, TAHFIDZ, TARJAMAH, TAFSIR, TATHBIQ)</p>
                        <div class="sosial-icon">
                            <a href="#"><img src="<?= base_url(); ?>/img/fb.svg" alt=""></a>
                            <a href="https://www.youtube.com/channel/UCRSRWQlKaI9OADmTG9_l7Tg"><img src="<?= base_url(); ?>/img/yt.svg" alt=""></a>
                            <a href="https://www.instagram.com/qurantazkia/"><img src="<?= base_url(); ?>/img/ig.svg" alt=""></a>
                            <a href="#"><img src="<?= base_url(); ?>/img/in.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 quick-link">
                        <h4 class="mb-4">Quick Link</h4>
                        <a href="<?= base_url(); ?>/about">About Us</a>
                        <a href="<?= base_url(); ?>/donasi">Info Donasi</a>
                        <a href="<?= base_url(); ?>/panduan-tajwid">Panduan Tajwid</a>
                        <a href="<?= base_url(); ?>/ayat-hadist-ekonomi">Ayat Hadist Ekonomi</a>
                    </div>
                    <div class="col-lg-4 col-md-6 contact">
                        <h4 class="mb-4">Contact Us</h4>
                        <table>
                            <tr>
                                <td><i class="fas fa-map-marker-alt mr-3"></i></td>
                                <td>
                                    <a href="https://www.google.com/maps/place/STEI+Tazkia/@-6.5679603,106.8466874,16z/data=!4m5!3m4!1s0x0:0xc5ab7788a51fc54b!8m2!3d-6.569154!4d106.84702">Jl.
                                        Ir. H. Djuanda No. 78 Sentul City, Bogor 16810
                                        Indonesia</a>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-square-alt"></i></td>
                                <td>(021) 87962291-93</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-whatsapp-square"></i></td>
                                <td><a href="https://wa.me/628567712914">+62 856-7712-914</a></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope"></i></td>
                                <td><a href="mailto:quran@tazkia.ac.id">quran@tazkia.ac.id</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
                <p class="text-center copyright">Copyright © 2021 Qur’an Tazkia. All Right Reserved.</p>
            </div>
        </footer>
    </div>

    <!--<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>
    <script data-main="<?= base_url(); ?>/js/script" src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
</body>

</html>