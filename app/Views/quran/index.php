<?= $this->extend('layout/quran_layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <!-- header quran -->
    <div class="row justify-content-center mt-4">
        <h1 class="textarab">بِسْمِ ٱللَّهِ ٱلرَّحْمَـٰنِ ٱلرَّحِيمِ</h1>
    </div>
    <hr>
    <!-- end header quran -->
    <!-- quran -->
    <input id="chapter_id" value="<?= $chapter_id; ?>" type="hidden">
    <input id="verse_num" value="<?= $verse_num; ?>" type="hidden">
    <div id="verses" style="visibility: hidden">
        <div class="quran ayat_ayat" v-for="verse in verses" :key="verse.id" v-bind:id="'ayat_'+verse.verse_number">
            <div class="ayat" lang="ar">
                <span v-for="word,index in verse.words" :key="word.id" class="ta p" v-if="index !== verse.words.length - 1" data-toggle="tooltip" v-bind:title="tooltipAyah(word)">
                    {{ word.text_uthmani }}
                </span>
                <span v-for="word,index in verse.words" :key="word.id" class="num-a" v-if="index === verse.words.length - 1">
                    ( {{ word.text_uthmani }} )
                </span>

            </div>
            <div class="terjamah">
                <div class="mt-4" v-for="terjemahs in terjemah">
                    <div class="mb-1" v-html="terjemahs.translations[verse.verse_number - 1].text"></div>
                    <small v-html="replaceIndonesia(terjemahs.meta.author_name)">— </small>
                </div>
                <div id="footnotes"></div>
            </div>
            <!-- tampilkan alert di bawah ketika ayat berhasi disalin -->
            <div v-bind:id="'alertcopy_'+verse.verse_number"></div>

            <div class="menu">
                <!--Share-->
                <a role="button" v-on:click="share(verse.chapter_id,verse.verse_number)" class="menu-item" data-toggle="modal" data-target="#modalShare"><i class="fas fa-share-alt"></i><small class="d-block">Share</small></a>

                <!--Copy-->
                <button role="button" class="menu-item copy" v-bind:id="verse.verse_number" data-clipboard-action="copy" v-bind:data-clipboard-text="copyAyat(verse, chapter.name_simple)">
                    <i class="far fa-copy"></i> <small class="d-block">Copy</small>
                </button>

                <!--Play-->
                <a role="button" class="menu-item play_button" v-bind:id="'audio_'+verse.verse_number" v-on:click="play(verse.verse_number)">
                    <i class="fas fa-play-circle"></i><small class="d-block">Play</small></a>

                <!--Tahsin-->
                <a role="button" class="menu-item" data-toggle="modal" v-on:click="getTajwid(verse.chapter_id+':'+verse.verse_number)" data-target="#modalTahsin">
                    <i class="fab fa-readme"></i><small class="d-block">Tahsin</small>
                </a>

                <!--Tahfizh-->
                <a role="button" class="menu-item tahfizh_button" v-bind:id="'loop_'+verse.verse_number" v-on:click="setTahfizh( verse.verse_number)">
                    <i class="fas fa-retweet"></i>
                    <small class="d-block">Tahfizh</small></a>

                <!--Tafsir-->
                <a role="button" class="menu-item" data-toggle="modal" data-target="#modalTafsir" v-on:click="getTafsir(verse.chapter_id+':'+verse.verse_number)">
                    <i class="fas fa-book"></i><small class="d-block">Tafsir</small>
                </a>

                <!--Tathbiq-->
                <a role="button" class="menu-item" data-toggle="modal" v-on:click="getTatbiq(verse.chapter_id+':'+verse.verse_number)" data-target="#modaltatbhiq"><i class="fas fa-book-reader"></i><small class="d-block">Tatbhiq</small></a>

            </div>
            <hr class="divider">
        </div>
    </div>
    <div id="loading">... loading ...</div>

    <!-- end quran -->
    <!-- modal share -->
    <div class="modal fade" id="modalShare" tabindex="-1" aria-labelledby="tafsirContent" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tafsirContent">Share Ayat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="share-ayat" id="share_ayat"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal share -->
    <!-- modal tahsin -->
    <div class="modal fade" id="modalTahsin" tabindex="-1" aria-labelledby="tafsirContent" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tafsirContent">Tahsin & Tajwid</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="quran">
                        <div id="ayat_tajwid">
                            <div> loading....</div>
                        </div>
                        <div id="content">
                            <div> loading....</div>
                        </div>
                        </br>
                        <table id="reservations" border="1" width="100%" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th width="20%">Warna</th>
                                    <th width="20%">Hukum Tajwid</th>
                                    <th width="60%">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div id="link_youtube" class="embed-responsive embed-responsive-16by9 mt-5 mb-4"></div>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url(); ?>/panduan-tajwid" class="btn btn-4">Panduan Tajwid</a>
                    <button type="button" class="btn btn-2" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal tahsin -->
    <!-- modal tafsir -->
    <div class="modal fade" id="modalTafsir" tabindex="-1" aria-labelledby="creator_tafsir" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="creator_tafsir">Tafsir Ibnu Katsir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-md-5" id="content_tafsir">
                </div>
                <div class="modal-footer">
                    <label for="check" class="btn btn-4">Ganti Tafsir</label>
                    <button type="button" class="btn btn-2" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal tafsir -->
    <!-- modal tatbhiq -->
    <div class="modal fade" id="modaltatbhiq" tabindex="-1" aria-labelledby="tatbhiqContent" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tatbhiqContent">Tatbhiq</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-md-5">
                    <div id="ayat_tatbiq">
                        <div> loading....</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal tatbhiq -->
    <!-- navigasi quran -->
    <div class="navigasi-quran">
        <?php
        if ($prev)
            echo '<a href="' . base_url('/' . $prev) . '" class="btn btn-2 btn-lg"><i
                    class="fas fa-arrow-left mr-2"></i>Prev</a>';
        echo '<a href="" class="btn btn-2 btn-lg"><i class="fas fa-arrow-up mr-2"></i>Up</a>';
        if ($next)
            echo '<a href="' . base_url('/' . $next) . '" class="btn btn-2 btn-lg"><i
                    class="fas fa-arrow-right mr-2"></i>Next</a>';
        ?>
    </div>
    <!-- end navigasi quran -->
</div>
<?= $this->endSection(); ?>