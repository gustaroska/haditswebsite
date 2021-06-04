<?= $this->extend('layout/main_layout'); ?>
<?= $this->section('content'); ?>
    <!-- JUMBOTRON -->
    <div class="jumbotron" id="jumbotron">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <a href="<?= base_url(); ?>/1"><img class="img-fluid" src="<?= base_url(); ?>/img/qurankarim.png"
                                                        alt="quran al-karim"></a>
                    <a href="<?= base_url(); ?>/1" class="brand">QURAN TAZKIA</a>
                    <p class="description">PROGRAM QURAN 5T (TAHSIN, TAHFIDZ, TARJAMAH, TAFSIR, TATHBIQ)</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 form-search">
                    <form action="cari" method="get" class="needs-validation">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" id="search"
                                   placeholder="Cari Surat & Ayat Contoh : 1:1 / 'Baqarah'" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn" id="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END JUMBOTRON -->
    <!-- INDEX -->
    <div class="container index" id="home">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="surat-tab" data-toggle="tab" href="#chapters" role="tab"
                   aria-controls="surat" aria-selected="true">Surat</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="juz-tab" data-toggle="tab" href="#juz" role="tab" aria-controls="juz"
                   aria-selected="false">Juz</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="index-tab" data-toggle="tab" href="#index" role="tab" aria-controls="index"
                   aria-selected="false">Index Ayat</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div id="loading">... loading ...</div>
            <div class="tab-pane fade show active" id="chapters" role="tabpanel" aria-labelledby="surat-tab"
                 style="visibility: hidden">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2">
                    <div v-for="chapter in chapters" :key="chapter.id" class="col mb-4">
                        <a v-bind:href="chapter.id">
                            <div class="card">
                                <div class="number">
                                    <p>{{ chapter.id }}</p>
                                </div>
                                <div class="row">
                                    <div class="col-7 latin">
                                        <h5>{{ chapter.name_simple }}</h5>
                                        <p>{{chapter.translated_name.name}}</p>
                                    </div>
                                    <div class="col-5 textarab">
                                        <p>{{chapter.name_arabic}}ْ</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="juz" role="tabpanel" aria-labelledby="juz-tab">
                <div class="row row-cols-1 row-cols-lg-2" id="indexJuz">
                    <div class="col mb-4" v-for="juz in juzs" :key="juz.id">
                        <div class="indexjuz">
                            <div class="header" id="cardjuz">
                                <div class="number">
                                    <p>{{juz.id}}</p>
                                </div>
                                <div class="title" data-toggle="collapse" v-bind:data-target="'#juz'+juz.id"
                                     aria-expanded="false" aria-controls="collapseOne">
                                    <div class="row">
                                        <div class="col-6 latin">
                                            <h5>Juz ke {{juz.id}}</h5>
                                            <p>{{ numberEnglish(juz.id) }} Juz</p>
                                        </div>
                                        <div class="col-6 textarab">
                                            <p>اَلْجُزْءُ {{ numberArabic(juz.id) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-bind:id="'juz'+juz.id" class="collapse" aria-labelledby="cardjuz"
                                 data-parent="#indexJuz">
                                <div class="list-group list-group-flush mt-3">
                                    <a v-bind:href="index+'/'+mapping"
                                       class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                       v-for="(mapping, index) in juz.verse_mapping">{{ getNameChapter(index) }}<span
                                                class="badge badge-1 badge-pill">Ayat {{ mapping }} </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="index" role="tabpanel" aria-labelledby="index-tab">
                <div class="row row-cols-1 row-cols-md-2">
					<?php
						foreach ($index_ayat_master_klasifikasi as $row) { ?>
                            <div class="col mb-4">
                                <a href="<?= base_url(); ?>/index-ayat/<?=$row->id?>">
                                    <div class="card">
                                        <div class="number">
                                            <p><?=$row->id?></p>
                                        </div>
                                        <div>
                                            <h5><?=$row->master?></h5>
                                            <p>Daftar Ayat Al-Quran yang menjelaskan tentang <?=$row->master?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
						<?php }
					?>
                </div>
            </div>
        </div>
    </div>
    <!-- END INDEX -->
<?= $this->endSection(); ?>