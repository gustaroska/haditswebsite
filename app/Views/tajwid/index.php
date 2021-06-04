<?= $this->extend('layout/main_layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
     <div class="header mt-5">
          <h1>Panduan Tajwid</h1>
          <div class="devider mb-5"></div>
     </div>
     <div class="main-content">
          <div id="panduanTajwid">
               <div class="card mt-5">
                    <div class=" card-header" id="heading1">
                         <button class="btn" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                              Hukum Nun Mati dan Tanwin
                         </button>
                    </div>
                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#panduanTajwid">
                         <div class="card-body">
                              <ol>
                                   <li>
                                        <h5>Idzhar Halqi</h5>
                                        <p>Apabila Nun Sukun atau Tanwin bertemu dengan salah satu huruf Idzhar, maka huruf Nun Sukun atau Tanwin dibaca jelas tanpa ada dengung atau samar dan tidak ditahan</p>
                                        <p>Huruf-huruf Idzhar Halqi adalah sebagai berikut:</p>
                                        <p class="textarab">أ ه ح خ ع غ</p>
                                        <p>Contoh Idzhar:</p>
                                        <p class="textarab">مِنْ اٰيٰتِنَا - مِنْهُمْ - يَوْمًا اَوْ - مِنْ اَمْرِنَا - مِنْ أحَدِهِمَا
                                        </p>
                                   </li>
                                   <li>
                                        <h5>Idgham Bighunnah </h5>
                                        <p>Apabila Nun Sukun atau Tanwin bertemu dengan salah satu huruf Idgham Bighunnah pada dua kata yang berbeda, maka cara membacanya dimasukkan ke dalam huruf berikutnya dengan tempo ghunnah (dengung) yang dipanjangkan. </p>
                                        <p>Huruf-huruf Idgham Bigunnah adalah sebagai berikut:</p>
                                        <p class="textarab">ي ن م و</p>
                                        <p>Contoh Idgham Bighunnah: </p>
                                        <p class="textarab">مَنْ يَّقُوْلُ - بِسُوْرَةٍ مِّنْ - هُدًى مِّنْ - فِرَاشاً وَالسَّمَاء - غِشَاوَةٌ وَلَهُمْ</p>
                                   </li>
                                   <li>
                                        <h5>Idzhar Mutlak</h5>
                                        <p>Apabila Nun Sukun bertemu dengan huruf Ya atau Wau dalam satu kata, maka dibaca jelas tanpa ada suara dengung atau samar dan tidak ditahan.</p>
                                        <p>Hanya ada 4 kata di dalam Al-Quran yang mengandung aturan tersebut, yaitu pada kata:</p>
                                        <p class="textarab">قنوان – صنوان – بنيان - الدنيا</p>
                                   </li>
                                   <li>
                                        <h5>Idgham Bilaghunnah </h5>
                                        <p>Apabila Nun Sukun atau Tanwin bertemu dengan salah satu huruf Idgham Bilaghunnah, maka cara membacanya dimasukkan ke dalam huruf berikutnya tanpa ghunnah (dengung).</p>
                                        <p>Huruf Idgham Bilaghunnah adalah sebagai berikut:</p>
                                        <p class="textarab">ل ر</p>
                                        <p>Contoh Idgham Bilaghunnah: </p>
                                        <p class="textarab">فَمَنْ رَبُكُمَا - مِنْ لَدُ - مِنْ رَبٍ رَحِيْمٍ - ذِكْرٌلِلْعَلِلَيْنَ - رِزْقاً لَّكُمْ </p>
                                   </li>
                                   <li>
                                        <h5>Iqlab</h5>
                                        <p>Apabila Nun Sukun atau Tanwin bertemu dengan huruf Ba, maka cara membacanya diubah menjadi Mim dengan tempo ghunnah (dengung) yang dipanjangkan.</p>
                                        <p>Huruf Iqlab hanya ada satu yaitu:</p>
                                        <p class="textarab">ب</p>
                                        <p>Contoh - contoh Iqlab:</p>
                                        <p class="textarab">سَمِيْعٌ بَصِيْرٌ - تَنْبِيْهٌ - مِنْ بَعْدِ</p>
                                   </li>
                                   <li>
                                        <h5>Ikhfa Haqiqi</h5>
                                        <p>Apabila Nun Sukun atau Tanwin bertemu dengan salah satu huruf Ikhfa Haqiqi, maka cara membacanya disamarkan dengan tempo ghunnah (dengung) yang dipanjangkan.</p>
                                        <p>Huruf-huruf Ikhfa Haqiqi :</p>
                                        <p class="textarab">ت ث ج د ذ ز س ش ص ض ط ظ ف ق ك</p>
                                        <p>Contoh - contoh Ikhfa Haqiqi:</p>
                                        <p class="textarab">وَالْإِنْجِيلَ - أَنْزَلَ - ذُو انْتِقَامٍ - وَالْأُنثَىٰ - عَذَابٌ شَدِيدٌ </p>
                                   </li>
                              </ol>
                         </div>
                    </div>
               </div>
               <div class="card mt-2">
                    <div class=" card-header" id="heading2">
                         <button class="btn" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                              Hukum Nun dan Mim Bertasydid
                         </button>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#panduanTajwid">
                         <div class="card-body">
                              <p>Apabila dalam suatu kata terdapat Nun atau Mim yang bertasydid, maka wajib dibaca dengan tempo ghunnah (dengung) yang dipanjangkan.</p>
                              <p>Contoh:</p>
                              <p class="textarab">إنَّما - جمَّا</p>
                         </div>
                    </div>
               </div>
               <div class="card mt-2">
                    <div class=" card-header" id="heading3">
                         <button class="btn" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                              Hukum Mim Mati
                         </button>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#panduanTajwid">
                         <div class="card-body">
                              <ol>
                                   <li>
                                        <h5>Ikhfa' Syafawi</h5>
                                        <p>Apabila Mim Sukun bertemu dengan huruf Ba, maka cara membacanya mendengungkan huruf Mim dengan tempo yang dipanjangkan.</p>
                                        <p>Contoh Ikhfa' Syafawi :</p>
                                        <p class="textarab">تَرْمِيْهِمْ بِحِجَارَةٍ - يَعْلَمْ بِاَنَّ</p>
                                   </li>
                                   <li>
                                        <h5>Idgham Mimi</h5>
                                        <p>Apabila Mim Sukun bertemu dengan huruf Mim, maka cara membacanya Mim pertama dimasukkan ke dalam Mim kedua dengan tempo dengung yang dipanjangkan.</p>
                                        <p>Contoh-contoh Idhgam Mimi</p>
                                        <p class="textarab">فِيْ قُلُوْبِهِمْ مَرَضٌ - اَجْرَهُمْ مَرَّتَيْنِ</p>
                                   </li>
                                   <li>
                                        <h5>Idzhar Syafawi</h5>
                                        <p>Apabila Mim Sukum bertemu dengan huruf Hijaiyah selain Ba dan Mim, maka cara membacanya jelas</p>
                                        <p>Contoh - contoh Idzhar Syafawi:</p>
                                        <p class="textarab">اَلَمْ تَرَ – كَيْدَهُمْ فِيْ</p>
                                   </li>
                              </ol>
                         </div>
                    </div>
               </div>
               <div class="card mt-2">
                    <div class=" card-header" id="heading4">
                         <button class="btn" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                              Hukum Idgham
                         </button>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#panduanTajwid">
                         <div class="card-body">
                              <ol>
                                   <li>
                                        <h5>Idgham Mutamatsilain</h5>
                                        <p>Apabila terjadi pertemuan dua huruf yang sama Makhraj dan Sifatnya, yang pertama Sukun dan yang kedua berharakat Fathah, Kasrah atau Dhammah, maka cara membacanya huruf pertama dimasukkan ke huruf kedua tanpa dengung (ghunnah).</p>
                                        <p>Pengecualian pada pertemuan - pertemuan huruf berikut ini :</p>
                                        <ul>
                                             <li>
                                                  <p>Mim (م) Sukun dan Mim (م) : Idgham Mimi (dengung)</p>
                                             </li>
                                             <li>
                                                  <p>Nun ( ن) Sukun dan Nun ( ن) : Idgaham Bighunnah (dengung)</p>
                                             </li>
                                             <li>
                                                  <p>Huruf-huruf mad (ا و ي) : Dibaca panjang sebagaimana mestinya (hukum mad).</p>
                                             </li>
                                        </ul>
                                        <p>Contoh - contoh Idgham Mutamatsilain:</p>
                                        <p class="textarab">إِذ ذَّهَبَ - وَقَدْ دَّخَلُوْا - عَفَـواْ وَّقَالُواْ - فَاضْرِبْ بِّهِ - كَانَتْ تَّعْمَلُ</p>
                                   </li>
                                   <li>
                                        <h5>Idgham Mutajanisain</h5>
                                        <p>Apabila terjadi pertemuan dua huruf yang sama Makhraj namun berbeda Sifatnya, maka cara membacanya huruf pertama dimasukkan ke huruf kedua tanpa dengung (ghunnah).</p>
                                        <p>Seperti huruf-huruf berikut ini: </p>
                                        <p class="textarab">(ط د ت) (ظ ذ ث) (م ب)</p>
                                        <p>Contoh - contoh Idgham Mutajanisain</p>
                                        <p class="textarab">وَدَّت طَّـآئِفَةٌ - لَئِن بَسَطتَ - يَلْهَث ذَّلِكَ - إِذْ ظَّلَمْتُمْ - ارْكَبْ مَّعَنَا</p>
                                   </li>
                                   <li>
                                        <h5>Idgham Mutaqaribain</h5>
                                        <p>Apabila terjadi pertemuan dua huruf yang berdekatan Makhraj atau Sifatnya, maka cara membacanya huruf pertama dimasukkan ke huruf kedua tanpa dengung (ghunnah).</p>
                                        <p>Seperti huruf-huruf berikut ini: </p>
                                        <p class="textarab">(ق :ك) (ل : ر)</p>
                                        <p>Contoh - contoh Idgham Mutaqaribain :</p>
                                        <p class="textarab">اَلَمْ نَخْلُقْكُّمْ - وَقُـل رَّبِّ</p>
                                   </li>
                              </ol>
                         </div>
                    </div>
               </div>
               <div class="card mt-2">
                    <div class=" card-header" id="heading5">
                         <button class="btn" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                              Hukum Mad
                         </button>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#panduanTajwid">
                         <div class="card-body">
                              <ol>
                                   <li>
                                        <h5>Mad Asli / Mad Thabi’i</h5>
                                        <p>Apabila huruf berharakat Fathah bertemu dengan Alif, atau huruf berharakat Kasrah bertemu Ya Sukun, atau huruf berharakat Dhammah bertemu Wau Sukun, maka cara membacanya dipanjangkan 2 harakat.</p>
                                        <p>huruf mad ada tiga yaitu:</p>
                                        <p class="textarab">ا , و , ي </p>
                                        <p>Contoh - contoh Mad Asli/Thabi’i:</p>
                                        <p class="textarab">كتَا بٌ - يَقُوْلُ – سمِيْعٌ</p>
                                   </li>
                                   <li>
                                        <h5>Mad 'Iwadh</h5>
                                        <p>Apabila huruf berharakat Fathatain bertemu dengan Alif dan setelahnya Waqaf, maka cara membacanya dipanjangkan 2 harakat.
                                             Kecuali pada huruf ta marbuthah <span class="textarab">( ة )</span>, maka dibaca Ha Sukun tanpa dipanjangkan.
                                        </p>
                                        <p>Contoh - contoh Mad 'Iwadh:</p>
                                        <p class="textarab">سَميْعًا بَصيْرًا - عَلِيْمًا حَكِيمًا</p>
                                   </li>
                                   <li>
                                        <h5>Mad Shilah Qashirah</h5>
                                        <p>Apabila huruf Ha Dhamir berharakat Kasrah atau Dhammah yang sebelum dan sesudahnya bukan huruf Sukun dan sesudahnya bukan huruf Hamzah, maka cara membacanya dipanjangkan 2 harakat.
                                        </p>
                                        <p>Contoh - contoh Mad Shilah Qashirah:</p>
                                        <p class="textarab">اِنَّهُ كَانَ - ﻻَشَرِيْك لَهُ</p>
                                   </li>
                                   <li>
                                        <h5>Mad Thabi’I Harfiy</h5>
                                        <p>Apabila huruf Alif berada pada huruf Muqatha’ah, maka cara membacanya dipanjangkan 2 harakat.
                                        </p>
                                        <p>Huruf Muqatha’ah adalah potongan-potongan huruf yang ada pada awal sebagian surat dalam al-Quran, dianataranya adalah huruf:</p>
                                        <p class="textarab">ح ي ط ه ر</p>
                                        <p>Contoh-contoh Mad Thabi’I Harfiy:</p>
                                        <p class="textarab">طه</p>
                                   </li>
                                   <li>
                                        <h5>Mad Tamkin</h5>
                                        <p>Apabila huruf Ya bertasydid dan berharakat Kasrah bertemu dengan huruf Ya Sukun, maka cara membacanya dipanjangkan 2 harakat.</p>
                                        <p>Contoh - contoh Mad Tamkin</p>
                                        <p class="textarab">النَبِيّيْنَ - حُييِّيْتُمْ</p>
                                   </li>
                                   <li>
                                        <h5>Mad Wajib Muttashil</h5>
                                        <p>Apabila Mad Asli atau Mad Thabi'i bertemu dengan huruf Hamzah dalam satu kata, maka cara membacanya dipanjangkan 4 atau 5 harakat</p>
                                        <p>Contoh - contoh Mad Wajib Muttashil:</p>
                                        <p class="textarab">سَوَآءٌ - جَآءَ – جِيْءَ</p>
                                   </li>
                                   <li>
                                        <h5>Mad Ja’iz Munfashil</h5>
                                        <p>Apabila Mad Asli atau Mad Thabi'i bertemu dengan huruf Hamzah tidak dalam satu kata, maka cara membacanya dipanjangkan 4 atau 5 harakat.</p>
                                        <p>Catatan:</p>
                                        <p>Pada Mad Jaiz Munfashil sebaiknya dibaca 4 atau 5 harakat, boleh dibaca 2 harakat, tetapi harus mengikuti kaidah-kaidah yang perlu difahami terlebih dahulu dari jalur Thayyibatun Nasyr.</p>
                                        <p>Contoh - contoh Mad Ja’iz Munfasil:</p>
                                        <p class="textarab">وَﻻَأنْتُمْ - بِمَا أُنْزِلَ</p>
                                   </li>
                                   <li>
                                        <h5>Mad Shilah Thawilah</h5>
                                        <p>Apabila Ha Dhamir bertemu dengan Hamzah, maka cara membacanya dipanjangkan 4 atau 5 harakat.</p>
                                        <p>Catatan:</p>
                                        <p>Pada Mad Shilah Thawilah sebaiknya dibaca 4 atau 5 harakat, boleh juga dibaca 2 harakat, tetapi harus mengikuti kaidah-kaidah yang perlu difahami terlebih dahulu dari jalur Thayyibatun Nasyr.</p>
                                        <p>Contoh - contoh Mad Silah Thawilah:</p>
                                        <p class="textarab">عِنْدَهُ اِﻻَّبِاذْنِه - لَهُ اَخْلَدَهُ</p>
                                   </li>
                                   <li>
                                        <h5>Mad Badal</h5>
                                        <p>Apabila Hamzah bertemu dengan huruf Mad (ا و ي), maka cara membacanya dipanjangkan 2 harakat.</p>
                                        <p>Contoh - contoh Mad Badal:</p>
                                        <p class="textarab">أُوْتِيَ - إِيْمَانٌ</p>
                                   </li>
                                   <li>
                                        <h5>Mad Arid Lissukun</h5>
                                        <p>Apabila Mad Asli atau Mad Thabi’i bertemu dengan huruf yang berharakat Fathah, Kasrah,atau Dhammah yang disukunkan karena Waqaf, maka cara membacanya 2/4/6 harakat.</p>
                                        <p>Contoh - contoh Mad Arid Lissukun:</p>
                                        <p class="textarab">الْعَالَمِيْن۞ – يُؤْمِنُوْن۞ – تَعْمَلُوْن۞</p>
                                   </li>
                                   <li>
                                        <h5>Mad Liin</h5>
                                        <p>Apabila huruf berharakat Fathah bertemu Ya Sukun atau Wau Sukun, dan setelahnya adalah huruf berharakat yang di-Sukunkan karena Waqaf, maka cara membacanya dipanjangkan 2/4/6 harakat.</p>
                                        <p>Contoh - contoh Mad Liin:</p>
                                        <p class="textarab">رَيْبٌ – خَوْفٌ</p>
                                   </li>
                                   <li>
                                        <h5>Mad Farq</h5>
                                        <p>Mad Farq adalah Mad yang terhasil dari pertemuan Mad Badal dan huruf yang bertasydid. Cara membacanya dipanjangkan 6 harakat.</p>
                                        <p>Dinamakan Mad Farq karena untuk membedakan bahwa Hamzah tersebut adalah Hamzah untuk bertanya "apakah?" dan juga dikenali dengan nama Mad Istifham (pertanyaan). </p>
                                        <p>Contoh - contoh Mad Farq:</p>
                                        <p class="textarab">قُلْ ءٰاﷲُ اذِنَ لَكُمْ - قُلْ ءٰالذَّكَرَيْنِ</p>
                                   </li>
                                   <li>
                                        <h5>Mad Lazim Kalimi Mutsaqqal</h5>
                                        <p>Apabila Mad Asli atau Mad Thabi’i bertemu dengan huruf yang bertasydid, maka cara membacanya dipanjangkan 6 harakat.</p>
                                        <p>Contoh - contoh Mad Lazim Muthaqqal Kalimi:</p>
                                        <p class="textarab">وَﻻَالضَّآلِّينَ – اَلصّاخَةُ</p>
                                   </li>
                                   <li>
                                        <h5>Mad Lazim Kalimi Mukhaffaf</h5>
                                        <p>Apabila Mad Badal bertemu dengan huruf yang bertanda Sukun, maka cara membacanya dipanjangkan 6 harakat.</p>
                                        <p>Hanya terdapat pada 2 tempat di dalam Al-Quran: - (Yunus : 51) - (Yunus : 91) </p>
                                        <p>Contoh - contoh Mad Lazim Mukhaffaf Kalimi</p>
                                        <p class="textarab">ءَآلۡـَٰٔنَ وَقَدۡ كُنتُم</p>
                                   </li>
                                   <li>
                                        <h5>Mad Lazim Harfiy Mutsaqqal</h5>
                                        <p>Apabila Mad bertemu dengan huruf yang bertasydid pada huruf Muqatha’ah pada awal sebagian Surat dalam al-Quran, maka cara membacanya di-idghamkan atau ditasydidkan dengan panjang 6 harakat.</p>
                                        <p>Huruf-hurufnya adalah:</p>
                                        <p class="textarab">ن – ق – ص – ع – س – ل – ك – م </p>
                                        <p>Contoh - contoh Mad Lazim Muthaqqal Harfi:</p>
                                        <p class="textarab"><span>ا</span><span style="background-color:yellow;">ل</span><span>مص</span><span> - </span><span>ط</span><span style="background-color:yellow;">س</span><span>م</span><span> - </span><span>ا</span><span style="background-color:yellow;">ل</span><span>م</span></p>
                                   </li>
                                   <li>
                                        <h5>Mad Lazim Harfiy Mukhaffaf</h5>
                                        <p>Apabila Mad bertemu dengan huruf sukun pada huruf Muqatha’ah pada awal sebagian Surat dalam al-Quran, maka cara membacanya panjang 6 harakat.</p>
                                        <p>Huruf-hurufnya adalah:</p>
                                        <p class="textarab">ن – ق – ص – ع – س – ل – ك – م </p>
                                        <p>Contoh – contoh Mad Lazim Muthaqqal Harfi:</p>
                                        <p class="textarab"><span>ا</span><span>ل</span><span style="background-color:yellow;">مص</span><span> - </span><span>ط</span><span>س</span><span style="background-color:yellow;">م</span><span> - </span><span>ا</span><span style="background-color:yellow;">ل</span><span style="background-color:yellow;">م</span></p>
                                   </li>
                              </ol>
                         </div>
                    </div>
               </div>
               <div class="card mt-2">
                    <div class=" card-header" id="heading6">
                         <button class="btn" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                              Hukum Ra
                         </button>
                    </div>
                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#panduanTajwid">
                         <div class="card-body">
                              <ol>
                                   <li>
                                        <h5>Ra Tafkhim (Dibaca Tebal)</h5>
                                        <p>Ra Tafkhim adalah cara membaca huruf Ra dengan Tafkhim (tebal). </p>
                                        <p>Ra harus dibaca Tafkhim atau tebal karena beberapa sebab berikut ini:</p>
                                        <ul>
                                             <li>
                                                  <p>Ra yang berbaris Fathah atau Dhammah.</p>
                                                  <p class="textarab">رَسول - رُفاتا</p>
                                             </li>
                                             <li>
                                                  <p>Ra yang bertanda Sukun dan huruf sebelumnya berbaris Fathah atau Dhammah.</p>
                                                  <p class="textarab">تَرْمِيْهِمْ – زُرْتُمْ</p>
                                             </li>
                                             <li>
                                                  <p>Ra di ujung kalimat dibaca sebagai Sukun karena Waqaf, dan juga diselangi huruf Mad Wau ( و ) atau Alif ( ا ) dan sebelumnya ada huruf yang berharakat Fathah atau Dhammah.</p>
                                                  <p class="textarab">الصدور - الأبرار</p>
                                             </li>
                                             <li>
                                                  <p>Ra di ujung kalimat dibaca sebagai Sukun kerana Waqaf, yang sebelumnya terdapat huruf Sukun selain huruf ( ى ) dan sebelumnya terdapat huruf yang berbaris Fathah atau Dhammah.</p>
                                                  <p class="textarab">بالصبر - خسر</p>
                                             </li>
                                             <li>
                                                  <p>Ra yang bertanda Sukun selepas huruf Hamzah Washal yang berbaris Kasrah maupun Dhammah.</p>
                                                  <p class="textarab">ارجع - وارعوا</p>
                                             </li>
                                             <li>
                                                  <p>Ra yang bertanda Sukun selepas huruf yang berharakat Kasrah dan selepasnya terdapat huruf Isti'la'.</p>
                                                  <p class="textarab">قرطاس - فرقة</p>
                                             </li>
                                        </ul>
                                   </li>
                                   <li>
                                        <h5>Ra Tarqiq</h5>
                                        <p>Ra Tarqiq adalah cara membaca huruf Ra dengan Tarqiq (tipis). </p>
                                        <p>Ra harus dibaca Tarqiq atau tipis karena beberapa sebab berikut ini: </p>
                                        <ul>
                                             <li>
                                                  <p>Ra yang berbaris Kasrah.</p>
                                                  <p class="textarab">اَلْبَرِيَّةِ – مِنْ شَرِّ</p>
                                             </li>
                                             <li>
                                                  <p>Ra yang bertanda Sukun selepas huruf yang berharakat Kasrah dan bertemu dengan huruf yang bukan huruf Isti'la'.</p>
                                                  <p class="textarab">وأنذرهم - فرعون</p>
                                             </li>
                                             <li>
                                                  <p>Ra di ujung kalimat yang disukunkan karena Waqaf dan sebelumnya terdapat huruf Sukun yang bukan huruf Isti'la' dan sebelum huruf bertanda Sukun itu, terdapat huruf yang berharakat Kasrah.</p>
                                                  <p class="textarab">حجر - السحر</p>
                                             </li>
                                             <li>
                                                  <p>Ra di ujung kalimat yang di-Sukunkan karena Waqaf dan sebelumnya terdapat huruf Ya yang bertanda Sukun dan sebelum huruf Ya bertanda Sukun ini, terdapat huruf yang berharakat Fathah atau Kasrah.</p>
                                                  <p class="textarab">نصير – المنير</p>
                                             </li>
                                        </ul>
                                   </li>
                                   <li>
                                        <h5>Ra Jawazul Wahjhain</h5>
                                        <p>Ra Jawazul Wahjhain adalah cara membaca huruf Ra dengan dua wajah, maksudnya boleh ditebalkan atau ditipiskan. </p>
                                        <p>Ra boleh ditebalkan atau ditipiskan karena beberapa sebab berikut ini: </p>
                                        <ul>
                                             <li>
                                                  <p>Ra Sukun yang huruf sebelumnya berbaris Kasrah dan bertemu dengan huruf Isti'la' yang berbaris Kasrah juga. Lebih utama dibaca tipis. </p>
                                             </li>
                                             <li>
                                                  <p>Ra yang di-Sukunkan di ujung kalimat karena Waqaf, sebelumnya terdapat huruf Isti'la' yang bertanda Sukun dan sebelum huruf Isti'la' ini, ada huruf yang berbaris Kasrah. Lebih utama dibaca tebal jika Ra berharakat Fathah, lebih utama dibaca tipis jika Ra berharakat Kasrah.</p>
                                             </li>
                                        </ul>
                                        <p>Contoh :</p>
                                        <p class="textarab">عليه قطرا – عين القطر</p>
                                   </li>
                              </ol>
                         </div>
                    </div>
               </div>
               <div class="card mt-2">
                    <div class=" card-header" id="heading7">
                         <button class="btn" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                              Qalqalah
                         </button>
                    </div>
                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#panduanTajwid">
                         <div class="card-body">
                              <p>Qalqalah adalah memantulnya suara pada huruf Sukun, tanpa terpengaruh dengan harakat yang tiga.</p>
                              <p>Huruf Qalqalah ada lima yaitu :</p>
                              <p class="textarab">ب ج د ط ق</p>
                              <p>Qalqalah terbagi menjadi dua jenis: </p>
                              <ol>
                                   <li>
                                        <h5>Qalqalah kecil / Sughra</h5>
                                        <p>Apabila salah satu daripada huruf Qalqalah itu berada di tengah kata atau kalimat.</p>
                                        <p>Contoh : </p>
                                        <p class="textarab">تدرسون - بقلها</p>
                                   </li>
                                   <li>
                                        <h5>Qalqalah besar/Kubra</h5>
                                        <p>Apabila salah satu daripada huruf Qalqalah itu dimatikan karena Waqaf atau berhenti (bertasydid atau tidak)</p>
                                        <p>Contoh : </p>
                                        <p class="textarab">تَبَّتْ يَدَا أَبِي لَهَبٍ وَتَبَّ</p>
                                   </li>
                              </ol>
                         </div>
                    </div>
               </div>
               <div class="card mt-2">
                    <div class=" card-header" id="heading8">
                         <button class="btn" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                              Bacaan Khusus
                         </button>
                    </div>
                    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#panduanTajwid">
                         <div class="card-body">
                              <ol>
                                   <li>
                                        <h5>Nun 'Iwad</h5>
                                        <p>Apabila huruf yang berharakat Tanwin bertemu dengan Hamzah Wasal ( ا ), maka huruf nun kecil dibaca dengan harakat Kasrah.</p>
                                        <p>Nun 'Iwad juga dikenal dengan Nun Washal atau Nun Wiqaayah. </p>
                                        <p>Contoh : </p>
                                        <p class="textarab">خَيْرًا الْوَصِيَّةُ - جَزَاءً الْحُسْنَى</p>
                                   </li>
                                   <li>
                                        <h5>Isymam</h5>
                                        <p>Hanya ada satu ayat yang terdapat bacaan Isymam dalam Al-Quran, yaitu pada Qs: Yusuf ayat: 11</p>
                                        <p>Isymam dibaca dengan memonyongkan bibir seolah-olah sedang mengeluarkan kata "nu" namun tanpa suara. Hanya ada satu ayat daam Al-qur’an pada surat Yusuf ayat 11, yang berbunyi:</p>
                                        <p class="textarab">لاَ تَأْمَنَّا</p>
                                   </li>
                                   <li>
                                        <h5>Imalah</h5>
                                        <p>Imalah : Fathah yang dimiringkan ke Kasrah dan Alif yang dimiringkan ke Ya (dibaca seperti ‘e’). Huruf Ra dibaca Tarqiq(tipis). Hanya ada satu tempat bacaan Imalah: Surah Hud ayat 41 yang berbunyi:</p>
                                        <p class="textarab">مَجْرَاهَا</p>
                                   </li>
                                   <li>
                                        <h5>Naql</h5>
                                        <p>Naql adalah memindahkan harakat Hamzah pada huruf sebelumnya menjadi huruf Lam. Hal ini dikarenakan Hamzahnya berupa Hamzah Washal. Di dalam al-Qur'an hanya terdapat di Surat al-Hujurat, ayat 11. Cara bacanya: “Bi’salismul...”.</p>
                                        <p class="textarab">بِئْسَ الاِسْمُ </p>
                                   </li>
                                   <li>
                                        <h5>Tashil</h5>
                                        <p>Tashil adalah Hamzah pertama dibaca jelas dan pendek, sedangkan Hamzah kedua dibaca samar, yaitu meringankan bacaan antara Hamzah dan Alif. Di dalam Al-Qur’an hanya terdapat pada satu tempat yaitu di surat Fussilaat ayat 44, yang berbunyi:</p>
                                        <p class="textarab">ءَا۠عْجَمِىٌّ۬</p>
                                   </li>
                                   <li>
                                        <h5>Saktah</h5>
                                        <p>Saktah adalah berhenti sejenak tanpa bernafas dengan niat melanjutkan bacaan. Menurut Imam Hafs, saktah hanya terdapat pada empat tempat di dalam al-Qur'an yaitu: </p>
                                        <ul>
                                             <li>
                                                  <p>Surah Kahfi: 1-2. </p>
                                                  <p><span class="textarab">وَلَمْ يَجْعَل لَّهُ عِوَجَا</span> (1) <span class="textarab">قَيِّمًا لِّيُنذِرَ بَأْسًا شَدِيدًا</span></p>
                                             </li>
                                             <li>
                                                  <p>Surah Yasin: 52.</p>
                                                  <p class="textarab">مِن مَّرْقَدِنَا هَذَا مَا وَعَدَ الرَّحْمَنُ وَصَدَقَ الْمُرْسَلُونَ</p>
                                             </li>
                                             <li>
                                                  <p>Surah Al-Qiyamah: 27. </p>
                                                  <p class="textarab">وَقِيلَ مَنْ رَاقٍ</p>
                                             </li>
                                             <li>
                                                  <p>Surah Al-Muthaffifin: 14.</p>
                                                  <p class="textarab">كَلَّا بَلْ رَانَ عَلَى قُلُوبِهِم مَّا كَانُوا يَكْسِبُونَ</p>
                                             </li>
                                        </ul>
                                   </li>
                                   <li>
                                        <h5>Badal</h5>
                                        <p>Badal adalah mengganti huruf hijaiyah satu dengan huruf hijaiyah lainnya.</p>
                                        <p>Macam-macam lafadz badal dalam Al-qur’an:</p>
                                        <ul>
                                             <li>
                                                  <p>Badal <span class="textarab"> ص </span> dengan <span class="textarab"> س </span>, Yaitu mengganti huruf shad dengan bacaan Siin pada lafadz <span class="textarab"> وَیَبۡصُۜطُ </span> dalam QS. Al-Baqarah : 245 dan lafadz<span class="textarab"> بَصۜۡطَةࣰۖ </span> dalam QS. Al-A’raf : 69.
                                                       Adapun pada lafadz<span class="textarab"> ٱلۡمُصَۣیۡطِرُون </span> dalam QS. At-Thur : 37, huruf ص boleh tetap dibaca shad dan boleh dibaca siin, namun bacaan Shad lebih didahulukan dalam riwayat hafsh.
                                                  </p>
                                             </li>
                                             <li>
                                                  <p>Badal <span class="textarab">ء</span> dengan <span class="textarab">ي</span> , Yaitu mengganti Hamzah sukun dengan ya’.
                                                       Contoh pada QS. Al-Ahqaf : 4
                                                  </p>
                                                  <p class="textarab"><span> أَمۡ لَهُمۡ شِرۡكࣱ فِی ٱلسَّمَـٰوَ ٰ⁠تِۖ </span><span style="background-color:yellow;"> ٱئۡتُونِی </span><span> بِكِتَـٰبࣲ مِّن قَبۡلِ </span></p>
                                                  <p>Cara membacanya yaitu apabila seorang qari’ membaca waqaf pada lafadz<span class="textarab"> (فِی ٱلسَّمَـٰوَ ٰ⁠تِۖ) </span>, maka huruf hamzah sukun diganti dengan huruf Ya<span class="textarab">( إيتوني </span><span><i class="fas fa-arrow-right"></i></span><span class="textarab"> ٱئۡتُونِی)</span>. <br>Namun apabila dibaca washal<span class="textarab"> (فِی ٱلسَّمَـٰوَ ٰ⁠تِۖ ٱئۡتُونِی) </span>, maka tidak ada perubahan.</p>
                                             </li>
                                             <li>
                                                  <p>Dalam QS. ar Ruum:54, Huruf Dhad boleh dibaca dengan 2 cara, yaitu dengan fathah ataupun dhammah. Namun harakat fathah lebih diutamakan.</p>
                                                  <p class="textarab"><span> ٱللَّهُ ٱلَّذِی خَلَقَكُم مِّن</span><span style="font-weight: bold; background-color:yellow;"> ضعۡفࣲ </span><span> ثُمَّ جَعَلَ مِنۢ بَعۡدِ</span><span style="font-weight: bold; background-color:yellow;"> ضعۡفࣲ </span><span> قُوَّةࣰ ثُمَّ جَعَلَ مِنۢ بَعۡدِ قُوَّةࣲ</span><span style="font-weight: bold; background-color:yellow;"> ضعۡفࣰا </span><span> وَشَیۡبَةࣰۚ</span></p>
                                                  <p><span class="textarab">ضُعفٍ / ضَعفٍ</span></p>
                                                  <p><span class="textarab">ضُعفا / ضَعفا</span></p>
                                             </li>
                                        </ul>
                                   </li>
                                   <li>
                                        <h5>Sifr Mustadir </h5>
                                        <p>Simbol (o) yaitu bulatan kecil yang di letakkan di atas huruf illat untuk menunjukkan adanya tambahan huruf pada penulisan, tetapi huruf itu tidak diucapkan baik ketika Washal atau Waqaf (tidak boleh di baca panjang). Jumlah sifr mustadir di dalam al-Quran cukup banyak, diantaranya:</p>
                                        <p>Q.S. An-Najm: 51 = <span class="textarab"> ثَمُوْدَا۠</span></p>
                                        <p>Q.S. Al-An'am: 34 = <span class="textarab"> نَّبَإِ۟ى</span></p>
                                   </li>
                                   <li>
                                        <h5>Sifr Mustatil Qoim</h5>
                                        <p>Simbol (0) yaitu bulatan lonjong diatas huruf Alif yang setelahnya huruf berharakat, tanda ini menunjukkan adanya penambahan penulisan dan di baca pendek pada saat Washal (bersambung) dan di baca panjang ketika Waqaf. Sifr lonjong penanda ini hanya dipakai untuk menandai pada huruf alif. Dalam qiroah Imam Hafs masyhur disebut dengan Al alifaat assab’u (alif-alif yang tujuh) walaupun dalam al-Quran Alif ini tidak hanya berjumlah tujuh, terutama pada Alif dalam kata “Ana”, tetapi secara garis besar berjumlah 7. Contoh:</p>
                                        <p>Q.S. Al-Ahzab: 66 = <span class="textarab"> الرَّسُوْلَا۠</span></p>
                                        <p>Q.S. Al-Ahzab: 10 = <span class="textarab"> الظُّنُوْنَا۠</span></p>
                                   </li>
                                   <li>
                                        <h5>Tanda Waqaf</h5>
                                        <table class="table table-bordered">
                                             <tr>
                                                  <td>
                                                       مـ
                                                  </td>
                                                  <td>Waqaf Lazim, harus menghentikan bacaan pada lafazh yang bertanda ini, sebab jika disambung maka dapat mengubah makna ayat.
                                                  </td>
                                             </tr>
                                             <tr>
                                                  <td>
                                                       قﻠﮯ
                                                  </td>
                                                  <td>Waqaf Aula, boleh Waqaf atau Washal, namun Waqaf lebih diutamakan.
                                                  </td>
                                             </tr>
                                             <tr>
                                                  <td>
                                                       ج
                                                  </td>
                                                  <td>Waqaf Jaiz, boleh Waqaf atau Washal.
                                                  </td>
                                             </tr>
                                             <tr>
                                                  <td>
                                                       ﺻﻠﮯ
                                                  </td>
                                                  <td>Washal Aula, boleh Waqaf atau Washal, namun Washal lebih diutamakan
                                                  </td>
                                             </tr>
                                             <tr>
                                                  <td>
                                                       لا
                                                  </td>
                                                  <td>Waqaf Mamnuu’, tidak boleh Waqaf pada lafazh yang bertanda ini, kecuali jika terdapat pada akhir ayat.
                                                  </td>
                                             </tr>
                                             <tr>
                                                  <td>
                                                       س
                                                  </td>
                                                  <td>Behenti sesaat tanpa mengambil nafas.
                                                  </td>
                                             </tr>
                                             <tr>
                                                  <td>
                                                       ∴ ∴
                                                  </td>
                                                  <td>Waqaf Muraqabah, harus Waqaf pada salah satu lafazh yang bertanda ini, kurang baik apabila Washal pada keduanya, dan dilarang Waqaf pada keduanya.
                                                  </td>
                                             </tr>
                                        </table>
                                   </li>
                              </ol>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<?= $this->endSection(); ?>