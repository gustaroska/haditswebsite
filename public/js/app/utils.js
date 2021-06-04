define(function () {
    return {
        base_url_quran_com: function () {
            return "https://api.quran.com/api/v3/"
        },
        base_url_quran_com4: function () {
            return "https://api.quran.com/api/v4/"
        },
        arabic_ordinary: function (num) {
            const arabic_ordinary_const = {
                1: 'الأَوَّلُ',
                2: 'الثَّانِي',
                3: 'الثَّالِثُ',
                4: 'الرَّابِعُ',
                5: 'الخَامِسُ',
                6: 'السَّادِسُ',
                7: 'السَّابِعُ',
                8: 'الثَّامِنُ',
                9: 'التَّاسِعُ',
                10: 'العَاشِرُ',
                11: 'الحَادِيَ عَشَرَ',
                12: 'الثَّانِيَ عَشَرَ',
                13: 'الثَّالِثَ عَشَرَ',
                14: 'الرَّابِعَ عَشَرَ',
                15: 'الخَامِسَ عَشَرَ',
                16: 'السَّادِسَ عَشَرَ',
                17: 'السَّابِعَ عَشَرَ',
                18: 'الثَّامِنَ عَشَرَ',
                19: 'التَّاسِعَ عَشَرَ',
                20: 'العِشْرُونَ',
                21: 'الحَادِي وَالعِشْرُونَ',
                22: 'الثَّانِي وَالعِشْرُونَ',
                23: 'الثَّالِثُ وَالعِشْرُونَ',
                24: 'الرَّابِعُ وَالعِشْرُونَ',
                25: 'الخَامِسُ وَالعِشْرُونَ',
                26: 'السَّادِسُ وَالعِشْرُونَ',
                27: 'السَّابِعُ وَالعِشْرُونَ',
                28: 'الثَّامِنُ وَالعِشْرُونَ',
                29: 'التَّاسِعُ وَالعِشْرُونَ',
                30: 'الثَّلَاثونَ',
            }
            return arabic_ordinary_const[num]
        },
        quran_setting: function (conf = "", new_val = false) {
            let default_setting = {
                "font": "v1",
                "tooltip": "t",
                "language": "id",
                "recitation": "7",
                "nightMode": false,
                "readingMode": false,
                "translations": ["33", "20"],
                "repeatEnabled": false,
                "repeatCount": 1,
                "repeatFrom": 0,
                "repeatTo": 0,
                "repeatIteration": 1,
                "repeatType": "single",
                "pauseBwAyah": 0,
                "repeatAyah": 0,
                "autoScroll": true,
                "autoShowWordTooltip": false,
                "tafsir_resource_id": 1,
                "wordFontSize": {
                    "mobile": 30,
                    "desktop": 30
                },
                "translationFontSize": {
                    "mobile": 16,
                    "desktop": 16
                }
            }
            if (conf && new_val) {
                let data = window.localStorage.getItem("quran-setting")
                data = JSON.parse(data)
                data[conf] = new_val
                window.localStorage.setItem("quran-setting", JSON.stringify(data))
                return JSON.parse(window.localStorage.getItem("quran-setting"))
            }

            if (window.localStorage.getItem("quran-setting"))
                return JSON.parse(window.localStorage.getItem("quran-setting"))
            else {
                window.localStorage.setItem("quran-setting", JSON.stringify(default_setting))
                return JSON.parse(window.localStorage.getItem("quran-setting"))
            }

        }

    }


})