define(function (require) {
    const utils = require('/js/app/utils.js');
    let ayat_player = document.getElementById("ayat_player");
    let play_button = "";
    let base_url_qurancom = utils.base_url_quran_com()
    let base_url_qurancom4 = utils.base_url_quran_com4()
    let base_url = window.location.protocol + "//" + window.location.host + "/"
    let pathArray = window.location.pathname.split('/');
    let quran_setting = new utils.quran_setting()
    let base_audio_ayat = "https://verses.quran.com/";
    let playing_ayat = false;
    let listButtonPlay, listAyat, i, loop_this = false;
    let tajwids = [{
            "id": 1,
            "class_css": "tajweed.ham_wasl",
            "color": "#aaa",
            "hukum_tajwid": "Hamzat ul Wasl"
        },
        {
            "id": 2,
            "class_css": "laam_shamsiyah",
            "color": "#aaa",
            "hukum_tajwid": "Laam Shamsiyah"
        },
        {
            "id": 3,
            "class_css": "slnt",
            "color": "#aaa",
            "hukum_tajwid": "Silent"
        },
        {
            "id": 4,
            "class_css": "madda_normal",
            "color": "#537fff",
            "hukum_tajwid": "Madda Normal",
            "keterangan": "Normal Prolongation: 2 Vowels"
        },
        {
            "id": 5,
            "class_css": "madda_permissible",
            "color": "#4050ff",
            "hukum_tajwid": "Madda Permissible",
            "keterangan": "Permissible Prolongation: 2, 4, 6 Vowels"
        },
        {
            "id": 6,
            "class_css": "madda_necessary",
            "color": "#000ebc",
            "hukum_tajwid": "Madda Necessary",
            "keterangan": "Necessary Prolongation: 6 Vowels"
        },
        {
            "id": 7,
            "class_css": "madda_obligatory",
            "color": "#2144c1",
            "hukum_tajwid": "Madda Obligatory",
            "keterangan": "Obligatory Prolongation: 4-5 Vowels"
        },
        {
            "id": 8,
            "class_css": "qalaqah",
            "color": "#dd0008",
            "hukum_tajwid": "qalaqah"
        },
        {
            "id": 9,
            "class_css": "ikhafa_shafawi",
            "color": "#d500b7",
            "hukum_tajwid": "Ikhafa' Shafawi",
            "keterangan": "Ikhafa' Shafawi - With Meem"
        },
        {
            "id": 10,
            "class_css": "ikhafa",
            "color": "#9400a8",
            "hukum_tajwid": "Ikhafa'"
        },
        {
            "id": 11,
            "class_css": "iqlab",
            "color": "#26bffd",
            "hukum_tajwid": "Iqlab"
        },
        {
            "id": 12,
            "class_css": "idgham_shafawi",
            "color": "#58b800",
            "hukum_tajwid": "Idgham Shafawi",
            "keterangan": "Idgham Shafawi - With Meem"
        },
        {
            "id": 13,
            "class_css": "idgham_ghunnah",
            "color": "#169200",
            "hukum_tajwid": "Idgham With Ghunnah",
            "keterangan": "Idgham - With Ghunnah"
        },
        {
            "id": 14,
            "class_css": "idgham_wo_ghunnah",
            "color": "#169200",
            "hukum_tajwid": "Idgham Without Ghunnah",
            "keterangan": "Idgham - Without Ghunnah"
        },
        {
            "id": 15,
            "class_css": "idgham_mutajanisayn",
            "color": "#a1a1a1",
            "hukum_tajwid": "Idgham Mutajanisayn"
        },
        {
            "id": 16,
            "class_css": "idgham_mutaqaribayn",
            "color": "#a1a1a2",
            "hukum_tajwid": "Idgham Mutaqaribayn"
        },
        {
            "id": 17,
            "class_css": "ghunnah",
            "color": "#ff7e1e",
            "hukum_tajwid": "Ghunnah",
            "keterangan": "Ghunnah: 2 Vowels"
        }
    ];

    const app = new Vue({
        el: '#quran',
        data: {
            next_verse: 1,
            audio: [],
            terjemah: [],
            chapters: [],
            chapter: [],
            verses: [],
            ayatke: [],
            toayatke: 1,
            loading: false,
            current_page: 1,
            prev_page: null,
            total_pages: null,
            total_count: null,
            verse_playing_ke: 1,
            tooltip: "t",
            lastAyahSeen: 1,
            lastAyahSelected: 1,
            kkk: "hahasjdkfdsdfdf"
        },
        methods: {
            replaceIndonesia(data) {
                return data.replace("Indonesian Islamic affairs ministry", "Ministry of Religious Affairs, RI")
            },
            getTranslations() {
                this.terjemah = []
                for (let i = 0; i < quran_setting.translations.length; i++)
                    fetch(`${base_url_qurancom4}quran/translations/${quran_setting.translations[i]}/?chapter_number=${this.chapter.chapter_number}&fields=verse_number%2Cverse_key`)
                    .then(stream => stream.json())
                    .then(data => {
                        this.terjemah.push(data)
                    })
            },
            getAudio: function (id, chapter_number) {
                this.audio = []
                fetch(`${base_url_qurancom4}quran/recitations/${id}/?chapter_number=${chapter_number}`)
                    .then(stream => stream.json())
                    .then(data => {
                        this.audio = data.audio_files
                    })
            },
            copyAyat: function (verse, b) {
                let tr = "";
                if (this.terjemah)
                    for (let i = 0; i < this.terjemah.length; i++)
                        tr += this.terjemah[i].translations[verse.verse_number - 1].text.replace(/<\/?("[^"]*"|'[^']*'|[^>])*(>|$)/g, "") + '\n';
                let data =
                    `${verse.text_uthmani}\n` +
                    `${tr}\n` +
                    `${b}:${verse.verse_number}`;
                return data
            },
            tooltipAyah: function (word) {
                let data;
                if (this.tooltip === 'tr')
                    data = word.transliteration.text ? word.transliteration.text : ""
                else
                    data = word.translation.text ? word.translation.text : ""
                return data
            },
            getTatbiq: function (id) {
                $("#ayat_tatbiq").html("loading ...");
                fetch(`${base_url}api/tatbhiq/${id}`)
                    .then(stream => stream.json())
                    .then(data => {
                        if (data.message === "not found")
                            $("#ayat_tatbiq").html("Belum tersedia");
                        else
                            $("#ayat_tatbiq").html(data.message.content);
                    })
            },
            goToVerse: function (verse) {
                let testDiv = document.getElementById("ayat_" + verse);
                if (testDiv === null)
                    this.getVerses(this.chapter.chapter_number, verse, false)
                else {
                    let position = testDiv.offsetTop;
                    this.toayatke = verse
                    $("body, html").animate({
                        scrollTop: position - 110
                    }, {
                        duration: 750,
                        specialEasing: {
                            height: "easeInOutBounce"
                        }
                    });
                }

            },
            setTahfizh: function (id) {
                let listTahfizh = document.getElementsByClassName("tahfizh_button");
                let listButtonPlay = document.getElementsByClassName("play_button");
                let element = document.getElementById(`loop_${id}`);
                let audio = document.getElementById(`audio_${id}`);
                let classes = element.className.split(" ");
                let i = classes.indexOf("active");

                // toggle active looping
                if (i >= 0)
                    classes.splice(i, 1);
                else {
                    // hapus class active pada semua tombol looping
                    for (let j = 0; j < listTahfizh.length; ++j) {
                        listTahfizh[j].classList.remove("active");
                    }
                    // tambah class active pada id looping
                    classes.push("active");
                    let classesAudio = audio.className.split(" ");
                    let k = classesAudio.indexOf("active");

                    // klik tahfidz langsung play bila status pause play button
                    if (k === -1) {
                        for (let j = 0; j < listButtonPlay.length; ++j) {
                            listButtonPlay[j].classList.remove("active");
                        }
                        this.play(id)
                    }
                }
                element.className = classes.join(" ");
            },
            play: function (id) {
                listAyat = []
                listButtonPlay = []
                listAyat = document.getElementsByClassName("ayat");
                listButtonPlay = document.getElementsByClassName("play_button");
                play_button = document.getElementById(`audio_${id}`);
                play_button.innerHTML = '<i class="fas fa-pause-circle"></i><small class="d-block">Pause</small>';
                for (i = 0; i < listAyat.length; ++i) {
                    listAyat[i].style.setProperty("color", "black", "important");
                }
                for (i = 0; i < listButtonPlay.length; ++i) {
                    listButtonPlay[i].innerHTML = '<i class="fas fa-play-circle"></i><small class="d-block">Play</small>';
                }
                if (!playing_ayat) {
                    this.verse_playing_ke = id;
                    this.goToVerse(id);
                    if (this.audio) {
                        ayat_player.src = base_audio_ayat + this.audio[id - 1].url
                        ayat_player.play();
                    }
                } else if (playing_ayat === "pause") {
                    if (this.verse_playing_ke !== id) {
                        this.verse_playing_ke = id;
                        if (this.audio) {
                            ayat_player.src = base_audio_ayat + this.audio[id - 1].url
                            this.goToVerse(id);
                        }
                    }
                    ayat_player.play();
                } else {
                    if (this.verse_playing_ke !== id) {
                        this.verse_playing_ke = id;
                        if (this.audio) {
                            ayat_player.src = base_audio_ayat + this.audio[id - 1].url
                            this.goToVerse(id);
                            ayat_player.play();
                        }
                    } else
                        ayat_player.pause();
                }


            },
            getChapters: function (chapter = null) {
                let reqChapter = chapter ? `chapters/${chapter}` : "chapters"
                fetch(`${base_url_qurancom}${reqChapter}`)
                    .then(stream => stream.json())
                    .then(data => {
                        if (chapter) {
                            this.chapter = data.chapter
                            this.getTranslations()
                            this.getAudio(quran_setting.recitation, this.chapter.id);
                            for (let j = 1; j <= data.chapter.verses_count; j++) {
                                this.ayatke.push([j, ])
                            }
                        } else
                            this.chapters = data.chapters
                        $("#chapters").attr("style", "visibility: visible")
                    })
                    .catch(error => console.error(error))

            },
            getTajwid: function (id) {
                $("#ayat_tajwid").html("loading ...");
                fetch(`${base_url_qurancom4}quran/verses/uthmani_tajweed?verse_key=${id}`)
                    .then(stream => stream.json())
                    .then(data => {
                        $("#ayat_tajwid").html(data.verses[0].text_uthmani_tajweed);
                        //http://jsfiddle.net/FunvZ/1/
                        let tbody = $('#reservations tbody'),
                            props = ["color", "hukum_tajwid", "keterangan"];

                        $("#reservations tbody tr").remove();
                        // hitung ada berapa element tajweed
                        $.each(tajwids, function (i, reservation) {
                            $('#ayat_tajwid tajweed').each(function (i, k) {
                                // buat baris sesuai yg ada
                                if (reservation.class_css === $(this)[0].className) {
                                    let tr = $('<tr>');
                                    $.each(props, function (i, prop) {
                                        if (prop === "color")
                                            $('<td>').html('<span style="background-color: ' + reservation[prop] + '">#4050ff</span>').appendTo(tr);
                                        else
                                            $('<td>').html(reservation[prop]).appendTo(tr);
                                    });
                                    tbody.append(tr);
                                }
                            });
                        });
                    })

                fetch(`${base_url}api/tahsin/${id}`)
                    .then(stream => stream.json())
                    .then(data => {
                        if (data.message !== "not found") {
                            $("#content").html(data.message.content);
                            $("#link_youtube").html(`<iframe className='embed-responsive-item' src='https://youtube.com/embed/${data.message.link_youtube}?rel=0' allowFullScreen></iframe>`);
                        } else {
                            $("#content").html("belum tersedia");
                        }
                    })
            },
            getTafsir: function (ayat_id) {
                this.lastAyahSelected = ayat_id
                $("#ayat_tajwid").html("loading ...");
                $("#creator_tafsir").html(" loading ... ");
                $("#content_tafsir").html("");
                fetch(`${base_url}api/ajax_get_tafsir/${ayat_id}/${quran_setting.tafsir_resource_id}`)
                    .then(stream => stream.json())
                    .then(data => {
                        if (data.length > 0) {
                            $("#creator_tafsir").html(data[0].name);
                            $("#content_tafsir").html(data[0].content);
                        } else {
                            $("#creator_tafsir").html(" - ");
                            $("#content_tafsir").html(" Belum tersedia ");
                        }

                    })

            },
            setting: function (event) {

                //http://jsfiddle.net/g9Lca1fu/1/
                //save lastAyahSeen into data
                let table = $("#verses");
                let rows = table.children();
                let scrollpos = $(document).scrollTop();
                let start = 0;
                let end = rows.length;
                let count = 0;
                while (start !== end) {
                    count++;
                    let mid = start + Math.floor((end - start) / 2);
                    if ($(rows[mid]).offset().top < scrollpos)
                        start = mid + 1;
                    else
                        end = mid;
                }
                this.lastAyahSeen = $($(rows[start]).children()[0]).parent().attr("id").replace("ayat_", "")
                if (event.currentTarget.name !== "translations") {
                    utils.quran_setting(event.currentTarget.name, event.currentTarget.value)
                    quran_setting = new utils.quran_setting()
                }

                if (event.currentTarget.name === "tafsir_resource_id") {
                    utils.quran_setting(event.currentTarget.name, event.currentTarget.value)
                    quran_setting = new utils.quran_setting()
                    this.getTafsir(this.lastAyahSelected)
                }

                if (event.currentTarget.name === "recitation") {
                    utils.quran_setting(event.currentTarget.name, event.currentTarget.value)
                    quran_setting = new utils.quran_setting()
                    this.getAudio(quran_setting.recitation, this.chapter.id);
                    //this.getVerses(chapter_id.val(), this.lastAyahSeen, false, false, false)
                }

                if (event.currentTarget.name === "translations") {
                    let translations = []
                    utils.quran_setting(event.currentTarget.name, [])
                    let checkLang = $('input[name="translations"]').filter(':checked')
                    for (let i = 0; i < checkLang.length; i++)
                        translations.push(checkLang[i].value)
                    utils.quran_setting(event.currentTarget.name, translations)
                    quran_setting = new utils.quran_setting()
                    this.getTranslations()
                }

                if (event.currentTarget.name === "tooltip") {
                    quran_setting = new utils.quran_setting()
                    this.tooltip = event.currentTarget.value
                    this.getVerses(chapter_id.val(), this.lastAyahSeen, false, false, false)
                }

                if (event.currentTarget.value === "t") {
                    utils.quran_setting("language", event.currentTarget.lang)
                    quran_setting = new utils.quran_setting()
                    this.tooltip = event.currentTarget.value
                    this.getVerses(chapter_id.val(), this.lastAyahSeen, false, false, false)
                }

            },
            getVerses: function (chapter, verse = null, next = true, single = false, scroll = true, to = false) {
                this.loading = true
                this.tooltip = quran_setting.tooltip
                $("#loading").attr("style", "visibility: visible")
                $("#verses").attr("style", "visibility: visible")
                let reqVerse = verse ? `from=${verse}&` : "";
                if (single) {
                    reqVerse = `from=${verse}&to=${parseInt(verse) + 1}&`;
                    this.next_verse = parseInt(verse) + 2;
                }
                if (to){
                    reqVerse = `from=${verse}&to=${to}&`;
                    this.next_verse = parseInt(verse) + 2;
                }
                if (!next) this.verses = []

                fetch(`${base_url_qurancom4}verses/by_chapter/${chapter}?${reqVerse}language=${quran_setting.language}&words=true&word_fields=text_uthmani&fields=text_uthmani%2Cchapter_id`)
                    .then(stream => stream.json())
                    .then(data => {
                        this.loading = false
                        $("#loading").attr("style", "visibility: hidden")
                        if (!single) {
                            if (next) {
                                for (let j = 0; j < data.verses.length; j++) {
                                    this.verses.push(data.verses[j])
                                }
                                this.next_verse = data.verses[data.verses.length - 1].verse_number + 1
                            } else {
                                this.toayatke = verse
                                this.next_verse = data.verses[data.verses.length - 1].verse_number + 1
                                this.verses = []
                                for (let j = 0; j < data.verses.length; j++) {
                                    this.verses.push(data.verses[j])
                                }
                                if (scroll)
                                    $("body, html").animate({
                                        scrollTop: 0 - 110
                                    }, {
                                        duration: 750,
                                        specialEasing: {
                                            height: "easeInOutBounce"
                                        }
                                    });
                            }
                        } else {
                            this.toayatke = verse
                            for (let j = 0; j < data.verses.length; j++) {
                                this.verses.push(data.verses[j])
                            }
                        }
                    })
                    .catch(error => console.error(error))
            },
            share: function (chapter_id, verse_num) {
                let url,
                    share_ayat,
                    content,
                    verse = this.verses[verse_num - 1]
                share_ayat = $("#share_ayat");
                share_ayat.html("Loading...");
                url = `${base_url}${chapter_id}/${verse_num}`
                content = `
                    <a target="_blank" rel="noopener" title="Share on Facebook" 
                    href="https://www.facebook.com/sharer/sharer.php?u=${url}">
                    <img src="${base_url}img/s-fb.jpg" alt=""><small class="d-block">Facebook</small></a>

                    <a target="_blank" rel="noopener" title="Share on Twitter"  href="https://twitter.com/share?url=${url}?&amp;hashtags=quran&amp;via=app_quran">
                    <img src="${base_url}img/s-tw.jpg" alt=""><small class="d-block">Twitter</small></a>
                    
                    <a  target="_blank" rel="noopener" title="Share on Messenger"  href="https://www.facebook.com/dialog/send?link=${url}">
                    <img src="${base_url}img/s-msgr.jpg" alt=""><small class="d-block">Messenger</small></a>
                    
                    <a target="_blank" rel="noopener" title="Share on Whatsapp" 
                     href="https://api.whatsapp.com/send?text=${this.chapter.name_complex} - ${chapter_id}:${verse_num} - Quran Tazkia%0A${verse.text_uthmani}%0A${url}">
                    <img src="${base_url}img/s-wa.jpg" alt=""><small class="d-block">Whatsapp</small></a>
                    
                    <a  target="_blank" rel="noopener" data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url=${url}&description=${this.chapter.name_complex} - ${chapter_id}:${verse_num} - Quran Tazkia" data-pin-config="above">
                    <img src="${base_url}img/s-pin.jpg" alt=""><small class="d-block">Pinterst</small></a>
                    
                    <a target="_blank" rel="noopener" title="Share on Telegram" 
                    href="https://telegram.me/share/?url=${url}&amp;text=${verse.text_uthmani}">
                    <img src="${base_url}img/s-tel.jpg" alt=""><small class="d-block">Telegram</small></a>
                    
                    <a target="_blank" rel="noopener" href="mailto:&subject=${this.chapter.name_complex} - ${chapter_id}:${verse_num} - Quran Tazkias&body=${verse.text_uthmani}%0A%0A${url}">
                    <img src="${base_url}img/s-ml.jpg" alt=""><small class="d-block">Mail</small></a>
                    
                    <a target="_blank" rel="noopener" data-share="https://social-plugins.line.me/lineit/share?url=${url}&text=${verse.text_uthmani}%0A%0A${url}" href="https://social-plugins.line.me/lineit/share?url=">
                    <img src="${base_url}img/s-lin.jpg" alt=""> <small class="d-block">Line</small></a>`;

                share_ayat.html(content);

            }
        }
    });

    document.getElementById("tafsir" + quran_setting.tafsir_resource_id).checked = true;
    document.getElementById("recitation" + quran_setting.recitation).checked = true;
    if (quran_setting.tooltip === "t")
        document.getElementById("tooltipt" + quran_setting.language).checked = true;
    else
        document.getElementById("tooltip" + quran_setting.tooltip).checked = true;
    if (quran_setting.translations)
        for (i = 0; i < quran_setting.translations.length; i++)
            document.getElementById("language" + quran_setting.translations[i]).checked = true;

    ayat_player.addEventListener('ended', (event) => {
        let loop_element_ayat = document.getElementById(`loop_${app.verse_playing_ke}`);
        playing_ayat = false
        play_button.innerHTML = '<i class="fas fa-play-circle"></i><small class="d-block">Play</small>';
        play_button.classList.remove("active");

        document.querySelector(`#ayat_${app.verse_playing_ke} .ayat`).style.setProperty("color", "black", "important");
        loop_this = loop_element_ayat.classList.contains('active');
        if (loop_this) {
            app.goToVerse(app.verse_playing_ke);
            ayat_player.play();
        } else {
            if (app.chapter.verses_count !== app.verse_playing_ke) {
                app.verse_playing_ke = app.verse_playing_ke + 1;
                app.goToVerse(app.verse_playing_ke);
                play_button = document.getElementById(`audio_${app.verse_playing_ke}`);
                ayat_player.src = base_audio_ayat + app.audio[app.verse_playing_ke - 1].url
                ayat_player.play();
            }
        }
    });

    ayat_player.addEventListener('playing', (event) => {
        document.querySelector(`#ayat_${app.verse_playing_ke} .ayat`).style.setProperty("color", "#1D3679", "important");
        playing_ayat = true
        play_button.innerHTML = '<i class="fas fa-pause-circle"></i><small class="d-block">Pause</small>';
        play_button.classList.add("active");
    });

    ayat_player.addEventListener('pause', (event) => {
        playing_ayat = "pause"
        play_button.innerHTML = '<i class="fas fa-play-circle"></i><small class="d-block">Play</small>';
        play_button.classList.remove("active");
    });

    window.onscroll = function (ev) {
        if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 1000)) {
            if (app.next_verse < app.chapter.verses_count && !app.loading)
                if (app.verses.length > 1)
                    app.getVerses(chapter_id.val(), app.next_verse, true, false, true)
        }
    };

    let chapter_id = $("#chapter_id")
    if (chapter_id.length > 0) {
        let verse_num, to = false
        if (pathArray[2] !== undefined) {
            verse_num = pathArray[2]
            let verse_num_s = verse_num.split('-');
            verse_num = verse_num_s[0]
            to = verse_num_s[1]
        } else
            verse_num = $("#verse_num").val()
        app.getChapters()
        app.getChapters(chapter_id.val())
        // getVerses(chapter, verse = null, next = true, single = false, scroll = true, to = false) {
        verse_num > 0 ? app.getVerses(chapter_id.val(), verse_num, false, true, true, to) : app.getVerses(chapter_id.val())
        $(document).ready(function () {
            $("a[href^='#']").click(function (e) {
                e.preventDefault();
                let position = $($(this).attr("href")).offset().top;
                $("body, html").animate({
                    scrollTop: position
                }, 2000);
            });
            $("body").tooltip({
                selector: '[data-toggle=tooltip]'
            });

        });
    }

    // footnote click show alert
    document.onclick = function (event) {
        if (event.target.tagName === "SUP") {
            let id_footnote = event.target.attributes[0].nodeValue;
            fetch(`${base_url_qurancom}foot_notes/${id_footnote}`)
                .then(stream => stream.json())
                .then(data => {
                    document.getElementById(event.path[4].attributes[0].nodeValue).querySelectorAll("#footnotes")[0].innerHTML = '' +
                        '<div class="alert alert-footnote alert-dismissible fade show" role="alert">\n' +
                        '                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '                            <span aria-hidden="true">&times;</span>\n' +
                        '                        </button>\n' +
                        '                        <h6>Foot Note :</h6>\n' +
                        '                        <span>' + data.foot_note.text + '</span>\n' +
                        '                    </div>';

                })

        }


    };

    let clipboard = new ClipboardJS('.copy');

    clipboard.on('success', function (e) {
        document.getElementById("alertcopy_" + e.trigger.id).innerHTML = '' +
            ' <div class="alert alert-success alert-dismissible fade show mt-4 "\n' +
            '                     role="alert">\n' +
            '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
            '                        <span aria-hidden="true">&times;</span>\n' +
            '                    </button>\n' +
            '                    Ayat berhasil di salin !\n' +
            '                </div>';
        e.clearSelection();
    });

    clipboard.on('error', function (e) {
        console.error('Action:', e.action);
        console.error('Trigger:', e.trigger);
    });

    $(document).ready(function () {
        $('#searchSurat').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $(".surat a").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $(document).ready(function () {
        $('#searchAyat').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $(".ayat a").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $('.navigasi-ayat').on('shown.bs.dropdown', function (e) {
        $('.dropdown-menu input').focus();
    })

});