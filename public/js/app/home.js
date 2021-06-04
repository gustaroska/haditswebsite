define(function (require) {
    const num2Word = require('/js/app/numberToWords.js');
    const utils = require('/js/app/utils.js');
    let base_url_qurancom = utils.base_url_quran_com()
    let base_url_qurancom4 = utils.base_url_quran_com4()
    const app = new Vue({
        el: '#home',
        data: {
            chapters: [],
            verses: [],
            juzs: [],
            loading: false,

        },
        methods: {
            getNameChapter(index) {
                if (this.chapters)
                   return this.chapters[index - 1].name_simple
            },
            numberArabic: function (number) {
                return ('' + number).replace(/[0-9]+/g, (match) => {
                    return utils.arabic_ordinary(match)
                })
            },
            numberEnglish: function (number) {
                return num2Word.toWordsOrdinal(number).charAt(0).toUpperCase() + num2Word.toWordsOrdinal(number).slice(1);
            },

            getChapters: function (chapter = null) {
                let reqChapter = chapter ? `/chapters/${chapter}` : "/chapters"
                fetch(`${base_url_qurancom}${reqChapter}`)
                    .then(stream => stream.json())
                    .then(data => {
                        if (chapter) this.chapter = data.chapter
                        else this.chapters = data.chapters
                        $("#chapters").attr("style", "visibility: visible")
                        $("#loading").attr("style", "visibility: hidden")
                    })
                    .catch(error => console.error(error))

            },
            getJuz: function () {
                fetch(`${base_url_qurancom4}juzs`)
                    .then(stream => stream.json())
                    .then(data => {
                            this.juzs = data.juzs
                        }
                    )
                    .catch(error => console.error(error))

            },
        }
    });

    if ($("#jumbotron").length > 0) {
        app.getChapters()
        app.getJuz()
    }
});