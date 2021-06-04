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
    <!-- My style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/quranstyle.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/css/tajwid.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <title><?= $title; ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
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
<div id="quran">
    <input type="checkbox" id="check" class="d-none">

    <nav class="navbar sticky-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand mr-5" href="<?= base_url(); ?>">QURAN TAZKIA</a>
            <div class="mr-auto navigasi-ayat">
                <div class="btn-group">
                    <button type="button" class="btn btn-3 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        {{ chapter.name_simple }}
                    </button>
                    <div class="dropdown-menu surat">
                        <input class="form-control" id="searchSurat" type="text" placeholder="Search.."
                               autocomplete="off" autofocus>
                        <a class="dropdown-item" v-bind:href="'/'+chapter.id" v-for="chapter in chapters"
                           :key="chapter.id">
                            <div class="row">
                                <div class="col-7 latin">
                                    <h6>{{ chapter.name_simple }}</h6>
                                    <p>{{chapter.translated_name.name}}</p>
                                </div>
                                <div class="col-5 textarab">
                                    <p>{{chapter.name_arabic}}ْ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="btn-group">
                    <button id="ayat_ke" type="button" class="btn btn-3 dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Ayat {{toayatke}}
                    </button>
                    <div class="dropdown-menu ayat">
                        <input class="form-control" id="searchAyat" type="text" placeholder="Search.."
                               autocomplete="off">
                        <a class="dropdown-item py-2" v-on:click="goToVerse(ayat)" v-for="ayat in ayatke">Ayat
                            {{ayat}}</a>
                    </div>
                </div>
            </div>
            <label for="check" class="btn btn-1">
                <i class="fas fa-sliders-h"></i><span class="ml-2">Setting
                    </span>
            </label>
        </div>
    </nav>

    <aside>
        <div class="header">
            <label for="check">
                <i class="far fa-times-circle"></i>
            </label>
            <h5>PENGATURAN</h5>
            <hr>
        </div>
        <div id="setting">
            <div class="card mt-2">
                <div class="card-header" id="tafsir">
                    <h2 class="mb-0">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#pilihtafsir"
                                aria-expanded="false" aria-controls="pilihtafsir">
                            Pilihh Tafsir
                        </button>
                    </h2>
                </div>
                <div id="pilihtafsir" class="collapse" aria-labelledby="tafsir" data-parent="#setting">
                    <div class="card-body">
                        <h6>Indonesia</h6>
                        <hr>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir1"
                                   value="1" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir1">
                                Tafsir Ibnu Katsir
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir2"
                                   value="2" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir2">
                                Tafsir Muyassar
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir3"
                                   value="3" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir3">
                                Tafsir Jalalayn
                            </label>
                        </div>
                        <h6 class="mt-3">English</h6>
                        <hr>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir169"
                                   value="169" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir169">
                                Tafsir Ibn Kathir
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir171"
                                   value="171" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir171">
                                English Mokhtasar
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir168"
                                   value="168" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir168">
                                Maarif-ul-Quran
                            </label>
                        </div>
                        <h6 class="mt-3">Arabic</h6>
                        <hr>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir90"
                                   value="90" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir90">
                                Arabic Qurtubi Tafseer
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir91"
                                   value="91" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir91">
                                Arabic Saddi Tafseer
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir92"
                                   value="92" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir92">
                                Arabic Tanweer Tafseer
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir93"
                                   value="93" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir93">
                                Arabic Waseet Tafseer
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="tafsir_resource_id" id="tafsir94"
                                   value="94" v-on:click="setting($event)">
                            <label class="form-check-label" for="tafsir94">
                                Arabic Baghawy Tafseer
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2" id="setting">
                <div class="card-header" id="qori">
                    <h2 class="mb-0">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#pilihqori"
                                aria-expanded="false" aria-controls="pilihqori">
                            Pilih Qori
                        </button>
                    </h2>
                </div>
                <div id="pilihqori" class="collapse" aria-labelledby="qori" data-parent="#setting">
                    <div class="card-body">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="recitation" id="recitation3" value="3"
                                   v-on:click="setting($event)">
                            <label class="form-check-label" for="recitation3">
                                Abdur-Rahman as-Sudais
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="recitation" id="recitation4" value="4"
                                   v-on:click="setting($event)">
                            <label class="form-check-label" for="recitation4">
                                Abu Bakr al-Shatri
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="recitation" id="recitation7" value="7"
                                   v-on:click="setting($event)">
                            <label class="form-check-label" for="recitation7">
                                Mishari Rashid al-`Afasy
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="recitation" id="recitation1" value="1"
                                   v-on:click="setting($event)">
                            <label class="form-check-label" for="recitation1">
                                Abdul Baset Abdul Samad (Mujawwad)
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="recitation" id="recitation2" value="2"
                                   v-on:click="setting($event)">
                            <label class="form-check-label" for="recitation2">
                                Abdul Baset Abdul Samad (Murattal)
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="recitation" id="recitation5" value="5"
                                   v-on:click="setting($event)">
                            <label class="form-check-label" for="recitation5">
                                Hani ar-Rifai
                            </label>
                        </div>
                        <!-- <div class="form-check mb-2">
							<input class="form-check-input" type="radio" name="recitation" id="recitation6" value="6" v-on:click="setting($event)">
							<label class="form-check-label" for="recitation6">
								Mahmoud Khalil Al-Husary (Muallim)
							</label>
						</div>
						<div class="form-check mb-2">
							<input class="form-check-input" type="radio" name="recitation" id="recitation12" value="12" v-on:click="setting($event)">
							<label class="form-check-label" for="recitation12">
								Mahmoud Khalil Al-Husary (Muallim)
							</label>
						</div> -->
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="recitation" id="recitation8" value="8"
                                   v-on:click="setting($event)">
                            <label class="form-check-label" for="recitation8">
                                Mohamed Siddiq al-Minshawi (Mujawwad)
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="recitation" id="recitation9" value="9"
                                   v-on:click="setting($event)">
                            <label class="form-check-label" for="recitation9">
                                Mohamed Siddiq al-Minshawi (Murattal)
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="recitation" id="recitation10" value="10"
                                   v-on:click="setting($event)">
                            <label class="form-check-label" for="recitation10">
                                Sa`ud ash-Shuraym
                            </label>
                        </div>
                        <!-- <div class="form-check mb-2">
							<input class="form-check-input" type="radio" name="recitation" id="recitation11" value="11" v-on:click="setting($event)">
							<label class="form-check-label" for="recitation11">
								Mohamed al-Tablawi
							</label>
						</div> -->
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header" id="bahasa">
                    <h2 class="mb-0">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#pilihbahasa"
                                aria-expanded="false" aria-controls="pilihbahasa">
                            Pilih Terjemah
                        </button>
                    </h2>
                </div>
                <div id="pilihbahasa" class="collapse" aria-labelledby="bahasa" data-parent="#setting">
                    <div class="card-body">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="translations" id="language33"
                                   value="33" v-on:change="setting($event)">
                            <label class="form-check-label" for="language33">
                                Indonesia ( Terjemah Kementrian Agama RI )
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="translations" id="language20"
                                   value="20" v-on:change="setting($event)">
                            <label class="form-check-label" for="language20">
                                English ( Saheeh International )
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="mt-5">Tampilan Hover Ayat</h6>
        <hr>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="tooltip" id="tooltiptid" value="t" lang="id"
                   v-on:click="setting($event)">
            <label class="form-check-label" for="tooltipt">Terjemahan (Indonesia)</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="tooltip" id="tooltipten" value="t" lang="en"
                   v-on:click="setting($event)">
            <label class="form-check-label" for="tooltipt">Terjemahan (English)</label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="tooltip" id="tooltiptr" value="tr"
                   v-on:click="setting($event)">
            <label class="form-check-label" for="tooltiptr">Transliterasi</label>
        </div>
        <hr class="mb-5">
    </aside>
	<?= $this->renderSection('content'); ?>
    <div class="custom-shadow bg-white fixed-bottom" style="display: none">
        <audio id="ayat_player" controls src=""></audio>
    </div>

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
                        <a href="https://www.youtube.com/channel/UCRSRWQlKaI9OADmTG9_l7Tg"><img
                                    src="<?= base_url(); ?>/img/yt.svg" alt=""></a>
                        <a href="https://www.instagram.com/qurantazkia/"><img src="<?= base_url(); ?>/img/ig.svg"
                                                                              alt=""></a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<script data-main="<?= base_url(); ?>/js/script"
        src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
</body>

</html>