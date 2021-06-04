define(function (require) {
    const utils = require('/js/app/utils.js');
    let base_url_qurancom = utils.base_url_quran_com()
    let base_url = window.location.protocol + "//" + window.location.host + "/"
    let href_split = window.location.href.split('/');
    let editor, ayat;

    editor = tinymce;
    if ($(".texteditor").length > 0)
        editor.init({
            height: 400,
            selector: 'textarea',
            plugins: 'print preview paste searchreplace autolink directionality code visualblocks visualchars fullscreen link template table hr  anchor insertdatetime lists wordcount textpattern noneditable help charmap quickbars emoticons',
            menubar: 'file edit view format tools table help',
            toolbar: 'ltr rtl template | undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat fullscreen  preview print |   link anchor',
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image imagetools table',
            skin: 'oxide',
            font_formats: "Traditional Arabic=traditional arabic; Roboto= roboto; Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
            content_css: 'default',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',

            templates: [{
                title: 'Tajweed Template',
                description: 'Adds tajweed template.',
                content: '<table class="table table-responsive table-bordered">\n' +
                    '    <thead>\n' +
                    '        <tr>\n' +
                    '            <th>Type</th>\n' +
                    '            <th>Identifier</th>\n' +
                    '            <th>Colour</th>\n' +
                    '            <th>CSS</th>\n' +
                    '            <th>Description</th>\n' +
                    '        </tr>\n' +
                    '    </thead>\n' +
                    '    <tbody>\n' +
                    '                    <tr>\n' +
                    '                <td>hamza-wasl</td>\n' +
                    '                <td>[h</td>\n' +
                    '                <td style="background-color: #AAAAAA; color: white;">#AAAAAA</td>\n' +
                    '                <td>ham_wasl</td>\n' +
                    '                <td>Hamzat ul Wasl</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>silent</td>\n' +
                    '                <td>[s</td>\n' +
                    '                <td style="background-color: #AAAAAA; color: white;">#AAAAAA</td>\n' +
                    '                <td>slnt</td>\n' +
                    '                <td>Silent</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>laam-shamsiyah</td>\n' +
                    '                <td>[l</td>\n' +
                    '                <td style="background-color: #AAAAAA; color: white;">#AAAAAA</td>\n' +
                    '                <td>slnt</td>\n' +
                    '                <td>Lam Shamsiyyah</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>madda-normal</td>\n' +
                    '                <td>[n</td>\n' +
                    '                <td style="background-color: #537FFF; color: white;">#537FFF</td>\n' +
                    '                <td>madda_normal</td>\n' +
                    '                <td>Normal Prolongation: 2 Vowels</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>madda-permissible</td>\n' +
                    '                <td>[p</td>\n' +
                    '                <td style="background-color: #4050FF; color: white;">#4050FF</td>\n' +
                    '                <td>madda_permissible</td>\n' +
                    '                <td>Permissible Prolongation: 2, 4, 6 Vowels</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>madda-necesssary</td>\n' +
                    '                <td>[m</td>\n' +
                    '                <td style="background-color: #000EBC; color: white;">#000EBC</td>\n' +
                    '                <td>madda_necessary</td>\n' +
                    '                <td>Necessary Prolongation: 6 Vowels</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>qalaqah</td>\n' +
                    '                <td>[q</td>\n' +
                    '                <td style="background-color: #DD0008; color: white;">#DD0008</td>\n' +
                    '                <td>qlq</td>\n' +
                    '                <td>Qalaqah</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>madda-obligatory</td>\n' +
                    '                <td>[o</td>\n' +
                    '                <td style="background-color: #2144C1; color: white;">#2144C1</td>\n' +
                    '                <td>madda_pbligatory</td>\n' +
                    '                <td>Obligatory Prolongation: 4-5 Vowels</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>ikhafa-shafawi</td>\n' +
                    '                <td>[c</td>\n' +
                    '                <td style="background-color: #D500B7; color: white;">#D500B7</td>\n' +
                    '                <td>ikhf_shfw</td>\n' +
                    '                <td>Ikhafa\' Shafawi - With Meem</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>ikhafa</td>\n' +
                    '                <td>[f</td>\n' +
                    '                <td style="background-color: #9400A8; color: white;">#9400A8</td>\n' +
                    '                <td>ikhf</td>\n' +
                    '                <td>Ikhafa\'</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>idgham-shafawi</td>\n' +
                    '                <td>[w</td>\n' +
                    '                <td style="background-color: #58B800; color: white;">#58B800</td>\n' +
                    '                <td>idghm_shfw</td>\n' +
                    '                <td>Idgham Shafawi - With Meem</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>iqlab</td>\n' +
                    '                <td>[i</td>\n' +
                    '                <td style="background-color: #26BFFD; color: white;">#26BFFD</td>\n' +
                    '                <td>iqlb</td>\n' +
                    '                <td>Iqlab</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>idgham-with-ghunnah</td>\n' +
                    '                <td>[a</td>\n' +
                    '                <td style="background-color: #169777; color: white;">#169777</td>\n' +
                    '                <td>idgh_ghn</td>\n' +
                    '                <td>Idgham - With Ghunnah</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>idgham-without-ghunnah</td>\n' +
                    '                <td>[u</td>\n' +
                    '                <td style="background-color: #169200; color: white;">#169200</td>\n' +
                    '                <td>idgh_w_ghn</td>\n' +
                    '                <td>Idgham - Without Ghunnah</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>idgham-mutajanisayn</td>\n' +
                    '                <td>[d</td>\n' +
                    '                <td style="background-color: #A1A1A1; color: white;">#A1A1A1</td>\n' +
                    '                <td>idgh_mus</td>\n' +
                    '                <td>Idgham - Mutajanisayn</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>idgham-mutaqaribayn</td>\n' +
                    '                <td>[b</td>\n' +
                    '                <td style="background-color: #A1A1A1; color: white;">#A1A1A1</td>\n' +
                    '                <td>idgh_mus</td>\n' +
                    '                <td>Idgham - Mutaqaribayn</td>\n' +
                    '            </tr>\n' +
                    '                    <tr>\n' +
                    '                <td>ghunnah</td>\n' +
                    '                <td>[g</td>\n' +
                    '                <td style="background-color: #FF7E1E; color: white;">#FF7E1E</td>\n' +
                    '                <td>ghn</td>\n' +
                    '                <td>Ghunnah: 2 Vowels</td>\n' +
                    '            </tr>\n' +
                    '            </tbody>\n' +
                    '</table>'
            },]
        });

    const app = new Vue({
        el: '#admin',
        data: {
            chapters: [],
            tafsir_resources: [],
            chapter: 0,
            ayat: 0,
            ayatke: []
        },
        methods: {
            getChapters: function () {
                fetch(`${base_url_qurancom}/chapters`)
                    .then(stream => stream.json())
                    .then(data => {
                        this.chapters = data.chapters
                        $("#chapters").attr("style", "visibility: visible")
                        $("#loading").attr("style", "visibility: hidden")
                    })
                    .catch(error => console.error(error))

            },
            getVerses: function (chapter) {
                this.ayatke = []
                this.chapter = chapter;
                fetch(`${base_url_qurancom}chapters/${chapter}`)
                    .then(stream => stream.json())
                    .then(data => {
                        this.ayatke.push("-")
                        for (let j = 1; j <= data.chapter.verses_count; j++) {
                            this.ayatke.push(j)
                        }

                    })
                    .catch(error => console.error(error))
            },
            getTajwid: function (id = false) {
                let ayat_spit, href_split
                let url_method = $("#link_youtube").length > 0 ? "tahsin" : "tatbhiq";
                if (!id) {
                    ayat_spit = window.location.href.split('/');
                    href_split = ayat_spit[5].split(':');
                }
                let url = id ? `${this.chapter + ":" + id}` : ayat_spit[5]
                $("#ayat_tajwid").html("loading ...");
                fetch(`${base_url}api/tajweed/${url}`)
                    .then(stream => stream.json())
                    .then(data => {
                        $("#ayat_tajwid").html(data.data);
                    })

                fetch(`${base_url}api/${url_method}/${url}`)
                    .then(stream => stream.json())
                    .then(data => {
                        if (data.message !== "not found") {
                            if ($("#title").length > 0) {
                                editor.activeEditor.setContent(data.message.content);
                                if ($("#link_youtube").length > 0) $("#link_youtube").val(data.message.link_youtube)
                                $("#title").html(`Edit - ${data.message.name_complex} : ${href_split[1]}`);
                            } else {
                                $("#link_youtube").attr("disabled", true);
                                $("button").attr("disabled", true)
                                editor.activeEditor.setMode('readonly');
                                $("#info").html(`
                                    <div class="alert alert-info fade show">
                                    Data ${url_method} untuk ayat ini sudah ada.
                                    Edit <a href="${base_url}${url_method}/edit/${url}">disini</a> untuk sunting ${url_method}
                                    </div>`);
                            }
                        } else {
                            $("#link_youtube").attr("disabled", false);
                            editor.activeEditor.setMode('design');
                            $("#info").html(``);
                        }
                    })

            },
            getAyatHadits: function () {
                fetch(`${base_url}api/get_ayat_hadits/${href_split[5]}`)
                    .then(stream => stream.json())
                    .then(data => {
                        if (data.message !== "not found") {
                            $('#judul').val(data.message.title)
                            $('#ayat_hadits').html(data.message.content)
                        }
                    })
            },
            addAyatHadits: function () {
                let _data;
                if (href_split[5] === undefined) {
                    _data = {
                        title: $('#judul').val(),
                        content: editor.activeEditor.getContent()
                    }
                } else {
                    _data = {
                        ayat_id: href_split[5],
                        title: $('#judul').val(),
                        content: editor.activeEditor.getContent()
                    }
                }
                fetch(`${base_url}api/save_ayathadits`, {
                    body: JSON.stringify(_data),
                    method: "POST",
                    headers: {}
                })
                    .then(response => response.json())
                    .then(json => {
                        if (json.message === "success") {
                            $('#save_ayat_hadits').text("Success Save")
                            setTimeout(function () {
                                $('#save_ayat_hadits').text("Simpan")
                            }, 1000);
                        } else {
                            $('#save_ayat_hadits').text("Failed..")
                            setTimeout(function () {
                                $('#save_ayat_hadits').text("Simpan")
                            }, 1000);
                        }

                    })

            },
            getTafsirResources: function () {
                fetch(`${base_url}/api/ajax_list_tafsir_resources`)
                    .then(stream => stream.json())
                    .then(data => {
                        this.tafsir_resources = data.tafsir_resources
                    })
                    .catch(error => console.error(error))
            },
            getTafsir: function (id_resource) {
                let ayat_id = `${this.chapter + ":" + ayat}`
                fetch(`${base_url}api/ajax_list_tafsir_by_resource/${ayat_id}/${id_resource}`)
                    .then(stream => stream.json())
                    .then(data => {
                        if (data.tafsir_resource[0] !== undefined) {
                            editor.activeEditor.setMode('readonly');
                            $("button").attr("disabled", true)
                            $("#info").html(`
                            <div class="alert alert-info fade show">
                            Data Tafsir untuk ayat ini sudah ada.
                            Edit <a href="${base_url}tafsir/edit/${data.tafsir_resource[0].id}">disini</a> untuk sunting Tafsir.</div>`);

                        } else {
                            editor.activeEditor.setMode('design');
                            $("#info").html(``)
                        }


                    })
            },
        }
    })


    if ($("#title").length > 0)
        app.getTajwid()

    $('#surat').on('change', function () {
        app.getVerses(this.value)
    })

    $('#tafsir_resources_select').on('change', function () {
        app.getTafsir(this.value)
    })

    $('#ayat').on('change', function () {
        ayat = this.value;
        if ($("#tafsir_resources_select").length > 0)
            app.getTafsirResources()
        else
            app.getTajwid(this.value)
    })

    if ($('select').length > 0) {
        app.getChapters()
        $('select').select2();
    }

})