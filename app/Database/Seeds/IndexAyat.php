<?php
	
	namespace App\Database\Seeds;
	
	use App\Models\IndexAyatMasterKlasifikasiModel;
	use App\Models\IndexAyatModel;
	use CodeIgniter\Database\Seeder;
	
	class IndexAyat extends Seeder
	{
		
		/**
		 * @throws \ReflectionException
		 */
		public function run()
		{
			$masterKlasifikasi = array(
				array(
					"master" => "Bangsa Terdahulu"),
				array(
					"master" => "Ibadah"),
				array(
					"master" => "Muamalat"),
				array(
					"master" => "Sejarah"),
				array(
					"master" => "Makanan dan Minuman"),
				array(
					"master" => "Peradilan dan Hakim"),
				array(
					"master" => "Iman"),
				array(
					"master" => "Al-Quran"),
				array(
					"master" => "Pakaian dan Perhiasan"),
				array(
					"master" => "Hukum Pidana Jinayah"),
				array(
					"master" => "Ilmu"),
				array(
					"master" => "Akhlaq & Adab"),
				array(
					"master" => "Hukum Privat"),
				array(
					"master" => "Jihad")
			);
			$masterKlasifikasiModel = new IndexAyatMasterKlasifikasiModel();
			$masterKlasifikasiModel->truncate();
			foreach ($masterKlasifikasi as $row) {
				$masterKlasifikasiModel->insert($row);
			}
			
			$indexAyat = array(
				array(
					"id_master" => 1,
					"level" => 1,
					"index" => "Awal kejadian makhluk"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Penciptaan selain manusia"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan Arsy",
					"ayat" => "Qs.7:54 | Qs.13:2 | Qs.25:59"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Kursi Allah (Kekuasaan Dan Ilmunya)",
					"ayat" => "Qs.2:255"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan Lauhhil Mahfuzh",
					"ayat" => "Qs.13:39 | Qs.17:58 | Qs.20:52 | Qs.85:22"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan langit dan bumi",
					"ayat" => "Qs.2:22 | Qs.2:29 | Qs.2:164 | Qs.6:1 | Qs.6:14 | Qs.6:73 | Qs.6:79 | Qs.6:101 | Qs.7:54 | Qs.10:3 | Qs.11:7 | Qs.13:2 | Qs.14:10 | Qs.14:19 | Qs.15:19 | Qs.15:85 | Qs.16:3 | Qs.17:99 | Qs.18:51 | Qs.20:4 | Qs.21:16 | Qs.25:59 | Qs.27:60 | Qs.29:44 | Qs.29:61 | Qs.40:57 | Qs.41:9 | Qs.41:11 | Qs.44:38 | Qs.44:39 | Qs.45:22 | Qs.46:33 | Qs.50:6 | Qs.50:7 | Qs.50:38 | Qs.51:7 | Qs.51:47 | Qs.51:48 | Qs.52:36 | Qs.55:7 | Qs.55:10 | Qs.57:4 | Qs.71:15 | Qs.78:6 | Qs.78:12 | Qs.79:27 | Qs.79:28 | Qs.88:18 | Qs.88:20 | Qs.91:5 | Qs.91:6"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan gunung",
					"ayat" => "Qs.13:3 | Qs.16:15 | Qs.77:27 | Qs.78:7 | Qs.79:32 | Qs.88:19"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan laut dan sungai",
					"ayat" => "Qs.13:3 | Qs.16:14 | Qs.16:15 | Qs.25:53 | Qs.27:61 | Qs.45:12 | Qs.55:22"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan hewan",
					"ayat" => "Qs.2:164 | Qs.2:259 | Qs.3:14 | Qs.16:5 | Qs.22:18 | Qs.24:45 | Qs.35:28 | Qs.40:79 | Qs.42:11 | Qs.42:29 | Qs.43:12 | Qs.47:12"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan serangga",
					"ayat" => "Qs.16:68 | Qs.22:73 | Qs.34:14"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan makhluk yang hidup di air",
					"ayat" => "Qs.16:14 | Qs.18:61 | Qs.18:63"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan hewan melata",
					"ayat" => "Qs.20:20 | Qs.24:45"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan tumbuh-tumbuhan",
					"ayat" => "Qs.2:261 | Qs.6:99 | Qs.6:141 | Qs.13:4 | Qs.16:11 | Qs.16:67 | Qs.17:91 | Qs.18:32 | Qs.34:16 | Qs.50:10 | Qs.55:11 | Qs.55:12 | Qs.86:12 | Qs.95:1"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan negeri-negeri"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan kota Mekah dan Masjidilharam",
					"ayat" => "Qs.3:96 | Qs.3:97 | Qs.14:35 | Qs.27:91 | Qs.28:57 | Qs.29:67 | Qs.90:1 | Qs.95:3"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan Baitul Maqdis dan tanah Syam",
					"ayat" => "Qs.17:1 | Qs.21:71 | Qs.21:81"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan Mesir",
					"ayat" => "Qs.10:87 | Qs.12:21 | Qs.12:99 | Qs.43:51"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Ayat-ayat tentang bintang",
					"ayat" => "Qs.6:97 | Qs.7:54 | Qs.16:12 | Qs.16:16 | Qs.81:15 | Qs.81:16 | Qs.86:1 | Qs.86:2 | Qs.86:3"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Ayat-ayat tentang angin",
					"ayat" => "Qs.2:164 | Qs.34:12 | Qs.45:5 | Qs.51:1 | Qs.51:41 | Qs.51:42 | Qs.77:1 | Qs.77:2"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan matahari dan bulan",
					"ayat" => "Qs.7:54 | Qs.16:12 | Qs.21:33 | Qs.36:39 | Qs.91:1 | Qs.91:2"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Sifat matahari dan bulan",
					"ayat" => "Qs.6:96 | Qs.10:5 | Qs.13:2 | Qs.14:33 | Qs.16:12 | Qs.78:13"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Ayat-ayat tentang awan dan hujan",
					"ayat" => "Qs.2:19 | Qs.2:20 | Qs.2:164 | Qs.7:57 | Qs.13:12 | Qs.24:43 | Qs.43:11 | Qs.51:2 | Qs.78:14"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penciptaan malam dan siang",
					"ayat" => "Qs.2:164 | Qs.3:27 | Qs.6:1 | Qs.6:96 | Qs.7:54 | Qs.13:3 | Qs.16:12 | Qs.17:12 | Qs.21:33 | Qs.24:44 | Qs.27:86 | Qs.28:71 | Qs.28:72 | Qs.28:73 | Qs.36:37 | Qs.78:10 | Qs.79:29 | Qs.81:17 | Qs.81:18 | Qs.89:4 | Qs.91:3 | Qs.91:4"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Penciptaan jin"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Jin diciptakan dari jilatan api",
					"ayat" => "Qs.7:12 | Qs.15:27 | Qs.38:76 | Qs.55:15"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Pengusiran iblis dari rahmat Allah"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Perintah sujudnya malaikat kepada Adam as.",
					"ayat" => "Qs.2:34 | Qs.7:11 | Qs.7:12 | Qs.15:29 | Qs.17:61 | Qs.38:72"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Keangkuhan iblis dan perlawanannya",
					"ayat" => "Qs.2:34 | Qs.7:11 | Qs.7:12 | Qs.7:13 | Qs.7:14 | Qs.15:31 | Qs.15:32 | Qs.15:33 | Qs.15:39 | Qs.17:61 | Qs.17:62 | Qs.18:50 | Qs.20:116 | Qs.38:74 | Qs.38:75 | Qs.38:76"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Pnegusiran iblis dan laknatnya hingga hari kiamat",
					"ayat" => "Qs.2:38 | Qs.4:118 | Qs.7:13 | Qs.7:14 | Qs.7:15 | Qs.7:18 | Qs.15:34 | Qs.15:35 | Qs.15:36 | Qs.15:37 | Qs.15:38 | Qs.17:63 | Qs.38:77 | Qs.38:78 | Qs.38:79 | Qs.38:80 | Qs.38:81"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Ancaman syetan terhadap manusia",
					"ayat" => "Qs.4:118 | Qs.4:119 | Qs.7:16 | Qs.7:17 | Qs.15:39 | Qs.17:62 | Qs.17:64 | Qs.20:117 | Qs.38:82"),
				array(
					"id_master" => 1,
					"level" => 1,
					"index" => "Nabi-nabi"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Pemilihan para nabi",
					"ayat" => "Qs.2:124 | Qs.3:33 | Qs.3:39 | Qs.3:45 | Qs.3:159 | Qs.3:161 | Qs.3:179 | Qs.6:83 | Qs.6:84 | Qs.6:85 | Qs.6:86 | Qs.6:87 | Qs.6:89 | Qs.6:124 | Qs.7:61 | Qs.7:63 | Qs.7:67 | Qs.7:68 | Qs.7:69 | Qs.7:73 | Qs.7:85 | Qs.7:103 | Qs.7:105 | Qs.7:144 | Qs.12:6 | Qs.12:23 | Qs.12:24 | Qs.12:109 | Qs.14:11 | Qs.16:2 | Qs.16:121 | Qs.19:58 | Qs.20:41 | Qs.21:85 | Qs.21:86 | Qs.22:75 | Qs.26:13 | Qs.26:114 | Qs.28:14 | Qs.28:26 | Qs.38:47 | Qs.38:48 | Qs.40:15 | Qs.42:13 | Qs.62:2 | Qs.68:50 | Qs.81:24 | Qs.93:7"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Allah menjadi saksi atas kebenaran para nabi",
					"ayat" => "Qs.4:79 | Qs.4:166 | Qs.13:43 | Qs.17:96 | Qs.48:28"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Para nabi menjadi saksi atas kaumnya",
					"ayat" => "Qs.4:41 | Qs.4:159 | Qs.16:84 | Qs.16:89"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Kekhususan para nabi"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Allah selalu mengikuti Nabi",
					"ayat" => "Qs.6:52 | Qs.8:67 | Qs.8:68 | Qs.9:43 | Qs.9:113 | Qs.33:37 | Qs.66:1 | Qs.80:1"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Setiap nabi memiliki pendukung dan pengikut",
					"ayat" => "Qs.3:52 | Qs.5:111 | Qs.20:29 | Qs.20:30 | Qs.20:31 | Qs.20:32 | Qs.57:27 | Qs.61:14"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Pengikut terdekat para nabi",
					"ayat" => "Qs.20:29 | Qs.20:30 | Qs.20:31 | Qs.20:32"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Sifat-sifat kenabian"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kesabaran para nabi",
					"ayat" => "Qs.3:21 | Qs.3:184 | Qs.5:41 | Qs.5:49 | Qs.5:70 | Qs.12:18 | Qs.12:32 | Qs.12:33 | Qs.12:42 | Qs.12:50 | Qs.12:83 | Qs.12:110 | Qs.13:32 | Qs.14:12 | Qs.17:47 | Qs.17:48 | Qs.17:74 | Qs.18:69 | Qs.20:56 | Qs.20:130 | Qs.21:84 | Qs.21:85 | Qs.25:20 | Qs.28:24 | Qs.68:49"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Setiap nabi diutus dengan memakai bahasa kaumnya",
					"ayat" => "Qs.14:4 | Qs.20:28"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Para pengikut nabi-nabi",
					"ayat" => "Qs.3:52 | Qs.3:53 | Qs.3:68 | Qs.3:146 | Qs.6:52 | Qs.10:83 | Qs.10:85 | Qs.35:18 | Qs.57:27 | Qs.60:4"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Mimpi nabi adalah wahyu",
					"ayat" => "Qs.17:60 | Qs.37:102 | Qs.37:105 | Qs.48:27"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Garis keturunan para rasul",
					"ayat" => "Qs.3:33 | Qs.3:34 | Qs.4:54 | Qs.6:84 | Qs.6:85 | Qs.6:86 | Qs.6:87 | Qs.12:6 | Qs.12:38 | Qs.19:58 | Qs.29:27 | Qs.38:30 | Qs.38:45 | Qs.57:26"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Setiap nabi menerima ujian",
					"ayat" => "Qs.2:87 | Qs.2:91 | Qs.3:54 | Qs.5:49 | Qs.5:110 | Qs.6:10 | Qs.6:25 | Qs.6:33 | Qs.6:34 | Qs.6:112 | Qs.7:60 | Qs.7:61 | Qs.7:66 | Qs.7:67 | Qs.7:77 | Qs.7:82 | Qs.7:88 | Qs.7:90 | Qs.7:109 | Qs.7:127 | Qs.7:131 | Qs.8:30 | Qs.9:40 | Qs.9:61 | Qs.10:65 | Qs.10:71 | Qs.10:76 | Qs.10:78 | Qs.11:12 | Qs.11:27 | Qs.11:32 | Qs.11:53 | Qs.11:54 | Qs.11:55 | Qs.11:88 | Qs.12:23 | Qs.12:25 | Qs.12:26 | Qs.12:27 | Qs.12:28 | Qs.12:32 | Qs.12:33 | Qs.12:35 | Qs.12:42 | Qs.12:77 | Qs.12:110 | Qs.13:32 | Qs.14:9 | Qs.14:12 | Qs.14:13 | Qs.15:6 | Qs.15:11 | Qs.15:68 | Qs.15:71 | Qs.15:80 | Qs.15:90 | Qs.15:95 | Qs.15:97 | Qs.16:101 | Qs.16:126 | Qs.16:127 | Qs.17:47 | Qs.17:48 | Qs.17:59 | Qs.17:73 | Qs.17:76 | Qs.17:96 | Qs.17:101 | Qs.17:103 | Qs.18:106 | Qs.19:46 | Qs.20:45 | Qs.20:57 | Qs.20:58 | Qs.20:63 | Qs.20:64 | Qs.20:67 | Qs.20:130 | Qs.21:3 | Qs.21:5 | Qs.21:36 | Qs.21:41 | Qs.21:55 | Qs.21:61 | Qs.21:68 | Qs.21:74 | Qs.21:76 | Qs.21:87 | Qs.22:40 | Qs.22:42 | Qs.22:43 | Qs.22:44 | Qs.22:68 | Qs.23:24 | Qs.23:25 | Qs.23:33 | Qs.23:34 | Qs.23:38 | Qs.23:70 | Qs.25:4 | Qs.25:5 | Qs.25:7 | Qs.25:8 | Qs.25:9 | Qs.25:20 | Qs.25:31 | Qs.25:37 | Qs.25:41 | Qs.25:42 | Qs.25:52 | Qs.26:14 | Qs.26:27 | Qs.26:29 | Qs.26:34 | Qs.26:35 | Qs.26:111 | Qs.26:112 | Qs.26:116 | Qs.26:117 | Qs.26:141 | Qs.26:153 | Qs.26:154 | Qs.26:160 | Qs.26:167 | Qs.26:169 | Qs.26:176 | Qs.26:185 | Qs.26:186 | Qs.26:187 | Qs.27:13 | Qs.27:47 | Qs.27:49 | Qs.27:56 | Qs.27:70 | Qs.28:24 | Qs.28:36 | Qs.28:48 | Qs.29:24 | Qs.29:29 | Qs.29:30 | Qs.33:69 | Qs.34:34 | Qs.34:43 | Qs.35:4 | Qs.35:25 | Qs.36:14 | Qs.36:15 | Qs.36:18 | Qs.36:30 | Qs.36:69 | Qs.37:36 | Qs.37:97 | Qs.37:106 | Qs.38:4 | Qs.38:6 | Qs.38:7 | Qs.38:8 | Qs.38:14 | Qs.40:5 | Qs.40:24 | Qs.40:25 | Qs.40:26 | Qs.40:28 | Qs.40:37 | Qs.43:7 | Qs.43:30 | Qs.43:52 | Qs.43:53 | Qs.44:14 | Qs.46:8 | Qs.46:22 | Qs.50:12 | Qs.50:13 | Qs.50:14 | Qs.51:39 | Qs.51:52 | Qs.52:30 | Qs.52:33 | Qs.54:2 | Qs.54:9 | Qs.54:18 | Qs.54:23 | Qs.54:24 | Qs.54:25 | Qs.54:33 | Qs.60:1 | Qs.61:5 | Qs.68:2 | Qs.68:51 | Qs.69:41 | Qs.69:42 | Qs.72:19 | Qs.81:22 | Qs.91:14 | Qs.96:9 | Qs.96:10 | Qs.96:11 | Qs.108:3 | Qs.111:4"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Beberapa nabi dituduh tukang sihir atau gila",
					"ayat" => "Qs.5:110 | Qs.7:109 | Qs.11:54 | Qs.17:101 | Qs.23:25 | Qs.26:27 | Qs.26:34 | Qs.26:35 | Qs.26:49 | Qs.26:153 | Qs.26:185 | Qs.28:36 | Qs.28:48 | Qs.54:9 | Qs.61:6"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Penjagaan Allah kepada para nabi",
					"ayat" => "Qs.7:105 | Qs.9:43 | Qs.12:23 | Qs.12:24 | Qs.17:74 | Qs.22:52 | Qs.38:86 | Qs.39:65 | Qs.53:2 | Qs.53:3 | Qs.53:4 | Qs.69:44 | Qs.80:1"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Para nabi memiliki sifat-sifat manusia lainnya",
					"ayat" => "Qs.3:79 | Qs.3:144 | Qs.3:164 | Qs.4:171 | Qs.5:75 | Qs.6:50 | Qs.7:63 | Qs.7:69 | Qs.7:150 | Qs.7:154 | Qs.7:188 | Qs.9:43 | Qs.9:128 | Qs.10:2 | Qs.11:31 | Qs.11:50 | Qs.12:109 | Qs.13:38 | Qs.14:10 | Qs.14:11 | Qs.16:43 | Qs.17:93 | Qs.17:94 | Qs.17:95 | Qs.18:110 | Qs.20:67 | Qs.21:7 | Qs.21:8 | Qs.21:34 | Qs.23:24 | Qs.23:25 | Qs.23:33 | Qs.23:34 | Qs.23:47 | Qs.23:51 | Qs.25:7 | Qs.25:20 | Qs.26:154 | Qs.26:186 | Qs.27:10 | Qs.28:18 | Qs.28:33 | Qs.29:33 | Qs.36:15 | Qs.39:30 | Qs.41:6 | Qs.42:51 | Qs.43:59 | Qs.50:2 | Qs.54:24 | Qs.62:2 | Qs.64:6"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Para nabi bekerja dan berdagang",
					"ayat" => "Qs.2:282 | Qs.25:47"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Mukjizat para nabi"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Pengukuhan kenabian dengan mukjizat",
					"ayat" => "Qs.2:60 | Qs.2:87 | Qs.2:92 | Qs.2:99 | Qs.3:49 | Qs.3:50 | Qs.3:55 | Qs.3:183 | Qs.3:184 | Qs.5:110 | Qs.5:115 | Qs.7:73 | Qs.7:85 | Qs.7:101 | Qs.7:103 | Qs.7:105 | Qs.7:106 | Qs.7:107 | Qs.7:108 | Qs.7:117 | Qs.7:160 | Qs.7:171 | Qs.9:70 | Qs.10:13 | Qs.10:74 | Qs.10:75 | Qs.11:64 | Qs.11:96 | Qs.12:93 | Qs.12:96 | Qs.14:5 | Qs.14:11 | Qs.15:81 | Qs.16:44 | Qs.17:59 | Qs.17:101 | Qs.20:17 | Qs.20:18 | Qs.20:19 | Qs.20:20 | Qs.20:21 | Qs.20:22 | Qs.20:47 | Qs.20:69 | Qs.20:77 | Qs.23:45 | Qs.26:15 | Qs.26:30 | Qs.26:32 | Qs.26:33 | Qs.26:45 | Qs.26:63 | Qs.26:155 | Qs.26:156 | Qs.27:10 | Qs.27:12 | Qs.27:36 | Qs.27:37 | Qs.28:32 | Qs.35:25 | Qs.40:22 | Qs.40:23 | Qs.40:28 | Qs.40:34 | Qs.40:50 | Qs.40:78 | Qs.40:83 | Qs.43:46 | Qs.43:48 | Qs.44:19 | Qs.44:33 | Qs.51:38 | Qs.54:27 | Qs.54:28 | Qs.57:25 | Qs.58:5 | Qs.61:6 | Qs.64:6 | Qs.72:27 | Qs.79:20 | Qs.91:13"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Hikmah mukjizat",
					"ayat" => "Qs.2:118 | Qs.2:248 | Qs.3:49 | Qs.3:50 | Qs.14:5 | Qs.17:59 | Qs.26:67 | Qs.28:32 | Qs.44:19 | Qs.44:33 | Qs.54:5"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Sikap kaumnya terhadap mukjizat",
					"ayat" => "Qs.2:87 | Qs.2:92 | Qs.2:99 | Qs.3:86 | Qs.3:184 | Qs.4:153 | Qs.5:110 | Qs.6:4 | Qs.6:5 | Qs.6:21 | Qs.6:25 | Qs.7:77 | Qs.7:103 | Qs.7:109 | Qs.7:111 | Qs.7:112 | Qs.7:123 | Qs.7:132 | Qs.7:136 | Qs.7:146 | Qs.9:70 | Qs.10:13 | Qs.10:38 | Qs.10:39 | Qs.10:74 | Qs.10:75 | Qs.10:76 | Qs.10:77 | Qs.13:27 | Qs.15:15 | Qs.15:81 | Qs.30:58 | Qs.43:47 | Qs.43:48 | Qs.58:5 | Qs.64:6 | Qs.78:28 | Qs.79:21 | Qs.79:22"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Pertolongan Allah kepada para nabi",
					"ayat" => "Qs.6:84 | Qs.11:63 | Qs.19:49 | Qs.19:50 | Qs.19:53 | Qs.21:72 | Qs.21:90 | Qs.29:27 | Qs.38:30 | Qs.38:43"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Allah memperkokoh para nabi",
					"ayat" => "Qs.11:36 | Qs.17:74 | Qs.26:15 | Qs.26:52 | Qs.26:62 | Qs.26:63 | Qs.28:35"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Perbedaan tingkat keutamaan antara para nabi",
					"ayat" => "Qs.2:253 | Qs.3:33 | Qs.17:55"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Perjanjian Allah atas para nabi",
					"ayat" => "Qs.2:253 | Qs.3:33 | Qs.17:55"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Cara turun wahyu",
					"ayat" => "Qs.42:51 | Qs.53:4 | Qs.53:9"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Perbedaan syariat diantara para nabi",
					"ayat" => "Qs.3:35 | Qs.3:50 | Qs.3:183 | Qs.6:146 | Qs.7:157 | Qs.19:26 | Qs.22:34 | Qs.22:67 | Qs.57:27"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Ulul-'azmi",
					"ayat" => "Qs.33:7 | Qs.46:35"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Kisah-kisah para rasul"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Adam as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Bapak umat manusia",
					"ayat" => "Qs.2:30 | Qs.4:1 | Qs.6:98 | Qs.7:189 | Qs.15:29"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Penciptaan Adam as. dan keturunannya",
					"ayat" => "Qs.2:28 | Qs.2:30 | Qs.4:1 | Qs.6:2 | Qs.6:98 | Qs.7:11 | Qs.7:12 | Qs.7:189 | Qs.15:26 | Qs.15:28 | Qs.15:29 | Qs.15:33 | Qs.19:67 | Qs.32:7 | Qs.39:6 | Qs.49:13 | Qs.55:3 | Qs.55:14 | Qs.67:23 | Qs.76:1 | Qs.80:18 | Qs.80:19 | Qs.80:20 | Qs.91:8 | Qs.92:3 | Qs.96:2"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Adam as. berasal dari tanah",
					"ayat" => "Qs.3:59 | Qs.6:2 | Qs.11:61 | Qs.15:26 | Qs.15:28 | Qs.15:29 | Qs.15:33 | Qs.71:17"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Mengajarkan Adam as. semua nama",
					"ayat" => "Qs.2:31 | Qs.2:33"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Malaikat sujud kepada Adam as.",
					"ayat" => "Qs.2:34 | Qs.7:11 | Qs.15:30 | Qs.18:50 | Qs.20:116 | Qs.38:72 | Qs.38:73"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Pohon yang buahnya dimakan oleh Adam as.",
					"ayat" => "Qs.2:35 | Qs.2:36 | Qs.7:19 | Qs.7:20 | Qs.7:22 | Qs.20:120 | Qs.20:121"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Turunnya Adam as. ke bumi",
					"ayat" => "Qs.2:36 | Qs.2:38 | Qs.7:24 | Qs.7:25 | Qs.7:27 | Qs.20:123"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Adam as. nabi pertama",
					"ayat" => "Qs.3:33 | Qs.20:122"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Perjanjian antara Adam as. dan anak-anaknya",
					"ayat" => "Qs.2:27 | Qs.2:84 | Qs.7:172 | Qs.20:115 | Qs.33:72 | Qs.36:60"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Tabiat-tabiat manusia",
					"ayat" => "Qs.2:30 | Qs.2:36 | Qs.4:28 | Qs.4:32 | Qs.4:128 | Qs.17:11 | Qs.20:115 | Qs.89:15 | Qs.89:16"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Idris as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Idris as. dalam Al Qur'an",
					"ayat" => "Qs.19:56 | Qs.19:57"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Idris as. dan sifatnya",
					"ayat" => "Qs.19:56 | Qs.19:57"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Nuh as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Rasul pertama yang diutus ke bumi",
					"ayat" => "Qs.4:163 | Qs.6:84 | Qs.11:25 | Qs.26:107 | Qs.29:14 | Qs.37:75 | Qs.57:26 | Qs.71:1 | Qs.71:2 | Qs.71:5"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Nuh as.",
					"ayat" => "Qs.4:163 | Qs.7:59 | Qs.7:61 | Qs.7:62 | Qs.7:63 | Qs.7:64 | Qs.10:71 | Qs.10:72 | Qs.11:25 | Qs.11:26 | Qs.11:28 | Qs.11:29 | Qs.11:30 | Qs.11:31 | Qs.11:42 | Qs.23:23 | Qs.26:105 | Qs.26:106 | Qs.26:108 | Qs.26:110 | Qs.71:1 | Qs.71:2 | Qs.71:3 | Qs.71:8 | Qs.71:9 | Qs.71:10 | Qs.71:11 | Qs.71:12 | Qs.71:13 | Qs.71:14 | Qs.71:15 | Qs.71:16 | Qs.71:17 | Qs.71:18 | Qs.71:19 | Qs.71:20"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Nuh menghadapi cobaan",
					"ayat" => "Qs.7:60 | Qs.7:61 | Qs.10:71 | Qs.11:27 | Qs.11:32 | Qs.14:9 | Qs.23:24 | Qs.23:25 | Qs.23:26 | Qs.25:37 | Qs.26:105 | Qs.26:111 | Qs.26:112 | Qs.26:113 | Qs.26:116 | Qs.26:117 | Qs.26:118 | Qs.38:12 | Qs.40:5 | Qs.50:12 | Qs.53:52 | Qs.54:9 | Qs.54:10 | Qs.66:10 | Qs.71:6 | Qs.71:7 | Qs.71:21 | Qs.71:22 | Qs.71:23 | Qs.71:24 | Qs.71:26 | Qs.71:27"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Gelar Abdussyakur (hamba yang bersyukur)",
					"ayat" => "Qs.17:3"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Terkabulnya doa nabi Nuh as.",
					"ayat" => "Qs.21:76 | Qs.21:77 | Qs.26:119 | Qs.37:75 | Qs.54:11 | Qs.54:12"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Allah menghancurkan kaum Nuh as.",
					"ayat" => "Qs.7:64 | Qs.9:70 | Qs.10:73 | Qs.11:37 | Qs.11:43 | Qs.11:44 | Qs.11:89 | Qs.23:27 | Qs.25:37 | Qs.26:120 | Qs.29:14 | Qs.37:82 | Qs.40:31 | Qs.51:46 | Qs.53:52 | Qs.54:11 | Qs.54:12 | Qs.71:25"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keselamatan Nuh as. di atas kapal",
					"ayat" => "Qs.7:64 | Qs.10:73 | Qs.11:37 | Qs.11:38 | Qs.11:40 | Qs.11:41 | Qs.11:42 | Qs.11:43 | Qs.11:44 | Qs.11:48 | Qs.23:27 | Qs.23:28 | Qs.23:29 | Qs.26:119 | Qs.29:15 | Qs.37:76 | Qs.54:13 | Qs.54:14 | Qs.54:15 | Qs.69:11"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Pujian atas nabi Nuh as.",
					"ayat" => "Qs.17:3 | Qs.37:78 | Qs.37:79 | Qs.37:80 | Qs.37:81 | Qs.66:10"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Hud as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Bangsa 'Aad membangun negeri mereka",
					"ayat" => "Qs.7:69 | Qs.26:128 | Qs.26:129 | Qs.26:133 | Qs.26:134 | Qs.41:15 | Qs.89:7 | Qs.89:8"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Hud as.",
					"ayat" => "Qs.7:65 | Qs.7:66 | Qs.7:67 | Qs.7:68 | Qs.7:69 | Qs.7:70 | Qs.7:71 | Qs.7:72 | Qs.11:50 | Qs.11:51 | Qs.11:52 | Qs.11:53 | Qs.11:54 | Qs.11:55 | Qs.11:56 | Qs.11:57 | Qs.23:32 | Qs.26:124 | Qs.26:125 | Qs.26:126 | Qs.26:127 | Qs.26:131 | Qs.26:132 | Qs.26:135 | Qs.46:21 | Qs.46:23"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Hud as. menghadapi cobaan",
					"ayat" => "Qs.7:66 | Qs.7:67 | Qs.11:53 | Qs.11:54 | Qs.11:55 | Qs.14:9 | Qs.26:123 | Qs.26:136 | Qs.26:137 | Qs.38:12 | Qs.46:22 | Qs.50:13 | Qs.54:18"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kehancuran bangsa 'Aad",
					"ayat" => "Qs.7:72 | Qs.9:70 | Qs.11:58 | Qs.11:89 | Qs.23:41 | Qs.25:38 | Qs.26:139 | Qs.29:38 | Qs.29:40 | Qs.40:31 | Qs.41:13 | Qs.41:16 | Qs.46:24 | Qs.46:25 | Qs.51:41 | Qs.51:42 | Qs.53:50 | Qs.54:19 | Qs.54:20 | Qs.69:6 | Qs.69:7 | Qs.69:8 | Qs.89:6"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Soleh as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Pemberian nikmat kepada kaum Tsamud",
					"ayat" => "Qs.7:74 | Qs.15:82 | Qs.26:146 | Qs.26:147 | Qs.26:148 | Qs.26:149 | Qs.51:43 | Qs.89:9"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Shaleh as.",
					"ayat" => "Qs.7:73 | Qs.7:74 | Qs.7:75 | Qs.7:76 | Qs.7:77 | Qs.7:78 | Qs.7:79 | Qs.11:61 | Qs.11:62 | Qs.11:63 | Qs.26:141 | Qs.26:142 | Qs.26:143 | Qs.26:144 | Qs.26:145 | Qs.26:146 | Qs.26:147 | Qs.26:148 | Qs.26:149 | Qs.26:150 | Qs.26:151 | Qs.26:152 | Qs.27:45 | Qs.27:46 | Qs.27:47"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Unta nabi Shaleh as.",
					"ayat" => "Qs.7:73 | Qs.11:64 | Qs.11:65 | Qs.26:155 | Qs.26:156 | Qs.54:27 | Qs.54:28 | Qs.91:13"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Penyembelihan unta nabi Shaleh as.",
					"ayat" => "Qs.7:77 | Qs.11:65 | Qs.17:59 | Qs.26:157 | Qs.54:29 | Qs.91:12 | Qs.91:14"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Shaleh as. menghadapi cobaan",
					"ayat" => "Qs.7:75 | Qs.7:76 | Qs.7:77 | Qs.11:62 | Qs.14:9 | Qs.15:80 | Qs.15:81 | Qs.15:90 | Qs.26:141 | Qs.26:153 | Qs.27:45 | Qs.27:47 | Qs.27:48 | Qs.27:49 | Qs.38:13 | Qs.50:12 | Qs.54:23 | Qs.54:24 | Qs.54:25 | Qs.91:11 | Qs.91:14"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Turunnya azab atas kaum Tsamud",
					"ayat" => "Qs.7:78 | Qs.9:70 | Qs.11:66 | Qs.11:67 | Qs.11:68 | Qs.11:89 | Qs.15:83 | Qs.15:84 | Qs.25:38 | Qs.26:158 | Qs.27:51 | Qs.27:52 | Qs.29:38 | Qs.40:31 | Qs.41:13 | Qs.41:17 | Qs.51:44 | Qs.51:45 | Qs.53:51 | Qs.54:31 | Qs.69:5 | Qs.85:17 | Qs.85:18 | Qs.91:14"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Ibrahim as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Sifat nabi Ibrahim as.",
					"ayat" => "Qs.2:124 | Qs.11:75 | Qs.16:120 | Qs.16:121 | Qs.16:123"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Ibrahim as.",
					"ayat" => "Qs.2:130 | Qs.2:131 | Qs.4:125 | Qs.6:83 | Qs.6:84 | Qs.6:161 | Qs.9:114 | Qs.11:73 | Qs.12:6 | Qs.16:120 | Qs.16:121 | Qs.16:122 | Qs.16:123 | Qs.19:41 | Qs.19:47 | Qs.21:51 | Qs.26:83 | Qs.26:84 | Qs.26:85 | Qs.29:27 | Qs.37:84 | Qs.37:88 | Qs.37:104 | Qs.37:105 | Qs.37:108 | Qs.37:109 | Qs.37:110 | Qs.37:111 | Qs.37:113 | Qs.38:45 | Qs.38:46 | Qs.38:47 | Qs.43:28 | Qs.53:37 | Qs.57:26 | Qs.60:4"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Allah menguji nabi Ibrahim as.",
					"ayat" => "Qs.2:124 | Qs.37:102"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Ibrahim as.",
					"ayat" => "Qs.2:130 | Qs.2:131 | Qs.2:135 | Qs.2:136 | Qs.2:140 | Qs.3:67 | Qs.3:68 | Qs.3:84 | Qs.3:95 | Qs.4:125 | Qs.4:163 | Qs.6:74 | Qs.6:76 | Qs.6:77 | Qs.6:78 | Qs.6:79 | Qs.6:80 | Qs.6:81 | Qs.6:83 | Qs.6:161 | Qs.14:35 | Qs.14:36 | Qs.14:37 | Qs.14:40 | Qs.21:52 | Qs.21:54 | Qs.21:56 | Qs.21:57 | Qs.21:67 | Qs.22:26 | Qs.22:78 | Qs.26:69 | Qs.26:70 | Qs.26:71 | Qs.26:72 | Qs.26:73 | Qs.26:75 | Qs.26:78 | Qs.26:79 | Qs.26:80 | Qs.26:87 | Qs.29:16 | Qs.29:17 | Qs.29:25 | Qs.37:83 | Qs.37:85 | Qs.37:86 | Qs.37:87 | Qs.37:89 | Qs.37:91 | Qs.37:92 | Qs.37:93 | Qs.37:94 | Qs.37:95 | Qs.37:96 | Qs.43:26 | Qs.43:27 | Qs.43:28 | Qs.60:4"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Pembangunan Ka'bah",
					"ayat" => "Qs.2:127"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Ibrahim as. menunaikan ibadah haji",
					"ayat" => "Qs.2:128 | Qs.22:27"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Ibrahim as. kekasih Allah",
					"ayat" => "Qs.4:125"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Turunnya azab kepada kaum nabi Ibrahim as.",
					"ayat" => "Qs.9:70"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Hijrah ke Syam",
					"ayat" => "Qs.21:71 | Qs.29:26"),
				array(
					"id_master" => 1,
					"level" => 4),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Ibrahim, Siti Hajar dan Ismail as.",
					"ayat" => "Qs.14:37 | Qs.37:101"),
				array(
					"id_master" => 1,
					"level" => 4),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Mimpi menghidupkan orang mati",
					"ayat" => "Qs.2:260"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Berdebat dengan raja Namrud",
					"ayat" => "Qs.2:258"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Ibrahim as. dan ayahnya"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Dakwah nabi Ibrahim as. kepada ayahnya",
					"ayat" => "Qs.6:74 | Qs.19:42 | Qs.19:43 | Qs.19:44 | Qs.19:45 | Qs.21:52 | Qs.26:70 | Qs.37:85 | Qs.43:26"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Kekufuran ayah nabi Ibrahim as.",
					"ayat" => "Qs.6:74 | Qs.19:46 | Qs.26:71"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Permohonan ampun Ibrahim as. untuk ayahnya",
					"ayat" => "Qs.9:114 | Qs.19:47 | Qs.60:4"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Berdebat dengan kaumnya",
					"ayat" => "Qs.21:62 | Qs.21:63 | Qs.21:65 | Qs.21:66"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Ibrahim as. memisahkan diri dari kaumnya",
					"ayat" => "Qs.19:48 | Qs.19:49 | Qs.29:26 | Qs.37:99 | Qs.43:26 | Qs.60:4"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Ancaman nabi Ibrahim as. kepada berhala-berhala kaumnya",
					"ayat" => "Qs.21:57 | Qs.21:58 | Qs.21:60 | Qs.37:93"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Dilempar ke dalam api",
					"ayat" => "Qs.21:68 | Qs.29:24 | Qs.37:97"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Selamat dari Api",
					"ayat" => "Qs.21:69 | Qs.21:70 | Qs.29:24 | Qs.37:98"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Ibrahim as. meminta syafaat untuk ayahnya",
					"ayat" => "Qs.14:41"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Berita gembira tentang Ishak dan Ya'kub as.",
					"ayat" => "Qs.6:84 | Qs.11:69 | Qs.11:71 | Qs.11:72 | Qs.11:74 | Qs.14:39 | Qs.15:53 | Qs.15:54 | Qs.15:55 | Qs.21:72 | Qs.29:27 | Qs.37:112 | Qs.51:28 | Qs.51:29 | Qs.51:30"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Mimpi menyembelih anaknya, Ismail",
					"ayat" => "Qs.37:102 | Qs.37:103"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Luth as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keburukan kaum Luth",
					"ayat" => "Qs.7:80 | Qs.7:81 | Qs.11:78 | Qs.11:79 | Qs.15:67 | Qs.15:68 | Qs.15:69 | Qs.15:70 | Qs.15:72 | Qs.21:74 | Qs.26:165 | Qs.26:166 | Qs.26:168 | Qs.27:54 | Qs.27:55 | Qs.29:28 | Qs.29:29 | Qs.54:37 | Qs.69:9"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan dan kemuliaan nabi Luth as.",
					"ayat" => "Qs.6:86 | Qs.21:74 | Qs.21:75 | Qs.26:162 | Qs.29:26 | Qs.37:133"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Luth as. kepada kaumnya",
					"ayat" => "Qs.7:80 | Qs.7:81 | Qs.7:82 | Qs.26:160 | Qs.26:161 | Qs.26:162 | Qs.26:163 | Qs.26:164 | Qs.26:168 | Qs.27:54 | Qs.27:55 | Qs.29:28 | Qs.29:29 | Qs.54:36"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Menghadapi cobaan",
					"ayat" => "Qs.7:82 | Qs.11:78 | Qs.26:160 | Qs.26:167 | Qs.26:169 | Qs.27:56 | Qs.29:30 | Qs.38:13 | Qs.50:13 | Qs.54:33 | Qs.54:37 | Qs.66:10"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Mengungsi ke tempat terpencil",
					"ayat" => "Qs.11:80"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keselamatan nabi Luth as. dan keluarganya",
					"ayat" => "Qs.7:83 | Qs.11:81 | Qs.15:59 | Qs.15:65 | Qs.26:170 | Qs.27:57 | Qs.29:32 | Qs.29:33 | Qs.37:134 | Qs.51:35 | Qs.51:36 | Qs.54:34"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Turunnya azab atas kaum Luth",
					"ayat" => "Qs.7:84 | Qs.9:70 | Qs.11:70 | Qs.11:74 | Qs.11:76 | Qs.11:77 | Qs.11:81 | Qs.11:82 | Qs.11:83 | Qs.11:89 | Qs.15:63 | Qs.15:64 | Qs.15:66 | Qs.15:73 | Qs.15:74 | Qs.25:40 | Qs.26:171 | Qs.26:172 | Qs.26:173 | Qs.27:58 | Qs.29:31 | Qs.29:34 | Qs.37:135 | Qs.37:136 | Qs.51:32 | Qs.51:33 | Qs.51:34 | Qs.51:36 | Qs.51:37 | Qs.53:53 | Qs.53:54 | Qs.54:34 | Qs.54:38 | Qs.69:10"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Ismail as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Sifat nabi Ismail as. dalam Al Qur'an",
					"ayat" => "Qs.19:54 | Qs.37:101 | Qs.37:102"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Ismail as. yang disembelih",
					"ayat" => "Qs.37:102 | Qs.37:103 | Qs.37:107"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Pengorbanan nabi Ismail as.",
					"ayat" => "Qs.37:107"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Membangun Ka'bah bersama Ibrahim as.",
					"ayat" => "Qs.2:127"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Ismail as. dan keutamaannya",
					"ayat" => "Qs.2:136 | Qs.2:140 | Qs.3:84 | Qs.4:163 | Qs.6:86 | Qs.19:55 | Qs.38:48"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Ishak as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Ishak as.",
					"ayat" => "Qs.6:84 | Qs.12:6 | Qs.19:50 | Qs.21:72 | Qs.21:73 | Qs.37:113 | Qs.38:45 | Qs.38:46 | Qs.38:47"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kenabian Ishak as.",
					"ayat" => "Qs.2:133 | Qs.2:136 | Qs.2:140 | Qs.3:84 | Qs.4:163 | Qs.6:84 | Qs.12:6 | Qs.19:49 | Qs.21:73 | Qs.37:112"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Ya'kub as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Ya'kub as.",
					"ayat" => "Qs.6:84 | Qs.19:50 | Qs.21:72 | Qs.21:73 | Qs.38:45 | Qs.38:46 | Qs.38:47"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kenabian Ya'kub as.",
					"ayat" => "Qs.4:163 | Qs.6:84 | Qs.12:6 | Qs.19:49 | Qs.21:73"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Ya'kub as.",
					"ayat" => "Qs.2:132 | Qs.2:133 | Qs.2:136 | Qs.2:140 | Qs.3:84 | Qs.21:73"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Gelar Israel untuk Ya'kub as.",
					"ayat" => "Qs.3:93"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Menolak sebagian jenis makanan",
					"ayat" => "Qs.3:93"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Cintanya pada nabi Yusuf as.",
					"ayat" => "Qs.12:8 | Qs.12:13 | Qs.12:84 | Qs.12:85 | Qs.12:87 | Qs.12:94 | Qs.12:95"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Sifat-sifat nabi Ya'kub as.",
					"ayat" => "Qs.12:86 | Qs.12:96 | Qs.38:45"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Keturunan nabi Ya'kub as.",
					"ayat" => "Qs.2:136 | Qs.2:140 | Qs.3:84 | Qs.4:163 | Qs.7:160"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Yusuf as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Mimpi nabi Yusuf as.",
					"ayat" => "Qs.12:4 | Qs.12:5 | Qs.12:100"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Yusuf as. dan saudara-saudaranya",
					"ayat" => "Qs.12:7 | Qs.12:8 | Qs.12:9 | Qs.12:10 | Qs.12:11 | Qs.12:12 | Qs.12:13 | Qs.12:14 | Qs.12:15 | Qs.12:16 | Qs.12:17 | Qs.12:18 | Qs.12:58 | Qs.12:59 | Qs.12:60 | Qs.12:61 | Qs.12:65 | Qs.12:69 | Qs.12:70 | Qs.12:71 | Qs.12:77 | Qs.12:80 | Qs.12:89 | Qs.12:90 | Qs.12:91 | Qs.12:92 | Qs.12:93 | Qs.12:97"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dibuang ke dalam sumur",
					"ayat" => "Qs.12:15"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Allah menyelamatkan Yusuf",
					"ayat" => "Qs.12:19"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Yusuf dijual dengan harga murah",
					"ayat" => "Qs.12:20"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Perjalanannya ke Mesir",
					"ayat" => "Qs.12:21"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Fitnah isteri pembesar Mesir (Zulaikha)",
					"ayat" => "Qs.12:23 | Qs.12:24 | Qs.12:25 | Qs.12:26 | Qs.12:27 | Qs.12:28 | Qs.12:29 | Qs.12:30 | Qs.12:32"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Masuk penjara",
					"ayat" => "Qs.12:32 | Qs.12:33 | Qs.12:35 | Qs.12:36"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kenabian Yusuf as.",
					"ayat" => "Qs.6:84 | Qs.12:6 | Qs.12:22 | Qs.40:34"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Menafsirkan mimpi",
					"ayat" => "Qs.12:6 | Qs.12:21 | Qs.12:36 | Qs.12:37 | Qs.12:41 | Qs.12:46 | Qs.12:47 | Qs.12:48 | Qs.12:49 | Qs.12:101"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Yusuf as.",
					"ayat" => "Qs.12:37 | Qs.12:38 | Qs.12:39 | Qs.12:40"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Raja Mesir dan nabi Yusuf as."),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Mimpi raja Mesir",
					"ayat" => "Qs.12:43 | Qs.12:44 | Qs.12:45 | Qs.12:46"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Posisi nabi Yusuf as. di sisi raja Mesir",
					"ayat" => "Qs.12:50 | Qs.12:54"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Yusuf as. terbukti tidak bersalah",
					"ayat" => "Qs.12:28 | Qs.12:51 | Qs.12:52 | Qs.12:100"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Mengurus baitul mal",
					"ayat" => "Qs.12:55 | Qs.12:56 | Qs.12:59 | Qs.12:60 | Qs.12:62 | Qs.12:88 | Qs.12:90 | Qs.12:101"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Yusuf as. dan adiknya (Bunyamin)"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Tuntutan menghadirkan adiknya",
					"ayat" => "Qs.12:59 | Qs.12:60 | Qs.12:61"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Membujuk nabi Ya'kub as. agar rela mengutus Bunyamin",
					"ayat" => "Qs.12:63 | Qs.12:64 | Qs.12:65 | Qs.12:66"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Siasat nabi Yusuf as.",
					"ayat" => "Qs.12:62 | Qs.12:63 | Qs.12:65 | Qs.12:69 | Qs.12:70 | Qs.12:72 | Qs.12:74 | Qs.12:75 | Qs.12:76 | Qs.12:77 | Qs.12:79 | Qs.12:80 | Qs.12:81 | Qs.12:82"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Pertemuan anak-anak Israel (Ya'kub)",
					"ayat" => "Qs.12:93 | Qs.12:99 | Qs.12:100"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Yusuf as. manusia termulia",
					"ayat" => "Qs.12:59 | Qs.12:62 | Qs.12:65"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Sifat nabi Yusuf as.",
					"ayat" => "Qs.12:22 | Qs.12:24 | Qs.12:27 | Qs.12:31 | Qs.12:36 | Qs.12:51 | Qs.12:54 | Qs.12:55 | Qs.12:59 | Qs.12:78"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Syu'aib as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keburukan kaum Syu'aib as.",
					"ayat" => "Qs.7:85 | Qs.7:86 | Qs.11:84 | Qs.11:85 | Qs.11:87 | Qs.11:91 | Qs.11:92 | Qs.26:181 | Qs.26:182 | Qs.26:183"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Diutus ke Ashabul-Aikah",
					"ayat" => "Qs.15:78 | Qs.26:178"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Syu'aib as. kepada kaumnya",
					"ayat" => "Qs.7:85 | Qs.7:86 | Qs.7:87 | Qs.7:88 | Qs.7:89 | Qs.7:90 | Qs.7:93 | Qs.11:84 | Qs.11:86 | Qs.11:87 | Qs.11:89 | Qs.11:90 | Qs.11:92 | Qs.11:93 | Qs.26:176 | Qs.26:177 | Qs.26:178 | Qs.26:179 | Qs.26:180 | Qs.26:181 | Qs.26:182 | Qs.26:183 | Qs.26:184 | Qs.29:36"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Cobaan nabi Syu'aib as.",
					"ayat" => "Qs.7:87 | Qs.7:88 | Qs.7:89 | Qs.7:90 | Qs.11:87 | Qs.11:88 | Qs.11:91 | Qs.26:176 | Qs.26:185 | Qs.26:186 | Qs.26:187 | Qs.26:188 | Qs.38:13 | Qs.50:14"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Azab atas kaum Syu'aib as.",
					"ayat" => "Qs.7:91 | Qs.7:92 | Qs.9:70 | Qs.11:94 | Qs.11:95 | Qs.15:79 | Qs.26:189 | Qs.29:37"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Ayub as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kenabian Ayub as.",
					"ayat" => "Qs.4:163 | Qs.6:84"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Mandi nabi Ayub as.",
					"ayat" => "Qs.38:42"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Cobaan dan kesabarannya",
					"ayat" => "Qs.21:83 | Qs.21:84 | Qs.38:41 | Qs.38:42 | Qs.38:44"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Zulkifli as.",
					"ayat" => "Qs.38:48"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Musa as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Musa as.",
					"ayat" => "Qs.2:136 | Qs.4:164 | Qs.6:84 | Qs.6:154 | Qs.7:134 | Qs.7:142 | Qs.19:51 | Qs.19:52 | Qs.20:9 | Qs.20:13 | Qs.20:36 | Qs.20:37 | Qs.20:41 | Qs.25:35 | Qs.26:10 | Qs.26:21 | Qs.27:8 | Qs.27:9 | Qs.28:7 | Qs.28:14 | Qs.33:69 | Qs.37:114 | Qs.37:118 | Qs.37:119 | Qs.37:120 | Qs.37:122 | Qs.44:17"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Sifat nabi Musa as.",
					"ayat" => "Qs.7:150 | Qs.20:94 | Qs.28:15 | Qs.28:19 | Qs.28:26"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Awal kenabian Musa as.",
					"ayat" => "Qs.7:144 | Qs.20:10 | Qs.20:11 | Qs.20:12 | Qs.20:13 | Qs.20:14 | Qs.20:15 | Qs.20:16 | Qs.20:17 | Qs.20:18 | Qs.20:19 | Qs.20:20 | Qs.20:21 | Qs.20:22 | Qs.20:23 | Qs.20:24 | Qs.26:10 | Qs.26:21 | Qs.27:7 | Qs.27:8 | Qs.27:9 | Qs.27:10 | Qs.27:12 | Qs.28:29 | Qs.28:30 | Qs.28:31 | Qs.28:32 | Qs.28:34 | Qs.28:35 | Qs.28:46 | Qs.79:15 | Qs.79:16 | Qs.79:17 | Qs.79:18 | Qs.79:19"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi yang diajak berbicara oleh Allah",
					"ayat" => "Qs.2:253 | Qs.4:164 | Qs.7:143 | Qs.7:144 | Qs.19:52 | Qs.20:11 | Qs.20:12 | Qs.20:13 | Qs.20:14 | Qs.20:15 | Qs.20:16 | Qs.20:17 | Qs.20:18 | Qs.20:19 | Qs.20:21 | Qs.20:22 | Qs.20:23 | Qs.20:24 | Qs.20:83 | Qs.20:84 | Qs.26:10 | Qs.26:11 | Qs.26:12 | Qs.26:13 | Qs.26:14 | Qs.26:16 | Qs.27:8 | Qs.27:9 | Qs.27:11 | Qs.28:30 | Qs.28:31 | Qs.28:32 | Qs.28:34 | Qs.28:35 | Qs.28:46 | Qs.79:16 | Qs.79:17 | Qs.79:18 | Qs.79:19"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Penyebutan Taurat",
					"ayat" => "Qs.3:3 | Qs.3:48 | Qs.3:50 | Qs.3:65 | Qs.3:93 | Qs.5:43 | Qs.5:44 | Qs.5:46 | Qs.5:66 | Qs.5:68 | Qs.5:110 | Qs.7:157 | Qs.9:111 | Qs.48:29 | Qs.61:6 | Qs.62:5"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Lembah tempat Musa dipanggil",
					"ayat" => "Qs.20:12 | Qs.20:20 | Qs.28:30 | Qs.79:16"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Turunnya Taurat untuk nabi Musa as.",
					"ayat" => "Qs.2:41 | Qs.2:44 | Qs.2:53 | Qs.2:87 | Qs.3:3 | Qs.6:91 | Qs.6:154 | Qs.6:157 | Qs.7:145 | Qs.7:154 | Qs.11:110 | Qs.17:2 | Qs.21:48 | Qs.23:49 | Qs.25:35 | Qs.28:43 | Qs.32:23 | Qs.37:117 | Qs.40:53 | Qs.41:45 | Qs.46:12 | Qs.53:36 | Qs.87:19"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Mukjizat nabi Musa as.",
					"ayat" => "Qs.2:56 | Qs.2:60 | Qs.2:92 | Qs.2:211 | Qs.7:107 | Qs.7:108 | Qs.7:117 | Qs.7:120 | Qs.7:160 | Qs.11:96 | Qs.17:101 | Qs.20:17 | Qs.20:18 | Qs.20:19 | Qs.20:20 | Qs.20:21 | Qs.20:22 | Qs.20:69 | Qs.20:77 | Qs.26:30 | Qs.26:32 | Qs.26:33 | Qs.26:45 | Qs.26:63 | Qs.27:10 | Qs.27:12 | Qs.28:31 | Qs.28:32 | Qs.40:23 | Qs.40:28 | Qs.43:46 | Qs.44:19 | Qs.44:33 | Qs.51:38 | Qs.79:20"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Musa as. dan Fir'aun"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Pertumbuhan Musa as. dalam lingkungan Fir'aun",
					"ayat" => "Qs.20:38 | Qs.20:39 | Qs.26:18 | Qs.28:8 | Qs.28:9 | Qs.28:10 | Qs.28:11 | Qs.28:12"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Kembali kepada ibunya",
					"ayat" => "Qs.20:40 | Qs.28:12 | Qs.28:13"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Ilham Allah kepada Ibunya",
					"ayat" => "Qs.20:38 | Qs.20:39 | Qs.28:7 | Qs.28:10"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Dakwah nabi Musa as.",
					"ayat" => "Qs.7:103 | Qs.7:104 | Qs.7:105 | Qs.7:106 | Qs.7:107 | Qs.7:108 | Qs.7:109 | Qs.7:110 | Qs.7:111 | Qs.7:112 | Qs.7:113 | Qs.7:117 | Qs.7:123 | Qs.7:128 | Qs.7:129 | Qs.10:84 | Qs.20:24 | Qs.20:42 | Qs.20:43 | Qs.20:44 | Qs.20:45 | Qs.20:46 | Qs.20:47 | Qs.20:49 | Qs.20:50 | Qs.20:51 | Qs.23:45 | Qs.26:10 | Qs.26:12 | Qs.26:16 | Qs.26:17 | Qs.26:22 | Qs.28:3 | Qs.43:46 | Qs.44:18 | Qs.51:38 | Qs.73:15 | Qs.79:17"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Pertemuan Musa as. dan Fir'aun"),
				array(
					"id_master" => 1,
					"level" => 6,
					"index" => "Saat perjumpaan nabi Musa as. dengan Fir'aun",
					"ayat" => "Qs.20:58 | Qs.20:59 | Qs.20:64 | Qs.20:65 | Qs.20:66 | Qs.26:38 | Qs.26:39 | Qs.26:40 | Qs.26:43 | Qs.26:44"),
				array(
					"id_master" => 1,
					"level" => 6,
					"index" => "Fir'aun mendatangkan para ahli sihir",
					"ayat" => "Qs.7:111 | Qs.7:112 | Qs.7:113 | Qs.7:115 | Qs.7:116 | Qs.10:79 | Qs.10:80 | Qs.20:60 | Qs.20:63 | Qs.20:64 | Qs.26:37 | Qs.26:38 | Qs.26:40 | Qs.26:41 | Qs.26:42 | Qs.26:43 | Qs.26:44"),
				array(
					"id_master" => 1,
					"level" => 6,
					"index" => "Musa as. dan tukang sihir",
					"ayat" => "Qs.7:115 | Qs.7:116 | Qs.7:117 | Qs.7:118 | Qs.7:119 | Qs.7:120 | Qs.7:121 | Qs.7:122 | Qs.10:80 | Qs.10:81 | Qs.20:61 | Qs.20:62 | Qs.20:63 | Qs.20:64 | Qs.20:65 | Qs.20:66 | Qs.20:67 | Qs.20:68 | Qs.20:69 | Qs.20:70 | Qs.26:43 | Qs.26:44 | Qs.26:45 | Qs.26:46 | Qs.26:47 | Qs.26:48"),
				array(
					"id_master" => 1,
					"level" => 6,
					"index" => "Perselisihan di antara tukang-tukang sihir",
					"ayat" => "Qs.20:62"),
				array(
					"id_master" => 1,
					"level" => 6,
					"index" => "Peringatan Musa as. kepada para tukang sihir",
					"ayat" => "Qs.10:81 | Qs.20:61"),
				array(
					"id_master" => 1,
					"level" => 6,
					"index" => "Nabi Musa dan nabi Harun as. dituduh tukang sihir",
					"ayat" => "Qs.7:109 | Qs.7:132 | Qs.10:76 | Qs.10:77 | Qs.17:101 | Qs.20:63 | Qs.40:24 | Qs.43:49"),
				array(
					"id_master" => 1,
					"level" => 6,
					"index" => "Kebingungan dan keimanan para tukang sihir",
					"ayat" => "Qs.7:119 | Qs.7:120 | Qs.7:121 | Qs.7:123 | Qs.7:125 | Qs.7:126 | Qs.20:70 | Qs.20:72 | Qs.20:73 | Qs.26:46 | Qs.26:47 | Qs.26:50"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Keutamaan dan keimanan Asiah",
					"ayat" => "Qs.66:11"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Cobaan untuk keluarga Fir'aun",
					"ayat" => "Qs.7:130 | Qs.7:131 | Qs.7:133 | Qs.7:134 | Qs.7:135"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Ketidak-berdayaan dan keingkaran Fir'aun",
					"ayat" => "Qs.7:103 | Qs.7:106 | Qs.7:110 | Qs.7:113 | Qs.7:114 | Qs.7:123 | Qs.7:126 | Qs.10:75 | Qs.11:97 | Qs.11:98 | Qs.17:102 | Qs.20:51 | Qs.20:56 | Qs.20:57 | Qs.20:58 | Qs.20:71 | Qs.23:46 | Qs.23:47 | Qs.25:36 | Qs.26:11 | Qs.26:23 | Qs.26:25 | Qs.26:27 | Qs.26:29 | Qs.26:31 | Qs.26:34 | Qs.26:35 | Qs.26:36 | Qs.26:49 | Qs.28:36 | Qs.28:38 | Qs.28:39 | Qs.29:39 | Qs.38:12 | Qs.40:24 | Qs.40:26 | Qs.40:29 | Qs.40:36 | Qs.40:37 | Qs.43:51 | Qs.43:52 | Qs.43:53 | Qs.43:54 | Qs.44:17 | Qs.44:20 | Qs.44:22 | Qs.50:13 | Qs.51:39 | Qs.54:41 | Qs.54:42 | Qs.69:9 | Qs.73:16 | Qs.79:21 | Qs.79:22 | Qs.79:23 | Qs.79:24"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Pelarian Musa as. dan para pengikutnya",
					"ayat" => "Qs.20:77 | Qs.26:52 | Qs.26:53 | Qs.26:54 | Qs.26:55 | Qs.26:56 | Qs.26:60 | Qs.26:61 | Qs.26:62 | Qs.26:63 | Qs.44:23 | Qs.44:24"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Musa as. dan para pengikutnya selamat",
					"ayat" => "Qs.2:50 | Qs.7:138 | Qs.10:90 | Qs.17:103 | Qs.20:78 | Qs.20:80 | Qs.26:65 | Qs.37:115 | Qs.37:116 | Qs.44:30 | Qs.44:31"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Keimanan Fir'aun",
					"ayat" => "Qs.10:90 | Qs.10:91"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Kehancuran Fir'aun dan pasukannya",
					"ayat" => "Qs.2:50 | Qs.3:11 | Qs.7:136 | Qs.7:137 | Qs.8:52 | Qs.8:54 | Qs.10:88 | Qs.10:90 | Qs.10:92 | Qs.17:103 | Qs.20:78 | Qs.20:79 | Qs.23:48 | Qs.25:36 | Qs.26:64 | Qs.26:66 | Qs.28:40 | Qs.29:40 | Qs.40:45 | Qs.43:55 | Qs.43:56 | Qs.44:24 | Qs.44:25 | Qs.44:26 | Qs.44:27 | Qs.44:28 | Qs.44:29 | Qs.51:40 | Qs.54:42 | Qs.69:10 | Qs.73:16 | Qs.79:25 | Qs.85:17 | Qs.85:18 | Qs.89:13"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Orang beriman dari keluarga Fir'aun",
					"ayat" => "Qs.40:28 | Qs.40:29 | Qs.40:30 | Qs.40:31 | Qs.40:32 | Qs.40:38 | Qs.40:39 | Qs.40:41 | Qs.40:42 | Qs.40:43 | Qs.40:44 | Qs.40:45"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Fir'aun menyiksa Bani Israel",
					"ayat" => "Qs.2:49 | Qs.7:124 | Qs.7:127 | Qs.7:129 | Qs.7:137 | Qs.7:141 | Qs.10:83 | Qs.14:6 | Qs.20:71 | Qs.26:22 | Qs.26:49 | Qs.28:4 | Qs.40:25"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Kehinaan Fir'aun dan Haman",
					"ayat" => "Qs.10:83 | Qs.11:97 | Qs.28:4 | Qs.28:6 | Qs.28:8 | Qs.28:32 | Qs.28:42 | Qs.29:39 | Qs.40:36 | Qs.44:31"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Musa membunuh seorang Mesir",
					"ayat" => "Qs.20:40 | Qs.26:19 | Qs.26:20 | Qs.26:21 | Qs.28:15 | Qs.28:16 | Qs.28:18 | Qs.28:19 | Qs.28:33"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Perjalanann Musa as. ke Madyan"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Musa dan nabi Syu'aib as. (sahib al madyan)",
					"ayat" => "Qs.28:25 | Qs.28:26 | Qs.28:27 | Qs.28:28"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Kisah nabi Musa as. dengan dua anak perempuan nabi Syu'aib as.",
					"ayat" => "Qs.28:23 | Qs.28:24 | Qs.28:25 | Qs.28:26 | Qs.28:27"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Yahudi menuduh nabi Musa as. sebagai orang gila",
					"ayat" => "Qs.33:69"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Musa as. keluar menuju Baitul Maqdis"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Bani Israel memasuki Baitul Maqdis",
					"ayat" => "Qs.2:58 | Qs.5:21 | Qs.5:22 | Qs.5:23"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Musa as. berdialog dengan Allah",
					"ayat" => "Qs.2:51 | Qs.7:142 | Qs.7:143 | Qs.7:155 | Qs.20:83 | Qs.20:84"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Bani Israel menyembah anak sapi",
					"ayat" => "Qs.2:51 | Qs.2:54 | Qs.2:92 | Qs.2:93 | Qs.4:153 | Qs.7:148 | Qs.7:150 | Qs.7:152 | Qs.20:85 | Qs.20:87 | Qs.20:88 | Qs.20:89 | Qs.20:91 | Qs.20:92"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Pertemuan segolongan Bani Israel dengan Allah",
					"ayat" => "Qs.7:155"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Musa as. dan Samiri",
					"ayat" => "Qs.20:95 | Qs.20:96 | Qs.20:97"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Musa as. melihat Allah",
					"ayat" => "Qs.7:143"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Ketakutan Bani Israel",
					"ayat" => "Qs.2:246 | Qs.2:249 | Qs.3:111 | Qs.5:22 | Qs.5:24 | Qs.59:14"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Perayaan Yahudi",
					"ayat" => "Qs.2:65 | Qs.7:163 | Qs.16:124"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Watak-watak Yahudi",
					"ayat" => "Qs.2:41 | Qs.2:42 | Qs.2:44 | Qs.2:55 | Qs.2:59 | Qs.2:61 | Qs.2:65 | Qs.2:67 | Qs.2:68 | Qs.2:69 | Qs.2:70 | Qs.2:71 | Qs.2:74 | Qs.2:76 | Qs.2:83 | Qs.2:85 | Qs.2:86 | Qs.2:87 | Qs.2:89 | Qs.2:90 | Qs.2:93 | Qs.2:94 | Qs.2:95 | Qs.2:96 | Qs.2:100 | Qs.2:101 | Qs.2:104 | Qs.2:108 | Qs.2:140 | Qs.2:142 | Qs.2:246 | Qs.2:247 | Qs.2:248 | Qs.2:249 | Qs.3:24 | Qs.3:71 | Qs.3:75 | Qs.3:112 | Qs.3:181 | Qs.3:183 | Qs.4:44 | Qs.4:46 | Qs.4:47 | Qs.4:49 | Qs.4:51 | Qs.4:53 | Qs.4:54 | Qs.4:153 | Qs.4:155 | Qs.4:156 | Qs.4:161 | Qs.5:13 | Qs.5:20 | Qs.5:24 | Qs.5:42 | Qs.5:43 | Qs.5:57 | Qs.5:58 | Qs.5:62 | Qs.5:63 | Qs.5:64 | Qs.5:70 | Qs.5:79 | Qs.5:80 | Qs.5:81 | Qs.5:82 | Qs.7:134 | Qs.7:138 | Qs.7:139 | Qs.7:149 | Qs.7:160 | Qs.7:162 | Qs.7:163 | Qs.7:169 | Qs.9:30 | Qs.9:31 | Qs.9:34 | Qs.16:118 | Qs.17:4 | Qs.17:101 | Qs.20:85 | Qs.20:86 | Qs.20:87 | Qs.20:92 | Qs.58:8 | Qs.59:14"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Musa as. dan nabi Khidir as."),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Ikan sebagai tanda (tempat pertemuan) Musa as.",
					"ayat" => "Qs.18:61 | Qs.18:63"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Kisah nabi Musa as. dan nabi Khidir as. dalam Al Qur'an",
					"ayat" => "Qs.18:60 | Qs.18:61 | Qs.18:62 | Qs.18:63 | Qs.18:64 | Qs.18:65 | Qs.18:66 | Qs.18:67 | Qs.18:68 | Qs.18:69 | Qs.18:70 | Qs.18:71 | Qs.18:72 | Qs.18:73 | Qs.18:74 | Qs.18:75 | Qs.18:76 | Qs.18:77 | Qs.18:78 | Qs.18:79 | Qs.18:80 | Qs.18:81 | Qs.18:82"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Khidir as. merusak perahu",
					"ayat" => "Qs.18:71 | Qs.18:79"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Khidir as. membunuh anak kecil",
					"ayat" => "Qs.18:74 | Qs.18:80"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Khidir as. memperbaiki dinding rumah",
					"ayat" => "Qs.18:77 | Qs.18:82"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Sebab kepergian Musa as. menemui nabi Khidir as.",
					"ayat" => "Qs.18:66"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Ketinggian ilmu nabi Khidir as.",
					"ayat" => "Qs.18:66"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Qarun"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Kehinaan Qarun",
					"ayat" => "Qs.28:76 | Qs.28:78 | Qs.29:39"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Harta kekayaaan Qarun",
					"ayat" => "Qs.28:76 | Qs.28:78 | Qs.28:79"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Qarun ditenggelamkan ke dalam perut bumi",
					"ayat" => "Qs.28:81 | Qs.28:82 | Qs.29:40"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Bani Israel berubah bentuk",
					"ayat" => "Qs.2:65 | Qs.5:60 | Qs.7:166"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Anjuran untuk tidak mengikuti Yahudi",
					"ayat" => "Qs.1:7 | Qs.2:104 | Qs.2:108 | Qs.2:120 | Qs.2:145 | Qs.3:105 | Qs.5:51 | Qs.57:16 | Qs.58:9"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Memerangi Yahudi hingga hari Kiamat",
					"ayat" => "Qs.17:5"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Orang-orang kafir melaknat Bani Israel",
					"ayat" => "Qs.2:88 | Qs.4:46 | Qs.4:47 | Qs.4:52 | Qs.5:13 | Qs.5:60 | Qs.5:64 | Qs.5:78 | Qs.9:30"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Permusuhan antara Yahudi dan Kristen",
					"ayat" => "Qs.2:113 | Qs.2:145 | Qs.5:14"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Harun as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kenabian nabi Harun as. dalam Al Qur'an",
					"ayat" => "Qs.4:163 | Qs.6:84 | Qs.10:75 | Qs.10:87 | Qs.19:53 | Qs.21:48 | Qs.23:45 | Qs.25:35 | Qs.26:13 | Qs.28:34 | Qs.28:35 | Qs.37:114 | Qs.37:118 | Qs.37:119 | Qs.37:120 | Qs.37:122"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Hikmah nabi Harun as.",
					"ayat" => "Qs.7:150 | Qs.20:94"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Daud as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Daud as.",
					"ayat" => "Qs.21:79 | Qs.27:15 | Qs.34:10 | Qs.38:17 | Qs.38:18 | Qs.38:19 | Qs.38:20 | Qs.38:21 | Qs.38:24 | Qs.38:25 | Qs.38:26"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kenabian nabi Daud as.",
					"ayat" => "Qs.2:251 | Qs.6:84"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Daud as. mengasuh anaknya dengan baik",
					"ayat" => "Qs.21:78 | Qs.21:79"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Penyebutan kitab Zabur",
					"ayat" => "Qs.3:184 | Qs.4:163 | Qs.16:44 | Qs.17:55 | Qs.21:105"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kitab Zabur diturunkan kepada nabi Daud as.",
					"ayat" => "Qs.4:163 | Qs.17:55"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Daud as. sebagai panutan orang bertaqwa",
					"ayat" => "Qs.38:17"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Sengketa nabi Daud as. dalam Al Qur'an",
					"ayat" => "Qs.38:21 | Qs.38:22 | Qs.38:23 | Qs.38:24"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Daud as. diuji",
					"ayat" => "Qs.38:24"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kekuatan perang nabi Daud as.",
					"ayat" => "Qs.2:251"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Daud as. makan dari hasil keringat sendiri",
					"ayat" => "Qs.21:80 | Qs.34:13"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Hikmah nabi Daud as.",
					"ayat" => "Qs.2:251 | Qs.38:20"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kerajaan nabi Daud as.",
					"ayat" => "Qs.2:251 | Qs.21:79 | Qs.34:10 | Qs.38:26"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Sulaiman as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Sulaiman as.",
					"ayat" => "Qs.6:84 | Qs.27:15 | Qs.27:16 | Qs.27:17 | Qs.27:18 | Qs.27:19 | Qs.27:21 | Qs.27:36 | Qs.38:30 | Qs.38:39 | Qs.38:40"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kerajaan nabi Sulaiman as. yang besar",
					"ayat" => "Qs.21:81 | Qs.21:82 | Qs.27:16 | Qs.27:17 | Qs.27:18 | Qs.27:20 | Qs.27:21 | Qs.27:22 | Qs.27:23 | Qs.27:36 | Qs.27:37 | Qs.27:38 | Qs.27:39 | Qs.27:44 | Qs.34:12 | Qs.34:13 | Qs.38:31 | Qs.38:35 | Qs.38:36 | Qs.38:37 | Qs.38:38"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Sulaiman as. berdakwah",
					"ayat" => "Qs.4:163 | Qs.27:25 | Qs.27:31 | Qs.27:44"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Sulaiman as. menghakimi",
					"ayat" => "Qs.21:78 | Qs.21:79"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Fitnah nabi Sulaiman as.",
					"ayat" => "Qs.38:32 | Qs.38:33 | Qs.38:34"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kisah nabi Sulaiman as. dengan Ratu Balqis",
					"ayat" => "Qs.27:28 | Qs.27:29 | Qs.27:30 | Qs.27:31 | Qs.27:34 | Qs.27:35 | Qs.27:36 | Qs.27:37 | Qs.27:38 | Qs.27:39 | Qs.27:40 | Qs.27:41 | Qs.27:42 | Qs.27:43 | Qs.27:44"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keterangan tentang kerajaan Saba'",
					"ayat" => "Qs.27:23 | Qs.34:15 | Qs.34:18"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Sulaiman as. wafat",
					"ayat" => "Qs.34:14"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Ilyas as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Ilyas as.",
					"ayat" => "Qs.6:85 | Qs.37:129 | Qs.37:130 | Qs.37:131 | Qs.37:132"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kenabian nabi Ilyas as.",
					"ayat" => "Qs.6:85 | Qs.37:123"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Ilyas as.",
					"ayat" => "Qs.37:124 | Qs.37:125 | Qs.37:126"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Pendustaan kaum nabi Ilyas as.",
					"ayat" => "Qs.37:127"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Ilyasa' as.",
					"ayat" => "Qs.6:86 | Qs.38:48"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Yunus as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Yunus as.",
					"ayat" => "Qs.6:86 | Qs.21:88 | Qs.37:139 | Qs.37:143 | Qs.37:146 | Qs.68:49 | Qs.68:50"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Dakwah nabi Yunus as.",
					"ayat" => "Qs.4:163 | Qs.37:147 | Qs.37:148"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Yunus as. dan ikan besar",
					"ayat" => "Qs.21:87 | Qs.37:140 | Qs.37:141 | Qs.37:142 | Qs.37:144 | Qs.37:145 | Qs.68:48 | Qs.68:49"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keimanan kaum nabi Yunus as.",
					"ayat" => "Qs.10:98 | Qs.37:148"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Zakaria as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan Nabi Zakaria as.",
					"ayat" => "Qs.6:85 | Qs.19:7 | Qs.21:90"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Rahmat Allah atas Zakaria as.",
					"ayat" => "Qs.19:2 | Qs.19:7 | Qs.19:8"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Zakaria as. memelihara Maryam (ibu nabi Isa as.)",
					"ayat" => "Qs.3:37"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kisah nabi Zakaria as. dalam Al Qur'an"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Zakaria as. memohon keturunan",
					"ayat" => "Qs.3:38 | Qs.19:3 | Qs.19:4 | Qs.19:5 | Qs.19:6 | Qs.21:89"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Permohonan nabi Zakaria as. dikabulkan",
					"ayat" => "Qs.3:39 | Qs.19:7 | Qs.19:8 | Qs.19:9 | Qs.21:90"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nabi Zakaria as. menghindari percakapan",
					"ayat" => "Qs.3:41 | Qs.19:10 | Qs.19:11"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Yahya as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan nabi Yahya as.",
					"ayat" => "Qs.6:85 | Qs.19:7 | Qs.19:12 | Qs.19:13 | Qs.19:14 | Qs.19:15"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kenabian nabi Yahya as.",
					"ayat" => "Qs.3:39 | Qs.6:85 | Qs.19:12"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Beberapa keistimewaan nabi Yahya as.",
					"ayat" => "Qs.3:39 | Qs.19:13 | Qs.19:14"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Nabi Isa as."),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Keutamaan Maryam binti Imran",
					"ayat" => "Qs.3:37 | Qs.3:42 | Qs.3:43 | Qs.3:45 | Qs.5:75 | Qs.23:50 | Qs.66:12"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kesucian dan kehormatan Maryam",
					"ayat" => "Qs.3:47 | Qs.4:156 | Qs.19:20 | Qs.21:91 | Qs.66:12"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "keutamaan nabi Isa as.",
					"ayat" => "Qs.2:136 | Qs.3:45 | Qs.3:48 | Qs.4:163 | Qs.4:172 | Qs.6:85 | Qs.19:19 | Qs.19:21 | Qs.19:30 | Qs.19:31 | Qs.19:32 | Qs.19:33 | Qs.19:34 | Qs.23:50 | Qs.43:59 | Qs.43:63 | Qs.57:27"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kisah kandungan dan kelahiran nabi Isa as.",
					"ayat" => "Qs.3:45 | Qs.3:47 | Qs.3:59 | Qs.21:91 | Qs.66:12"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Isa as. Kalimat Allah dan RahmatNya",
					"ayat" => "Qs.3:45 | Qs.4:171 | Qs.21:91"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Isa as. berbicara ketika masih bayi",
					"ayat" => "Qs.3:46 | Qs.5:110 | Qs.19:29 | Qs.19:30 | Qs.19:31 | Qs.19:32 | Qs.19:33"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Isa as. dibantu oleh Ruh al quds",
					"ayat" => "Qs.2:87 | Qs.2:253 | Qs.5:110"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kemunculan nabi Isa as. dan mukjizatnya",
					"ayat" => "Qs.3:46 | Qs.3:48 | Qs.3:49 | Qs.5:110"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Sifat dan tabi'at nabi Isa as.",
					"ayat" => "Qs.3:45 | Qs.3:46"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Isa as. diutus kepada Bani Israel",
					"ayat" => "Qs.3:49 | Qs.3:50 | Qs.5:46 | Qs.5:78 | Qs.5:110 | Qs.43:63 | Qs.43:64 | Qs.61:6 | Qs.61:14"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Pengikut-pengikut nabi Isa as. meminta hidangan",
					"ayat" => "Qs.5:112 | Qs.5:113"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Rencana pembunuhan Isa as. oleh Yahudi",
					"ayat" => "Qs.4:157"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Isa as. diangkat ke langit",
					"ayat" => "Qs.3:55 | Qs.4:158"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Isa as. akan turun di akhir zaman",
					"ayat" => "Qs.4:159"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Isa as. dianggap tuhan oleh kaumnya",
					"ayat" => "Qs.5:17 | Qs.5:72 | Qs.5:77 | Qs.5:116 | Qs.9:31 | Qs.43:58 | Qs.43:65"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Nabi Isa as. suci dari perbuatan kaumnya",
					"ayat" => "Qs.5:72 | Qs.5:75 | Qs.5:116 | Qs.5:117 | Qs.43:59"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Anjuran tidak mengikuti orang-orang Kristen",
					"ayat" => "Qs.1:7 | Qs.2:120 | Qs.2:145 | Qs.3:105 | Qs.5:51 | Qs.57:16 | Qs.58:9"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kebencian orang Nasrani terhadap Yahudi",
					"ayat" => "Qs.2:113 | Qs.2:145 | Qs.5:14"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kitab Injil diturunkan kepada nabi Isa as.",
					"ayat" => "Qs.2:87 | Qs.2:253 | Qs.3:3 | Qs.5:46"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Peyebutan kitab Injil",
					"ayat" => "Qs.3:3 | Qs.3:48 | Qs.3:65 | Qs.5:47 | Qs.5:66 | Qs.5:68 | Qs.5:110 | Qs.7:157 | Qs.9:111 | Qs.48:29 | Qs.57:27"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Orang-orang shaleh yang diragukan kenabiaannya"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Luqman"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Keutamaan Luqman",
					"ayat" => "Qs.31:12"),
				array(
					"id_master" => 1,
					"level" => 5,
					"index" => "Nasihat Luqman kepada anaknya",
					"ayat" => "Qs.31:13 | Qs.31:16 | Qs.31:17 | Qs.31:18 | Qs.31:19"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Zulqarnain",
					"ayat" => "Qs.18:83 | Qs.18:84 | Qs.18:85 | Qs.18:86 | Qs.18:87 | Qs.18:88 | Qs.18:89 | Qs.18:90 | Qs.18:91 | Qs.18:92 | Qs.18:93 | Qs.18:94 | Qs.18:95 | Qs.18:96 | Qs.18:97 | Qs.18:98"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Khidir",
					"ayat" => "Qs.18:65 | Qs.18:66 | Qs.18:67 | Qs.18:68 | Qs.18:69 | Qs.18:70 | Qs.18:71 | Qs.18:72 | Qs.18:73 | Qs.18:74 | Qs.18:75 | Qs.18:76 | Qs.18:77 | Qs.18:78 | Qs.18:79 | Qs.18:80 | Qs.18:81 | Qs.18:82"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Beberapa kejadian pada umat-umat terdahulu"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Ashabul-Ukhdud",
					"ayat" => "Qs.85:4 | Qs.85:5 | Qs.85:6 | Qs.85:7 | Qs.85:8 | Qs.85:9"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Ashabul-Kahfi",
					"ayat" => "Qs.18:9 | Qs.18:10 | Qs.18:11 | Qs.18:12 | Qs.18:13 | Qs.18:14 | Qs.18:15 | Qs.18:16 | Qs.18:17 | Qs.18:18 | Qs.18:19 | Qs.18:20 | Qs.18:21 | Qs.18:22 | Qs.18:25 | Qs.18:26"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Tiga orang yang berbicara pada masa bayi",
					"ayat" => "Qs.3:46 | Qs.5:110"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Kisah 'Uzair",
					"ayat" => "Qs.2:259"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Hikmah dari kisah umat-umat terdahulu",
					"ayat" => "Qs.2:66 | Qs.2:252 | Qs.2:258 | Qs.3:11 | Qs.3:112 | Qs.3:137 | Qs.3:140 | Qs.3:146 | Qs.5:27 | Qs.5:102 | Qs.6:6 | Qs.6:10 | Qs.6:11 | Qs.6:34 | Qs.6:42 | Qs.6:148 | Qs.7:4 | Qs.7:5 | Qs.7:64 | Qs.7:72 | Qs.7:78 | Qs.7:79 | Qs.7:84 | Qs.7:86 | Qs.7:92 | Qs.7:93 | Qs.7:94 | Qs.7:95 | Qs.7:100 | Qs.7:101 | Qs.7:103 | Qs.7:175 | Qs.7:176 | Qs.7:177 | Qs.8:52 | Qs.8:54 | Qs.9:69 | Qs.9:70 | Qs.10:13 | Qs.10:39 | Qs.10:73 | Qs.10:92 | Qs.10:102 | Qs.11:49 | Qs.11:89 | Qs.11:100 | Qs.11:101 | Qs.11:102 | Qs.11:103 | Qs.11:120 | Qs.12:7 | Qs.12:109 | Qs.12:111 | Qs.13:6 | Qs.13:30 | Qs.14:5 | Qs.14:9 | Qs.14:45 | Qs.15:4 | Qs.15:13 | Qs.15:75 | Qs.15:76 | Qs.15:77 | Qs.15:79 | Qs.15:90 | Qs.16:26 | Qs.16:33 | Qs.16:36 | Qs.16:63 | Qs.17:17 | Qs.17:77 | Qs.18:55 | Qs.18:59 | Qs.19:74 | Qs.19:98 | Qs.20:99 | Qs.20:128 | Qs.21:11 | Qs.21:44 | Qs.22:45 | Qs.22:46 | Qs.22:48 | Qs.23:30 | Qs.23:31 | Qs.23:42 | Qs.23:44 | Qs.24:34 | Qs.25:36 | Qs.25:37 | Qs.25:38 | Qs.25:39 | Qs.25:40 | Qs.26:69 | Qs.26:103 | Qs.26:105 | Qs.26:121 | Qs.26:123 | Qs.26:139 | Qs.26:158 | Qs.26:160 | Qs.26:171 | Qs.26:172 | Qs.26:173 | Qs.26:174 | Qs.26:176 | Qs.26:189 | Qs.26:190 | Qs.26:209 | Qs.27:14 | Qs.27:45 | Qs.27:51 | Qs.27:52 | Qs.27:58 | Qs.27:69 | Qs.28:3 | Qs.28:40 | Qs.28:43 | Qs.28:51 | Qs.28:58 | Qs.28:78 | Qs.28:81 | Qs.29:14 | Qs.29:15 | Qs.29:18 | Qs.29:20 | Qs.29:24 | Qs.29:28 | Qs.29:34 | Qs.29:35 | Qs.29:36 | Qs.29:37 | Qs.29:38 | Qs.29:40 | Qs.30:9 | Qs.30:42 | Qs.30:47 | Qs.32:26 | Qs.33:69 | Qs.34:19 | Qs.34:45 | Qs.35:26 | Qs.35:43 | Qs.35:44 | Qs.36:13 | Qs.36:31 | Qs.37:73 | Qs.37:137 | Qs.37:138 | Qs.38:3 | Qs.38:12 | Qs.38:13 | Qs.38:49 | Qs.39:25 | Qs.39:26 | Qs.39:50 | Qs.40:5 | Qs.40:21 | Qs.40:30 | Qs.40:31 | Qs.40:82 | Qs.41:13 | Qs.43:8 | Qs.43:25 | Qs.43:56 | Qs.44:37 | Qs.46:27 | Qs.47:10 | Qs.47:13 | Qs.50:12 | Qs.50:13 | Qs.50:14 | Qs.50:36 | Qs.50:37 | Qs.51:37 | Qs.53:50 | Qs.53:51 | Qs.53:52 | Qs.53:53 | Qs.53:54 | Qs.54:4 | Qs.54:5 | Qs.54:15 | Qs.54:32 | Qs.54:43 | Qs.54:51 | Qs.57:16 | Qs.58:5 | Qs.59:15 | Qs.60:4 | Qs.60:6 | Qs.61:14 | Qs.64:5 | Qs.65:8 | Qs.65:9 | Qs.65:10 | Qs.67:18 | Qs.69:12 | Qs.77:16 | Qs.77:17 | Qs.77:18 | Qs.79:26 | Qs.89:6 | Qs.89:7 | Qs.89:8 | Qs.89:9 | Qs.89:10 | Qs.89:11 | Qs.89:12"),
				array(
					"id_master" => 1,
					"level" => 1,
					"index" => "Tugas para Nabi"),
				array(
					"id_master" => 1,
					"level" => 2,
					"index" => "Menyeru kepada jalan Allah"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Seruan para nabi untuk mengesakan Allah",
					"ayat" => "Qs.2:83 | Qs.2:91 | Qs.2:131 | Qs.2:132 | Qs.2:133 | Qs.2:135 | Qs.2:136 | Qs.2:137 | Qs.2:213 | Qs.3:51 | Qs.3:52 | Qs.3:64 | Qs.3:67 | Qs.3:68 | Qs.3:79 | Qs.3:80 | Qs.3:85 | Qs.3:95 | Qs.3:193 | Qs.4:125 | Qs.5:72 | Qs.5:117 | Qs.6:14 | Qs.6:56 | Qs.6:74 | Qs.6:79 | Qs.6:161 | Qs.7:59 | Qs.7:65 | Qs.7:70 | Qs.7:73 | Qs.7:85 | Qs.7:138 | Qs.7:140 | Qs.9:31 | Qs.10:104 | Qs.11:2 | Qs.11:26 | Qs.11:50 | Qs.11:61 | Qs.11:84 | Qs.12:37 | Qs.12:38 | Qs.12:39 | Qs.12:40 | Qs.12:108 | Qs.13:36 | Qs.14:35 | Qs.16:2 | Qs.16:36 | Qs.16:120 | Qs.16:123 | Qs.17:2 | Qs.19:35 | Qs.19:36 | Qs.20:14 | Qs.20:50 | Qs.20:90 | Qs.20:98 | Qs.21:24 | Qs.21:25 | Qs.21:52 | Qs.21:56 | Qs.21:66 | Qs.21:67 | Qs.21:92 | Qs.21:108 | Qs.22:26 | Qs.22:67 | Qs.23:23 | Qs.23:32 | Qs.23:52 | Qs.26:24 | Qs.26:26 | Qs.26:28 | Qs.26:77 | Qs.26:108 | Qs.26:110 | Qs.26:125 | Qs.26:126 | Qs.26:144 | Qs.26:150 | Qs.26:161 | Qs.26:162 | Qs.26:163 | Qs.26:177 | Qs.26:179 | Qs.26:184 | Qs.27:25 | Qs.27:26 | Qs.27:31 | Qs.27:44 | Qs.27:45 | Qs.27:91 | Qs.28:87 | Qs.28:88 | Qs.29:16 | Qs.29:36 | Qs.33:46 | Qs.37:86 | Qs.37:96 | Qs.37:125 | Qs.37:126 | Qs.38:5 | Qs.38:65 | Qs.39:11 | Qs.39:12 | Qs.39:14 | Qs.39:64 | Qs.40:28 | Qs.40:66 | Qs.41:14 | Qs.42:13 | Qs.43:27 | Qs.43:45 | Qs.43:64 | Qs.46:21 | Qs.51:51 | Qs.57:8 | Qs.60:4 | Qs.71:3 | Qs.74:5 | Qs.79:19 | Qs.98:5 | Qs.109:2"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Cara berdakwah kepada Allah",
					"ayat" => "Qs.2:256 | Qs.2:258 | Qs.3:104 | Qs.3:110 | Qs.3:159 | Qs.4:63 | Qs.6:52 | Qs.6:69 | Qs.6:74 | Qs.6:90 | Qs.6:91 | Qs.6:108 | Qs.6:143 | Qs.6:144 | Qs.6:148 | Qs.6:149 | Qs.7:29 | Qs.7:59 | Qs.7:61 | Qs.7:65 | Qs.7:73 | Qs.7:74 | Qs.7:80 | Qs.7:81 | Qs.7:85 | Qs.7:104 | Qs.7:128 | Qs.7:199 | Qs.9:6 | Qs.9:122 | Qs.10:77 | Qs.10:84 | Qs.11:28 | Qs.11:29 | Qs.11:30 | Qs.11:31 | Qs.11:34 | Qs.11:50 | Qs.11:52 | Qs.11:88 | Qs.11:89 | Qs.12:108 | Qs.14:5 | Qs.14:6 | Qs.14:10 | Qs.15:94 | Qs.16:125 | Qs.18:2 | Qs.18:22 | Qs.18:28 | Qs.18:37 | Qs.18:38 | Qs.18:39 | Qs.18:40 | Qs.18:41 | Qs.19:42 | Qs.19:43 | Qs.19:44 | Qs.19:45 | Qs.20:27 | Qs.20:28 | Qs.20:29 | Qs.20:31 | Qs.20:32 | Qs.20:42 | Qs.20:44 | Qs.20:47 | Qs.20:53 | Qs.21:63 | Qs.21:66 | Qs.23:96 | Qs.25:56 | Qs.26:16 | Qs.26:24 | Qs.26:26 | Qs.26:28 | Qs.26:30 | Qs.26:70 | Qs.26:72 | Qs.26:73 | Qs.26:75 | Qs.26:76 | Qs.26:78 | Qs.26:79 | Qs.26:80 | Qs.26:106 | Qs.26:107 | Qs.26:108 | Qs.26:109 | Qs.26:110 | Qs.26:112 | Qs.26:113 | Qs.26:114 | Qs.26:124 | Qs.26:126 | Qs.26:131 | Qs.26:132 | Qs.26:133 | Qs.26:134 | Qs.26:135 | Qs.26:142 | Qs.26:143 | Qs.26:144 | Qs.26:145 | Qs.26:146 | Qs.26:147 | Qs.26:148 | Qs.26:149 | Qs.26:150 | Qs.26:161 | Qs.26:162 | Qs.26:163 | Qs.26:164 | Qs.26:165 | Qs.26:166 | Qs.26:168 | Qs.26:177 | Qs.26:178 | Qs.26:179 | Qs.26:180 | Qs.26:181 | Qs.26:182 | Qs.26:183 | Qs.26:184 | Qs.26:214 | Qs.26:215 | Qs.27:28 | Qs.27:46 | Qs.27:54 | Qs.27:55 | Qs.28:34 | Qs.28:37 | Qs.29:28 | Qs.29:29 | Qs.29:46 | Qs.33:48 | Qs.34:24 | Qs.34:25 | Qs.34:26 | Qs.34:46 | Qs.37:88 | Qs.40:29 | Qs.40:30 | Qs.40:31 | Qs.40:32 | Qs.40:33 | Qs.40:38 | Qs.41:33 | Qs.41:34 | Qs.42:7 | Qs.42:15 | Qs.43:89 | Qs.44:18 | Qs.45:18 | Qs.46:16 | Qs.53:29 | Qs.71:5 | Qs.71:8 | Qs.71:9 | Qs.71:10 | Qs.71:11 | Qs.71:12 | Qs.71:13 | Qs.71:14 | Qs.71:15 | Qs.71:16 | Qs.71:17 | Qs.71:18 | Qs.71:19 | Qs.71:20 | Qs.73:10 | Qs.79:17 | Qs.79:18 | Qs.79:19 | Qs.80:1 | Qs.80:3 | Qs.80:4 | Qs.80:8 | Qs.87:9 | Qs.88:21"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Amar ma'ruf dan nahi munkar",
					"ayat" => "Qs.2:206 | Qs.3:21 | Qs.3:104 | Qs.3:110 | Qs.3:114 | Qs.4:114 | Qs.5:63 | Qs.5:79 | Qs.7:80 | Qs.7:81 | Qs.7:85 | Qs.7:86 | Qs.7:157 | Qs.7:164 | Qs.7:165 | Qs.7:199 | Qs.9:71 | Qs.9:112 | Qs.11:116 | Qs.15:69 | Qs.15:71 | Qs.16:90 | Qs.22:41 | Qs.31:17"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Cobaan pada saat berdakwah",
					"ayat" => "Qs.2:87 | Qs.2:91 | Qs.2:212 | Qs.2:214 | Qs.2:217 | Qs.3:21 | Qs.3:54 | Qs.3:111 | Qs.3:120 | Qs.3:161 | Qs.3:166 | Qs.3:183 | Qs.3:184 | Qs.3:186 | Qs.3:195 | Qs.4:75 | Qs.4:100 | Qs.4:157 | Qs.5:41 | Qs.5:49 | Qs.5:57 | Qs.5:70 | Qs.5:110 | Qs.6:10 | Qs.6:25 | Qs.6:33 | Qs.6:34 | Qs.6:112 | Qs.7:60 | Qs.7:61 | Qs.7:66 | Qs.7:67 | Qs.7:77 | Qs.7:82 | Qs.7:88 | Qs.7:90 | Qs.7:109 | Qs.7:124 | Qs.7:127 | Qs.7:131 | Qs.8:30 | Qs.9:40 | Qs.9:61 | Qs.10:65 | Qs.10:76 | Qs.10:83 | Qs.11:12 | Qs.11:27 | Qs.11:32 | Qs.11:53 | Qs.11:54 | Qs.11:55 | Qs.11:62 | Qs.11:78 | Qs.11:88 | Qs.12:32 | Qs.12:33 | Qs.12:35 | Qs.12:42 | Qs.14:9 | Qs.14:13 | Qs.15:6 | Qs.15:11 | Qs.15:68 | Qs.15:80 | Qs.15:90 | Qs.15:95 | Qs.15:97 | Qs.16:101 | Qs.16:126 | Qs.16:127 | Qs.17:60 | Qs.17:73 | Qs.20:40 | Qs.20:45 | Qs.20:68 | Qs.20:72 | Qs.21:3 | Qs.21:5 | Qs.22:40 | Qs.22:42 | Qs.22:43 | Qs.22:44 | Qs.22:68 | Qs.23:24 | Qs.23:25 | Qs.23:33 | Qs.23:34 | Qs.23:38 | Qs.23:70 | Qs.23:110 | Qs.25:4 | Qs.25:5 | Qs.25:7 | Qs.25:8 | Qs.25:9 | Qs.25:20 | Qs.25:31 | Qs.25:41 | Qs.25:42 | Qs.25:52 | Qs.26:14 | Qs.26:27 | Qs.26:29 | Qs.26:34 | Qs.26:35 | Qs.26:105 | Qs.26:111 | Qs.26:112 | Qs.26:116 | Qs.26:117 | Qs.26:136 | Qs.26:141 | Qs.26:153 | Qs.26:154 | Qs.26:160 | Qs.26:167 | Qs.26:169 | Qs.26:176 | Qs.26:185 | Qs.26:186 | Qs.26:187 | Qs.27:13 | Qs.27:47 | Qs.27:49 | Qs.27:56 | Qs.27:70 | Qs.28:36 | Qs.28:48 | Qs.29:24 | Qs.29:29 | Qs.34:43 | Qs.34:45 | Qs.35:4 | Qs.35:25 | Qs.36:14 | Qs.36:15 | Qs.36:18 | Qs.36:30 | Qs.36:69 | Qs.37:36 | Qs.37:97 | Qs.38:4 | Qs.38:6 | Qs.38:7 | Qs.38:14 | Qs.40:5 | Qs.40:24 | Qs.40:25 | Qs.40:26 | Qs.40:28 | Qs.40:37 | Qs.43:7 | Qs.43:30 | Qs.43:52 | Qs.43:53 | Qs.44:14 | Qs.46:8 | Qs.46:22 | Qs.50:12 | Qs.50:13 | Qs.50:14 | Qs.51:39 | Qs.51:52 | Qs.52:30 | Qs.52:33 | Qs.54:2 | Qs.54:9 | Qs.54:18 | Qs.54:23 | Qs.54:24 | Qs.54:25 | Qs.54:33 | Qs.59:8 | Qs.60:1 | Qs.61:5 | Qs.68:2 | Qs.68:51 | Qs.69:41 | Qs.69:42 | Qs.72:19 | Qs.81:22 | Qs.83:29 | Qs.83:30 | Qs.83:31 | Qs.83:32 | Qs.83:33 | Qs.85:8 | Qs.91:14 | Qs.96:10 | Qs.96:11 | Qs.96:12 | Qs.108:3 | Qs.111:4"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Pergulatan antara kebenaran dan kebatilan",
					"ayat" => "Qs.2:36 | Qs.2:250 | Qs.2:251 | Qs.2:253 | Qs.3:13 | Qs.3:55 | Qs.3:69 | Qs.3:100 | Qs.3:140 | Qs.3:146 | Qs.4:76 | Qs.4:84 | Qs.4:89 | Qs.4:101 | Qs.4:104 | Qs.4:141 | Qs.5:56 | Qs.5:82 | Qs.6:34 | Qs.6:112 | Qs.6:113 | Qs.6:116 | Qs.6:121 | Qs.6:123 | Qs.6:135 | Qs.6:150 | Qs.7:88 | Qs.7:89 | Qs.7:90 | Qs.7:118 | Qs.8:6 | Qs.8:7 | Qs.8:8 | Qs.8:36 | Qs.9:5 | Qs.9:32 | Qs.9:109 | Qs.10:82 | Qs.11:38 | Qs.11:39 | Qs.11:54 | Qs.11:55 | Qs.11:118 | Qs.13:17 | Qs.17:6 | Qs.17:81 | Qs.18:20 | Qs.20:123 | Qs.21:18 | Qs.22:19 | Qs.25:52 | Qs.27:37 | Qs.27:45 | Qs.34:49 | Qs.48:22 | Qs.48:23 | Qs.60:2 | Qs.60:4 | Qs.61:8 | Qs.85:8"),
				array(
					"id_master" => 1,
					"level" => 3,
					"index" => "Tugas rasul hanya menyampaikan",
					"ayat" => "Qs.2:119 | Qs.2:272 | Qs.3:20 | Qs.4:80 | Qs.5:67 | Qs.5:92 | Qs.5:99 | Qs.6:52 | Qs.6:66 | Qs.6:69 | Qs.6:90 | Qs.6:104 | Qs.6:107 | Qs.7:62 | Qs.7:63 | Qs.7:68 | Qs.7:79 | Qs.10:42 | Qs.10:43 | Qs.10:99 | Qs.10:108 | Qs.11:12 | Qs.11:57 | Qs.11:86 | Qs.13:7 | Qs.13:40 | Qs.15:94 | Qs.16:35 | Qs.16:82 | Qs.17:54 | Qs.18:6 | Qs.18:29 | Qs.21:109 | Qs.22:67 | Qs.24:54 | Qs.25:43 | Qs.25:56 | Qs.26:3 | Qs.26:115 | Qs.26:208 | Qs.26:214 | Qs.26:216 | Qs.27:92 | Qs.28:56 | Qs.29:18 | Qs.30:52 | Qs.30:53 | Qs.33:39 | Qs.35:23 | Qs.36:17 | Qs.39:41 | Qs.42:6 | Qs.42:48 | Qs.43:40 | Qs.46:23 | Qs.50:45 | Qs.51:54 | Qs.51:55 | Qs.52:29 | Qs.64:12 | Qs.67:26 | Qs.72:23 | Qs.72:28 | Qs.80:7 | Qs.88:21 | Qs.88:22"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Para nabi menyampaikan kabar gembira dan peringatan",
					"ayat" => "Qs.2:6 | Qs.2:25 | Qs.2:119 | Qs.2:213 | Qs.3:50 | Qs.3:164 | Qs.3:194 | Qs.4:165 | Qs.5:19 | Qs.5:67 | Qs.6:19 | Qs.6:48 | Qs.6:51 | Qs.6:90 | Qs.6:92 | Qs.6:130 | Qs.6:147 | Qs.7:2 | Qs.7:62 | Qs.7:63 | Qs.7:69 | Qs.7:73 | Qs.7:79 | Qs.7:86 | Qs.7:93 | Qs.7:184 | Qs.7:188 | Qs.10:2 | Qs.10:87 | Qs.11:2 | Qs.11:12 | Qs.11:25 | Qs.11:26 | Qs.12:110 | Qs.13:7 | Qs.13:30 | Qs.14:44 | Qs.14:52 | Qs.15:49 | Qs.15:50 | Qs.15:89 | Qs.16:2 | Qs.16:63 | Qs.16:89 | Qs.17:15 | Qs.17:105 | Qs.18:2 | Qs.18:4 | Qs.18:56 | Qs.19:97 | Qs.21:45 | Qs.22:49 | Qs.25:56 | Qs.26:115 | Qs.26:135 | Qs.26:194 | Qs.26:208 | Qs.26:214 | Qs.27:92 | Qs.28:46 | Qs.29:50 | Qs.32:3 | Qs.33:39 | Qs.33:45 | Qs.33:47 | Qs.34:28 | Qs.34:34 | Qs.34:46 | Qs.35:18 | Qs.35:23 | Qs.35:24 | Qs.35:37 | Qs.36:6 | Qs.36:10 | Qs.36:11 | Qs.37:72 | Qs.38:4 | Qs.38:65 | Qs.38:70 | Qs.39:17 | Qs.39:71 | Qs.40:15 | Qs.40:18 | Qs.41:4 | Qs.41:13 | Qs.42:7 | Qs.43:23 | Qs.44:3 | Qs.46:9 | Qs.46:21 | Qs.48:8 | Qs.50:2 | Qs.51:50 | Qs.51:51 | Qs.53:56 | Qs.54:16 | Qs.54:18 | Qs.54:21 | Qs.54:23 | Qs.54:30 | Qs.54:36 | Qs.54:41 | Qs.61:13 | Qs.67:8 | Qs.67:9 | Qs.67:26 | Qs.71:1 | Qs.71:2 | Qs.74:2 | Qs.79:45 | Qs.92:14"),
				array(
					"id_master" => 1,
					"level" => 4,
					"index" => "Bimbingan para nabi terhadap kaumnya",
					"ayat" => "Qs.2:213 | Qs.6:90 | Qs.6:143 | Qs.6:144 | Qs.6:145 | Qs.6:148 | Qs.6:149 | Qs.6:164 | Qs.7:29 | Qs.7:69 | Qs.7:128"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Bersuci"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Keutamaan bersuci",
					"ayat" => "Qs.2:222"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Membersihkan bejana (tempat) air"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bejana yang suci"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tempat air dari kulit",
					"ayat" => "Qs.16:80"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Kebersihan pakaian"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Membersihkan pakaian",
					"ayat" => "Qs.74:4"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Kebersihan badan"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Hal yang diharamkan bagi wanita yang sedang haid"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Hukum menyentuh dan membaca Al Qur'an bagi wanita haid",
					"ayat" => "Qs.56:79"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Najis"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Najis darah",
					"ayat" => "Qs.2:173 | Qs.6:145 | Qs.16:115"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Najis daging babi",
					"ayat" => "Qs.6:145 | Qs.16:115"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Najis bangkai",
					"ayat" => "Qs.2:173"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Wudhu"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Disyariatkannya wudhu"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Dalil wudhu dalam Al Qur'an",
					"ayat" => "Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Hukum wudhu"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Kewajiban wudhu"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Wudhu untuk shalat",
					"ayat" => "Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Rukun wudhu"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Membasuh muka",
					"ayat" => "Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Membasuh kedua tangan hingga siku",
					"ayat" => "Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tertib",
					"ayat" => "Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menyapu sebagian kepala",
					"ayat" => "Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Membasuh kedua kaki",
					"ayat" => "Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Yang membatalkan wudhu"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Keluarnya sesuatu dari dua jalan"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Buang air kecil dan besar",
					"ayat" => "Qs.4:43 | Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Mandi besar"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Hukum mandi"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Kewajiban mandi"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Mandi karena junub (bersetubuh atau keluar air mani)",
					"ayat" => "Qs.4:43 | Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Yang diharamkan dan diperbolehkan bagi orang yang junub"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Hukum menyentuh dan membawa Al Qur'an",
					"ayat" => "Qs.56:79"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Shalat orang yang junub",
					"ayat" => "Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Tayammum"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Disyariatkannya tayammum"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Dalil dari Al Qur'an",
					"ayat" => "Qs.4:43"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Rukun tayammum"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Mengusap muka dan dua tangan",
					"ayat" => "Qs.4:43 | Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Cara-cara tayammum",
					"ayat" => "Qs.4:43"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Yang diperbolehkan bagi orang yang bertayammum"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tayammum bagi orang yang luka",
					"ayat" => "Qs.4:43"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tayammum bagi orang yang berhadas kecil",
					"ayat" => "Qs.4:43 | Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tayammum bagi orang yang berhadas besar (junub)",
					"ayat" => "Qs.4:43 | Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tayammum dalam perjalanan",
					"ayat" => "Qs.4:43 | Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tayammum di tempat tinggal",
					"ayat" => "Qs.4:43 | Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tayammum bagi orang yang sakit",
					"ayat" => "Qs.4:43 | Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Shalat"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Keutamaan Shalat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Pahala Shalat",
					"ayat" => "Qs.4:162 | Qs.5:12 | Qs.7:170 | Qs.9:18 | Qs.9:71 | Qs.11:114 | Qs.13:22 | Qs.23:2 | Qs.24:56 | Qs.31:5 | Qs.33:33 | Qs.35:29"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Shalat salah satu rukun Islam",
					"ayat" => "Qs.2:43 | Qs.2:83 | Qs.2:110 | Qs.2:177 | Qs.2:277 | Qs.4:77 | Qs.4:103 | Qs.4:162 | Qs.5:12 | Qs.5:55 | Qs.6:72 | Qs.7:170 | Qs.8:3 | Qs.9:5 | Qs.9:11 | Qs.9:18 | Qs.9:71 | Qs.22:41 | Qs.23:9 | Qs.24:56 | Qs.27:3 | Qs.29:45 | Qs.31:4 | Qs.35:18 | Qs.35:29 | Qs.58:13 | Qs.70:34 | Qs.73:20 | Qs.98:5"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Pahala menjaga shalat",
					"ayat" => "Qs.6:92 | Qs.7:170 | Qs.22:35 | Qs.23:10 | Qs.23:11 | Qs.24:37 | Qs.24:38 | Qs.24:56 | Qs.70:23 | Qs.70:34 | Qs.70:35 | Qs.87:15"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Shalat dan surga",
					"ayat" => "Qs.23:10 | Qs.23:11 | Qs.42:38 | Qs.70:35"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Buruknya balasan orang yang menyia-nyiakan shalat",
					"ayat" => "Qs.19:59 | Qs.74:43 | Qs.75:31"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Shalat batas antara muslim dan kafir",
					"ayat" => "Qs.2:143 | Qs.9:5 | Qs.9:11 | Qs.31:4 | Qs.77:48"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Shalat sebagai pendekatan diri kepada Allah",
					"ayat" => "Qs.2:45 | Qs.15:98 | Qs.19:31 | Qs.20:14 | Qs.21:73 | Qs.26:218 | Qs.26:219"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Shalat membentuk akhlak manusia",
					"ayat" => "Qs.29:45 | Qs.70:22"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Hukum shalat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Kewajiban shalat",
					"ayat" => "Qs.2:110 | Qs.2:177 | Qs.2:277 | Qs.4:103 | Qs.4:162 | Qs.5:12 | Qs.6:72 | Qs.6:92 | Qs.7:29 | Qs.8:3 | Qs.9:11 | Qs.9:18 | Qs.9:71 | Qs.13:22 | Qs.14:31 | Qs.14:37 | Qs.14:40 | Qs.20:132 | Qs.22:78 | Qs.24:56 | Qs.30:31 | Qs.33:33 | Qs.58:13"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Syarat-syarat shalat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menghadap kiblat waktu shalat"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Pemindahan kiblat",
					"ayat" => "Qs.2:142 | Qs.2:143 | Qs.2:144"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kewajiban menghadap kiblat dan keutamaannya",
					"ayat" => "Qs.2:142 | Qs.2:143 | Qs.2:144 | Qs.2:149 | Qs.2:150"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Shalat yang tidak wajib menghadap kiblat"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Shalat di tengah berkecamuknya perang",
					"ayat" => "Qs.2:239 | Qs.4:102"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Suci waktu shalat"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Suci syarat shalat",
					"ayat" => "Qs.5:6"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kesucian tubuh orang yang shalat",
					"ayat" => "Qs.4:43"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menutup aurat waktu shalat",
					"ayat" => "Qs.7:31"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Rukun-rukun shalat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Membaca Al Qur'an waktu shalat"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Bacaan shalat",
					"ayat" => "Qs.73:20"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Membaca dengan keras waktu shalat",
					"ayat" => "Qs.17:110"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Rukuk",
					"ayat" => "Qs.2:125 | Qs.5:55 | Qs.9:112 | Qs.22:26 | Qs.22:77 | Qs.48:29 | Qs.77:48"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Sujud"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Sujud salah satu rukun shalat",
					"ayat" => "Qs.22:77 | Qs.39:9"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keutamaan tempat sujud",
					"ayat" => "Qs.48:29"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Hal yang disunnahkan dalam shalat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Khusyuk dalam shalat",
					"ayat" => "Qs.2:45 | Qs.23:2"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Tempat-tempat shalat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tempat yang disunnahkan shalat di atasnya"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Shalat di dalam mesjid",
					"ayat" => "Qs.7:29 | Qs.24:36"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keutamaan mesjid Quba'",
					"ayat" => "Qs.9:108"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Masjid-masjid"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keutamaan masjid"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Allah suka kepada masjid",
					"ayat" => "Qs.7:29 | Qs.24:36"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Keutamaan dan pahala membangun masjid",
					"ayat" => "Qs.24:36"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Mesjid sebagai rumah Allah di bumi",
					"ayat" => "Qs.2:114 | Qs.2:187 | Qs.9:17 | Qs.9:18 | Qs.22:40 | Qs.72:18"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Membuat mesjid di atas kuburan",
					"ayat" => "Qs.18:21"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Etika dalam masjid"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Bersetubuh saat beri'tikaf dalam masjid",
					"ayat" => "Qs.2:187"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Membersihkan masjid dan membuatnya harum",
					"ayat" => "Qs.2:125 | Qs.22:26 | Qs.24:36"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Sikap masuk masjid",
					"ayat" => "Qs.7:31"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Yang berhak masuk masjid"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Hukum orang yang junub masuk dan lewat dalam masjid",
					"ayat" => "Qs.4:43"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Hukum orang musyrik masuk ke dalam masjid",
					"ayat" => "Qs.9:17 | Qs.9:28"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Waktu-waktu shalat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Penentuan waktu shalat",
					"ayat" => "Qs.17:78"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Keutamaan shalat pada waktunya",
					"ayat" => "Qs.2:238 | Qs.7:170 | Qs.20:14"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Waktu Ashar"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keutamaan shalat Ashar",
					"ayat" => "Qs.2:238 | Qs.20:130 | Qs.50:39"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Waktu Subuh"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keutamaaan shalat Subuh",
					"ayat" => "Qs.17:78 | Qs.20:130 | Qs.50:39 | Qs.89:1"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Azan"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Disyariatkannya azan",
					"ayat" => "Qs.5:58"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Waktu azan"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Adzan Jum'at",
					"ayat" => "Qs.62:9"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Mengqadha shalat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Meninggalkan shalat karena lupa",
					"ayat" => "Qs.38:32 | Qs.38:33 | Qs.107:4 | Qs.107:5"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Menqashar shalat saat bepergian"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Disyariatkannya shalat qashar",
					"ayat" => "Qs.4:101"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Shalat Jum'at"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Keutamaan hari Jum'at"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keutamaan shalat Jum'at",
					"ayat" => "Qs.62:9 | Qs.85:3"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Hukum shalat Jum'at"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kewajiban shalat Jum'at",
					"ayat" => "Qs.62:9"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Orang yang tidak diwajibkan shalat Jum'at"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Terlambat shalat Jum'at"),
				array(
					"id_master" => 2,
					"level" => 6,
					"index" => "Meninggalkan shalat Jum'at karena sakit",
					"ayat" => "Qs.48:17"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Khutbah Jum'at"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Mendengarkan khutbah Jum'at",
					"ayat" => "Qs.62:11"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Etika hari Jum'at"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Jual beli pada hari Jum'at",
					"ayat" => "Qs.62:9 | Qs.62:10 | Qs.62:11"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Shalat sunnah"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Disyari'atkannya shalat sunnah dan keutamaannya"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Shalat malam (tahajjud)"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Hukum shalat malam",
					"ayat" => "Qs.11:114 | Qs.25:64 | Qs.26:219"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keutamaan shalat malam",
					"ayat" => "Qs.11:114 | Qs.17:79 | Qs.50:40 | Qs.73:2 | Qs.73:20 | Qs.76:26"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Waktu shalat malam",
					"ayat" => "Qs.3:113 | Qs.17:79 | Qs.25:64 | Qs.26:218 | Qs.32:16 | Qs.39:9 | Qs.50:40 | Qs.51:17 | Qs.73:6"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Ukuran bacaan pada shalat malam",
					"ayat" => "Qs.20:130 | Qs.73:3"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Etika shalat malam",
					"ayat" => "Qs.73:20"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Meninggalkan kesulitan dalam shalat malam",
					"ayat" => "Qs.2:286 | Qs.73:20"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Shalat Khauf (waktu perang)"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Sifat shalat khauf",
					"ayat" => "Qs.4:102"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Disyari'atkannya shalat khauf",
					"ayat" => "Qs.2:239 | Qs.4:102"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menqashar shalat khauf",
					"ayat" => "Qs.4:102"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Shalat ketika berkecamuknya perang",
					"ayat" => "Qs.2:239"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Shalat 'Ied (hari raya)"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Sunnat-sunnat shalat 'Ied"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Menyembelih kurban setelah shalat 'Ied",
					"ayat" => "Qs.108:2"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Sujud tilawah"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Ayat-ayat sujud tilawah",
					"ayat" => "Qs.13:15 | Qs.16:49 | Qs.17:107 | Qs.19:58 | Qs.22:18 | Qs.22:77 | Qs.25:60 | Qs.27:25 | Qs.32:15 | Qs.38:24 | Qs.41:37 | Qs.53:62 | Qs.84:21 | Qs.96:19"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Zakat"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Harta"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Fitnah harta",
					"ayat" => "Qs.3:14 | Qs.8:28 | Qs.9:24 | Qs.9:55 | Qs.9:85 | Qs.17:64 | Qs.18:46 | Qs.23:55 | Qs.23:56 | Qs.26:88 | Qs.28:76 | Qs.28:77 | Qs.28:79 | Qs.63:9 | Qs.64:15 | Qs.89:20 | Qs.100:8 | Qs.102:1 | Qs.104:2 | Qs.104:3"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menjaga harta",
					"ayat" => "Qs.28:76 | Qs.28:79 | Qs.53:34 | Qs.53:35"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menyimpan harta",
					"ayat" => "Qs.4:5 | Qs.25:67"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Kewajiban atas harta",
					"ayat" => "Qs.28:77 | Qs.30:38 | Qs.51:19 | Qs.57:7 | Qs.70:24 | Qs.70:25 | Qs.92:5"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menginfaqkan harta",
					"ayat" => "Qs.2:215 | Qs.2:254 | Qs.2:261 | Qs.4:37 | Qs.25:67 | Qs.28:54 | Qs.92:5"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Meminta harta",
					"ayat" => "Qs.4:32"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Mengambil harta dengan cara yang tidak benar",
					"ayat" => "Qs.2:188 | Qs.2:279 | Qs.4:2 | Qs.4:6 | Qs.4:20 | Qs.4:21 | Qs.4:29 | Qs.4:30 | Qs.4:161 | Qs.5:62 | Qs.9:34 | Qs.26:181 | Qs.26:183 | Qs.89:19"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Harta sebagai penopang kehidupan",
					"ayat" => "Qs.4:5"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Hukum zakat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Kewajiban zakat",
					"ayat" => "Qs.2:110 | Qs.2:177 | Qs.3:180 | Qs.4:37 | Qs.5:12 | Qs.5:55 | Qs.6:141 | Qs.9:5 | Qs.9:11 | Qs.9:18 | Qs.9:34 | Qs.9:71 | Qs.22:78 | Qs.33:33 | Qs.41:7 | Qs.58:13 | Qs.70:24 | Qs.70:25"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menunaikan zakat salah satu rukun Islam",
					"ayat" => "Qs.2:43 | Qs.2:83 | Qs.2:110 | Qs.2:177 | Qs.2:277 | Qs.4:77 | Qs.4:162 | Qs.5:12 | Qs.5:55 | Qs.9:5 | Qs.9:11 | Qs.9:18 | Qs.9:71 | Qs.22:41 | Qs.31:4 | Qs.58:13 | Qs.73:20 | Qs.98:5"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zakat ajaran setiap Rasul",
					"ayat" => "Qs.19:31 | Qs.19:55 | Qs.21:73 | Qs.98:5"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Pahala zakat dan keutamaannya",
					"ayat" => "Qs.2:277 | Qs.7:156 | Qs.9:5 | Qs.9:11 | Qs.9:18 | Qs.9:71 | Qs.23:4 | Qs.23:10 | Qs.23:11 | Qs.24:37 | Qs.24:38 | Qs.24:56 | Qs.30:38 | Qs.30:39 | Qs.31:5 | Qs.33:35 | Qs.34:39 | Qs.35:29 | Qs.42:38 | Qs.47:37 | Qs.51:19 | Qs.57:18 | Qs.73:20 | Qs.92:5 | Qs.92:18"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Balasan orang yang tidak menunaikan zakat"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Besarnya balasan orang yang tidak menunaikan zakat",
					"ayat" => "Qs.9:77 | Qs.92:8"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Maksud harta simpanan",
					"ayat" => "Qs.9:34"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Harta simpanan akan menjadi bahan bakar di hari kiamat",
					"ayat" => "Qs.9:35"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Harta diumpamakan seperti ular",
					"ayat" => "Qs.3:180"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Pembahagian zakat"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bagian orang fakir",
					"ayat" => "Qs.9:60 | Qs.30:38 | Qs.70:25"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bagian orang miskin",
					"ayat" => "Qs.9:60 | Qs.30:38 | Qs.70:25"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bagian amil (petugas zakat)",
					"ayat" => "Qs.9:60"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Pembaagian zakat waktu perang",
					"ayat" => "Qs.9:60"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bagian orang yang baru memeluk Islam",
					"ayat" => "Qs.9:60"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bagian hamba",
					"ayat" => "Qs.9:60"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bagian orang yang berjuang di jalan Allah",
					"ayat" => "Qs.9:60"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bagian orang yang musafir",
					"ayat" => "Qs.9:60 | Qs.30:38"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Zakat tanaman dan buah-buahan",
					"ayat" => "Qs.6:141"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Puasa"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Keutamaan puasa dan pahalanya"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menghapus dosa dengan puasa",
					"ayat" => "Qs.33:35"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Orang yang berpuasa terhindar dari perbuatan maksiat",
					"ayat" => "Qs.2:183"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Rukun-rukun puasa"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menahan diri dari segala yang membatalkan puasa"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Masa imsak (menahan diri)",
					"ayat" => "Qs.2:187"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Yang pertama diwajibkan dalam puasa adalah menahan diri",
					"ayat" => "Qs.2:187"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Yang membatalkan puasa"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Makan dan minum saat berpuasa",
					"ayat" => "Qs.2:187"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bersetubuh saat berpuasa",
					"ayat" => "Qs.2:187"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Bulan Ramadhan"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Keutamaan bulan Ramadhan"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Al Qur'an diturunkan di bulan Ramadhan",
					"ayat" => "Qs.2:185 | Qs.97:1"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Hukum puasa Ramadhan"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kebebasan puasa di bulan Ramadhan pada awal Islam",
					"ayat" => "Qs.2:184"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kewajiban puasa Ramadhan",
					"ayat" => "Qs.2:183 | Qs.2:185"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Puasa Ramadhan, salah satu rukun Islam",
					"ayat" => "Qs.2:183"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Penetapan bulan Ramadhan"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Dengan melihat hilal (bulan sabit)",
					"ayat" => "Qs.2:189"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Hal yang disunnahkan dalam puasa"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Shalat malam Ramadhan"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Malam Lailatul Qadar"),
				array(
					"id_master" => 2,
					"level" => 6,
					"index" => "Kelebihan malam Lailatul Qadar",
					"ayat" => "Qs.44:3 | Qs.44:4 | Qs.97:1 | Qs.97:2 | Qs.97:3 | Qs.97:4 | Qs.97:5"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "I'tikaf"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tempat I'tikaf",
					"ayat" => "Qs.2:187"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Pekerjaan orang yang beri'tikaf"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Bersetubuhnya orang yang beri'tikaf",
					"ayat" => "Qs.2:187"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Puasanya orang yang beri'tikaf",
					"ayat" => "Qs.2:187"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Berbuka puasa di bulan Ramadhan"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Berbuka karena uzur"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Berbukanya orang yang sudah lanjut usia",
					"ayat" => "Qs.2:184"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Berbukanya orang yang sakit",
					"ayat" => "Qs.2:184 | Qs.2:185"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Berbuka karena perjalanan jauh"),
				array(
					"id_master" => 2,
					"level" => 6,
					"index" => "Berbuka dalam perjalanan",
					"ayat" => "Qs.2:184 | Qs.2:185"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Mengqadha puasa"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Waktu qadha",
					"ayat" => "Qs.2:184 | Qs.2:185"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Fidyah bagi orang yang tidak mampu berpuasa",
					"ayat" => "Qs.2:184"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Haji dan Umrah"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Haji"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Hukum haji"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kewajiban haji",
					"ayat" => "Qs.3:97 | Qs.22:27"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Haji salah satu rukun Islam",
					"ayat" => "Qs.2:196"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Hajinya orang-orang musyrik",
					"ayat" => "Qs.9:2 | Qs.9:3 | Qs.9:17 | Qs.9:28"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Syarat-syarat haji",
					"ayat" => "Qs.3:97"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Haji dengan berjalan atau bekendaraan",
					"ayat" => "Qs.22:27"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Ihram"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Miqat (batas) ihram"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Batas-batas waktu ihram",
					"ayat" => "Qs.2:189 | Qs.2:197"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Jenis ihram"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Haji Tamattu'",
					"ayat" => "Qs.2:196"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Larangan-larangan saat berihram"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Berbuat fasik waktu haji",
					"ayat" => "Qs.2:197"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Bertengkar waktu haji",
					"ayat" => "Qs.2:197"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Berburu hewan waktu haji",
					"ayat" => "Qs.5:1 | Qs.5:2 | Qs.5:94 | Qs.5:95 | Qs.5:96"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Bersetubuh waktu haji",
					"ayat" => "Qs.2:197"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Perbuatan yang diperbolehkan saat berihram"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Berjual beli",
					"ayat" => "Qs.2:198 | Qs.22:28"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tahallul dari ihram",
					"ayat" => "Qs.5:2 | Qs.22:29"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Masuk tanah haram"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Ka'bah"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Pembangunan Ka'bah",
					"ayat" => "Qs.2:127 | Qs.22:26"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Pembersihan berhala dari Ka'bah",
					"ayat" => "Qs.2:125 | Qs.22:26"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Mewangikan Ka'bah",
					"ayat" => "Qs.2:125 | Qs.22:26"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Keutamaan tanah suci Mekah"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keamanan di tanah suci Mekah",
					"ayat" => "Qs.14:35 | Qs.22:25 | Qs.28:57 | Qs.29:67 | Qs.95:3 | Qs.105:2 | Qs.105:3 | Qs.105:4 | Qs.105:5"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Masjidil-Haram sebagai masjid pertama",
					"ayat" => "Qs.2:125 | Qs.3:96 | Qs.22:33"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Penyebutan Baitul Haram",
					"ayat" => "Qs.2:125 | Qs.2:127 | Qs.2:144 | Qs.2:149 | Qs.2:150 | Qs.2:158 | Qs.2:191 | Qs.2:194 | Qs.2:196 | Qs.2:217 | Qs.3:96 | Qs.3:97 | Qs.5:2 | Qs.5:97 | Qs.8:34 | Qs.8:35 | Qs.9:5 | Qs.9:7 | Qs.9:19 | Qs.9:28 | Qs.14:37 | Qs.17:1 | Qs.17:7 | Qs.22:25 | Qs.22:26 | Qs.22:29 | Qs.22:33 | Qs.28:57 | Qs.29:67 | Qs.48:25 | Qs.48:27 | Qs.52:4 | Qs.106:3"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Kemuliaan Mekah"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kemuliaan Masjidil-Haram",
					"ayat" => "Qs.2:125 | Qs.2:126 | Qs.2:191 | Qs.3:97 | Qs.14:37 | Qs.22:25 | Qs.27:91 | Qs.28:57 | Qs.29:67 | Qs.105:1"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kekafiran di tanah Haram",
					"ayat" => "Qs.22:25"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Peperangan di tanah Haram",
					"ayat" => "Qs.2:191 | Qs.3:97 | Qs.5:2"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Peperangan di bulan-bulan Haram",
					"ayat" => "Qs.2:194 | Qs.2:217 | Qs.9:5"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Membunuh hewan tanah Haram",
					"ayat" => "Qs.5:1 | Qs.5:2 | Qs.5:95 | Qs.5:96"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Berlindungnya pelaku maksiat di tanah Haram",
					"ayat" => "Qs.3:97"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kota Mekah dihalalkan untuk Nabi saw.",
					"ayat" => "Qs.90:2"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Masuknya orang musyrik ke Mekah",
					"ayat" => "Qs.9:2 | Qs.9:3 | Qs.9:6 | Qs.9:7 | Qs.9:17 | Qs.9:28"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Thawaf"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Jenis-jenis thawaf"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tawaf Ifadhah",
					"ayat" => "Qs.22:29"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Sunat-sunat thawaf"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Shalat setelah tawaf",
					"ayat" => "Qs.2:125"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Minum air Zamzam"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Memberi minum orang-orang yang haji",
					"ayat" => "Qs.9:19"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Sa'i antara Safa dan Marwah"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Hukum sa'i",
					"ayat" => "Qs.2:158"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Yang pertama kali dilakukan saat sa'i",
					"ayat" => "Qs.2:158"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Wukuf di padang Arafah"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Keutamaan hari Arafah",
					"ayat" => "Qs.85:3 | Qs.89:2"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Keluar dari Arafah"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Berbondong-bondong keluar dari Arafah",
					"ayat" => "Qs.2:198 | Qs.2:199"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Muzdalifah"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Berhenti di Muzdalifah pada masa Jahiliah",
					"ayat" => "Qs.2:199"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Hari raya kurban"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Keutamaan hari raya kurban",
					"ayat" => "Qs.89:2"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Hadyu (binatang kurban) dan kurban"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Hewan yang memenuhi syarat hadyu atau kurban",
					"ayat" => "Qs.22:36"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menyembelih binatang kurban"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Cara menyembelih unta atau sapi",
					"ayat" => "Qs.22:36"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bersedekah dan makan daging hewan kurban",
					"ayat" => "Qs.22:28 | Qs.22:36"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Hadyu"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Hukum hadyu",
					"ayat" => "Qs.5:2 | Qs.5:97"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tempat jual beli hadyu",
					"ayat" => "Qs.22:33"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Waktu penyembelihan",
					"ayat" => "Qs.2:196 | Qs.22:28"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tempat penyembelihan",
					"ayat" => "Qs.2:196 | Qs.22:33"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Hadyu dari haji tamattu'",
					"ayat" => "Qs.2:196"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Membawa hadyu ke Mekah",
					"ayat" => "Qs.22:33"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Anak hewan kurban",
					"ayat" => "Qs.22:33"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Kurban"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Waktu penyembelihan",
					"ayat" => "Qs.22:28 | Qs.108:2"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Bercukur"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Dalil pelaksanaan bercukur",
					"ayat" => "Qs.48:27"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Waktu bercukur, waktu haji dan umrah",
					"ayat" => "Qs.2:196 | Qs.22:29"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bercukur sebelum menyembelih",
					"ayat" => "Qs.2:196"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bercukur dan memendekkan rambut setelah umrah",
					"ayat" => "Qs.48:27"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Kembali dari haji dan umrah"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Cara masuk ke rumah",
					"ayat" => "Qs.2:189"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Ihshar (pengepungan)"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Makna ihshar dalam haji",
					"ayat" => "Qs.48:25"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Ihshar orang yang haji",
					"ayat" => "Qs.2:196"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Ihshar orang yang umrah",
					"ayat" => "Qs.2:196 | Qs.48:25"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Kafarat ihshar",
					"ayat" => "Qs.2:196"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Kafarat haji"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Kafarat mencukur kepala",
					"ayat" => "Qs.2:196"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Apa yang wajib pada kafarat haji",
					"ayat" => "Qs.2:196"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Sumpah dan nazar"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Sumpah"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Pembagian sumpah"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Sumpah sungguh-sungguh",
					"ayat" => "Qs.2:225 | Qs.5:89"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Sumpah main-main",
					"ayat" => "Qs.2:225 | Qs.5:89"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Sumpah palsu",
					"ayat" => "Qs.3:77 | Qs.6:109 | Qs.9:42 | Qs.9:107 | Qs.58:14"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Yang dijadikan sumpah"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Yang dijadikan sumpah oleh Allah",
					"ayat" => "Qs.15:72 | Qs.15:92 | Qs.16:56 | Qs.16:63 | Qs.36:2 | Qs.37:1 | Qs.37:2 | Qs.37:3 | Qs.38:84 | Qs.43:2 | Qs.44:2 | Qs.50:1 | Qs.51:1 | Qs.51:2 | Qs.51:3 | Qs.51:4 | Qs.51:7 | Qs.51:23 | Qs.52:1 | Qs.52:2 | Qs.52:3 | Qs.52:4 | Qs.52:5 | Qs.52:6 | Qs.53:1 | Qs.56:75 | Qs.68:1 | Qs.69:38 | Qs.69:39 | Qs.70:40 | Qs.74:32 | Qs.74:33 | Qs.74:34 | Qs.75:1 | Qs.75:2 | Qs.77:1 | Qs.77:2 | Qs.77:3 | Qs.77:4 | Qs.77:5 | Qs.79:1 | Qs.79:2 | Qs.79:3 | Qs.79:4 | Qs.79:5 | Qs.81:15 | Qs.81:16 | Qs.81:17 | Qs.81:18 | Qs.84:16 | Qs.84:17 | Qs.84:18 | Qs.85:1 | Qs.85:2 | Qs.85:3 | Qs.86:1 | Qs.86:11 | Qs.86:12 | Qs.89:1 | Qs.89:2 | Qs.89:3 | Qs.89:4 | Qs.89:5 | Qs.90:1 | Qs.90:3 | Qs.91:1 | Qs.91:2 | Qs.91:3 | Qs.91:4 | Qs.91:5 | Qs.91:6 | Qs.91:7 | Qs.92:1 | Qs.92:2 | Qs.92:3 | Qs.93:1 | Qs.93:2 | Qs.95:1 | Qs.95:2 | Qs.95:3 | Qs.100:1 | Qs.100:2 | Qs.100:3 | Qs.103:1"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Sumpah dengan menyebut nama Allah",
					"ayat" => "Qs.4:62 | Qs.5:106 | Qs.5:107 | Qs.6:109 | Qs.9:62 | Qs.9:74 | Qs.9:95 | Qs.12:73 | Qs.12:85 | Qs.12:91 | Qs.12:95 | Qs.16:56 | Qs.16:63 | Qs.21:57 | Qs.24:6 | Qs.24:8 | Qs.26:97"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Melanggar sumpah"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Perintah melaksanakan sumpah",
					"ayat" => "Qs.5:89 | Qs.16:95"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Yang dianggap melanggar sumpah",
					"ayat" => "Qs.2:225"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Mengubah sumpah karena hal lain yang lebih perlu",
					"ayat" => "Qs.2:224 | Qs.24:22"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kafarat melanggar sumpah"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Disyariatkannya kafarat pelanggaran sumpah",
					"ayat" => "Qs.5:89 | Qs.66:2"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Yang berlaku pada kafarat sumpah",
					"ayat" => "Qs.5:89"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Memilih kafarat sumpah",
					"ayat" => "Qs.5:89"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menjatuhi hukuman dengan dasar sumpah"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Sumpah-sumpah Li'an",
					"ayat" => "Qs.24:6 | Qs.24:7 | Qs.24:8 | Qs.24:9"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Beberapa hukum yang berkaitan dengan orang yang sumpah"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Bersumpah untuk memutuskan tali silaturahmi",
					"ayat" => "Qs.24:22"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Nazar"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Melaksanakan nazar"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Hukum melaksanakan nazar",
					"ayat" => "Qs.22:29 | Qs.38:44 | Qs.76:7"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Hal yang memenuhi pelaksanaan nazar",
					"ayat" => "Qs.2:270"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Beberapa contoh nazar dalam Al Qur'an",
					"ayat" => "Qs.3:35 | Qs.19:26"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Zikir"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Keutamaan majelis-majelis zikir"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Keutamaan zikir",
					"ayat" => "Qs.2:152 | Qs.2:156 | Qs.2:185 | Qs.2:198 | Qs.2:203 | Qs.8:45 | Qs.9:112 | Qs.13:28 | Qs.18:24 | Qs.20:34 | Qs.24:37 | Qs.29:45 | Qs.33:21 | Qs.33:35 | Qs.62:10 | Qs.63:9 | Qs.87:15"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Banyak-banyak berzikir kepada Allah",
					"ayat" => "Qs.2:200 | Qs.3:41 | Qs.4:103 | Qs.8:45 | Qs.20:33 | Qs.20:34 | Qs.20:130 | Qs.22:40 | Qs.26:227 | Qs.33:21 | Qs.33:35 | Qs.33:41 | Qs.62:10"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir yang paling baik",
					"ayat" => "Qs.13:28 | Qs.18:46 | Qs.19:76"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Etika zikir kepada Allah"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir setiap saat",
					"ayat" => "Qs.3:191 | Qs.4:103"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Takut dan menangis saat berzikir",
					"ayat" => "Qs.7:205 | Qs.8:2 | Qs.17:109 | Qs.19:58 | Qs.22:35"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Menangis ketika membaca Al Qur'an",
					"ayat" => "Qs.5:83 | Qs.19:58"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Merendahkan suara ketika berzikir",
					"ayat" => "Qs.7:205"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Klasifikasi zikir"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Istighfar (mohon ampun)"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keutamaan istighfar",
					"ayat" => "Qs.2:199 | Qs.3:17 | Qs.4:64 | Qs.4:106 | Qs.4:110 | Qs.5:74 | Qs.7:153 | Qs.7:161 | Qs.8:33 | Qs.11:3 | Qs.11:52 | Qs.11:90 | Qs.12:29 | Qs.18:55 | Qs.24:5 | Qs.24:62 | Qs.26:51 | Qs.26:82 | Qs.27:46 | Qs.28:16 | Qs.38:25 | Qs.40:3 | Qs.51:15 | Qs.51:16 | Qs.60:12 | Qs.71:10 | Qs.71:11 | Qs.71:12 | Qs.73:20 | Qs.110:3"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tempat-tempat istighfar",
					"ayat" => "Qs.2:199"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Perintah beristighfar",
					"ayat" => "Qs.2:199 | Qs.11:52 | Qs.11:61 | Qs.11:90 | Qs.73:20"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Istighfar Nabi saw.",
					"ayat" => "Qs.3:159 | Qs.4:64 | Qs.4:106 | Qs.9:80 | Qs.23:118 | Qs.24:62 | Qs.40:55 | Qs.47:19 | Qs.60:12 | Qs.110:3"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Istighfar para Nabi as.",
					"ayat" => "Qs.3:159 | Qs.7:23 | Qs.7:143 | Qs.7:155 | Qs.11:47 | Qs.12:92 | Qs.12:97 | Qs.12:98 | Qs.14:41 | Qs.19:47 | Qs.23:118 | Qs.24:62 | Qs.26:82 | Qs.26:86 | Qs.28:16 | Qs.38:24 | Qs.38:35 | Qs.40:55 | Qs.47:19 | Qs.60:4 | Qs.60:12 | Qs.63:5 | Qs.63:6 | Qs.71:28 | Qs.110:3"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Istighfar orang-orang beriman",
					"ayat" => "Qs.2:199 | Qs.2:285 | Qs.2:286 | Qs.3:16 | Qs.3:17 | Qs.3:193 | Qs.23:109 | Qs.51:18 | Qs.59:10 | Qs.66:8"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Istighfar untuk kedua orang tua",
					"ayat" => "Qs.9:113 | Qs.9:114 | Qs.14:41 | Qs.17:24 | Qs.19:47 | Qs.26:86 | Qs.60:4 | Qs.71:28"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Istighfar untuk saudara",
					"ayat" => "Qs.7:151"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Istighfar untuk orang-orang musyrik",
					"ayat" => "Qs.9:80 | Qs.9:113 | Qs.9:114"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Istighfar malaikat untuk orang-orang mukmin",
					"ayat" => "Qs.40:7 | Qs.40:8 | Qs.40:9 | Qs.42:5"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Kapan disunnatkan istighfar",
					"ayat" => "Qs.3:17 | Qs.3:135"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Isti'azah (mohon perlindungan)"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Jenis-jenis isti'azah"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Mohon perlindungan dari sifat hasad",
					"ayat" => "Qs.113:5"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Mohon perlindungan dari hal-hal yang dibenci",
					"ayat" => "Qs.19:18 | Qs.40:56"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Mohon perlindungan dari bahaya angin, hujan dan awan",
					"ayat" => "Qs.113:2"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Mohon perlindungan dari kawan yang jahat",
					"ayat" => "Qs.113:2"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Mohon perlindungan dari bahaya malam",
					"ayat" => "Qs.113:3"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Mohon perlindungan dari syetan jin dan manusia",
					"ayat" => "Qs.3:36 | Qs.7:200 | Qs.16:98 | Qs.23:97 | Qs.23:98 | Qs.40:27 | Qs.41:36 | Qs.113:2 | Qs.114:4 | Qs.114:5 | Qs.114:6"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Allah melindungi orang yang mohon perlindungan kepadaNya",
					"ayat" => "Qs.113:1 | Qs.114:1"),
				array(
					"id_master" => 2,
					"level" => 5,
					"index" => "Mohon perlindungan dari api neraka",
					"ayat" => "Qs.2:201 | Qs.3:16 | Qs.3:191 | Qs.25:65"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Basmalah (Bismillahirrahmanirrahiim)"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Membaca basmalah ketika menyembelih",
					"ayat" => "Qs.6:118 | Qs.6:119 | Qs.6:121"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Membaca basmalah ketika berburu",
					"ayat" => "Qs.6:118 | Qs.6:119 | Qs.6:121"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Membaca basmalah pada setiap keadaan",
					"ayat" => "Qs.1:1 | Qs.11:41 | Qs.27:30"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Takbir (Allahu Akbar)"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Takbir pada hari-hari Tasyrik",
					"ayat" => "Qs.2:203"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Takbir antara Arafah dan Muzdalifah",
					"ayat" => "Qs.2:198"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Takbir untuk mengagungkan Allah",
					"ayat" => "Qs.17:111 | Qs.22:37 | Qs.74:3"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir saat shalat"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Zikir setelah shalat",
					"ayat" => "Qs.4:103 | Qs.50:40 | Qs.76:26"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tasbih"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tasbihnya makhluk-makhluk dengan memuji Allah",
					"ayat" => "Qs.1:2 | Qs.7:206 | Qs.13:13 | Qs.16:48 | Qs.16:49 | Qs.17:44 | Qs.21:20 | Qs.21:79 | Qs.22:18 | Qs.24:41 | Qs.25:58 | Qs.35:34 | Qs.37:166 | Qs.38:18 | Qs.39:75 | Qs.40:7 | Qs.41:38 | Qs.42:5 | Qs.50:39 | Qs.50:40 | Qs.55:6 | Qs.57:1 | Qs.59:1 | Qs.59:24 | Qs.61:1 | Qs.62:1 | Qs.64:1"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tasbih sebagai tanda kesucian Allah",
					"ayat" => "Qs.2:116 | Qs.3:191 | Qs.4:171 | Qs.5:116 | Qs.6:100 | Qs.7:143 | Qs.9:31 | Qs.10:18 | Qs.10:68 | Qs.12:108 | Qs.15:98 | Qs.16:1 | Qs.16:57 | Qs.17:1 | Qs.17:43 | Qs.17:44 | Qs.17:93 | Qs.17:108 | Qs.19:35 | Qs.21:22 | Qs.23:91 | Qs.25:18 | Qs.27:8 | Qs.30:40 | Qs.34:41 | Qs.36:36 | Qs.36:83 | Qs.37:159 | Qs.37:180 | Qs.39:4 | Qs.39:67 | Qs.43:13 | Qs.43:82 | Qs.52:43 | Qs.52:49 | Qs.56:74 | Qs.56:96 | Qs.59:23 | Qs.68:29 | Qs.69:52 | Qs.87:1"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tasbih ketika mensyukuri nikmat",
					"ayat" => "Qs.3:41 | Qs.10:10 | Qs.19:11 | Qs.43:13 | Qs.110:3"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tasbih ketika takjub",
					"ayat" => "Qs.17:93 | Qs.24:16"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Tasbih ketika mendengar petir",
					"ayat" => "Qs.13:13"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Keutamaan tasbih, tahmid dan tahlil",
					"ayat" => "Qs.9:112 | Qs.21:87 | Qs.24:36 | Qs.37:143 | Qs.40:55 | Qs.48:9 | Qs.52:48 | Qs.52:49 | Qs.68:28"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Tahmid (memuji Allah)"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Hanya Allah yang berhak dipuji",
					"ayat" => "Qs.1:2 | Qs.6:1 | Qs.6:45 | Qs.10:10 | Qs.14:39 | Qs.16:75 | Qs.16:114 | Qs.17:111 | Qs.18:1 | Qs.23:28 | Qs.27:15 | Qs.27:59 | Qs.27:93 | Qs.28:70 | Qs.29:63 | Qs.30:18 | Qs.31:25 | Qs.34:1 | Qs.35:34 | Qs.37:182 | Qs.39:29 | Qs.39:74 | Qs.39:75 | Qs.40:7 | Qs.45:36 | Qs.64:1"),
				array(
					"id_master" => 2,
					"level" => 4,
					"index" => "Memuji Allah atas nikmat-nikmatNya",
					"ayat" => "Qs.1:2 | Qs.5:20 | Qs.5:89 | Qs.6:1 | Qs.6:45 | Qs.7:43 | Qs.14:39 | Qs.16:78 | Qs.16:114 | Qs.16:121 | Qs.23:28 | Qs.25:58 | Qs.27:15 | Qs.27:16 | Qs.27:19 | Qs.27:59 | Qs.30:18 | Qs.34:1 | Qs.35:34 | Qs.37:182 | Qs.93:11"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Tempat-tempat zikir"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir di Masy'aril Haram",
					"ayat" => "Qs.2:198"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir di Mina",
					"ayat" => "Qs.2:203"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir di hari-hari tasyrik",
					"ayat" => "Qs.2:203"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Waktu-waktu zikir"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir setelah ibadat",
					"ayat" => "Qs.2:185 | Qs.2:200 | Qs.4:103 | Qs.22:28"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir Ketika ditimpa bala",
					"ayat" => "Qs.2:156 | Qs.3:173 | Qs.20:25 | Qs.20:26 | Qs.20:33 | Qs.20:34"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir ketika lupa",
					"ayat" => "Qs.18:24"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir di setiap waktu",
					"ayat" => "Qs.3:41 | Qs.7:205 | Qs.30:17 | Qs.30:18 | Qs.33:41 | Qs.33:42 | Qs.38:18 | Qs.40:55 | Qs.48:9 | Qs.52:48 | Qs.52:49 | Qs.73:8 | Qs.76:25"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Bacaan zikir pada waktu pagi dan sore",
					"ayat" => "Qs.7:205"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Ancaman bagi yang melupakan zikir kepada Allah",
					"ayat" => "Qs.4:142 | Qs.5:91 | Qs.7:205 | Qs.10:92 | Qs.20:124 | Qs.21:1 | Qs.24:37 | Qs.25:18 | Qs.63:9"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Zikir ketika menghadapi musuh",
					"ayat" => "Qs.8:45"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Sebab-sebab zikir",
					"ayat" => "Qs.5:4 | Qs.6:118 | Qs.6:119 | Qs.6:121 | Qs.22:28 | Qs.22:34 | Qs.22:36"),
				array(
					"id_master" => 2,
					"level" => 1,
					"index" => "Do'a"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Keutamaan do'a",
					"ayat" => "Qs.2:186 | Qs.2:201 | Qs.3:38 | Qs.3:39 | Qs.19:7 | Qs.20:36 | Qs.20:37 | Qs.21:76 | Qs.21:84 | Qs.21:88 | Qs.21:90 | Qs.23:41 | Qs.26:119 | Qs.26:170 | Qs.27:62 | Qs.28:16 | Qs.28:21 | Qs.35:10 | Qs.37:101 | Qs.38:36 | Qs.38:43 | Qs.40:60"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Perintah berdo'a",
					"ayat" => "Qs.7:29 | Qs.7:55 | Qs.7:56 | Qs.9:103"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Etika berdo'a"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Ikhlas dalam berdo'a",
					"ayat" => "Qs.7:29 | Qs.10:22 | Qs.29:65 | Qs.31:32 | Qs.40:14 | Qs.40:65"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Berdo'a antara suara pelan dan keras",
					"ayat" => "Qs.7:55 | Qs.7:205 | Qs.17:110"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Mengulang-ulang do'a",
					"ayat" => "Qs.11:45 | Qs.19:4"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Waktu-waktu berdoa dan sebab-sebabnya"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa hendak berperang",
					"ayat" => "Qs.2:250 | Qs.3:147"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa mohon kejelekan",
					"ayat" => "Qs.10:11 | Qs.17:11"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa mohon petunjuk (hidayah)",
					"ayat" => "Qs.1:6 | Qs.2:70 | Qs.7:89 | Qs.18:24 | Qs.28:22"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa mohon kebaikan hidup",
					"ayat" => "Qs.1:6 | Qs.3:8 | Qs.3:16 | Qs.3:191 | Qs.3:193 | Qs.3:194 | Qs.7:126 | Qs.7:156 | Qs.12:101 | Qs.26:83 | Qs.26:84 | Qs.26:85 | Qs.26:87 | Qs.27:19 | Qs.52:28 | Qs.66:11"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa mohon ampunan dosa",
					"ayat" => "Qs.2:58 | Qs.2:285 | Qs.3:16 | Qs.3:135 | Qs.3:147 | Qs.3:193 | Qs.7:23 | Qs.7:151 | Qs.7:155 | Qs.11:47 | Qs.14:41 | Qs.23:109 | Qs.23:118 | Qs.26:51 | Qs.26:82 | Qs.26:86 | Qs.28:16 | Qs.59:10 | Qs.60:5 | Qs.66:8 | Qs.71:28"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa mohon dikaruniai anak",
					"ayat" => "Qs.3:38 | Qs.7:189 | Qs.21:89"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa saat selesai haji",
					"ayat" => "Qs.22:28"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa untuk keburukan lawan",
					"ayat" => "Qs.2:286 | Qs.3:147 | Qs.10:88 | Qs.21:112 | Qs.29:30 | Qs.54:10 | Qs.71:24 | Qs.71:26 | Qs.71:28 | Qs.111:1"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa ketika takut",
					"ayat" => "Qs.3:173 | Qs.6:63 | Qs.28:21 | Qs.28:33"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa ketika sakit",
					"ayat" => "Qs.21:83 | Qs.38:41"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa ketika naik kendaraan",
					"ayat" => "Qs.43:13 | Qs.43:14"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa ketika terjadi musibah",
					"ayat" => "Qs.6:40 | Qs.6:41 | Qs.6:63 | Qs.7:94 | Qs.7:126 | Qs.10:12 | Qs.10:22 | Qs.10:86 | Qs.17:67 | Qs.18:10 | Qs.21:87 | Qs.23:26 | Qs.23:39 | Qs.26:117 | Qs.26:118 | Qs.26:119 | Qs.26:169 | Qs.27:62 | Qs.28:16 | Qs.28:21 | Qs.28:24 | Qs.28:47 | Qs.29:65 | Qs.30:33 | Qs.31:32 | Qs.39:8 | Qs.39:49 | Qs.41:51 | Qs.44:22"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa untuk kebaikan muslimin",
					"ayat" => "Qs.59:10 | Qs.71:28"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Doa para nabi",
					"ayat" => "Qs.2:124 | Qs.2:126 | Qs.2:127 | Qs.2:128 | Qs.2:129 | Qs.2:260 | Qs.3:38 | Qs.3:41 | Qs.5:114 | Qs.7:23 | Qs.7:89 | Qs.7:134 | Qs.7:135 | Qs.7:143 | Qs.7:151 | Qs.7:155 | Qs.9:129 | Qs.10:88 | Qs.10:89 | Qs.11:45 | Qs.12:33 | Qs.12:34 | Qs.12:83 | Qs.12:92 | Qs.12:101 | Qs.14:15 | Qs.14:35 | Qs.14:36 | Qs.14:37 | Qs.14:38 | Qs.14:39 | Qs.14:40 | Qs.14:41 | Qs.17:80 | Qs.19:4 | Qs.19:5 | Qs.19:6 | Qs.19:7 | Qs.19:10 | Qs.20:25 | Qs.20:26 | Qs.20:27 | Qs.20:28 | Qs.20:29 | Qs.20:30 | Qs.20:31 | Qs.20:32 | Qs.20:33 | Qs.20:34 | Qs.20:35 | Qs.21:76 | Qs.21:83 | Qs.21:84 | Qs.21:87 | Qs.21:89 | Qs.21:90 | Qs.23:26 | Qs.23:29 | Qs.23:39 | Qs.23:93 | Qs.23:94 | Qs.23:97 | Qs.23:98 | Qs.23:118 | Qs.26:13 | Qs.26:78 | Qs.26:79 | Qs.26:80 | Qs.26:81 | Qs.26:82 | Qs.26:83 | Qs.26:84 | Qs.26:85 | Qs.26:86 | Qs.26:87 | Qs.26:88 | Qs.26:89 | Qs.26:117 | Qs.26:118 | Qs.26:169 | Qs.27:19 | Qs.28:34 | Qs.29:30 | Qs.37:75 | Qs.37:100 | Qs.38:35 | Qs.40:27 | Qs.44:20 | Qs.44:22 | Qs.54:10 | Qs.60:4 | Qs.68:48 | Qs.71:26 | Qs.71:27 | Qs.71:28"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Doa orang-orang beriman",
					"ayat" => "Qs.1:5 | Qs.1:6 | Qs.3:35 | Qs.3:36 | Qs.3:53 | Qs.3:191 | Qs.3:192 | Qs.3:193 | Qs.3:194 | Qs.4:75 | Qs.5:83 | Qs.10:85 | Qs.10:86 | Qs.17:24 | Qs.17:80 | Qs.17:110 | Qs.17:111 | Qs.18:24 | Qs.23:109 | Qs.25:65 | Qs.25:74 | Qs.40:44 | Qs.46:15 | Qs.52:28 | Qs.60:4 | Qs.60:5 | Qs.66:11 | Qs.113:1 | Qs.113:2 | Qs.113:3 | Qs.113:4 | Qs.113:5 | Qs.114:1 | Qs.114:2 | Qs.114:3 | Qs.114:4 | Qs.114:5 | Qs.114:6"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Doa malaikat untuk orang-orang beriman",
					"ayat" => "Qs.11:73 | Qs.40:7 | Qs.40:8 | Qs.40:9"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Terkabulnya do'a"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa para nabi dikabulkan",
					"ayat" => "Qs.2:260 | Qs.3:39 | Qs.3:41 | Qs.5:115 | Qs.10:89 | Qs.12:34 | Qs.19:7 | Qs.19:10 | Qs.20:36 | Qs.21:76 | Qs.21:77 | Qs.21:84 | Qs.21:88 | Qs.21:90 | Qs.26:119 | Qs.26:120 | Qs.26:170 | Qs.26:171 | Qs.26:172 | Qs.26:173 | Qs.28:35 | Qs.29:31 | Qs.29:32 | Qs.29:33 | Qs.29:34 | Qs.37:75 | Qs.37:101 | Qs.38:25 | Qs.38:36 | Qs.38:39 | Qs.44:23 | Qs.44:24 | Qs.54:11 | Qs.54:12 | Qs.54:13 | Qs.68:50"),
				array(
					"id_master" => 2,
					"level" => 3,
					"index" => "Doa orang-orang beriman dikabulkan",
					"ayat" => "Qs.2:186 | Qs.3:37 | Qs.3:195 | Qs.8:9 | Qs.40:45 | Qs.40:46 | Qs.40:60 | Qs.42:26"),
				array(
					"id_master" => 2,
					"level" => 2,
					"index" => "Berdo'a bukan kepada Allah",
					"ayat" => "Qs.6:71 | Qs.7:194 | Qs.7:195 | Qs.7:197 | Qs.10:106 | Qs.11:101 | Qs.13:14 | Qs.17:56 | Qs.17:67 | Qs.18:52 | Qs.22:12 | Qs.22:62 | Qs.22:73 | Qs.26:213 | Qs.28:64 | Qs.31:30 | Qs.34:32 | Qs.35:13 | Qs.35:14 | Qs.35:40 | Qs.39:38 | Qs.40:20 | Qs.41:48 | Qs.43:86 | Qs.46:5"),
				array(
					"id_master" => 3,
					"level" => 1,
					"index" => "Tukar menukar",
					"ayat" => "Qs.2:275"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Jual beli"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Disyariatkannya jual beli dan keutamaannya"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Perintah mencari nafkah",
					"ayat" => "Qs.2:282 | Qs.17:12"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Perdagangan di darat",
					"ayat" => "Qs.106:2"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Perdagangan di laut",
					"ayat" => "Qs.2:164 | Qs.16:14 | Qs.17:66 | Qs.30:46 | Qs.35:12"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Etika jual beli"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Menjauhkan yang haram dalam jual beli",
					"ayat" => "Qs.6:152 | Qs.26:181 | Qs.26:182 | Qs.26:183 | Qs.55:8 | Qs.55:9"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Syarat-syarat jual beli"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Ridha",
					"ayat" => "Qs.4:29"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Riba"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Hukum riba",
					"ayat" => "Qs.2:275 | Qs.2:276 | Qs.2:278 | Qs.3:130 | Qs.30:39"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Sanksi riba",
					"ayat" => "Qs.2:276 | Qs.2:279"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Sewa-menyewa"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Barang sewaan"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Menyewa buruh untuk suatu pekerjaan yang akan datang",
					"ayat" => "Qs.28:27"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Masa sewa"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Pembatasan masa sewa",
					"ayat" => "Qs.28:27"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Dibolehkannya sewa menyewa",
					"ayat" => "Qs.18:94 | Qs.28:27"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Hutang, pinjaman"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Memberi tempo untuk orang yang susah",
					"ayat" => "Qs.2:280"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Penghapusan hutang",
					"ayat" => "Qs.2:280"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Hilangnya orang yang belum mebayar hutang",
					"ayat" => "Qs.42:41"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Hutang si mayit",
					"ayat" => "Qs.4:11 | Qs.4:12"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Berhutang untuk jangka waktu terbatas",
					"ayat" => "Qs.2:282"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Pencatatan hutang",
					"ayat" => "Qs.2:282 | Qs.2:283"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Akuntansi",
					"ayat" => "Qs.24:33"),
				array(
					"id_master" => 3,
					"level" => 1,
					"index" => "Sumbangan"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Wasiat"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Disyariatkannya wasiat",
					"ayat" => "Qs.2:180 | Qs.4:11 | Qs.4:12 | Qs.5:106"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Menarik kembali wasiatnya",
					"ayat" => "Qs.2:182 | Qs.5:107"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Kesaksian terhadaap wasiat",
					"ayat" => "Qs.2:181 | Qs.5:106"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Sedekah"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Perintah bersedekah",
					"ayat" => "Qs.2:195 | Qs.2:254 | Qs.2:261 | Qs.2:267 | Qs.4:39 | Qs.8:3 | Qs.9:104 | Qs.12:88 | Qs.13:22 | Qs.16:75 | Qs.16:90 | Qs.35:29 | Qs.57:7 | Qs.57:10 | Qs.63:10 | Qs.93:10"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Keutamaan sedekah"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Pahala sedekah",
					"ayat" => "Qs.2:245 | Qs.2:261 | Qs.2:262 | Qs.2:268 | Qs.2:274 | Qs.13:22"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Menyuburkan harta dengan sedekah",
					"ayat" => "Qs.2:268 | Qs.2:276 | Qs.9:103 | Qs.34:39"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Sedekah untuk berjuang di jalan Allah",
					"ayat" => "Qs.2:195 | Qs.2:261 | Qs.2:262 | Qs.8:60 | Qs.9:20 | Qs.61:11"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Minta sedekah"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Memaksa dalam minta sedekah",
					"ayat" => "Qs.2:273"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Menahan diri dari minta sedekah",
					"ayat" => "Qs.2:273"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Memberi kepada peminta"),
				array(
					"id_master" => 3,
					"level" => 5,
					"index" => "Ramah terhadap yang minta",
					"ayat" => "Qs.2:263 | Qs.17:28"),
				array(
					"id_master" => 3,
					"level" => 5,
					"index" => "Bersedekah dengan cara jahat dan kasar",
					"ayat" => "Qs.2:263 | Qs.2:264"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Syarat-syarat sedekah"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Niat dalam sedekah",
					"ayat" => "Qs.2:261 | Qs.2:262 | Qs.2:264 | Qs.2:265 | Qs.2:272 | Qs.4:114 | Qs.9:98 | Qs.9:99 | Qs.76:9 | Qs.92:20"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Harta yang baik dalam sedekah",
					"ayat" => "Qs.2:267"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Orang yang lebih baik untuk diberi sedekah"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Sedekah kepada kerabat",
					"ayat" => "Qs.2:215 | Qs.4:8 | Qs.16:90 | Qs.17:26"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Sedekah kepada orang susah",
					"ayat" => "Qs.2:280"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Menyembunyikan sedekah",
					"ayat" => "Qs.2:271 | Qs.2:274 | Qs.14:31 | Qs.35:29"),
				array(
					"id_master" => 3,
					"level" => 1,
					"index" => "Pembebasan"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Mewasiatkan, wasiat"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Wasiat untuk memelihara anak yatim",
					"ayat" => "Qs.2:220 | Qs.4:3 | Qs.4:6 | Qs.4:127"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Yang diberi wasiat makan harta anak yatim",
					"ayat" => "Qs.4:6 | Qs.4:10 | Qs.4:127 | Qs.6:152 | Qs.17:34"),
				array(
					"id_master" => 3,
					"level" => 1,
					"index" => "Pembatasan"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Hajru (mengawasi dan mengatur urusan; jual beli, dsb.)"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Hukum menyia-nyiakan harta",
					"ayat" => "Qs.4:5"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Orang yang diawasi"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Mengawasi anak kecil"),
				array(
					"id_master" => 3,
					"level" => 5,
					"index" => "Melepas pengawasan terhadap anak kecil",
					"ayat" => "Qs.4:6 | Qs.17:34"),
				array(
					"id_master" => 3,
					"level" => 4,
					"index" => "Mengawasi orang bodoh/boros",
					"ayat" => "Qs.2:282 | Qs.4:5"),
				array(
					"id_master" => 3,
					"level" => 1,
					"index" => "Pengukuhan"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Gadai, boreh"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Disyariatkannya boreh",
					"ayat" => "Qs.2:283"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Kafalah (menanggung)"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Disyariatkannya kafalah",
					"ayat" => "Qs.12:72"),
				array(
					"id_master" => 3,
					"level" => 1,
					"index" => "Ganti-rugi"),
				array(
					"id_master" => 3,
					"level" => 2,
					"index" => "Ghashab (mengambil tanpa izin)"),
				array(
					"id_master" => 3,
					"level" => 3,
					"index" => "Sanksi ghashab",
					"ayat" => "Qs.4:30"),
				array(
					"id_master" => 4,
					"level" => 1,
					"index" => "Zaman jahiliah"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Adat-istiadat jahiliah",
					"ayat" => "Qs.2:170 | Qs.2:189 | Qs.3:103 | Qs.3:130 | Qs.4:4 | Qs.4:7 | Qs.4:19 | Qs.4:22 | Qs.4:23 | Qs.4:119 | Qs.4:127 | Qs.5:3 | Qs.5:103 | Qs.5:104 | Qs.6:136 | Qs.6:137 | Qs.6:138 | Qs.6:139 | Qs.6:140 | Qs.6:143 | Qs.6:144 | Qs.6:150 | Qs.6:151 | Qs.6:152 | Qs.7:28 | Qs.7:31 | Qs.7:32 | Qs.7:173 | Qs.8:35 | Qs.9:37 | Qs.10:59 | Qs.10:78 | Qs.11:62 | Qs.11:87 | Qs.11:109 | Qs.16:35 | Qs.16:56 | Qs.16:58 | Qs.16:59 | Qs.16:62 | Qs.17:31 | Qs.21:53 | Qs.23:24 | Qs.24:31 | Qs.33:33 | Qs.33:37 | Qs.36:74 | Qs.37:69 | Qs.37:70 | Qs.43:17 | Qs.43:22 | Qs.43:23 | Qs.47:22 | Qs.48:26 | Qs.49:11 | Qs.53:23 | Qs.57:20 | Qs.58:2 | Qs.60:12 | Qs.81:8 | Qs.81:9 | Qs.83:1 | Qs.83:2 | Qs.83:3 | Qs.89:19 | Qs.106:1 | Qs.106:2"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Penyembahan berhala",
					"ayat" => "Qs.7:71 | Qs.22:71 | Qs.26:71 | Qs.26:72 | Qs.26:73 | Qs.26:74 | Qs.26:75 | Qs.26:76 | Qs.29:17 | Qs.29:25 | Qs.36:74 | Qs.37:95 | Qs.37:125 | Qs.39:3 | Qs.53:19 | Qs.53:20 | Qs.53:23 | Qs.71:23"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Kebanggaan jahiliah",
					"ayat" => "Qs.9:19"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Masyarakat buta huruf",
					"ayat" => "Qs.3:20"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Abrahah dan burung Ababil",
					"ayat" => "Qs.105:3 | Qs.105:5"),
				array(
					"id_master" => 4,
					"level" => 1,
					"index" => "Beberapa kabar gembira tentang kedatangan nabi Muhammad saw."),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Para nabi terdahulu membawa kabar gembira kedatangan nabi Muhammad saw.",
					"ayat" => "Qs.2:129 | Qs.6:20 | Qs.7:157 | Qs.26:196 | Qs.26:197 | Qs.46:10 | Qs.61:6"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Sifat nabi Muhammad saw. dalam kitab Taurat",
					"ayat" => "Qs.48:29"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Selang waktu antara nabi Isa as. dan nabi Muhammad saw.",
					"ayat" => "Qs.5:19"),
				array(
					"id_master" => 4,
					"level" => 1,
					"index" => "Sejarah sebelum kedatangan nabi Muhammad saw."),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Kelahiran nabi Muhammad saw.",
					"ayat" => "Qs.93:6"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Pengasuhan nabi Muhammad saw.",
					"ayat" => "Qs.93:6"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Kenabian nabi Muhammad saw."),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Tanda-tanda kenabian Rasul saw.",
					"ayat" => "Qs.3:44 | Qs.7:157 | Qs.7:158 | Qs.10:15 | Qs.10:16 | Qs.11:100 | Qs.12:3 | Qs.12:102 | Qs.16:103 | Qs.28:44 | Qs.28:45 | Qs.28:46 | Qs.29:48 | Qs.38:69 | Qs.62:2"),
				array(
					"id_master" => 4,
					"level" => 1,
					"index" => "Awal turun wahyu"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Nabi Muhammad saw. melihat Jibril",
					"ayat" => "Qs.53:7 | Qs.53:8 | Qs.53:9 | Qs.53:10 | Qs.53:11 | Qs.53:12 | Qs.53:13 | Qs.53:14 | Qs.53:15 | Qs.53:16 | Qs.53:17 | Qs.53:18 | Qs.81:23"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Nabi Muhammad saw. buta huruf",
					"ayat" => "Qs.7:157 | Qs.7:158 | Qs.62:2"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Terputusnya wahyu",
					"ayat" => "Qs.93:3"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Beratnya saat nabi Muhammad saw. menerima wahyu",
					"ayat" => "Qs.73:5"),
				array(
					"id_master" => 4,
					"level" => 1,
					"index" => "Sejarah di Mekah"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Berdakwah secara terang-terangan"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perintah berdakwah secara terang-terangan",
					"ayat" => "Qs.15:94"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kekhawatiran Nabi saw. terhadap kaumnya",
					"ayat" => "Qs.3:176 | Qs.5:41 | Qs.5:68 | Qs.6:33 | Qs.6:35 | Qs.9:80 | Qs.9:128 | Qs.10:99 | Qs.15:88 | Qs.16:37 | Qs.16:127 | Qs.18:6 | Qs.26:3 | Qs.26:214 | Qs.27:70 | Qs.34:46 | Qs.36:10 | Qs.39:19 | Qs.42:23 | Qs.43:40 | Qs.50:45 | Qs.80:6"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Dakwah Nabi saw. kepada kaum kerabatnya",
					"ayat" => "Qs.6:92 | Qs.26:214"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Masyarakat Mekah berpaling dari Nabi saw.",
					"ayat" => "Qs.2:170 | Qs.3:63 | Qs.3:176 | Qs.3:184 | Qs.5:104 | Qs.6:50 | Qs.6:147 | Qs.9:129 | Qs.11:5 | Qs.11:14 | Qs.17:45 | Qs.17:46 | Qs.17:47 | Qs.18:6 | Qs.18:57 | Qs.21:2 | Qs.21:6 | Qs.21:36 | Qs.22:15 | Qs.22:68 | Qs.23:69 | Qs.25:4 | Qs.25:5 | Qs.25:9 | Qs.25:30 | Qs.25:60 | Qs.26:5 | Qs.26:216 | Qs.27:80 | Qs.27:81 | Qs.28:50 | Qs.35:42 | Qs.38:68 | Qs.39:64 | Qs.41:4 | Qs.41:5 | Qs.41:26 | Qs.42:13 | Qs.43:31 | Qs.52:40 | Qs.54:2 | Qs.54:3 | Qs.54:44 | Qs.68:9 | Qs.70:36 | Qs.70:37"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Allah memantapkan (hati) RasulNya",
					"ayat" => "Qs.2:147 | Qs.2:252 | Qs.2:258 | Qs.3:12 | Qs.3:58 | Qs.3:120 | Qs.3:126 | Qs.3:139 | Qs.3:146 | Qs.3:174 | Qs.3:176 | Qs.3:184 | Qs.3:186 | Qs.3:196 | Qs.4:45 | Qs.4:63 | Qs.4:81 | Qs.4:84 | Qs.4:113 | Qs.4:166 | Qs.5:41 | Qs.5:42 | Qs.5:60 | Qs.5:67 | Qs.5:105 | Qs.6:10 | Qs.6:33 | Qs.6:34 | Qs.6:35 | Qs.6:42 | Qs.6:57 | Qs.6:58 | Qs.6:70 | Qs.6:106 | Qs.6:112 | Qs.6:114 | Qs.6:116 | Qs.6:123 | Qs.6:135 | Qs.6:147 | Qs.6:150 | Qs.7:2 | Qs.7:101 | Qs.7:184 | Qs.7:196 | Qs.7:203 | Qs.8:62 | Qs.8:64 | Qs.9:55 | Qs.9:85 | Qs.9:129 | Qs.10:20 | Qs.10:41 | Qs.10:46 | Qs.10:65 | Qs.10:71 | Qs.10:94 | Qs.10:98 | Qs.10:99 | Qs.10:109 | Qs.11:12 | Qs.11:14 | Qs.11:17 | Qs.11:49 | Qs.11:109 | Qs.11:112 | Qs.11:120 | Qs.12:102 | Qs.12:103 | Qs.12:110 | Qs.13:32 | Qs.13:38 | Qs.13:41 | Qs.13:42 | Qs.13:43 | Qs.14:9 | Qs.15:10 | Qs.15:11 | Qs.15:85 | Qs.15:88 | Qs.15:91 | Qs.15:94 | Qs.16:26 | Qs.16:43 | Qs.16:63 | Qs.16:127 | Qs.17:48 | Qs.17:107 | Qs.19:65 | Qs.20:9 | Qs.20:99 | Qs.20:130 | Qs.20:131 | Qs.21:41 | Qs.22:42 | Qs.22:43 | Qs.22:44 | Qs.22:52 | Qs.22:67 | Qs.22:69 | Qs.23:24 | Qs.23:72 | Qs.24:55 | Qs.25:20 | Qs.25:31 | Qs.25:32 | Qs.25:33 | Qs.25:36 | Qs.25:37 | Qs.25:38 | Qs.25:39 | Qs.25:43 | Qs.25:52 | Qs.26:69 | Qs.26:105 | Qs.26:123 | Qs.26:139 | Qs.26:158 | Qs.26:160 | Qs.26:174 | Qs.26:176 | Qs.26:190 | Qs.26:194 | Qs.27:6 | Qs.27:14 | Qs.27:45 | Qs.27:70 | Qs.27:79 | Qs.28:50 | Qs.28:87 | Qs.29:14 | Qs.29:36 | Qs.29:38 | Qs.30:47 | Qs.30:60 | Qs.31:23 | Qs.32:30 | Qs.33:48 | Qs.34:34 | Qs.35:4 | Qs.35:8 | Qs.35:25 | Qs.36:76 | Qs.37:174 | Qs.37:175 | Qs.37:178 | Qs.37:179 | Qs.38:17 | Qs.38:41 | Qs.38:45 | Qs.38:46 | Qs.38:47 | Qs.38:48 | Qs.39:36 | Qs.40:5 | Qs.40:55 | Qs.40:77 | Qs.40:78 | Qs.41:43 | Qs.43:6 | Qs.43:7 | Qs.43:8 | Qs.43:23 | Qs.43:43 | Qs.44:17 | Qs.46:21 | Qs.46:35 | Qs.47:13 | Qs.48:26 | Qs.50:12 | Qs.50:13 | Qs.50:14 | Qs.50:39 | Qs.51:52 | Qs.51:54 | Qs.52:45 | Qs.52:48 | Qs.68:48 | Qs.70:5 | Qs.73:10 | Qs.76:24 | Qs.79:15 | Qs.85:17 | Qs.85:18 | Qs.87:8 | Qs.93:4 | Qs.93:5 | Qs.93:6 | Qs.93:7 | Qs.93:8 | Qs.96:19"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Penbuktian kerasulan Nabi saw.",
					"ayat" => "Qs.2:119 | Qs.3:61 | Qs.3:62 | Qs.3:81 | Qs.3:164 | Qs.4:79 | Qs.4:166 | Qs.4:170 | Qs.5:15 | Qs.5:19 | Qs.7:158 | Qs.9:33 | Qs.10:108 | Qs.36:3 | Qs.43:43 | Qs.47:2 | Qs.48:28"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Penghinaan kaum Quraisy"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Pendustaan Quraisy terhadap Nabi saw.",
					"ayat" => "Qs.3:61 | Qs.6:25 | Qs.6:26 | Qs.6:33 | Qs.6:35 | Qs.6:57 | Qs.6:66 | Qs.6:135 | Qs.6:148 | Qs.6:150 | Qs.6:156 | Qs.6:157 | Qs.9:9 | Qs.10:15 | Qs.10:39 | Qs.10:41 | Qs.10:53 | Qs.13:27 | Qs.13:31 | Qs.13:43 | Qs.15:7 | Qs.16:103 | Qs.16:113 | Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93 | Qs.21:2 | Qs.21:3 | Qs.21:5 | Qs.21:6 | Qs.25:4 | Qs.26:216 | Qs.27:70 | Qs.27:80 | Qs.27:81 | Qs.28:48 | Qs.28:49 | Qs.32:3 | Qs.34:7 | Qs.34:8 | Qs.34:29 | Qs.34:43 | Qs.34:53 | Qs.35:4 | Qs.35:42 | Qs.36:69 | Qs.36:76 | Qs.37:12 | Qs.37:36 | Qs.37:170 | Qs.38:4 | Qs.38:5 | Qs.38:6 | Qs.38:7 | Qs.38:8 | Qs.38:68 | Qs.39:64 | Qs.41:4 | Qs.41:5 | Qs.42:13 | Qs.42:24 | Qs.43:24 | Qs.43:30 | Qs.43:31 | Qs.43:57 | Qs.43:58 | Qs.43:88 | Qs.44:14 | Qs.46:7 | Qs.46:8 | Qs.46:10 | Qs.50:2 | Qs.52:29 | Qs.52:30 | Qs.52:40 | Qs.52:42 | Qs.54:2 | Qs.54:3 | Qs.54:44 | Qs.68:9 | Qs.69:41 | Qs.70:36 | Qs.70:37 | Qs.74:52 | Qs.75:31 | Qs.75:32 | Qs.80:5 | Qs.80:6 | Qs.109:3 | Qs.109:5"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Cobaan kaum muslimin dari kaum Quraisy",
					"ayat" => "Qs.2:217 | Qs.3:140 | Qs.3:186 | Qs.3:195 | Qs.5:57 | Qs.5:58 | Qs.9:13 | Qs.9:40 | Qs.16:126 | Qs.16:127 | Qs.17:47 | Qs.17:76 | Qs.21:5 | Qs.21:6 | Qs.21:36 | Qs.22:40 | Qs.25:4 | Qs.27:70 | Qs.29:12 | Qs.34:53 | Qs.47:13 | Qs.52:30 | Qs.52:42 | Qs.60:1 | Qs.60:2 | Qs.60:9 | Qs.72:19 | Qs.83:29 | Qs.83:30 | Qs.83:31 | Qs.83:32 | Qs.83:33"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Orang musyrik mengejekan kaum muslimin",
					"ayat" => "Qs.2:212 | Qs.34:7 | Qs.38:63 | Qs.83:29 | Qs.83:30 | Qs.83:31 | Qs.83:32"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kaum Quraisy meminta mukjizat",
					"ayat" => "Qs.2:118 | Qs.6:8 | Qs.6:37 | Qs.6:109 | Qs.6:111 | Qs.7:203 | Qs.10:20 | Qs.11:12 | Qs.13:7 | Qs.13:27 | Qs.13:38 | Qs.15:7 | Qs.17:90 | Qs.17:91 | Qs.17:93 | Qs.20:133 | Qs.21:5 | Qs.25:7 | Qs.25:8 | Qs.29:50 | Qs.98:1"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kaum Quraisy bersekutu untuk kufur",
					"ayat" => "Qs.8:30 | Qs.38:6 | Qs.38:7 | Qs.41:26 | Qs.51:53 | Qs.109:3 | Qs.109:5 | Qs.109:6"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Abu Jahal menyakiti Nabi saw."),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Permusuhan Abu Jahal",
					"ayat" => "Qs.96:9 | Qs.96:10 | Qs.96:11 | Qs.96:12"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Permusuhan Abu Lahab",
					"ayat" => "Qs.111:1 | Qs.111:2 | Qs.111:3"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Penyiksaan terhadap orang mukmin yang lemah",
					"ayat" => "Qs.4:75 | Qs.16:41 | Qs.16:110 | Qs.59:8 | Qs.60:1 | Qs.60:9"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Orang-orang musyrik mendustai Al Qur'an",
					"ayat" => "Qs.4:140 | Qs.6:25 | Qs.6:68 | Qs.8:31 | Qs.10:15 | Qs.10:37 | Qs.10:38 | Qs.11:13 | Qs.11:35 | Qs.15:91 | Qs.16:24 | Qs.21:5 | Qs.25:4 | Qs.32:3 | Qs.34:8 | Qs.34:43 | Qs.36:69 | Qs.37:15 | Qs.42:24 | Qs.46:7 | Qs.46:11 | Qs.52:33 | Qs.68:44 | Qs.81:25 | Qs.83:13"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Orang-orang musyrik menuduh Nabi saw. menutup-nutupi wahyu",
					"ayat" => "Qs.81:24"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Orng-orang musyrik menuduh Nabi saw. mengetahui hal ghaib",
					"ayat" => "Qs.7:188"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kaum Quraisy menuduh kaum Yahudi mengajari Nabi saw.",
					"ayat" => "Qs.6:105"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. dituduh sebagai penyihir",
					"ayat" => "Qs.6:7 | Qs.10:2 | Qs.11:7 | Qs.17:47 | Qs.21:3 | Qs.25:8 | Qs.34:43 | Qs.37:15 | Qs.38:4 | Qs.43:30 | Qs.46:7 | Qs.52:29 | Qs.69:42 | Qs.74:24"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. dituduh sebagai orang gila",
					"ayat" => "Qs.7:184 | Qs.15:6 | Qs.23:70 | Qs.34:8 | Qs.34:46 | Qs.37:36 | Qs.44:14 | Qs.52:29 | Qs.68:2 | Qs.68:51 | Qs.81:22"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. dituduh sebagai pembohong",
					"ayat" => "Qs.17:48"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. dituduh sebagai penyair",
					"ayat" => "Qs.21:5 | Qs.36:69 | Qs.37:36 | Qs.52:30 | Qs.69:41"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Peristiwa Isra' dan Mi'raj"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Malaikat naik ke langit bersama Nabi saw.",
					"ayat" => "Qs.17:1"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Dada Nabi saw. dibelah dan dikeluarkan hatinya",
					"ayat" => "Qs.94:1"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. melihat Jibril as. dalam bentuk aslinya",
					"ayat" => "Qs.53:14 | Qs.53:15 | Qs.53:16 | Qs.53:17 | Qs.53:18"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. melihat surga",
					"ayat" => "Qs.53:15 | Qs.53:16 | Qs.53:17 | Qs.53:18"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kaum Quraisy mendustai peristiwa isra' dan mi'raj",
					"ayat" => "Qs.17:60 | Qs.53:10 | Qs.53:12"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Perjanjian Aqabah kedua"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Janji setia untuk beriman dan meninggalkan syirik",
					"ayat" => "Qs.5:7 | Qs.57:8 | Qs.60:12"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Janji setia kaum wanita pada malam 'Aqabah",
					"ayat" => "Qs.60:12"),
				array(
					"id_master" => 4,
					"level" => 1,
					"index" => "Hijrah"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Persiapan untuk hijrah"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. mengizinkan para sahabat untuk berhijrah",
					"ayat" => "Qs.4:97"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Izin Allah kepada Nabi saw. untuk berhijrah",
					"ayat" => "Qs.29:56"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Alasan tidak berhijrah",
					"ayat" => "Qs.4:98 | Qs.4:99"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Berhijrah di jalan Allah",
					"ayat" => "Qs.2:218 | Qs.3:195 | Qs.4:89 | Qs.4:97 | Qs.4:100 | Qs.8:72 | Qs.8:74 | Qs.9:20 | Qs.16:41 | Qs.22:58 | Qs.24:22 | Qs.29:8 | Qs.59:8"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Gua Tsur",
					"ayat" => "Qs.9:40"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Nabi saw. memasuki kota Madinah",
					"ayat" => "Qs.17:80"),
				array(
					"id_master" => 4,
					"level" => 1,
					"index" => "Sejarah di Madinah"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Cobaan kaum muslimin di Madinah"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kaum Munafiq menyakiti Rasulullah saw.",
					"ayat" => "Qs.4:61 | Qs.4:78 | Qs.4:81 | Qs.4:113 | Qs.5:41 | Qs.9:48 | Qs.9:50 | Qs.9:58 | Qs.9:61 | Qs.9:65 | Qs.9:74 | Qs.24:11 | Qs.63:5 | Qs.63:8"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Penderitaan para utusan yang ingin memeluk Islam",
					"ayat" => "Qs.6:26 | Qs.42:16"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Orang Yahudi menyakiti kaum muslimin",
					"ayat" => "Qs.2:142 | Qs.3:69 | Qs.3:72 | Qs.3:100 | Qs.3:111 | Qs.3:118 | Qs.3:186 | Qs.4:44 | Qs.4:46 | Qs.4:51 | Qs.5:41 | Qs.5:57 | Qs.5:58 | Qs.5:64 | Qs.58:8"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Sikap orang-orang arab badui terhadap Islam",
					"ayat" => "Qs.9:97 | Qs.9:98 | Qs.9:99 | Qs.9:101 | Qs.48:11 | Qs.48:12 | Qs.48:15 | Qs.48:16 | Qs.49:14 | Qs.49:17"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Beberapa peristiwa di tahun kedua Hijrah"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perpindahan arah kiblat ke Ka'bah",
					"ayat" => "Qs.2:142 | Qs.2:143 | Qs.2:144 | Qs.2:150"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perang Badar Al Kubra",
					"ayat" => "Qs.8:8 | Qs.8:9"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perang Bani Qainuqaa'",
					"ayat" => "Qs.59:14"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Beberapa peristiwa di tahun ketiga Hijrah"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perang Hamra Al Asad",
					"ayat" => "Qs.3:172 | Qs.3:173 | Qs.3:174"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Beberapa peristiwa di tahun kelima Hijrah"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Tuduhan terhadap Aisyah ra.",
					"ayat" => "Qs.24:11 | Qs.24:12 | Qs.24:13 | Qs.24:14 | Qs.24:15 | Qs.24:16"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Peperangan"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perang Badar"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Mimpi Nabi saw. mengenai perang Badar",
					"ayat" => "Qs.8:43"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Seruan untuk perang Badar",
					"ayat" => "Qs.8:5 | Qs.8:7"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Rasul saw. memohon bantuan Allah dalam perang Badar",
					"ayat" => "Qs.8:9"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Perang adu ketangkasan pertama dalam Islam",
					"ayat" => "Qs.22:19"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Suasana perang Badar",
					"ayat" => "Qs.8:11 | Qs.8:41 | Qs.8:42 | Qs.8:43 | Qs.8:44 | Qs.8:48 | Qs.8:49"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Kesaksian malaikat dalam perang Badar",
					"ayat" => "Qs.3:124 | Qs.3:125 | Qs.8:9 | Qs.8:10 | Qs.8:12"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Hasil perang Badar",
					"ayat" => "Qs.3:13 | Qs.3:123 | Qs.3:165 | Qs.8:8 | Qs.8:17 | Qs.54:45"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Kaum musyrikin menebus tawanan perang Badar",
					"ayat" => "Qs.8:67 | Qs.8:68 | Qs.8:70"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Harta rampasan perang Badar",
					"ayat" => "Qs.8:1 | Qs.8:41"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perang Uhud"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Perang Uhud dan pengaturan pasukan",
					"ayat" => "Qs.3:121"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Beberapa hal pasukan dan perang Uhud",
					"ayat" => "Qs.3:144"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Cobaan besar dalam perang Uhud",
					"ayat" => "Qs.3:143 | Qs.3:153"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Perbuatan syetan dalam perang Uhud",
					"ayat" => "Qs.3:155"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Orang munafik kembali dalam perang Uhud",
					"ayat" => "Qs.3:167 | Qs.3:168 | Qs.4:88"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Nabi saw. cidera",
					"ayat" => "Qs.3:144"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Kekalahan kaum muslimin dalam perang Uhud",
					"ayat" => "Qs.3:140 | Qs.3:152 | Qs.3:153 | Qs.3:154 | Qs.3:155 | Qs.3:165 | Qs.3:166 | Qs.3:172"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perang Hunain"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Kekalahan muslimin pada awal perang",
					"ayat" => "Qs.9:25"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Hasil perang Hunain",
					"ayat" => "Qs.9:26"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Janji setia tawanan Hunain untuk memeluk Islam",
					"ayat" => "Qs.9:27"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perang Khandaq"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Kesulitan pada perang Khandak",
					"ayat" => "Qs.33:11 | Qs.33:22"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Munculnya orang munafiq",
					"ayat" => "Qs.33:12 | Qs.33:13 | Qs.33:15 | Qs.33:18"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Kegagalan pasukan Ahzab (sekutu)",
					"ayat" => "Qs.33:20"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perjanjian Hudaibiah"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Kaum musyrikin menghalangi pelaksanakan umrah",
					"ayat" => "Qs.2:114 | Qs.2:194 | Qs.2:196 | Qs.2:217 | Qs.5:2 | Qs.22:25 | Qs.48:24 | Qs.48:25 | Qs.48:26"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Bai'at Ridwan",
					"ayat" => "Qs.48:10 | Qs.48:18"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Keutamaan mereka yang berbai'at Ridwan",
					"ayat" => "Qs.48:10 | Qs.48:18 | Qs.48:19 | Qs.48:20"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Tertundanya pelaksanaan umrah",
					"ayat" => "Qs.48:11 | Qs.48:12 | Qs.48:15 | Qs.48:16"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Syarat-syarat perjanjian Hudaibiyah",
					"ayat" => "Qs.60:10"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Harta rampasan Khaibar untuk mereka yang menghadiri Hudaibiah",
					"ayat" => "Qs.48:15"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perang Bani Nadhir"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Persekongkolan orang munafik dengan Bani Nadhir",
					"ayat" => "Qs.59:11 | Qs.59:12 | Qs.59:13"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Pengusiran Bani Nadhir",
					"ayat" => "Qs.59:2 | Qs.59:3 | Qs.59:5"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Harta yang diperoleh dari Bani Nadhir",
					"ayat" => "Qs.59:6"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Perang Tabuk"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Penderitaan para sahabat dalam perang Tabuk",
					"ayat" => "Qs.9:117"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Perang Tabuk dalam kondisi paceklik",
					"ayat" => "Qs.9:117"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Beberapa orang sahabat yang tidak ikut perang Tabuk",
					"ayat" => "Qs.9:38 | Qs.9:39 | Qs.9:45 | Qs.9:102 | Qs.9:106 | Qs.9:118"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Sikap orang munafik dalam perang Tabuk",
					"ayat" => "Qs.9:42 | Qs.9:44 | Qs.9:45 | Qs.9:46 | Qs.9:47 | Qs.9:49 | Qs.9:81 | Qs.9:83 | Qs.9:86 | Qs.9:87 | Qs.9:90 | Qs.9:93 | Qs.9:94 | Qs.9:95 | Qs.9:96"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Kisah Masjid Dhirar",
					"ayat" => "Qs.9:107 | Qs.9:108 | Qs.9:110"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Penaklukan Kota Mekkah"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Berita gembira tentang penaklukan kota Mekah",
					"ayat" => "Qs.28:85 | Qs.48:21"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Mimpi Nabi saw. tentang pembukaan kota Mekah",
					"ayat" => "Qs.48:27"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Kisah Hathib bin Abu Balta'ah",
					"ayat" => "Qs.60:1"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Nabi dan para sahabat memasuki kota Mekah",
					"ayat" => "Qs.48:1 | Qs.48:27 | Qs.110:1"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Penaklukan Khaibar"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Berita gembira penaklukan Khaibar",
					"ayat" => "Qs.48:21"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Beberapa surat dan perjanjian kenegaraan (hubungan diplomasi)"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Memenuhi sumpah dan janji",
					"ayat" => "Qs.2:100 | Qs.2:177 | Qs.3:76 | Qs.3:81 | Qs.4:90 | Qs.5:1 | Qs.6:152 | Qs.8:56 | Qs.9:4 | Qs.9:7 | Qs.12:66 | Qs.13:20 | Qs.16:91 | Qs.16:92 | Qs.16:94 | Qs.16:95 | Qs.17:34 | Qs.23:8 | Qs.33:15 | Qs.33:23 | Qs.48:10 | Qs.61:2 | Qs.61:3 | Qs.70:32"),
				array(
					"id_master" => 4,
					"level" => 1,
					"index" => "Sifat-sifat nabi Muhammad saw."),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Sifat dan tingkah laku Nabi yang mulia"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nama-nama Nabi saw.",
					"ayat" => "Qs.3:144 | Qs.33:40 | Qs.47:2 | Qs.48:29 | Qs.61:6"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Akhlak Nabi saw."),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kemuliaan akhlak Nabi saw.",
					"ayat" => "Qs.9:128 | Qs.68:4"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kerendah-hatian Nabi saw."),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Rendah diri adalah akhlak para nabi",
					"ayat" => "Qs.6:50 | Qs.11:31"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Sabda Rasul saw. 'Aku ini hanya seorang manusia biasa'",
					"ayat" => "Qs.17:93"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kezuhudan Nabi saw.",
					"ayat" => "Qs.20:131"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kasih-sayang Nabi saw.",
					"ayat" => "Qs.3:159 | Qs.9:61 | Qs.9:128"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Ketaqwaan Nabi saw.",
					"ayat" => "Qs.6:15 | Qs.10:15"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Lembutnya perlakuan Nabi saw.",
					"ayat" => "Qs.3:159 | Qs.15:88 | Qs.23:96 | Qs.26:215"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Keramahan Nabi saw.",
					"ayat" => "Qs.9:128"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Ibadah sunnah Nabi saw."),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Shalat Nabi saw.",
					"ayat" => "Qs.20:130 | Qs.73:20"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Bacaan Al Qur'an Nabi saw.",
					"ayat" => "Qs.17:110 | Qs.46:29 | Qs.75:16"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Mukjizat Nabi saw."),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Turunnya Al Qur'an kepada Nabi saw.",
					"ayat" => "Qs.2:23 | Qs.2:99 | Qs.2:185 | Qs.3:3 | Qs.3:7 | Qs.3:84 | Qs.4:105 | Qs.4:113 | Qs.4:136 | Qs.5:67 | Qs.6:156 | Qs.6:157 | Qs.7:203 | Qs.17:86 | Qs.17:105 | Qs.17:106 | Qs.18:1 | Qs.18:27 | Qs.20:133 | Qs.21:10 | Qs.21:50 | Qs.26:192 | Qs.26:193 | Qs.26:194 | Qs.27:6 | Qs.29:51 | Qs.32:2 | Qs.38:8 | Qs.38:29 | Qs.39:2 | Qs.39:41 | Qs.42:3 | Qs.42:7 | Qs.42:17 | Qs.42:52 | Qs.44:3 | Qs.56:80 | Qs.69:40 | Qs.69:43 | Qs.76:23 | Qs.98:2"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Keutamaan Nabi saw."),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Keridhaan Allah kepada Nabi saw.",
					"ayat" => "Qs.68:3 | Qs.93:5 | Qs.93:7 | Qs.94:1 | Qs.94:4"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. sebagai saksi, pembawa kabar gembira dan peringatan",
					"ayat" => "Qs.2:119 | Qs.2:143 | Qs.4:41 | Qs.5:19 | Qs.6:19 | Qs.6:92 | Qs.7:2 | Qs.7:184 | Qs.7:188 | Qs.10:2 | Qs.11:2 | Qs.11:12 | Qs.13:7 | Qs.14:44 | Qs.14:52 | Qs.15:89 | Qs.16:89 | Qs.17:105 | Qs.18:4 | Qs.18:56 | Qs.21:45 | Qs.22:49 | Qs.22:78 | Qs.25:56 | Qs.26:194 | Qs.26:214 | Qs.27:92 | Qs.28:46 | Qs.29:50 | Qs.32:3 | Qs.33:45 | Qs.34:28 | Qs.34:44 | Qs.34:46 | Qs.35:18 | Qs.35:23 | Qs.35:24 | Qs.35:42 | Qs.36:6 | Qs.36:10 | Qs.36:11 | Qs.38:4 | Qs.38:65 | Qs.38:70 | Qs.39:17 | Qs.40:18 | Qs.41:4 | Qs.41:13 | Qs.42:7 | Qs.44:3 | Qs.46:9 | Qs.48:8 | Qs.50:2 | Qs.51:50 | Qs.51:51 | Qs.53:56 | Qs.61:13 | Qs.67:26 | Qs.73:15 | Qs.74:2 | Qs.79:45"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kesaksian Nabi saw. atas umatnya",
					"ayat" => "Qs.2:143 | Qs.4:41 | Qs.16:89 | Qs.22:78 | Qs.33:45 | Qs.48:8 | Qs.73:15"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. lebih berhak atas diri kaum muslimin",
					"ayat" => "Qs.33:6"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Keberadaan Nabi saw. adalah jaminan keamanan bagi umatnya",
					"ayat" => "Qs.8:33 | Qs.67:28"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Keutamaan shalawat atas Nabi saw.",
					"ayat" => "Qs.33:56"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Rasulullah saw. yang membagi dan Allah yang memberi",
					"ayat" => "Qs.8:41"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Keistimewaan Nabi Muhammad saw."),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi saw. diutus untuk seluruh umat manusia",
					"ayat" => "Qs.3:64 | Qs.3:199 | Qs.4:47 | Qs.4:79 | Qs.4:162 | Qs.4:170 | Qs.4:171 | Qs.4:174 | Qs.5:15 | Qs.5:19 | Qs.5:66 | Qs.5:68 | Qs.5:81 | Qs.5:83 | Qs.6:19 | Qs.6:20 | Qs.6:90 | Qs.6:114 | Qs.7:158 | Qs.10:104 | Qs.10:108 | Qs.13:36 | Qs.16:64 | Qs.21:107 | Qs.22:49 | Qs.25:1 | Qs.25:51 | Qs.34:28 | Qs.39:41 | Qs.61:6 | Qs.61:9 | Qs.62:3 | Qs.68:52 | Qs.81:27 | Qs.98:1 | Qs.98:4 | Qs.98:6"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Harta rampasan perang halal bagi Rasul saw.",
					"ayat" => "Qs.8:1 | Qs.8:41 | Qs.8:69"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Telaga Kautsar untuk Nabi saw.",
					"ayat" => "Qs.108:1"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Pengampunan dosa beliau",
					"ayat" => "Qs.9:43 | Qs.48:2 | Qs.94:2 | Qs.94:3"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kemenangan Nabi Muhammad saw. dengan ketakutan musuh",
					"ayat" => "Qs.3:151 | Qs.8:12 | Qs.33:26 | Qs.59:2"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kemenangan Nabi Muhammad saw. dengan bantuan angin",
					"ayat" => "Qs.33:9"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi Muhammad saw. mengawini lebih dari empat wanita",
					"ayat" => "Qs.33:50"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi Muhammad saw. mengawini wanita yang dihibahkan",
					"ayat" => "Qs.33:50"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Nabi terakhir",
					"ayat" => "Qs.3:144 | Qs.9:33 | Qs.33:40 | Qs.72:7"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kota Mekah halal khusus bagi Nabi Muhammad saw.",
					"ayat" => "Qs.90:2"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kewajiban tahajjud bagi Nabi saw.",
					"ayat" => "Qs.17:79 | Qs.20:130 | Qs.73:2 | Qs.73:20 | Qs.76:26"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Isteri-isteri nabi Muhammad saw."),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Ayat kebebasan memilih",
					"ayat" => "Qs.33:28 | Qs.33:29"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Pembagian antara isteri-isteri Nabi saw.",
					"ayat" => "Qs.33:51"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Hijab isteri-isteri Nabi saw.",
					"ayat" => "Qs.33:53 | Qs.33:59"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kisah pernikahan beliau dengan para isterinya",
					"ayat" => "Qs.33:37 | Qs.33:38"),
				array(
					"id_master" => 4,
					"level" => 1,
					"index" => "Beberapa budi pekerti Nabi saw."),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Budi pekerti kaum Muhajirin"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Keutamaan kaum Muhajirin",
					"ayat" => "Qs.2:218 | Qs.3:195 | Qs.7:157 | Qs.8:72 | Qs.8:74 | Qs.8:75 | Qs.9:20 | Qs.9:21 | Qs.9:100 | Qs.9:117 | Qs.16:41 | Qs.16:42 | Qs.16:110 | Qs.22:40 | Qs.22:41 | Qs.22:58 | Qs.59:10"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Kemiskinan dan kesulitan di awal Islam",
					"ayat" => "Qs.2:214 | Qs.8:26 | Qs.57:10 | Qs.93:8"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Keutamaan orang-orang fakir muhajirin",
					"ayat" => "Qs.57:10 | Qs.59:8"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Budi pekerti kaum anshar"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Keutamaan kaum anshar",
					"ayat" => "Qs.7:157 | Qs.9:100 | Qs.9:117 | Qs.59:9 | Qs.59:10"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Bantuan kaum anshar untuk Islam",
					"ayat" => "Qs.7:157 | Qs.8:72 | Qs.8:74 | Qs.59:9"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Sifat kaum Anshar yang mengutamakan orang lain",
					"ayat" => "Qs.59:9"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Saling mewarisi antara kaum muhajirin dan anshar",
					"ayat" => "Qs.8:72"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Budi pekerti Al Khulafa Al Rasyidin"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Budi pekerti Abu Bakar Al Siddiq ra."),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Abu Bakar ra. akan masuk surga",
					"ayat" => "Qs.92:21"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Perbedaan pendapat antara Abu Bakar dan Umar",
					"ayat" => "Qs.49:2"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Hijrah Abu Bakar bersama Nabi saw.",
					"ayat" => "Qs.9:40"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Sifat-sifat Abu Bakar ra."),
				array(
					"id_master" => 4,
					"level" => 5,
					"index" => "Kedermawanan Abu Bakar ra.",
					"ayat" => "Qs.92:21"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Budi pekerti Umar Bin Khatab ra."),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Beberapa kecocokan pendapat Umar dengan Al Qur'an",
					"ayat" => "Qs.2:125 | Qs.8:67 | Qs.8:68 | Qs.9:84 | Qs.33:59 | Qs.33:33"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Budi pekerti keluarga Nabi Muhammad saw."),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Budi pekerti isteri-isteri Nabi saw."),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Keutamaan isteri-isteri Nabi saw.",
					"ayat" => "Qs.33:6 | Qs.33:29 | Qs.33:30 | Qs.33:31 | Qs.33:32 | Qs.33:33 | Qs.33:34 | Qs.33:52 | Qs.33:53"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Budi pekerti Aisyah binti Al-siddiq ra."),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Peristiwa penuduhan Aisyah"),
				array(
					"id_master" => 4,
					"level" => 5,
					"index" => "Ayat yang membebaskan Aisyah dari tuduhan",
					"ayat" => "Qs.24:11 | Qs.24:13 | Qs.24:16"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Budi pekerti Zainab binti Jahsy ra."),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Perintah menikahi Zainab binti Jahsy",
					"ayat" => "Qs.33:37 | Qs.33:38"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Budi pekerti para sahabat"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Keutamaan sahabat",
					"ayat" => "Qs.9:108 | Qs.39:33 | Qs.59:10"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Budi pekerti Zaid bin Haritsah ra."),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Pengaduan Zaid mengenai isterinya kepada Rasul saw.",
					"ayat" => "Qs.33:37"),
				array(
					"id_master" => 4,
					"level" => 4,
					"index" => "Rasulullah saw. mengangkat Zaid sebagai anak",
					"ayat" => "Qs.33:37 | Qs.33:40"),
				array(
					"id_master" => 4,
					"level" => 2,
					"index" => "Budi pekerti orang Arab"),
				array(
					"id_master" => 4,
					"level" => 3,
					"index" => "Budi pekerti orang Quraisy",
					"ayat" => "Qs.106:4"),
				array(
					"id_master" => 5,
					"level" => 1,
					"index" => "Minuman"),
				array(
					"id_master" => 5,
					"level" => 2,
					"index" => "Minuman yang diharamkan"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Hukum minum arak"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Diharamkannya arak dan tahap-tahap pengharamannya",
					"ayat" => "Qs.2:219 | Qs.4:43 | Qs.5:90 | Qs.5:91 | Qs.16:67"),
				array(
					"id_master" => 5,
					"level" => 1,
					"index" => "Makanan"),
				array(
					"id_master" => 5,
					"level" => 2,
					"index" => "Macam-macam makanan"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Makanan yang halal"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Semua yang baik asalnya halal",
					"ayat" => "Qs.2:57 | Qs.2:168 | Qs.2:172 | Qs.5:1 | Qs.5:4 | Qs.5:5 | Qs.5:88 | Qs.6:141 | Qs.6:142 | Qs.6:143 | Qs.6:144 | Qs.6:145 | Qs.7:157 | Qs.7:160 | Qs.16:72 | Qs.16:114 | Qs.17:70 | Qs.22:30 | Qs.23:51"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Pengharaman yang dihalalkan Allah",
					"ayat" => "Qs.3:93 | Qs.5:87 | Qs.5:103 | Qs.6:138 | Qs.6:139 | Qs.6:140 | Qs.6:143 | Qs.6:144 | Qs.7:32 | Qs.10:59 | Qs.16:35 | Qs.16:116 | Qs.66:1"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Hukum makan kuda",
					"ayat" => "Qs.16:8"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Hukum makan bangkai binatang laut",
					"ayat" => "Qs.5:96 | Qs.16:14 | Qs.35:12"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Hukum makan ikan",
					"ayat" => "Qs.5:96 | Qs.16:14 | Qs.35:12"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Hukum makan makanan Ahli Kitab",
					"ayat" => "Qs.5:5"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Makanan yang diharamkan"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Pengharaman memakan darah",
					"ayat" => "Qs.2:173 | Qs.5:3 | Qs.6:145 | Qs.7:133 | Qs.16:115"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Pengharaman segala yang kotor",
					"ayat" => "Qs.2:173 | Qs.2:219 | Qs.7:157"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Hukum bangkai"),
				array(
					"id_master" => 5,
					"level" => 5,
					"index" => "Hukum makan bangkai",
					"ayat" => "Qs.2:173 | Qs.5:3 | Qs.6:145 | Qs.16:115"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Hukum makan daging babi",
					"ayat" => "Qs.2:173 | Qs.5:3 | Qs.6:145 | Qs.16:115"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Rukhshah (dispensasi) makan barang haram karena terpaksa",
					"ayat" => "Qs.2:173 | Qs.5:3 | Qs.6:119 | Qs.6:145 | Qs.16:115"),
				array(
					"id_master" => 5,
					"level" => 2,
					"index" => "Etika pada makanan"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Larangan berlebih-lebihan",
					"ayat" => "Qs.6:141 | Qs.7:31 | Qs.90:6"),
				array(
					"id_master" => 5,
					"level" => 2,
					"index" => "Undangan makan"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Berkumpul untuk makan",
					"ayat" => "Qs.24:61"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Hak orang lain pada makanan"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Hak orang lapar pada makanan",
					"ayat" => "Qs.68:24 | Qs.90:14"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Hak orang miskin pada makanan",
					"ayat" => "Qs.74:44 | Qs.76:8 | Qs.89:18 | Qs.90:16"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Mengutamakan sebagian makanan dari makanan lain",
					"ayat" => "Qs.13:4 | Qs.18:19"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Berjalan setelah makan",
					"ayat" => "Qs.33:53"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Bercakap-cakap dengan tamu",
					"ayat" => "Qs.33:53"),
				array(
					"id_master" => 5,
					"level" => 2,
					"index" => "Penyembelihan"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Cara-cara menyembelih"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Membaca bismillah sebelum menyembelih",
					"ayat" => "Qs.16:115 | Qs.22:34 | Qs.22:36"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Cara meletakkan binatang ketika disembelih",
					"ayat" => "Qs.22:36"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Cara menyembelih binatang yang jatuh dan yang lari",
					"ayat" => "Qs.5:3"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Syarat makan binatang sembelihan"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Menyebut nama Allah ketika menyembelih",
					"ayat" => "Qs.5:3 | Qs.6:118 | Qs.6:119 | Qs.6:121 | Qs.22:34 | Qs.22:36"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Menyembelih dan menyebut nama selain Allah",
					"ayat" => "Qs.2:173 | Qs.5:3 | Qs.6:121 | Qs.6:138 | Qs.6:145 | Qs.16:115"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Pengharaman sembelihan karena selain Allah",
					"ayat" => "Qs.2:173 | Qs.5:3 | Qs.6:145 | Qs.16:115"),
				array(
					"id_master" => 5,
					"level" => 2,
					"index" => "Berburu"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Disyariatkannya berburu",
					"ayat" => "Qs.5:4 | Qs.5:96"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Perlengkapan berburu"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Berburu dengan cara melempar",
					"ayat" => "Qs.5:3"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Berburu dengan panah",
					"ayat" => "Qs.5:94"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Berburu dengan anjing"),
				array(
					"id_master" => 5,
					"level" => 5,
					"index" => "Hukum hewan buruan yang dimakan anjing",
					"ayat" => "Qs.5:3"),
				array(
					"id_master" => 5,
					"level" => 5,
					"index" => "Anjing pemburu",
					"ayat" => "Qs.5:4"),
				array(
					"id_master" => 5,
					"level" => 3,
					"index" => "Hukum yang bersangkutan dengan berburu"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Yang dimakan binatang buas haram kecuali setelah disembelih",
					"ayat" => "Qs.5:3"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Membaca bismillah ketika berburu",
					"ayat" => "Qs.5:4"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Hukum berburu pada saat ihram",
					"ayat" => "Qs.5:1 | Qs.5:2 | Qs.5:94 | Qs.5:95 | Qs.5:96"),
				array(
					"id_master" => 5,
					"level" => 4,
					"index" => "Kafarat berburu pada saat ihram",
					"ayat" => "Qs.5:95"),
				array(
					"id_master" => 6,
					"level" => 1,
					"index" => "Kekuasaan yang sah"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Kekuasaan umum"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Kekuasaan pemerintah"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Sifat-sifat pemimpin",
					"ayat" => "Qs.2:247 | Qs.4:139 | Qs.4:141 | Qs.4:144 | Qs.8:73"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Pemerintahan selain Islam"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Pemimpin-pemimpin yang menyesatkan",
					"ayat" => "Qs.5:77 | Qs.9:12 | Qs.9:34 | Qs.11:59 | Qs.11:97 | Qs.11:98 | Qs.14:28 | Qs.29:12 | Qs.29:13 | Qs.34:31 | Qs.34:32 | Qs.34:33 | Qs.40:29 | Qs.40:47 | Qs.43:54 | Qs.45:19 | Qs.71:24"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Orang-orang yang terdekat dengan pemerintah",
					"ayat" => "Qs.3:118 | Qs.9:16 | Qs.9:23 | Qs.9:24 | Qs.11:113 | Qs.33:1 | Qs.58:14 | Qs.60:1 | Qs.60:4 | Qs.60:9 | Qs.60:13"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Cara memegang tampuk pimpinan"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Melantik pemerintah",
					"ayat" => "Qs.7:142 | Qs.7:150"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Kewajiban pemimpin"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Tanggung jawab pemimpin",
					"ayat" => "Qs.5:42 | Qs.26:215 | Qs.27:20 | Qs.33:6 | Qs.38:26 | Qs.49:7"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Mengawasi pegawai",
					"ayat" => "Qs.7:150 | Qs.20:92 | Qs.20:93 | Qs.27:21 | Qs.27:27"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Gaji pemimpin diambil dari kas negara",
					"ayat" => "Qs.12:72"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Hak-hak pemimpin"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Taat dan patuh pada pimpinan",
					"ayat" => "Qs.24:48"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Dasar-dasar sistem pemerintahan Islam"),
				array(
					"id_master" => 6,
					"level" => 5,
					"index" => "Permusyawaratan dalam Islam",
					"ayat" => "Qs.3:159 | Qs.27:32 | Qs.27:33 | Qs.42:38"),
				array(
					"id_master" => 6,
					"level" => 5,
					"index" => "Keadilan dalam memerintah",
					"ayat" => "Qs.4:58 | Qs.4:135 | Qs.5:8 | Qs.38:26 | Qs.42:15 | Qs.49:9"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Kekuasaan khusus"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Penggunaan pegawai dan penguasa",
					"ayat" => "Qs.7:142 | Qs.7:150 | Qs.20:29 | Qs.20:30 | Qs.20:31 | Qs.20:32 | Qs.28:34"),
				array(
					"id_master" => 6,
					"level" => 1,
					"index" => "Peradilan"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Keutamaan keadilan dalam hukum",
					"ayat" => "Qs.4:58 | Qs.4:135 | Qs.5:42"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Etika peradilan"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Berlaku adil dalam menjatuhi hukuman",
					"ayat" => "Qs.4:58 | Qs.4:135 | Qs.6:152 | Qs.38:22 | Qs.42:15"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Menjauhi suap dan hadiah",
					"ayat" => "Qs.2:188 | Qs.27:36"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Keburukan tergesa-gesa dalam menjatuhi hukuman",
					"ayat" => "Qs.7:150 | Qs.49:6"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Keputusan hukum bersandar pada apa yang nampak",
					"ayat" => "Qs.12:79 | Qs.20:93"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Kewajiban menggunakan hukum agama",
					"ayat" => "Qs.2:213 | Qs.3:23 | Qs.4:60 | Qs.4:105 | Qs.5:43 | Qs.5:44 | Qs.5:45 | Qs.5:47 | Qs.5:48 | Qs.5:49 | Qs.5:50 | Qs.5:68 | Qs.7:142 | Qs.45:18"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Mahkamah, pengadilan"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Hakim mendengarkan semua tuduhan dan pembelaan",
					"ayat" => "Qs.7:150 | Qs.12:52 | Qs.27:22 | Qs.27:23"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Cara hakim mengambil keputusan"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Keputusan hukum dengan berdasarkan pada sumpah"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Ancaman keras untuk pelaku sumpah palsu",
					"ayat" => "Qs.24:7 | Qs.24:9"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Pemberatan sumpah",
					"ayat" => "Qs.24:7 | Qs.24:9"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Cara pengambilan sumpah",
					"ayat" => "Qs.5:107"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Keputusan hukum dengan bersandar pada pengakuan",
					"ayat" => "Qs.12:52"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Pertentangan"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Zhafr (berdamai)",
					"ayat" => "Qs.42:41"),
				array(
					"id_master" => 6,
					"level" => 1,
					"index" => "Saksi, bukti"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Syarat-syarat saksi"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Keadilan saksi"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Seorang saksi disyaratkan adil",
					"ayat" => "Qs.4:135 | Qs.5:106 | Qs.65:2"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Kesaksian palsu",
					"ayat" => "Qs.4:135 | Qs.5:8"),
				array(
					"id_master" => 6,
					"level" => 4,
					"index" => "Saksi terbebas dari tuduhan",
					"ayat" => "Qs.4:135 | Qs.6:152"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Kesaksian wanita",
					"ayat" => "Qs.2:282"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Orang yang diberi kesaksian"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Kesaksian atas kelaliman",
					"ayat" => "Qs.25:72"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Kesaksian atas perbuatan zina",
					"ayat" => "Qs.4:15"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Kesaksian atas talak dan rujuk",
					"ayat" => "Qs.65:2"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Kesaksian atas hutang dan harta",
					"ayat" => "Qs.2:282 | Qs.4:6 | Qs.5:106"),
				array(
					"id_master" => 6,
					"level" => 2,
					"index" => "Keputusan hukum dengan bersandar pada kesaksian"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Perintah untuk memberikan kesaksian",
					"ayat" => "Qs.2:282"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Memilih saksi",
					"ayat" => "Qs.2:282"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Sebaik-baik saksi",
					"ayat" => "Qs.70:33"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Jumlah saksi",
					"ayat" => "Qs.2:282 | Qs.4:15 | Qs.5:106 | Qs.24:4 | Qs.24:13 | Qs.65:2"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Mencari bukti",
					"ayat" => "Qs.2:282 | Qs.21:61 | Qs.49:6"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Menyembunyikan kesaksian",
					"ayat" => "Qs.2:140 | Qs.2:282 | Qs.2:283 | Qs.4:135 | Qs.5:106 | Qs.70:33"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Mengubah kesaksian",
					"ayat" => "Qs.4:135 | Qs.5:8 | Qs.5:108"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Perselisihan antara saksi",
					"ayat" => "Qs.5:107 | Qs.5:108"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Bersegera dalam memberikan kesaksian",
					"ayat" => "Qs.2:282"),
				array(
					"id_master" => 6,
					"level" => 3,
					"index" => "Pengundian pada saat yang sulit",
					"ayat" => "Qs.3:44 | Qs.37:141"),
				array(
					"id_master" => 7,
					"level" => 1,
					"index" => "Keutamaan dan pahala iman"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Kesentosaan orang mukmin di dunia dan di akhirat",
					"ayat" => "Qs.2:38 | Qs.2:62 | Qs.2:112 | Qs.2:262 | Qs.2:274 | Qs.2:277 | Qs.3:103 | Qs.3:107 | Qs.3:170 | Qs.4:173 | Qs.5:69 | Qs.6:16 | Qs.6:48 | Qs.6:81 | Qs.6:82 | Qs.6:127 | Qs.7:35 | Qs.7:43 | Qs.7:49 | Qs.7:96 | Qs.10:62 | Qs.10:64 | Qs.10:103 | Qs.11:58 | Qs.14:27 | Qs.15:46 | Qs.16:30 | Qs.16:32 | Qs.16:97 | Qs.20:47 | Qs.20:123 | Qs.21:101 | Qs.21:103 | Qs.22:54 | Qs.24:55 | Qs.27:89 | Qs.37:40 | Qs.39:61 | Qs.41:30 | Qs.43:68 | Qs.43:69 | Qs.72:13"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Orang mukmin selalu dalam lindungan Allah Ta'ala",
					"ayat" => "Qs.2:38 | Qs.2:137 | Qs.2:194 | Qs.2:249 | Qs.2:257 | Qs.3:13 | Qs.3:55 | Qs.3:111 | Qs.3:120 | Qs.3:122 | Qs.3:139 | Qs.3:175 | Qs.4:45 | Qs.4:90 | Qs.4:158 | Qs.5:11 | Qs.5:42 | Qs.5:55 | Qs.5:64 | Qs.5:67 | Qs.6:54 | Qs.7:64 | Qs.7:72 | Qs.7:83 | Qs.7:117 | Qs.7:165 | Qs.7:196 | Qs.7:200 | Qs.8:17 | Qs.8:19 | Qs.8:26 | Qs.8:30 | Qs.8:40 | Qs.8:62 | Qs.8:68 | Qs.9:40 | Qs.9:51 | Qs.9:117 | Qs.10:62 | Qs.11:41 | Qs.11:48 | Qs.11:58 | Qs.11:66 | Qs.11:81 | Qs.11:94 | Qs.12:21 | Qs.14:27 | Qs.15:40 | Qs.15:42 | Qs.15:59 | Qs.16:99 | Qs.16:100 | Qs.16:128 | Qs.17:65 | Qs.17:103 | Qs.18:16 | Qs.20:38 | Qs.20:39 | Qs.20:40 | Qs.20:46 | Qs.20:68 | Qs.20:77 | Qs.20:123 | Qs.21:9 | Qs.21:69 | Qs.21:70 | Qs.21:71 | Qs.21:74 | Qs.21:76 | Qs.21:77 | Qs.21:84 | Qs.21:88 | Qs.22:38 | Qs.23:27 | Qs.23:28 | Qs.26:15 | Qs.26:52 | Qs.26:62 | Qs.26:63 | Qs.26:118 | Qs.26:119 | Qs.26:170 | Qs.26:218 | Qs.27:50 | Qs.27:53 | Qs.27:57 | Qs.28:7 | Qs.28:9 | Qs.28:20 | Qs.28:25 | Qs.28:31 | Qs.28:35 | Qs.29:15 | Qs.29:24 | Qs.29:32 | Qs.29:33 | Qs.34:20 | Qs.34:21 | Qs.37:76 | Qs.37:98 | Qs.37:115 | Qs.37:134 | Qs.37:146 | Qs.38:83 | Qs.40:45 | Qs.40:51 | Qs.41:18 | Qs.44:20 | Qs.44:24 | Qs.44:56 | Qs.45:19 | Qs.46:13 | Qs.47:11 | Qs.48:20 | Qs.48:24 | Qs.48:27 | Qs.51:35 | Qs.52:48 | Qs.54:13 | Qs.54:14 | Qs.54:34 | Qs.54:35 | Qs.54:37 | Qs.58:22 | Qs.66:4 | Qs.68:49 | Qs.69:11"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Pertolongan Allah Ta'ala kepada orang mukmin",
					"ayat" => "Qs.2:214 | Qs.2:251 | Qs.3:13 | Qs.3:68 | Qs.3:123 | Qs.3:124 | Qs.3:125 | Qs.3:126 | Qs.3:139 | Qs.3:148 | Qs.3:150 | Qs.3:152 | Qs.3:160 | Qs.4:73 | Qs.4:84 | Qs.4:139 | Qs.4:141 | Qs.5:23 | Qs.5:56 | Qs.6:34 | Qs.7:64 | Qs.7:72 | Qs.7:83 | Qs.7:117 | Qs.7:118 | Qs.7:129 | Qs.7:137 | Qs.8:10 | Qs.8:11 | Qs.8:12 | Qs.8:17 | Qs.8:18 | Qs.8:19 | Qs.8:26 | Qs.8:40 | Qs.8:43 | Qs.8:44 | Qs.8:64 | Qs.8:66 | Qs.9:14 | Qs.9:25 | Qs.9:26 | Qs.9:32 | Qs.9:40 | Qs.9:48 | Qs.10:90 | Qs.10:103 | Qs.11:30 | Qs.11:49 | Qs.11:94 | Qs.14:14 | Qs.14:47 | Qs.20:68 | Qs.20:69 | Qs.21:9 | Qs.21:105 | Qs.22:15 | Qs.22:38 | Qs.22:39 | Qs.22:40 | Qs.22:60 | Qs.22:78 | Qs.24:55 | Qs.25:31 | Qs.28:6 | Qs.30:47 | Qs.33:9 | Qs.33:10 | Qs.33:25 | Qs.33:26 | Qs.36:9 | Qs.37:116 | Qs.37:171 | Qs.37:172 | Qs.37:173 | Qs.40:51 | Qs.47:4 | Qs.47:7 | Qs.47:35 | Qs.48:1 | Qs.48:3 | Qs.48:4 | Qs.48:18 | Qs.48:20 | Qs.48:21 | Qs.48:22 | Qs.58:21 | Qs.59:2 | Qs.61:8 | Qs.61:13 | Qs.61:14 | Qs.63:8 | Qs.84:19 | Qs.110:1 | Qs.110:2"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Allah memperkokoh orang mukmin",
					"ayat" => "Qs.8:11 | Qs.8:12 | Qs.9:26 | Qs.9:40 | Qs.14:27 | Qs.16:102 | Qs.47:7"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Pahala iman",
					"ayat" => "Qs.2:5 | Qs.2:25 | Qs.2:82 | Qs.2:103 | Qs.2:126 | Qs.2:202 | Qs.2:212 | Qs.2:218 | Qs.2:221 | Qs.2:223 | Qs.3:57 | Qs.3:148 | Qs.3:179 | Qs.3:198 | Qs.3:199 | Qs.4:39 | Qs.4:67 | Qs.4:68 | Qs.4:122 | Qs.4:146 | Qs.4:152 | Qs.4:162 | Qs.4:170 | Qs.4:173 | Qs.4:175 | Qs.5:9 | Qs.5:66 | Qs.5:85 | Qs.6:127 | Qs.7:43 | Qs.7:44 | Qs.7:49 | Qs.7:128 | Qs.7:165 | Qs.7:170 | Qs.8:74 | Qs.9:20 | Qs.9:72 | Qs.9:88 | Qs.10:9 | Qs.10:26 | Qs.10:64 | Qs.10:98 | Qs.11:11 | Qs.12:57 | Qs.13:18 | Qs.13:29 | Qs.14:23 | Qs.14:51 | Qs.15:45 | Qs.15:46 | Qs.15:47 | Qs.15:48 | Qs.16:30 | Qs.16:31 | Qs.16:32 | Qs.16:41 | Qs.16:97 | Qs.18:2 | Qs.18:30 | Qs.18:31 | Qs.18:88 | Qs.18:107 | Qs.19:60 | Qs.19:61 | Qs.19:63 | Qs.19:96 | Qs.20:75 | Qs.20:76 | Qs.20:112 | Qs.20:132 | Qs.22:14 | Qs.22:23 | Qs.22:50 | Qs.22:54 | Qs.22:56 | Qs.22:58 | Qs.22:59 | Qs.23:1 | Qs.23:58 | Qs.23:61 | Qs.23:102 | Qs.23:111 | Qs.24:52 | Qs.25:15 | Qs.25:75 | Qs.29:9 | Qs.29:58 | Qs.30:15 | Qs.30:45 | Qs.31:8 | Qs.31:9 | Qs.32:17 | Qs.32:19 | Qs.33:35 | Qs.33:43 | Qs.33:44 | Qs.33:47 | Qs.33:71 | Qs.33:73 | Qs.34:4 | Qs.34:37 | Qs.35:7 | Qs.35:33 | Qs.35:34 | Qs.35:35 | Qs.36:11 | Qs.36:26 | Qs.36:27 | Qs.37:40 | Qs.37:41 | Qs.37:61 | Qs.37:105 | Qs.37:110 | Qs.37:121 | Qs.37:131 | Qs.37:160 | Qs.37:172 | Qs.37:181 | Qs.38:25 | Qs.38:49 | Qs.38:50 | Qs.39:10 | Qs.39:17 | Qs.39:20 | Qs.39:22 | Qs.39:33 | Qs.39:34 | Qs.39:35 | Qs.39:61 | Qs.39:74 | Qs.40:40 | Qs.40:51 | Qs.41:8 | Qs.41:18 | Qs.41:30 | Qs.41:31 | Qs.41:32 | Qs.42:22 | Qs.43:35 | Qs.43:70 | Qs.43:72 | Qs.43:73 | Qs.44:51 | Qs.44:52 | Qs.44:53 | Qs.44:54 | Qs.44:55 | Qs.44:56 | Qs.44:57 | Qs.45:30 | Qs.46:14 | Qs.46:16 | Qs.46:31 | Qs.47:2 | Qs.47:12 | Qs.47:17 | Qs.47:36 | Qs.48:5 | Qs.48:17 | Qs.48:23 | Qs.48:29 | Qs.49:3 | Qs.49:15 | Qs.50:31 | Qs.51:15 | Qs.51:16 | Qs.52:17 | Qs.52:18 | Qs.52:19 | Qs.52:20 | Qs.52:22 | Qs.52:23 | Qs.52:24 | Qs.52:27 | Qs.54:13 | Qs.54:14 | Qs.54:35 | Qs.54:54 | Qs.54:55 | Qs.55:46 | Qs.56:12 | Qs.56:24 | Qs.56:89 | Qs.56:91 | Qs.57:7 | Qs.57:10 | Qs.57:12 | Qs.57:19 | Qs.57:21 | Qs.57:28 | Qs.58:22 | Qs.61:10 | Qs.61:11 | Qs.61:12 | Qs.61:13 | Qs.61:14 | Qs.64:9 | Qs.64:11 | Qs.65:11 | Qs.66:8 | Qs.67:12 | Qs.68:34 | Qs.69:21 | Qs.69:24 | Qs.70:35 | Qs.71:4 | Qs.72:13 | Qs.72:16 | Qs.74:40 | Qs.76:5 | Qs.76:6 | Qs.76:11 | Qs.76:12 | Qs.76:13 | Qs.76:14 | Qs.76:15 | Qs.76:16 | Qs.76:17 | Qs.76:18 | Qs.76:19 | Qs.76:20 | Qs.76:21 | Qs.76:22 | Qs.77:41 | Qs.77:42 | Qs.77:43 | Qs.77:44 | Qs.78:31 | Qs.78:34 | Qs.78:35 | Qs.78:36 | Qs.79:41 | Qs.80:38 | Qs.80:39 | Qs.82:13 | Qs.83:18 | Qs.83:19 | Qs.83:20 | Qs.83:22 | Qs.83:23 | Qs.83:24 | Qs.83:25 | Qs.83:28 | Qs.83:34 | Qs.83:35 | Qs.84:8 | Qs.84:9 | Qs.84:25 | Qs.85:11 | Qs.87:14 | Qs.88:8 | Qs.88:9 | Qs.88:10 | Qs.88:11 | Qs.88:12 | Qs.88:13 | Qs.88:14 | Qs.88:15 | Qs.88:16 | Qs.89:27 | Qs.89:28 | Qs.89:29 | Qs.89:30 | Qs.90:18 | Qs.91:9 | Qs.92:6 | Qs.92:7 | Qs.92:17 | Qs.95:6 | Qs.98:7 | Qs.98:8 | Qs.101:7 | Qs.103:3"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Orang mukmin kelompok minoritas",
					"ayat" => "Qs.6:116 | Qs.7:102 | Qs.8:26 | Qs.26:8 | Qs.26:67 | Qs.26:103 | Qs.26:121 | Qs.26:139 | Qs.26:158 | Qs.26:174 | Qs.26:190"),
				array(
					"id_master" => 7,
					"level" => 1,
					"index" => "Cabang-cabang iman"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Akidah"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Beriman pada Allah Ta'ala"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kewajiban mengenal Allah dan mengesakanNya"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Dalil-dalil adanya Allah Ta'ala",
					"ayat" => "Qs.2:164 | Qs.6:1 | Qs.6:14 | Qs.6:75 | Qs.6:76 | Qs.6:77 | Qs.6:78 | Qs.6:95 | Qs.6:97 | Qs.6:99 | Qs.7:54 | Qs.7:57 | Qs.7:185 | Qs.10:3 | Qs.10:5 | Qs.10:6 | Qs.10:31 | Qs.10:67 | Qs.10:101 | Qs.12:101 | Qs.12:105 | Qs.13:2 | Qs.13:3 | Qs.13:4 | Qs.13:12 | Qs.13:13 | Qs.13:17 | Qs.14:10 | Qs.15:16 | Qs.15:19 | Qs.15:20 | Qs.15:22 | Qs.16:3 | Qs.16:10 | Qs.16:11 | Qs.16:13 | Qs.16:14 | Qs.16:15 | Qs.16:16 | Qs.16:48 | Qs.16:66 | Qs.16:67 | Qs.16:68 | Qs.16:69 | Qs.16:78 | Qs.16:79 | Qs.16:81 | Qs.20:54 | Qs.21:30 | Qs.21:31 | Qs.21:32 | Qs.22:61 | Qs.23:80 | Qs.23:84 | Qs.24:43 | Qs.24:44 | Qs.25:45 | Qs.25:46 | Qs.25:47 | Qs.25:48 | Qs.25:49 | Qs.25:53 | Qs.25:54 | Qs.25:59 | Qs.25:61 | Qs.25:62 | Qs.26:8 | Qs.26:24 | Qs.26:28 | Qs.26:184 | Qs.27:60 | Qs.27:61 | Qs.27:63 | Qs.27:64 | Qs.28:73 | Qs.29:19 | Qs.29:44 | Qs.29:51 | Qs.29:61 | Qs.30:19 | Qs.30:20 | Qs.30:21 | Qs.30:22 | Qs.30:23 | Qs.30:24 | Qs.30:25 | Qs.30:27 | Qs.30:37 | Qs.30:46 | Qs.30:48 | Qs.31:10 | Qs.31:20 | Qs.31:25 | Qs.31:29 | Qs.31:31 | Qs.34:9 | Qs.35:3 | Qs.35:9 | Qs.35:12 | Qs.35:13 | Qs.35:27 | Qs.35:41 | Qs.36:33 | Qs.36:37 | Qs.36:38 | Qs.36:39 | Qs.36:40 | Qs.36:41 | Qs.36:71 | Qs.40:81 | Qs.42:28 | Qs.42:32 | Qs.42:33 | Qs.43:9 | Qs.50:6 | Qs.50:7 | Qs.50:9 | Qs.50:10 | Qs.50:11 | Qs.51:20 | Qs.51:21 | Qs.51:49 | Qs.52:35 | Qs.52:36 | Qs.52:37 | Qs.52:38 | Qs.55:5 | Qs.55:6 | Qs.55:7 | Qs.56:58 | Qs.56:59 | Qs.56:60 | Qs.56:61 | Qs.56:63 | Qs.56:64 | Qs.56:65 | Qs.56:68 | Qs.56:69 | Qs.56:70 | Qs.56:71 | Qs.56:72 | Qs.57:4 | Qs.57:6 | Qs.57:17 | Qs.67:2 | Qs.67:3 | Qs.67:4 | Qs.67:19 | Qs.67:30 | Qs.78:6 | Qs.78:7 | Qs.78:8 | Qs.78:10 | Qs.78:11 | Qs.78:12 | Qs.78:13 | Qs.78:14 | Qs.78:15 | Qs.79:28 | Qs.79:29 | Qs.79:31 | Qs.79:32 | Qs.88:17 | Qs.88:18 | Qs.88:19 | Qs.88:20 | Qs.91:5 | Qs.91:6"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kepatuhan segala sesuatu pada Allah Ta'ala",
					"ayat" => "Qs.2:74 | Qs.3:83 | Qs.5:17 | Qs.5:18 | Qs.5:120 | Qs.6:59 | Qs.6:73 | Qs.10:66 | Qs.22:18 | Qs.41:11 | Qs.55:6 | Qs.84:2 | Qs.84:5 | Qs.99:5"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Gunung akan hancur bila Allah menampakkan diri di atasnya",
					"ayat" => "Qs.7:143"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Tauhid Rububiyyah",
					"ayat" => "Qs.2:21 | Qs.2:131 | Qs.2:139 | Qs.3:51 | Qs.3:193 | Qs.5:28 | Qs.5:72 | Qs.5:117 | Qs.6:45 | Qs.6:71 | Qs.6:100 | Qs.6:102 | Qs.6:162 | Qs.6:163 | Qs.6:164 | Qs.7:54 | Qs.7:61 | Qs.7:67 | Qs.7:104 | Qs.7:121 | Qs.7:172 | Qs.9:129 | Qs.10:3 | Qs.10:10 | Qs.10:37 | Qs.11:34 | Qs.13:16 | Qs.13:30 | Qs.18:14 | Qs.18:38 | Qs.18:51 | Qs.19:36 | Qs.19:65 | Qs.21:22 | Qs.21:56 | Qs.22:66 | Qs.26:24 | Qs.26:26 | Qs.26:28 | Qs.26:47 | Qs.26:48 | Qs.26:77 | Qs.26:109 | Qs.26:127 | Qs.26:145 | Qs.26:164 | Qs.26:180 | Qs.26:192 | Qs.27:8 | Qs.27:26 | Qs.27:44 | Qs.27:91 | Qs.28:30 | Qs.29:61 | Qs.32:2 | Qs.35:13 | Qs.37:5 | Qs.37:87 | Qs.37:182 | Qs.38:66 | Qs.39:75 | Qs.40:27 | Qs.40:62 | Qs.40:64 | Qs.40:65 | Qs.40:66 | Qs.41:9 | Qs.42:15 | Qs.42:53 | Qs.43:9 | Qs.43:46 | Qs.43:64 | Qs.43:82 | Qs.44:7 | Qs.44:8 | Qs.45:36 | Qs.46:13 | Qs.51:23 | Qs.53:49 | Qs.55:17 | Qs.56:80 | Qs.59:16 | Qs.69:43 | Qs.69:52 | Qs.70:40 | Qs.78:37 | Qs.79:19 | Qs.81:29 | Qs.83:6 | Qs.106:3 | Qs.113:1 | Qs.114:1"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Tauhid Uluhiyyah",
					"ayat" => "Qs.1:5 | Qs.2:21 | Qs.2:22 | Qs.2:83 | Qs.2:126 | Qs.2:131 | Qs.2:132 | Qs.2:133 | Qs.2:136 | Qs.2:139 | Qs.2:163 | Qs.2:177 | Qs.2:255 | Qs.2:256 | Qs.2:285 | Qs.3:2 | Qs.3:6 | Qs.3:18 | Qs.3:62 | Qs.3:64 | Qs.3:67 | Qs.3:79 | Qs.3:80 | Qs.3:83 | Qs.3:84 | Qs.3:110 | Qs.3:114 | Qs.4:36 | Qs.4:39 | Qs.4:87 | Qs.4:171 | Qs.5:73 | Qs.6:19 | Qs.6:71 | Qs.6:79 | Qs.6:102 | Qs.6:106 | Qs.6:151 | Qs.6:162 | Qs.6:163 | Qs.7:59 | Qs.7:65 | Qs.7:70 | Qs.7:73 | Qs.7:85 | Qs.7:140 | Qs.7:158 | Qs.9:18 | Qs.9:31 | Qs.9:129 | Qs.10:3 | Qs.10:30 | Qs.10:31 | Qs.10:32 | Qs.10:90 | Qs.10:104 | Qs.10:105 | Qs.11:2 | Qs.11:14 | Qs.11:26 | Qs.11:50 | Qs.11:61 | Qs.11:84 | Qs.12:37 | Qs.12:38 | Qs.12:39 | Qs.12:40 | Qs.12:108 | Qs.13:14 | Qs.13:15 | Qs.13:16 | Qs.13:30 | Qs.13:33 | Qs.13:36 | Qs.14:52 | Qs.16:2 | Qs.16:22 | Qs.16:36 | Qs.16:48 | Qs.16:49 | Qs.16:51 | Qs.16:52 | Qs.16:73 | Qs.17:22 | Qs.17:23 | Qs.17:39 | Qs.17:111 | Qs.18:14 | Qs.18:26 | Qs.18:38 | Qs.18:110 | Qs.19:35 | Qs.19:36 | Qs.19:65 | Qs.20:8 | Qs.20:14 | Qs.20:98 | Qs.21:22 | Qs.21:24 | Qs.21:25 | Qs.21:29 | Qs.21:108 | Qs.22:34 | Qs.22:62 | Qs.23:23 | Qs.23:32 | Qs.23:59 | Qs.23:91 | Qs.23:116 | Qs.23:117 | Qs.24:55 | Qs.25:68 | Qs.26:47 | Qs.26:48 | Qs.26:77 | Qs.27:25 | Qs.27:26 | Qs.28:70 | Qs.28:71 | Qs.28:72 | Qs.29:16 | Qs.29:46 | Qs.29:63 | Qs.34:22 | Qs.34:24 | Qs.34:33 | Qs.35:3 | Qs.36:23 | Qs.37:4 | Qs.37:35 | Qs.38:65 | Qs.39:3 | Qs.39:4 | Qs.39:6 | Qs.39:64 | Qs.39:66 | Qs.40:12 | Qs.40:14 | Qs.40:62 | Qs.40:65 | Qs.40:66 | Qs.41:6 | Qs.41:37 | Qs.43:45 | Qs.43:64 | Qs.43:84 | Qs.44:8 | Qs.47:19 | Qs.51:51 | Qs.52:43 | Qs.59:22 | Qs.59:23 | Qs.60:4 | Qs.64:13 | Qs.71:3 | Qs.72:2 | Qs.72:18 | Qs.72:20 | Qs.73:9 | Qs.98:5 | Qs.112:1 | Qs.112:4 | Qs.114:3"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Arsy",
					"ayat" => "Qs.7:54 | Qs.10:3 | Qs.11:7 | Qs.20:5 | Qs.23:86 | Qs.23:116 | Qs.25:59 | Qs.32:4 | Qs.39:75 | Qs.40:15 | Qs.57:4 | Qs.69:17 | Qs.85:15"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kesucian Allah dari sekutu dan anak",
					"ayat" => "Qs.2:22 | Qs.2:116 | Qs.3:18 | Qs.3:79 | Qs.3:80 | Qs.4:171 | Qs.6:100 | Qs.6:101 | Qs.10:68 | Qs.13:30 | Qs.14:30 | Qs.16:17 | Qs.16:20 | Qs.16:21 | Qs.16:57 | Qs.17:40 | Qs.17:42 | Qs.17:43 | Qs.17:111 | Qs.18:4 | Qs.19:35 | Qs.19:89 | Qs.19:90 | Qs.19:92 | Qs.21:17 | Qs.21:22 | Qs.21:26 | Qs.23:91 | Qs.25:2 | Qs.26:98 | Qs.26:213 | Qs.27:59 | Qs.27:60 | Qs.27:61 | Qs.27:62 | Qs.27:63 | Qs.27:64 | Qs.28:68 | Qs.34:22 | Qs.34:27 | Qs.34:33 | Qs.35:40 | Qs.37:4 | Qs.37:152 | Qs.37:153 | Qs.37:158 | Qs.37:159 | Qs.37:180 | Qs.39:4 | Qs.41:9 | Qs.43:19 | Qs.43:81 | Qs.43:82 | Qs.52:39 | Qs.52:43 | Qs.53:23 | Qs.53:27 | Qs.72:3 | Qs.72:20 | Qs.112:1 | Qs.112:3 | Qs.112:4"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Dalil Allah atas hambaNya",
					"ayat" => "Qs.4:165 | Qs.6:149 | Qs.6:156 | Qs.6:157 | Qs.7:73 | Qs.7:74 | Qs.7:172 | Qs.8:42 | Qs.10:34 | Qs.10:35 | Qs.20:134 | Qs.31:11"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Berbaik sangka terhadap Allah",
					"ayat" => "Qs.3:154 | Qs.12:83 | Qs.22:15 | Qs.33:10"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Mendustai Allah",
					"ayat" => "Qs.2:79 | Qs.2:80 | Qs.2:94 | Qs.2:111 | Qs.2:116 | Qs.2:169 | Qs.3:24 | Qs.3:75 | Qs.3:78 | Qs.3:94 | Qs.3:181 | Qs.3:183 | Qs.4:48 | Qs.4:50 | Qs.4:171 | Qs.5:18 | Qs.5:64 | Qs.5:72 | Qs.5:73 | Qs.5:103 | Qs.6:21 | Qs.6:24 | Qs.6:91 | Qs.6:93 | Qs.6:100 | Qs.6:136 | Qs.6:137 | Qs.6:138 | Qs.6:139 | Qs.6:140 | Qs.6:144 | Qs.6:148 | Qs.6:150 | Qs.7:28 | Qs.7:33 | Qs.7:37 | Qs.7:53 | Qs.7:152 | Qs.7:169 | Qs.9:30 | Qs.9:31 | Qs.10:17 | Qs.10:18 | Qs.10:38 | Qs.10:59 | Qs.10:60 | Qs.10:66 | Qs.10:68 | Qs.10:69 | Qs.11:13 | Qs.11:18 | Qs.11:21 | Qs.11:35 | Qs.11:50 | Qs.16:35 | Qs.16:56 | Qs.16:57 | Qs.16:62 | Qs.16:105 | Qs.16:116 | Qs.17:42 | Qs.17:73 | Qs.18:5 | Qs.18:15 | Qs.19:34 | Qs.19:35 | Qs.19:88 | Qs.19:91 | Qs.20:61 | Qs.20:88 | Qs.21:18 | Qs.21:21 | Qs.21:24 | Qs.21:26 | Qs.21:43 | Qs.23:91 | Qs.23:117 | Qs.28:36 | Qs.29:13 | Qs.29:68 | Qs.32:3 | Qs.34:22 | Qs.35:40 | Qs.37:86 | Qs.37:125 | Qs.37:149 | Qs.37:150 | Qs.37:151 | Qs.37:152 | Qs.37:153 | Qs.37:158 | Qs.38:27 | Qs.39:3 | Qs.39:38 | Qs.39:43 | Qs.40:35 | Qs.41:23 | Qs.43:15 | Qs.43:16 | Qs.43:17 | Qs.43:19 | Qs.43:81 | Qs.44:34 | Qs.44:35 | Qs.46:4 | Qs.46:5 | Qs.46:28 | Qs.52:39 | Qs.53:21 | Qs.53:27 | Qs.61:7 | Qs.62:6 | Qs.69:44 | Qs.72:4 | Qs.72:5 | Qs.79:24"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Hukum alam",
					"ayat" => "Qs.6:131 | Qs.7:94 | Qs.13:11 | Qs.17:15 | Qs.17:16 | Qs.22:18 | Qs.26:208 | Qs.35:24 | Qs.35:43 | Qs.47:7 | Qs.48:23 | Qs.58:21"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Zat dan sifat Allah"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat Mukhalafah (berbeda dengan makhluk)",
					"ayat" => "Qs.6:91 | Qs.6:101 | Qs.6:103 | Qs.17:111 | Qs.19:65 | Qs.20:5 | Qs.20:50 | Qs.21:23 | Qs.25:59 | Qs.28:88 | Qs.30:27 | Qs.35:41 | Qs.39:67 | Qs.42:11 | Qs.55:27 | Qs.112:1 | Qs.112:2 | Qs.112:3 | Qs.112:4"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat Kamal (sempurna)",
					"ayat" => "Qs.2:255 | Qs.5:64 | Qs.17:1 | Qs.19:64 | Qs.21:17 | Qs.23:115 | Qs.44:38 | Qs.50:38 | Qs.91:15"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Menafikan sifat kantuk dan tidur",
					"ayat" => "Qs.2:255 | Qs.6:132 | Qs.7:7 | Qs.19:64 | Qs.20:52"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Memohon hanya kepada Allah",
					"ayat" => "Qs.2:218 | Qs.4:104 | Qs.17:57 | Qs.18:44 | Qs.39:9"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Malaikat naik kepada Allah",
					"ayat" => "Qs.2:254"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Syafaat hak Allah semata",
					"ayat" => "Qs.2:255 | Qs.6:51 | Qs.6:70 | Qs.6:94 | Qs.32:4 | Qs.34:23 | Qs.39:44 | Qs.82:19"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Memperoleh syafaat dengan izin Allah",
					"ayat" => "Qs.2:255 | Qs.10:3 | Qs.20:109 | Qs.21:28 | Qs.34:23 | Qs.53:26"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Segala sesuatu milik Allah",
					"ayat" => "Qs.1:4 | Qs.2:107 | Qs.2:116 | Qs.2:142 | Qs.2:255 | Qs.2:284 | Qs.3:26 | Qs.3:109 | Qs.3:129 | Qs.3:154 | Qs.3:180 | Qs.3:189 | Qs.4:53 | Qs.4:126 | Qs.4:131 | Qs.4:132 | Qs.4:170 | Qs.4:171 | Qs.5:17 | Qs.5:18 | Qs.5:40 | Qs.5:120 | Qs.6:12 | Qs.6:13 | Qs.6:73 | Qs.6:101 | Qs.7:54 | Qs.7:158 | Qs.9:116 | Qs.10:55 | Qs.10:66 | Qs.10:68 | Qs.14:2 | Qs.15:21 | Qs.16:49 | Qs.16:52 | Qs.17:111 | Qs.19:40 | Qs.19:64 | Qs.19:65 | Qs.20:6 | Qs.21:19 | Qs.22:56 | Qs.22:64 | Qs.23:85 | Qs.23:87 | Qs.23:88 | Qs.23:89 | Qs.24:42 | Qs.24:64 | Qs.25:2 | Qs.25:26 | Qs.27:91 | Qs.30:26 | Qs.31:26 | Qs.34:1 | Qs.34:22 | Qs.35:13 | Qs.36:83 | Qs.37:5 | Qs.38:9 | Qs.38:10 | Qs.39:6 | Qs.39:44 | Qs.39:63 | Qs.40:16 | Qs.40:62 | Qs.42:4 | Qs.42:12 | Qs.42:49 | Qs.42:53 | Qs.43:85 | Qs.45:27 | Qs.45:36 | Qs.46:4 | Qs.48:4 | Qs.48:7 | Qs.48:14 | Qs.53:25 | Qs.53:31 | Qs.57:2 | Qs.57:5 | Qs.57:10 | Qs.63:7 | Qs.64:1 | Qs.67:1 | Qs.73:9 | Qs.78:37 | Qs.85:9 | Qs.92:13 | Qs.114:2"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kesombongan hak Allah semata",
					"ayat" => "Qs.45:37 | Qs.59:23"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Berpegang teguh dengan (ajaran) Allah",
					"ayat" => "Qs.3:101 | Qs.3:103 | Qs.4:146 | Qs.4:175 | Qs.22:78"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Minta tolong kepada Allah",
					"ayat" => "Qs.1:5 | Qs.7:128 | Qs.11:41 | Qs.12:18 | Qs.21:112"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Santunan Allah",
					"ayat" => "Qs.17:100"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Hanya Allah yang mendatangkan manfaat dan marabahaya",
					"ayat" => "Qs.5:76 | Qs.6:71 | Qs.7:188 | Qs.10:18 | Qs.10:49 | Qs.10:106 | Qs.13:16 | Qs.20:89 | Qs.21:66 | Qs.22:12 | Qs.25:3 | Qs.25:55 | Qs.26:73 | Qs.48:11 | Qs.60:3"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keputusan di tangan Allah",
					"ayat" => "Qs.5:76 | Qs.6:71 | Qs.7:188 | Qs.10:18 | Qs.10:49 | Qs.10:106 | Qs.13:16 | Qs.20:89 | Qs.21:66 | Qs.22:12 | Qs.25:3 | Qs.25:55 | Qs.26:73 | Qs.48:11 | Qs.60:3 | Qs.5:76 | Qs.6:71 | Qs.7:188 | Qs.10:18 | Qs.10:49 | Qs.10:106 | Qs.13:16 | Qs.20:89 | Qs.21:66 | Qs.22:12 | Qs.25:3 | Qs.25:55 | Qs.26:73 | Qs.48:11 | Qs.60:3 | Qs.5:76 | Qs.6:71 | Qs.7:188 | Qs.10:18 | Qs.10:49 | Qs.10:106 | Qs.13:16 | Qs.20:89 | Qs.21:66 | Qs.22:12 | Qs.25:3 | Qs.25:55 | Qs.26:73 | Qs.48:11 | Qs.60:3"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Siksaan Allah sangat pedih",
					"ayat" => "Qs.2:196 | Qs.2:211 | Qs.3:11 | Qs.4:115 | Qs.4:138 | Qs.4:169 | Qs.5:2 | Qs.5:36 | Qs.5:73 | Qs.5:98 | Qs.6:6 | Qs.6:165 | Qs.7:165 | Qs.7:166 | Qs.7:167 | Qs.8:13 | Qs.8:25 | Qs.8:48 | Qs.8:50 | Qs.8:52 | Qs.13:6 | Qs.39:37 | Qs.40:3 | Qs.40:22 | Qs.58:15 | Qs.59:4 | Qs.59:7 | Qs.65:8 | Qs.85:12"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Allah memiliki kunci alam ghaib",
					"ayat" => "Qs.2:3 | Qs.3:5 | Qs.3:179 | Qs.5:109 | Qs.6:50 | Qs.6:59 | Qs.6:73 | Qs.7:187 | Qs.9:78 | Qs.9:94 | Qs.9:105 | Qs.11:123 | Qs.12:81 | Qs.12:102 | Qs.13:8 | Qs.13:9 | Qs.16:77 | Qs.18:26 | Qs.23:92 | Qs.25:6 | Qs.27:65 | Qs.27:74 | Qs.27:75 | Qs.31:34 | Qs.32:5 | Qs.32:6 | Qs.33:63 | Qs.34:3 | Qs.34:14 | Qs.34:48 | Qs.35:38 | Qs.39:46 | Qs.41:47 | Qs.49:18 | Qs.52:41 | Qs.59:22 | Qs.62:8 | Qs.64:18 | Qs.67:26 | Qs.68:47 | Qs.72:26 | Qs.72:27 | Qs.79:44"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Para utusan Allah pun tidak mengetahui alam ghaib",
					"ayat" => "Qs.3:179 | Qs.5:116 | Qs.6:50 | Qs.7:188 | Qs.10:20 | Qs.11:31 | Qs.11:49 | Qs.19:78 | Qs.27:65 | Qs.34:14 | Qs.52:41 | Qs.53:35 | Qs.68:47 | Qs.72:26"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kesabaran Allah terhadap kejahatan hamba",
					"ayat" => "Qs.2:26 | Qs.13:5 | Qs.16:54 | Qs.16:57 | Qs.16:61 | Qs.16:62 | Qs.25:77 | Qs.27:73 | Qs.37:149 | Qs.37:150 | Qs.43:33 | Qs.43:34 | Qs.43:35"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Mensucikan Allah dari segala sekutu",
					"ayat" => "Qs.6:163 | Qs.7:190 | Qs.9:31 | Qs.10:18 | Qs.12:108 | Qs.13:16 | Qs.16:1 | Qs.16:3 | Qs.17:43 | Qs.18:38 | Qs.27:63 | Qs.28:68 | Qs.30:28 | Qs.30:40 | Qs.34:22 | Qs.34:27 | Qs.39:67 | Qs.52:43 | Qs.59:23"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Melihat Allah di surga",
					"ayat" => "Qs.10:26 | Qs.36:58 | Qs.75:23"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Allah tidak membutuhkan makhlukNya",
					"ayat" => "Qs.3:97 | Qs.3:177 | Qs.4:131 | Qs.4:147 | Qs.6:14 | Qs.6:133 | Qs.10:68 | Qs.14:8 | Qs.17:111 | Qs.18:51 | Qs.22:37 | Qs.25:2 | Qs.29:6 | Qs.31:12 | Qs.35:15 | Qs.39:7 | Qs.47:32 | Qs.47:36 | Qs.47:38 | Qs.49:17 | Qs.51:57 | Qs.55:29 | Qs.57:24 | Qs.60:6 | Qs.64:6"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keluasan ilmu Allah",
					"ayat" => "Qs.2:29 | Qs.2:30 | Qs.2:31 | Qs.2:33 | Qs.2:72 | Qs.2:74 | Qs.2:77 | Qs.2:85 | Qs.2:115 | Qs.2:140 | Qs.2:149 | Qs.2:181 | Qs.2:197 | Qs.2:215 | Qs.2:216 | Qs.2:220 | Qs.2:231 | Qs.2:232 | Qs.2:233 | Qs.2:235 | Qs.2:255 | Qs.2:270 | Qs.2:282 | Qs.2:283 | Qs.2:284 | Qs.3:7 | Qs.3:29 | Qs.3:36 | Qs.3:66 | Qs.3:73 | Qs.3:120 | Qs.3:121 | Qs.3:154 | Qs.3:167 | Qs.4:32 | Qs.4:45 | Qs.4:63 | Qs.4:104 | Qs.4:108 | Qs.4:111 | Qs.4:126 | Qs.4:127 | Qs.4:148 | Qs.5:7 | Qs.5:8 | Qs.5:14 | Qs.5:54 | Qs.5:61 | Qs.5:71 | Qs.5:97 | Qs.5:99 | Qs.5:109 | Qs.5:116 | Qs.6:3 | Qs.6:53 | Qs.6:58 | Qs.6:59 | Qs.6:60 | Qs.6:73 | Qs.6:80 | Qs.6:101 | Qs.6:117 | Qs.6:119 | Qs.6:124 | Qs.6:132 | Qs.7:7 | Qs.7:52 | Qs.7:89 | Qs.8:61 | Qs.8:75 | Qs.9:42 | Qs.9:78 | Qs.9:94 | Qs.9:101 | Qs.9:115 | Qs.10:36 | Qs.10:61 | Qs.11:5 | Qs.11:6 | Qs.11:31 | Qs.11:46 | Qs.11:112 | Qs.11:123 | Qs.12:19 | Qs.12:37 | Qs.12:76 | Qs.12:77 | Qs.12:86 | Qs.13:8 | Qs.13:9 | Qs.13:10 | Qs.13:33 | Qs.13:42 | Qs.14:9 | Qs.14:38 | Qs.14:42 | Qs.15:24 | Qs.16:19 | Qs.16:23 | Qs.16:28 | Qs.16:70 | Qs.16:74 | Qs.16:77 | Qs.16:91 | Qs.16:101 | Qs.16:125 | Qs.17:30 | Qs.17:36 | Qs.17:54 | Qs.17:55 | Qs.17:60 | Qs.17:84 | Qs.17:85 | Qs.18:22 | Qs.18:26 | Qs.18:65 | Qs.18:91 | Qs.18:109 | Qs.19:70 | Qs.19:94 | Qs.20:7 | Qs.20:52 | Qs.20:98 | Qs.20:104 | Qs.20:110 | Qs.21:4 | Qs.21:28 | Qs.21:47 | Qs.21:81 | Qs.21:110 | Qs.22:68 | Qs.22:70 | Qs.22:76 | Qs.23:17 | Qs.23:51 | Qs.23:92 | Qs.23:96 | Qs.24:19 | Qs.24:28 | Qs.24:29 | Qs.24:35 | Qs.24:41 | Qs.24:64 | Qs.25:6 | Qs.25:58 | Qs.26:188 | Qs.26:220 | Qs.27:25 | Qs.27:65 | Qs.27:74 | Qs.27:75 | Qs.27:93 | Qs.28:37 | Qs.28:56 | Qs.28:69 | Qs.28:85 | Qs.29:3 | Qs.29:10 | Qs.29:11 | Qs.29:42 | Qs.29:45 | Qs.29:52 | Qs.29:62 | Qs.31:16 | Qs.31:23 | Qs.32:6 | Qs.33:2 | Qs.33:18 | Qs.33:51 | Qs.33:54 | Qs.34:2 | Qs.34:3 | Qs.34:11 | Qs.34:48 | Qs.35:8 | Qs.35:11 | Qs.35:38 | Qs.36:76 | Qs.39:7 | Qs.39:46 | Qs.39:70 | Qs.40:19 | Qs.41:47 | Qs.41:54 | Qs.42:12 | Qs.42:24 | Qs.42:25 | Qs.43:80 | Qs.43:85 | Qs.46:8 | Qs.46:23 | Qs.47:19 | Qs.47:26 | Qs.47:30 | Qs.48:18 | Qs.49:16 | Qs.49:18 | Qs.50:4 | Qs.50:16 | Qs.50:45 | Qs.53:30 | Qs.53:32 | Qs.57:3 | Qs.57:4 | Qs.57:6 | Qs.58:3 | Qs.58:7 | Qs.59:11 | Qs.59:22 | Qs.60:1 | Qs.60:10 | Qs.62:7 | Qs.64:4 | Qs.64:11 | Qs.64:18 | Qs.65:12 | Qs.66:3 | Qs.67:13 | Qs.67:14 | Qs.68:7 | Qs.69:18 | Qs.69:25 | Qs.72:26 | Qs.74:31 | Qs.79:44 | Qs.84:23 | Qs.85:20 | Qs.87:7 | Qs.90:7 | Qs.100:10 | Qs.100:11"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Ampunan Allah yang luas",
					"ayat" => "Qs.2:173 | Qs.2:182 | Qs.2:192 | Qs.2:199 | Qs.2:218 | Qs.2:221 | Qs.2:225 | Qs.2:226 | Qs.2:235 | Qs.2:268 | Qs.2:284 | Qs.3:31 | Qs.3:133 | Qs.3:135 | Qs.3:136 | Qs.3:157 | Qs.4:23 | Qs.4:25 | Qs.4:43 | Qs.4:64 | Qs.4:96 | Qs.4:99 | Qs.4:100 | Qs.4:106 | Qs.4:110 | Qs.4:116 | Qs.4:129 | Qs.4:152 | Qs.5:3 | Qs.5:9 | Qs.5:18 | Qs.5:34 | Qs.5:39 | Qs.5:40 | Qs.5:74 | Qs.5:98 | Qs.5:101 | Qs.6:54 | Qs.6:145 | Qs.6:165 | Qs.7:153 | Qs.7:155 | Qs.7:167 | Qs.8:29 | Qs.8:33 | Qs.8:69 | Qs.8:70 | Qs.8:74 | Qs.9:5 | Qs.9:91 | Qs.9:99 | Qs.9:102 | Qs.10:107 | Qs.11:3 | Qs.11:11 | Qs.11:41 | Qs.11:90 | Qs.12:98 | Qs.14:36 | Qs.15:49 | Qs.16:18 | Qs.16:110 | Qs.16:115 | Qs.16:119 | Qs.17:25 | Qs.17:44 | Qs.18:58 | Qs.20:82 | Qs.22:50 | Qs.22:60 | Qs.24:5 | Qs.24:22 | Qs.24:26 | Qs.24:33 | Qs.24:62 | Qs.25:6 | Qs.25:70 | Qs.27:11 | Qs.27:46 | Qs.28:16 | Qs.33:5 | Qs.33:24 | Qs.33:35 | Qs.33:50 | Qs.33:59 | Qs.33:71 | Qs.33:73 | Qs.34:2 | Qs.34:4 | Qs.34:15 | Qs.35:7 | Qs.35:28 | Qs.35:34 | Qs.35:41 | Qs.36:11 | Qs.36:27 | Qs.38:25 | Qs.39:5 | Qs.39:53 | Qs.40:3 | Qs.40:42 | Qs.41:6 | Qs.41:32 | Qs.41:43 | Qs.42:5 | Qs.42:23 | Qs.46:8 | Qs.46:31 | Qs.47:15 | Qs.48:2 | Qs.48:14 | Qs.48:29 | Qs.49:3 | Qs.49:14 | Qs.53:32 | Qs.57:20 | Qs.57:21 | Qs.57:28 | Qs.58:2 | Qs.58:12 | Qs.60:7 | Qs.60:12 | Qs.61:12 | Qs.64:14 | Qs.64:17 | Qs.66:1 | Qs.67:2 | Qs.67:12 | Qs.71:4 | Qs.71:10 | Qs.73:20 | Qs.74:56 | Qs.85:14"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kasih sayang Allah yang luas",
					"ayat" => "Qs.1:1 | Qs.1:3 | Qs.3:8 | Qs.3:107 | Qs.3:152 | Qs.3:159 | Qs.4:28 | Qs.4:83 | Qs.4:96 | Qs.4:106 | Qs.4:110 | Qs.4:152 | Qs.5:34 | Qs.5:39 | Qs.6:12 | Qs.6:16 | Qs.6:147 | Qs.7:72 | Qs.7:151 | Qs.7:153 | Qs.7:156 | Qs.9:99 | Qs.11:58 | Qs.12:53 | Qs.12:64 | Qs.17:57 | Qs.17:87 | Qs.18:58 | Qs.18:79 | Qs.18:80 | Qs.18:98 | Qs.28:86 | Qs.29:51 | Qs.30:46 | Qs.30:49 | Qs.42:30 | Qs.43:13 | Qs.48:4 | Qs.76:31"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Allah menepati janji",
					"ayat" => "Qs.2:40 | Qs.2:80 | Qs.3:152 | Qs.3:194 | Qs.4:47 | Qs.4:87 | Qs.4:122 | Qs.6:115 | Qs.6:134 | Qs.7:44 | Qs.9:111 | Qs.10:4 | Qs.10:55 | Qs.10:64 | Qs.11:119 | Qs.13:31 | Qs.14:22 | Qs.14:47 | Qs.15:41 | Qs.16:38 | Qs.17:108 | Qs.18:21 | Qs.18:98 | Qs.19:61 | Qs.21:9 | Qs.21:97 | Qs.21:103 | Qs.21:104 | Qs.22:47 | Qs.25:15 | Qs.25:16 | Qs.26:206 | Qs.28:13 | Qs.28:61 | Qs.30:6 | Qs.30:60 | Qs.31:9 | Qs.31:33 | Qs.33:22 | Qs.36:52 | Qs.36:63 | Qs.38:53 | Qs.39:20 | Qs.39:74 | Qs.40:8 | Qs.40:55 | Qs.40:77 | Qs.40:78 | Qs.41:30 | Qs.43:42 | Qs.43:83 | Qs.45:32 | Qs.46:16 | Qs.46:17 | Qs.46:24 | Qs.46:35 | Qs.48:20 | Qs.50:14 | Qs.50:20 | Qs.50:32 | Qs.51:5 | Qs.51:23 | Qs.52:7 | Qs.52:8 | Qs.70:42 | Qs.70:44 | Qs.73:18 | Qs.77:7"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kekuasaan Allah",
					"ayat" => "Qs.2:73 | Qs.2:106 | Qs.2:109 | Qs.2:148 | Qs.2:243 | Qs.2:259 | Qs.2:284 | Qs.3:6 | Qs.3:27 | Qs.3:29 | Qs.3:40 | Qs.3:47 | Qs.4:30 | Qs.4:84 | Qs.4:133 | Qs.4:169 | Qs.5:17 | Qs.5:19 | Qs.5:40 | Qs.5:120 | Qs.6:6 | Qs.6:17 | Qs.6:37 | Qs.6:38 | Qs.6:64 | Qs.6:65 | Qs.6:95 | Qs.6:98 | Qs.6:99 | Qs.6:101 | Qs.6:102 | Qs.6:134 | Qs.6:141 | Qs.7:4 | Qs.7:5 | Qs.7:54 | Qs.8:59 | Qs.9:39 | Qs.9:116 | Qs.10:31 | Qs.10:34 | Qs.10:49 | Qs.11:56 | Qs.11:72 | Qs.11:73 | Qs.11:82 | Qs.13:2 | Qs.13:3 | Qs.13:5 | Qs.13:12 | Qs.13:13 | Qs.14:20 | Qs.14:33 | Qs.14:39 | Qs.15:26 | Qs.15:27 | Qs.16:8 | Qs.16:16 | Qs.16:40 | Qs.16:46 | Qs.16:65 | Qs.16:66 | Qs.16:67 | Qs.16:68 | Qs.16:69 | Qs.16:70 | Qs.16:77 | Qs.16:79 | Qs.17:6 | Qs.17:12 | Qs.17:16 | Qs.17:50 | Qs.17:51 | Qs.17:60 | Qs.17:66 | Qs.17:68 | Qs.17:69 | Qs.17:86 | Qs.17:99 | Qs.17:104 | Qs.17:108 | Qs.18:8 | Qs.18:12 | Qs.18:18 | Qs.18:19 | Qs.18:40 | Qs.18:41 | Qs.18:42 | Qs.18:45 | Qs.18:47 | Qs.18:48 | Qs.19:7 | Qs.19:8 | Qs.19:9 | Qs.19:21 | Qs.19:67 | Qs.19:98 | Qs.20:20 | Qs.20:21 | Qs.20:22 | Qs.20:53 | Qs.20:69 | Qs.20:105 | Qs.20:106 | Qs.20:107 | Qs.20:128 | Qs.21:11 | Qs.21:30 | Qs.21:31 | Qs.21:32 | Qs.21:33 | Qs.21:44 | Qs.21:47 | Qs.21:104 | Qs.22:6 | Qs.22:39 | Qs.22:66 | Qs.22:70 | Qs.23:18 | Qs.23:95 | Qs.24:45 | Qs.25:2 | Qs.25:45 | Qs.25:46 | Qs.25:47 | Qs.25:48 | Qs.25:49 | Qs.25:53 | Qs.25:54 | Qs.26:4 | Qs.26:7 | Qs.28:82 | Qs.29:19 | Qs.29:20 | Qs.29:44 | Qs.29:61 | Qs.30:4 | Qs.30:11 | Qs.30:19 | Qs.30:25 | Qs.30:27 | Qs.30:50 | Qs.30:54 | Qs.31:10 | Qs.31:16 | Qs.31:28 | Qs.32:7 | Qs.33:17 | Qs.33:19 | Qs.33:27 | Qs.34:9 | Qs.35:1 | Qs.35:11 | Qs.35:12 | Qs.35:16 | Qs.35:17 | Qs.35:27 | Qs.35:41 | Qs.35:44 | Qs.36:9 | Qs.36:37 | Qs.36:81 | Qs.36:82 | Qs.39:21 | Qs.39:51 | Qs.39:67 | Qs.40:57 | Qs.40:68 | Qs.41:9 | Qs.41:15 | Qs.41:39 | Qs.42:12 | Qs.42:32 | Qs.42:33 | Qs.42:34 | Qs.43:10 | Qs.43:11 | Qs.43:12 | Qs.43:42 | Qs.44:38 | Qs.45:22 | Qs.45:26 | Qs.46:3 | Qs.46:32 | Qs.46:33 | Qs.48:11 | Qs.48:21 | Qs.50:6 | Qs.50:9 | Qs.50:15 | Qs.50:38 | Qs.50:43 | Qs.50:44 | Qs.51:30 | Qs.51:47 | Qs.51:48 | Qs.51:49 | Qs.53:43 | Qs.53:44 | Qs.53:45 | Qs.53:46 | Qs.54:50 | Qs.55:19 | Qs.55:20 | Qs.56:59 | Qs.56:60 | Qs.56:61 | Qs.56:64 | Qs.56:65 | Qs.56:69 | Qs.56:72 | Qs.56:84 | Qs.56:85 | Qs.57:22 | Qs.58:10 | Qs.59:6 | Qs.60:7 | Qs.64:1 | Qs.64:7 | Qs.65:12 | Qs.66:8 | Qs.67:1 | Qs.67:16 | Qs.67:17 | Qs.67:19 | Qs.67:30 | Qs.70:40 | Qs.70:41 | Qs.72:12 | Qs.75:4 | Qs.75:40 | Qs.77:38 | Qs.79:27 | Qs.85:13 | Qs.86:8 | Qs.88:17 | Qs.88:18 | Qs.88:19 | Qs.88:20 | Qs.92:13"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat Masyi'ah (berkehendak)",
					"ayat" => "Qs.2:20 | Qs.2:90 | Qs.2:105 | Qs.2:142 | Qs.2:212 | Qs.2:213 | Qs.2:220 | Qs.2:247 | Qs.2:251 | Qs.2:253 | Qs.2:255 | Qs.2:261 | Qs.2:269 | Qs.2:272 | Qs.2:284 | Qs.3:6 | Qs.3:13 | Qs.3:26 | Qs.3:27 | Qs.3:37 | Qs.3:40 | Qs.3:47 | Qs.3:73 | Qs.3:74 | Qs.3:179 | Qs.4:49 | Qs.4:90 | Qs.4:116 | Qs.5:17 | Qs.5:18 | Qs.5:40 | Qs.5:48 | Qs.5:54 | Qs.5:64 | Qs.6:35 | Qs.6:39 | Qs.6:41 | Qs.6:80 | Qs.6:83 | Qs.6:88 | Qs.6:107 | Qs.6:111 | Qs.6:112 | Qs.6:125 | Qs.6:128 | Qs.6:133 | Qs.6:137 | Qs.6:148 | Qs.6:149 | Qs.7:89 | Qs.7:100 | Qs.7:128 | Qs.7:155 | Qs.7:156 | Qs.7:176 | Qs.7:188 | Qs.9:15 | Qs.9:27 | Qs.9:28 | Qs.9:106 | Qs.10:16 | Qs.10:25 | Qs.10:49 | Qs.10:99 | Qs.10:107 | Qs.11:33 | Qs.11:107 | Qs.11:108 | Qs.11:118 | Qs.12:56 | Qs.12:76 | Qs.12:99 | Qs.12:100 | Qs.12:110 | Qs.13:13 | Qs.13:27 | Qs.13:31 | Qs.13:39 | Qs.14:4 | Qs.14:11 | Qs.14:19 | Qs.14:27 | Qs.16:2 | Qs.16:9 | Qs.16:35 | Qs.16:93 | Qs.17:54 | Qs.17:86 | Qs.18:24 | Qs.18:39 | Qs.22:5 | Qs.22:18 | Qs.24:21 | Qs.24:35 | Qs.24:38 | Qs.24:43 | Qs.24:45 | Qs.24:46 | Qs.25:10 | Qs.26:4 | Qs.27:87 | Qs.28:56 | Qs.28:68 | Qs.28:82 | Qs.29:21 | Qs.29:62 | Qs.30:5 | Qs.30:37 | Qs.30:48 | Qs.30:54 | Qs.33:24 | Qs.34:36 | Qs.34:39 | Qs.35:1 | Qs.35:8 | Qs.35:16 | Qs.35:22 | Qs.36:43 | Qs.36:47 | Qs.36:66 | Qs.36:67 | Qs.39:4 | Qs.39:23 | Qs.39:52 | Qs.39:68 | Qs.40:15 | Qs.42:8 | Qs.42:12 | Qs.42:13 | Qs.42:19 | Qs.42:20 | Qs.42:27 | Qs.42:29 | Qs.42:33 | Qs.42:49 | Qs.42:50 | Qs.42:51 | Qs.42:52 | Qs.43:20 | Qs.43:60 | Qs.47:4 | Qs.47:30 | Qs.48:14 | Qs.48:25 | Qs.53:26 | Qs.56:65 | Qs.56:70 | Qs.57:21 | Qs.57:29 | Qs.59:6 | Qs.62:4 | Qs.74:31 | Qs.74:56 | Qs.76:28 | Qs.76:30 | Qs.76:31 | Qs.80:22 | Qs.81:29 | Qs.82:8 | Qs.87:7"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat Iradah (berkeinginan)",
					"ayat" => "Qs.2:117 | Qs.2:185 | Qs.2:253 | Qs.3:47 | Qs.3:59 | Qs.3:176 | Qs.4:26 | Qs.4:27 | Qs.4:28 | Qs.5:1 | Qs.5:6 | Qs.5:49 | Qs.6:125 | Qs.8:7 | Qs.9:55 | Qs.9:85 | Qs.11:34 | Qs.11:107 | Qs.16:40 | Qs.17:5 | Qs.17:18 | Qs.19:35 | Qs.22:14 | Qs.22:16 | Qs.22:65 | Qs.35:2 | Qs.36:82 | Qs.39:4 | Qs.39:38 | Qs.40:68 | Qs.85:16"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat Kalam (berfirman)",
					"ayat" => "Qs.2:174 | Qs.2:253 | Qs.4:164 | Qs.6:30 | Qs.7:143 | Qs.7:144 | Qs.20:11 | Qs.20:12 | Qs.20:83 | Qs.20:84 | Qs.27:8 | Qs.27:9 | Qs.27:11 | Qs.28:30 | Qs.28:31 | Qs.28:32 | Qs.28:34 | Qs.28:46 | Qs.31:27 | Qs.37:104 | Qs.79:16 | Qs.79:19"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat Sama'(mendengar)",
					"ayat" => "Qs.2:256 | Qs.4:134 | Qs.4:148 | Qs.8:61 | Qs.14:39 | Qs.20:46 | Qs.22:61 | Qs.22:75 | Qs.24:21 | Qs.24:60 | Qs.26:15 | Qs.26:220 | Qs.31:28 | Qs.58:1"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat Bashar (melihat)",
					"ayat" => "Qs.4:134 | Qs.20:46 | Qs.26:218 | Qs.96:14"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Allah tidak dapat dilihat di dunia",
					"ayat" => "Qs.7:143 | Qs.25:21"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Tentang nama-nama Allah"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Meminta dengan menyebut nama Allah",
					"ayat" => "Qs.3:26 | Qs.5:114 | Qs.7:180 | Qs.17:110"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Berdoa dengan Asma'ul Husna",
					"ayat" => "Qs.7:180 | Qs.17:110 | Qs.59:24"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Mengingkari nama-nama Allah",
					"ayat" => "Qs.7:180"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Semua nama-nama Allah baik",
					"ayat" => "Qs.20:8"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Nama-nama Allah (Asma'ul Husna)"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Ar Rabb (Tuhan)",
					"ayat" => "Qs.1:2 | Qs.2:5 | Qs.2:21 | Qs.2:26 | Qs.2:30 | Qs.2:37 | Qs.2:46 | Qs.2:49 | Qs.2:61 | Qs.2:62 | Qs.2:68 | Qs.2:69 | Qs.2:70 | Qs.2:76 | Qs.2:105 | Qs.2:112 | Qs.2:124 | Qs.2:126 | Qs.2:127 | Qs.2:128 | Qs.2:129 | Qs.2:131 | Qs.2:136 | Qs.2:139 | Qs.2:144 | Qs.2:147 | Qs.2:149 | Qs.2:157 | Qs.2:178 | Qs.2:198 | Qs.2:200 | Qs.2:201 | Qs.2:248 | Qs.2:250 | Qs.2:258 | Qs.2:260 | Qs.2:262 | Qs.2:274 | Qs.2:275 | Qs.2:277 | Qs.2:282 | Qs.2:283 | Qs.2:285 | Qs.2:286 | Qs.3:7 | Qs.3:8 | Qs.3:9 | Qs.3:15 | Qs.3:16 | Qs.3:35 | Qs.3:36 | Qs.3:37 | Qs.3:38 | Qs.3:40 | Qs.3:41 | Qs.3:43 | Qs.3:47 | Qs.3:49 | Qs.3:50 | Qs.3:51 | Qs.3:53 | Qs.3:73 | Qs.3:84 | Qs.3:124 | Qs.3:125 | Qs.3:133 | Qs.3:136 | Qs.3:147 | Qs.3:169 | Qs.3:191 | Qs.3:192 | Qs.3:193 | Qs.3:194 | Qs.3:195 | Qs.3:198 | Qs.3:199 | Qs.4:1 | Qs.4:65 | Qs.4:75 | Qs.4:77 | Qs.4:170 | Qs.4:174 | Qs.5:2 | Qs.5:24 | Qs.5:25 | Qs.5:28 | Qs.5:64 | Qs.5:66 | Qs.5:67 | Qs.5:68 | Qs.5:72 | Qs.5:83 | Qs.5:84 | Qs.5:112 | Qs.5:114 | Qs.5:117 | Qs.6:1 | Qs.6:4 | Qs.6:15 | Qs.6:23 | Qs.6:27 | Qs.6:30 | Qs.6:37 | Qs.6:45 | Qs.6:51 | Qs.6:52 | Qs.6:54 | Qs.6:57 | Qs.6:71 | Qs.6:77 | Qs.6:78 | Qs.6:80 | Qs.6:83 | Qs.6:102 | Qs.6:104 | Qs.6:106 | Qs.6:108 | Qs.6:112 | Qs.6:114 | Qs.6:115 | Qs.6:117 | Qs.6:119 | Qs.6:126 | Qs.6:127 | Qs.6:128 | Qs.6:131 | Qs.6:133 | Qs.6:145 | Qs.6:147 | Qs.6:150 | Qs.6:151 | Qs.6:154 | Qs.6:157 | Qs.6:158 | Qs.6:161 | Qs.6:162 | Qs.6:164 | Qs.6:165 | Qs.7:3 | Qs.7:20 | Qs.7:22 | Qs.7:23 | Qs.7:29 | Qs.7:33 | Qs.7:38 | Qs.7:43 | Qs.7:44 | Qs.7:47 | Qs.7:53 | Qs.7:54 | Qs.7:55 | Qs.7:58 | Qs.7:61 | Qs.7:62 | Qs.7:63 | Qs.7:67 | Qs.7:68 | Qs.7:69 | Qs.7:71 | Qs.7:73 | Qs.7:75 | Qs.7:77 | Qs.7:79 | Qs.7:85 | Qs.7:89 | Qs.7:93 | Qs.7:104 | Qs.7:105 | Qs.7:121 | Qs.7:122 | Qs.7:125 | Qs.7:126 | Qs.7:129 | Qs.7:134 | Qs.7:137 | Qs.7:141 | Qs.7:142 | Qs.7:143 | Qs.7:149 | Qs.7:150 | Qs.7:151 | Qs.7:152 | Qs.7:153 | Qs.7:154 | Qs.7:155 | Qs.7:164 | Qs.7:167 | Qs.7:172 | Qs.7:187 | Qs.7:189 | Qs.7:203 | Qs.7:205 | Qs.7:206 | Qs.8:2 | Qs.8:4 | Qs.8:5 | Qs.8:9 | Qs.8:12 | Qs.8:54 | Qs.9:21 | Qs.9:129 | Qs.10:2 | Qs.10:3 | Qs.10:9 | Qs.10:10 | Qs.10:15 | Qs.10:19 | Qs.10:20 | Qs.10:32 | Qs.10:33 | Qs.10:37 | Qs.10:40 | Qs.10:53 | Qs.10:57 | Qs.10:61 | Qs.10:85 | Qs.10:88 | Qs.10:93 | Qs.10:94 | Qs.10:96 | Qs.10:99 | Qs.10:108 | Qs.11:3 | Qs.11:17 | Qs.11:18 | Qs.11:23 | Qs.11:28 | Qs.11:29 | Qs.11:34 | Qs.11:41 | Qs.11:45 | Qs.11:47 | Qs.11:52 | Qs.11:56 | Qs.11:57 | Qs.11:59 | Qs.11:60 | Qs.11:61 | Qs.11:63 | Qs.11:66 | Qs.11:68 | Qs.11:76 | Qs.11:81 | Qs.11:83 | Qs.11:88 | Qs.11:90 | Qs.11:92 | Qs.11:101 | Qs.11:102 | Qs.11:107 | Qs.11:108 | Qs.11:110 | Qs.11:111 | Qs.11:117 | Qs.11:118 | Qs.11:119 | Qs.11:123 | Qs.12:6 | Qs.12:23 | Qs.12:34 | Qs.12:37 | Qs.12:42 | Qs.12:50 | Qs.12:53 | Qs.12:98 | Qs.12:100 | Qs.12:101 | Qs.13:1 | Qs.13:2 | Qs.13:5 | Qs.13:6 | Qs.13:7 | Qs.13:16 | Qs.13:18 | Qs.13:19 | Qs.13:21 | Qs.13:22 | Qs.13:27 | Qs.13:30 | Qs.14:1 | Qs.14:6 | Qs.14:7 | Qs.14:13 | Qs.14:18 | Qs.14:23 | Qs.14:25 | Qs.14:35 | Qs.14:36 | Qs.14:37 | Qs.14:38 | Qs.14:39 | Qs.14:40 | Qs.14:41 | Qs.14:44 | Qs.15:25 | Qs.15:28 | Qs.15:36 | Qs.15:39 | Qs.15:56 | Qs.15:86 | Qs.15:92 | Qs.15:98 | Qs.15:99 | Qs.16:7 | Qs.16:24 | Qs.16:30 | Qs.16:33 | Qs.16:42 | Qs.16:47 | Qs.16:50 | Qs.16:54 | Qs.16:68 | Qs.16:69 | Qs.16:86 | Qs.16:99 | Qs.16:102 | Qs.16:110 | Qs.16:119 | Qs.16:124 | Qs.16:125 | Qs.17:8 | Qs.17:12 | Qs.17:17 | Qs.17:20 | Qs.17:23 | Qs.17:24 | Qs.17:25 | Qs.17:27 | Qs.17:28 | Qs.17:30 | Qs.17:38 | Qs.17:39 | Qs.17:40 | Qs.17:46 | Qs.17:54 | Qs.17:55 | Qs.17:57 | Qs.17:60 | Qs.17:65 | Qs.17:66 | Qs.17:79 | Qs.17:80 | Qs.17:84 | Qs.17:85 | Qs.17:87 | Qs.17:93 | Qs.17:100 | Qs.17:102 | Qs.17:108 | Qs.18:10 | Qs.18:13 | Qs.18:14 | Qs.18:16 | Qs.18:19 | Qs.18:21 | Qs.18:22 | Qs.18:24 | Qs.18:27 | Qs.18:28 | Qs.18:29 | Qs.18:36 | Qs.18:38 | Qs.18:40 | Qs.18:42 | Qs.18:46 | Qs.18:48 | Qs.18:49 | Qs.18:50 | Qs.18:55 | Qs.18:57 | Qs.18:58 | Qs.18:81 | Qs.18:82 | Qs.18:87 | Qs.18:95 | Qs.18:98 | Qs.18:105 | Qs.18:109 | Qs.18:110 | Qs.19:2 | Qs.19:3 | Qs.19:4 | Qs.19:6 | Qs.19:8 | Qs.19:9 | Qs.19:10 | Qs.19:19 | Qs.19:24 | Qs.19:36 | Qs.19:47 | Qs.19:48 | Qs.19:55 | Qs.19:64 | Qs.19:65 | Qs.19:68 | Qs.19:71 | Qs.19:76 | Qs.20:12 | Qs.20:25 | Qs.20:47 | Qs.20:52 | Qs.20:70 | Qs.20:73 | Qs.20:74 | Qs.20:84 | Qs.20:86 | Qs.20:90 | Qs.20:105 | Qs.20:114 | Qs.20:121 | Qs.20:122 | Qs.20:125 | Qs.20:127 | Qs.20:133 | Qs.21:2 | Qs.21:4 | Qs.21:42 | Qs.21:46 | Qs.21:49 | Qs.21:56 | Qs.21:83 | Qs.21:89 | Qs.21:92 | Qs.21:112 | Qs.22:1 | Qs.22:19 | Qs.22:30 | Qs.22:40 | Qs.22:54 | Qs.22:67 | Qs.22:77 | Qs.23:26 | Qs.23:29 | Qs.23:39 | Qs.23:52 | Qs.23:57 | Qs.23:58 | Qs.23:59 | Qs.23:60 | Qs.23:72 | Qs.23:76 | Qs.23:86 | Qs.23:93 | Qs.23:94 | Qs.23:97 | Qs.23:98 | Qs.23:99 | Qs.23:106 | Qs.23:107 | Qs.23:109 | Qs.23:116 | Qs.23:117 | Qs.23:118 | Qs.25:16 | Qs.25:20 | Qs.25:21 | Qs.25:30 | Qs.25:31 | Qs.25:45 | Qs.25:54 | Qs.25:55 | Qs.25:57 | Qs.25:64 | Qs.25:65 | Qs.25:73 | Qs.25:74 | Qs.25:77 | Qs.26:9 | Qs.26:10 | Qs.26:12 | Qs.26:16 | Qs.26:21 | Qs.26:23 | Qs.26:24 | Qs.26:26 | Qs.26:28 | Qs.26:47 | Qs.26:48 | Qs.26:50 | Qs.26:51 | Qs.26:62 | Qs.26:68 | Qs.26:77 | Qs.26:83 | Qs.26:98 | Qs.26:104 | Qs.26:109 | Qs.26:113 | Qs.26:117 | Qs.26:122 | Qs.26:127 | Qs.26:140 | Qs.26:145 | Qs.26:159 | Qs.26:164 | Qs.26:166 | Qs.26:169 | Qs.26:175 | Qs.26:180 | Qs.26:188 | Qs.26:191 | Qs.26:192 | Qs.27:8 | Qs.27:19 | Qs.27:26 | Qs.27:40 | Qs.27:44 | Qs.27:73 | Qs.27:74 | Qs.27:78 | Qs.27:91 | Qs.27:93 | Qs.28:16 | Qs.28:17 | Qs.28:21 | Qs.28:22 | Qs.28:24 | Qs.28:30 | Qs.28:32 | Qs.28:33 | Qs.28:37 | Qs.28:46 | Qs.28:47 | Qs.28:53 | Qs.28:59 | Qs.28:63 | Qs.28:68 | Qs.28:69 | Qs.28:85 | Qs.28:86 | Qs.28:87 | Qs.29:10 | Qs.29:26 | Qs.29:30 | Qs.29:50 | Qs.29:59 | Qs.30:8 | Qs.30:33 | Qs.31:5 | Qs.31:33 | Qs.32:2 | Qs.32:10 | Qs.32:11 | Qs.32:12 | Qs.32:15 | Qs.32:16 | Qs.32:22 | Qs.32:25 | Qs.33:2 | Qs.33:67 | Qs.33:68 | Qs.34:3 | Qs.34:6 | Qs.34:12 | Qs.34:15 | Qs.34:19 | Qs.34:21 | Qs.34:23 | Qs.34:26 | Qs.34:31 | Qs.34:36 | Qs.34:39 | Qs.34:48 | Qs.34:50 | Qs.35:13 | Qs.35:18 | Qs.35:34 | Qs.35:37 | Qs.35:39 | Qs.36:16 | Qs.36:25 | Qs.36:27 | Qs.36:46 | Qs.36:51 | Qs.36:58 | Qs.37:5 | Qs.37:31 | Qs.37:57 | Qs.37:84 | Qs.37:87 | Qs.37:99 | Qs.37:126 | Qs.37:149 | Qs.37:180 | Qs.37:182 | Qs.38:9 | Qs.38:16 | Qs.38:24 | Qs.38:32 | Qs.38:35 | Qs.38:41 | Qs.38:61 | Qs.38:66 | Qs.38:71 | Qs.38:79 | Qs.39:6 | Qs.39:7 | Qs.39:8 | Qs.39:9 | Qs.39:10 | Qs.39:13 | Qs.39:20 | Qs.39:22 | Qs.39:23 | Qs.39:31 | Qs.39:34 | Qs.39:54 | Qs.39:55 | Qs.39:69 | Qs.39:71 | Qs.39:73 | Qs.39:75 | Qs.40:6 | Qs.40:7 | Qs.40:8 | Qs.40:11 | Qs.40:26 | Qs.40:27 | Qs.40:28 | Qs.40:49 | Qs.40:55 | Qs.40:60 | Qs.40:62 | Qs.40:64 | Qs.40:65 | Qs.40:66 | Qs.41:9 | Qs.41:14 | Qs.41:23 | Qs.41:29 | Qs.41:30 | Qs.41:38 | Qs.41:43 | Qs.41:45 | Qs.41:46 | Qs.41:50 | Qs.41:53 | Qs.41:54 | Qs.42:5 | Qs.42:10 | Qs.42:14 | Qs.42:15 | Qs.42:16 | Qs.42:22 | Qs.42:36 | Qs.42:38 | Qs.42:47 | Qs.43:13 | Qs.43:14 | Qs.43:32 | Qs.43:35 | Qs.43:46 | Qs.43:49 | Qs.43:64 | Qs.43:77 | Qs.43:82 | Qs.43:88 | Qs.44:6 | Qs.44:7 | Qs.44:8 | Qs.44:12 | Qs.44:20 | Qs.44:22 | Qs.44:57 | Qs.45:11 | Qs.45:15 | Qs.45:17 | Qs.45:30 | Qs.45:36 | Qs.46:13 | Qs.46:15 | Qs.46:25 | Qs.46:34 | Qs.47:2 | Qs.47:3 | Qs.47:14 | Qs.47:15 | Qs.50:27 | Qs.50:39 | Qs.51:16 | Qs.51:23 | Qs.51:30 | Qs.51:34 | Qs.51:44 | Qs.52:7 | Qs.52:18 | Qs.52:29 | Qs.52:37 | Qs.52:48 | Qs.53:18 | Qs.53:23 | Qs.53:30 | Qs.53:32 | Qs.53:42 | Qs.53:49 | Qs.53:55 | Qs.54:10 | Qs.55:13 | Qs.55:16 | Qs.55:17 | Qs.55:18 | Qs.55:21 | Qs.55:23 | Qs.55:25 | Qs.55:27 | Qs.55:28 | Qs.55:30 | Qs.55:32 | Qs.55:34 | Qs.55:36 | Qs.55:38 | Qs.55:40 | Qs.55:42 | Qs.55:45 | Qs.55:46 | Qs.55:47 | Qs.55:49 | Qs.55:51 | Qs.55:53 | Qs.55:55 | Qs.55:57 | Qs.55:59 | Qs.55:61 | Qs.55:63 | Qs.55:65 | Qs.55:67 | Qs.55:69 | Qs.55:71 | Qs.55:73 | Qs.55:75 | Qs.55:77 | Qs.55:78 | Qs.56:74 | Qs.56:80 | Qs.56:96 | Qs.57:8 | Qs.57:19 | Qs.57:21 | Qs.59:10 | Qs.59:16 | Qs.60:1 | Qs.60:4 | Qs.60:5 | Qs.63:10 | Qs.64:7 | Qs.65:1 | Qs.65:8 | Qs.66:5 | Qs.66:8 | Qs.66:11 | Qs.66:12 | Qs.67:6 | Qs.67:12 | Qs.68:2 | Qs.68:7 | Qs.68:19 | Qs.68:29 | Qs.68:32 | Qs.68:34 | Qs.68:48 | Qs.68:49 | Qs.68:50 | Qs.69:10 | Qs.69:17 | Qs.69:43 | Qs.69:52 | Qs.70:27 | Qs.70:28 | Qs.70:40 | Qs.71:5 | Qs.71:10 | Qs.71:21 | Qs.71:26 | Qs.71:28 | Qs.72:2 | Qs.72:3 | Qs.72:10 | Qs.72:13 | Qs.72:17 | Qs.72:20 | Qs.72:25 | Qs.72:28 | Qs.73:8 | Qs.73:9 | Qs.73:19 | Qs.73:20 | Qs.74:3 | Qs.74:7 | Qs.74:31 | Qs.75:12 | Qs.75:23 | Qs.75:30 | Qs.76:10 | Qs.76:21 | Qs.76:24 | Qs.76:25 | Qs.76:29 | Qs.78:36 | Qs.78:37 | Qs.78:39 | Qs.79:16 | Qs.79:19 | Qs.79:40 | Qs.79:44 | Qs.81:29 | Qs.83:6 | Qs.83:15 | Qs.84:2 | Qs.84:5 | Qs.84:6 | Qs.84:15 | Qs.85:12 | Qs.87:1 | Qs.87:15 | Qs.89:6 | Qs.89:13 | Qs.89:14 | Qs.89:15 | Qs.89:16 | Qs.89:22 | Qs.89:28 | Qs.91:14 | Qs.92:20 | Qs.93:3 | Qs.93:5 | Qs.93:11 | Qs.94:8 | Qs.96:1 | Qs.96:3 | Qs.96:8 | Qs.97:4 | Qs.98:8 | Qs.99:5 | Qs.100:6 | Qs.100:11 | Qs.105:1 | Qs.106:3 | Qs.108:2 | Qs.110:3 | Qs.113:1 | Qs.114:1"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Awwal (Maha Pertama)",
					"ayat" => "Qs.57:3"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Akhir (Maha Akhir)",
					"ayat" => "Qs.57:3"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Bari' (Maha Pencipta)",
					"ayat" => "Qs.59:24"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Bathin (Maha Halus)",
					"ayat" => "Qs.57:3"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Badi'(Maha Pencipta)",
					"ayat" => "Qs.2:117 | Qs.6:101"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Barr (Maha Baik)",
					"ayat" => "Qs.52:28"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Bashir (Maha Melihat)",
					"ayat" => "Qs.2:96 | Qs.2:110 | Qs.2:233 | Qs.2:237 | Qs.2:265 | Qs.3:15 | Qs.3:20 | Qs.3:156 | Qs.3:163 | Qs.4:58 | Qs.4:134 | Qs.5:71 | Qs.8:39 | Qs.8:72 | Qs.11:112 | Qs.17:1 | Qs.17:17 | Qs.17:30 | Qs.17:96 | Qs.20:35 | Qs.22:61 | Qs.22:75 | Qs.25:20 | Qs.31:28 | Qs.33:9 | Qs.34:11 | Qs.35:31 | Qs.35:45 | Qs.40:20 | Qs.40:44 | Qs.40:56 | Qs.41:40 | Qs.42:11 | Qs.42:27 | Qs.48:24 | Qs.49:18 | Qs.57:4 | Qs.58:1 | Qs.60:3 | Qs.64:2 | Qs.67:19 | Qs.84:15"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "At Tawwab (Maha Penerima taubat)",
					"ayat" => "Qs.2:37 | Qs.2:54 | Qs.2:128 | Qs.2:160 | Qs.4:16 | Qs.4:64 | Qs.9:104 | Qs.9:118 | Qs.24:10 | Qs.49:12 | Qs.110:3"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Jami'(Yang mengumpulkan manusia di akhirat)",
					"ayat" => "Qs.3:9 | Qs.4:140"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Jabbar (Maha Pemaksa)",
					"ayat" => "Qs.59:23"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Hasib (Maha Penghitung amal)",
					"ayat" => "Qs.4:6 | Qs.4:86 | Qs.33:39"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Hafiz (Maha Penjaga)",
					"ayat" => "Qs.11:57 | Qs.34:21 | Qs.42:6"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Haq (Maha Benar)",
					"ayat" => "Qs.6:62 | Qs.10:30 | Qs.10:32 | Qs.18:44 | Qs.20:114 | Qs.22:6 | Qs.22:62 | Qs.23:116 | Qs.24:25 | Qs.31:30"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Hakim (Maha Bijaksana)",
					"ayat" => "Qs.2:32 | Qs.2:129 | Qs.2:209 | Qs.2:220 | Qs.2:228 | Qs.2:240 | Qs.2:260 | Qs.3:6 | Qs.3:18 | Qs.3:62 | Qs.3:126 | Qs.4:11 | Qs.4:17 | Qs.4:24 | Qs.4:26 | Qs.4:56 | Qs.4:92 | Qs.4:104 | Qs.4:111 | Qs.4:130 | Qs.4:158 | Qs.4:165 | Qs.4:170 | Qs.5:38 | Qs.5:118 | Qs.6:18 | Qs.6:73 | Qs.6:83 | Qs.6:128 | Qs.6:139 | Qs.8:10 | Qs.8:49 | Qs.8:63 | Qs.8:67 | Qs.8:71 | Qs.9:15 | Qs.9:28 | Qs.9:40 | Qs.9:60 | Qs.9:71 | Qs.9:97 | Qs.9:106 | Qs.9:110 | Qs.11:1 | Qs.12:6 | Qs.12:83 | Qs.12:100 | Qs.14:4 | Qs.15:25 | Qs.16:60 | Qs.22:52 | Qs.24:10 | Qs.24:18 | Qs.24:58 | Qs.24:59 | Qs.27:6 | Qs.27:9 | Qs.29:26 | Qs.29:42 | Qs.30:27 | Qs.31:9 | Qs.31:27 | Qs.33:1 | Qs.34:1 | Qs.34:27 | Qs.35:2 | Qs.39:1 | Qs.40:8 | Qs.41:42 | Qs.42:3 | Qs.42:51 | Qs.43:84 | Qs.45:2 | Qs.45:37 | Qs.46:2 | Qs.48:4 | Qs.48:7 | Qs.48:19 | Qs.49:8 | Qs.51:30 | Qs.57:1 | Qs.59:1 | Qs.59:24 | Qs.60:5 | Qs.60:10 | Qs.61:1 | Qs.62:1 | Qs.62:3 | Qs.64:18 | Qs.66:2 | Qs.76:30 | Qs.95:8"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Halim (Maha Penyabar)",
					"ayat" => "Qs.2:225 | Qs.2:235 | Qs.2:263 | Qs.3:155 | Qs.4:12 | Qs.5:101 | Qs.17:44 | Qs.22:59 | Qs.33:51 | Qs.35:41 | Qs.64:17"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Hamid (Maha Terpuji)",
					"ayat" => "Qs.2:267 | Qs.4:131 | Qs.11:73 | Qs.14:1 | Qs.14:8 | Qs.22:24 | Qs.22:64 | Qs.31:12 | Qs.31:26 | Qs.34:6 | Qs.35:15 | Qs.41:42 | Qs.42:28 | Qs.57:24 | Qs.60:6 | Qs.64:6 | Qs.85:8"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Hayy (Maha Hidup)",
					"ayat" => "Qs.2:255 | Qs.3:2 | Qs.20:111 | Qs.25:58 | Qs.40:65"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Khaliq (Maha Pencipta)",
					"ayat" => "Qs.6:101 | Qs.6:102 | Qs.7:191 | Qs.13:16 | Qs.24:45 | Qs.36:81 | Qs.39:62 | Qs.40:62 | Qs.41:21 | Qs.41:37 | Qs.56:59 | Qs.59:24"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Khabir (Maha Waspada)",
					"ayat" => "Qs.2:234 | Qs.2:271 | Qs.3:153 | Qs.3:180 | Qs.4:35 | Qs.4:94 | Qs.4:128 | Qs.4:135 | Qs.5:8 | Qs.6:18 | Qs.6:73 | Qs.6:103 | Qs.9:16 | Qs.11:1 | Qs.11:111 | Qs.17:17 | Qs.17:30 | Qs.17:96 | Qs.22:63 | Qs.24:30 | Qs.24:53 | Qs.25:58 | Qs.25:59 | Qs.27:88 | Qs.31:16 | Qs.31:29 | Qs.31:34 | Qs.33:2 | Qs.33:34 | Qs.34:1 | Qs.35:31 | Qs.42:27 | Qs.48:11 | Qs.49:13 | Qs.57:10 | Qs.58:3 | Qs.58:11 | Qs.58:13 | Qs.59:18 | Qs.63:11 | Qs.64:8 | Qs.66:3 | Qs.67:14 | Qs.100:11"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Dzul Jalali Wal Ikram (Pemilik keagungan dan kemuliaan)",
					"ayat" => "Qs.55:27 | Qs.55:78"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Dzut Thaul (Maha Memberi)",
					"ayat" => "Qs.40:3"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Dzul Fadhl (Pemilik keutamaan)",
					"ayat" => "Qs.2:105 | Qs.2:243 | Qs.2:251 | Qs.3:74 | Qs.3:152 | Qs.3:164 | Qs.3:170 | Qs.3:171 | Qs.3:174 | Qs.4:54 | Qs.4:70 | Qs.4:73 | Qs.4:83 | Qs.4:113 | Qs.5:2 | Qs.5:54 | Qs.8:29 | Qs.10:60 | Qs.17:70 | Qs.27:73 | Qs.40:61 | Qs.57:21 | Qs.57:29 | Qs.62:4"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Zul Ma'arij (Pemilik tempat-tempat naik)",
					"ayat" => "Qs.70:3"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Ra'uf (Maha Kasih)",
					"ayat" => "Qs.2:143 | Qs.2:207 | Qs.3:30 | Qs.9:117 | Qs.16:7 | Qs.16:47 | Qs.22:65 | Qs.24:20 | Qs.57:9 | Qs.59:10"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Rahman (Maha Pengasih)",
					"ayat" => "Qs.1:1 | Qs.1:3 | Qs.2:163 | Qs.13:30 | Qs.17:110 | Qs.19:18 | Qs.19:26 | Qs.19:44 | Qs.19:45 | Qs.19:58 | Qs.19:61 | Qs.19:69 | Qs.19:75 | Qs.19:78 | Qs.19:85 | Qs.19:87 | Qs.19:88 | Qs.19:91 | Qs.19:92 | Qs.19:93 | Qs.19:96 | Qs.20:5 | Qs.20:90 | Qs.20:108 | Qs.20:109 | Qs.21:26 | Qs.21:36 | Qs.21:42 | Qs.21:112 | Qs.25:26 | Qs.25:59 | Qs.25:60 | Qs.25:63 | Qs.26:5 | Qs.27:30 | Qs.36:11 | Qs.36:15 | Qs.36:23 | Qs.36:52 | Qs.41:2 | Qs.43:17 | Qs.43:19 | Qs.43:20 | Qs.43:33 | Qs.43:36 | Qs.43:45 | Qs.43:81 | Qs.50:33 | Qs.55:1 | Qs.59:22 | Qs.67:3 | Qs.67:19 | Qs.67:20 | Qs.67:29 | Qs.78:37 | Qs.78:38"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Rahim (Maha Penyayang)",
					"ayat" => "Qs.1:1 | Qs.1:3 | Qs.2:37 | Qs.2:54 | Qs.2:128 | Qs.2:143 | Qs.2:160 | Qs.2:163 | Qs.2:173 | Qs.2:182 | Qs.2:192 | Qs.2:199 | Qs.2:218 | Qs.2:226 | Qs.3:31 | Qs.3:89 | Qs.3:129 | Qs.4:16 | Qs.4:23 | Qs.4:25 | Qs.4:29 | Qs.4:64 | Qs.4:96 | Qs.4:100 | Qs.4:106 | Qs.4:110 | Qs.4:129 | Qs.4:152 | Qs.5:3 | Qs.5:34 | Qs.5:39 | Qs.5:74 | Qs.5:98 | Qs.6:54 | Qs.6:133 | Qs.6:145 | Qs.6:165 | Qs.7:153 | Qs.7:167 | Qs.8:69 | Qs.8:70 | Qs.9:5 | Qs.9:27 | Qs.9:91 | Qs.9:99 | Qs.9:102 | Qs.9:104 | Qs.9:117 | Qs.9:118 | Qs.10:107 | Qs.11:41 | Qs.11:90 | Qs.12:53 | Qs.12:98 | Qs.14:36 | Qs.15:49 | Qs.16:7 | Qs.16:18 | Qs.16:47 | Qs.16:110 | Qs.16:115 | Qs.16:119 | Qs.17:66 | Qs.21:83 | Qs.22:65 | Qs.24:5 | Qs.24:20 | Qs.24:22 | Qs.24:33 | Qs.24:62 | Qs.25:6 | Qs.25:70 | Qs.26:9 | Qs.26:68 | Qs.26:104 | Qs.26:122 | Qs.26:140 | Qs.26:159 | Qs.26:175 | Qs.26:191 | Qs.26:217 | Qs.27:11 | Qs.27:30 | Qs.28:16 | Qs.30:5 | Qs.32:6 | Qs.33:5 | Qs.33:24 | Qs.33:43 | Qs.33:50 | Qs.33:59 | Qs.33:73 | Qs.34:2 | Qs.36:5 | Qs.36:58 | Qs.39:53 | Qs.41:2 | Qs.41:32 | Qs.42:5 | Qs.44:42 | Qs.46:8 | Qs.48:14 | Qs.49:5 | Qs.49:12 | Qs.49:14 | Qs.52:28 | Qs.57:9 | Qs.57:28 | Qs.58:12 | Qs.59:10 | Qs.59:22 | Qs.60:7 | Qs.60:12 | Qs.64:14 | Qs.66:1 | Qs.73:20"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Razzaq (Maha Pemberi rezeki)",
					"ayat" => "Qs.2:212 | Qs.3:37 | Qs.5:114 | Qs.7:50 | Qs.10:31 | Qs.20:132 | Qs.24:38 | Qs.27:64 | Qs.29:60 | Qs.34:24 | Qs.35:3 | Qs.42:19 | Qs.51:58 | Qs.67:21"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Raqib (Maha Pengawas)",
					"ayat" => "Qs.4:1 | Qs.5:117 | Qs.33:52"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Salam (Maha Penyelamat)",
					"ayat" => "Qs.59:23"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Sami'(Maha Pendengar)",
					"ayat" => "Qs.2:127 | Qs.2:137 | Qs.2:181 | Qs.2:224 | Qs.2:227 | Qs.2:244 | Qs.2:256 | Qs.3:34 | Qs.3:35 | Qs.3:38 | Qs.3:121 | Qs.4:58 | Qs.4:134 | Qs.4:148 | Qs.5:76 | Qs.6:13 | Qs.6:115 | Qs.7:200 | Qs.8:17 | Qs.8:42 | Qs.8:53 | Qs.8:61 | Qs.9:98 | Qs.9:103 | Qs.10:65 | Qs.12:34 | Qs.14:39 | Qs.17:1 | Qs.21:4 | Qs.22:61 | Qs.22:75 | Qs.24:21 | Qs.24:60 | Qs.26:220 | Qs.29:5 | Qs.29:60 | Qs.31:28 | Qs.34:50 | Qs.40:20 | Qs.40:56 | Qs.41:36 | Qs.42:11 | Qs.44:6 | Qs.49:1 | Qs.58:1"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Syakur (Maha Penerima syukur)",
					"ayat" => "Qs.2:158 | Qs.4:147 | Qs.35:30 | Qs.35:34 | Qs.42:23 | Qs.64:17"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Syahid (Maha Menyaksikan)",
					"ayat" => "Qs.3:98 | Qs.4:33 | Qs.4:79 | Qs.4:166 | Qs.5:117 | Qs.6:19 | Qs.10:29 | Qs.10:46 | Qs.13:43 | Qs.17:96 | Qs.22:17 | Qs.29:52 | Qs.33:55 | Qs.34:47 | Qs.41:53 | Qs.46:8 | Qs.48:28 | Qs.58:6 | Qs.85:9"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Shamad (Tuhan yang bergantung kepadanya segala sesuatu)",
					"ayat" => "Qs.112:2"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Dzahir (Maha Nampak)",
					"ayat" => "Qs.57:3"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al 'Aziz (Maha Mulia)",
					"ayat" => "Qs.2:129 | Qs.2:209 | Qs.2:220 | Qs.2:228 | Qs.2:240 | Qs.2:260 | Qs.3:4 | Qs.3:6 | Qs.3:18 | Qs.3:62 | Qs.3:126 | Qs.4:56 | Qs.4:158 | Qs.4:165 | Qs.5:38 | Qs.5:95 | Qs.5:118 | Qs.6:96 | Qs.8:10 | Qs.8:49 | Qs.8:63 | Qs.8:67 | Qs.9:40 | Qs.9:71 | Qs.10:65 | Qs.11:66 | Qs.14:1 | Qs.14:4 | Qs.14:47 | Qs.16:60 | Qs.22:40 | Qs.22:74 | Qs.26:9 | Qs.26:68 | Qs.26:104 | Qs.26:122 | Qs.26:140 | Qs.26:159 | Qs.26:175 | Qs.26:191 | Qs.26:217 | Qs.27:9 | Qs.27:78 | Qs.29:26 | Qs.29:42 | Qs.30:5 | Qs.30:27 | Qs.31:9 | Qs.31:27 | Qs.32:6 | Qs.33:25 | Qs.34:6 | Qs.34:27 | Qs.35:2 | Qs.35:28 | Qs.36:5 | Qs.36:38 | Qs.38:9 | Qs.38:66 | Qs.39:1 | Qs.39:5 | Qs.39:37 | Qs.40:2 | Qs.40:8 | Qs.40:42 | Qs.41:12 | Qs.42:3 | Qs.42:19 | Qs.43:9 | Qs.44:42 | Qs.45:2 | Qs.45:37 | Qs.46:2 | Qs.48:7 | Qs.48:19 | Qs.54:42 | Qs.57:1 | Qs.57:25 | Qs.58:21 | Qs.59:1 | Qs.59:23 | Qs.59:24 | Qs.60:5 | Qs.61:1 | Qs.62:1 | Qs.62:3 | Qs.64:18 | Qs.67:2 | Qs.85:8"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al 'Azim (Maha Agung)",
					"ayat" => "Qs.2:255 | Qs.42:4 | Qs.56:74 | Qs.56:96 | Qs.69:33 | Qs.69:52"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al 'Afwu (Maha Pemaaf)",
					"ayat" => "Qs.2:187 | Qs.3:152 | Qs.3:155 | Qs.4:31 | Qs.4:43 | Qs.4:99 | Qs.4:149 | Qs.5:95 | Qs.5:101 | Qs.22:60 | Qs.58:2"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Allamul Ghuyub (Maha Mengetahui alam gaib)",
					"ayat" => "Qs.5:109 | Qs.5:116 | Qs.9:78"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al 'Aliyy (Maha Tinggi)",
					"ayat" => "Qs.2:255 | Qs.4:34 | Qs.22:62 | Qs.31:30 | Qs.34:23 | Qs.40:12 | Qs.42:4 | Qs.42:51 | Qs.87:1"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al 'Alim (Maha megetahui)",
					"ayat" => "Qs.2:29 | Qs.2:32 | Qs.2:95 | Qs.2:115 | Qs.2:127 | Qs.2:137 | Qs.2:158 | Qs.2:181 | Qs.2:215 | Qs.2:224 | Qs.2:227 | Qs.2:231 | Qs.2:244 | Qs.2:246 | Qs.2:247 | Qs.2:256 | Qs.2:261 | Qs.2:268 | Qs.2:273 | Qs.2:282 | Qs.2:283 | Qs.3:34 | Qs.3:35 | Qs.3:63 | Qs.3:73 | Qs.3:92 | Qs.3:99 | Qs.3:115 | Qs.3:119 | Qs.3:120 | Qs.3:121 | Qs.3:154 | Qs.4:11 | Qs.4:12 | Qs.4:17 | Qs.4:24 | Qs.4:26 | Qs.4:32 | Qs.4:35 | Qs.4:39 | Qs.4:70 | Qs.4:92 | Qs.4:104 | Qs.4:111 | Qs.4:127 | Qs.4:147 | Qs.4:148 | Qs.4:170 | Qs.4:176 | Qs.5:7 | Qs.5:54 | Qs.5:76 | Qs.5:97 | Qs.6:13 | Qs.6:83 | Qs.6:96 | Qs.6:101 | Qs.6:115 | Qs.6:128 | Qs.6:139 | Qs.7:200 | Qs.8:17 | Qs.8:42 | Qs.8:43 | Qs.8:53 | Qs.8:61 | Qs.8:71 | Qs.8:75 | Qs.9:15 | Qs.9:28 | Qs.9:44 | Qs.9:47 | Qs.9:60 | Qs.9:97 | Qs.9:98 | Qs.9:103 | Qs.9:106 | Qs.9:110 | Qs.9:115 | Qs.10:36 | Qs.10:65 | Qs.11:5 | Qs.12:6 | Qs.12:19 | Qs.12:34 | Qs.12:83 | Qs.12:100 | Qs.15:25 | Qs.15:86 | Qs.16:70 | Qs.18:19 | Qs.21:4 | Qs.22:52 | Qs.22:59 | Qs.23:51 | Qs.24:18 | Qs.24:21 | Qs.24:28 | Qs.24:32 | Qs.24:35 | Qs.24:41 | Qs.24:58 | Qs.24:59 | Qs.24:60 | Qs.24:64 | Qs.26:220 | Qs.27:6 | Qs.27:74 | Qs.27:78 | Qs.28:85 | Qs.29:5 | Qs.29:52 | Qs.29:60 | Qs.29:62 | Qs.30:54 | Qs.31:23 | Qs.31:34 | Qs.33:1 | Qs.33:40 | Qs.33:51 | Qs.33:54 | Qs.34:26 | Qs.35:8 | Qs.35:38 | Qs.35:44 | Qs.36:38 | Qs.36:79 | Qs.36:81 | Qs.39:7 | Qs.40:2 | Qs.41:12 | Qs.41:36 | Qs.42:12 | Qs.42:24 | Qs.42:50 | Qs.43:9 | Qs.43:84 | Qs.44:6 | Qs.48:4 | Qs.48:26 | Qs.49:1 | Qs.49:8 | Qs.49:13 | Qs.49:16 | Qs.51:30 | Qs.57:3 | Qs.57:6 | Qs.58:7 | Qs.60:10 | Qs.62:7 | Qs.64:4 | Qs.64:11 | Qs.66:2 | Qs.66:3 | Qs.67:13 | Qs.76:30 | Qs.87:7"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Ghaffar (Maha Pemgampun)",
					"ayat" => "Qs.20:82 | Qs.38:66 | Qs.39:5 | Qs.40:3 | Qs.40:42 | Qs.71:10"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Ghafur (Maha Pengampun)",
					"ayat" => "Qs.2:173 | Qs.2:182 | Qs.2:192 | Qs.2:199 | Qs.2:218 | Qs.2:225 | Qs.2:226 | Qs.2:235 | Qs.3:31 | Qs.3:89 | Qs.3:129 | Qs.3:155 | Qs.4:23 | Qs.4:25 | Qs.4:43 | Qs.4:48 | Qs.4:96 | Qs.4:99 | Qs.4:100 | Qs.4:106 | Qs.4:110 | Qs.4:116 | Qs.4:129 | Qs.4:152 | Qs.5:3 | Qs.5:34 | Qs.5:39 | Qs.5:74 | Qs.5:98 | Qs.5:101 | Qs.6:54 | Qs.6:145 | Qs.6:165 | Qs.7:153 | Qs.7:167 | Qs.8:69 | Qs.8:70 | Qs.9:5 | Qs.9:27 | Qs.9:91 | Qs.9:99 | Qs.9:102 | Qs.10:107 | Qs.11:41 | Qs.12:53 | Qs.12:98 | Qs.14:36 | Qs.15:49 | Qs.16:18 | Qs.16:110 | Qs.16:115 | Qs.16:119 | Qs.17:25 | Qs.17:44 | Qs.18:58 | Qs.22:60 | Qs.24:5 | Qs.24:22 | Qs.24:33 | Qs.24:62 | Qs.25:6 | Qs.25:70 | Qs.27:11 | Qs.28:16 | Qs.33:5 | Qs.33:24 | Qs.33:50 | Qs.33:59 | Qs.33:73 | Qs.34:2 | Qs.34:15 | Qs.35:28 | Qs.35:30 | Qs.35:34 | Qs.35:41 | Qs.39:53 | Qs.41:32 | Qs.42:5 | Qs.42:23 | Qs.46:8 | Qs.48:14 | Qs.49:5 | Qs.49:14 | Qs.57:28 | Qs.58:2 | Qs.58:12 | Qs.60:7 | Qs.60:12 | Qs.64:14 | Qs.66:1 | Qs.67:2 | Qs.73:20 | Qs.85:14"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Ghaniy (Maha Kaya)",
					"ayat" => "Qs.2:263 | Qs.2:267 | Qs.3:97 | Qs.4:131 | Qs.6:133 | Qs.10:68 | Qs.14:8 | Qs.22:64 | Qs.27:40 | Qs.29:6 | Qs.31:12 | Qs.31:26 | Qs.35:15 | Qs.39:7 | Qs.47:38 | Qs.57:24 | Qs.60:6 | Qs.64:6"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Fattah (Maha Pembuka)",
					"ayat" => "Qs.7:89 | Qs.34:26"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Qaadir (Maha Kuasa)",
					"ayat" => "Qs.6:37 | Qs.6:65 | Qs.17:99 | Qs.23:18 | Qs.23:95 | Qs.36:81 | Qs.70:40 | Qs.75:4 | Qs.77:23 | Qs.86:8"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Qahir (Maha Pemaksa)",
					"ayat" => "Qs.6:61"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Quddus (Maha Suci)",
					"ayat" => "Qs.59:23 | Qs.62:1"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Qadiir (Maha Penguasa)",
					"ayat" => "Qs.2:20 | Qs.2:29 | Qs.2:106 | Qs.2:109 | Qs.2:148 | Qs.2:259 | Qs.2:284 | Qs.3:26 | Qs.3:29 | Qs.3:165 | Qs.3:189 | Qs.4:133 | Qs.4:149 | Qs.5:17 | Qs.5:19 | Qs.5:40 | Qs.5:120 | Qs.6:17 | Qs.8:41 | Qs.9:39 | Qs.11:4 | Qs.16:70 | Qs.16:77 | Qs.22:6 | Qs.22:39 | Qs.24:45 | Qs.25:54 | Qs.29:20 | Qs.30:50 | Qs.30:54 | Qs.33:27 | Qs.35:1 | Qs.35:44 | Qs.41:39 | Qs.42:9 | Qs.42:29 | Qs.42:50 | Qs.46:33 | Qs.48:21 | Qs.57:2 | Qs.59:6 | Qs.60:7 | Qs.64:1 | Qs.65:12 | Qs.66:8 | Qs.67:1"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Qarib (Maha Dekat)",
					"ayat" => "Qs.2:186 | Qs.11:61 | Qs.34:50"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Qahhar (Maha Pemaksa)",
					"ayat" => "Qs.6:18 | Qs.12:39 | Qs.13:16 | Qs.14:48 | Qs.38:65 | Qs.39:4 | Qs.40:16"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Hakam (Maha memberi keputusan)",
					"ayat" => "Qs.6:57 | Qs.6:62 | Qs.7:87 | Qs.12:40 | Qs.12:67 | Qs.28:70 | Qs.28:88 | Qs.40:12"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Qawiy (Maka Kuat)",
					"ayat" => "Qs.2:165 | Qs.8:52 | Qs.11:66 | Qs.22:40 | Qs.22:74 | Qs.33:25 | Qs.40:22 | Qs.42:19 | Qs.51:58 | Qs.57:25 | Qs.58:21"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Qayyum (Maha Berdiri sendiri)",
					"ayat" => "Qs.2:255 | Qs.3:2 | Qs.20:111"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Kabir (Maha Besar)",
					"ayat" => "Qs.4:34 | Qs.13:9 | Qs.22:62 | Qs.31:30 | Qs.34:23 | Qs.40:12"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Karim (Maha Mulia)",
					"ayat" => "Qs.4:40 | Qs.27:40 | Qs.82:6 | Qs.96:3"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Lathif (Maha Halus)",
					"ayat" => "Qs.6:103 | Qs.12:100 | Qs.22:63 | Qs.31:16 | Qs.33:34 | Qs.42:19 | Qs.67:14"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Mu'min (Maha mengaruniakan keamanan)",
					"ayat" => "Qs.59:23"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Muta'ali (Maha Luhur)",
					"ayat" => "Qs.7:190 | Qs.10:18 | Qs.13:9 | Qs.16:1 | Qs.20:114 | Qs.23:116 | Qs.27:63 | Qs.28:68 | Qs.30:40 | Qs.39:67"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Mutakabbir (Maha Besar)",
					"ayat" => "Qs.59:23"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Matin (Maha Kuat)",
					"ayat" => "Qs.51:58"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Mujib (Maha Pengabul doa)",
					"ayat" => "Qs.11:61"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Majid (Maha Bagus)",
					"ayat" => "Qs.11:73 | Qs.85:15"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Muhshi (Maha Penghitung)",
					"ayat" => "Qs.19:94"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Muhyi - Al Mumiit (Maha Menghidupkan dan Mematikan)",
					"ayat" => "Qs.2:28 | Qs.2:73 | Qs.2:257 | Qs.2:258 | Qs.2:259 | Qs.2:260 | Qs.3:27 | Qs.3:156 | Qs.6:95 | Qs.7:25 | Qs.7:158 | Qs.9:116 | Qs.10:31 | Qs.10:56 | Qs.15:23 | Qs.22:6 | Qs.22:66 | Qs.23:80 | Qs.25:49 | Qs.26:81 | Qs.30:19 | Qs.30:40 | Qs.30:50 | Qs.36:79 | Qs.40:68 | Qs.41:39 | Qs.42:9 | Qs.44:8 | Qs.45:26 | Qs.57:2 | Qs.57:17 | Qs.75:40"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Mushawwir (Maha Pembentuk rupa)",
					"ayat" => "Qs.20:50 | Qs.59:24"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Muqtadir (Maha Kuasa)",
					"ayat" => "Qs.18:45 | Qs.43:42 | Qs.54:42 | Qs.54:55"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Muqit (Maha Penentu waktu)",
					"ayat" => "Qs.4:85"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Malikul Mulk (Maha Pemilik kerajaan)",
					"ayat" => "Qs.1:4 | Qs.2:107 | Qs.3:26 | Qs.7:54 | Qs.7:61 | Qs.13:31"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Mubin (Maha Penjelas)",
					"ayat" => "Qs.24:25"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Muhith (Maha Mengetahui)",
					"ayat" => "Qs.2:19 | Qs.3:120 | Qs.4:108 | Qs.4:126 | Qs.8:47 | Qs.11:92 | Qs.19:94 | Qs.41:54 | Qs.85:20"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Malik (Raja)",
					"ayat" => "Qs.1:4 | Qs.20:114 | Qs.23:116 | Qs.59:23 | Qs.62:1 | Qs.114:2"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Maliik (Raja)",
					"ayat" => "Qs.54:55"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Muntaqim (Maha Pembalas dosa)",
					"ayat" => "Qs.3:4 | Qs.5:95 | Qs.32:22 | Qs.43:41 | Qs.44:16 | Qs.69:5 | Qs.69:6 | Qs.69:10 | Qs.91:14"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Muhaimin (Maha Pengawas)",
					"ayat" => "Qs.59:23"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Maula (Maha Penolong)",
					"ayat" => "Qs.2:286 | Qs.3:150 | Qs.6:62 | Qs.8:40 | Qs.9:51 | Qs.10:30 | Qs.22:78 | Qs.47:11 | Qs.66:2 | Qs.66:4"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "An Nur (Cahaya)",
					"ayat" => "Qs.24:35"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Hadi (Maha Pemberi petunjuk)",
					"ayat" => "Qs.3:73 | Qs.17:97 | Qs.22:54 | Qs.25:31 | Qs.28:50 | Qs.28:56"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Wahid (Maha Esa)",
					"ayat" => "Qs.2:133 | Qs.2:163 | Qs.4:171 | Qs.5:73 | Qs.6:19 | Qs.9:31 | Qs.12:39 | Qs.13:16 | Qs.14:48 | Qs.14:52 | Qs.16:22 | Qs.16:51 | Qs.18:110 | Qs.21:108 | Qs.22:34 | Qs.23:91 | Qs.37:4 | Qs.38:65 | Qs.39:4 | Qs.40:16 | Qs.41:6"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Warits (Yang mewariskan alam)",
					"ayat" => "Qs.15:23 | Qs.21:89 | Qs.28:58"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Wasi' (Maha Luas)",
					"ayat" => "Qs.2:115 | Qs.2:247 | Qs.2:261 | Qs.2:268 | Qs.3:73 | Qs.4:130 | Qs.5:54 | Qs.24:32 | Qs.53:32"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Wadud (Maha Kasih sayang)",
					"ayat" => "Qs.11:90 | Qs.85:14"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Wakil (Maha Penolong)",
					"ayat" => "Qs.3:173 | Qs.4:81 | Qs.4:132 | Qs.4:171 | Qs.5:11 | Qs.6:102 | Qs.11:12 | Qs.12:66 | Qs.17:65 | Qs.28:28 | Qs.33:3 | Qs.33:48 | Qs.39:62 | Qs.73:9"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Wali (Maha Pelindung)",
					"ayat" => "Qs.2:107 | Qs.2:120 | Qs.2:257 | Qs.3:68 | Qs.3:122 | Qs.4:45 | Qs.4:75 | Qs.4:123 | Qs.4:173 | Qs.5:55 | Qs.6:14 | Qs.6:127 | Qs.7:155 | Qs.7:196 | Qs.9:116 | Qs.11:20 | Qs.11:113 | Qs.12:101 | Qs.13:37 | Qs.17:97 | Qs.18:26 | Qs.29:22 | Qs.32:4 | Qs.33:17 | Qs.34:41 | Qs.42:9 | Qs.42:28 | Qs.42:31 | Qs.45:10 | Qs.45:19"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "An-Nashir (Maha Penolong)",
					"ayat" => "Qs.2:107 | Qs.2:120 | Qs.4:75 | Qs.4:123 | Qs.4:173 | Qs.8:40 | Qs.9:116 | Qs.11:63 | Qs.22:78 | Qs.29:22 | Qs.33:17 | Qs.42:31"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Al Wahhab (Maha Pemberi)",
					"ayat" => "Qs.3:8 | Qs.38:9 | Qs.38:35"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Beriman kepada Malaikat"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kewajiban beriman kepada malaikat",
					"ayat" => "Qs.2:3 | Qs.2:98 | Qs.2:177 | Qs.2:285 | Qs.4:136 | Qs.37:164"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Sifat-sifat malaikat",
					"ayat" => "Qs.6:61 | Qs.11:70 | Qs.13:13 | Qs.15:62 | Qs.16:49 | Qs.16:50 | Qs.21:26 | Qs.21:28 | Qs.35:1 | Qs.37:1 | Qs.37:164 | Qs.37:165 | Qs.37:166 | Qs.42:5 | Qs.51:24 | Qs.80:16 | Qs.81:19 | Qs.82:11"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Doa malaikat untuk umat muslim",
					"ayat" => "Qs.11:73 | Qs.33:43 | Qs.33:56 | Qs.42:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Pertemuan malaikat penjaga malam dan malaikat penjaga siang",
					"ayat" => "Qs.17:78"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Keikutsertaan malaikat dalam peperangan",
					"ayat" => "Qs.3:124 | Qs.3:125 | Qs.8:9 | Qs.8:10 | Qs.8:12 | Qs.9:26 | Qs.33:9"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Tugas-tugas malaikat",
					"ayat" => "Qs.2:30 | Qs.2:102 | Qs.2:248 | Qs.3:18 | Qs.3:39 | Qs.3:42 | Qs.3:45 | Qs.3:124 | Qs.4:97 | Qs.4:166 | Qs.6:61 | Qs.6:93 | Qs.6:158 | Qs.7:37 | Qs.7:43 | Qs.7:206 | Qs.8:50 | Qs.9:40 | Qs.10:21 | Qs.11:69 | Qs.11:70 | Qs.11:77 | Qs.11:81 | Qs.13:11 | Qs.13:13 | Qs.13:23 | Qs.13:24 | Qs.15:8 | Qs.15:46 | Qs.15:52 | Qs.15:53 | Qs.15:54 | Qs.15:55 | Qs.15:57 | Qs.15:58 | Qs.15:61 | Qs.15:63 | Qs.15:64 | Qs.15:65 | Qs.15:73 | Qs.15:74 | Qs.16:2 | Qs.16:28 | Qs.16:32 | Qs.16:33 | Qs.16:49 | Qs.16:50 | Qs.19:17 | Qs.19:19 | Qs.19:64 | Qs.21:19 | Qs.21:20 | Qs.21:27 | Qs.21:103 | Qs.22:75 | Qs.25:25 | Qs.25:75 | Qs.29:31 | Qs.29:32 | Qs.29:33 | Qs.32:11 | Qs.33:43 | Qs.35:1 | Qs.37:1 | Qs.37:2 | Qs.37:3 | Qs.37:165 | Qs.37:166 | Qs.39:75 | Qs.40:7 | Qs.41:30 | Qs.41:31 | Qs.41:38 | Qs.42:5 | Qs.42:51 | Qs.43:19 | Qs.43:80 | Qs.44:47 | Qs.44:48 | Qs.47:27 | Qs.50:16 | Qs.50:17 | Qs.50:18 | Qs.50:21 | Qs.50:23 | Qs.50:24 | Qs.50:41 | Qs.51:4 | Qs.51:24 | Qs.51:28 | Qs.51:31 | Qs.51:32 | Qs.51:33 | Qs.54:6 | Qs.54:53 | Qs.66:4 | Qs.66:6 | Qs.69:17 | Qs.72:27 | Qs.74:30 | Qs.74:31 | Qs.77:1 | Qs.77:2 | Qs.77:3 | Qs.77:4 | Qs.77:5 | Qs.77:6 | Qs.78:38 | Qs.79:1 | Qs.79:2 | Qs.79:3 | Qs.79:4 | Qs.79:5 | Qs.80:15 | Qs.82:10 | Qs.82:11 | Qs.82:12 | Qs.83:21 | Qs.86:4 | Qs.96:18 | Qs.97:4"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Jibril as."),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Peranan dan tugas Jibril",
					"ayat" => "Qs.2:97 | Qs.2:253 | Qs.5:110 | Qs.16:102 | Qs.81:19"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat Jibril",
					"ayat" => "Qs.26:193 | Qs.53:6 | Qs.81:19 | Qs.81:20 | Qs.81:21"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Permusuhan antara orang Yahudi dengan Jibril",
					"ayat" => "Qs.2:97 | Qs.2:98"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Pertemuan Jibril dan Nabi"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Pertemuan Jibril dan Nabi pada saat awal turun wahyu",
					"ayat" => "Qs.26:193 | Qs.73:1 | Qs.74:1 | Qs.81:23 | Qs.96:1 | Qs.96:2 | Qs.96:3 | Qs.96:4 | Qs.96:5"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Pengajaran Jibril kepada Nabi tentang syariat",
					"ayat" => "Qs.20:114 | Qs.53:5"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Beriman pada Kitab-kitab"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kewajiban dan keutamaan beriman pada kitab-kitab",
					"ayat" => "Qs.2:3 | Qs.2:4 | Qs.2:87 | Qs.2:136 | Qs.2:176 | Qs.2:177 | Qs.2:285 | Qs.3:7 | Qs.3:53 | Qs.3:84 | Qs.3:119 | Qs.4:136 | Qs.5:44 | Qs.5:46 | Qs.5:47 | Qs.5:59 | Qs.5:66 | Qs.5:68 | Qs.5:81 | Qs.6:154 | Qs.6:156 | Qs.17:2 | Qs.29:46 | Qs.57:27 | Qs.64:8 | Qs.87:18 | Qs.87:19"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Pengakuan antara satu kitab dengan lainnya",
					"ayat" => "Qs.2:4 | Qs.2:41 | Qs.2:89 | Qs.2:91 | Qs.2:97 | Qs.2:101 | Qs.3:3 | Qs.3:50 | Qs.3:81 | Qs.4:47 | Qs.5:46 | Qs.5:48 | Qs.6:92 | Qs.7:157 | Qs.9:111 | Qs.10:37 | Qs.12:111 | Qs.21:24 | Qs.21:105 | Qs.27:76 | Qs.35:31 | Qs.37:37 | Qs.42:13 | Qs.46:10 | Qs.46:12 | Qs.46:30 | Qs.61:6 | Qs.87:18 | Qs.87:19"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Adanya perubahan dalam beberapa kitab samawi",
					"ayat" => "Qs.2:75 | Qs.2:79 | Qs.2:174 | Qs.3:93 | Qs.6:91 | Qs.30:32"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Al Qur'an terpelihara dari penyelewengan",
					"ayat" => "Qs.15:9 | Qs.18:27 | Qs.22:52 | Qs.75:19 | Qs.85:22"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Hikmah penurunan kitab-kitab samawi",
					"ayat" => "Qs.2:2 | Qs.2:97 | Qs.2:129 | Qs.2:185 | Qs.2:213 | Qs.2:231 | Qs.2:242 | Qs.3:4 | Qs.3:101 | Qs.3:103 | Qs.3:108 | Qs.3:138 | Qs.3:164 | Qs.4:105 | Qs.4:174 | Qs.5:16 | Qs.5:46 | Qs.6:19 | Qs.6:51 | Qs.6:55 | Qs.6:70 | Qs.6:90 | Qs.6:154 | Qs.6:157 | Qs.7:2 | Qs.7:35 | Qs.7:52 | Qs.7:145 | Qs.7:154 | Qs.7:174 | Qs.7:203 | Qs.9:33 | Qs.10:57 | Qs.11:17 | Qs.12:2 | Qs.12:104 | Qs.12:111 | Qs.14:1 | Qs.16:44 | Qs.16:64 | Qs.16:89 | Qs.16:102 | Qs.17:2 | Qs.17:41 | Qs.18:2 | Qs.19:97 | Qs.20:2 | Qs.20:3 | Qs.20:99 | Qs.20:113 | Qs.21:10 | Qs.21:48 | Qs.21:106 | Qs.22:16 | Qs.23:49 | Qs.24:1 | Qs.24:34 | Qs.25:1 | Qs.25:33 | Qs.25:50 | Qs.26:209 | Qs.27:2 | Qs.28:2 | Qs.28:43 | Qs.28:86 | Qs.29:51 | Qs.31:3 | Qs.32:3 | Qs.32:23 | Qs.34:50 | Qs.36:6 | Qs.36:70 | Qs.38:29 | Qs.38:87 | Qs.39:28 | Qs.39:71 | Qs.40:53 | Qs.40:54 | Qs.43:3 | Qs.43:44 | Qs.44:58 | Qs.45:11 | Qs.46:12 | Qs.50:45 | Qs.54:17 | Qs.54:22 | Qs.54:32 | Qs.54:40 | Qs.65:10 | Qs.65:11 | Qs.68:52 | Qs.69:48 | Qs.73:19 | Qs.74:54 | Qs.76:29 | Qs.80:11 | Qs.80:12 | Qs.81:27"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Sikap manusia terhadap kitab samawi",
					"ayat" => "Qs.2:170 | Qs.2:176 | Qs.2:213 | Qs.3:4 | Qs.3:7 | Qs.3:19 | Qs.3:23 | Qs.3:78 | Qs.3:184 | Qs.4:55 | Qs.4:56 | Qs.4:140 | Qs.5:10 | Qs.5:86 | Qs.6:7 | Qs.6:25 | Qs.6:49 | Qs.6:66 | Qs.6:70 | Qs.6:89 | Qs.6:91 | Qs.6:150 | Qs.6:157 | Qs.7:9 | Qs.7:36 | Qs.7:40 | Qs.7:146 | Qs.7:157 | Qs.7:169 | Qs.7:170 | Qs.7:177 | Qs.7:182 | Qs.8:2 | Qs.8:31 | Qs.9:9 | Qs.9:65 | Qs.9:124 | Qs.9:125 | Qs.9:127 | Qs.10:15 | Qs.10:17 | Qs.10:38 | Qs.10:39 | Qs.10:40 | Qs.10:95 | Qs.13:1 | Qs.13:19 | Qs.13:36 | Qs.15:91 | Qs.16:24 | Qs.16:30 | Qs.16:103 | Qs.16:104 | Qs.16:105 | Qs.18:56 | Qs.18:57 | Qs.19:73 | Qs.21:50 | Qs.21:93 | Qs.22:72 | Qs.23:53 | Qs.23:66 | Qs.23:70 | Qs.23:71 | Qs.23:105 | Qs.25:30 | Qs.26:5 | Qs.26:198 | Qs.26:199 | Qs.26:200 | Qs.26:201 | Qs.28:49 | Qs.28:50 | Qs.28:52 | Qs.30:10 | Qs.30:32 | Qs.31:6 | Qs.31:7 | Qs.31:21 | Qs.32:3 | Qs.34:31 | Qs.34:43 | Qs.35:25 | Qs.35:43 | Qs.37:15 | Qs.39:32 | Qs.39:59 | Qs.40:70 | Qs.41:26 | Qs.41:40 | Qs.41:41 | Qs.41:44 | Qs.41:45 | Qs.41:52 | Qs.43:24 | Qs.43:78 | Qs.44:9 | Qs.45:6 | Qs.45:8 | Qs.45:9 | Qs.45:20 | Qs.45:25 | Qs.45:31 | Qs.45:35 | Qs.46:7 | Qs.46:8 | Qs.46:10 | Qs.46:11 | Qs.47:9 | Qs.50:5 | Qs.50:12 | Qs.50:14 | Qs.51:8 | Qs.52:33 | Qs.53:59 | Qs.53:60 | Qs.53:61 | Qs.56:81 | Qs.57:16 | Qs.62:5 | Qs.64:10 | Qs.68:15 | Qs.68:44 | Qs.68:51 | Qs.69:49 | Qs.74:16 | Qs.74:18 | Qs.74:21 | Qs.74:22 | Qs.74:23 | Qs.74:24 | Qs.74:25 | Qs.74:49 | Qs.78:28 | Qs.83:13"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Beriman pada Rasul-rasul"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kewajiban beriman pada para rasul",
					"ayat" => "Qs.2:3 | Qs.2:87 | Qs.2:98 | Qs.2:133 | Qs.2:136 | Qs.2:137 | Qs.2:177 | Qs.2:285 | Qs.3:53 | Qs.3:84 | Qs.3:179 | Qs.4:136 | Qs.4:150 | Qs.4:152 | Qs.4:171 | Qs.5:12 | Qs.5:111 | Qs.7:75 | Qs.23:44 | Qs.57:19 | Qs.57:21"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kewajiban patuh kepada Rasul",
					"ayat" => "Qs.3:32 | Qs.3:50 | Qs.3:132 | Qs.4:80 | Qs.5:92 | Qs.9:62 | Qs.26:163 | Qs.26:179"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Tiada pengutamaan antara para nabi",
					"ayat" => "Qs.2:136 | Qs.2:285 | Qs.3:84 | Qs.4:150 | Qs.4:152"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Beriman pada Hari Akhir"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kewajiban beriman pada hari akhir",
					"ayat" => "Qs.1:4 | Qs.2:3 | Qs.2:4 | Qs.2:46 | Qs.2:62 | Qs.2:126 | Qs.2:177 | Qs.3:9 | Qs.3:25 | Qs.3:114 | Qs.4:38 | Qs.4:39 | Qs.4:59 | Qs.4:136 | Qs.4:162 | Qs.6:113 | Qs.6:150 | Qs.6:154 | Qs.7:45 | Qs.7:147 | Qs.9:18 | Qs.9:19 | Qs.9:29 | Qs.9:99 | Qs.13:2 | Qs.13:5 | Qs.27:3 | Qs.31:4 | Qs.33:21 | Qs.56:2 | Qs.70:26 | Qs.92:6"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Nama-nama hari kiamat",
					"ayat" => "Qs.1:4 | Qs.4:38 | Qs.4:39 | Qs.4:87 | Qs.4:136 | Qs.4:162 | Qs.5:33 | Qs.5:41 | Qs.5:69 | Qs.6:15 | Qs.6:31 | Qs.6:40 | Qs.6:113 | Qs.9:29 | Qs.10:15 | Qs.19:39 | Qs.22:1 | Qs.22:55 | Qs.25:11 | Qs.30:12 | Qs.30:14 | Qs.30:55 | Qs.30:56 | Qs.31:34 | Qs.33:63 | Qs.34:3 | Qs.37:20 | Qs.37:21 | Qs.38:16 | Qs.38:26 | Qs.38:53 | Qs.38:78 | Qs.40:15 | Qs.40:18 | Qs.40:27 | Qs.40:32 | Qs.42:7 | Qs.42:18 | Qs.43:61 | Qs.43:66 | Qs.43:85 | Qs.44:40 | Qs.45:27 | Qs.45:32 | Qs.50:20 | Qs.51:6 | Qs.51:12 | Qs.53:57 | Qs.54:46 | Qs.56:1 | Qs.56:56 | Qs.64:9 | Qs.69:1 | Qs.69:2 | Qs.69:3 | Qs.69:4 | Qs.69:15 | Qs.70:26 | Qs.74:46 | Qs.77:13 | Qs.77:14 | Qs.77:38 | Qs.78:17 | Qs.79:34 | Qs.80:33 | Qs.82:15 | Qs.82:17 | Qs.82:18 | Qs.83:11 | Qs.85:2 | Qs.88:1 | Qs.101:1 | Qs.101:2 | Qs.101:3"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Mempersiapkan diri menghadapi hari kiamat",
					"ayat" => "Qs.2:48 | Qs.2:110 | Qs.2:123 | Qs.2:200 | Qs.2:201 | Qs.2:202 | Qs.2:203 | Qs.2:223 | Qs.2:254 | Qs.2:281 | Qs.3:14 | Qs.3:185 | Qs.4:134 | Qs.6:32 | Qs.6:47 | Qs.6:130 | Qs.7:8 | Qs.7:185 | Qs.7:188 | Qs.11:103 | Qs.13:21 | Qs.18:7 | Qs.18:110 | Qs.21:1 | Qs.21:111 | Qs.22:1 | Qs.26:88 | Qs.26:89 | Qs.26:102 | Qs.27:3 | Qs.27:89 | Qs.28:77 | Qs.30:43 | Qs.31:33 | Qs.32:14 | Qs.38:26 | Qs.39:54 | Qs.39:55 | Qs.40:59 | Qs.42:17 | Qs.42:47 | Qs.43:61 | Qs.52:46 | Qs.53:40 | Qs.59:18 | Qs.60:6 | Qs.63:10 | Qs.66:6 | Qs.69:20 | Qs.70:27 | Qs.70:28 | Qs.70:35 | Qs.73:19 | Qs.73:20 | Qs.74:37 | Qs.75:21 | Qs.76:7 | Qs.76:27 | Qs.76:29 | Qs.78:39 | Qs.79:40 | Qs.79:45 | Qs.81:14 | Qs.83:26 | Qs.89:24 | Qs.92:14"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kiamat telah dekat",
					"ayat" => "Qs.7:185 | Qs.16:1 | Qs.16:77 | Qs.17:51 | Qs.21:1 | Qs.21:97 | Qs.22:7 | Qs.29:5 | Qs.33:63 | Qs.42:17 | Qs.53:57 | Qs.54:1 | Qs.70:7 | Qs.78:40"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Mengingat kematian"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kematian pasti terjadi pada setiap makhluk hidup",
					"ayat" => "Qs.2:96 | Qs.2:243 | Qs.3:145 | Qs.3:156 | Qs.3:168 | Qs.3:185 | Qs.4:78 | Qs.15:99 | Qs.16:70 | Qs.21:34 | Qs.21:35 | Qs.23:15 | Qs.28:88 | Qs.29:57 | Qs.33:16 | Qs.39:30 | Qs.50:19 | Qs.55:26 | Qs.62:8 | Qs.71:4 | Qs.71:18 | Qs.74:47 | Qs.75:26 | Qs.75:27 | Qs.75:28 | Qs.75:29 | Qs.75:30 | Qs.80:21 | Qs.102:2"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Ketakutan pada kematian",
					"ayat" => "Qs.2:94 | Qs.2:95 | Qs.4:78 | Qs.23:99 | Qs.33:16 | Qs.62:8"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Mempersiapkan diri menghadapi kematian",
					"ayat" => "Qs.2:110 | Qs.2:223 | Qs.2:281 | Qs.3:185 | Qs.6:47 | Qs.7:185 | Qs.18:7 | Qs.59:18 | Qs.63:10"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Membenci kematian"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keutamaan berumur panjang",
					"ayat" => "Qs.36:68"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Tingkatan umur manusia"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Masa cepat berlalu",
					"ayat" => "Qs.10:45 | Qs.75:30"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Mencapai usia empat puluh tahun",
					"ayat" => "Qs.46:15"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Saat kematian datang (ihtidhar)"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Saat kematian seorang mukmin",
					"ayat" => "Qs.16:32 | Qs.41:30 | Qs.56:88 | Qs.56:90 | Qs.63:10 | Qs.75:26 | Qs.75:27 | Qs.75:28 | Qs.75:29"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Saat kematian orang kafir",
					"ayat" => "Qs.23:99 | Qs.23:100 | Qs.25:22 | Qs.75:26 | Qs.75:27 | Qs.75:28 | Qs.75:29"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Wasiat mayit",
					"ayat" => "Qs.5:106"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Pencabutan ruh"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Hakikat ruh",
					"ayat" => "Qs.17:85"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Pencabutan ruh saat tidur",
					"ayat" => "Qs.6:60 | Qs.39:42"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Pintu taubat terbuka hingga ruh sampai di kerongkongan",
					"ayat" => "Qs.4:18"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Cara pencabutan ruh",
					"ayat" => "Qs.39:42 | Qs.56:83"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keluarnya ruh orang mukmin",
					"ayat" => "Qs.16:32 | Qs.79:2 | Qs.89:27 | Qs.89:28"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keluarnya ruh orang kafir",
					"ayat" => "Qs.6:93 | Qs.8:50 | Qs.16:28 | Qs.47:27 | Qs.56:87 | Qs.79:1"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Tempat kembali ruh",
					"ayat" => "Qs.20:55"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Berdoa untuk mayit",
					"ayat" => "Qs.59:10"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Sholat jenazah"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Jenazah yang harus disholati"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Sholat jenazah orang munafik",
					"ayat" => "Qs.9:84"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Pemakaman dan beberapa hukum kubur"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Penimbunan tanah atas mayit",
					"ayat" => "Qs.77:25 | Qs.77:26"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kubur"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Cobaan kubur",
					"ayat" => "Qs.17:49 | Qs.50:3 | Qs.50:4 | Qs.75:3 | Qs.79:11"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Siksa kubur",
					"ayat" => "Qs.9:101 | Qs.40:46 | Qs.102:3"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Berkabung atas orang meninggal"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Perkabungan wanita dalam Islam",
					"ayat" => "Qs.2:234"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Berbicara saat berkabung",
					"ayat" => "Qs.2:234 | Qs.2:235"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Meminang wanita dalam 'iddah (sebab kematian) dengan sindiran",
					"ayat" => "Qs.2:235"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Tanda-tanda kiamat kecil"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Rasul diutus dan wafat saat kiamat telah dekat",
					"ayat" => "Qs.34:46 | Qs.47:18"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Terbelahnya bulan di masa Rasul",
					"ayat" => "Qs.47:18 | Qs.54:1"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Timbulnya fitnah"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Macam-macam fitnah",
					"ayat" => "Qs.3:14 | Qs.8:28 | Qs.9:24 | Qs.9:55 | Qs.9:85 | Qs.18:7 | Qs.18:46 | Qs.23:55 | Qs.23:56 | Qs.28:79 | Qs.42:20 | Qs.63:9 | Qs.64:14 | Qs.64:15 | Qs.72:16 | Qs.102:1"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Sikap orang mukmin terhadap fitnah",
					"ayat" => "Qs.4:59 | Qs.4:97 | Qs.5:105 | Qs.18:10 | Qs.18:16 | Qs.19:48 | Qs.19:49 | Qs.29:3 | Qs.29:56 | Qs.39:10"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Perpecahan umat Islam di akhir zaman"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Keutamaan umat nabi Muhammad",
					"ayat" => "Qs.2:286 | Qs.3:110 | Qs.35:32 | Qs.48:29"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Perintah untuk selalu bersatu",
					"ayat" => "Qs.3:103 | Qs.3:105 | Qs.3:152 | Qs.4:115 | Qs.6:153"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Akibat terpisah dari umat Islam",
					"ayat" => "Qs.4:115 | Qs.6:159 | Qs.49:9"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Abad terbaik umat Islam",
					"ayat" => "Qs.3:101 | Qs.3:110 | Qs.49:7 | Qs.56:13 | Qs.56:14 | Qs.56:39 | Qs.56:40"),
				array(
					"id_master" => 7,
					"level" => 6,
					"index" => "Perlunya saling menasehati antara sesama",
					"ayat" => "Qs.2:206 | Qs.49:9 | Qs.49:10"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Tanda-tanda kiamat besar"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Waktu kiamat tidak diketahui",
					"ayat" => "Qs.6:31 | Qs.7:187 | Qs.16:21 | Qs.43:85 | Qs.67:26 | Qs.72:25 | Qs.78:17 | Qs.79:42 | Qs.79:43 | Qs.79:44"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Beriman ketika datang hari kiamat",
					"ayat" => "Qs.6:158 | Qs.7:53 | Qs.10:97 | Qs.30:43 | Qs.32:29 | Qs.34:52 | Qs.40:84 | Qs.40:85 | Qs.44:12 | Qs.47:18"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Timbulnya awan sebelum kiamat",
					"ayat" => "Qs.6:158 | Qs.44:10 | Qs.44:11"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Turunnya nabi Isa sebelum kiamat",
					"ayat" => "Qs.4:159 | Qs.6:158 | Qs.43:61"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Munculnya Ya'juj dan Ma'juj sebelum kiamat",
					"ayat" => "Qs.6:158 | Qs.18:98 | Qs.18:99 | Qs.21:96"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Matahari terbit dari sebelah Barat",
					"ayat" => "Qs.6:158"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Munculnya binatang melata sebelum kiamat",
					"ayat" => "Qs.6:158 | Qs.27:82"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Neraka tempat digiringnya manusia",
					"ayat" => "Qs.6:158"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Hari kiamat"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kepastian hari kiamat",
					"ayat" => "Qs.2:113 | Qs.6:134 | Qs.18:21 | Qs.22:7 | Qs.56:2 | Qs.70:1 | Qs.70:2"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Peniupan sangkakala",
					"ayat" => "Qs.6:73 | Qs.18:99 | Qs.20:102 | Qs.23:101 | Qs.27:87 | Qs.36:49 | Qs.36:51 | Qs.36:53 | Qs.37:19 | Qs.38:15 | Qs.39:68 | Qs.50:20 | Qs.50:42 | Qs.69:13 | Qs.74:8 | Qs.78:18 | Qs.79:6 | Qs.79:7 | Qs.79:13"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Hari tersingkapnya betis",
					"ayat" => "Qs.68:42"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Hari kiamat datang tiba-tiba",
					"ayat" => "Qs.7:187 | Qs.12:107 | Qs.19:75 | Qs.20:15 | Qs.21:40 | Qs.22:55 | Qs.26:202 | Qs.33:63 | Qs.36:49 | Qs.38:15 | Qs.39:55 | Qs.43:66 | Qs.47:18 | Qs.67:27"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kedahsyatan hari kiamat",
					"ayat" => "Qs.2:210 | Qs.6:27 | Qs.6:30 | Qs.6:158 | Qs.7:59 | Qs.14:42 | Qs.14:43 | Qs.14:48 | Qs.14:49 | Qs.14:50 | Qs.18:47 | Qs.18:53 | Qs.18:99 | Qs.20:105 | Qs.20:106 | Qs.20:107 | Qs.20:108 | Qs.21:104 | Qs.22:1 | Qs.22:2 | Qs.23:101 | Qs.24:37 | Qs.25:12 | Qs.25:25 | Qs.26:91 | Qs.26:135 | Qs.26:156 | Qs.27:66 | Qs.27:87 | Qs.27:88 | Qs.28:66 | Qs.28:75 | Qs.29:55 | Qs.30:14 | Qs.31:33 | Qs.34:23 | Qs.34:51 | Qs.36:50 | Qs.39:67 | Qs.39:68 | Qs.40:18 | Qs.40:33 | Qs.42:47 | Qs.44:10 | Qs.44:11 | Qs.44:16 | Qs.50:44 | Qs.52:9 | Qs.52:10 | Qs.52:11 | Qs.54:7 | Qs.54:8 | Qs.54:46 | Qs.55:35 | Qs.55:37 | Qs.56:4 | Qs.56:5 | Qs.56:6 | Qs.57:13 | Qs.68:42 | Qs.69:14 | Qs.69:15 | Qs.69:16 | Qs.69:17 | Qs.70:8 | Qs.70:9 | Qs.73:14 | Qs.73:17 | Qs.73:18 | Qs.74:9 | Qs.74:10 | Qs.75:7 | Qs.75:8 | Qs.75:9 | Qs.75:10 | Qs.75:11 | Qs.76:7 | Qs.76:10 | Qs.76:27 | Qs.77:8 | Qs.77:9 | Qs.77:10 | Qs.77:14 | Qs.77:15 | Qs.77:19 | Qs.77:24 | Qs.77:28 | Qs.77:30 | Qs.77:31 | Qs.77:32 | Qs.77:33 | Qs.77:34 | Qs.77:37 | Qs.77:40 | Qs.77:45 | Qs.77:47 | Qs.77:49 | Qs.78:19 | Qs.78:20 | Qs.79:6 | Qs.79:7 | Qs.79:36 | Qs.79:46 | Qs.80:34 | Qs.80:35 | Qs.80:36 | Qs.80:37 | Qs.81:1 | Qs.81:2 | Qs.81:3 | Qs.81:4 | Qs.81:5 | Qs.81:6 | Qs.81:7 | Qs.81:10 | Qs.81:11 | Qs.81:12 | Qs.82:1 | Qs.82:2 | Qs.82:3 | Qs.82:17 | Qs.82:18 | Qs.83:5 | Qs.83:10 | Qs.84:1 | Qs.84:2 | Qs.84:3 | Qs.84:4 | Qs.84:5 | Qs.86:9 | Qs.86:10 | Qs.89:21 | Qs.89:22 | Qs.89:23 | Qs.99:1 | Qs.99:3 | Qs.99:4 | Qs.99:5 | Qs.101:4 | Qs.101:5"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Terputusnya hubungan antara sesama pada hari kiamat",
					"ayat" => "Qs.2:48 | Qs.2:123 | Qs.2:166 | Qs.2:254 | Qs.3:10 | Qs.3:116 | Qs.4:109 | Qs.4:173 | Qs.6:94 | Qs.14:31 | Qs.16:111 | Qs.19:80 | Qs.19:95 | Qs.23:101 | Qs.28:66 | Qs.33:65 | Qs.34:31 | Qs.34:32 | Qs.35:18 | Qs.36:50 | Qs.37:25 | Qs.38:64 | Qs.39:31 | Qs.40:18 | Qs.42:46 | Qs.44:41 | Qs.58:17 | Qs.60:3 | Qs.69:35 | Qs.70:10 | Qs.80:34 | Qs.80:35 | Qs.80:36 | Qs.80:37 | Qs.82:19"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Derajat para pemeluk agama",
					"ayat" => "Qs.11:105 | Qs.22:17 | Qs.36:59 | Qs.38:28 | Qs.38:62 | Qs.38:63 | Qs.39:60 | Qs.40:58 | Qs.42:7 | Qs.45:21 | Qs.56:3 | Qs.56:9 | Qs.66:8 | Qs.68:35 | Qs.79:37 | Qs.82:13 | Qs.82:14 | Qs.83:18 | Qs.84:7"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Orang kafir menebus dirinya pada hari kiamat",
					"ayat" => "Qs.2:48 | Qs.3:10 | Qs.3:30 | Qs.3:91 | Qs.3:116 | Qs.5:36 | Qs.6:70 | Qs.10:54 | Qs.13:18 | Qs.39:47 | Qs.57:15 | Qs.70:11 | Qs.70:12 | Qs.70:13 | Qs.70:14 | Qs.92:11 | Qs.111:2"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Hari Kebangkitan"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Mengingkari hari kebangkitan",
					"ayat" => "Qs.4:38 | Qs.6:2 | Qs.6:29 | Qs.6:30 | Qs.6:31 | Qs.6:150 | Qs.7:45 | Qs.7:51 | Qs.7:147 | Qs.10:7 | Qs.10:11 | Qs.10:15 | Qs.10:45 | Qs.10:48 | Qs.10:53 | Qs.11:7 | Qs.11:19 | Qs.13:5 | Qs.14:44 | Qs.16:22 | Qs.16:38 | Qs.17:49 | Qs.17:51 | Qs.17:98 | Qs.18:35 | Qs.18:36 | Qs.18:48 | Qs.18:105 | Qs.19:66 | Qs.21:38 | Qs.22:51 | Qs.23:35 | Qs.23:36 | Qs.23:37 | Qs.23:81 | Qs.23:82 | Qs.23:83 | Qs.25:11 | Qs.25:40 | Qs.26:138 | Qs.27:4 | Qs.27:66 | Qs.27:67 | Qs.27:68 | Qs.27:71 | Qs.28:39 | Qs.29:23 | Qs.30:8 | Qs.30:16 | Qs.32:10 | Qs.32:14 | Qs.34:3 | Qs.34:7 | Qs.34:29 | Qs.34:31 | Qs.34:54 | Qs.36:48 | Qs.36:78 | Qs.37:16 | Qs.37:52 | Qs.37:53 | Qs.41:50 | Qs.41:54 | Qs.42:18 | Qs.44:35 | Qs.44:36 | Qs.45:24 | Qs.45:25 | Qs.45:32 | Qs.45:33 | Qs.46:17 | Qs.46:18 | Qs.50:3 | Qs.50:15 | Qs.51:12 | Qs.52:14 | Qs.52:15 | Qs.56:47 | Qs.56:48 | Qs.56:57 | Qs.56:86 | Qs.56:87 | Qs.57:14 | Qs.64:7 | Qs.67:25 | Qs.67:27 | Qs.70:6 | Qs.74:46 | Qs.74:53 | Qs.75:3 | Qs.75:5 | Qs.75:6 | Qs.75:21 | Qs.75:36 | Qs.77:29 | Qs.78:1 | Qs.78:2 | Qs.78:3 | Qs.78:27 | Qs.79:10 | Qs.79:11 | Qs.79:12 | Qs.82:9 | Qs.83:11 | Qs.83:12 | Qs.83:17 | Qs.84:14 | Qs.92:9 | Qs.95:7 | Qs.107:1"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Beberapa ayat yang menjelaskan tentang hari kebangkitan",
					"ayat" => "Qs.2:56 | Qs.2:73 | Qs.2:164 | Qs.2:243 | Qs.2:259 | Qs.2:260 | Qs.3:27 | Qs.6:2 | Qs.6:95 | Qs.7:29 | Qs.7:57 | Qs.10:4 | Qs.10:31 | Qs.10:34 | Qs.15:23 | Qs.16:70 | Qs.17:51 | Qs.21:104 | Qs.22:5 | Qs.22:63 | Qs.23:16 | Qs.23:100 | Qs.23:101 | Qs.27:64 | Qs.29:19 | Qs.30:19 | Qs.30:24 | Qs.30:25 | Qs.30:27 | Qs.30:40 | Qs.30:50 | Qs.30:56 | Qs.31:28 | Qs.32:11 | Qs.34:3 | Qs.35:9 | Qs.36:12 | Qs.36:33 | Qs.36:51 | Qs.36:52 | Qs.36:53 | Qs.36:79 | Qs.36:81 | Qs.37:18 | Qs.39:21 | Qs.40:11 | Qs.41:21 | Qs.41:39 | Qs.42:9 | Qs.43:11 | Qs.45:5 | Qs.45:26 | Qs.46:33 | Qs.50:11 | Qs.50:15 | Qs.53:44 | Qs.56:57 | Qs.57:17 | Qs.75:40 | Qs.78:15 | Qs.78:18 | Qs.80:22 | Qs.80:26 | Qs.85:13 | Qs.86:8 | Qs.87:5"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Manusia dibangkitkan dari kubur",
					"ayat" => "Qs.2:28 | Qs.2:148 | Qs.6:36 | Qs.7:25 | Qs.10:53 | Qs.14:21 | Qs.16:38 | Qs.16:84 | Qs.17:51 | Qs.17:52 | Qs.17:80 | Qs.20:55 | Qs.22:6 | Qs.22:7 | Qs.22:66 | Qs.23:16 | Qs.23:115 | Qs.26:50 | Qs.26:87 | Qs.27:64 | Qs.27:65 | Qs.27:87 | Qs.28:70 | Qs.29:19 | Qs.29:20 | Qs.30:25 | Qs.30:50 | Qs.30:56 | Qs.31:28 | Qs.32:11 | Qs.35:9 | Qs.36:51 | Qs.36:52 | Qs.36:53 | Qs.37:18 | Qs.37:19 | Qs.38:79 | Qs.39:7 | Qs.39:44 | Qs.39:68 | Qs.40:11 | Qs.40:43 | Qs.41:39 | Qs.42:9 | Qs.43:11 | Qs.46:33 | Qs.50:11 | Qs.50:41 | Qs.50:42 | Qs.50:43 | Qs.50:44 | Qs.53:47 | Qs.54:7 | Qs.56:49 | Qs.56:50 | Qs.58:6 | Qs.58:18 | Qs.60:4 | Qs.64:7 | Qs.67:24 | Qs.70:43 | Qs.71:18 | Qs.75:3 | Qs.79:14 | Qs.80:22 | Qs.80:23 | Qs.82:4 | Qs.83:4 | Qs.85:13 | Qs.86:8 | Qs.99:2 | Qs.99:6 | Qs.100:9"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Pedihnya penderitaan manusia pada hari kebangkitan",
					"ayat" => "Qs.6:27 | Qs.6:28 | Qs.6:30 | Qs.14:21 | Qs.20:108 | Qs.27:87 | Qs.54:7"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Orang yang tidak diajak bicara oleh Allah pada hari kebangkitan",
					"ayat" => "Qs.2:174 | Qs.3:77"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Padang mahsyar (penghimpunan)"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kebenaran hari penghimpunan",
					"ayat" => "Qs.2:28 | Qs.2:46 | Qs.2:148 | Qs.2:203 | Qs.2:223 | Qs.2:245 | Qs.2:281 | Qs.3:9 | Qs.3:25 | Qs.3:28 | Qs.3:30 | Qs.3:55 | Qs.3:83 | Qs.3:109 | Qs.3:158 | Qs.3:194 | Qs.4:42 | Qs.4:87 | Qs.4:172 | Qs.5:48 | Qs.5:96 | Qs.5:105 | Qs.5:109 | Qs.6:12 | Qs.6:22 | Qs.6:36 | Qs.6:38 | Qs.6:51 | Qs.6:60 | Qs.6:72 | Qs.6:108 | Qs.6:128 | Qs.6:159 | Qs.6:164 | Qs.8:24 | Qs.9:105 | Qs.10:4 | Qs.10:23 | Qs.10:28 | Qs.10:45 | Qs.10:46 | Qs.10:55 | Qs.10:56 | Qs.10:70 | Qs.11:4 | Qs.11:34 | Qs.11:103 | Qs.11:123 | Qs.13:31 | Qs.14:21 | Qs.14:42 | Qs.14:48 | Qs.15:25 | Qs.15:85 | Qs.16:27 | Qs.16:111 | Qs.17:71 | Qs.17:97 | Qs.18:47 | Qs.18:99 | Qs.19:40 | Qs.19:68 | Qs.19:93 | Qs.19:95 | Qs.20:102 | Qs.21:35 | Qs.21:93 | Qs.22:7 | Qs.23:79 | Qs.24:42 | Qs.24:64 | Qs.27:83 | Qs.28:88 | Qs.29:5 | Qs.29:8 | Qs.29:17 | Qs.29:21 | Qs.29:57 | Qs.30:11 | Qs.30:43 | Qs.31:14 | Qs.31:15 | Qs.31:23 | Qs.34:26 | Qs.34:30 | Qs.35:5 | Qs.35:18 | Qs.36:22 | Qs.36:32 | Qs.36:83 | Qs.37:21 | Qs.39:7 | Qs.40:3 | Qs.40:16 | Qs.40:59 | Qs.40:77 | Qs.40:78 | Qs.41:19 | Qs.42:7 | Qs.42:15 | Qs.42:18 | Qs.42:29 | Qs.42:53 | Qs.43:14 | Qs.43:85 | Qs.44:40 | Qs.45:15 | Qs.45:26 | Qs.45:32 | Qs.46:6 | Qs.50:43 | Qs.50:44 | Qs.51:6 | Qs.51:23 | Qs.51:60 | Qs.53:42 | Qs.54:8 | Qs.56:49 | Qs.56:50 | Qs.56:95 | Qs.57:5 | Qs.58:9 | Qs.60:4 | Qs.62:8 | Qs.64:3 | Qs.64:9 | Qs.67:15 | Qs.67:24 | Qs.70:26 | Qs.75:12 | Qs.77:7 | Qs.77:38 | Qs.78:39 | Qs.80:22 | Qs.83:4 | Qs.84:6 | Qs.86:13 | Qs.86:14 | Qs.88:25 | Qs.96:8"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Penghimpunan manusia dan keadaan mereka",
					"ayat" => "Qs.3:106 | Qs.3:107 | Qs.6:94 | Qs.8:37 | Qs.10:26 | Qs.14:21 | Qs.16:111 | Qs.17:71 | Qs.17:97 | Qs.18:47 | Qs.18:48 | Qs.19:68 | Qs.19:85 | Qs.21:103 | Qs.22:2 | Qs.23:101 | Qs.28:74 | Qs.30:14 | Qs.37:22 | Qs.39:31 | Qs.40:16 | Qs.45:28 | Qs.50:21 | Qs.50:22 | Qs.56:7 | Qs.56:8 | Qs.56:9 | Qs.56:10 | Qs.66:8 | Qs.75:10 | Qs.75:22 | Qs.78:18 | Qs.78:37 | Qs.78:38 | Qs.79:35 | Qs.80:34 | Qs.80:35 | Qs.80:36 | Qs.80:37 | Qs.80:38 | Qs.80:40 | Qs.80:41 | Qs.83:6 | Qs.84:7 | Qs.84:10 | Qs.88:8 | Qs.88:9 | Qs.89:23 | Qs.99:6 | Qs.100:11 | Qs.101:4"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Para makhluk sujud kepada Allah",
					"ayat" => "Qs.20:111 | Qs.68:42"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keadaan orang kafir pada hari penghimpunan",
					"ayat" => "Qs.2:123 | Qs.2:166 | Qs.2:167 | Qs.2:254 | Qs.3:106 | Qs.3:116 | Qs.3:192 | Qs.4:42 | Qs.4:123 | Qs.6:23 | Qs.6:24 | Qs.6:27 | Qs.6:28 | Qs.6:30 | Qs.6:31 | Qs.6:94 | Qs.7:53 | Qs.10:27 | Qs.10:54 | Qs.13:5 | Qs.14:21 | Qs.14:42 | Qs.14:43 | Qs.14:44 | Qs.14:49 | Qs.14:50 | Qs.15:2 | Qs.16:25 | Qs.16:27 | Qs.16:84 | Qs.16:85 | Qs.16:86 | Qs.16:87 | Qs.16:88 | Qs.17:97 | Qs.18:53 | Qs.18:100 | Qs.19:82 | Qs.19:86 | Qs.20:102 | Qs.20:103 | Qs.20:124 | Qs.20:125 | Qs.20:126 | Qs.21:97 | Qs.23:77 | Qs.24:39 | Qs.25:17 | Qs.25:26 | Qs.25:27 | Qs.25:28 | Qs.25:29 | Qs.26:100 | Qs.26:101 | Qs.26:102 | Qs.27:5 | Qs.27:83 | Qs.27:85 | Qs.28:41 | Qs.28:42 | Qs.28:74 | Qs.28:75 | Qs.30:12 | Qs.30:57 | Qs.32:12 | Qs.34:23 | Qs.34:31 | Qs.34:32 | Qs.34:33 | Qs.34:40 | Qs.37:18 | Qs.37:20 | Qs.37:26 | Qs.37:27 | Qs.37:28 | Qs.37:29 | Qs.37:30 | Qs.37:31 | Qs.37:33 | Qs.39:56 | Qs.39:57 | Qs.39:58 | Qs.39:60 | Qs.40:18 | Qs.40:33 | Qs.41:19 | Qs.41:48 | Qs.42:22 | Qs.42:44 | Qs.42:45 | Qs.43:38 | Qs.43:39 | Qs.44:12 | Qs.46:20 | Qs.50:27 | Qs.50:28 | Qs.52:46 | Qs.54:8 | Qs.54:48 | Qs.55:41 | Qs.57:13 | Qs.66:7 | Qs.67:27 | Qs.68:42 | Qs.68:43 | Qs.69:25 | Qs.69:26 | Qs.69:27 | Qs.69:28 | Qs.69:29 | Qs.70:44 | Qs.72:24 | Qs.74:10 | Qs.75:24 | Qs.75:25 | Qs.77:35 | Qs.77:36 | Qs.77:39 | Qs.78:40 | Qs.79:8 | Qs.79:9 | Qs.79:46 | Qs.80:40 | Qs.80:41 | Qs.80:42 | Qs.83:15 | Qs.84:10 | Qs.84:11 | Qs.84:12 | Qs.87:12 | Qs.87:13 | Qs.88:2 | Qs.88:3 | Qs.89:24 | Qs.92:11 | Qs.104:4"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Terputusnya hubungan antara orang musyrik dengan tuhan mereka",
					"ayat" => "Qs.2:166 | Qs.2:167 | Qs.3:192 | Qs.4:123 | Qs.4:173 | Qs.6:22 | Qs.6:94 | Qs.7:37 | Qs.7:53 | Qs.10:28 | Qs.10:29 | Qs.10:30 | Qs.14:21 | Qs.16:86 | Qs.17:56 | Qs.18:52 | Qs.19:82 | Qs.26:93 | Qs.26:100 | Qs.26:101 | Qs.28:62 | Qs.28:63 | Qs.28:64 | Qs.28:74 | Qs.28:75 | Qs.29:25 | Qs.30:13 | Qs.33:65 | Qs.34:42 | Qs.35:14 | Qs.37:25 | Qs.37:30 | Qs.40:18 | Qs.40:43 | Qs.40:73 | Qs.40:74 | Qs.41:29 | Qs.41:48 | Qs.42:8 | Qs.42:44 | Qs.42:46 | Qs.43:67 | Qs.45:10 | Qs.46:6 | Qs.59:16"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Setiap umat mengikuti apa yang telah mereka sembah",
					"ayat" => "Qs.11:98 | Qs.37:22"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Setiap umat mengikuti nabi-nabi mereka",
					"ayat" => "Qs.4:41"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Hari penghitungan (amal)"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Setiap makhluk ditanya pada hari penghimpunan",
					"ayat" => "Qs.3:30 | Qs.4:42 | Qs.5:109 | Qs.6:22 | Qs.6:30 | Qs.6:128 | Qs.6:130 | Qs.7:6 | Qs.15:92 | Qs.15:93 | Qs.16:27 | Qs.16:56 | Qs.16:93 | Qs.17:36 | Qs.25:17 | Qs.26:92 | Qs.27:84 | Qs.28:62 | Qs.28:63 | Qs.28:65 | Qs.28:74 | Qs.28:75 | Qs.29:13 | Qs.34:40 | Qs.34:41 | Qs.37:24 | Qs.41:47 | Qs.43:19 | Qs.43:44 | Qs.46:34 | Qs.51:6 | Qs.55:39 | Qs.67:8 | Qs.81:8 | Qs.81:9 | Qs.84:8 | Qs.88:26"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Lembaran catatan amal perbuatan",
					"ayat" => "Qs.3:30 | Qs.7:7 | Qs.10:61 | Qs.17:13 | Qs.17:14 | Qs.17:71 | Qs.18:49 | Qs.21:47 | Qs.22:70 | Qs.23:62 | Qs.36:12 | Qs.39:69 | Qs.45:28 | Qs.45:29 | Qs.54:52 | Qs.54:53 | Qs.69:19 | Qs.69:25 | Qs.74:52 | Qs.78:29 | Qs.80:13 | Qs.80:14 | Qs.81:10 | Qs.81:14 | Qs.82:5 | Qs.84:7 | Qs.84:10"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Penimbangan amal perbuatan",
					"ayat" => "Qs.7:8 | Qs.7:9 | Qs.23:102 | Qs.23:103 | Qs.99:7 | Qs.99:8 | Qs.101:6 | Qs.101:8"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Manusia bersaksi atas dirinya",
					"ayat" => "Qs.6:130 | Qs.24:24 | Qs.36:65 | Qs.41:20 | Qs.41:21 | Qs.41:22 | Qs.50:21 | Qs.75:14 | Qs.75:15"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat hari penghitungan",
					"ayat" => "Qs.4:41 | Qs.11:103 | Qs.11:105 | Qs.13:18 | Qs.13:41 | Qs.14:48 | Qs.14:51 | Qs.16:84 | Qs.16:85 | Qs.16:124 | Qs.18:48 | Qs.18:49 | Qs.18:99 | Qs.18:100 | Qs.19:75 | Qs.22:69 | Qs.26:90 | Qs.26:91 | Qs.27:84 | Qs.27:85 | Qs.28:66 | Qs.28:75 | Qs.29:13 | Qs.29:25 | Qs.30:57 | Qs.32:12 | Qs.32:25 | Qs.36:59 | Qs.36:65 | Qs.37:25 | Qs.37:27 | Qs.37:28 | Qs.37:29 | Qs.37:30 | Qs.37:31 | Qs.39:31 | Qs.39:47 | Qs.39:48 | Qs.39:69 | Qs.39:70 | Qs.40:17 | Qs.41:20 | Qs.41:47 | Qs.42:7 | Qs.43:67 | Qs.44:41 | Qs.44:42 | Qs.45:17 | Qs.45:34 | Qs.50:21 | Qs.50:22 | Qs.50:23 | Qs.50:24 | Qs.50:26 | Qs.50:29 | Qs.50:30 | Qs.50:31 | Qs.50:41 | Qs.50:42 | Qs.50:44 | Qs.50:45 | Qs.52:46 | Qs.54:6 | Qs.69:13 | Qs.69:14 | Qs.69:15 | Qs.69:16 | Qs.69:17 | Qs.69:18 | Qs.69:19 | Qs.69:20 | Qs.69:25 | Qs.69:26 | Qs.69:27 | Qs.69:28 | Qs.69:29 | Qs.70:8 | Qs.70:9 | Qs.70:10 | Qs.70:11 | Qs.70:12 | Qs.70:13 | Qs.70:14 | Qs.75:13 | Qs.75:14 | Qs.75:15 | Qs.77:11 | Qs.77:12 | Qs.77:35 | Qs.77:36 | Qs.78:37 | Qs.78:38 | Qs.78:40 | Qs.79:4 | Qs.79:6 | Qs.79:7 | Qs.79:13 | Qs.79:36 | Qs.81:8 | Qs.81:9 | Qs.81:10 | Qs.81:11 | Qs.81:13 | Qs.81:14 | Qs.82:4 | Qs.82:5 | Qs.82:19 | Qs.83:5 | Qs.83:6 | Qs.84:1 | Qs.84:2 | Qs.84:3 | Qs.84:4 | Qs.84:5 | Qs.86:9 | Qs.86:10 | Qs.89:21 | Qs.89:22 | Qs.89:23 | Qs.99:1 | Qs.99:2 | Qs.99:3 | Qs.99:4 | Qs.99:5 | Qs.99:6 | Qs.101:4 | Qs.101:5"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keadilan Allah dalam menghakimi",
					"ayat" => "Qs.2:48 | Qs.2:123 | Qs.2:134 | Qs.2:141 | Qs.2:272 | Qs.2:279 | Qs.2:281 | Qs.2:286 | Qs.3:25 | Qs.3:55 | Qs.3:57 | Qs.3:108 | Qs.3:115 | Qs.3:117 | Qs.3:128 | Qs.3:161 | Qs.3:171 | Qs.3:182 | Qs.3:185 | Qs.4:40 | Qs.4:49 | Qs.4:77 | Qs.4:123 | Qs.4:124 | Qs.6:30 | Qs.6:49 | Qs.6:70 | Qs.6:131 | Qs.6:160 | Qs.6:164 | Qs.7:6 | Qs.7:8 | Qs.7:9 | Qs.7:39 | Qs.7:96 | Qs.7:100 | Qs.7:136 | Qs.7:147 | Qs.7:162 | Qs.7:163 | Qs.7:165 | Qs.7:170 | Qs.7:176 | Qs.7:180 | Qs.8:42 | Qs.8:51 | Qs.8:52 | Qs.8:53 | Qs.8:54 | Qs.8:60 | Qs.10:4 | Qs.10:27 | Qs.10:30 | Qs.10:44 | Qs.10:47 | Qs.10:52 | Qs.10:54 | Qs.10:109 | Qs.11:24 | Qs.11:101 | Qs.11:109 | Qs.14:51 | Qs.16:33 | Qs.16:111 | Qs.16:118 | Qs.16:124 | Qs.17:14 | Qs.17:15 | Qs.17:71 | Qs.18:30 | Qs.18:49 | Qs.19:60 | Qs.20:112 | Qs.21:47 | Qs.21:94 | Qs.22:10 | Qs.24:25 | Qs.27:78 | Qs.27:90 | Qs.28:59 | Qs.28:84 | Qs.29:14 | Qs.29:31 | Qs.29:34 | Qs.29:40 | Qs.29:55 | Qs.30:9 | Qs.32:18 | Qs.32:25 | Qs.34:25 | Qs.34:26 | Qs.34:33 | Qs.35:18 | Qs.36:54 | Qs.38:28 | Qs.39:7 | Qs.39:9 | Qs.39:29 | Qs.39:69 | Qs.39:70 | Qs.39:75 | Qs.40:17 | Qs.40:20 | Qs.40:48 | Qs.41:46 | Qs.43:76 | Qs.45:21 | Qs.45:22 | Qs.45:28 | Qs.45:33 | Qs.46:19 | Qs.49:14 | Qs.50:29 | Qs.52:16 | Qs.52:21 | Qs.53:31 | Qs.53:41 | Qs.66:7 | Qs.68:35 | Qs.78:26 | Qs.95:8 | Qs.99:7 | Qs.99:8"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Jembatan"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Menyeberangi jembatan",
					"ayat" => "Qs.19:71"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keadaan orang mukmin saat menyeberang",
					"ayat" => "Qs.19:72 | Qs.57:12"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keadaan orang kafir saat menyeberang",
					"ayat" => "Qs.37:23"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Syafaat"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Yang memiliki syafaat pada hari kiamat"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Syafaat hanya milik Allah semata",
					"ayat" => "Qs.2:255 | Qs.20:109 | Qs.39:44 | Qs.53:26 | Qs.82:19"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Syafaat para nabi dan malaikat",
					"ayat" => "Qs.21:28 | Qs.53:26"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Mereka yang memperoleh syafaat",
					"ayat" => "Qs.19:87 | Qs.20:109 | Qs.43:86"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Surga"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Nama-nama surga",
					"ayat" => "Qs.4:95 | Qs.6:127 | Qs.9:72 | Qs.10:9 | Qs.10:25 | Qs.13:18 | Qs.13:23 | Qs.13:29 | Qs.16:30 | Qs.16:31 | Qs.16:62 | Qs.18:31 | Qs.18:88 | Qs.18:107 | Qs.19:61 | Qs.20:76 | Qs.21:101 | Qs.22:56 | Qs.23:11 | Qs.25:15 | Qs.25:75 | Qs.26:85 | Qs.31:8 | Qs.35:33 | Qs.35:35 | Qs.37:43 | Qs.38:50 | Qs.40:8 | Qs.40:39 | Qs.41:50 | Qs.56:12 | Qs.56:89 | Qs.57:10 | Qs.61:12 | Qs.68:34 | Qs.69:22 | Qs.70:38 | Qs.88:10 | Qs.92:6 | Qs.92:9 | Qs.98:8"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keabadian surga",
					"ayat" => "Qs.2:25 | Qs.2:82 | Qs.3:15 | Qs.3:107 | Qs.3:136 | Qs.3:198 | Qs.4:13 | Qs.4:57 | Qs.4:122 | Qs.5:85 | Qs.5:119 | Qs.7:42 | Qs.9:21 | Qs.9:22 | Qs.9:72 | Qs.9:89 | Qs.9:100 | Qs.10:26 | Qs.11:23 | Qs.11:108 | Qs.13:35 | Qs.14:23 | Qs.15:48 | Qs.18:3 | Qs.18:108 | Qs.19:61 | Qs.20:76 | Qs.21:102 | Qs.23:11 | Qs.25:15 | Qs.25:16 | Qs.25:76 | Qs.29:58 | Qs.31:9 | Qs.37:58 | Qs.37:59 | Qs.38:54 | Qs.39:73 | Qs.40:8 | Qs.40:39 | Qs.42:36 | Qs.43:71 | Qs.44:56 | Qs.46:14 | Qs.48:5 | Qs.50:34 | Qs.57:12 | Qs.58:22 | Qs.64:9 | Qs.65:11 | Qs.98:8"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat surga dan kenikmatannya",
					"ayat" => "Qs.2:25 | Qs.3:15 | Qs.3:133 | Qs.3:136 | Qs.3:195 | Qs.3:198 | Qs.4:13 | Qs.4:57 | Qs.4:122 | Qs.5:12 | Qs.5:85 | Qs.5:119 | Qs.7:43 | Qs.9:21 | Qs.9:22 | Qs.9:72 | Qs.9:89 | Qs.9:100 | Qs.10:9 | Qs.11:108 | Qs.13:23 | Qs.13:29 | Qs.13:35 | Qs.14:23 | Qs.15:45 | Qs.15:47 | Qs.15:48 | Qs.16:30 | Qs.16:31 | Qs.18:31 | Qs.19:62 | Qs.20:76 | Qs.20:118 | Qs.20:119 | Qs.21:102 | Qs.22:14 | Qs.22:23 | Qs.25:10 | Qs.25:16 | Qs.25:24 | Qs.25:76 | Qs.26:85 | Qs.28:60 | Qs.29:58 | Qs.30:15 | Qs.32:17 | Qs.34:37 | Qs.35:35 | Qs.36:57 | Qs.37:42 | Qs.37:43 | Qs.37:44 | Qs.37:45 | Qs.37:46 | Qs.37:47 | Qs.37:48 | Qs.37:49 | Qs.38:51 | Qs.38:52 | Qs.39:20 | Qs.40:40 | Qs.41:31 | Qs.42:22 | Qs.43:71 | Qs.43:73 | Qs.44:52 | Qs.44:53 | Qs.44:54 | Qs.44:55 | Qs.44:56 | Qs.47:12 | Qs.47:15 | Qs.48:5 | Qs.48:17 | Qs.50:35 | Qs.51:15 | Qs.52:17 | Qs.52:18 | Qs.52:20 | Qs.52:22 | Qs.52:23 | Qs.52:24 | Qs.54:55 | Qs.55:48 | Qs.55:50 | Qs.55:52 | Qs.55:54 | Qs.55:56 | Qs.55:58 | Qs.55:64 | Qs.55:66 | Qs.55:68 | Qs.55:70 | Qs.55:72 | Qs.55:74 | Qs.55:76 | Qs.56:12 | Qs.56:15 | Qs.56:16 | Qs.56:17 | Qs.56:18 | Qs.56:19 | Qs.56:20 | Qs.56:21 | Qs.56:22 | Qs.56:23 | Qs.56:25 | Qs.56:26 | Qs.56:28 | Qs.56:29 | Qs.56:30 | Qs.56:31 | Qs.56:32 | Qs.56:33 | Qs.56:34 | Qs.56:35 | Qs.56:36 | Qs.56:37 | Qs.56:89 | Qs.57:12 | Qs.57:21 | Qs.58:22 | Qs.61:12 | Qs.64:9 | Qs.65:11 | Qs.66:8 | Qs.68:34 | Qs.69:22 | Qs.69:23 | Qs.70:35 | Qs.76:5 | Qs.76:6 | Qs.76:11 | Qs.76:12 | Qs.76:13 | Qs.76:14 | Qs.76:15 | Qs.76:16 | Qs.76:17 | Qs.76:18 | Qs.76:19 | Qs.76:20 | Qs.76:21 | Qs.77:41 | Qs.77:42 | Qs.78:32 | Qs.78:33 | Qs.78:34 | Qs.78:35 | Qs.81:13 | Qs.83:22 | Qs.83:23 | Qs.83:25 | Qs.83:26 | Qs.83:27 | Qs.83:28 | Qs.83:35 | Qs.85:11 | Qs.88:10 | Qs.88:11 | Qs.88:12 | Qs.88:13 | Qs.88:14 | Qs.88:15 | Qs.88:16 | Qs.98:8 | Qs.108:1"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Pintu-pintu surga",
					"ayat" => "Qs.38:50 | Qs.39:73"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Memasuki surga",
					"ayat" => "Qs.4:31 | Qs.4:124 | Qs.4:175 | Qs.7:49 | Qs.15:46 | Qs.16:31 | Qs.16:32 | Qs.25:75 | Qs.35:35 | Qs.39:73 | Qs.44:57 | Qs.50:34 | Qs.52:21 | Qs.57:21"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat ahli surga",
					"ayat" => "Qs.4:57 | Qs.7:43 | Qs.7:50 | Qs.10:26 | Qs.13:23 | Qs.13:24 | Qs.14:23 | Qs.15:46 | Qs.15:47 | Qs.15:48 | Qs.16:31 | Qs.18:31 | Qs.18:108 | Qs.19:62 | Qs.20:118 | Qs.20:119 | Qs.22:23 | Qs.22:24 | Qs.25:24 | Qs.25:76 | Qs.35:33 | Qs.36:55 | Qs.36:56 | Qs.38:51 | Qs.38:52 | Qs.55:54 | Qs.55:76 | Qs.56:8 | Qs.56:10 | Qs.56:11 | Qs.56:12 | Qs.56:15 | Qs.56:16 | Qs.56:17 | Qs.56:18 | Qs.56:19 | Qs.56:25 | Qs.56:27 | Qs.56:28 | Qs.56:29 | Qs.56:38 | Qs.56:90 | Qs.59:20 | Qs.74:39 | Qs.75:22 | Qs.76:11 | Qs.76:19 | Qs.80:38 | Qs.80:39 | Qs.82:13 | Qs.83:22 | Qs.83:23 | Qs.83:24 | Qs.83:25 | Qs.83:35 | Qs.84:7 | Qs.84:8 | Qs.84:9"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat wanita penghuni surga",
					"ayat" => "Qs.2:25 | Qs.3:15 | Qs.4:57 | Qs.37:48 | Qs.37:49 | Qs.38:52 | Qs.44:54 | Qs.52:20 | Qs.55:56 | Qs.55:58 | Qs.55:70 | Qs.55:72 | Qs.55:74 | Qs.56:22 | Qs.56:23 | Qs.56:35 | Qs.56:36 | Qs.56:37 | Qs.78:33"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Berangan-angan di dalam surga",
					"ayat" => "Qs.41:31"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Derajat para nabi, shiddiqin dan syuhada'",
					"ayat" => "Qs.4:69"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Perbedaan derajat di surga",
					"ayat" => "Qs.4:96 | Qs.8:4 | Qs.17:21 | Qs.18:107 | Qs.20:75 | Qs.23:11 | Qs.25:76 | Qs.26:85 | Qs.29:58 | Qs.55:62 | Qs.56:11 | Qs.82:13 | Qs.83:18 | Qs.83:22 | Qs.83:23 | Qs.85:11"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Percakapan para ahli surga",
					"ayat" => "Qs.7:50 | Qs.10:10 | Qs.19:62 | Qs.37:50 | Qs.37:51 | Qs.37:52 | Qs.37:53 | Qs.37:54 | Qs.37:56 | Qs.37:57 | Qs.37:58 | Qs.37:59 | Qs.37:60 | Qs.39:74 | Qs.52:25 | Qs.52:26 | Qs.52:27 | Qs.52:28 | Qs.74:40 | Qs.74:42"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Percakapan Allah dengan ahli surga",
					"ayat" => "Qs.33:44 | Qs.36:58"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Batas antara surga dan neraka",
					"ayat" => "Qs.7:46 | Qs.57:13"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Golongan Al A'raf",
					"ayat" => "Qs.7:46 | Qs.7:47 | Qs.7:48 | Qs.7:49"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Makanan dan minuman ahli surga",
					"ayat" => "Qs.2:25 | Qs.13:35 | Qs.37:41 | Qs.37:42 | Qs.52:19 | Qs.52:22 | Qs.55:52 | Qs.55:68 | Qs.56:18 | Qs.56:20 | Qs.56:21 | Qs.76:17 | Qs.76:21 | Qs.77:42 | Qs.78:32 | Qs.83:25 | Qs.83:27"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Perbuatan baik adalah penyebab masuk surga",
					"ayat" => "Qs.2:25 | Qs.2:82 | Qs.2:154 | Qs.3:15 | Qs.3:133 | Qs.3:195 | Qs.4:13 | Qs.4:57 | Qs.4:69 | Qs.4:114 | Qs.4:122 | Qs.4:124 | Qs.5:65 | Qs.5:85 | Qs.5:119 | Qs.6:155 | Qs.7:42 | Qs.7:43 | Qs.9:21 | Qs.9:72 | Qs.9:89 | Qs.9:100 | Qs.9:111 | Qs.10:9 | Qs.10:26 | Qs.11:23 | Qs.13:22 | Qs.15:45 | Qs.17:9 | Qs.18:107 | Qs.19:60 | Qs.20:75 | Qs.20:76 | Qs.23:10 | Qs.23:11 | Qs.24:38 | Qs.25:75 | Qs.26:90 | Qs.28:83 | Qs.29:58 | Qs.30:15 | Qs.31:8 | Qs.32:17 | Qs.32:19 | Qs.33:21 | Qs.33:31 | Qs.33:35 | Qs.34:37 | Qs.35:7 | Qs.38:50 | Qs.39:20 | Qs.40:40 | Qs.42:22 | Qs.43:70 | Qs.44:51 | Qs.45:30 | Qs.46:16 | Qs.47:12 | Qs.47:15 | Qs.48:5 | Qs.48:17 | Qs.50:31 | Qs.50:32 | Qs.50:33 | Qs.51:15 | Qs.52:17 | Qs.54:54 | Qs.55:46 | Qs.56:12 | Qs.57:12 | Qs.64:9 | Qs.65:11 | Qs.70:35 | Qs.76:7 | Qs.76:8 | Qs.79:41 | Qs.82:13 | Qs.90:18"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Pakaian ahli surga",
					"ayat" => "Qs.18:31 | Qs.22:23 | Qs.35:33 | Qs.44:53 | Qs.76:21"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Neraka"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Nama-nama neraka",
					"ayat" => "Qs.2:119 | Qs.2:206 | Qs.3:12 | Qs.3:162 | Qs.3:197 | Qs.4:55 | Qs.4:93 | Qs.4:97 | Qs.4:115 | Qs.4:121 | Qs.4:140 | Qs.4:169 | Qs.5:10 | Qs.5:86 | Qs.7:18 | Qs.7:41 | Qs.7:179 | Qs.8:16 | Qs.8:36 | Qs.8:37 | Qs.9:35 | Qs.9:49 | Qs.9:63 | Qs.9:68 | Qs.9:73 | Qs.9:81 | Qs.9:95 | Qs.9:109 | Qs.9:113 | Qs.11:82 | Qs.11:119 | Qs.13:18 | Qs.14:16 | Qs.14:29 | Qs.15:43 | Qs.16:29 | Qs.17:8 | Qs.17:18 | Qs.17:39 | Qs.17:63 | Qs.17:98 | Qs.18:100 | Qs.18:102 | Qs.18:106 | Qs.19:68 | Qs.19:86 | Qs.20:74 | Qs.21:29 | Qs.21:98 | Qs.22:51 | Qs.23:103 | Qs.25:34 | Qs.25:65 | Qs.26:91 | Qs.29:54 | Qs.29:68 | Qs.30:10 | Qs.32:13 | Qs.35:36 | Qs.36:63 | Qs.37:23 | Qs.37:63 | Qs.37:163 | Qs.38:56 | Qs.38:85 | Qs.39:32 | Qs.39:60 | Qs.39:71 | Qs.39:72 | Qs.40:7 | Qs.40:49 | Qs.40:60 | Qs.40:76 | Qs.43:62 | Qs.43:74 | Qs.44:47 | Qs.44:56 | Qs.45:10 | Qs.48:6 | Qs.50:24 | Qs.50:30 | Qs.52:13 | Qs.52:18 | Qs.52:27 | Qs.54:48 | Qs.56:93 | Qs.56:94 | Qs.57:19 | Qs.58:8 | Qs.66:9 | Qs.67:5 | Qs.67:6 | Qs.67:10 | Qs.67:11 | Qs.69:31 | Qs.72:15 | Qs.72:23 | Qs.74:26 | Qs.74:27 | Qs.74:42 | Qs.78:21 | Qs.79:10 | Qs.79:14 | Qs.79:36 | Qs.79:39 | Qs.81:12 | Qs.82:14 | Qs.83:16 | Qs.85:10 | Qs.89:23 | Qs.98:6 | Qs.101:9 | Qs.102:6 | Qs.104:4 | Qs.104:5"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Keabadian neraka",
					"ayat" => "Qs.2:39 | Qs.2:81 | Qs.2:162 | Qs.2:167 | Qs.2:217 | Qs.2:257 | Qs.2:275 | Qs.4:14 | Qs.4:169 | Qs.5:37 | Qs.5:80 | Qs.6:128 | Qs.7:36 | Qs.9:17 | Qs.9:63 | Qs.9:68 | Qs.10:27 | Qs.10:52 | Qs.11:107 | Qs.13:5 | Qs.14:17 | Qs.16:29 | Qs.20:74 | Qs.20:101 | Qs.21:99 | Qs.23:103 | Qs.25:66 | Qs.25:69 | Qs.32:14 | Qs.33:65 | Qs.39:40 | Qs.39:72 | Qs.40:11 | Qs.40:39 | Qs.40:76 | Qs.41:28 | Qs.42:45 | Qs.43:74 | Qs.43:77 | Qs.45:35 | Qs.47:15 | Qs.58:17 | Qs.59:17 | Qs.64:10 | Qs.78:23 | Qs.98:6"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Memasuki neraka",
					"ayat" => "Qs.2:24 | Qs.3:192 | Qs.19:86 | Qs.25:13 | Qs.25:14 | Qs.26:94 | Qs.26:95 | Qs.27:90 | Qs.37:68 | Qs.39:71 | Qs.40:60 | Qs.40:71 | Qs.40:72 | Qs.40:76 | Qs.44:47 | Qs.52:13 | Qs.52:16 | Qs.54:48 | Qs.55:41 | Qs.67:7 | Qs.67:8 | Qs.69:30 | Qs.69:31 | Qs.78:21"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Penjaga neraka",
					"ayat" => "Qs.39:71 | Qs.40:49 | Qs.43:77 | Qs.66:6 | Qs.67:8 | Qs.74:30 | Qs.74:31 | Qs.96:18"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat neraka",
					"ayat" => "Qs.2:24 | Qs.7:38 | Qs.7:41 | Qs.9:81 | Qs.11:106 | Qs.13:18 | Qs.14:16 | Qs.14:17 | Qs.14:29 | Qs.15:44 | Qs.16:29 | Qs.17:8 | Qs.17:97 | Qs.18:29 | Qs.18:53 | Qs.21:100 | Qs.22:19 | Qs.22:20 | Qs.22:21 | Qs.22:22 | Qs.23:104 | Qs.24:57 | Qs.25:12 | Qs.25:13 | Qs.25:34 | Qs.25:65 | Qs.25:66 | Qs.25:77 | Qs.29:55 | Qs.37:62 | Qs.37:63 | Qs.37:64 | Qs.37:65 | Qs.37:66 | Qs.37:67 | Qs.38:57 | Qs.38:58 | Qs.39:16 | Qs.40:49 | Qs.40:52 | Qs.43:75 | Qs.44:43 | Qs.44:44 | Qs.44:45 | Qs.44:46 | Qs.44:48 | Qs.47:15 | Qs.50:30 | Qs.54:48 | Qs.55:44 | Qs.56:42 | Qs.56:43 | Qs.56:44 | Qs.56:93 | Qs.56:94 | Qs.58:8 | Qs.66:6 | Qs.67:7 | Qs.67:8 | Qs.69:31 | Qs.69:32 | Qs.70:15 | Qs.70:16 | Qs.73:12 | Qs.74:28 | Qs.74:29 | Qs.74:35 | Qs.76:4 | Qs.77:30 | Qs.77:31 | Qs.77:32 | Qs.77:33 | Qs.78:21 | Qs.88:4 | Qs.88:5 | Qs.90:11 | Qs.90:12 | Qs.90:20 | Qs.92:14 | Qs.101:10 | Qs.101:11 | Qs.104:4 | Qs.104:5 | Qs.104:6 | Qs.104:7 | Qs.104:8 | Qs.104:9 | Qs.111:3 | Qs.111:5"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Sifat ahli neraka dan kejahatan mereka",
					"ayat" => "Qs.2:24 | Qs.2:39 | Qs.2:81 | Qs.2:126 | Qs.2:161 | Qs.2:162 | Qs.2:175 | Qs.2:206 | Qs.2:217 | Qs.2:257 | Qs.2:275 | Qs.3:11 | Qs.3:12 | Qs.3:151 | Qs.3:162 | Qs.4:14 | Qs.4:37 | Qs.4:55 | Qs.4:56 | Qs.4:93 | Qs.4:97 | Qs.4:115 | Qs.4:121 | Qs.4:140 | Qs.4:145 | Qs.4:151 | Qs.4:161 | Qs.4:169 | Qs.5:10 | Qs.5:29 | Qs.5:72 | Qs.5:80 | Qs.5:86 | Qs.6:128 | Qs.6:129 | Qs.6:157 | Qs.7:18 | Qs.7:36 | Qs.7:38 | Qs.7:39 | Qs.7:41 | Qs.7:47 | Qs.7:50 | Qs.7:179 | Qs.8:14 | Qs.8:16 | Qs.8:36 | Qs.8:37 | Qs.8:50 | Qs.9:17 | Qs.9:49 | Qs.9:63 | Qs.9:68 | Qs.9:73 | Qs.9:81 | Qs.9:95 | Qs.9:109 | Qs.9:113 | Qs.10:4 | Qs.10:27 | Qs.10:52 | Qs.11:16 | Qs.11:17 | Qs.11:106 | Qs.11:119 | Qs.13:5 | Qs.13:18 | Qs.13:25 | Qs.14:17 | Qs.14:29 | Qs.14:30 | Qs.15:43 | Qs.16:29 | Qs.16:62 | Qs.17:8 | Qs.17:10 | Qs.17:18 | Qs.17:39 | Qs.17:63 | Qs.17:97 | Qs.18:29 | Qs.18:102 | Qs.18:105 | Qs.18:106 | Qs.19:68 | Qs.19:70 | Qs.19:72 | Qs.20:74 | Qs.20:100 | Qs.21:100 | Qs.22:51 | Qs.22:57 | Qs.22:72 | Qs.23:103 | Qs.23:104 | Qs.25:11 | Qs.25:13 | Qs.25:34 | Qs.25:69 | Qs.25:77 | Qs.26:91 | Qs.26:94 | Qs.26:95 | Qs.26:96 | Qs.26:97 | Qs.26:98 | Qs.26:100 | Qs.26:101 | Qs.27:5 | Qs.29:25 | Qs.29:54 | Qs.29:68 | Qs.30:16 | Qs.31:6 | Qs.31:7 | Qs.32:14 | Qs.32:20 | Qs.33:64 | Qs.33:66 | Qs.34:5 | Qs.34:8 | Qs.34:42 | Qs.35:36 | Qs.35:37 | Qs.37:161 | Qs.38:27 | Qs.38:55 | Qs.38:56 | Qs.39:8 | Qs.39:16 | Qs.39:32 | Qs.39:60 | Qs.39:72 | Qs.40:6 | Qs.40:10 | Qs.40:43 | Qs.40:46 | Qs.40:52 | Qs.40:60 | Qs.40:71 | Qs.40:72 | Qs.40:76 | Qs.41:19 | Qs.41:24 | Qs.41:28 | Qs.41:40 | Qs.43:74 | Qs.43:75 | Qs.45:10 | Qs.45:33 | Qs.45:34 | Qs.45:35 | Qs.46:20 | Qs.46:34 | Qs.47:12 | Qs.48:6 | Qs.48:13 | Qs.48:17 | Qs.50:24 | Qs.50:25 | Qs.50:26 | Qs.51:13 | Qs.51:14 | Qs.52:13 | Qs.55:41 | Qs.55:43 | Qs.55:44 | Qs.56:9 | Qs.56:41 | Qs.56:45 | Qs.56:46 | Qs.56:51 | Qs.56:92 | Qs.57:13 | Qs.57:15 | Qs.57:19 | Qs.58:8 | Qs.58:17 | Qs.59:3 | Qs.59:17 | Qs.64:10 | Qs.66:9 | Qs.66:10 | Qs.67:6 | Qs.67:10 | Qs.67:11 | Qs.70:17 | Qs.70:18 | Qs.71:25 | Qs.72:15 | Qs.72:23 | Qs.74:43 | Qs.74:44 | Qs.74:45 | Qs.74:46 | Qs.75:24 | Qs.76:31 | Qs.78:22 | Qs.78:23 | Qs.78:24 | Qs.82:14 | Qs.83:11 | Qs.83:12 | Qs.84:10 | Qs.84:11 | Qs.84:12 | Qs.84:13 | Qs.85:10 | Qs.88:2 | Qs.88:3 | Qs.88:4 | Qs.89:24 | Qs.89:25 | Qs.89:26 | Qs.90:19 | Qs.92:15 | Qs.92:16 | Qs.98:6 | Qs.101:9 | Qs.104:4 | Qs.104:5 | Qs.111:3"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Siksaan ahli neraka dilipatgandakan",
					"ayat" => "Qs.9:101 | Qs.25:69"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Mereka yang kekal dalam neraka",
					"ayat" => "Qs.3:116 | Qs.4:56 | Qs.5:37 | Qs.5:80 | Qs.6:128 | Qs.7:36 | Qs.9:63 | Qs.9:68 | Qs.10:27 | Qs.10:52 | Qs.14:16 | Qs.14:17 | Qs.14:28 | Qs.22:22 | Qs.23:103 | Qs.23:108 | Qs.26:102 | Qs.33:65 | Qs.45:35 | Qs.58:17 | Qs.59:17 | Qs.64:10 | Qs.72:23 | Qs.87:13 | Qs.98:6"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Makanan dan minuman ahli neraka",
					"ayat" => "Qs.6:70 | Qs.10:4 | Qs.14:16 | Qs.18:29 | Qs.22:20 | Qs.37:62 | Qs.37:63 | Qs.37:64 | Qs.37:65 | Qs.37:66 | Qs.44:43 | Qs.44:44 | Qs.44:45 | Qs.44:46 | Qs.56:52 | Qs.56:53 | Qs.56:54 | Qs.56:55 | Qs.69:36 | Qs.69:37 | Qs.73:13 | Qs.88:5 | Qs.88:6 | Qs.88:7"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Pohon zaqquum (terkutuk)",
					"ayat" => "Qs.17:60 | Qs.37:62 | Qs.37:64 | Qs.37:65 | Qs.37:66 | Qs.37:67 | Qs.44:43"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Percakapan ahli neraka",
					"ayat" => "Qs.7:38 | Qs.7:39 | Qs.7:44 | Qs.7:50 | Qs.23:106 | Qs.23:107 | Qs.25:13 | Qs.25:14 | Qs.26:96 | Qs.26:97 | Qs.26:98 | Qs.33:67 | Qs.33:68 | Qs.35:37 | Qs.38:59 | Qs.38:60 | Qs.38:61 | Qs.38:62 | Qs.38:63 | Qs.39:71 | Qs.40:47 | Qs.40:48 | Qs.40:49 | Qs.40:50 | Qs.43:77 | Qs.67:9 | Qs.67:10"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Beriman dengan takdir baik dan buruk"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kebenaran dan hakikat takdir",
					"ayat" => "Qs.2:102 | Qs.2:243 | Qs.3:154 | Qs.3:156 | Qs.3:166 | Qs.4:78 | Qs.7:34 | Qs.10:49 | Qs.12:67 | Qs.12:68 | Qs.13:11 | Qs.13:39 | Qs.17:58 | Qs.39:19 | Qs.40:6 | Qs.41:25 | Qs.54:49 | Qs.58:10 | Qs.64:11 | Qs.65:3 | Qs.81:29"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Penentuan takdir sebelum penciptaan",
					"ayat" => "Qs.3:6 | Qs.6:38 | Qs.6:59 | Qs.17:58 | Qs.27:75 | Qs.50:4 | Qs.57:22 | Qs.58:21 | Qs.83:9 | Qs.83:20 | Qs.87:3"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Allah menggerakkan hati manusia",
					"ayat" => "Qs.2:213 | Qs.2:272 | Qs.3:8 | Qs.4:88 | Qs.5:41 | Qs.5:67 | Qs.5:108 | Qs.6:25 | Qs.6:28 | Qs.6:35 | Qs.6:39 | Qs.6:53 | Qs.6:88 | Qs.6:107 | Qs.6:110 | Qs.6:111 | Qs.6:113 | Qs.6:125 | Qs.6:144 | Qs.6:149 | Qs.6:161 | Qs.7:30 | Qs.7:43 | Qs.7:89 | Qs.7:100 | Qs.7:101 | Qs.7:146 | Qs.7:155 | Qs.7:178 | Qs.7:186 | Qs.8:23 | Qs.8:24 | Qs.8:63 | Qs.9:19 | Qs.9:24 | Qs.9:37 | Qs.9:80 | Qs.9:87 | Qs.9:93 | Qs.9:109 | Qs.9:115 | Qs.9:117 | Qs.9:127 | Qs.10:25 | Qs.10:35 | Qs.10:42 | Qs.10:43 | Qs.10:74 | Qs.10:96 | Qs.10:99 | Qs.10:100 | Qs.11:34 | Qs.13:27 | Qs.13:31 | Qs.14:4 | Qs.14:27 | Qs.15:12 | Qs.16:9 | Qs.16:36 | Qs.16:37 | Qs.16:93 | Qs.16:104 | Qs.16:107 | Qs.16:108 | Qs.17:45 | Qs.17:46 | Qs.17:97 | Qs.18:17 | Qs.18:28 | Qs.18:57 | Qs.22:16 | Qs.24:35 | Qs.24:46 | Qs.26:4 | Qs.28:50 | Qs.30:29 | Qs.30:52 | Qs.30:53 | Qs.30:59 | Qs.32:13 | Qs.33:4 | Qs.35:8 | Qs.35:22 | Qs.36:7 | Qs.36:10 | Qs.36:66 | Qs.39:3 | Qs.39:18 | Qs.39:22 | Qs.39:23 | Qs.39:36 | Qs.39:37 | Qs.40:33 | Qs.40:34 | Qs.40:35 | Qs.42:8 | Qs.42:13 | Qs.42:44 | Qs.42:46 | Qs.42:52 | Qs.45:23 | Qs.50:45 | Qs.59:19 | Qs.61:5 | Qs.61:7 | Qs.62:5 | Qs.63:3 | Qs.63:6 | Qs.64:2 | Qs.68:7 | Qs.74:31 | Qs.74:56 | Qs.76:30 | Qs.83:14 | Qs.87:3 | Qs.91:8 | Qs.92:7 | Qs.92:10"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Usia dan rezeki sesuai dengan takdir",
					"ayat" => "Qs.3:27 | Qs.3:37 | Qs.3:145 | Qs.3:154 | Qs.3:156 | Qs.3:168 | Qs.6:2 | Qs.6:60 | Qs.6:61 | Qs.6:128 | Qs.7:34 | Qs.7:131 | Qs.10:49 | Qs.10:98 | Qs.10:104 | Qs.11:3 | Qs.11:6 | Qs.13:26 | Qs.14:10 | Qs.15:4 | Qs.15:5 | Qs.15:21 | Qs.16:61 | Qs.16:70 | Qs.16:71 | Qs.17:30 | Qs.17:31 | Qs.17:99 | Qs.20:129 | Qs.22:5 | Qs.23:43 | Qs.28:82 | Qs.29:53 | Qs.29:60 | Qs.29:62 | Qs.30:37 | Qs.30:40 | Qs.31:34 | Qs.33:16 | Qs.34:36 | Qs.34:39 | Qs.35:11 | Qs.35:45 | Qs.36:44 | Qs.39:42 | Qs.39:52 | Qs.42:12 | Qs.42:19 | Qs.42:27 | Qs.42:50 | Qs.51:58 | Qs.53:48 | Qs.57:29 | Qs.63:11 | Qs.71:4"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Segala sesuatu ada takdirnya",
					"ayat" => "Qs.2:102 | Qs.2:253 | Qs.4:78 | Qs.6:2 | Qs.8:42 | Qs.9:51 | Qs.10:49 | Qs.10:96 | Qs.10:100 | Qs.10:107 | Qs.11:6 | Qs.11:8 | Qs.11:33 | Qs.11:104 | Qs.13:2 | Qs.13:8 | Qs.13:26 | Qs.13:38 | Qs.15:21 | Qs.18:23 | Qs.20:129 | Qs.23:18 | Qs.23:43 | Qs.30:4 | Qs.30:8 | Qs.31:29 | Qs.32:5 | Qs.33:38 | Qs.34:30 | Qs.36:7 | Qs.37:148 | Qs.40:68 | Qs.42:27 | Qs.43:11 | Qs.43:32 | Qs.44:5 | Qs.46:3 | Qs.54:49 | Qs.55:5 | Qs.57:22 | Qs.57:23 | Qs.64:11 | Qs.65:3 | Qs.77:22 | Qs.77:23 | Qs.78:17 | Qs.87:3"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kebaikan pada pilihan Allah",
					"ayat" => "Qs.2:216 | Qs.4:19 | Qs.4:79 | Qs.8:5 | Qs.8:6 | Qs.9:51 | Qs.33:36 | Qs.57:23 | Qs.66:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Manusia antara memilih dan dipaksa",
					"ayat" => "Qs.6:104 | Qs.6:117 | Qs.6:148 | Qs.18:29 | Qs.74:37 | Qs.74:55 | Qs.76:3 | Qs.76:29 | Qs.81:28 | Qs.90:10 | Qs.91:8 | Qs.91:9 | Qs.91:10"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Ketentuan Allah tak dapat dihindari",
					"ayat" => "Qs.3:47 | Qs.3:59 | Qs.3:128 | Qs.4:78 | Qs.6:73 | Qs.7:178 | Qs.7:186 | Qs.8:44 | Qs.13:11 | Qs.13:33 | Qs.18:17 | Qs.18:27 | Qs.19:21 | Qs.19:71 | Qs.39:23 | Qs.45:23"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Beriman pada Jin"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Iblis, bagian dari Jin",
					"ayat" => "Qs.18:50"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Sifat iblis dan pembantunya",
					"ayat" => "Qs.2:36 | Qs.2:102 | Qs.2:168 | Qs.2:169 | Qs.2:257 | Qs.2:268 | Qs.3:155 | Qs.3:175 | Qs.4:38 | Qs.4:60 | Qs.4:76 | Qs.4:117 | Qs.4:119 | Qs.4:120 | Qs.5:90 | Qs.5:91 | Qs.6:43 | Qs.6:68 | Qs.6:71 | Qs.6:112 | Qs.6:121 | Qs.6:142 | Qs.7:16 | Qs.7:17 | Qs.7:20 | Qs.7:21 | Qs.7:22 | Qs.7:27 | Qs.7:30 | Qs.7:200 | Qs.7:201 | Qs.7:202 | Qs.8:11 | Qs.8:48 | Qs.12:5 | Qs.12:42 | Qs.12:100 | Qs.14:22 | Qs.15:27 | Qs.15:31 | Qs.15:32 | Qs.15:33 | Qs.15:39 | Qs.15:40 | Qs.16:63 | Qs.16:99 | Qs.16:100 | Qs.17:27 | Qs.17:53 | Qs.17:64 | Qs.18:50 | Qs.18:63 | Qs.19:44 | Qs.19:45 | Qs.19:83 | Qs.20:96 | Qs.20:117 | Qs.20:120 | Qs.22:3 | Qs.22:4 | Qs.22:52 | Qs.22:53 | Qs.24:21 | Qs.25:29 | Qs.26:99 | Qs.26:221 | Qs.26:222 | Qs.26:223 | Qs.26:224 | Qs.27:24 | Qs.28:15 | Qs.29:38 | Qs.31:21 | Qs.34:20 | Qs.35:6 | Qs.36:62 | Qs.41:25 | Qs.43:36 | Qs.43:37 | Qs.43:62 | Qs.47:25 | Qs.50:27 | Qs.57:14 | Qs.58:10 | Qs.58:19 | Qs.59:16 | Qs.72:4 | Qs.72:5 | Qs.72:6 | Qs.72:11 | Qs.72:14 | Qs.114:4 | Qs.114:5 | Qs.114:6"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Pahala jin dan balasannya",
					"ayat" => "Qs.6:128 | Qs.6:130 | Qs.7:38 | Qs.7:179 | Qs.11:119 | Qs.15:18 | Qs.34:12 | Qs.37:9 | Qs.37:10 | Qs.41:25 | Qs.41:29 | Qs.55:31 | Qs.55:39 | Qs.59:17 | Qs.67:5 | Qs.72:9 | Qs.72:15 | Qs.72:17"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Keimanan jin kepada para nabi",
					"ayat" => "Qs.6:130 | Qs.72:2 | Qs.72:13"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Jin ditundukkan untuk taat kepada nabi Sulaiman as.",
					"ayat" => "Qs.2:102 | Qs.21:82 | Qs.27:17 | Qs.27:39 | Qs.34:12 | Qs.34:13 | Qs.34:14 | Qs.38:37 | Qs.38:38"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Usaha jin untuk mencuri informasi",
					"ayat" => "Qs.15:17 | Qs.15:18 | Qs.26:212 | Qs.26:223 | Qs.37:8 | Qs.37:9 | Qs.37:10 | Qs.41:12 | Qs.72:8 | Qs.72:9"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Jin mendengarkan Al Qur'an",
					"ayat" => "Qs.46:29 | Qs.46:30 | Qs.72:1 | Qs.72:13 | Qs.72:19"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Islamnya sebagian jin",
					"ayat" => "Qs.46:29 | Qs.46:30 | Qs.46:31 | Qs.46:32 | Qs.72:1 | Qs.72:2 | Qs.72:3 | Qs.72:4 | Qs.72:5 | Qs.72:6 | Qs.72:7 | Qs.72:8 | Qs.72:9 | Qs.72:10 | Qs.72:11 | Qs.72:13 | Qs.72:14 | Qs.72:19"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Jin yang berteman dengan manusia",
					"ayat" => "Qs.37:51 | Qs.41:25 | Qs.43:36 | Qs.43:38 | Qs.50:27"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Usaha jin untuk melalaikan manusia dalam beribadah",
					"ayat" => "Qs.2:102 | Qs.5:91 | Qs.6:43 | Qs.6:128 | Qs.20:120 | Qs.22:52 | Qs.25:29 | Qs.34:41 | Qs.36:62 | Qs.37:32 | Qs.43:36 | Qs.58:19"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Usaha syetan untuk membuat manusia lupa dalam berdoa",
					"ayat" => "Qs.12:42 | Qs.18:63 | Qs.36:62"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Usaha jin untuk menyakiti manusia",
					"ayat" => "Qs.2:275"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Syetan menyesatkan dan menghinakan manusia",
					"ayat" => "Qs.4:38 | Qs.4:60 | Qs.4:120 | Qs.7:20 | Qs.7:21 | Qs.7:22 | Qs.7:175 | Qs.8:48 | Qs.26:99 | Qs.27:24 | Qs.36:62 | Qs.37:32 | Qs.43:37 | Qs.58:19 | Qs.59:16"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Menjaga diri dari syetan",
					"ayat" => "Qs.2:168 | Qs.2:208 | Qs.3:36 | Qs.3:175 | Qs.4:119 | Qs.5:90 | Qs.5:91 | Qs.6:142 | Qs.7:22 | Qs.7:27 | Qs.7:200 | Qs.7:201 | Qs.15:40 | Qs.15:42 | Qs.16:98 | Qs.16:99 | Qs.17:53 | Qs.17:65 | Qs.23:97 | Qs.23:98 | Qs.26:99 | Qs.34:21 | Qs.35:6 | Qs.36:60 | Qs.37:7 | Qs.38:83 | Qs.41:36 | Qs.114:4"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Wali Allah dan wali syetan",
					"ayat" => "Qs.2:257 | Qs.3:68 | Qs.3:175 | Qs.4:76 | Qs.4:119 | Qs.6:121 | Qs.6:128 | Qs.7:27 | Qs.7:30 | Qs.7:196 | Qs.7:202 | Qs.10:62 | Qs.16:63 | Qs.19:45 | Qs.29:41 | Qs.39:3 | Qs.42:6 | Qs.42:9 | Qs.45:10 | Qs.45:19 | Qs.58:19 | Qs.58:22"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Islam"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Timbulnya Islam"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Islamnya ahli kitab",
					"ayat" => "Qs.5:69 | Qs.7:157 | Qs.7:159"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Keistimewaan Islam",
					"ayat" => "Qs.2:256 | Qs.2:286 | Qs.4:28 | Qs.4:101 | Qs.5:3 | Qs.5:93 | Qs.6:160 | Qs.24:33 | Qs.28:84 | Qs.64:16"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Tidak berkumpul dua agama di semenanjung Arab",
					"ayat" => "Qs.9:3 | Qs.9:4 | Qs.9:5 | Qs.9:6 | Qs.9:7 | Qs.9:28 | Qs.59:2"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Keutamaan Islam"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Islam agama yang diterima di sisi Allah",
					"ayat" => "Qs.2:132 | Qs.3:19 | Qs.3:83 | Qs.3:85 | Qs.3:102 | Qs.5:3 | Qs.22:78 | Qs.39:12 | Qs.39:22"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Islam agama yang paling sempurna",
					"ayat" => "Qs.5:3"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Islam agama para nabi",
					"ayat" => "Qs.2:130 | Qs.2:131 | Qs.2:132 | Qs.2:133 | Qs.2:135 | Qs.2:136 | Qs.2:137 | Qs.2:213 | Qs.3:52 | Qs.3:64 | Qs.3:67 | Qs.3:68 | Qs.3:80 | Qs.3:83 | Qs.3:84 | Qs.3:85 | Qs.3:193 | Qs.4:125 | Qs.6:161 | Qs.6:163 | Qs.7:59 | Qs.7:65 | Qs.7:70 | Qs.7:73 | Qs.7:85 | Qs.9:31 | Qs.10:19 | Qs.10:72 | Qs.10:90 | Qs.10:104 | Qs.10:105 | Qs.11:2 | Qs.11:14 | Qs.11:26 | Qs.11:50 | Qs.11:61 | Qs.12:38 | Qs.12:40 | Qs.12:101 | Qs.16:120 | Qs.16:123 | Qs.19:35 | Qs.19:36 | Qs.20:14 | Qs.20:90 | Qs.20:98 | Qs.21:24 | Qs.21:25 | Qs.21:56 | Qs.21:66 | Qs.21:67 | Qs.21:73 | Qs.21:92 | Qs.21:108 | Qs.22:26 | Qs.22:78 | Qs.23:23 | Qs.23:32 | Qs.23:52 | Qs.27:26 | Qs.27:31 | Qs.27:44 | Qs.27:91 | Qs.28:88 | Qs.29:46 | Qs.30:30 | Qs.37:86 | Qs.37:125 | Qs.37:126 | Qs.38:5 | Qs.38:65 | Qs.39:11 | Qs.39:12 | Qs.39:14 | Qs.39:64 | Qs.40:28 | Qs.40:66 | Qs.41:14 | Qs.42:13 | Qs.43:27 | Qs.43:45 | Qs.43:64 | Qs.46:21 | Qs.51:51 | Qs.60:4 | Qs.98:5 | Qs.109:4"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Islam agama fitrah",
					"ayat" => "Qs.2:138 | Qs.3:83 | Qs.3:84 | Qs.3:95 | Qs.6:161 | Qs.7:157 | Qs.7:172 | Qs.11:17 | Qs.29:46 | Qs.30:30 | Qs.91:7 | Qs.98:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Ajakan masuk Islam",
					"ayat" => "Qs.2:286 | Qs.5:93 | Qs.6:147 | Qs.6:160 | Qs.8:38 | Qs.8:70 | Qs.22:78 | Qs.23:62 | Qs.28:84 | Qs.29:7 | Qs.31:22 | Qs.33:35 | Qs.40:40 | Qs.72:13 | Qs.72:14"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Toleransi Islam",
					"ayat" => "Qs.2:173 | Qs.2:184 | Qs.2:185 | Qs.2:187 | Qs.2:203 | Qs.2:220 | Qs.2:225 | Qs.2:233 | Qs.2:235 | Qs.2:239 | Qs.2:275 | Qs.2:286 | Qs.4:28 | Qs.4:43 | Qs.4:66 | Qs.4:98 | Qs.4:99 | Qs.4:101 | Qs.4:102 | Qs.5:3 | Qs.5:6 | Qs.5:89 | Qs.5:95 | Qs.6:119 | Qs.6:145 | Qs.6:160 | Qs.7:42 | Qs.7:157 | Qs.8:66 | Qs.9:91 | Qs.9:92 | Qs.22:78 | Qs.23:62 | Qs.24:61 | Qs.28:84 | Qs.29:7 | Qs.29:46 | Qs.40:40 | Qs.58:3 | Qs.58:4 | Qs.58:12 | Qs.64:14 | Qs.64:16 | Qs.65:7"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Islam menghapus dosa masa lalu",
					"ayat" => "Qs.2:275 | Qs.5:95 | Qs.8:38 | Qs.8:70 | Qs.9:11 | Qs.11:3 | Qs.20:73 | Qs.33:71 | Qs.47:2"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Orang Islam sebagai saksi Allah terhadap manusia",
					"ayat" => "Qs.2:143 | Qs.22:78"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kekuatan umat Islam di dunia",
					"ayat" => "Qs.7:128 | Qs.7:137 | Qs.12:21 | Qs.12:56 | Qs.13:42 | Qs.14:14 | Qs.18:84 | Qs.21:105 | Qs.22:41 | Qs.24:55 | Qs.33:27 | Qs.37:77 | Qs.48:29"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Rukun Islam"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Dua kalimat syahadat rukun Islam"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Islamnya orang yang mengucapkan dua kalimat syahadat",
					"ayat" => "Qs.4:94 | Qs.49:14"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Dua kalimat syahadat, bukti lahiriah keimanan seseorang",
					"ayat" => "Qs.4:94 | Qs.49:14 | Qs.60:10"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Shalat rukun Islam",
					"ayat" => "Qs.2:277 | Qs.6:92 | Qs.6:162 | Qs.7:29 | Qs.9:5 | Qs.9:11 | Qs.9:112 | Qs.73:20 | Qs.98:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Puasa rukun Islam",
					"ayat" => "Qs.2:183 | Qs.9:112"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Zakat rukun Islam",
					"ayat" => "Qs.2:277 | Qs.6:141 | Qs.9:5 | Qs.9:11 | Qs.41:7 | Qs.70:24 | Qs.70:25 | Qs.73:20 | Qs.98:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Haji rukun Islam",
					"ayat" => "Qs.2:196 | Qs.2:197"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Pengharaman harta dan darah"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Beriman berarti menjaga harta dan darah",
					"ayat" => "Qs.4:94 | Qs.18:88"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Mengakui kewajiban shalat dan zakat berarti menjaga jiwa",
					"ayat" => "Qs.9:5 | Qs.9:11"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kepatuhan dan kebebasan dalam Islam"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Kewajiban saling setia antar sesama muslim",
					"ayat" => "Qs.3:28 | Qs.4:144 | Qs.8:72 | Qs.8:73 | Qs.8:75"),
				array(
					"id_master" => 7,
					"level" => 5,
					"index" => "Bebas dari kekafiran dan orang-orang kafir",
					"ayat" => "Qs.3:28 | Qs.4:144 | Qs.5:51 | Qs.5:57 | Qs.11:54 | Qs.18:50"),
				array(
					"id_master" => 7,
					"level" => 1,
					"index" => "Hal-hal yang merusak iman"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Kufur"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Orang kafir menjadi penolong sesamanya",
					"ayat" => "Qs.8:73"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Bersikap keras terhadap orang kafir",
					"ayat" => "Qs.2:193 | Qs.4:89 | Qs.5:33 | Qs.8:57 | Qs.9:5 | Qs.9:29 | Qs.9:73 | Qs.9:123 | Qs.47:4 | Qs.58:22 | Qs.60:1 | Qs.66:9"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Azab orang kafir",
					"ayat" => "Qs.2:7 | Qs.2:24 | Qs.2:27 | Qs.2:39 | Qs.2:61 | Qs.2:81 | Qs.2:86 | Qs.2:90 | Qs.2:96 | Qs.2:104 | Qs.2:108 | Qs.2:114 | Qs.2:119 | Qs.2:121 | Qs.2:123 | Qs.2:126 | Qs.2:161 | Qs.2:162 | Qs.2:165 | Qs.2:167 | Qs.2:191 | Qs.2:211 | Qs.2:217 | Qs.2:254 | Qs.2:257 | Qs.2:264 | Qs.2:276 | Qs.3:4 | Qs.3:10 | Qs.3:12 | Qs.3:19 | Qs.3:21 | Qs.3:22 | Qs.3:25 | Qs.3:32 | Qs.3:56 | Qs.3:82 | Qs.3:85 | Qs.3:86 | Qs.3:87 | Qs.3:88 | Qs.3:90 | Qs.3:91 | Qs.3:97 | Qs.3:106 | Qs.3:112 | Qs.3:116 | Qs.3:128 | Qs.3:131 | Qs.3:137 | Qs.3:141 | Qs.3:151 | Qs.3:162 | Qs.3:176 | Qs.3:177 | Qs.3:178 | Qs.3:197 | Qs.4:18 | Qs.4:37 | Qs.4:42 | Qs.4:55 | Qs.4:56 | Qs.4:88 | Qs.4:102 | Qs.4:115 | Qs.4:136 | Qs.4:137 | Qs.4:140 | Qs.4:151 | Qs.4:155 | Qs.4:161 | Qs.4:167 | Qs.4:168 | Qs.4:169 | Qs.4:172 | Qs.4:173 | Qs.5:5 | Qs.5:10 | Qs.5:36 | Qs.5:37 | Qs.5:41 | Qs.5:60 | Qs.5:78 | Qs.5:80 | Qs.5:86 | Qs.6:11 | Qs.6:26 | Qs.6:30 | Qs.6:31 | Qs.6:45 | Qs.6:47 | Qs.6:49 | Qs.6:70 | Qs.6:93 | Qs.6:124 | Qs.6:128 | Qs.6:148 | Qs.6:157 | Qs.7:4 | Qs.7:5 | Qs.7:13 | Qs.7:36 | Qs.7:38 | Qs.7:39 | Qs.7:40 | Qs.7:44 | Qs.7:47 | Qs.7:48 | Qs.7:50 | Qs.7:51 | Qs.7:64 | Qs.7:72 | Qs.7:78 | Qs.7:83 | Qs.7:84 | Qs.7:91 | Qs.7:92 | Qs.7:93 | Qs.7:95 | Qs.7:96 | Qs.7:99 | Qs.7:101 | Qs.7:103 | Qs.7:146 | Qs.7:147 | Qs.7:175 | Qs.7:177 | Qs.7:178 | Qs.7:179 | Qs.7:182 | Qs.7:186 | Qs.8:7 | Qs.8:13 | Qs.8:14 | Qs.8:18 | Qs.8:34 | Qs.8:35 | Qs.8:36 | Qs.8:37 | Qs.8:50 | Qs.8:52 | Qs.8:54 | Qs.9:2 | Qs.9:3 | Qs.9:14 | Qs.9:17 | Qs.9:26 | Qs.9:49 | Qs.9:63 | Qs.9:69 | Qs.9:73 | Qs.9:90 | Qs.10:4 | Qs.10:8 | Qs.10:13 | Qs.10:27 | Qs.10:33 | Qs.10:45 | Qs.10:52 | Qs.10:69 | Qs.10:70 | Qs.10:73 | Qs.10:74 | Qs.10:95 | Qs.11:8 | Qs.11:17 | Qs.11:21 | Qs.11:22 | Qs.11:37 | Qs.11:43 | Qs.11:44 | Qs.11:60 | Qs.11:67 | Qs.11:68 | Qs.11:81 | Qs.11:82 | Qs.11:83 | Qs.11:94 | Qs.11:98 | Qs.11:99 | Qs.11:101 | Qs.11:102 | Qs.11:106 | Qs.11:107 | Qs.12:110 | Qs.13:5 | Qs.13:11 | Qs.13:14 | Qs.13:18 | Qs.13:32 | Qs.13:34 | Qs.13:35 | Qs.14:2 | Qs.14:3 | Qs.14:15 | Qs.14:16 | Qs.14:17 | Qs.14:18 | Qs.14:22 | Qs.14:28 | Qs.14:29 | Qs.14:30 | Qs.14:45 | Qs.14:49 | Qs.14:50 | Qs.14:51 | Qs.15:4 | Qs.15:43 | Qs.15:44 | Qs.15:58 | Qs.15:60 | Qs.15:66 | Qs.15:73 | Qs.15:74 | Qs.15:79 | Qs.15:83 | Qs.15:84 | Qs.16:25 | Qs.16:26 | Qs.16:27 | Qs.16:29 | Qs.16:34 | Qs.16:36 | Qs.16:39 | Qs.16:45 | Qs.16:46 | Qs.16:47 | Qs.16:62 | Qs.16:63 | Qs.16:84 | Qs.16:85 | Qs.16:88 | Qs.16:104 | Qs.16:106 | Qs.16:107 | Qs.16:108 | Qs.16:109 | Qs.16:112 | Qs.16:113 | Qs.16:117 | Qs.17:10 | Qs.17:16 | Qs.17:17 | Qs.17:22 | Qs.17:68 | Qs.17:69 | Qs.17:72 | Qs.17:97 | Qs.17:98 | Qs.18:29 | Qs.18:59 | Qs.18:100 | Qs.18:102 | Qs.18:103 | Qs.18:105 | Qs.18:106 | Qs.19:37 | Qs.19:38 | Qs.19:39 | Qs.19:59 | Qs.19:68 | Qs.19:69 | Qs.19:70 | Qs.19:74 | Qs.19:75 | Qs.19:79 | Qs.19:86 | Qs.19:98 | Qs.20:48 | Qs.20:61 | Qs.20:97 | Qs.20:101 | Qs.20:124 | Qs.20:125 | Qs.20:126 | Qs.20:127 | Qs.21:9 | Qs.21:11 | Qs.21:12 | Qs.21:13 | Qs.21:14 | Qs.21:15 | Qs.21:29 | Qs.21:39 | Qs.21:40 | Qs.21:41 | Qs.21:46 | Qs.21:70 | Qs.21:77 | Qs.21:95 | Qs.21:98 | Qs.22:4 | Qs.22:9 | Qs.22:19 | Qs.22:20 | Qs.22:21 | Qs.22:22 | Qs.22:44 | Qs.22:45 | Qs.22:47 | Qs.22:55 | Qs.22:57 | Qs.23:27 | Qs.23:41 | Qs.23:44 | Qs.23:48 | Qs.23:63 | Qs.23:64 | Qs.23:65 | Qs.23:74 | Qs.23:103 | Qs.23:104 | Qs.23:108 | Qs.23:117 | Qs.24:57 | Qs.25:11 | Qs.25:13 | Qs.25:14 | Qs.25:19 | Qs.25:22 | Qs.25:23 | Qs.25:26 | Qs.25:34 | Qs.25:36 | Qs.25:37 | Qs.25:42 | Qs.25:77 | Qs.26:57 | Qs.26:91 | Qs.26:94 | Qs.26:95 | Qs.26:100 | Qs.26:120 | Qs.26:139 | Qs.26:158 | Qs.26:171 | Qs.26:172 | Qs.26:173 | Qs.26:189 | Qs.26:201 | Qs.26:202 | Qs.26:207 | Qs.26:213 | Qs.27:5 | Qs.27:14 | Qs.27:50 | Qs.27:51 | Qs.27:52 | Qs.27:58 | Qs.27:69 | Qs.27:90 | Qs.28:37 | Qs.28:40 | Qs.28:41 | Qs.28:42 | Qs.28:58 | Qs.28:64 | Qs.28:78 | Qs.28:81 | Qs.29:14 | Qs.29:23 | Qs.29:31 | Qs.29:32 | Qs.29:33 | Qs.29:34 | Qs.29:37 | Qs.29:38 | Qs.29:40 | Qs.29:52 | Qs.29:54 | Qs.29:55 | Qs.29:68 | Qs.30:10 | Qs.30:16 | Qs.30:45 | Qs.30:47 | Qs.30:55 | Qs.31:7 | Qs.31:24 | Qs.32:14 | Qs.32:20 | Qs.32:22 | Qs.32:26 | Qs.33:8 | Qs.33:57 | Qs.33:62 | Qs.33:64 | Qs.33:66 | Qs.34:5 | Qs.34:8 | Qs.34:16 | Qs.34:17 | Qs.34:19 | Qs.34:33 | Qs.34:38 | Qs.34:42 | Qs.34:45 | Qs.34:54 | Qs.35:7 | Qs.35:26 | Qs.35:36 | Qs.35:37 | Qs.35:39 | Qs.35:43 | Qs.36:8 | Qs.36:24 | Qs.36:28 | Qs.36:29 | Qs.36:31 | Qs.36:63 | Qs.36:64 | Qs.37:23 | Qs.37:31 | Qs.37:33 | Qs.37:34 | Qs.37:38 | Qs.37:55 | Qs.37:63 | Qs.37:73 | Qs.37:82 | Qs.37:127 | Qs.37:135 | Qs.37:136 | Qs.37:177 | Qs.38:2 | Qs.38:3 | Qs.38:11 | Qs.38:14 | Qs.38:15 | Qs.38:27 | Qs.38:55 | Qs.38:56 | Qs.38:57 | Qs.38:58 | Qs.38:59 | Qs.38:60 | Qs.38:61 | Qs.38:85 | Qs.39:8 | Qs.39:13 | Qs.39:22 | Qs.39:24 | Qs.39:25 | Qs.39:26 | Qs.39:32 | Qs.39:40 | Qs.39:47 | Qs.39:48 | Qs.39:51 | Qs.39:54 | Qs.39:60 | Qs.39:63 | Qs.39:71 | Qs.39:72 | Qs.40:5 | Qs.40:6 | Qs.40:10 | Qs.40:21 | Qs.40:22 | Qs.40:31 | Qs.40:45 | Qs.40:46 | Qs.40:48 | Qs.40:60 | Qs.40:76 | Qs.40:78 | Qs.40:83 | Qs.40:85 | Qs.41:16 | Qs.41:17 | Qs.41:23 | Qs.41:24 | Qs.41:25 | Qs.41:27 | Qs.41:28 | Qs.41:29 | Qs.41:40 | Qs.41:43 | Qs.41:50 | Qs.42:16 | Qs.42:21 | Qs.42:26 | Qs.42:35 | Qs.42:44 | Qs.42:45 | Qs.43:8 | Qs.43:25 | Qs.43:39 | Qs.43:41 | Qs.43:42 | Qs.43:48 | Qs.43:55 | Qs.43:56 | Qs.43:65 | Qs.43:74 | Qs.43:75 | Qs.44:29 | Qs.44:37 | Qs.44:49 | Qs.45:8 | Qs.45:9 | Qs.45:10 | Qs.45:11 | Qs.45:27 | Qs.45:33 | Qs.45:34 | Qs.45:35 | Qs.46:18 | Qs.46:24 | Qs.46:25 | Qs.46:26 | Qs.46:27 | Qs.46:32 | Qs.46:34 | Qs.46:35 | Qs.47:1 | Qs.47:8 | Qs.47:10 | Qs.47:12 | Qs.47:13 | Qs.47:27 | Qs.47:28 | Qs.47:32 | Qs.47:34 | Qs.47:38 | Qs.48:13 | Qs.50:14 | Qs.50:24 | Qs.50:36 | Qs.51:10 | Qs.51:13 | Qs.51:14 | Qs.51:33 | Qs.51:40 | Qs.51:41 | Qs.51:42 | Qs.51:44 | Qs.51:45 | Qs.51:46 | Qs.51:59 | Qs.52:7 | Qs.52:8 | Qs.52:11 | Qs.52:13 | Qs.52:16 | Qs.53:50 | Qs.53:51 | Qs.53:52 | Qs.54:11 | Qs.54:12 | Qs.54:14 | Qs.54:16 | Qs.54:19 | Qs.54:20 | Qs.54:21 | Qs.54:30 | Qs.54:31 | Qs.54:38 | Qs.54:39 | Qs.54:42 | Qs.54:45 | Qs.54:46 | Qs.54:47 | Qs.54:48 | Qs.54:51 | Qs.55:41 | Qs.55:43 | Qs.55:44 | Qs.56:56 | Qs.56:93 | Qs.56:94 | Qs.57:14 | Qs.57:15 | Qs.57:19 | Qs.58:5 | Qs.58:20 | Qs.59:2 | Qs.59:3 | Qs.59:4 | Qs.59:5 | Qs.59:15 | Qs.59:19 | Qs.64:5 | Qs.64:10 | Qs.65:9 | Qs.66:9 | Qs.66:10 | Qs.67:6 | Qs.67:10 | Qs.67:11 | Qs.67:18 | Qs.67:28 | Qs.68:33 | Qs.68:43 | Qs.69:5 | Qs.69:6 | Qs.69:7 | Qs.69:8 | Qs.69:10 | Qs.69:30 | Qs.69:31 | Qs.69:32 | Qs.69:36 | Qs.69:37 | Qs.69:50 | Qs.71:25 | Qs.72:15 | Qs.72:17 | Qs.72:23 | Qs.72:24 | Qs.73:12 | Qs.73:13 | Qs.73:16 | Qs.74:26 | Qs.74:27 | Qs.74:41 | Qs.74:48 | Qs.76:4 | Qs.76:31 | Qs.77:16 | Qs.77:17 | Qs.77:18 | Qs.77:29 | Qs.77:30 | Qs.78:4 | Qs.78:5 | Qs.78:22 | Qs.78:23 | Qs.78:24 | Qs.78:25 | Qs.78:26 | Qs.78:30 | Qs.79:8 | Qs.79:9 | Qs.79:25 | Qs.79:37 | Qs.79:39 | Qs.79:46 | Qs.80:40 | Qs.80:41 | Qs.80:42 | Qs.82:14 | Qs.82:15 | Qs.82:16 | Qs.83:7 | Qs.83:8 | Qs.83:9 | Qs.83:10 | Qs.83:14 | Qs.83:15 | Qs.83:16 | Qs.83:34 | Qs.83:36 | Qs.84:11 | Qs.84:12 | Qs.84:24 | Qs.85:10 | Qs.85:18 | Qs.87:11 | Qs.87:12 | Qs.87:13 | Qs.88:2 | Qs.88:3 | Qs.88:4 | Qs.88:5 | Qs.88:6 | Qs.88:7 | Qs.88:24 | Qs.89:6 | Qs.89:13 | Qs.89:14 | Qs.89:25 | Qs.89:26 | Qs.90:11 | Qs.90:12 | Qs.90:19 | Qs.90:20 | Qs.91:10 | Qs.91:14 | Qs.91:15 | Qs.92:15 | Qs.95:5 | Qs.96:15 | Qs.96:16 | Qs.96:18 | Qs.98:6 | Qs.101:9 | Qs.101:11 | Qs.102:3 | Qs.102:4 | Qs.102:6 | Qs.102:7 | Qs.103:2 | Qs.104:4 | Qs.104:5 | Qs.104:6 | Qs.104:7 | Qs.104:8 | Qs.104:9 | Qs.105:1 | Qs.105:2 | Qs.105:3 | Qs.105:4 | Qs.105:5 | Qs.111:1 | Qs.111:3 | Qs.111:5 | Qs.56:57 | Qs.56:81 | Qs.56:87 | Qs.57:8 | Qs.57:14 | Qs.58:5 | Qs.64:6 | Qs.64:10 | Qs.67:9 | Qs.67:10 | Qs.67:18 | Qs.67:20 | Qs.67:21 | Qs.68:9 | Qs.68:15 | Qs.68:37 | Qs.68:38 | Qs.68:39 | Qs.68:40 | Qs.68:41 | Qs.68:43 | Qs.68:46 | Qs.68:47 | Qs.69:4 | Qs.69:9 | Qs.69:10 | Qs.69:33 | Qs.69:41 | Qs.70:36 | Qs.70:37 | Qs.71:6 | Qs.71:7 | Qs.71:21 | Qs.71:22 | Qs.71:23 | Qs.71:24 | Qs.74:15 | Qs.74:16 | Qs.74:18 | Qs.74:20 | Qs.74:23 | Qs.74:24 | Qs.74:25 | Qs.74:31 | Qs.74:49 | Qs.74:50 | Qs.74:51 | Qs.74:52 | Qs.75:5 | Qs.75:6 | Qs.75:31 | Qs.75:32 | Qs.75:33 | Qs.77:48 | Qs.77:50 | Qs.78:28 | Qs.79:21 | Qs.79:22 | Qs.80:17 | Qs.81:26 | Qs.82:9 | Qs.83:13 | Qs.84:20 | Qs.84:21 | Qs.84:22 | Qs.85:19 | Qs.86:15 | Qs.88:23 | Qs.91:11 | Qs.91:14 | Qs.92:9 | Qs.92:16 | Qs.95:7 | Qs.96:6 | Qs.96:7 | Qs.96:13 | Qs.96:14 | Qs.96:15"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Perbuatan orang kafir sia-sia",
					"ayat" => "Qs.2:217 | Qs.2:266 | Qs.3:22 | Qs.3:117 | Qs.5:5 | Qs.6:88 | Qs.7:139 | Qs.7:147 | Qs.8:36 | Qs.9:17 | Qs.9:53 | Qs.9:54 | Qs.9:69 | Qs.11:16 | Qs.13:14 | Qs.14:18 | Qs.18:103 | Qs.18:104 | Qs.18:105 | Qs.24:39 | Qs.25:23 | Qs.33:19 | Qs.39:65 | Qs.47:1 | Qs.47:8 | Qs.47:9 | Qs.47:28 | Qs.47:32"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Perbuatan yang mengakibatkan kekufuran"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Meramal nasib mengakibatkan kekufuran",
					"ayat" => "Qs.5:3 | Qs.5:90"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Keingkaran dan kedurhakaan orang kafir",
					"ayat" => "Qs.2:6 | Qs.2:7 | Qs.2:28 | Qs.2:74 | Qs.2:90 | Qs.2:99 | Qs.2:118 | Qs.2:139 | Qs.2:145 | Qs.2:146 | Qs.2:170 | Qs.2:171 | Qs.2:213 | Qs.2:258 | Qs.3:19 | Qs.3:20 | Qs.3:64 | Qs.3:65 | Qs.3:183 | Qs.4:66 | Qs.4:80 | Qs.5:20 | Qs.5:68 | Qs.5:86 | Qs.5:102 | Qs.5:104 | Qs.6:4 | Qs.6:5 | Qs.6:6 | Qs.6:7 | Qs.6:11 | Qs.6:28 | Qs.6:29 | Qs.6:33 | Qs.6:43 | Qs.6:46 | Qs.6:57 | Qs.6:64 | Qs.6:81 | Qs.6:95 | Qs.6:104 | Qs.6:109 | Qs.6:122 | Qs.6:124 | Qs.6:130 | Qs.6:148 | Qs.6:157 | Qs.7:40 | Qs.7:51 | Qs.7:60 | Qs.7:64 | Qs.7:66 | Qs.7:70 | Qs.7:71 | Qs.7:72 | Qs.7:75 | Qs.7:76 | Qs.7:79 | Qs.7:82 | Qs.7:86 | Qs.7:88 | Qs.7:90 | Qs.7:93 | Qs.7:102 | Qs.7:109 | Qs.7:110 | Qs.7:111 | Qs.7:123 | Qs.7:146 | Qs.7:175 | Qs.7:182 | Qs.8:23 | Qs.8:31 | Qs.8:32 | Qs.8:52 | Qs.8:54 | Qs.8:55 | Qs.8:71 | Qs.9:9 | Qs.9:32 | Qs.9:70 | Qs.9:76 | Qs.9:125 | Qs.9:126 | Qs.10:2 | Qs.10:13 | Qs.10:15 | Qs.10:31 | Qs.10:39 | Qs.10:42 | Qs.10:74 | Qs.10:75 | Qs.10:77 | Qs.10:78 | Qs.10:97 | Qs.11:19 | Qs.11:27 | Qs.11:28 | Qs.11:29 | Qs.11:36 | Qs.11:43 | Qs.11:53 | Qs.11:59 | Qs.11:60 | Qs.11:62 | Qs.11:79 | Qs.11:87 | Qs.11:91 | Qs.11:97 | Qs.12:103 | Qs.12:105 | Qs.12:106 | Qs.13:1 | Qs.13:30 | Qs.13:31 | Qs.13:33 | Qs.14:9 | Qs.14:10 | Qs.14:13 | Qs.14:28 | Qs.15:11 | Qs.15:14 | Qs.15:15 | Qs.15:80 | Qs.15:81 | Qs.16:24 | Qs.16:34 | Qs.16:54 | Qs.16:55 | Qs.16:62 | Qs.16:71 | Qs.16:72 | Qs.16:82 | Qs.16:83 | Qs.16:103 | Qs.16:112 | Qs.16:113 | Qs.17:41 | Qs.17:45 | Qs.17:46 | Qs.17:47 | Qs.17:48 | Qs.17:51 | Qs.17:60 | Qs.17:67 | Qs.17:89 | Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93 | Qs.17:94 | Qs.17:95 | Qs.17:98 | Qs.17:99 | Qs.17:102 | Qs.18:35 | Qs.18:36 | Qs.18:37 | Qs.18:50 | Qs.18:55 | Qs.18:56 | Qs.18:57 | Qs.18:101 | Qs.18:102 | Qs.18:105 | Qs.18:106 | Qs.19:73 | Qs.19:77 | Qs.20:16 | Qs.20:49 | Qs.20:56 | Qs.20:57 | Qs.20:58 | Qs.20:60 | Qs.20:133 | Qs.20:134 | Qs.21:2 | Qs.21:3 | Qs.21:5 | Qs.21:6 | Qs.21:24 | Qs.21:30 | Qs.21:32 | Qs.21:36 | Qs.21:38 | Qs.21:42 | Qs.21:53 | Qs.21:55 | Qs.21:64 | Qs.21:65 | Qs.21:68 | Qs.22:3 | Qs.22:9 | Qs.22:38 | Qs.22:46 | Qs.22:47 | Qs.22:55 | Qs.22:68 | Qs.22:72 | Qs.23:24 | Qs.23:33 | Qs.23:35 | Qs.23:38 | Qs.23:44 | Qs.23:46 | Qs.23:47 | Qs.23:48 | Qs.23:66 | Qs.23:68 | Qs.23:69 | Qs.23:70 | Qs.23:71 | Qs.23:75 | Qs.23:76 | Qs.23:82 | Qs.23:83 | Qs.23:90 | Qs.23:105 | Qs.25:4 | Qs.25:5 | Qs.25:7 | Qs.25:8 | Qs.25:9 | Qs.25:11 | Qs.25:18 | Qs.25:21 | Qs.25:32 | Qs.25:33 | Qs.25:36 | Qs.25:37 | Qs.25:39 | Qs.25:40 | Qs.25:50 | Qs.25:55 | Qs.25:60 | Qs.25:77 | Qs.26:5 | Qs.26:6 | Qs.26:8 | Qs.26:12 | Qs.26:23 | Qs.26:27 | Qs.26:29 | Qs.26:31 | Qs.26:34 | Qs.26:35 | Qs.26:49 | Qs.26:103 | Qs.26:105 | Qs.26:117 | Qs.26:121 | Qs.26:123 | Qs.26:130 | Qs.26:136 | Qs.26:137 | Qs.26:139 | Qs.26:141 | Qs.26:154 | Qs.26:157 | Qs.26:166 | Qs.26:174 | Qs.26:176 | Qs.26:185 | Qs.26:186 | Qs.26:187 | Qs.26:190 | Qs.26:201 | Qs.26:203 | Qs.27:13 | Qs.27:14 | Qs.27:24 | Qs.27:47 | Qs.27:56 | Qs.27:66 | Qs.27:67 | Qs.27:68 | Qs.27:71 | Qs.27:80 | Qs.27:81 | Qs.27:82 | Qs.27:83 | Qs.27:84 | Qs.28:38 | Qs.28:47 | Qs.28:48 | Qs.28:50 | Qs.28:57 | Qs.28:73 | Qs.28:76 | Qs.28:78 | Qs.29:18 | Qs.29:23 | Qs.29:24 | Qs.29:29 | Qs.29:37 | Qs.29:39 | Qs.29:47 | Qs.29:49 | Qs.29:52 | Qs.29:53 | Qs.29:61 | Qs.29:63 | Qs.29:65 | Qs.29:66 | Qs.29:67 | Qs.30:9 | Qs.30:10 | Qs.30:33 | Qs.30:35 | Qs.30:51 | Qs.30:58 | Qs.30:59 | Qs.31:11 | Qs.31:21 | Qs.31:25 | Qs.32:10 | Qs.32:22 | Qs.32:28 | Qs.34:5 | Qs.34:17 | Qs.34:19 | Qs.34:24 | Qs.34:31 | Qs.34:32 | Qs.34:33 | Qs.34:34 | Qs.34:35 | Qs.34:38 | Qs.34:43 | Qs.34:45 | Qs.34:53 | Qs.35:3 | Qs.35:25 | Qs.35:42 | Qs.35:43 | Qs.36:7 | Qs.36:10 | Qs.36:14 | Qs.36:15 | Qs.36:19 | Qs.36:45 | Qs.36:46 | Qs.36:47 | Qs.36:48 | Qs.37:12 | Qs.37:13 | Qs.37:14 | Qs.37:16 | Qs.37:17 | Qs.37:21 | Qs.37:35 | Qs.37:36 | Qs.37:71 | Qs.37:90 | Qs.37:94 | Qs.37:138 | Qs.37:149 | Qs.37:150 | Qs.37:151 | Qs.37:152 | Qs.37:153 | Qs.37:156 | Qs.37:157 | Qs.37:167 | Qs.37:168 | Qs.37:169 | Qs.37:170 | Qs.37:176 | Qs.38:4 | Qs.38:5 | Qs.38:6 | Qs.38:7 | Qs.38:8 | Qs.38:10 | Qs.38:12 | Qs.38:13 | Qs.38:14 | Qs.38:16 | Qs.38:68 | Qs.39:8 | Qs.39:25 | Qs.39:26 | Qs.39:38 | Qs.39:42 | Qs.39:45 | Qs.39:49 | Qs.39:50 | Qs.39:59 | Qs.40:4 | Qs.40:10 | Qs.40:12 | Qs.40:22 | Qs.40:34 | Qs.40:35 | Qs.40:36 | Qs.40:37 | Qs.40:41 | Qs.40:50 | Qs.40:56 | Qs.40:59 | Qs.40:61 | Qs.40:63 | Qs.40:69 | Qs.40:81 | Qs.40:83 | Qs.41:5 | Qs.41:14 | Qs.41:15 | Qs.41:28 | Qs.41:40 | Qs.41:44 | Qs.41:50 | Qs.41:51 | Qs.41:52 | Qs.42:13 | Qs.42:14 | Qs.42:18 | Qs.42:21 | Qs.42:48 | Qs.43:7 | Qs.43:9 | Qs.43:15 | Qs.43:21 | Qs.43:22 | Qs.43:23 | Qs.43:24 | Qs.43:30 | Qs.43:31 | Qs.43:47 | Qs.43:48 | Qs.43:57 | Qs.43:58 | Qs.43:78 | Qs.43:87 | Qs.44:13 | Qs.44:15 | Qs.44:21 | Qs.44:36 | Qs.44:50 | Qs.45:6 | Qs.45:8 | Qs.45:9 | Qs.45:17 | Qs.45:25 | Qs.45:31 | Qs.45:32 | Qs.45:35 | Qs.46:3 | Qs.46:4 | Qs.46:5 | Qs.46:7 | Qs.46:10 | Qs.46:11 | Qs.46:17 | Qs.46:22 | Qs.46:23 | Qs.46:26 | Qs.47:3 | Qs.47:16 | Qs.49:16 | Qs.50:2 | Qs.50:5 | Qs.50:27 | Qs.51:9 | Qs.51:11 | Qs.51:12 | Qs.51:53 | Qs.52:14 | Qs.52:15 | Qs.52:32 | Qs.52:34 | Qs.52:44 | Qs.53:21 | Qs.53:22 | Qs.53:23 | Qs.53:28 | Qs.53:33 | Qs.53:35 | Qs.53:36 | Qs.53:59 | Qs.53:60 | Qs.53:61 | Qs.54:2 | Qs.54:3 | Qs.54:36 | Qs.54:42 | Qs.54:44 | Qs.56:46 | Qs.56:47 | Qs.56:48"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Penangguhan (siksa) orang kafir di dunia",
					"ayat" => "Qs.2:15 | Qs.3:178 | Qs.3:181 | Qs.3:196 | Qs.3:197 | Qs.5:71 | Qs.6:8 | Qs.6:9 | Qs.6:44 | Qs.6:57 | Qs.6:58 | Qs.6:91 | Qs.6:108 | Qs.6:110 | Qs.6:112 | Qs.6:133 | Qs.6:137 | Qs.6:158 | Qs.6:159 | Qs.7:13 | Qs.7:14 | Qs.7:15 | Qs.7:95 | Qs.7:155 | Qs.7:183 | Qs.8:33 | Qs.9:55 | Qs.9:64 | Qs.9:69 | Qs.9:85 | Qs.10:11 | Qs.10:19 | Qs.10:23 | Qs.10:50 | Qs.10:70 | Qs.11:8 | Qs.11:48 | Qs.11:93 | Qs.11:110 | Qs.11:122 | Qs.13:6 | Qs.13:32 | Qs.14:10 | Qs.14:30 | Qs.14:42 | Qs.15:3 | Qs.16:33 | Qs.16:45 | Qs.16:55 | Qs.16:61 | Qs.16:117 | Qs.17:18 | Qs.17:20 | Qs.17:104 | Qs.18:58 | Qs.19:75 | Qs.19:84 | Qs.20:129 | Qs.20:131 | Qs.20:135 | Qs.21:37 | Qs.21:44 | Qs.21:109 | Qs.21:111 | Qs.22:44 | Qs.22:47 | Qs.22:48 | Qs.22:55 | Qs.23:40 | Qs.23:54 | Qs.23:55 | Qs.23:56 | Qs.26:205 | Qs.27:4 | Qs.28:59 | Qs.28:61 | Qs.28:76 | Qs.29:53 | Qs.29:66 | Qs.30:34 | Qs.31:24 | Qs.32:21 | Qs.32:29 | Qs.32:30 | Qs.33:16 | Qs.35:45 | Qs.37:174 | Qs.37:175 | Qs.37:178 | Qs.37:179 | Qs.39:8 | Qs.39:39 | Qs.40:4 | Qs.40:75 | Qs.41:40 | Qs.41:45 | Qs.42:14 | Qs.42:20 | Qs.42:21 | Qs.43:29 | Qs.43:33 | Qs.43:34 | Qs.43:35 | Qs.43:83 | Qs.44:59 | Qs.46:26 | Qs.46:35 | Qs.47:12 | Qs.51:43 | Qs.51:59 | Qs.52:12 | Qs.52:45 | Qs.54:26 | Qs.54:46 | Qs.55:31 | Qs.59:3 | Qs.68:44 | Qs.70:42 | Qs.72:16 | Qs.73:11 | Qs.77:46 | Qs.86:17"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Kembali kufur",
					"ayat" => "Qs.3:86 | Qs.3:90 | Qs.5:12 | Qs.5:54 | Qs.16:106 | Qs.47:25 | Qs.47:32 | Qs.47:33"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Penghinaan orang kafir terhadap Allah",
					"ayat" => "Qs.2:7 | Qs.4:56 | Qs.4:151 | Qs.11:57 | Qs.25:77 | Qs.28:41"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Permohonan orang kafir pada hari kiamat untuk kembali ke dunia",
					"ayat" => "Qs.6:27 | Qs.7:53 | Qs.26:102"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Kebodohan orang kafir",
					"ayat" => "Qs.2:6 | Qs.6:137 | Qs.6:140 | Qs.7:139 | Qs.7:193 | Qs.7:195 | Qs.7:197 | Qs.7:198 | Qs.8:21 | Qs.8:22 | Qs.8:23 | Qs.8:32 | Qs.8:55 | Qs.8:65 | Qs.9:19 | Qs.21:59 | Qs.21:62 | Qs.21:63 | Qs.21:65 | Qs.23:63 | Qs.25:42 | Qs.25:43 | Qs.25:44 | Qs.25:55 | Qs.26:71 | Qs.26:72 | Qs.26:73 | Qs.26:74 | Qs.26:75 | Qs.26:76 | Qs.26:97 | Qs.26:98 | Qs.26:136 | Qs.26:137 | Qs.26:151 | Qs.26:152 | Qs.26:166 | Qs.26:186 | Qs.27:4 | Qs.27:13 | Qs.27:24 | Qs.27:47 | Qs.28:50 | Qs.29:4 | Qs.29:17 | Qs.29:25 | Qs.29:52 | Qs.29:61 | Qs.29:63 | Qs.29:67 | Qs.37:154 | Qs.53:35 | Qs.59:13 | Qs.63:7 | Qs.70:38"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Keabadian siksaan orang kafir",
					"ayat" => "Qs.4:56 | Qs.20:74 | Qs.87:13"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Permusuhan orang kafir terhadap orang Islam",
					"ayat" => "Qs.4:101 | Qs.5:82 | Qs.8:60 | Qs.60:1 | Qs.60:2 | Qs.63:4"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Cacian Allah terhadap orang kafir",
					"ayat" => "Qs.10:91 | Qs.17:107 | Qs.27:59 | Qs.27:64 | Qs.28:71 | Qs.28:72 | Qs.34:24 | Qs.34:27 | Qs.67:16 | Qs.67:22 | Qs.67:28 | Qs.67:30"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Istidraj (memperdaya)",
					"ayat" => "Qs.6:44 | Qs.7:95 | Qs.7:182 | Qs.7:183 | Qs.8:48 | Qs.27:4 | Qs.29:38"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Syirik"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Hukum syirik"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Syirik adalah kezaliman",
					"ayat" => "Qs.2:51 | Qs.2:54 | Qs.2:57 | Qs.2:59 | Qs.2:92 | Qs.2:165 | Qs.6:45 | Qs.6:82 | Qs.7:5 | Qs.31:13"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Syirik adalah dosa terbesar",
					"ayat" => "Qs.4:36 | Qs.4:48 | Qs.4:116 | Qs.4:117 | Qs.5:17 | Qs.5:72 | Qs.5:73 | Qs.6:19 | Qs.6:136 | Qs.6:137 | Qs.6:138 | Qs.6:139 | Qs.6:140 | Qs.6:150 | Qs.6:151 | Qs.7:33 | Qs.7:37 | Qs.10:106 | Qs.12:38 | Qs.12:40 | Qs.15:96 | Qs.25:68 | Qs.26:71 | Qs.26:74"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Mengabulkan permohonan orang musyrik jika minta perlindungan",
					"ayat" => "Qs.9:6"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Membuat perjanjian dengan orang musyrik",
					"ayat" => "Qs.9:1 | Qs.9:4 | Qs.9:7 | Qs.9:12"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Allah bebas dari orang musyrik",
					"ayat" => "Qs.9:1 | Qs.9:3"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Rasul bebas dari kemusyrikan dan orang musyrik",
					"ayat" => "Qs.6:19 | Qs.9:1 | Qs.9:3 | Qs.10:41 | Qs.11:35 | Qs.11:54 | Qs.26:216"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Memohon bantuan orang musyrik"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Hukum memohon bantuan orang musyrik",
					"ayat" => "Qs.9:23 | Qs.33:1 | Qs.60:1 | Qs.60:4 | Qs.60:9 | Qs.60:13"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Kelemahan tuhan selain Allah",
					"ayat" => "Qs.5:76 | Qs.6:40 | Qs.6:41 | Qs.6:46 | Qs.6:51 | Qs.6:63 | Qs.6:70 | Qs.6:80 | Qs.6:81 | Qs.6:94 | Qs.7:37 | Qs.7:48 | Qs.7:53 | Qs.7:148 | Qs.7:191 | Qs.7:192 | Qs.7:193 | Qs.7:194 | Qs.7:195 | Qs.7:197 | Qs.7:198 | Qs.10:18 | Qs.10:30 | Qs.10:34 | Qs.10:35 | Qs.10:36 | Qs.10:66 | Qs.10:106 | Qs.11:21 | Qs.11:101 | Qs.13:14 | Qs.13:16 | Qs.13:33 | Qs.13:34 | Qs.14:22 | Qs.16:17 | Qs.16:20 | Qs.16:21 | Qs.16:53 | Qs.16:73 | Qs.16:87 | Qs.17:56 | Qs.19:42 | Qs.20:89 | Qs.20:97 | Qs.21:21 | Qs.21:42 | Qs.21:43 | Qs.21:58 | Qs.21:59 | Qs.21:63 | Qs.21:65 | Qs.21:66 | Qs.21:98 | Qs.21:99 | Qs.22:12 | Qs.22:13 | Qs.22:62 | Qs.22:73 | Qs.25:3 | Qs.25:17 | Qs.25:19 | Qs.25:55 | Qs.26:72 | Qs.26:73 | Qs.26:93 | Qs.26:98 | Qs.29:17 | Qs.29:41 | Qs.29:42 | Qs.30:40 | Qs.31:11 | Qs.31:30 | Qs.34:22 | Qs.34:42 | Qs.35:3 | Qs.35:13 | Qs.35:14 | Qs.35:40 | Qs.36:23 | Qs.36:75 | Qs.37:91 | Qs.37:92 | Qs.37:93 | Qs.37:95 | Qs.37:162 | Qs.39:38 | Qs.39:43 | Qs.40:20 | Qs.40:21 | Qs.40:43 | Qs.40:73 | Qs.40:74 | Qs.40:84 | Qs.42:9 | Qs.42:46 | Qs.43:86 | Qs.45:19 | Qs.46:4 | Qs.46:5 | Qs.46:28 | Qs.53:58 | Qs.67:20 | Qs.67:28 | Qs.67:30 | Qs.68:40 | Qs.71:25 | Qs.86:10"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Trinitas",
					"ayat" => "Qs.4:171 | Qs.5:73"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Siksa orang kafir",
					"ayat" => "Qs.2:27 | Qs.2:123 | Qs.2:165 | Qs.2:167 | Qs.3:151 | Qs.4:48 | Qs.4:116 | Qs.4:119 | Qs.4:121 | Qs.5:72 | Qs.5:73 | Qs.6:22 | Qs.6:157 | Qs.7:30 | Qs.7:37 | Qs.7:38 | Qs.7:78 | Qs.7:146 | Qs.7:152 | Qs.7:186 | Qs.9:113 | Qs.10:17 | Qs.10:28 | Qs.13:14 | Qs.13:33 | Qs.14:29 | Qs.14:30 | Qs.14:49 | Qs.14:50 | Qs.16:86 | Qs.16:88 | Qs.16:104 | Qs.16:106 | Qs.17:22 | Qs.17:39 | Qs.17:97 | Qs.17:98 | Qs.18:102 | Qs.21:29 | Qs.23:117 | Qs.25:19 | Qs.26:94 | Qs.26:95 | Qs.26:100 | Qs.26:213 | Qs.29:25 | Qs.30:13 | Qs.30:29 | Qs.30:42 | Qs.33:67 | Qs.33:73 | Qs.37:158 | Qs.39:15 | Qs.39:47 | Qs.39:48 | Qs.39:65 | Qs.40:43 | Qs.40:52 | Qs.48:6 | Qs.50:26 | Qs.59:17"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Perintah tidak mengikuti orang musyrik",
					"ayat" => "Qs.2:120 | Qs.2:135 | Qs.2:145 | Qs.3:28 | Qs.3:149 | Qs.3:156 | Qs.5:51 | Qs.6:106 | Qs.6:121 | Qs.6:150 | Qs.7:3 | Qs.8:47 | Qs.10:89 | Qs.11:121 | Qs.13:37 | Qs.28:86 | Qs.28:87 | Qs.30:31 | Qs.33:1 | Qs.33:48 | Qs.40:14 | Qs.42:15 | Qs.45:18 | Qs.68:8 | Qs.68:10 | Qs.76:24 | Qs.109:2 | Qs.109:4 | Qs.109:6"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Menjadikan makhluk sebagai tuhan",
					"ayat" => "Qs.19:81"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Nifak (kemunafikan)"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Sifat orang munafik",
					"ayat" => "Qs.2:8 | Qs.2:9 | Qs.2:10 | Qs.2:11 | Qs.2:12 | Qs.2:13 | Qs.2:14 | Qs.2:204 | Qs.2:205 | Qs.2:206 | Qs.2:264 | Qs.3:118 | Qs.3:119 | Qs.3:120 | Qs.3:154 | Qs.3:161 | Qs.3:167 | Qs.3:168 | Qs.4:60 | Qs.4:61 | Qs.4:62 | Qs.4:65 | Qs.4:72 | Qs.4:73 | Qs.4:78 | Qs.4:81 | Qs.4:83 | Qs.4:89 | Qs.4:91 | Qs.4:107 | Qs.4:108 | Qs.4:137 | Qs.4:139 | Qs.4:140 | Qs.4:141 | Qs.4:142 | Qs.4:143 | Qs.5:41 | Qs.5:52 | Qs.5:61 | Qs.8:21 | Qs.8:49 | Qs.9:8 | Qs.9:42 | Qs.9:45 | Qs.9:46 | Qs.9:47 | Qs.9:49 | Qs.9:50 | Qs.9:54 | Qs.9:56 | Qs.9:57 | Qs.9:58 | Qs.9:59 | Qs.9:62 | Qs.9:64 | Qs.9:65 | Qs.9:67 | Qs.9:69 | Qs.9:75 | Qs.9:77 | Qs.9:79 | Qs.9:81 | Qs.9:83 | Qs.9:86 | Qs.9:87 | Qs.9:90 | Qs.9:93 | Qs.9:94 | Qs.9:95 | Qs.9:96 | Qs.9:107 | Qs.9:125 | Qs.9:126 | Qs.9:127 | Qs.22:11 | Qs.22:53 | Qs.24:47 | Qs.24:48 | Qs.24:49 | Qs.24:50 | Qs.24:53 | Qs.24:54 | Qs.24:63 | Qs.29:10 | Qs.33:12 | Qs.33:13 | Qs.33:14 | Qs.33:15 | Qs.33:18 | Qs.33:19 | Qs.33:20 | Qs.47:16 | Qs.47:20 | Qs.47:26 | Qs.47:30 | Qs.48:11 | Qs.48:12 | Qs.58:14 | Qs.58:16 | Qs.58:18 | Qs.58:19 | Qs.59:11 | Qs.59:12 | Qs.59:13 | Qs.63:1 | Qs.63:2 | Qs.63:3 | Qs.63:4 | Qs.63:5 | Qs.63:7 | Qs.74:31 | Qs.107:4 | Qs.107:5 | Qs.107:6 | Qs.107:7"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Siksa orang munafik",
					"ayat" => "Qs.2:10 | Qs.2:15 | Qs.2:16 | Qs.2:17 | Qs.2:18 | Qs.2:19 | Qs.2:20 | Qs.2:206 | Qs.2:264 | Qs.3:106 | Qs.4:62 | Qs.4:109 | Qs.4:137 | Qs.4:138 | Qs.4:140 | Qs.4:143 | Qs.4:145 | Qs.5:53 | Qs.9:49 | Qs.9:52 | Qs.9:55 | Qs.9:63 | Qs.9:64 | Qs.9:66 | Qs.9:67 | Qs.9:68 | Qs.9:69 | Qs.9:73 | Qs.9:74 | Qs.9:79 | Qs.9:81 | Qs.9:82 | Qs.9:84 | Qs.9:85 | Qs.9:87 | Qs.9:94 | Qs.9:95 | Qs.9:96 | Qs.9:101 | Qs.9:109 | Qs.22:11 | Qs.24:11 | Qs.24:50 | Qs.29:11 | Qs.33:19 | Qs.33:24 | Qs.33:60 | Qs.33:61 | Qs.33:62 | Qs.33:73 | Qs.35:10 | Qs.48:6 | Qs.57:13 | Qs.57:14 | Qs.57:15 | Qs.58:14 | Qs.58:15 | Qs.58:16 | Qs.58:17 | Qs.58:18 | Qs.58:19 | Qs.63:3 | Qs.63:6 | Qs.66:9 | Qs.107:4 | Qs.107:5 | Qs.107:6 | Qs.107:7"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Beberapa hukum tentang orang munafik",
					"ayat" => "Qs.3:118 | Qs.4:72 | Qs.4:89 | Qs.4:91 | Qs.9:73 | Qs.9:83 | Qs.9:84 | Qs.66:9"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Riyaa' dalam berbuat baik",
					"ayat" => "Qs.2:8 | Qs.2:9 | Qs.2:264 | Qs.4:38 | Qs.4:81 | Qs.4:142 | Qs.9:56 | Qs.11:15 | Qs.11:16 | Qs.12:106 | Qs.30:39 | Qs.47:26 | Qs.47:30 | Qs.48:11 | Qs.57:14 | Qs.63:1 | Qs.63:2 | Qs.107:6"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Kapan boleh membunuh orang munafik",
					"ayat" => "Qs.4:89 | Qs.4:90 | Qs.4:91"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Orang munafik dan siksa kubur",
					"ayat" => "Qs.9:101"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Sikap orang munafik terhadap Islam",
					"ayat" => "Qs.2:8 | Qs.2:9 | Qs.2:13 | Qs.2:14 | Qs.2:204 | Qs.3:118 | Qs.3:119 | Qs.3:120 | Qs.3:154 | Qs.3:167 | Qs.3:168 | Qs.3:173 | Qs.4:60 | Qs.4:61 | Qs.4:72 | Qs.4:73 | Qs.4:78 | Qs.4:81 | Qs.4:89 | Qs.4:91 | Qs.4:139 | Qs.4:141 | Qs.5:41 | Qs.5:52 | Qs.5:61 | Qs.8:22 | Qs.9:47 | Qs.9:48 | Qs.9:50 | Qs.9:52 | Qs.9:61 | Qs.9:65 | Qs.9:107 | Qs.9:125 | Qs.9:127 | Qs.24:11 | Qs.24:47 | Qs.24:48 | Qs.29:10 | Qs.33:12 | Qs.33:13 | Qs.33:14 | Qs.33:18 | Qs.33:19 | Qs.33:20 | Qs.47:16 | Qs.47:26 | Qs.47:29 | Qs.57:14 | Qs.58:14 | Qs.59:11 | Qs.59:12 | Qs.63:2 | Qs.63:5 | Qs.63:7 | Qs.63:8 | Qs.74:31"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Bid'ah",
					"ayat" => "Qs.16:116 | Qs.57:27"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Sihir"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Hakikat sihir",
					"ayat" => "Qs.2:102 | Qs.7:116"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Hukum sihir",
					"ayat" => "Qs.2:102 | Qs.4:51"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "sihir sebagai profesi",
					"ayat" => "Qs.2:102 | Qs.113:4"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Meminta upah dari sihir",
					"ayat" => "Qs.7:113 | Qs.26:41"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Meramal nasib",
					"ayat" => "Qs.7:131 | Qs.27:47 | Qs.36:18 | Qs.36:19"),
				array(
					"id_master" => 7,
					"level" => 1,
					"index" => "Iman bertambah dan berkurang"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Bertambah dan berkurangnya iman",
					"ayat" => "Qs.8:2 | Qs.9:124 | Qs.18:13 | Qs.19:76 | Qs.47:17 | Qs.48:4"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Iman adalah ucapan dan perbuatan",
					"ayat" => "Qs.2:3 | Qs.2:25 | Qs.2:62 | Qs.2:82 | Qs.2:143 | Qs.2:177 | Qs.2:217 | Qs.2:277 | Qs.2:278 | Qs.3:57 | Qs.3:114 | Qs.4:36 | Qs.4:122 | Qs.4:124 | Qs.4:173 | Qs.5:9 | Qs.5:55 | Qs.5:69 | Qs.5:93 | Qs.6:48 | Qs.8:72 | Qs.8:74 | Qs.8:75 | Qs.9:20 | Qs.10:4 | Qs.10:9 | Qs.10:63 | Qs.11:11 | Qs.11:23 | Qs.13:29 | Qs.14:23 | Qs.14:31 | Qs.17:9 | Qs.18:30 | Qs.18:88 | Qs.18:107 | Qs.19:60 | Qs.19:96 | Qs.20:75 | Qs.20:82 | Qs.21:94 | Qs.22:14 | Qs.22:23 | Qs.22:50 | Qs.22:56 | Qs.22:77 | Qs.22:78 | Qs.23:2 | Qs.23:4 | Qs.23:5 | Qs.23:8 | Qs.23:9 | Qs.24:62 | Qs.25:63 | Qs.26:227 | Qs.28:67 | Qs.28:80 | Qs.29:7 | Qs.29:9 | Qs.29:58 | Qs.30:15 | Qs.30:44 | Qs.30:45 | Qs.31:8 | Qs.32:19 | Qs.33:31 | Qs.34:4 | Qs.34:11 | Qs.34:37 | Qs.35:7 | Qs.38:24 | Qs.38:28 | Qs.41:8 | Qs.41:33 | Qs.42:22 | Qs.42:23 | Qs.42:26 | Qs.45:30 | Qs.47:2 | Qs.47:12 | Qs.47:36 | Qs.48:29 | Qs.64:9 | Qs.65:11 | Qs.84:25 | Qs.90:17 | Qs.95:6 | Qs.98:7 | Qs.103:3"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Perbedaan tingkat amal kebaikan"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Perbedaan derajat manusia sesuai dengan amalnya",
					"ayat" => "Qs.3:163 | Qs.6:53 | Qs.6:132 | Qs.6:165 | Qs.9:19 | Qs.9:20 | Qs.11:105 | Qs.13:18 | Qs.16:75 | Qs.16:76 | Qs.32:18 | Qs.35:32 | Qs.38:28 | Qs.39:9 | Qs.39:24 | Qs.41:34 | Qs.41:35 | Qs.45:22 | Qs.47:14 | Qs.49:11 | Qs.49:15 | Qs.56:7 | Qs.56:8 | Qs.56:9 | Qs.56:10 | Qs.56:11 | Qs.56:27 | Qs.57:10 | Qs.57:13 | Qs.59:8 | Qs.59:20 | Qs.67:2 | Qs.68:35 | Qs.92:4 | Qs.92:5 | Qs.92:6 | Qs.49:13"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Manusia terbaik"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Ketaatan dan kemaksiatan"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Taat dan amal shaleh"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kewajiban hamba pada Allah",
					"ayat" => "Qs.2:138 | Qs.2:172 | Qs.3:32 | Qs.3:102 | Qs.6:102 | Qs.6:162 | Qs.10:3 | Qs.11:61 | Qs.13:15 | Qs.15:99 | Qs.19:65 | Qs.22:31 | Qs.22:78 | Qs.23:52 | Qs.24:55 | Qs.27:40 | Qs.28:77 | Qs.29:16 | Qs.29:17 | Qs.29:36 | Qs.29:56 | Qs.30:31 | Qs.31:12 | Qs.33:70 | Qs.34:11 | Qs.36:22 | Qs.36:61 | Qs.39:2 | Qs.39:10 | Qs.39:11 | Qs.39:16 | Qs.39:66 | Qs.40:14 | Qs.48:9 | Qs.51:56 | Qs.53:62 | Qs.69:33"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Pelipatgandaan pahala bagi orang mukmin",
					"ayat" => "Qs.2:245 | Qs.2:261 | Qs.2:265 | Qs.4:40 | Qs.6:160 | Qs.10:26 | Qs.24:38 | Qs.27:89 | Qs.28:84 | Qs.30:39 | Qs.33:31 | Qs.34:37 | Qs.35:30 | Qs.39:35 | Qs.42:20 | Qs.42:23 | Qs.42:26 | Qs.57:11 | Qs.57:18 | Qs.64:17 | Qs.73:20"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Keutamaan iman",
					"ayat" => "Qs.2:186 | Qs.2:218 | Qs.2:221 | Qs.3:110 | Qs.3:139 | Qs.3:195 | Qs.4:39 | Qs.4:57 | Qs.4:67 | Qs.4:68 | Qs.4:69 | Qs.4:122 | Qs.4:146 | Qs.4:162 | Qs.4:173 | Qs.4:175 | Qs.5:56 | Qs.5:69 | Qs.5:84 | Qs.5:85 | Qs.5:119 | Qs.6:48 | Qs.6:81 | Qs.6:82 | Qs.6:127 | Qs.7:42 | Qs.7:96 | Qs.7:156 | Qs.7:157 | Qs.7:203 | Qs.8:4 | Qs.8:72 | Qs.8:74 | Qs.8:75 | Qs.9:19 | Qs.9:20 | Qs.9:72 | Qs.9:88 | Qs.10:62 | Qs.10:64 | Qs.10:98 | Qs.10:101 | Qs.10:103 | Qs.11:11 | Qs.11:23 | Qs.17:19 | Qs.18:88 | Qs.20:123 | Qs.21:9 | Qs.21:88 | Qs.21:103 | Qs.22:17 | Qs.22:23 | Qs.22:38 | Qs.22:50 | Qs.22:56 | Qs.23:1 | Qs.23:58 | Qs.24:52 | Qs.27:53 | Qs.27:57 | Qs.29:7 | Qs.29:9 | Qs.29:58 | Qs.29:69 | Qs.30:15 | Qs.30:30 | Qs.30:45 | Qs.31:8 | Qs.32:17 | Qs.32:18 | Qs.32:19 | Qs.33:35 | Qs.33:47 | Qs.33:73 | Qs.34:4 | Qs.34:37 | Qs.35:7 | Qs.35:33 | Qs.37:160 | Qs.38:49 | Qs.39:17 | Qs.39:20 | Qs.39:61 | Qs.40:40 | Qs.40:51 | Qs.41:8 | Qs.41:18 | Qs.42:26 | Qs.43:68 | Qs.43:69 | Qs.43:70 | Qs.43:72 | Qs.44:51 | Qs.44:56 | Qs.45:30 | Qs.46:14 | Qs.47:3 | Qs.47:12 | Qs.48:5 | Qs.48:29 | Qs.51:15 | Qs.51:16 | Qs.51:55 | Qs.52:17 | Qs.52:19 | Qs.52:20 | Qs.52:22 | Qs.52:23 | Qs.52:24 | Qs.54:35 | Qs.56:12 | Qs.56:13 | Qs.56:14 | Qs.56:24 | Qs.57:7 | Qs.57:12 | Qs.57:19 | Qs.57:21 | Qs.57:28 | Qs.58:22 | Qs.61:10 | Qs.61:11 | Qs.61:12 | Qs.61:13 | Qs.64:9 | Qs.65:11 | Qs.66:8 | Qs.70:35 | Qs.72:13 | Qs.76:5 | Qs.76:6 | Qs.76:11 | Qs.76:13 | Qs.76:14 | Qs.76:15 | Qs.76:16 | Qs.76:17 | Qs.76:18 | Qs.76:19 | Qs.76:20 | Qs.76:21 | Qs.76:22 | Qs.77:41 | Qs.77:42 | Qs.77:43 | Qs.78:31 | Qs.78:36 | Qs.79:41 | Qs.80:38 | Qs.80:39 | Qs.82:13 | Qs.83:18 | Qs.83:22 | Qs.83:23 | Qs.83:24 | Qs.83:25 | Qs.83:34 | Qs.83:35 | Qs.84:8 | Qs.84:9 | Qs.84:25 | Qs.85:11 | Qs.87:14 | Qs.88:8 | Qs.88:9 | Qs.92:17 | Qs.98:7 | Qs.98:8"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Perbuatan dan niat",
					"ayat" => "Qs.2:112 | Qs.2:143 | Qs.2:173 | Qs.2:225 | Qs.2:261 | Qs.2:262 | Qs.2:264 | Qs.2:265 | Qs.2:272 | Qs.3:145 | Qs.4:6 | Qs.4:38 | Qs.4:100 | Qs.4:114 | Qs.4:146 | Qs.5:27 | Qs.5:89 | Qs.5:93 | Qs.5:95 | Qs.6:145 | Qs.9:98 | Qs.9:99 | Qs.11:15 | Qs.11:16 | Qs.16:41 | Qs.16:106 | Qs.16:115 | Qs.17:84 | Qs.22:37 | Qs.24:33 | Qs.33:5 | Qs.42:20 | Qs.57:11 | Qs.57:18 | Qs.57:25 | Qs.76:9"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Melihat sebab akibat",
					"ayat" => "Qs.3:121 | Qs.4:71 | Qs.4:102 | Qs.5:23 | Qs.8:60 | Qs.12:67 | Qs.12:87"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kebaikan yang ada di alam akhirat",
					"ayat" => "Qs.3:14 | Qs.3:15 | Qs.3:148 | Qs.3:195 | Qs.4:77 | Qs.6:32 | Qs.12:57 | Qs.12:109 | Qs.16:30 | Qs.16:41 | Qs.16:95 | Qs.16:96 | Qs.16:107 | Qs.17:19 | Qs.17:21 | Qs.18:31 | Qs.18:44 | Qs.18:46 | Qs.19:76 | Qs.28:60 | Qs.28:61 | Qs.28:80 | Qs.29:64 | Qs.40:39 | Qs.42:36 | Qs.43:35 | Qs.62:11 | Qs.73:20 | Qs.87:17"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Berjual beli dengan Allah",
					"ayat" => "Qs.9:9 | Qs.9:111 | Qs.35:29 | Qs.57:11 | Qs.57:18 | Qs.61:10 | Qs.64:17"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kewajiban suami mengajak keluarganya untuk taat",
					"ayat" => "Qs.19:55 | Qs.20:132"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Bersegera dalam melakukan kebaikan",
					"ayat" => "Qs.2:148 | Qs.3:114 | Qs.3:133 | Qs.5:35 | Qs.5:48 | Qs.21:90 | Qs.39:54 | Qs.57:21 | Qs.83:26"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Amal shaleh sebagai pintu kebaikan",
					"ayat" => "Qs.2:5 | Qs.2:25 | Qs.2:62 | Qs.2:82 | Qs.4:85 | Qs.4:114 | Qs.4:175 | Qs.5:9 | Qs.5:93 | Qs.5:119 | Qs.7:156 | Qs.7:157 | Qs.7:158 | Qs.7:196 | Qs.9:121 | Qs.17:9 | Qs.17:19 | Qs.18:2 | Qs.18:46 | Qs.18:103 | Qs.18:107 | Qs.18:110 | Qs.19:60 | Qs.19:63 | Qs.19:72 | Qs.19:76 | Qs.19:87 | Qs.19:96 | Qs.20:75 | Qs.20:112 | Qs.21:101 | Qs.21:102 | Qs.22:14 | Qs.22:30 | Qs.22:50 | Qs.22:77 | Qs.23:10 | Qs.23:11 | Qs.23:72 | Qs.23:102 | Qs.23:111 | Qs.26:89 | Qs.26:90 | Qs.27:89 | Qs.28:80 | Qs.28:83 | Qs.29:7 | Qs.29:9 | Qs.29:58 | Qs.30:15 | Qs.30:38 | Qs.31:5 | Qs.31:8 | Qs.32:17 | Qs.33:35 | Qs.33:71 | Qs.34:37 | Qs.35:10 | Qs.35:30 | Qs.37:61 | Qs.37:74 | Qs.37:128 | Qs.37:160 | Qs.40:40 | Qs.43:72 | Qs.46:16 | Qs.51:16 | Qs.55:60 | Qs.57:7 | Qs.57:10 | Qs.57:11 | Qs.57:18 | Qs.64:9 | Qs.69:21 | Qs.69:24 | Qs.71:4 | Qs.73:20 | Qs.77:43 | Qs.77:44 | Qs.79:41 | Qs.83:26 | Qs.84:25 | Qs.87:14 | Qs.95:6 | Qs.98:7 | Qs.99:7 | Qs.103:3"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Amal shaleh sebagai pelebur dosa-dosa kecil",
					"ayat" => "Qs.2:271 | Qs.11:114 | Qs.28:54"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Tidak ingin terus menerus berbuat maksiat",
					"ayat" => "Qs.3:135"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Hal-hal yang diwajibkan (oleh Allah)",
					"ayat" => "Qs.3:186 | Qs.31:17 | Qs.42:43"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Pentingnya berbuat dengan teliti",
					"ayat" => "Qs.17:19 | Qs.22:32 | Qs.22:37 | Qs.23:2 | Qs.94:7"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Perbuatan dilihat dari akhirnya",
					"ayat" => "Qs.2:217 | Qs.2:266 | Qs.23:60"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Perbedaan tingkat amal saleh",
					"ayat" => "Qs.2:263 | Qs.9:19 | Qs.9:20 | Qs.17:21 | Qs.35:32 | Qs.40:40 | Qs.41:34 | Qs.41:46 | Qs.47:14 | Qs.49:11 | Qs.49:13 | Qs.49:15 | Qs.56:7 | Qs.56:8 | Qs.56:9 | Qs.56:10 | Qs.56:11 | Qs.56:27 | Qs.57:10 | Qs.57:13 | Qs.68:35 | Qs.92:4"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kebutuhan muslim terhadap amal saleh",
					"ayat" => "Qs.2:62 | Qs.2:82 | Qs.2:272 | Qs.3:30 | Qs.3:92 | Qs.4:57 | Qs.4:122 | Qs.4:124 | Qs.4:173 | Qs.5:9 | Qs.5:39 | Qs.5:69 | Qs.5:93 | Qs.5:119 | Qs.6:48 | Qs.6:54 | Qs.6:158 | Qs.9:112 | Qs.11:11 | Qs.14:23 | Qs.16:97 | Qs.18:2 | Qs.18:103 | Qs.19:60 | Qs.19:63 | Qs.19:76 | Qs.19:96 | Qs.20:75 | Qs.20:112 | Qs.21:94 | Qs.21:101 | Qs.22:14 | Qs.22:37 | Qs.22:50 | Qs.22:77 | Qs.23:102 | Qs.26:89 | Qs.27:89 | Qs.27:92 | Qs.28:67 | Qs.29:6 | Qs.30:44 | Qs.35:10 | Qs.35:18 | Qs.37:61 | Qs.39:41 | Qs.39:55 | Qs.40:40 | Qs.42:20 | Qs.46:14 | Qs.51:16 | Qs.53:39 | Qs.64:9 | Qs.65:11 | Qs.84:6 | Qs.84:25 | Qs.87:14 | Qs.95:6 | Qs.98:7 | Qs.99:7 | Qs.103:3"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Balasan dan pahala dari Allah",
					"ayat" => "Qs.2:62 | Qs.2:112 | Qs.2:127 | Qs.2:162 | Qs.2:174 | Qs.2:177 | Qs.3:136 | Qs.3:171 | Qs.3:172 | Qs.3:179 | Qs.3:199 | Qs.4:40 | Qs.4:66 | Qs.4:67 | Qs.4:74 | Qs.4:95 | Qs.4:114 | Qs.4:134 | Qs.4:146 | Qs.4:152 | Qs.4:162 | Qs.5:9 | Qs.8:4 | Qs.8:28 | Qs.9:22 | Qs.9:120 | Qs.9:121 | Qs.10:72 | Qs.11:11 | Qs.11:29 | Qs.11:51 | Qs.11:115 | Qs.12:56 | Qs.12:57 | Qs.12:90 | Qs.16:41 | Qs.16:96 | Qs.16:97 | Qs.18:2 | Qs.18:3 | Qs.26:109 | Qs.26:127 | Qs.26:145 | Qs.26:164 | Qs.26:180 | Qs.29:27 | Qs.29:58 | Qs.33:29 | Qs.33:31 | Qs.33:35 | Qs.33:44 | Qs.34:47 | Qs.35:7 | Qs.36:11 | Qs.36:21 | Qs.38:86 | Qs.48:10 | Qs.48:16 | Qs.48:29 | Qs.49:3 | Qs.57:7 | Qs.57:11 | Qs.57:18 | Qs.64:15 | Qs.65:5 | Qs.67:12 | Qs.68:3 | Qs.68:46 | Qs.73:20 | Qs.84:25 | Qs.95:6"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Hidayah (petunjuk) dari Allah",
					"ayat" => "Qs.2:5 | Qs.2:26 | Qs.2:38 | Qs.2:120 | Qs.2:142 | Qs.2:143 | Qs.2:185 | Qs.2:198 | Qs.2:213 | Qs.2:258 | Qs.2:264 | Qs.2:272 | Qs.3:8 | Qs.3:73 | Qs.3:86 | Qs.4:26 | Qs.4:68 | Qs.4:88 | Qs.4:137 | Qs.4:168 | Qs.4:175 | Qs.5:16 | Qs.5:51 | Qs.5:67 | Qs.5:108 | Qs.6:35 | Qs.6:71 | Qs.6:77 | Qs.6:80 | Qs.6:84 | Qs.6:87 | Qs.6:88 | Qs.6:90 | Qs.6:125 | Qs.6:144 | Qs.6:149 | Qs.6:161 | Qs.7:43 | Qs.7:55 | Qs.7:155 | Qs.7:178 | Qs.7:186 | Qs.7:203 | Qs.9:19 | Qs.9:24 | Qs.9:33 | Qs.9:37 | Qs.9:80 | Qs.9:109 | Qs.9:115 | Qs.10:9 | Qs.10:25 | Qs.10:35 | Qs.12:52 | Qs.13:27 | Qs.13:31 | Qs.14:4 | Qs.14:12 | Qs.14:21 | Qs.16:9 | Qs.16:36 | Qs.16:37 | Qs.16:93 | Qs.16:104 | Qs.16:107 | Qs.16:121 | Qs.17:97 | Qs.18:13 | Qs.18:17 | Qs.18:24 | Qs.19:58 | Qs.19:76 | Qs.20:50 | Qs.20:122 | Qs.20:123 | Qs.22:16 | Qs.22:37 | Qs.22:54 | Qs.24:35 | Qs.24:36 | Qs.25:31 | Qs.26:62 | Qs.26:78 | Qs.27:63 | Qs.28:22 | Qs.28:50 | Qs.28:56 | Qs.29:69 | Qs.30:29 | Qs.31:5 | Qs.32:13 | Qs.33:4 | Qs.34:6 | Qs.34:50 | Qs.35:8 | Qs.37:99 | Qs.38:22 | Qs.39:3 | Qs.39:18 | Qs.39:23 | Qs.39:36 | Qs.39:37 | Qs.39:57 | Qs.40:28 | Qs.40:33 | Qs.41:17 | Qs.42:13 | Qs.42:52 | Qs.43:27 | Qs.45:23 | Qs.46:10 | Qs.47:5 | Qs.47:17 | Qs.48:4 | Qs.48:20 | Qs.48:28 | Qs.53:23 | Qs.61:5 | Qs.61:7 | Qs.61:9 | Qs.62:5 | Qs.63:6 | Qs.64:11 | Qs.74:31 | Qs.87:3 | Qs.90:10 | Qs.92:12 | Qs.93:7"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Taufiq dari Allah",
					"ayat" => "Qs.4:35 | Qs.11:88"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Melenyapkan kesusahan orang muslim",
					"ayat" => "Qs.2:173 | Qs.2:239 | Qs.5:6 | Qs.5:93 | Qs.5:101 | Qs.6:152 | Qs.7:42 | Qs.8:66 | Qs.9:91 | Qs.20:2 | Qs.22:78 | Qs.23:62 | Qs.24:10 | Qs.49:7 | Qs.58:13 | Qs.64:16 | Qs.65:7 | Qs.73:20"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Hemat dalam bekerja",
					"ayat" => "Qs.2:286 | Qs.6:141 | Qs.7:42 | Qs.25:67 | Qs.73:20"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Menggunakan hak rukhshah (dispensasi)",
					"ayat" => "Qs.23:62"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Perbuatan yang menghalangi api neraka",
					"ayat" => "Qs.2:25 | Qs.3:103 | Qs.3:198 | Qs.5:65 | Qs.9:111 | Qs.11:23 | Qs.64:9 | Qs.90:13 | Qs.90:14 | Qs.90:15 | Qs.90:16 | Qs.92:18"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Mengerahkan seluruh kemampuan untuk taat kepada Allah",
					"ayat" => "Qs.2:63 | Qs.2:93 | Qs.2:207 | Qs.2:208 | Qs.3:102 | Qs.7:144 | Qs.7:164 | Qs.7:170 | Qs.7:171 | Qs.19:12 | Qs.20:84"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Kontinuitas dalam bekerja",
					"ayat" => "Qs.3:200"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Mengharap wasilah (kedudukan)",
					"ayat" => "Qs.5:35 | Qs.17:57"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Larangan menghina perbuatan baik",
					"ayat" => "Qs.2:219 | Qs.99:7"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Amal shaleh menjadi syafaat bagi pelakunya",
					"ayat" => "Qs.2:134 | Qs.2:141 | Qs.19:87 | Qs.41:46"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Menghitung amal kebaikan",
					"ayat" => "Qs.2:48 | Qs.2:85 | Qs.2:123 | Qs.2:134 | Qs.2:140 | Qs.2:141 | Qs.2:144 | Qs.2:149 | Qs.2:197 | Qs.2:215 | Qs.2:233 | Qs.2:235 | Qs.2:237 | Qs.2:270 | Qs.2:271 | Qs.2:272 | Qs.2:273 | Qs.2:281 | Qs.2:284 | Qs.3:25 | Qs.3:29 | Qs.3:30 | Qs.3:92 | Qs.3:99 | Qs.3:195 | Qs.4:1 | Qs.4:127 | Qs.4:135 | Qs.6:3 | Qs.6:60 | Qs.6:108 | Qs.6:132 | Qs.6:159 | Qs.6:164 | Qs.7:7 | Qs.7:8 | Qs.8:47 | Qs.9:94 | Qs.9:105 | Qs.9:120 | Qs.9:121 | Qs.10:21 | Qs.10:23 | Qs.10:61 | Qs.11:92 | Qs.11:111 | Qs.13:42 | Qs.17:13 | Qs.17:14 | Qs.17:71 | Qs.18:30 | Qs.18:49 | Qs.19:79 | Qs.20:15 | Qs.20:52 | Qs.21:47 | Qs.21:94 | Qs.22:70 | Qs.23:62 | Qs.24:24 | Qs.24:53 | Qs.24:64 | Qs.26:188 | Qs.27:93 | Qs.29:8 | Qs.31:15 | Qs.31:23 | Qs.34:3 | Qs.35:10 | Qs.36:12 | Qs.39:7 | Qs.39:70 | Qs.42:6 | Qs.42:25 | Qs.43:19 | Qs.43:80 | Qs.45:28 | Qs.45:29 | Qs.47:35 | Qs.49:14 | Qs.50:16 | Qs.50:17 | Qs.50:18 | Qs.50:23 | Qs.53:40 | Qs.54:52 | Qs.54:53 | Qs.57:4 | Qs.58:6 | Qs.58:7 | Qs.58:11 | Qs.59:18 | Qs.62:8 | Qs.64:7 | Qs.69:18 | Qs.72:28 | Qs.73:20 | Qs.75:13 | Qs.78:29 | Qs.78:40 | Qs.79:35 | Qs.82:10 | Qs.82:11 | Qs.82:12 | Qs.84:23 | Qs.90:7 | Qs.99:6 | Qs.99:7 | Qs.99:8"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Ikhlas dalam berbuat",
					"ayat" => "Qs.1:5 | Qs.2:112 | Qs.2:139 | Qs.3:35 | Qs.3:145 | Qs.4:114 | Qs.4:146 | Qs.6:52 | Qs.6:162 | Qs.7:29 | Qs.10:105 | Qs.11:29 | Qs.11:51 | Qs.14:31 | Qs.18:28 | Qs.18:110 | Qs.22:31 | Qs.25:57 | Qs.26:109 | Qs.26:127 | Qs.26:145 | Qs.26:164 | Qs.26:180 | Qs.30:39 | Qs.31:22 | Qs.34:47 | Qs.36:21 | Qs.37:74 | Qs.37:128 | Qs.37:160 | Qs.38:83 | Qs.38:86 | Qs.39:2 | Qs.39:11 | Qs.39:14 | Qs.40:14 | Qs.40:65 | Qs.41:6 | Qs.41:30 | Qs.41:33 | Qs.42:23 | Qs.60:1 | Qs.76:9 | Qs.92:19 | Qs.92:20 | Qs.94:7 | Qs.94:8 | Qs.98:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Peringatan Allah terhadap hambaNya",
					"ayat" => "Qs.2:235 | Qs.3:28 | Qs.3:30 | Qs.5:92 | Qs.8:68 | Qs.17:57 | Qs.24:63"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Cinta Allah pada hamba yang shaleh",
					"ayat" => "Qs.3:76 | Qs.4:69 | Qs.5:54 | Qs.5:93"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Maksiat dan dosa"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Dosa-dosa besar",
					"ayat" => "Qs.2:275 | Qs.4:10 | Qs.4:16 | Qs.4:29 | Qs.4:30 | Qs.4:93 | Qs.5:29 | Qs.5:32 | Qs.5:33 | Qs.5:90 | Qs.5:91 | Qs.6:136 | Qs.6:137 | Qs.6:138 | Qs.6:139 | Qs.6:140 | Qs.6:144 | Qs.6:151 | Qs.6:157 | Qs.7:9 | Qs.7:28 | Qs.7:33 | Qs.7:40 | Qs.8:16 | Qs.9:39 | Qs.16:106 | Qs.19:59 | Qs.24:2 | Qs.24:4 | Qs.24:15 | Qs.24:23 | Qs.25:68 | Qs.31:13 | Qs.49:12"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Pelebur dosa besar",
					"ayat" => "Qs.3:89 | Qs.4:16 | Qs.4:92 | Qs.5:34 | Qs.5:39 | Qs.5:74 | Qs.7:153 | Qs.9:102 | Qs.24:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Dosa batin",
					"ayat" => "Qs.6:120 | Qs.6:151 | Qs.7:33"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Dosa terbesar",
					"ayat" => "Qs.2:165 | Qs.4:116 | Qs.4:117 | Qs.5:72 | Qs.5:73 | Qs.6:19 | Qs.6:136 | Qs.6:144 | Qs.6:151 | Qs.7:33 | Qs.7:37 | Qs.7:40 | Qs.9:80 | Qs.10:106 | Qs.12:38 | Qs.13:14 | Qs.18:57 | Qs.19:90"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Pelebur dosa kecil",
					"ayat" => "Qs.2:271 | Qs.4:31 | Qs.4:48 | Qs.7:153 | Qs.28:54"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Keinginan untuk berbuat maksiat",
					"ayat" => "Qs.45:8 | Qs.56:46 | Qs.71:7"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Menyiksa pelaku maksiat",
					"ayat" => "Qs.2:48 | Qs.2:59 | Qs.2:61 | Qs.2:65 | Qs.2:85 | Qs.2:86 | Qs.2:96 | Qs.2:123 | Qs.2:165 | Qs.2:178 | Qs.2:275 | Qs.2:284 | Qs.3:11 | Qs.3:77 | Qs.3:112 | Qs.3:127 | Qs.3:152 | Qs.3:165 | Qs.3:182 | Qs.4:14 | Qs.4:62 | Qs.4:88 | Qs.4:93 | Qs.4:97 | Qs.4:115 | Qs.4:160 | Qs.5:18 | Qs.5:26 | Qs.5:49 | Qs.5:94 | Qs.6:6 | Qs.6:42 | Qs.6:44 | Qs.6:45 | Qs.6:49 | Qs.6:65 | Qs.6:125 | Qs.6:146 | Qs.6:157 | Qs.7:38 | Qs.7:72 | Qs.7:78 | Qs.7:92 | Qs.7:93 | Qs.7:95 | Qs.7:130 | Qs.7:136 | Qs.7:137 | Qs.7:146 | Qs.7:162 | Qs.7:163 | Qs.7:164 | Qs.7:165 | Qs.7:166 | Qs.7:167 | Qs.7:182 | Qs.8:13 | Qs.9:66 | Qs.9:74 | Qs.9:77 | Qs.11:76 | Qs.11:113 | Qs.11:116 | Qs.11:117 | Qs.13:31 | Qs.13:33 | Qs.14:14 | Qs.14:27 | Qs.15:4 | Qs.15:42 | Qs.15:58 | Qs.15:66 | Qs.15:73 | Qs.15:74 | Qs.15:79 | Qs.15:83 | Qs.15:84 | Qs.16:25 | Qs.16:26 | Qs.16:47 | Qs.17:10 | Qs.17:16 | Qs.17:17 | Qs.17:38 | Qs.17:58 | Qs.17:68 | Qs.17:69 | Qs.17:97 | Qs.17:98 | Qs.18:40 | Qs.18:41 | Qs.18:42 | Qs.18:87 | Qs.19:59 | Qs.20:97 | Qs.20:124 | Qs.20:125 | Qs.20:126 | Qs.20:127 | Qs.22:47 | Qs.24:11 | Qs.24:63 | Qs.25:34 | Qs.25:36 | Qs.25:37 | Qs.25:68 | Qs.25:69 | Qs.26:189 | Qs.26:202 | Qs.27:14 | Qs.27:50 | Qs.27:51 | Qs.27:58 | Qs.27:69 | Qs.27:90 | Qs.28:40 | Qs.28:41 | Qs.28:58 | Qs.28:59 | Qs.28:82 | Qs.29:21 | Qs.29:31 | Qs.29:33 | Qs.29:52 | Qs.30:41 | Qs.32:26 | Qs.33:30 | Qs.33:62 | Qs.34:16 | Qs.34:17 | Qs.39:8 | Qs.39:13 | Qs.39:40 | Qs.39:51 | Qs.39:54 | Qs.40:5 | Qs.40:21 | Qs.40:31 | Qs.40:45 | Qs.40:46 | Qs.40:48 | Qs.40:77 | Qs.40:78 | Qs.40:84 | Qs.41:16 | Qs.41:17 | Qs.41:23 | Qs.41:25 | Qs.41:27 | Qs.41:43 | Qs.41:50 | Qs.42:16 | Qs.42:21 | Qs.42:30 | Qs.42:34 | Qs.42:45 | Qs.43:8 | Qs.43:25 | Qs.43:39 | Qs.43:42 | Qs.43:48 | Qs.43:55 | Qs.43:56 | Qs.43:65 | Qs.43:74 | Qs.45:10 | Qs.46:18 | Qs.46:24 | Qs.46:25 | Qs.46:32 | Qs.47:10 | Qs.47:23 | Qs.50:14 | Qs.50:36 | Qs.51:32 | Qs.51:33 | Qs.51:34 | Qs.51:37 | Qs.51:40 | Qs.51:41 | Qs.51:42 | Qs.51:44 | Qs.51:45 | Qs.51:46 | Qs.51:59 | Qs.52:7 | Qs.52:8 | Qs.52:11 | Qs.52:44 | Qs.52:47 | Qs.53:50 | Qs.53:51 | Qs.53:52 | Qs.53:53 | Qs.53:54 | Qs.54:11 | Qs.54:12 | Qs.54:14 | Qs.54:16 | Qs.54:19 | Qs.54:20 | Qs.54:21 | Qs.54:30 | Qs.54:31 | Qs.54:38 | Qs.54:39 | Qs.54:42 | Qs.54:51 | Qs.55:43 | Qs.55:44 | Qs.56:66 | Qs.56:67 | Qs.60:1 | Qs.65:8 | Qs.68:19 | Qs.68:20 | Qs.68:33 | Qs.69:10 | Qs.69:30 | Qs.69:31 | Qs.69:32 | Qs.69:45 | Qs.69:46 | Qs.70:17 | Qs.70:18 | Qs.71:25 | Qs.73:16 | Qs.92:10 | Qs.95:5 | Qs.105:1 | Qs.105:2 | Qs.105:3 | Qs.105:4 | Qs.105:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Penghapus pahala kebaikan",
					"ayat" => "Qs.2:217 | Qs.2:264 | Qs.3:22 | Qs.3:85 | Qs.3:90 | Qs.3:91 | Qs.3:117 | Qs.4:22 | Qs.5:5 | Qs.5:36 | Qs.5:53 | Qs.6:88 | Qs.7:147 | Qs.9:17 | Qs.9:53 | Qs.9:54 | Qs.9:69 | Qs.11:16 | Qs.18:105 | Qs.33:19 | Qs.39:65 | Qs.47:9 | Qs.47:28 | Qs.47:32 | Qs.47:33 | Qs.49:2"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Ampunan Allah terhadap pelaku maksiat",
					"ayat" => "Qs.2:52 | Qs.2:58 | Qs.2:64 | Qs.2:284 | Qs.2:286 | Qs.3:155 | Qs.3:193 | Qs.3:195 | Qs.4:31 | Qs.4:48 | Qs.4:64 | Qs.4:110 | Qs.4:116 | Qs.4:129 | Qs.4:146 | Qs.4:149 | Qs.4:153 | Qs.5:12 | Qs.5:34 | Qs.5:65 | Qs.6:54 | Qs.7:153 | Qs.7:161 | Qs.8:29 | Qs.8:70 | Qs.9:66 | Qs.16:119 | Qs.23:75 | Qs.29:21 | Qs.33:24 | Qs.39:35 | Qs.42:30 | Qs.42:34 | Qs.46:16 | Qs.46:31 | Qs.47:2 | Qs.48:5 | Qs.57:20 | Qs.64:9 | Qs.65:5 | Qs.66:8"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Memohon ampun",
					"ayat" => "Qs.2:285 | Qs.2:286 | Qs.3:16 | Qs.3:135 | Qs.3:147 | Qs.3:193 | Qs.7:23 | Qs.7:151 | Qs.7:155 | Qs.11:47 | Qs.59:10 | Qs.60:5 | Qs.66:8"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Menanggung dosa orang lain",
					"ayat" => "Qs.2:123 | Qs.2:134 | Qs.2:139 | Qs.2:141 | Qs.4:85 | Qs.4:111 | Qs.4:112 | Qs.6:31 | Qs.6:164 | Qs.10:23 | Qs.10:41 | Qs.10:108 | Qs.11:35 | Qs.14:51 | Qs.16:25 | Qs.16:34 | Qs.17:7 | Qs.17:15 | Qs.20:15 | Qs.20:101 | Qs.22:10 | Qs.24:54 | Qs.27:92 | Qs.29:12 | Qs.29:13 | Qs.30:44 | Qs.31:12 | Qs.34:25 | Qs.34:33 | Qs.34:50 | Qs.35:18 | Qs.35:39 | Qs.36:54 | Qs.37:39 | Qs.39:7 | Qs.39:41 | Qs.40:17 | Qs.40:28 | Qs.41:46 | Qs.42:15 | Qs.45:14 | Qs.45:15 | Qs.45:22 | Qs.45:28 | Qs.46:19 | Qs.46:20 | Qs.50:29 | Qs.52:16 | Qs.52:21 | Qs.53:38 | Qs.53:39 | Qs.74:38"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Balasan dari perbuatannya",
					"ayat" => "Qs.2:7 | Qs.2:10 | Qs.2:15 | Qs.2:18 | Qs.2:152 | Qs.2:194 | Qs.3:180 | Qs.4:10 | Qs.4:30 | Qs.4:57 | Qs.4:85 | Qs.4:111 | Qs.4:112 | Qs.4:113 | Qs.4:115 | Qs.4:123 | Qs.4:155 | Qs.4:160 | Qs.5:13 | Qs.5:38 | Qs.5:95 | Qs.6:30 | Qs.6:120 | Qs.6:124 | Qs.6:125 | Qs.6:127 | Qs.6:129 | Qs.6:146 | Qs.6:160 | Qs.7:39 | Qs.7:51 | Qs.7:146 | Qs.8:30 | Qs.8:53 | Qs.9:35 | Qs.9:67 | Qs.9:79 | Qs.9:82 | Qs.9:95 | Qs.9:127 | Qs.10:8 | Qs.10:26 | Qs.10:27 | Qs.13:11 | Qs.16:104 | Qs.16:112 | Qs.17:7 | Qs.17:8 | Qs.17:72 | Qs.18:87 | Qs.20:124 | Qs.20:125 | Qs.20:126 | Qs.23:102 | Qs.23:103 | Qs.23:111 | Qs.24:38 | Qs.25:19 | Qs.27:50 | Qs.27:51 | Qs.27:52 | Qs.27:89 | Qs.27:90 | Qs.28:54 | Qs.28:67 | Qs.28:84 | Qs.29:7 | Qs.29:55 | Qs.29:58 | Qs.30:44 | Qs.32:14 | Qs.37:39 | Qs.40:34 | Qs.40:40 | Qs.40:75 | Qs.42:40 | Qs.43:36 | Qs.43:79 | Qs.45:15 | Qs.45:34 | Qs.47:7 | Qs.47:9 | Qs.48:10 | Qs.52:16 | Qs.52:42 | Qs.53:31 | Qs.55:60 | Qs.56:24 | Qs.58:11 | Qs.59:19 | Qs.61:5 | Qs.69:5 | Qs.69:6 | Qs.69:22 | Qs.69:24 | Qs.78:36 | Qs.83:36 | Qs.85:10 | Qs.86:16 | Qs.111:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Ancaman bagi orang kafir dan pelaku maksiat",
					"ayat" => "Qs.2:7 | Qs.2:15 | Qs.2:16 | Qs.2:27 | Qs.2:66 | Qs.2:79 | Qs.2:81 | Qs.2:85 | Qs.2:90 | Qs.2:98 | Qs.2:104 | Qs.2:126 | Qs.2:140 | Qs.2:144 | Qs.2:149 | Qs.2:165 | Qs.2:174 | Qs.2:175 | Qs.2:176 | Qs.2:178 | Qs.2:206 | Qs.2:210 | Qs.2:211 | Qs.2:212 | Qs.2:223 | Qs.2:229 | Qs.2:231 | Qs.2:235 | Qs.2:270 | Qs.2:279 | Qs.3:4 | Qs.3:10 | Qs.3:11 | Qs.3:12 | Qs.3:19 | Qs.3:20 | Qs.3:21 | Qs.3:22 | Qs.3:25 | Qs.3:28 | Qs.3:30 | Qs.3:56 | Qs.3:61 | Qs.3:77 | Qs.3:82 | Qs.3:85 | Qs.3:87 | Qs.3:88 | Qs.3:90 | Qs.3:91 | Qs.3:94 | Qs.3:97 | Qs.3:105 | Qs.3:106 | Qs.3:112 | Qs.3:119 | Qs.3:127 | Qs.3:128 | Qs.3:151 | Qs.3:162 | Qs.3:176 | Qs.3:177 | Qs.3:178 | Qs.3:181 | Qs.3:188 | Qs.4:10 | Qs.4:14 | Qs.4:18 | Qs.4:30 | Qs.4:37 | Qs.4:38 | Qs.4:42 | Qs.4:47 | Qs.4:52 | Qs.4:55 | Qs.4:56 | Qs.4:81 | Qs.4:84 | Qs.4:87 | Qs.4:102 | Qs.4:108 | Qs.4:115 | Qs.4:119 | Qs.4:121 | Qs.4:123 | Qs.4:133 | Qs.4:135 | Qs.4:137 | Qs.4:140 | Qs.4:151 | Qs.4:161 | Qs.4:173 | Qs.5:2 | Qs.5:5 | Qs.5:12 | Qs.5:14 | Qs.5:33 | Qs.5:36 | Qs.5:41 | Qs.5:52 | Qs.5:60 | Qs.5:73 | Qs.5:80 | Qs.5:92 | Qs.5:94 | Qs.5:95 | Qs.5:98 | Qs.5:115 | Qs.6:5 | Qs.6:8 | Qs.6:10 | Qs.6:12 | Qs.6:26 | Qs.6:44 | Qs.6:47 | Qs.6:57 | Qs.6:58 | Qs.6:65 | Qs.6:67 | Qs.6:108 | Qs.6:113 | Qs.6:120 | Qs.6:123 | Qs.6:124 | Qs.6:132 | Qs.6:133 | Qs.6:134 | Qs.6:135 | Qs.6:138 | Qs.6:139 | Qs.6:147 | Qs.6:157 | Qs.6:158 | Qs.6:159 | Qs.6:165 | Qs.7:6 | Qs.7:18 | Qs.7:40 | Qs.7:41 | Qs.7:71 | Qs.7:73 | Qs.7:87 | Qs.7:97 | Qs.7:98 | Qs.7:99 | Qs.7:100 | Qs.7:103 | Qs.7:145 | Qs.7:167 | Qs.7:177 | Qs.7:180 | Qs.7:182 | Qs.7:183 | Qs.8:13 | Qs.8:19 | Qs.8:25 | Qs.8:34 | Qs.8:35 | Qs.8:38 | Qs.8:55 | Qs.8:59 | Qs.8:71 | Qs.9:2 | Qs.9:3 | Qs.9:23 | Qs.9:24 | Qs.9:52 | Qs.9:61 | Qs.9:63 | Qs.9:73 | Qs.9:78 | Qs.9:79 | Qs.9:90 | Qs.9:95 | Qs.9:105 | Qs.10:4 | Qs.10:13 | Qs.10:20 | Qs.10:21 | Qs.10:33 | Qs.10:39 | Qs.10:46 | Qs.10:50 | Qs.10:70 | Qs.10:95 | Qs.10:102 | Qs.11:3 | Qs.11:8 | Qs.11:20 | Qs.11:26 | Qs.11:38 | Qs.11:39 | Qs.11:48 | Qs.11:57 | Qs.11:65 | Qs.11:89 | Qs.11:92 | Qs.11:93 | Qs.11:102 | Qs.11:109 | Qs.11:121 | Qs.11:122 | Qs.12:107 | Qs.13:6 | Qs.13:13 | Qs.13:18 | Qs.13:25 | Qs.13:31 | Qs.13:40 | Qs.13:41 | Qs.13:42 | Qs.14:2 | Qs.14:7 | Qs.14:13 | Qs.14:19 | Qs.15:3 | Qs.15:5 | Qs.15:8 | Qs.15:13 | Qs.15:43 | Qs.15:50 | Qs.15:92 | Qs.15:93 | Qs.15:96 | Qs.16:23 | Qs.16:26 | Qs.16:33 | Qs.16:37 | Qs.16:39 | Qs.16:45 | Qs.16:46 | Qs.16:47 | Qs.16:55 | Qs.16:94 | Qs.16:116 | Qs.16:117 | Qs.17:68 | Qs.17:69 | Qs.17:76 | Qs.17:97 | Qs.18:2 | Qs.18:4 | Qs.18:29 | Qs.18:87 | Qs.19:37 | Qs.19:38 | Qs.19:39 | Qs.19:59 | Qs.19:70 | Qs.19:71 | Qs.19:84 | Qs.20:48 | Qs.20:61 | Qs.20:74 | Qs.20:81 | Qs.20:86 | Qs.20:100 | Qs.20:102 | Qs.20:124 | Qs.20:127 | Qs.20:135 | Qs.21:18 | Qs.21:29 | Qs.21:37 | Qs.21:39 | Qs.22:10 | Qs.22:48 | Qs.22:72 | Qs.23:54 | Qs.24:11 | Qs.24:14 | Qs.24:19 | Qs.24:23 | Qs.24:25 | Qs.24:55 | Qs.24:57 | Qs.24:63 | Qs.25:34 | Qs.25:68 | Qs.25:69 | Qs.25:77 | Qs.26:6 | Qs.26:206 | Qs.26:227 | Qs.27:5 | Qs.27:72 | Qs.28:37 | Qs.28:47 | Qs.29:4 | Qs.29:22 | Qs.29:23 | Qs.29:53 | Qs.29:54 | Qs.29:55 | Qs.29:66 | Qs.29:68 | Qs.30:9 | Qs.30:34 | Qs.31:6 | Qs.31:7 | Qs.31:24 | Qs.32:13 | Qs.32:22 | Qs.32:29 | Qs.32:30 | Qs.33:8 | Qs.33:36 | Qs.33:57 | Qs.33:58 | Qs.33:60 | Qs.33:61 | Qs.33:64 | Qs.34:5 | Qs.34:30 | Qs.34:38 | Qs.35:4 | Qs.35:16 | Qs.35:39 | Qs.36:67 | Qs.37:170 | Qs.38:8 | Qs.38:26 | Qs.38:27 | Qs.38:84 | Qs.38:85 | Qs.39:8 | Qs.39:15 | Qs.39:16 | Qs.39:22 | Qs.39:26 | Qs.39:32 | Qs.39:39 | Qs.39:51 | Qs.39:63 | Qs.40:70 | Qs.40:77 | Qs.41:6 | Qs.41:13 | Qs.41:27 | Qs.41:40 | Qs.41:50 | Qs.41:54 | Qs.42:16 | Qs.42:35 | Qs.43:5 | Qs.43:8 | Qs.43:19 | Qs.43:41 | Qs.43:65 | Qs.43:66 | Qs.43:79 | Qs.43:83 | Qs.43:89 | Qs.45:7 | Qs.45:10 | Qs.46:25 | Qs.46:26 | Qs.46:32 | Qs.47:11 | Qs.47:13 | Qs.47:20 | Qs.47:38 | Qs.51:60 | Qs.52:11 | Qs.52:12 | Qs.52:31 | Qs.52:45 | Qs.52:47 | Qs.53:33 | Qs.54:3 | Qs.54:21 | Qs.54:26 | Qs.54:30 | Qs.54:37 | Qs.54:43 | Qs.54:46 | Qs.54:47 | Qs.54:51 | Qs.55:31 | Qs.57:20 | Qs.58:4 | Qs.58:5 | Qs.58:8 | Qs.59:4 | Qs.59:7 | Qs.61:3 | Qs.65:1 | Qs.65:8 | Qs.65:9 | Qs.67:16 | Qs.67:17 | Qs.67:28 | Qs.67:29 | Qs.68:5 | Qs.68:6 | Qs.68:16 | Qs.68:44 | Qs.68:45 | Qs.70:2 | Qs.70:42 | Qs.71:1 | Qs.73:11 | Qs.73:17 | Qs.74:11 | Qs.74:17 | Qs.74:19 | Qs.74:20 | Qs.75:34 | Qs.75:35 | Qs.76:4 | Qs.77:15 | Qs.77:19 | Qs.77:24 | Qs.77:28 | Qs.77:34 | Qs.77:37 | Qs.77:40 | Qs.77:45 | Qs.77:46 | Qs.77:47 | Qs.77:49 | Qs.78:4 | Qs.78:5 | Qs.78:21 | Qs.78:22 | Qs.78:23 | Qs.78:30 | Qs.79:26 | Qs.82:6 | Qs.83:1 | Qs.83:4 | Qs.84:15 | Qs.84:24 | Qs.85:12 | Qs.85:20 | Qs.86:16 | Qs.88:24 | Qs.89:14 | Qs.92:14 | Qs.96:8 | Qs.96:13 | Qs.96:15 | Qs.96:16 | Qs.96:17 | Qs.96:18 | Qs.102:3 | Qs.102:4 | Qs.102:5 | Qs.102:6 | Qs.102:7 | Qs.102:8 | Qs.104:1 | Qs.104:4 | Qs.107:4 | Qs.107:5 | Qs.107:6 | Qs.107:7 | Qs.111:1 | Qs.111:3 | Qs.111:5"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Siksaan sesuai dengan tingkat perbuatannya",
					"ayat" => "Qs.17:75 | Qs.33:30"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Hal-hal yang mengakibatkan kemurkaan Allah",
					"ayat" => "Qs.3:4 | Qs.4:22 | Qs.4:93 | Qs.4:97 | Qs.4:151 | Qs.6:30 | Qs.7:71 | Qs.8:16 | Qs.20:81 | Qs.24:9 | Qs.42:16 | Qs.48:6"),
				array(
					"id_master" => 7,
					"level" => 3,
					"index" => "Cara manusia melihat dosa-dosa mereka"),
				array(
					"id_master" => 7,
					"level" => 4,
					"index" => "Ampunan Allah dan rahmatNya",
					"ayat" => "Qs.3:89 | Qs.3:129 | Qs.3:135 | Qs.3:136 | Qs.3:195 | Qs.4:106 | Qs.4:110 | Qs.4:129 | Qs.4:152 | Qs.5:9 | Qs.5:34 | Qs.5:39 | Qs.5:65 | Qs.5:74 | Qs.5:98 | Qs.6:54 | Qs.7:151 | Qs.7:155 | Qs.7:156 | Qs.7:161 | Qs.8:4 | Qs.8:29 | Qs.8:69 | Qs.8:70 | Qs.9:27 | Qs.9:71 | Qs.12:92 | Qs.13:6 | Qs.17:8 | Qs.17:25 | Qs.20:82 | Qs.23:75 | Qs.23:109 | Qs.23:118 | Qs.27:46 | Qs.29:7 | Qs.29:21 | Qs.33:24 | Qs.33:71 | Qs.36:27 | Qs.38:25 | Qs.39:35 | Qs.39:53 | Qs.40:3 | Qs.40:7 | Qs.42:25 | Qs.44:42 | Qs.46:31 | Qs.48:14 | Qs.49:3 | Qs.53:32 | Qs.57:20 | Qs.57:28 | Qs.61:12 | Qs.64:9 | Qs.64:17 | Qs.65:5 | Qs.66:8 | Qs.71:4 | Qs.73:20 | Qs.74:56"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Lemah iman",
					"ayat" => "Qs.3:135 | Qs.3:167 | Qs.7:201"),
				array(
					"id_master" => 7,
					"level" => 2,
					"index" => "Sifat-sifat orang mukmin",
					"ayat" => "Qs.7:201 | Qs.8:74 | Qs.9:18 | Qs.9:20 | Qs.13:20 | Qs.13:21 | Qs.13:22 | Qs.13:28 | Qs.14:31 | Qs.15:42 | Qs.16:42 | Qs.25:63 | Qs.25:64 | Qs.25:65 | Qs.25:67 | Qs.25:68 | Qs.25:72 | Qs.25:73 | Qs.25:74 | Qs.27:3 | Qs.29:59 | Qs.58:22"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Pemeliharaan Al Qur'an",
					"ayat" => "Qs.15:9 | Qs.75:17"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Keutamaan Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Al Qur'an menerangkan segala sesuatu",
					"ayat" => "Qs.7:52 | Qs.10:37 | Qs.11:1 | Qs.12:111 | Qs.16:89 | Qs.17:89 | Qs.18:54 | Qs.26:2 | Qs.27:1 | Qs.28:2"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Al Qur'an sebagai kalam Allah",
					"ayat" => "Qs.4:82 | Qs.11:17 | Qs.12:111 | Qs.20:99 | Qs.42:52 | Qs.45:8 | Qs.45:25 | Qs.75:19"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Al Qur'an benar-benar dari Allah",
					"ayat" => "Qs.2:2 | Qs.2:23 | Qs.3:3 | Qs.3:7 | Qs.3:60 | Qs.3:62 | Qs.3:108 | Qs.4:82 | Qs.5:64 | Qs.6:91 | Qs.6:92 | Qs.6:106 | Qs.6:114 | Qs.6:155 | Qs.6:157 | Qs.7:2 | Qs.7:3 | Qs.7:196 | Qs.10:15 | Qs.10:37 | Qs.12:3 | Qs.13:1 | Qs.15:9 | Qs.17:88 | Qs.17:105 | Qs.17:107 | Qs.18:1 | Qs.18:27 | Qs.20:4 | Qs.25:6 | Qs.26:192 | Qs.26:193 | Qs.26:194 | Qs.26:210 | Qs.26:211 | Qs.27:6 | Qs.28:3 | Qs.28:44 | Qs.28:45 | Qs.28:53 | Qs.28:85 | Qs.28:86 | Qs.29:48 | Qs.29:51 | Qs.32:2 | Qs.35:31 | Qs.36:5 | Qs.37:37 | Qs.38:8 | Qs.38:29 | Qs.38:88 | Qs.39:1 | Qs.39:23 | Qs.39:41 | Qs.39:55 | Qs.40:2 | Qs.41:2 | Qs.41:42 | Qs.41:52 | Qs.42:17 | Qs.42:52 | Qs.45:2 | Qs.45:6 | Qs.46:2 | Qs.55:2 | Qs.56:80 | Qs.69:43 | Qs.76:23 | Qs.81:25 | Qs.86:13 | Qs.86:14"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Keutamaan kalam Allah",
					"ayat" => "Qs.2:2 | Qs.3:3 | Qs.3:138 | Qs.4:59 | Qs.4:82 | Qs.5:15 | Qs.5:16 | Qs.5:47 | Qs.5:48 | Qs.5:49 | Qs.5:50 | Qs.6:66 | Qs.6:92 | Qs.6:155 | Qs.6:157 | Qs.7:52 | Qs.7:203 | Qs.8:24 | Qs.9:33 | Qs.10:1 | Qs.10:37 | Qs.10:57 | Qs.10:58 | Qs.11:1 | Qs.11:17 | Qs.12:1 | Qs.12:3 | Qs.12:104 | Qs.12:111 | Qs.13:31 | Qs.14:1 | Qs.15:1 | Qs.15:87 | Qs.16:44 | Qs.16:64 | Qs.16:89 | Qs.16:102 | Qs.17:9 | Qs.17:41 | Qs.17:78 | Qs.17:82 | Qs.17:89 | Qs.17:105 | Qs.18:1 | Qs.20:99 | Qs.21:50 | Qs.24:46 | Qs.25:1 | Qs.26:2 | Qs.26:210 | Qs.26:211 | Qs.27:1 | Qs.27:2 | Qs.27:6 | Qs.27:76 | Qs.27:77 | Qs.28:2 | Qs.28:49 | Qs.28:53 | Qs.28:86 | Qs.29:49 | Qs.29:51 | Qs.31:2 | Qs.31:3 | Qs.32:3 | Qs.34:50 | Qs.35:31 | Qs.36:2 | Qs.36:4 | Qs.36:69 | Qs.37:37 | Qs.38:1 | Qs.38:29 | Qs.38:67 | Qs.38:87 | Qs.38:88 | Qs.39:23 | Qs.39:27 | Qs.39:28 | Qs.39:33 | Qs.41:3 | Qs.41:41 | Qs.41:42 | Qs.41:44 | Qs.41:53 | Qs.42:17 | Qs.42:52 | Qs.43:2 | Qs.43:4 | Qs.43:43 | Qs.44:2 | Qs.45:6 | Qs.45:20 | Qs.46:30 | Qs.47:2 | Qs.50:1 | Qs.52:2 | Qs.56:76 | Qs.56:77 | Qs.56:78 | Qs.56:79 | Qs.59:21 | Qs.61:9 | Qs.62:2 | Qs.64:8 | Qs.65:11 | Qs.68:52 | Qs.69:40 | Qs.69:48 | Qs.69:51 | Qs.72:2 | Qs.72:13 | Qs.74:54 | Qs.76:29 | Qs.77:50 | Qs.80:11 | Qs.80:12 | Qs.81:25 | Qs.81:27 | Qs.85:21 | Qs.85:22 | Qs.86:13 | Qs.98:2 | Qs.98:3"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Al Qur'an sebagai perkataan terbaik",
					"ayat" => "Qs.6:155 | Qs.7:204 | Qs.12:111 | Qs.17:39 | Qs.18:1 | Qs.26:2 | Qs.39:23 | Qs.39:55"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Keutamaan berpegang teguh pada Al Qur'an",
					"ayat" => "Qs.2:2 | Qs.2:121 | Qs.6:155 | Qs.10:58 | Qs.11:17 | Qs.14:1 | Qs.16:89 | Qs.27:2 | Qs.27:77 | Qs.31:3 | Qs.39:23 | Qs.39:55 | Qs.42:52 | Qs.43:43 | Qs.45:20 | Qs.46:30 | Qs.81:28"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Ketenangan hati saat membaca Al Qur'an",
					"ayat" => "Qs.12:111 | Qs.13:28"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Gunung hancur bila Al Qur'an diturunkan di atasnya",
					"ayat" => "Qs.59:21"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Al Qur'an sebagai obat yang manjur",
					"ayat" => "Qs.7:52 | Qs.7:203 | Qs.7:204 | Qs.17:82 | Qs.41:44"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Berpegang teguh pada Kitab dan Sunnah",
					"ayat" => "Qs.2:44 | Qs.3:32 | Qs.3:101 | Qs.3:132 | Qs.4:13 | Qs.4:59 | Qs.4:65 | Qs.4:69 | Qs.6:155 | Qs.8:1 | Qs.8:20 | Qs.8:24 | Qs.8:46 | Qs.9:71 | Qs.18:110 | Qs.24:48 | Qs.24:51 | Qs.24:52 | Qs.24:54 | Qs.24:56 | Qs.33:2 | Qs.33:36 | Qs.43:43 | Qs.47:33 | Qs.58:13 | Qs.64:12 | Qs.81:28"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Al Qur'an sebagai jalan keluar dari fitnah",
					"ayat" => "Qs.3:103 | Qs.4:59 | Qs.5:16 | Qs.6:155 | Qs.6:157 | Qs.7:52 | Qs.7:203 | Qs.27:77"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Beberapa nama dan sifat Al Qur'an",
					"ayat" => "Qs.2:2 | Qs.2:97 | Qs.3:4 | Qs.3:58 | Qs.4:174 | Qs.5:15 | Qs.6:92 | Qs.10:57 | Qs.12:3 | Qs.13:37 | Qs.15:1 | Qs.17:9 | Qs.17:82 | Qs.18:1 | Qs.18:2 | Qs.21:10 | Qs.21:50 | Qs.25:1 | Qs.27:1 | Qs.39:28 | Qs.39:32 | Qs.39:33 | Qs.39:41 | Qs.41:3 | Qs.41:41 | Qs.43:2 | Qs.44:2 | Qs.56:77 | Qs.56:78 | Qs.56:79 | Qs.85:21"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Sikap hati-hati dalam meriwayatkan Al Qur'an",
					"ayat" => "Qs.22:52"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Keutamaan membaca Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Anjuran untuk selalu membaca Al Qur'an",
					"ayat" => "Qs.29:45 | Qs.33:34 | Qs.35:29 | Qs.87:6"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Keutamaan sebagian surat Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Keutamaan surat Al Fatihah",
					"ayat" => "Qs.15:87"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Keutamaan surat Hud",
					"ayat" => "Qs.11:120"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Keutamaan surat An-Nur",
					"ayat" => "Qs.24:1"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Adab membaca Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Membaca ta'awwudz sebelum membaca Al Qur'an",
					"ayat" => "Qs.16:98"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Orang berhadas menyentuh Al Qur'an",
					"ayat" => "Qs.56:79"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Khusuk saat mendengar Al Qur'an",
					"ayat" => "Qs.7:204 | Qs.8:2 | Qs.17:107 | Qs.17:109 | Qs.25:73 | Qs.32:15 | Qs.39:23 | Qs.46:29 | Qs.57:16 | Qs.59:21 | Qs.94:7"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Menghayati bacaan Al Qur'an",
					"ayat" => "Qs.4:82 | Qs.18:54 | Qs.23:68 | Qs.25:73 | Qs.47:24 | Qs.59:21 | Qs.73:4"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Menangis saat membaca atau mendengar Al Qur'an",
					"ayat" => "Qs.5:83 | Qs.53:60"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Memperindah suara bacaan Al Qur'an",
					"ayat" => "Qs.73:4"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Membaca Al Qur'an dengan suara keras",
					"ayat" => "Qs.17:110"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Selalu mengingat dan membaca Al Qur'an",
					"ayat" => "Qs.33:34"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Membaca Al Qur'an di malam hari",
					"ayat" => "Qs.3:113 | Qs.52:49"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Lupa hafalan Al Qur'an (sebagian atau seluruhnya)",
					"ayat" => "Qs.87:7"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Berbuat sesuai dengan Al Qur'an",
					"ayat" => "Qs.2:121 | Qs.3:7 | Qs.3:31 | Qs.36:11 | Qs.43:43"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Perbedaan dalam Al Qur'an",
					"ayat" => "Qs.2:176"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Ayat muhkam dan mutasyabih",
					"ayat" => "Qs.3:7 | Qs.11:1"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Turunnya Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Waktu turunnya Al Qur'an",
					"ayat" => "Qs.2:185 | Qs.97:1"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Al Qur'an turun dengan bahasa suku Quraisy",
					"ayat" => "Qs.12:2 | Qs.13:37 | Qs.16:103 | Qs.19:97 | Qs.20:113 | Qs.26:195 | Qs.26:198 | Qs.39:28 | Qs.41:3 | Qs.41:44 | Qs.42:7 | Qs.43:3 | Qs.44:58 | Qs.46:12"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Al Qur'an turun secara berangsur-angsur",
					"ayat" => "Qs.17:106 | Qs.25:32"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Hikmah turunnya Al Qur'an secara berangsur-angsur",
					"ayat" => "Qs.17:106 | Qs.25:32"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Ayat yang pertama diturunkan",
					"ayat" => "Qs.96:1 | Qs.96:2 | Qs.96:3 | Qs.96:4 | Qs.96:5"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Naskh (penghapusan) dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Bukti adanya naskh dalam Al Qur'an",
					"ayat" => "Qs.2:106 | Qs.13:39 | Qs.16:101"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang menaskhkan",
					"ayat" => "Qs.2:187 | Qs.2:191 | Qs.2:234 | Qs.2:286 | Qs.5:90 | Qs.8:66 | Qs.8:75 | Qs.9:5 | Qs.22:39 | Qs.33:6 | Qs.33:51 | Qs.58:13 | Qs.66:9"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang dinaskh",
					"ayat" => "Qs.2:180 | Qs.2:184 | Qs.2:240 | Qs.2:284 | Qs.4:8 | Qs.4:15 | Qs.4:16 | Qs.4:33 | Qs.4:43 | Qs.4:90 | Qs.4:91 | Qs.5:13 | Qs.5:42 | Qs.8:65 | Qs.8:72 | Qs.33:52 | Qs.58:12"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Nabi dan Jibril mengulang-ulangi bacaan Al Qur'an",
					"ayat" => "Qs.75:16 | Qs.75:17 | Qs.75:18 | Qs.75:19 | Qs.87:6"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Ancaman bagi orang yang membantah Al Qur'an",
					"ayat" => "Qs.3:78 | Qs.40:56 | Qs.40:69 | Qs.42:35"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Ancaman bagi orang yang mengubah isi Al Qur'an",
					"ayat" => "Qs.3:7 | Qs.3:78 | Qs.4:46 | Qs.5:13 | Qs.5:41"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Beberapa orang yang menjadi sebab turunnya ayat Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abu Bakar As Siddiq",
					"ayat" => "Qs.9:40 | Qs.24:22 | Qs.46:15 | Qs.49:2 | Qs.58:22 | Qs.92:17 | Qs.92:18 | Qs.92:19 | Qs.92:20 | Qs.92:21"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abu Jahal",
					"ayat" => "Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93 | Qs.25:31 | Qs.25:41 | Qs.25:55 | Qs.44:49 | Qs.96:6 | Qs.96:7 | Qs.96:9 | Qs.96:10 | Qs.96:11 | Qs.96:12 | Qs.96:13 | Qs.96:14 | Qs.96:15 | Qs.96:16 | Qs.96:17 | Qs.96:18 | Qs.96:19"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abu Sufyan",
					"ayat" => "Qs.8:36 | Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abu Talib Bin Abdul Mutalib",
					"ayat" => "Qs.9:113 | Qs.9:114 | Qs.28:56"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abu Amir Ar Rahib",
					"ayat" => "Qs.9:107"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abu Ubaidah Bin al Jarrah",
					"ayat" => "Qs.58:22"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abu 'Aqil",
					"ayat" => "Qs.9:79"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abu Lubabah bin al Munzir",
					"ayat" => "Qs.8:27 | Qs.8:28 | Qs.9:102"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abu Lahab",
					"ayat" => "Qs.111:1 | Qs.111:2 | Qs.111:3"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ibnu Ummi Maktum",
					"ayat" => "Qs.80:1 | Qs.80:2 | Qs.80:3 | Qs.80:4 | Qs.80:5 | Qs.80:6 | Qs.80:7 | Qs.80:8 | Qs.80:9 | Qs.80:10"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Akhnas bin Syariq al Thaqofi",
					"ayat" => "Qs.2:204 | Qs.68:10 | Qs.68:11 | Qs.68:12 | Qs.68:13 | Qs.68:14 | Qs.68:15 | Qs.68:16 | Qs.104:1 | Qs.104:2 | Qs.104:3 | Qs.104:4 | Qs.104:5 | Qs.104:6 | Qs.104:7 | Qs.104:8 | Qs.104:9"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Saad bin Sa'yah",
					"ayat" => "Qs.4:162"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Asad bin Abaid",
					"ayat" => "Qs.3:113 | Qs.4:162"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Asy'ats bin Qais",
					"ayat" => "Qs.3:77"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Umayyah bin Khalaf",
					"ayat" => "Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93 | Qs.25:28 | Qs.25:29 | Qs.109:1"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Anas bin Nadhr",
					"ayat" => "Qs.33:23"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Aus bin Shamit",
					"ayat" => "Qs.58:1 | Qs.58:2 | Qs.58:3 | Qs.58:4"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Bilal bin Rabah",
					"ayat" => "Qs.6:52 | Qs.18:28"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Tsa'labah bin Sa'yah",
					"ayat" => "Qs.3:113 | Qs.4:162"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Jabir bin Abdullah",
					"ayat" => "Qs.4:176"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Al Jad bin Qais",
					"ayat" => "Qs.9:49"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Hathib bin Abu Balta'ah",
					"ayat" => "Qs.60:1"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Hamzah bin Abdul Muthalib",
					"ayat" => "Qs.3:169 | Qs.3:170 | Qs.16:126 | Qs.16:127 | Qs.22:19"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Huyai bin Akhtab",
					"ayat" => "Qs.4:51 | Qs.4:52"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Khabab bin al Art",
					"ayat" => "Qs.6:52 | Qs.18:28"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Al Zubair bin al 'Awwam",
					"ayat" => "Qs.4:65"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Zaid bin Arqam",
					"ayat" => "Qs.63:7 | Qs.63:8"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Zaid bin Haritsah",
					"ayat" => "Qs.33:4 | Qs.33:37"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Sa'ad bin Abi Waqqas",
					"ayat" => "Qs.5:90 | Qs.6:52 | Qs.8:1 | Qs.18:28 | Qs.29:8 | Qs.31:14 | Qs.31:15"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Salman Al Farisi",
					"ayat" => "Qs.2:62 | Qs.6:52"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Syaibah bin Rabi'ah",
					"ayat" => "Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Shafwan bin Umayah",
					"ayat" => "Qs.8:36"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Shuhaib Ar Rumi",
					"ayat" => "Qs.2:207 | Qs.6:52 | Qs.18:28"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Dhamrah bin Jundub",
					"ayat" => "Qs.4:100"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan 'Aiz bin Amru al Mazni",
					"ayat" => "Qs.9:91"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ta'mah bin Ubairaq",
					"ayat" => "Qs.4:105"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Al 'Ash bin Wail",
					"ayat" => "Qs.19:77 | Qs.19:78 | Qs.19:79 | Qs.19:80 | Qs.107:1 | Qs.107:2 | Qs.107:3 | Qs.108:3 | Qs.109:1"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ubadah bin Shamit",
					"ayat" => "Qs.5:51 | Qs.5:52 | Qs.5:53"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abbas bin Abdul Muthalib",
					"ayat" => "Qs.8:70 | Qs.9:19"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abdullah bin Abis Sarh",
					"ayat" => "Qs.6:93"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abdullah bin Ubay bin Salul",
					"ayat" => "Qs.4:72 | Qs.5:51 | Qs.5:52 | Qs.5:53 | Qs.9:74 | Qs.9:80 | Qs.9:84 | Qs.24:11 | Qs.24:33 | Qs.63:1 | Qs.63:2 | Qs.63:3 | Qs.63:4 | Qs.63:5 | Qs.63:6 | Qs.63:7 | Qs.63:8"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abdullah bin Umayah",
					"ayat" => "Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abdullah bin Jahsy dan pasukannya",
					"ayat" => "Qs.2:217"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abdullah bin Hudzafah",
					"ayat" => "Qs.4:59"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abdullah bin Rawahah",
					"ayat" => "Qs.2:221"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abdullah bin Salam",
					"ayat" => "Qs.2:146 | Qs.2:208 | Qs.3:113 | Qs.4:162 | Qs.5:55 | Qs.46:10"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Abdullah bin Mas'ud",
					"ayat" => "Qs.6:52 | Qs.18:28"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ubaidillah bin Abi Rabi'ah",
					"ayat" => "Qs.8:36"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ubaidah bin Al Harits",
					"ayat" => "Qs.22:19"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan 'Utbah bin Abi Rabi'ah",
					"ayat" => "Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93 | Qs.22:19"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Utsman bin Thalhah Al Juhami",
					"ayat" => "Qs.4:58"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Utsman bin Affan",
					"ayat" => "Qs.39:9"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Utsman bin Mazh'un",
					"ayat" => "Qs.5:87 | Qs.5:88"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Uqbah bin Abi Mu'ith",
					"ayat" => "Qs.25:27 | Qs.25:28 | Qs.25:29"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan 'Aqil bin Abu Thalib",
					"ayat" => "Qs.8:70"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan 'Ikrimah bin Abu Jahal",
					"ayat" => "Qs.8:36"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ali bin Abu Thalib",
					"ayat" => "Qs.22:19 | Qs.32:18"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ammar bin Yasir",
					"ayat" => "Qs.16:106 | Qs.18:28"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Umar bin Khattab",
					"ayat" => "Qs.45:14 | Qs.45:15 | Qs.49:2"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Finhash",
					"ayat" => "Qs.3:181 | Qs.5:64"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Qatadah bin Nu'man",
					"ayat" => "Qs.4:110 | Qs.4:111 | Qs.4:112"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Qidar bin Salif",
					"ayat" => "Qs.91:12"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Qais bin Shirmah",
					"ayat" => "Qs.2:187"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ka'ab bin Al Asyraf",
					"ayat" => "Qs.4:51 | Qs.4:52 | Qs.4:60"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ka'ab bin 'Ajrah",
					"ayat" => "Qs.2:196"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ka'ab bin Malik",
					"ayat" => "Qs.9:106 | Qs.9:118"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Murarah bin Al Rabi' Al'Amry",
					"ayat" => "Qs.9:106 | Qs.9:118"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Mistah bin Atsatsah",
					"ayat" => "Qs.24:22"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Mus'ab bin 'Umair",
					"ayat" => "Qs.3:169 | Qs.3:170 | Qs.58:22"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ma'qil bin Yasar",
					"ayat" => "Qs.2:232"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Al Miqdad bin Al Aswad",
					"ayat" => "Qs.4:94 | Qs.18:28"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan An Nadhr bin Al Harits",
					"ayat" => "Qs.8:31 | Qs.8:32 | Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93 | Qs.70:1"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Naufal bin Al Harits",
					"ayat" => "Qs.8:70"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Hilal bin Umayyah",
					"ayat" => "Qs.9:106 | Qs.9:118 | Qs.24:6 | Qs.24:7 | Qs.24:8 | Qs.24:9"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Al Walid bin 'Utbah",
					"ayat" => "Qs.22:19"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Al Walid bin 'Uqbah",
					"ayat" => "Qs.32:18 | Qs.49:6 | Qs.49:7"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Al Walid bin Al Mughirah",
					"ayat" => "Qs.17:90 | Qs.17:91 | Qs.17:92 | Qs.17:93 | Qs.53:33 | Qs.53:34 | Qs.53:35 | Qs.53:36 | Qs.74:11 | Qs.74:12 | Qs.74:13 | Qs.74:14 | Qs.74:15 | Qs.74:16 | Qs.74:17 | Qs.74:18 | Qs.74:19 | Qs.74:20 | Qs.74:21 | Qs.74:22 | Qs.74:23 | Qs.74:24 | Qs.74:25 | Qs.74:26 | Qs.74:27 | Qs.109:1"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Beberapa wanita yang menjadi sebab turunnya ayat Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Asma' binti Abi Bakar",
					"ayat" => "Qs.60:8"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ummu Jamil",
					"ayat" => "Qs.111:4 | Qs.111:5"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ummu Syarik Ad Dausiyah",
					"ayat" => "Qs.33:50"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ummu Kultsum binti 'Uqbah",
					"ayat" => "Qs.60:10"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Hafsah binti Umar",
					"ayat" => "Qs.66:1 | Qs.66:2 | Qs.66:3 | Qs.66:4 | Qs.66:5"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Khaulah binti Tsa'labah",
					"ayat" => "Qs.58:1 | Qs.58:2 | Qs.58:3 | Qs.58:4"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Ramlah binti Abi Sufyan",
					"ayat" => "Qs.60:7"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Zainab binti Jahsy",
					"ayat" => "Qs.33:36 | Qs.33:37 | Qs.33:38"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Aisyah binti al Siddiq",
					"ayat" => "Qs.24:11 | Qs.24:12 | Qs.24:13 | Qs.24:14 | Qs.24:15 | Qs.24:16 | Qs.66:1 | Qs.66:2 | Qs.66:3 | Qs.66:4 | Qs.66:5"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ayat yang berhubungan dengan Fatimah Binti Rasulullah",
					"ayat" => "Qs.33:33"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Sujud tilawah"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Ayat-ayat sujud tilawah",
					"ayat" => "Qs.7:206 | Qs.13:15 | Qs.16:49 | Qs.17:107 | Qs.19:58 | Qs.22:18 | Qs.22:77 | Qs.25:60 | Qs.27:25 | Qs.32:15 | Qs.38:24 | Qs.41:37 | Qs.53:62 | Qs.84:21 | Qs.96:19"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Mukjizat Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Tantangan Al Qur'an",
					"ayat" => "Qs.2:1 | Qs.2:23 | Qs.3:1 | Qs.7:1 | Qs.10:1 | Qs.10:38 | Qs.11:1 | Qs.11:13 | Qs.12:1 | Qs.13:1 | Qs.14:1 | Qs.15:1 | Qs.17:88 | Qs.19:1 | Qs.20:1 | Qs.26:1 | Qs.28:49 | Qs.31:1 | Qs.31:11 | Qs.32:1 | Qs.36:1 | Qs.37:157 | Qs.38:1 | Qs.40:1 | Qs.41:1 | Qs.42:1 | Qs.42:2 | Qs.43:1 | Qs.44:1 | Qs.45:1 | Qs.46:1 | Qs.46:4 | Qs.52:34 | Qs.52:37 | Qs.52:38 | Qs.68:1"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Mukjizat bahasa",
					"ayat" => "Qs.2:1 | Qs.2:23 | Qs.3:1 | Qs.4:82 | Qs.7:1 | Qs.10:1 | Qs.10:38 | Qs.11:1 | Qs.11:13 | Qs.12:1 | Qs.13:1 | Qs.14:1 | Qs.15:1 | Qs.16:103 | Qs.19:1 | Qs.20:1 | Qs.26:1 | Qs.27:1 | Qs.28:1 | Qs.28:7 | Qs.29:1 | Qs.30:1 | Qs.31:1 | Qs.32:1 | Qs.36:1 | Qs.38:1 | Qs.40:1 | Qs.41:1 | Qs.42:1 | Qs.42:2 | Qs.43:1 | Qs.44:1 | Qs.45:1 | Qs.46:1 | Qs.50:1 | Qs.68:1"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Mukjizat ilmu pengetahuan"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ilmu janin menurut Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Tahap dalam pembentukan janin",
					"ayat" => "Qs.16:4 | Qs.22:5 | Qs.23:13 | Qs.23:14 | Qs.35:11 | Qs.36:77 | Qs.39:6 | Qs.40:67 | Qs.71:14 | Qs.75:37 | Qs.75:38 | Qs.76:2 | Qs.77:20 | Qs.80:19 | Qs.86:6 | Qs.86:7 | Qs.96:2"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Pemeliharaan janin dalam rahim",
					"ayat" => "Qs.23:13 | Qs.39:6 | Qs.77:21"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Penentuan kelamin bayi",
					"ayat" => "Qs.3:6 | Qs.13:8"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Perkembangan indra bayi",
					"ayat" => "Qs.16:78 | Qs.23:78 | Qs.32:9 | Qs.67:23 | Qs.76:2"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Masa kandungan",
					"ayat" => "Qs.46:15"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ilmu tumbuh-tumbuhan dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Penyebutan tumbuh-tumbuhan",
					"ayat" => "Qs.2:61 | Qs.2:261 | Qs.6:99 | Qs.10:24 | Qs.15:19 | Qs.16:11 | Qs.18:45 | Qs.20:53 | Qs.22:5 | Qs.23:19 | Qs.23:20 | Qs.26:7 | Qs.27:60 | Qs.31:10 | Qs.36:34 | Qs.36:36 | Qs.37:146 | Qs.50:7 | Qs.50:9 | Qs.78:15 | Qs.80:27"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Kebutuhan tumbuhan akan air",
					"ayat" => "Qs.2:164 | Qs.6:99 | Qs.7:57 | Qs.10:24 | Qs.13:4 | Qs.13:17 | Qs.14:32 | Qs.15:22 | Qs.16:10 | Qs.16:11 | Qs.16:65 | Qs.18:45 | Qs.20:53 | Qs.22:5 | Qs.22:63 | Qs.23:19 | Qs.25:49 | Qs.27:60 | Qs.30:24 | Qs.30:50 | Qs.31:10 | Qs.32:27 | Qs.35:9 | Qs.35:27 | Qs.39:21 | Qs.41:39 | Qs.43:11 | Qs.45:5 | Qs.50:9 | Qs.50:11 | Qs.78:15 | Qs.80:25"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Pengaruh angin dalam pembuahan tumbuh-tumbuhan",
					"ayat" => "Qs.15:22"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Pentingnya akar pada tumbuhan",
					"ayat" => "Qs.14:24 | Qs.14:26"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Pengaruh tanah pada tumbuhan",
					"ayat" => "Qs.2:265 | Qs.7:58 | Qs.13:4 | Qs.16:65"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Pengaruh gerak bumi tumbuhan",
					"ayat" => "Qs.22:5 | Qs.41:39"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Zat klorofil (hijau daun) pada tumbuhan",
					"ayat" => "Qs.6:99 | Qs.12:43 | Qs.12:46 | Qs.22:63 | Qs.36:80"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Aneka ragam tumbuhan",
					"ayat" => "Qs.2:22 | Qs.2:61 | Qs.6:99 | Qs.6:141 | Qs.7:57 | Qs.13:4 | Qs.15:19 | Qs.16:10 | Qs.16:11 | Qs.16:13 | Qs.16:67 | Qs.35:27 | Qs.55:11 | Qs.55:12 | Qs.78:15 | Qs.80:28 | Qs.80:29 | Qs.80:30 | Qs.80:31 | Qs.87:4"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Berkembang biak dengan penyemaian",
					"ayat" => "Qs.2:261 | Qs.6:99 | Qs.31:16 | Qs.80:27"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Cara terbaik menyimpan biji-bijian",
					"ayat" => "Qs.12:47"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Ilmu hewan dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Bahasa hewan",
					"ayat" => "Qs.6:38 | Qs.27:16 | Qs.27:18 | Qs.34:10"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Penyebutan hewan dalam Al Qur'an",
					"ayat" => "Qs.2:65 | Qs.2:67 | Qs.2:68 | Qs.2:69 | Qs.2:71 | Qs.2:164 | Qs.2:173 | Qs.2:259 | Qs.3:14 | Qs.4:119 | Qs.4:153 | Qs.5:1 | Qs.5:3 | Qs.5:4 | Qs.5:60 | Qs.6:38 | Qs.6:136 | Qs.6:138 | Qs.6:139 | Qs.6:142 | Qs.6:143 | Qs.6:144 | Qs.6:145 | Qs.6:146 | Qs.7:40 | Qs.7:73 | Qs.7:77 | Qs.7:166 | Qs.7:176 | Qs.7:179 | Qs.8:60 | Qs.10:24 | Qs.11:64 | Qs.11:69 | Qs.12:13 | Qs.12:14 | Qs.12:17 | Qs.12:43 | Qs.12:46 | Qs.12:94 | Qs.16:5 | Qs.16:8 | Qs.16:66 | Qs.16:80 | Qs.16:115 | Qs.17:59 | Qs.18:18 | Qs.18:22 | Qs.20:18 | Qs.20:54 | Qs.21:78 | Qs.22:18 | Qs.22:28 | Qs.22:30 | Qs.22:34 | Qs.23:21 | Qs.24:45 | Qs.25:44 | Qs.25:49 | Qs.26:133 | Qs.26:155 | Qs.31:19 | Qs.34:10 | Qs.35:28 | Qs.36:71 | Qs.37:142 | Qs.38:19 | Qs.38:23 | Qs.38:24 | Qs.38:31 | Qs.39:6 | Qs.40:79 | Qs.42:11 | Qs.42:29 | Qs.43:12 | Qs.45:4 | Qs.47:12 | Qs.51:26 | Qs.54:27 | Qs.59:6 | Qs.62:5 | Qs.67:19 | Qs.74:50 | Qs.74:51 | Qs.79:33 | Qs.80:32 | Qs.105:1"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Burung dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Teori terbang dalam Al Qur'an",
					"ayat" => "Qs.67:19"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Burung-burungan yang disebut dalam Al Qur'an",
					"ayat" => "Qs.2:57 | Qs.5:4 | Qs.5:31 | Qs.7:160 | Qs.12:41 | Qs.20:80 | Qs.27:20"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Hewan melata dalam Al Qur'an",
					"ayat" => "Qs.7:107 | Qs.20:20 | Qs.24:45 | Qs.26:32"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Binatang air dalam Al Qur'an",
					"ayat" => "Qs.5:96 | Qs.7:133 | Qs.7:163 | Qs.16:14 | Qs.18:61 | Qs.18:63 | Qs.35:12 | Qs.37:142 | Qs.68:48"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Serangga dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Sarang laba-laba",
					"ayat" => "Qs.29:41"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Kerajaan lebah",
					"ayat" => "Qs.16:68 | Qs.16:69"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Kerajaan semut",
					"ayat" => "Qs.27:18"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Penyebutan lalat",
					"ayat" => "Qs.22:73"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Penyebutan nyamuk",
					"ayat" => "Qs.2:26"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Penyebutan kutu",
					"ayat" => "Qs.7:133"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Penyebutan belalang",
					"ayat" => "Qs.7:133 | Qs.54:7"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kepekaan kulit",
					"ayat" => "Qs.4:56"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Pohon hijau sumber energi",
					"ayat" => "Qs.24:35 | Qs.36:80 | Qs.56:72"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Pembentukan air susu",
					"ayat" => "Qs.16:66 | Qs.23:21"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Setiap makhluk berpasangan",
					"ayat" => "Qs.4:1 | Qs.6:143 | Qs.13:3 | Qs.16:72 | Qs.20:53 | Qs.22:5 | Qs.26:7 | Qs.26:166 | Qs.30:21 | Qs.31:10 | Qs.35:11 | Qs.36:36 | Qs.39:6 | Qs.42:11 | Qs.42:50 | Qs.43:12 | Qs.50:7 | Qs.51:49 | Qs.53:45 | Qs.55:52 | Qs.75:39 | Qs.78:8 | Qs.92:3"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Keistimewaan sidik jari manusia",
					"ayat" => "Qs.75:4"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Faedah kurma bagi wanita bersalin",
					"ayat" => "Qs.19:23 | Qs.19:25 | Qs.19:26"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Pentingnya keseimbagan gizi",
					"ayat" => "Qs.6:141 | Qs.7:31"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Energi angin",
					"ayat" => "Qs.10:22 | Qs.17:69 | Qs.21:81 | Qs.25:48 | Qs.30:46 | Qs.35:9 | Qs.42:33 | Qs.77:3"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Air sebagai sumber kehidupan",
					"ayat" => "Qs.2:164 | Qs.2:265 | Qs.6:99 | Qs.10:24 | Qs.14:32 | Qs.16:10 | Qs.16:11 | Qs.16:65 | Qs.20:53 | Qs.21:30 | Qs.22:5 | Qs.22:63 | Qs.23:19 | Qs.24:45 | Qs.25:49 | Qs.25:54 | Qs.27:60 | Qs.29:63 | Qs.30:24 | Qs.30:50 | Qs.31:10 | Qs.32:27 | Qs.35:9 | Qs.35:27 | Qs.39:21 | Qs.41:39 | Qs.43:11 | Qs.45:5 | Qs.50:9 | Qs.50:11 | Qs.78:14 | Qs.80:25"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Bahaya alkohol bagi manusia",
					"ayat" => "Qs.2:219"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Bahaya senggama ketika haid",
					"ayat" => "Qs.2:222"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Fenomena geografis dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Peredaran air dalam alam",
					"ayat" => "Qs.2:74 | Qs.7:57 | Qs.10:24 | Qs.15:22 | Qs.23:18 | Qs.79:31 | Qs.86:11"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Fenomena ketegangan permukaan bumi",
					"ayat" => "Qs.2:164 | Qs.10:22 | Qs.14:32 | Qs.16:14 | Qs.17:66 | Qs.22:65 | Qs.25:53 | Qs.27:61 | Qs.31:31 | Qs.35:12 | Qs.36:41 | Qs.40:80 | Qs.42:32 | Qs.43:12 | Qs.45:12 | Qs.55:19 | Qs.55:20"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Fenomena gelombang jauh dan pendek",
					"ayat" => "Qs.11:42 | Qs.24:40 | Qs.31:32"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Batas pemisah antara air laut dan air sungai",
					"ayat" => "Qs.25:53 | Qs.27:61 | Qs.55:19 | Qs.55:20"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Awan-awan yang menggumpal",
					"ayat" => "Qs.24:43 | Qs.52:44"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Antara tekanan udara dan ketinggian saling berlawanan",
					"ayat" => "Qs.6:125"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Pembentukan hujan dan angin",
					"ayat" => "Qs.2:164 | Qs.7:57 | Qs.13:12 | Qs.16:10 | Qs.24:43 | Qs.25:48 | Qs.30:48 | Qs.35:9 | Qs.78:14 | Qs.86:11"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Bulat bumi dan perputarannya",
					"ayat" => "Qs.3:27 | Qs.22:61 | Qs.31:29 | Qs.35:13 | Qs.39:5 | Qs.50:7 | Qs.79:30"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Gaya tarik bumi (grafitasi)",
					"ayat" => "Qs.6:59 | Qs.19:25"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Fenomena alam dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perintah untuk berfikir dan menghayati",
					"ayat" => "Qs.2:44 | Qs.2:118 | Qs.2:219 | Qs.2:266 | Qs.3:65 | Qs.3:118 | Qs.4:82 | Qs.6:32 | Qs.6:50 | Qs.6:80 | Qs.6:151 | Qs.7:3 | Qs.7:26 | Qs.7:169 | Qs.7:176 | Qs.7:179 | Qs.7:184 | Qs.7:185 | Qs.8:57 | Qs.10:3 | Qs.10:5 | Qs.10:16 | Qs.10:101 | Qs.11:24 | Qs.11:30 | Qs.11:51 | Qs.12:2 | Qs.12:109 | Qs.13:19 | Qs.14:5 | Qs.14:52 | Qs.16:17 | Qs.16:44 | Qs.16:48 | Qs.16:69 | Qs.16:79 | Qs.16:90 | Qs.21:10 | Qs.21:30 | Qs.21:67 | Qs.23:68 | Qs.23:85 | Qs.24:43 | Qs.26:7 | Qs.27:60 | Qs.27:61 | Qs.27:62 | Qs.27:63 | Qs.27:64 | Qs.27:86 | Qs.28:60 | Qs.28:71 | Qs.28:72 | Qs.29:19 | Qs.29:20 | Qs.30:8 | Qs.30:21 | Qs.30:28 | Qs.30:42 | Qs.30:50 | Qs.31:29 | Qs.32:26 | Qs.32:27 | Qs.33:9 | Qs.34:9 | Qs.35:3 | Qs.35:27 | Qs.35:44 | Qs.36:62 | Qs.36:68 | Qs.36:73 | Qs.36:77 | Qs.37:73 | Qs.37:138 | Qs.37:155 | Qs.39:21 | Qs.39:42 | Qs.43:3 | Qs.45:4 | Qs.45:20 | Qs.45:23 | Qs.47:24 | Qs.51:21 | Qs.52:36 | Qs.54:15 | Qs.54:17 | Qs.54:22 | Qs.54:32 | Qs.54:40 | Qs.56:58 | Qs.56:62 | Qs.56:68 | Qs.59:2 | Qs.59:21 | Qs.67:3 | Qs.67:4 | Qs.67:19 | Qs.80:24 | Qs.86:5 | Qs.88:17"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Merenungi ciptaan Allah",
					"ayat" => "Qs.2:164 | Qs.3:190 | Qs.3:191 | Qs.6:11 | Qs.6:75 | Qs.6:76 | Qs.6:77 | Qs.6:78 | Qs.6:99 | Qs.7:57 | Qs.10:6 | Qs.10:24 | Qs.10:67 | Qs.12:105 | Qs.13:2 | Qs.13:3 | Qs.13:4 | Qs.15:19 | Qs.15:22 | Qs.16:11 | Qs.16:12 | Qs.16:13 | Qs.16:15 | Qs.16:65 | Qs.16:66 | Qs.16:67 | Qs.16:68 | Qs.16:69 | Qs.16:78 | Qs.17:12 | Qs.20:54 | Qs.21:16 | Qs.21:31 | Qs.21:32 | Qs.21:33 | Qs.23:84 | Qs.23:86 | Qs.23:88 | Qs.24:44 | Qs.25:61 | Qs.25:62 | Qs.26:24 | Qs.26:28 | Qs.28:73 | Qs.29:44 | Qs.29:61 | Qs.30:21 | Qs.30:22 | Qs.30:23 | Qs.30:48 | Qs.35:9 | Qs.35:12 | Qs.35:28 | Qs.36:33 | Qs.36:34 | Qs.36:37 | Qs.36:41 | Qs.37:6 | Qs.37:88 | Qs.39:5 | Qs.39:42 | Qs.40:13 | Qs.40:57 | Qs.40:61 | Qs.41:10 | Qs.41:37 | Qs.41:39 | Qs.41:53 | Qs.42:29 | Qs.42:32 | Qs.45:3 | Qs.45:4 | Qs.45:5 | Qs.45:12 | Qs.45:13 | Qs.50:6 | Qs.50:7 | Qs.50:9 | Qs.50:10 | Qs.51:20 | Qs.80:25 | Qs.80:26 | Qs.80:27 | Qs.80:28 | Qs.80:29 | Qs.80:30 | Qs.80:31 | Qs.80:32 | Qs.88:18 | Qs.88:19 | Qs.88:20"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Asal mula jagad raya",
					"ayat" => "Qs.21:30 | Qs.41:11"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Cahaya matahari",
					"ayat" => "Qs.25:61 | Qs.71:16 | Qs.78:13"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Cahaya bulan",
					"ayat" => "Qs.10:5 | Qs.25:61 | Qs.71:16"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Keseimbangan jagad raya"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Keseimbangan bumi",
					"ayat" => "Qs.2:22 | Qs.13:3 | Qs.15:19 | Qs.16:15 | Qs.20:53 | Qs.21:31 | Qs.27:61 | Qs.31:10 | Qs.35:41 | Qs.41:10 | Qs.43:10 | Qs.50:7 | Qs.51:48 | Qs.55:10 | Qs.71:19 | Qs.77:27 | Qs.78:6 | Qs.78:7 | Qs.79:32 | Qs.91:6"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Keseimbangan benda-benda langit",
					"ayat" => "Qs.13:2 | Qs.21:33 | Qs.25:61 | Qs.31:29 | Qs.35:13 | Qs.35:41 | Qs.36:40"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Rusaknya keseimbangan pada hari kiamat",
					"ayat" => "Qs.25:25 | Qs.27:88 | Qs.50:44 | Qs.52:9 | Qs.52:10 | Qs.55:37 | Qs.56:4 | Qs.56:5 | Qs.56:6 | Qs.69:14 | Qs.69:16 | Qs.70:8 | Qs.70:9 | Qs.75:9 | Qs.77:9 | Qs.77:10 | Qs.78:19 | Qs.78:20 | Qs.79:6 | Qs.79:7 | Qs.81:1 | Qs.81:2 | Qs.81:3 | Qs.81:6 | Qs.81:11 | Qs.82:1 | Qs.82:2 | Qs.82:3 | Qs.84:1 | Qs.84:3 | Qs.89:21 | Qs.99:1 | Qs.99:2 | Qs.101:5"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Tahun syamsyiah dan qamariyah",
					"ayat" => "Qs.13:2 | Qs.14:33 | Qs.16:12 | Qs.17:12 | Qs.18:25"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Pergantian malam dan siang",
					"ayat" => "Qs.2:164 | Qs.3:27 | Qs.3:190 | Qs.6:96 | Qs.10:6 | Qs.13:2 | Qs.13:3 | Qs.14:33 | Qs.16:12 | Qs.17:12 | Qs.21:33 | Qs.22:61 | Qs.23:80 | Qs.24:44 | Qs.25:62 | Qs.27:86 | Qs.31:29 | Qs.35:13 | Qs.36:37 | Qs.36:40 | Qs.39:5 | Qs.41:37 | Qs.45:5 | Qs.57:6 | Qs.79:29 | Qs.91:3 | Qs.91:4 | Qs.92:2 | Qs.93:2"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perputaran matahari dan bulan",
					"ayat" => "Qs.2:164 | Qs.2:189 | Qs.2:258 | Qs.3:27 | Qs.3:190 | Qs.6:96 | Qs.10:5 | Qs.13:2 | Qs.14:33 | Qs.16:12 | Qs.21:33 | Qs.22:61 | Qs.35:13 | Qs.36:38 | Qs.36:40 | Qs.39:5 | Qs.40:61 | Qs.41:37 | Qs.45:5 | Qs.55:5 | Qs.91:2 | Qs.91:3 | Qs.91:4"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Pengaruh gunung pada keseimbangan bumi",
					"ayat" => "Qs.27:61 | Qs.31:10 | Qs.50:7 | Qs.77:27"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Petir dan kilat dalam Al Qur'an",
					"ayat" => "Qs.2:19 | Qs.2:20 | Qs.13:12 | Qs.13:13"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Fenomena bayangan dalam Al Qur'an",
					"ayat" => "Qs.13:15 | Qs.16:48 | Qs.16:81 | Qs.25:45 | Qs.25:46"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Fenomena fatamorgana dalam Al Qur'an",
					"ayat" => "Qs.24:39"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Fenomena pembiasan sinar",
					"ayat" => "Qs.2:17"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Pemuaian alam",
					"ayat" => "Qs.51:47"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kehancuran jagad raya",
					"ayat" => "Qs.2:210 | Qs.14:48 | Qs.18:47 | Qs.20:105 | Qs.20:106 | Qs.20:107 | Qs.21:104 | Qs.25:25 | Qs.27:87 | Qs.39:68 | Qs.44:10 | Qs.50:44 | Qs.55:26 | Qs.55:37 | Qs.56:1 | Qs.56:3 | Qs.56:4 | Qs.56:5 | Qs.56:6 | Qs.69:14 | Qs.69:16 | Qs.70:8 | Qs.70:9 | Qs.73:14 | Qs.73:18 | Qs.75:7 | Qs.75:8 | Qs.75:9 | Qs.77:8 | Qs.77:9 | Qs.77:10 | Qs.78:19 | Qs.78:20 | Qs.81:1 | Qs.81:2 | Qs.81:3 | Qs.81:4 | Qs.81:5 | Qs.81:6 | Qs.81:7 | Qs.81:8 | Qs.81:9 | Qs.81:10 | Qs.81:11 | Qs.81:12 | Qs.82:1 | Qs.82:2 | Qs.82:3 | Qs.84:1 | Qs.84:2 | Qs.84:3 | Qs.84:5 | Qs.101:4 | Qs.101:5"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Langit yang biru"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Pembentukan langit dalam Al Qur'an",
					"ayat" => "Qs.2:29 | Qs.11:7 | Qs.13:2 | Qs.15:14 | Qs.15:17 | Qs.17:44 | Qs.21:30 | Qs.22:65 | Qs.23:17 | Qs.23:86 | Qs.25:59 | Qs.31:10 | Qs.32:4 | Qs.37:6 | Qs.40:64 | Qs.41:11 | Qs.41:12 | Qs.50:6 | Qs.50:38 | Qs.51:7 | Qs.52:5 | Qs.55:7 | Qs.57:4 | Qs.65:12 | Qs.67:3 | Qs.71:15 | Qs.78:12 | Qs.79:28 | Qs.85:1 | Qs.91:5"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Bintang-gemintang dalam Al Qur'an",
					"ayat" => "Qs.6:76 | Qs.6:97 | Qs.10:5 | Qs.13:2 | Qs.14:33 | Qs.15:16 | Qs.16:12 | Qs.16:16 | Qs.25:61 | Qs.37:6 | Qs.41:12 | Qs.50:6 | Qs.56:75 | Qs.67:5 | Qs.71:16 | Qs.78:13 | Qs.86:1 | Qs.86:2 | Qs.86:3"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Meteor dalam Al Qur'an",
					"ayat" => "Qs.15:18 | Qs.37:8 | Qs.37:10 | Qs.41:12 | Qs.67:5 | Qs.72:8 | Qs.72:9 | Qs.86:1 | Qs.86:2"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Hikmah pemaparan ayat penciptaan jagad raya",
					"ayat" => "Qs.86:3 | Qs.10:24 | Qs.10:67 | Qs.11:7 | Qs.12:105 | Qs.13:3 | Qs.13:4 | Qs.16:11 | Qs.16:12 | Qs.16:13 | Qs.16:14 | Qs.16:15 | Qs.16:79 | Qs.25:62 | Qs.26:8 | Qs.26:24 | Qs.29:44 | Qs.30:21 | Qs.30:22 | Qs.30:23 | Qs.30:24 | Qs.30:46 | Qs.31:31 | Qs.32:4 | Qs.32:27 | Qs.35:12 | Qs.36:35 | Qs.39:21 | Qs.40:13 | Qs.42:33 | Qs.43:10 | Qs.45:3 | Qs.45:4 | Qs.45:5 | Qs.45:12 | Qs.45:13 | Qs.50:8 | Qs.51:49 | Qs.56:73 | Qs.57:25"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Ilmu bumi dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Penyebutan gunung",
					"ayat" => "Qs.7:74 | Qs.7:171 | Qs.11:42 | Qs.11:43 | Qs.13:31 | Qs.14:46 | Qs.15:82 | Qs.16:68 | Qs.16:81 | Qs.17:37 | Qs.18:47 | Qs.19:90 | Qs.20:105 | Qs.21:79 | Qs.22:18 | Qs.26:149 | Qs.27:88 | Qs.33:72 | Qs.34:10 | Qs.35:27 | Qs.38:18 | Qs.52:10 | Qs.56:5 | Qs.59:21 | Qs.69:14 | Qs.70:9 | Qs.72:14 | Qs.73:14 | Qs.77:10 | Qs.78:7 | Qs.78:20 | Qs.79:32 | Qs.81:3 | Qs.88:19 | Qs.101:5"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Macam-macam tanah",
					"ayat" => "Qs.35:27"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Macam-macam batu besar",
					"ayat" => "Qs.2:74"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Barang tambang dan batu mulia",
					"ayat" => "Qs.3:14 | Qs.3:91 | Qs.7:148 | Qs.9:34 | Qs.13:17 | Qs.16:14 | Qs.17:50 | Qs.18:96 | Qs.34:10 | Qs.34:12 | Qs.35:12 | Qs.35:33 | Qs.43:33 | Qs.43:53 | Qs.55:22 | Qs.57:25 | Qs.76:19 | Qs.76:21"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Isyarat sejarah dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Masa kepongahan bangsa Yahudi di muka bumi",
					"ayat" => "Qs.17:4 | Qs.17:5 | Qs.17:6"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kemenagan bangsa Romawi atas bangsa Persi",
					"ayat" => "Qs.30:2 | Qs.30:3 | Qs.30:4"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Hubungan orang Yahudi dan orang Nasrani",
					"ayat" => "Qs.5:14"),
				array(
					"id_master" => 8,
					"level" => 1,
					"index" => "Kisah-kisah dan perumpamaan dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Kisah-kisah Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah penciptaan manusia"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Asal terciptanya manusia",
					"ayat" => "Qs.3:59 | Qs.6:2 | Qs.7:12 | Qs.15:26 | Qs.15:28 | Qs.15:29 | Qs.15:33 | Qs.17:61 | Qs.18:37 | Qs.20:55 | Qs.22:5 | Qs.23:12 | Qs.25:54 | Qs.30:20 | Qs.32:7 | Qs.35:11 | Qs.37:11 | Qs.38:71 | Qs.38:76 | Qs.40:67 | Qs.55:14 | Qs.71:17"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Cara manusia bereproduksi",
					"ayat" => "Qs.4:1 | Qs.6:98 | Qs.7:189 | Qs.16:4 | Qs.16:72 | Qs.22:5 | Qs.32:8 | Qs.35:11 | Qs.40:67 | Qs.42:11 | Qs.71:14 | Qs.75:37 | Qs.75:39 | Qs.78:8 | Qs.86:5 | Qs.86:6 | Qs.86:7 | Qs.92:3"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Permusuhan antara syetan dan manusia",
					"ayat" => "Qs.2:34 | Qs.2:36 | Qs.2:168 | Qs.2:169 | Qs.2:208 | Qs.4:118 | Qs.4:119 | Qs.4:120 | Qs.5:91 | Qs.6:142 | Qs.7:11 | Qs.7:12 | Qs.7:16 | Qs.7:17 | Qs.7:20 | Qs.7:21 | Qs.7:22 | Qs.7:24 | Qs.7:27 | Qs.12:5 | Qs.14:22 | Qs.15:33 | Qs.15:36 | Qs.15:38 | Qs.15:39 | Qs.17:53 | Qs.17:62 | Qs.17:64 | Qs.18:50 | Qs.20:116 | Qs.20:117 | Qs.20:120 | Qs.28:15 | Qs.31:21 | Qs.34:20 | Qs.35:6 | Qs.36:60 | Qs.36:62 | Qs.37:30 | Qs.37:32 | Qs.38:74 | Qs.38:75 | Qs.38:76 | Qs.38:82 | Qs.43:62"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Tugas manusia di muka bumi",
					"ayat" => "Qs.2:21 | Qs.2:30 | Qs.2:138 | Qs.6:165 | Qs.7:129 | Qs.10:14 | Qs.11:7 | Qs.11:61 | Qs.21:105 | Qs.22:41 | Qs.23:115 | Qs.24:55 | Qs.27:62 | Qs.28:5 | Qs.35:39 | Qs.43:60 | Qs.67:2 | Qs.90:4"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Surga latihan",
					"ayat" => "Qs.2:35 | Qs.7:19 | Qs.7:20 | Qs.7:22 | Qs.20:117 | Qs.20:118 | Qs.20:119"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Manusia diciptakan bersuku-suku dan berbangsa-bangsa",
					"ayat" => "Qs.30:22 | Qs.49:13"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Macam jiwa manusia"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Nafs ammarah (jiwa yang selalu menyuruh pada kejahatan)",
					"ayat" => "Qs.4:79 | Qs.12:53"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Nafs lawwamah (jiwa yang selalu menyesali)",
					"ayat" => "Qs.75:2"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Nafs muthmainnah (jiwa yang tenang)",
					"ayat" => "Qs.89:27"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Sifat manusia"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Ketergesaan manusia",
					"ayat" => "Qs.2:214 | Qs.17:11 | Qs.21:37 | Qs.26:204"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Keluh-kesah manusia",
					"ayat" => "Qs.6:63 | Qs.10:12 | Qs.11:9 | Qs.14:34 | Qs.41:49 | Qs.70:19 | Qs.70:20 | Qs.89:16"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Manusia tamak dan bakhil",
					"ayat" => "Qs.4:32 | Qs.4:128 | Qs.17:100 | Qs.64:16 | Qs.70:18 | Qs.70:21 | Qs.74:15 | Qs.89:19 | Qs.89:20 | Qs.100:8 | Qs.102:1"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Manusia keras kepala",
					"ayat" => "Qs.6:143 | Qs.7:71 | Qs.8:6 | Qs.10:15 | Qs.11:8 | Qs.11:32 | Qs.16:4 | Qs.18:54 | Qs.18:55 | Qs.19:66 | Qs.20:51 | Qs.20:134 | Qs.21:2 | Qs.21:3 | Qs.21:5 | Qs.21:6 | Qs.21:38 | Qs.21:55 | Qs.21:93 | Qs.22:3 | Qs.22:8 | Qs.22:46 | Qs.26:203 | Qs.29:18 | Qs.29:24 | Qs.29:29 | Qs.31:20 | Qs.31:21 | Qs.32:28 | Qs.34:35 | Qs.36:48 | Qs.36:77 | Qs.40:4 | Qs.40:35 | Qs.43:58 | Qs.46:17 | Qs.46:22 | Qs.52:32 | Qs.67:25 | Qs.68:36 | Qs.68:37 | Qs.68:38 | Qs.68:39 | Qs.68:40 | Qs.68:41 | Qs.74:18 | Qs.74:21 | Qs.74:22 | Qs.74:52 | Qs.82:6 | Qs.90:5 | Qs.90:6 | Qs.90:7"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Manusia diciptakan pada bentuk yang terbaik",
					"ayat" => "Qs.23:14 | Qs.40:64 | Qs.64:3 | Qs.82:7 | Qs.82:8 | Qs.87:2 | Qs.90:8 | Qs.90:9 | Qs.95:4"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Kekufuran manusia akan nikmat Allah",
					"ayat" => "Qs.2:49 | Qs.2:211 | Qs.2:243 | Qs.5:20 | Qs.5:75 | Qs.5:86 | Qs.6:6 | Qs.6:21 | Qs.6:33 | Qs.6:46 | Qs.6:64 | Qs.6:66 | Qs.6:104 | Qs.6:130 | Qs.6:157 | Qs.7:10 | Qs.7:40 | Qs.7:51 | Qs.7:63 | Qs.7:69 | Qs.7:74 | Qs.7:86 | Qs.7:182 | Qs.10:12 | Qs.10:21 | Qs.10:23 | Qs.10:60 | Qs.11:9 | Qs.12:38 | Qs.14:34 | Qs.16:4 | Qs.16:54 | Qs.16:58 | Qs.16:59 | Qs.16:71 | Qs.16:72 | Qs.16:82 | Qs.16:83 | Qs.16:112 | Qs.17:67 | Qs.17:83 | Qs.18:57 | Qs.21:32 | Qs.21:42 | Qs.22:38 | Qs.22:66 | Qs.23:75 | Qs.23:78 | Qs.25:50 | Qs.26:8 | Qs.26:67 | Qs.26:136 | Qs.26:137 | Qs.27:60 | Qs.27:73 | Qs.27:82 | Qs.27:83 | Qs.28:57 | Qs.28:78 | Qs.29:49 | Qs.29:61 | Qs.29:65 | Qs.29:66 | Qs.29:67 | Qs.30:33 | Qs.30:36 | Qs.30:51 | Qs.31:20 | Qs.31:32 | Qs.32:9 | Qs.33:72 | Qs.34:13 | Qs.34:16 | Qs.34:19 | Qs.34:28 | Qs.36:35 | Qs.36:73 | Qs.39:8 | Qs.39:49 | Qs.40:61 | Qs.41:50 | Qs.41:51 | Qs.42:48 | Qs.43:15 | Qs.46:26 | Qs.53:55 | Qs.55:13 | Qs.55:16 | Qs.55:18 | Qs.55:21 | Qs.55:23 | Qs.55:25 | Qs.55:28 | Qs.55:30 | Qs.55:32 | Qs.55:34 | Qs.55:36 | Qs.55:38 | Qs.55:40 | Qs.55:42 | Qs.55:45 | Qs.55:47 | Qs.55:49 | Qs.55:51 | Qs.55:53 | Qs.55:55 | Qs.55:57 | Qs.55:59 | Qs.55:61 | Qs.55:63 | Qs.55:65 | Qs.55:67 | Qs.55:69 | Qs.55:71 | Qs.55:73 | Qs.55:75 | Qs.55:77 | Qs.56:82 | Qs.67:21 | Qs.67:23 | Qs.96:6 | Qs.96:7 | Qs.100:6 | Qs.100:7"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Ilmu manusia sedikit",
					"ayat" => "Qs.2:140 | Qs.2:216 | Qs.2:232 | Qs.2:239 | Qs.2:255 | Qs.3:7 | Qs.3:66 | Qs.4:157 | Qs.5:109 | Qs.6:37 | Qs.7:187 | Qs.12:21 | Qs.12:68 | Qs.12:76 | Qs.16:38 | Qs.16:41 | Qs.16:74 | Qs.16:101 | Qs.17:85 | Qs.18:5 | Qs.20:110 | Qs.24:19 | Qs.27:61 | Qs.27:65 | Qs.27:66 | Qs.27:84 | Qs.28:13 | Qs.30:6 | Qs.30:7 | Qs.30:29 | Qs.33:72 | Qs.40:83 | Qs.43:20 | Qs.45:24 | Qs.79:43 | Qs.89:15 | Qs.89:16"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Kelemahan manusia",
					"ayat" => "Qs.4:28 | Qs.5:30 | Qs.6:134 | Qs.7:143 | Qs.8:59 | Qs.9:2 | Qs.9:3 | Qs.9:25 | Qs.10:24 | Qs.10:53 | Qs.11:20 | Qs.11:33 | Qs.11:57 | Qs.13:11 | Qs.16:46 | Qs.18:41 | Qs.21:40 | Qs.24:57 | Qs.25:19 | Qs.29:22 | Qs.30:9 | Qs.30:54 | Qs.36:43 | Qs.39:51 | Qs.40:29 | Qs.40:82 | Qs.42:31 | Qs.51:45 | Qs.55:33 | Qs.55:35 | Qs.56:66 | Qs.56:67 | Qs.56:87 | Qs.60:4 | Qs.69:47 | Qs.72:21 | Qs.77:39 | Qs.90:5 | Qs.90:6 | Qs.90:7"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Karunia Allah atas manusia"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Para rasul diutus untuk memberi petunjuk",
					"ayat" => "Qs.2:53 | Qs.2:129 | Qs.2:151 | Qs.2:170 | Qs.2:176 | Qs.2:198 | Qs.2:209 | Qs.2:211 | Qs.2:213 | Qs.2:231 | Qs.2:253 | Qs.3:4 | Qs.3:103 | Qs.3:108 | Qs.3:164 | Qs.3:183 | Qs.3:184 | Qs.4:54 | Qs.4:79 | Qs.4:80 | Qs.4:165 | Qs.4:170 | Qs.4:174 | Qs.5:3 | Qs.5:7 | Qs.5:15 | Qs.5:16 | Qs.5:19 | Qs.5:32 | Qs.5:75 | Qs.5:104 | Qs.5:110 | Qs.6:5 | Qs.6:19 | Qs.6:42 | Qs.6:48 | Qs.6:84 | Qs.6:85 | Qs.6:86 | Qs.6:87 | Qs.6:89 | Qs.6:91 | Qs.6:104 | Qs.6:105 | Qs.6:130 | Qs.6:151 | Qs.6:153 | Qs.6:154 | Qs.7:35 | Qs.7:43 | Qs.7:53 | Qs.7:59 | Qs.7:61 | Qs.7:62 | Qs.7:63 | Qs.7:64 | Qs.7:67 | Qs.7:68 | Qs.7:69 | Qs.7:70 | Qs.7:73 | Qs.7:80 | Qs.7:85 | Qs.7:89 | Qs.7:101 | Qs.7:104 | Qs.7:145 | Qs.9:33 | Qs.9:70 | Qs.9:115 | Qs.9:128 | Qs.10:13 | Qs.10:47 | Qs.10:71 | Qs.10:74 | Qs.10:75 | Qs.10:108 | Qs.11:25 | Qs.12:38 | Qs.12:104 | Qs.13:7 | Qs.13:30 | Qs.13:38 | Qs.14:4 | Qs.14:5 | Qs.14:9 | Qs.14:36 | Qs.16:36 | Qs.16:43 | Qs.16:44 | Qs.16:63 | Qs.16:113 | Qs.19:21 | Qs.20:50 | Qs.20:123 | Qs.20:134 | Qs.21:25 | Qs.21:48 | Qs.21:107 | Qs.22:49 | Qs.22:75 | Qs.22:78 | Qs.23:73 | Qs.25:51 | Qs.26:10 | Qs.26:16 | Qs.26:107 | Qs.26:125 | Qs.26:143 | Qs.26:162 | Qs.26:178 | Qs.26:208 | Qs.27:12 | Qs.28:46 | Qs.28:47 | Qs.28:59 | Qs.29:47 | Qs.30:9 | Qs.30:47 | Qs.34:34 | Qs.35:24 | Qs.35:42 | Qs.36:3 | Qs.36:13 | Qs.36:14 | Qs.36:16 | Qs.37:72 | Qs.37:123 | Qs.37:133 | Qs.37:139 | Qs.37:147 | Qs.39:71 | Qs.40:15 | Qs.40:22 | Qs.40:23 | Qs.40:50 | Qs.40:53 | Qs.40:54 | Qs.40:78 | Qs.41:14 | Qs.43:5 | Qs.43:6 | Qs.43:7 | Qs.43:24 | Qs.43:29 | Qs.43:46 | Qs.43:63 | Qs.44:5 | Qs.44:6 | Qs.44:13 | Qs.46:9 | Qs.46:21 | Qs.48:9 | Qs.48:28 | Qs.49:17 | Qs.50:28 | Qs.51:55 | Qs.53:23 | Qs.57:9 | Qs.57:25 | Qs.57:26 | Qs.57:27 | Qs.61:6 | Qs.61:9 | Qs.62:2 | Qs.64:6 | Qs.65:10 | Qs.65:11 | Qs.67:8 | Qs.67:9 | Qs.71:1 | Qs.71:2 | Qs.73:15 | Qs.76:3 | Qs.79:17 | Qs.79:18 | Qs.92:12 | Qs.98:1 | Qs.98:4"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Manusia makhluk yang dimuliakan",
					"ayat" => "Qs.2:31 | Qs.2:33 | Qs.2:34 | Qs.7:10 | Qs.7:11 | Qs.7:12 | Qs.7:19 | Qs.7:26 | Qs.16:78 | Qs.16:80 | Qs.16:81 | Qs.17:62 | Qs.17:70 | Qs.22:78 | Qs.40:64"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Seluruh makhluk diciptakan untuk kepentingan manusia",
					"ayat" => "Qs.2:29 | Qs.6:6 | Qs.6:142 | Qs.7:74 | Qs.13:3 | Qs.13:4 | Qs.14:32 | Qs.15:19 | Qs.15:20 | Qs.15:22 | Qs.16:13 | Qs.16:15 | Qs.16:65 | Qs.16:67 | Qs.16:68 | Qs.16:69 | Qs.20:53 | Qs.22:37 | Qs.22:65 | Qs.26:133 | Qs.26:134 | Qs.31:20 | Qs.35:12 | Qs.36:72 | Qs.36:80 | Qs.40:79 | Qs.40:80 | Qs.45:13 | Qs.87:4"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Falak diciptakan untuk kepentingan manusia",
					"ayat" => "Qs.2:164 | Qs.10:22 | Qs.14:32 | Qs.16:14 | Qs.17:66 | Qs.17:70 | Qs.22:65 | Qs.23:22 | Qs.30:46 | Qs.31:31 | Qs.35:12 | Qs.36:41 | Qs.40:80 | Qs.42:32 | Qs.43:12 | Qs.45:12 | Qs.51:3 | Qs.55:24"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Rezeki manusia dijamin Allah",
					"ayat" => "Qs.2:22 | Qs.2:60 | Qs.2:168 | Qs.2:172 | Qs.4:5 | Qs.5:88 | Qs.6:99 | Qs.6:141 | Qs.6:142 | Qs.6:143 | Qs.6:144 | Qs.6:151 | Qs.7:32 | Qs.7:160 | Qs.8:26 | Qs.9:28 | Qs.10:31 | Qs.10:59 | Qs.10:93 | Qs.11:3 | Qs.11:6 | Qs.14:32 | Qs.15:20 | Qs.16:72 | Qs.16:112 | Qs.16:114 | Qs.17:70 | Qs.29:17 | Qs.29:60 | Qs.29:62 | Qs.30:37 | Qs.30:40 | Qs.34:15 | Qs.34:24 | Qs.34:36 | Qs.36:47 | Qs.39:52 | Qs.40:13 | Qs.40:64 | Qs.41:10 | Qs.42:12 | Qs.42:19 | Qs.42:27 | Qs.51:22 | Qs.51:58 | Qs.53:48 | Qs.62:10 | Qs.62:11 | Qs.65:3 | Qs.67:15 | Qs.67:21 | Qs.106:4"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Bumi disiapkan untuk tempat tinggal manusia",
					"ayat" => "Qs.2:22 | Qs.2:29 | Qs.2:36 | Qs.6:99 | Qs.7:10 | Qs.7:24 | Qs.7:74 | Qs.10:5 | Qs.13:3 | Qs.13:4 | Qs.14:32 | Qs.15:19 | Qs.15:20 | Qs.15:22 | Qs.16:13 | Qs.16:15 | Qs.16:81 | Qs.17:12 | Qs.20:53 | Qs.20:54 | Qs.22:65 | Qs.23:18 | Qs.23:19 | Qs.23:20 | Qs.26:7 | Qs.27:61 | Qs.27:86 | Qs.28:73 | Qs.31:10 | Qs.36:33 | Qs.36:34 | Qs.40:61 | Qs.40:64 | Qs.43:10 | Qs.43:11 | Qs.50:9 | Qs.51:48 | Qs.55:10 | Qs.67:15 | Qs.71:19 | Qs.71:20 | Qs.77:25 | Qs.77:26 | Qs.77:27 | Qs.78:6 | Qs.78:7 | Qs.79:31 | Qs.79:32 | Qs.79:33 | Qs.88:20 | Qs.91:6"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Karunia bintang gemintang",
					"ayat" => "Qs.2:189 | Qs.6:97 | Qs.15:16 | Qs.16:16 | Qs.27:63 | Qs.37:6"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Manusia memanfaatkan hewan",
					"ayat" => "Qs.6:142 | Qs.6:143 | Qs.6:144 | Qs.16:5 | Qs.16:6 | Qs.16:7 | Qs.16:8 | Qs.16:66 | Qs.16:80 | Qs.23:21 | Qs.23:22 | Qs.36:42 | Qs.36:71 | Qs.36:72 | Qs.36:73 | Qs.40:79 | Qs.40:80 | Qs.43:12 | Qs.43:13"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Angin sebagai berita gembira bagi manusia",
					"ayat" => "Qs.7:57 | Qs.30:46 | Qs.30:48"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Besarnya karunia Allah pada manusia",
					"ayat" => "Qs.2:243 | Qs.4:70 | Qs.4:113 | Qs.4:175 | Qs.5:20 | Qs.6:46 | Qs.6:104 | Qs.6:141 | Qs.6:142 | Qs.6:143 | Qs.6:144 | Qs.7:10 | Qs.7:26 | Qs.7:32 | Qs.7:63 | Qs.7:69 | Qs.7:74 | Qs.7:143 | Qs.7:145 | Qs.7:172 | Qs.8:26 | Qs.10:31 | Qs.10:60 | Qs.13:3 | Qs.13:4 | Qs.13:11 | Qs.14:32 | Qs.14:33 | Qs.14:34 | Qs.15:19 | Qs.15:20 | Qs.15:22 | Qs.16:5 | Qs.16:6 | Qs.16:7 | Qs.16:8 | Qs.16:10 | Qs.16:11 | Qs.16:13 | Qs.16:14 | Qs.16:15 | Qs.16:16 | Qs.16:18 | Qs.16:53 | Qs.16:65 | Qs.16:66 | Qs.16:67 | Qs.16:68 | Qs.16:69 | Qs.16:71 | Qs.16:72 | Qs.16:78 | Qs.16:80 | Qs.16:81 | Qs.17:12 | Qs.17:66 | Qs.17:70 | Qs.17:87 | Qs.21:42 | Qs.25:47 | Qs.25:48 | Qs.25:49 | Qs.25:50 | Qs.25:53 | Qs.26:7 | Qs.26:132 | Qs.26:133 | Qs.26:134 | Qs.26:147 | Qs.26:148 | Qs.26:149 | Qs.27:60 | Qs.27:61 | Qs.27:62 | Qs.27:63 | Qs.27:64 | Qs.27:73 | Qs.27:86 | Qs.28:5 | Qs.28:6 | Qs.28:13 | Qs.28:57 | Qs.28:71 | Qs.28:72 | Qs.28:73 | Qs.28:76 | Qs.29:51 | Qs.29:61 | Qs.30:54 | Qs.31:20 | Qs.34:18 | Qs.35:3 | Qs.36:42 | Qs.39:6 | Qs.39:21 | Qs.45:12 | Qs.45:13 | Qs.57:25 | Qs.73:7 | Qs.74:6 | Qs.76:28 | Qs.78:9 | Qs.78:10 | Qs.78:11 | Qs.78:16 | Qs.80:20 | Qs.80:25 | Qs.80:26 | Qs.80:27 | Qs.80:28 | Qs.80:29 | Qs.80:30 | Qs.80:31 | Qs.80:32 | Qs.82:7 | Qs.96:5"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah bangsa Yahudi dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Agama bangsa Yahudi",
					"ayat" => "Qs.2:43 | Qs.2:83 | Qs.2:84 | Qs.2:91 | Qs.2:111 | Qs.2:113 | Qs.2:183 | Qs.3:20 | Qs.9:30 | Qs.9:31 | Qs.17:2 | Qs.98:5"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Kelebihan yang diberikan Allah untuk bangsa Yahudi",
					"ayat" => "Qs.2:40 | Qs.2:47 | Qs.2:49 | Qs.2:50 | Qs.2:52 | Qs.2:53 | Qs.2:56 | Qs.2:57 | Qs.2:58 | Qs.2:60 | Qs.2:61 | Qs.2:64 | Qs.2:122 | Qs.4:54 | Qs.4:153 | Qs.5:12 | Qs.5:15 | Qs.5:20 | Qs.5:71 | Qs.7:140 | Qs.7:141 | Qs.7:160 | Qs.7:161 | Qs.10:93 | Qs.14:6 | Qs.17:4 | Qs.20:80 | Qs.20:81 | Qs.26:59 | Qs.28:5 | Qs.28:6 | Qs.40:53 | Qs.44:25 | Qs.44:26 | Qs.44:27 | Qs.44:28 | Qs.44:30 | Qs.44:31 | Qs.44:32 | Qs.45:16 | Qs.45:17"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Nabi-nabi Bani Israel",
					"ayat" => "Qs.2:133 | Qs.3:49 | Qs.3:93 | Qs.4:153 | Qs.5:12 | Qs.5:20 | Qs.5:46 | Qs.5:70 | Qs.5:78 | Qs.5:110 | Qs.14:5 | Qs.14:6 | Qs.14:8 | Qs.20:24 | Qs.20:29 | Qs.20:30 | Qs.20:42 | Qs.20:43 | Qs.20:44 | Qs.20:47 | Qs.20:90 | Qs.23:45 | Qs.28:34 | Qs.28:35 | Qs.40:23 | Qs.40:34 | Qs.43:46 | Qs.43:59"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Bangsa Yahudi menyembunyikan kebenaran",
					"ayat" => "Qs.2:42 | Qs.2:89 | Qs.2:101 | Qs.2:109 | Qs.2:140 | Qs.2:144 | Qs.2:146 | Qs.2:159 | Qs.2:174 | Qs.2:175 | Qs.3:19 | Qs.3:70 | Qs.3:71 | Qs.3:72 | Qs.3:75 | Qs.3:78 | Qs.3:99 | Qs.3:187 | Qs.4:46 | Qs.4:51 | Qs.5:13 | Qs.5:15 | Qs.5:41 | Qs.5:43 | Qs.6:20 | Qs.6:91 | Qs.6:114 | Qs.7:162 | Qs.7:169"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Mengajak bangsa Yahudi untuk jihad",
					"ayat" => "Qs.2:58 | Qs.2:246 | Qs.5:21 | Qs.5:23 | Qs.5:24 | Qs.7:161"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Penyiksaan dan pengusiran bangsa Yahudi"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Penghinaan dan pengusiran bangsa Yahudi",
					"ayat" => "Qs.2:61 | Qs.3:112 | Qs.7:152 | Qs.7:165 | Qs.7:166 | Qs.7:167 | Qs.7:168 | Qs.14:6 | Qs.17:5 | Qs.17:7 | Qs.26:57 | Qs.26:58"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Kemurkaan Allah terhadap bangsa Yahudi",
					"ayat" => "Qs.1:7 | Qs.2:61 | Qs.2:90 | Qs.3:112 | Qs.5:60 | Qs.7:152 | Qs.20:86 | Qs.58:14 | Qs.60:13"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Kesesatan bangsa Yahudi di gurun Sinai",
					"ayat" => "Qs.5:26"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Penyebutan Thuur Sinaa' (bukit Thur Sina')",
					"ayat" => "Qs.2:63 | Qs.2:93 | Qs.2:154 | Qs.19:52 | Qs.20:80 | Qs.23:20 | Qs.28:29 | Qs.28:46 | Qs.52:1 | Qs.95:2"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Bukit thuur diangkat ke atas bangsa Yahudi",
					"ayat" => "Qs.2:63 | Qs.2:93 | Qs.4:154 | Qs.7:171"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Menghancurkan Bani Israel dengan petir",
					"ayat" => "Qs.2:55 | Qs.4:153 | Qs.7:155"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Orang-orang beriman di kalangan bangsa Yahudi",
					"ayat" => "Qs.2:62 | Qs.3:113 | Qs.3:114 | Qs.3:199 | Qs.4:162 | Qs.5:44 | Qs.5:66 | Qs.5:69 | Qs.7:120 | Qs.7:121 | Qs.7:123 | Qs.7:124 | Qs.7:125 | Qs.7:126 | Qs.7:157 | Qs.7:159 | Qs.7:168 | Qs.7:170 | Qs.10:83 | Qs.10:85 | Qs.10:86 | Qs.10:87 | Qs.13:36 | Qs.13:43 | Qs.17:107 | Qs.20:70 | Qs.20:72 | Qs.20:73 | Qs.26:46 | Qs.26:47 | Qs.26:48 | Qs.26:50 | Qs.26:51 | Qs.28:52 | Qs.28:53 | Qs.28:54 | Qs.28:55 | Qs.29:47 | Qs.32:24"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Kampung tempat bangsa Yahudi melanggar janji di hari Sabtu",
					"ayat" => "Qs.2:62 | Qs.3:113 | Qs.3:114 | Qs.3:199 | Qs.4:162 | Qs.5:44 | Qs.5:66 | Qs.5:69 | Qs.7:120 | Qs.7:121 | Qs.7:123 | Qs.7:124 | Qs.7:125 | Qs.7:126 | Qs.7:157 | Qs.7:159 | Qs.7:168 | Qs.7:170 | Qs.10:83 | Qs.10:85 | Qs.10:86 | Qs.10:87 | Qs.13:36 | Qs.13:43 | Qs.17:107 | Qs.20:70 | Qs.20:72 | Qs.20:73 | Qs.26:46 | Qs.26:47 | Qs.26:48 | Qs.26:50 | Qs.26:51 | Qs.28:52 | Qs.28:53 | Qs.28:54 | Qs.28:55 | Qs.29:47 | Qs.32:24"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Kisah sapi (lembu)",
					"ayat" => "Qs.2:65 | Qs.4:154 | Qs.7:163 | Qs.7:166"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Sikap bangsa Yahudi terhadap kitab-kitab samawi",
					"ayat" => "Qs.2:67 | Qs.2:68 | Qs.2:69 | Qs.2:70 | Qs.2:71"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Sikap Yahudi terhadap agama-agama samawi",
					"ayat" => "Qs.2:75 | Qs.2:78 | Qs.2:79 | Qs.2:85 | Qs.2:87 | Qs.2:89 | Qs.2:91 | Qs.2:101 | Qs.2:174 | Qs.2:176 | Qs.2:211 | Qs.3:23 | Qs.3:78 | Qs.3:98 | Qs.4:46 | Qs.5:15 | Qs.5:64 | Qs.5:68 | Qs.6:20 | Qs.6:91 | Qs.7:169 | Qs.7:170 | Qs.7:171 | Qs.11:110 | Qs.15:90 | Qs.41:45 | Qs.62:5"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Kelemahan iman bangsa Yahudi",
					"ayat" => "Qs.2:44 | Qs.2:55 | Qs.2:68 | Qs.2:69 | Qs.2:70 | Qs.2:71 | Qs.2:74 | Qs.2:75 | Qs.2:76 | Qs.2:100 | Qs.2:247 | Qs.2:249 | Qs.3:75 | Qs.4:153 | Qs.4:161 | Qs.5:71 | Qs.7:129 | Qs.7:134 | Qs.7:138 | Qs.7:148 | Qs.7:150 | Qs.7:160 | Qs.7:163 | Qs.7:169 | Qs.16:118 | Qs.17:101 | Qs.20:85 | Qs.20:86 | Qs.20:87 | Qs.20:88 | Qs.20:92 | Qs.20:96 | Qs.26:61 | Qs.43:49 | Qs.43:50 | Qs.43:54 | Qs.45:17 | Qs.62:6 | Qs.62:7"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Keingkaran dan sifat keras kepala bangsa Yahudi",
					"ayat" => "Qs.2:41 | Qs.2:42 | Qs.2:51 | Qs.2:54 | Qs.2:55 | Qs.2:59 | Qs.2:61 | Qs.2:65 | Qs.2:68 | Qs.2:69 | Qs.2:70 | Qs.2:71 | Qs.2:74 | Qs.2:75 | Qs.2:76 | Qs.2:80 | Qs.2:83 | Qs.2:85 | Qs.2:86 | Qs.2:87 | Qs.2:88 | Qs.2:89 | Qs.2:90 | Qs.2:91 | Qs.2:92 | Qs.2:93 | Qs.2:101 | Qs.2:102 | Qs.2:103 | Qs.2:108 | Qs.2:111 | Qs.2:137 | Qs.2:140 | Qs.2:145 | Qs.2:146 | Qs.2:174 | Qs.2:211 | Qs.2:246 | Qs.2:247 | Qs.3:19 | Qs.3:21 | Qs.3:23 | Qs.3:24 | Qs.3:52 | Qs.3:55 | Qs.3:65 | Qs.3:70 | Qs.3:93 | Qs.3:98 | Qs.3:99 | Qs.3:112 | Qs.3:181 | Qs.3:183 | Qs.3:187 | Qs.4:44 | Qs.4:46 | Qs.4:51 | Qs.4:153 | Qs.4:155 | Qs.4:156 | Qs.4:160 | Qs.5:13 | Qs.5:22 | Qs.5:24 | Qs.5:25 | Qs.5:32 | Qs.5:43 | Qs.5:59 | Qs.5:60 | Qs.5:64 | Qs.5:65 | Qs.5:66 | Qs.5:70 | Qs.5:71 | Qs.5:79 | Qs.5:80 | Qs.5:81 | Qs.5:110 | Qs.6:20 | Qs.6:91 | Qs.6:114 | Qs.6:146 | Qs.7:133 | Qs.7:135 | Qs.7:136 | Qs.7:138 | Qs.7:148 | Qs.7:150 | Qs.7:160 | Qs.7:162 | Qs.7:166 | Qs.7:169 | Qs.9:34 | Qs.10:93 | Qs.14:8 | Qs.16:118 | Qs.17:101 | Qs.20:91 | Qs.26:67 | Qs.26:197 | Qs.27:76 | Qs.44:21 | Qs.45:17 | Qs.58:8 | Qs.61:6 | Qs.98:4"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Ingkar janji dan kekerasan hati bangsa Yahudi",
					"ayat" => "Qs.2:68 | Qs.2:69 | Qs.2:70 | Qs.2:71 | Qs.2:108 | Qs.4:160 | Qs.6:91 | Qs.6:146 | Qs.7:132 | Qs.7:133 | Qs.43:49 | Qs.43:50"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Sikap bangsa Yahudi terhadap Nabi - nabi",
					"ayat" => "Qs.2:61 | Qs.2:87 | Qs.2:91 | Qs.2:104 | Qs.2:140 | Qs.2:247 | Qs.3:21 | Qs.3:55 | Qs.3:66 | Qs.3:112 | Qs.3:181 | Qs.3:183 | Qs.4:46 | Qs.4:153 | Qs.4:155 | Qs.4:157 | Qs.5:70 | Qs.43:49 | Qs.43:52 | Qs.43:53 | Qs.58:8 | Qs.59:4 | Qs.61:5"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Sikap bangsa Yahudi terhadap Islam",
					"ayat" => "Qs.2:76 | Qs.2:89 | Qs.2:90 | Qs.2:101 | Qs.2:105 | Qs.2:109 | Qs.2:111 | Qs.2:120 | Qs.2:135 | Qs.2:137 | Qs.2:139 | Qs.2:142 | Qs.2:144 | Qs.2:145 | Qs.2:146 | Qs.3:19 | Qs.3:20 | Qs.3:23 | Qs.3:69 | Qs.3:70 | Qs.3:72 | Qs.3:73 | Qs.3:75 | Qs.3:98 | Qs.3:99 | Qs.3:100 | Qs.3:110 | Qs.3:118 | Qs.3:186 | Qs.3:187 | Qs.4:44 | Qs.4:46 | Qs.4:47 | Qs.4:51 | Qs.4:54 | Qs.4:150 | Qs.4:153 | Qs.5:13 | Qs.5:41 | Qs.5:57 | Qs.5:58 | Qs.5:59 | Qs.5:61 | Qs.5:82 | Qs.6:20 | Qs.6:91 | Qs.6:114 | Qs.9:32 | Qs.58:8 | Qs.61:6"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Kebakhilan dan ketamakan bangsa Yahudi",
					"ayat" => "Qs.4:53 | Qs.5:62 | Qs.5:63 | Qs.9:34"),
				array(
					"id_master" => 8,
					"level" => 5,
					"index" => "Kebencian bangsa Yahudi terhadap orang Nasrani",
					"ayat" => "Qs.2:113 | Qs.2:145"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Hubungan antara bangsa Yahudi dan orang mukmin",
					"ayat" => "Qs.2:76 | Qs.2:136 | Qs.3:28 | Qs.3:64 | Qs.5:5 | Qs.5:51 | Qs.5:57 | Qs.5:82 | Qs.9:29 | Qs.33:26 | Qs.58:14 | Qs.58:22 | Qs.59:2 | Qs.60:1 | Qs.60:13"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah orang-orang Nasrani dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Akidah orang-orang Nasrani",
					"ayat" => "Qs.2:111 | Qs.2:113 | Qs.2:183 | Qs.3:20 | Qs.4:47 | Qs.4:171 | Qs.5:17 | Qs.5:72 | Qs.5:73 | Qs.9:30 | Qs.9:31 | Qs.19:35 | Qs.19:36 | Qs.98:5"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Hubungan antara orang Islam dan Nasrani",
					"ayat" => "Qs.2:136 | Qs.3:28 | Qs.3:64 | Qs.3:118 | Qs.5:5 | Qs.5:51 | Qs.5:57 | Qs.5:82 | Qs.9:29 | Qs.58:22 | Qs.60:1"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Orang-orang beriman di kalangan Nasrani",
					"ayat" => "Qs.2:62 | Qs.3:52 | Qs.3:53 | Qs.3:110 | Qs.3:113 | Qs.3:114 | Qs.3:199 | Qs.5:66 | Qs.5:69 | Qs.5:82 | Qs.5:83 | Qs.5:84 | Qs.5:85 | Qs.5:111 | Qs.5:112 | Qs.5:113 | Qs.7:157 | Qs.13:36 | Qs.13:43 | Qs.17:107 | Qs.28:52 | Qs.28:53 | Qs.28:54 | Qs.28:55 | Qs.29:47 | Qs.57:27"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Sikap orang Nasrani terhadap nabi Isa as.",
					"ayat" => "Qs.3:52 | Qs.3:53 | Qs.4:171 | Qs.5:17 | Qs.19:37"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Sifat-sifat orang Nasrani",
					"ayat" => "Qs.3:65 | Qs.3:66 | Qs.5:14 | Qs.5:57 | Qs.5:58 | Qs.5:68 | Qs.6:114 | Qs.9:34 | Qs.57:27 | Qs.98:4"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Sikap orang Nasrani terhadap Islam",
					"ayat" => "Qs.2:105 | Qs.2:109 | Qs.2:120 | Qs.2:135 | Qs.2:137 | Qs.2:139 | Qs.2:145 | Qs.2:146 | Qs.3:19 | Qs.3:20 | Qs.3:23 | Qs.3:70 | Qs.3:71 | Qs.3:98 | Qs.3:99 | Qs.3:100 | Qs.3:118 | Qs.3:186 | Qs.3:187 | Qs.4:47 | Qs.4:150 | Qs.5:57 | Qs.5:58 | Qs.5:59 | Qs.5:82 | Qs.5:83 | Qs.6:20 | Qs.6:114 | Qs.9:32"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Kemurkaan Allah terhadap orang Nasrani",
					"ayat" => "Qs.1:7 | Qs.9:30"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Nabi dan orang-orang Nasrai saling membutuhkan",
					"ayat" => "Qs.3:61"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah Maryam dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Kelahiran Maryam",
					"ayat" => "Qs.3:36"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Keutamaan Maryam dari wanita-wanita lain",
					"ayat" => "Qs.3:42 | Qs.66:12"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Pendidikan dan kehidupan Maryam",
					"ayat" => "Qs.3:37 | Qs.3:44 | Qs.19:16 | Qs.19:17 | Qs.19:20 | Qs.19:28 | Qs.21:91"),
				array(
					"id_master" => 8,
					"level" => 4,
					"index" => "Maryam mengandung dan melahirkan Isa as.",
					"ayat" => "Qs.19:16 | Qs.19:17 | Qs.19:18 | Qs.19:19 | Qs.19:20 | Qs.19:21 | Qs.19:22 | Qs.19:23 | Qs.19:24 | Qs.19:25 | Qs.19:26 | Qs.19:27 | Qs.19:28 | Qs.19:29 | Qs.19:30 | Qs.66:12"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah pemilik kebun",
					"ayat" => "Qs.68:17 | Qs.68:18 | Qs.68:19 | Qs.68:20 | Qs.68:21 | Qs.68:22 | Qs.68:23 | Qs.68:24 | Qs.68:25 | Qs.68:26 | Qs.68:27 | Qs.68:28 | Qs.68:29 | Qs.68:30 | Qs.68:31"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah pasukan bergajah",
					"ayat" => "Qs.68:32 | Qs.105:2 | Qs.105:3 | Qs.105:4 | Qs.105:5"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah pemilik dua kebun",
					"ayat" => "Qs.18:32 | Qs.18:33 | Qs.18:34 | Qs.18:35 | Qs.18:36 | Qs.18:37 | Qs.18:38 | Qs.18:39 | Qs.18:40 | Qs.18:41 | Qs.18:42 | Qs.18:43"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah Zulqarnain",
					"ayat" => "Qs.18:83 | Qs.18:84 | Qs.18:85 | Qs.18:86 | Qs.18:87 | Qs.18:88 | Qs.18:89 | Qs.18:90 | Qs.18:91 | Qs.18:92 | Qs.18:93 | Qs.18:94 | Qs.18:95 | Qs.18:96 | Qs.18:97 | Qs.18:98"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah Ashabul Kahfi",
					"ayat" => "Qs.18:9 | Qs.18:10 | Qs.18:11 | Qs.18:12 | Qs.18:13 | Qs.18:14 | Qs.18:15 | Qs.18:16 | Qs.18:17 | Qs.18:18 | Qs.18:19 | Qs.18:20 | Qs.18:21 | Qs.18:22 | Qs.18:25 | Qs.18:26"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah Ashabul Ukhdud",
					"ayat" => "Qs.85:4 | Qs.85:5 | Qs.85:6 | Qs.85:7 | Qs.85:8 | Qs.85:9 | Qs.85:10"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah Ashabul Qaryah",
					"ayat" => "Qs.36:13 | Qs.36:15 | Qs.36:16 | Qs.36:17 | Qs.36:18 | Qs.36:19 | Qs.36:20 | Qs.36:21 | Qs.36:22 | Qs.36:23 | Qs.36:24 | Qs.36:25 | Qs.36:26 | Qs.36:27 | Qs.36:28 | Qs.36:29"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Kisah tamu Ibrahim as.",
					"ayat" => "Qs.15:51 | Qs.15:57 | Qs.51:24 | Qs.51:25 | Qs.51:26 | Qs.51:27"),
				array(
					"id_master" => 8,
					"level" => 2,
					"index" => "Perumpamaan-perumpamaan dalam Al Qur'an"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Tujuan perumpamaan dalam Al Qur'an",
					"ayat" => "Qs.2:17 | Qs.2:19 | Qs.2:20 | Qs.2:26 | Qs.2:171 | Qs.2:261 | Qs.2:264 | Qs.2:265 | Qs.2:266 | Qs.3:117 | Qs.10:24 | Qs.13:14 | Qs.13:17 | Qs.14:18 | Qs.14:25 | Qs.14:45 | Qs.16:60 | Qs.16:92 | Qs.16:112 | Qs.18:32 | Qs.18:45 | Qs.18:54 | Qs.18:109 | Qs.24:35 | Qs.29:43 | Qs.30:28 | Qs.30:58 | Qs.39:27 | Qs.43:57 | Qs.45:23 | Qs.59:15 | Qs.59:21"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan Al Qur'an tentang perkara keji",
					"ayat" => "Qs.2:26 | Qs.22:73"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan ilmu Allah",
					"ayat" => "Qs.18:109 | Qs.31:16 | Qs.31:27"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan kufur dan menyekutukan Allah",
					"ayat" => "Qs.2:19 | Qs.2:74 | Qs.2:171 | Qs.2:266 | Qs.5:16 | Qs.6:39 | Qs.6:71 | Qs.7:176 | Qs.7:177 | Qs.13:14 | Qs.13:16 | Qs.13:17 | Qs.22:31 | Qs.22:73 | Qs.24:40 | Qs.29:41 | Qs.41:17 | Qs.57:9 | Qs.65:11"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan kemunafikan",
					"ayat" => "Qs.2:16 | Qs.2:17 | Qs.2:18 | Qs.2:19 | Qs.2:20 | Qs.2:264 | Qs.2:266 | Qs.8:21 | Qs.8:22 | Qs.9:109 | Qs.22:11 | Qs.63:4"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan kebangkitan",
					"ayat" => "Qs.7:57 | Qs.22:5 | Qs.43:11"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan nikmat surga",
					"ayat" => "Qs.13:35 | Qs.47:15"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan orang kafir dan mukmin",
					"ayat" => "Qs.6:36 | Qs.6:50 | Qs.6:122 | Qs.7:58 | Qs.7:179 | Qs.8:37 | Qs.10:42 | Qs.10:43 | Qs.11:20 | Qs.11:24 | Qs.13:16 | Qs.13:19 | Qs.16:75 | Qs.16:76 | Qs.18:32 | Qs.21:45 | Qs.22:46 | Qs.25:44 | Qs.26:198 | Qs.27:80 | Qs.27:81 | Qs.30:52 | Qs.30:53 | Qs.35:19 | Qs.35:20 | Qs.35:21 | Qs.35:22 | Qs.39:22 | Qs.39:29 | Qs.40:58 | Qs.43:40 | Qs.45:23 | Qs.47:12 | Qs.62:5 | Qs.67:22"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan hubungan perkawinan",
					"ayat" => "Qs.2:187 | Qs.30:21"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan masyarakat Islam",
					"ayat" => "Qs.48:29"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan mengumpat",
					"ayat" => "Qs.49:12"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan kehidupan dunia",
					"ayat" => "Qs.10:24 | Qs.18:45 | Qs.57:20"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan amal orang kafir",
					"ayat" => "Qs.3:117 | Qs.14:18 | Qs.24:39 | Qs.24:40"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan nafkah dan amal kebaikan",
					"ayat" => "Qs.2:261 | Qs.2:265 | Qs.35:29 | Qs.57:11 | Qs.57:18 | Qs.73:20"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan cahaya Allah",
					"ayat" => "Qs.24:35"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan iman",
					"ayat" => "Qs.5:16 | Qs.9:109 | Qs.13:17 | Qs.57:9 | Qs.65:11"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan ingkar janji",
					"ayat" => "Qs.16:92"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan perkataan baik",
					"ayat" => "Qs.14:24 | Qs.14:25"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan perkataan buruk",
					"ayat" => "Qs.14:26"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan Allah",
					"ayat" => "Qs.24:35 | Qs.39:29"),
				array(
					"id_master" => 8,
					"level" => 3,
					"index" => "Perumpamaan kampung yang ingkar akan nikmat Allah",
					"ayat" => "Qs.16:112"),
				array(
					"id_master" => 9,
					"level" => 1,
					"index" => "Pakaian"),
				array(
					"id_master" => 9,
					"level" => 2,
					"index" => "Etika berpakaian"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Menutup aurat dengan pakaian",
					"ayat" => "Qs.7:26"),
				array(
					"id_master" => 9,
					"level" => 2,
					"index" => "Pakaian wanita"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Wanita memanjangkan bajunya",
					"ayat" => "Qs.24:31 | Qs.33:59"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Tabarruj (menampakkan kecantikan dan perhiasan)"),
				array(
					"id_master" => 9,
					"level" => 4,
					"index" => "Wanita yang keluar rumah dengan perhiasannya",
					"ayat" => "Qs.24:60"),
				array(
					"id_master" => 9,
					"level" => 4,
					"index" => "Menampakkan perhiasan di depan muhrim",
					"ayat" => "Qs.24:31 | Qs.33:55"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Hijab",
					"ayat" => "Qs.24:31 | Qs.24:60 | Qs.33:53 | Qs.33:55 | Qs.33:59"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Menutup muka wanita",
					"ayat" => "Qs.24:31"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Keringanan hijab terhadap orang tua",
					"ayat" => "Qs.24:60"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Perhiasan pada pakaian wanita",
					"ayat" => "Qs.24:31"),
				array(
					"id_master" => 9,
					"level" => 1,
					"index" => "Perhiasan"),
				array(
					"id_master" => 9,
					"level" => 2,
					"index" => "Perhiasan yang dilarang"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Tato dan orang yang membuat tato",
					"ayat" => "Qs.4:119"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Menyambung rambut",
					"ayat" => "Qs.4:119"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Meperbaiki gigi agar tampak lebih cantik",
					"ayat" => "Qs.4:119"),
				array(
					"id_master" => 9,
					"level" => 2,
					"index" => "Permainan dan hiburan"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Bermain judi"),
				array(
					"id_master" => 9,
					"level" => 4,
					"index" => "Hukum Berjudi",
					"ayat" => "Qs.2:219 | Qs.5:90 | Qs.5:91"),
				array(
					"id_master" => 9,
					"level" => 4,
					"index" => "Kerusakan akibat berjudi",
					"ayat" => "Qs.5:91"),
				array(
					"id_master" => 9,
					"level" => 3,
					"index" => "Hiburan dengan nyanyian",
					"ayat" => "Qs.17:64 | Qs.53:61"),
				array(
					"id_master" => 10,
					"level" => 1,
					"index" => "Sanksi-sanksi"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Macam-macam hukuman"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Hudud (hukuman yang telah ditentukan)",
					"ayat" => "Qs.2:178 | Qs.5:45"),
				array(
					"id_master" => 10,
					"level" => 1,
					"index" => "Kejahatan murtad (keluar agama)"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Yang dianggap murtad"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Mencaci Nabi",
					"ayat" => "Qs.9:12"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Memaksa untuk murtad",
					"ayat" => "Qs.16:106"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Sanksi murtad"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Hukuman murtad di akhirat",
					"ayat" => "Qs.2:217"),
				array(
					"id_master" => 10,
					"level" => 1,
					"index" => "Kejahatan membunuh"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Hukum membunuh"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Kekejian membunuh",
					"ayat" => "Qs.17:33"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Membunuh adalah dosa besar",
					"ayat" => "Qs.2:84 | Qs.4:29 | Qs.4:30 | Qs.4:92 | Qs.4:93 | Qs.5:32"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Ancaman terhadap pembunuhan",
					"ayat" => "Qs.2:85 | Qs.4:92 | Qs.4:93 | Qs.5:32"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Membunuh diharamkan"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Membunuh anak",
					"ayat" => "Qs.6:137 | Qs.6:140 | Qs.6:151 | Qs.16:58 | Qs.16:59 | Qs.25:68 | Qs.60:12 | Qs.81:8 | Qs.81:9"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Orang yang pertama membunuh",
					"ayat" => "Qs.5:27 | Qs.5:28 | Qs.5:29 | Qs.5:30"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Jenis-jenis pembunuhan"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Pembunuhan dengan sengaja",
					"ayat" => "Qs.2:178 | Qs.4:93"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Pembunuhan tidak sengaja",
					"ayat" => "Qs.4:92"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Sanksi membunuh"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Kisas (hukuman balasan)"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Diwajibkannya kisas",
					"ayat" => "Qs.2:178 | Qs.2:179 | Qs.5:45 | Qs.6:151 | Qs.17:33"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Hikmah pelaksanaan kisas",
					"ayat" => "Qs.2:179"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Kisas di kalangan Bani Israel",
					"ayat" => "Qs.5:45"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Memaafkan kisas",
					"ayat" => "Qs.2:178 | Qs.5:45"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Pilihan dalam kisas",
					"ayat" => "Qs.2:178"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Kisas antara laki-laki dan wanita",
					"ayat" => "Qs.2:178"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Membunuh hamba dibalas dengan hamba",
					"ayat" => "Qs.2:178"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Wali si mayit yang menentukan kisas",
					"ayat" => "Qs.5:45 | Qs.17:33"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Menuntut kisas dengan cara yang tidak benar",
					"ayat" => "Qs.6:151 | Qs.17:33 | Qs.25:68"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Diat (denda) pembunuhan"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Diwajibakannya diat",
					"ayat" => "Qs.2:178 | Qs.4:92"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Membunuh setelah menerima diat",
					"ayat" => "Qs.2:178"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Kafarat membunuh",
					"ayat" => "Qs.4:92"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Penyesalan si pembunuh dan taubatnya",
					"ayat" => "Qs.4:92"),
				array(
					"id_master" => 10,
					"level" => 1,
					"index" => "Kejahatan selain membunuh"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Sanksi melukai orang lain"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Kisas bagi yang melukai orang lain",
					"ayat" => "Qs.5:45"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Gugurnya hukuman melukai orang lain",
					"ayat" => "Qs.5:45"),
				array(
					"id_master" => 10,
					"level" => 1,
					"index" => "Kejahatan berzina"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Hukum berzina"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Kekejian berzina",
					"ayat" => "Qs.4:24 | Qs.4:25 | Qs.5:5 | Qs.17:32 | Qs.19:28 | Qs.23:7 | Qs.70:31"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Keutamaan meninggalkan hal-hal yang keji",
					"ayat" => "Qs.4:31 | Qs.17:32 | Qs.23:5 | Qs.23:10 | Qs.23:11 | Qs.42:37 | Qs.53:32 | Qs.70:29 | Qs.70:30 | Qs.70:31"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Dipaksa berbuat zina",
					"ayat" => "Qs.24:33"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Zina anggota badan",
					"ayat" => "Qs.24:30 | Qs.24:31"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Penetapan berzina"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Kesaksian atas zina",
					"ayat" => "Qs.4:15 | Qs.24:4 | Qs.24:13"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Sanksi berzina"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Mendera pelaku zina"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Jumlah dera bagi pelaku zina",
					"ayat" => "Qs.24:2"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Mendera perawan pelaku zina",
					"ayat" => "Qs.24:2"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Mendera hamba wanita pelaku zina",
					"ayat" => "Qs.24:25"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Cara-cara mendera pelaku zina",
					"ayat" => "Qs.24:2"),
				array(
					"id_master" => 10,
					"level" => 1,
					"index" => "Kejahatan menuduh orang lain berbuat zina"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Hukum menuduh orang lain berbuat zina"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Menuduh berzina adalah dosa besar",
					"ayat" => "Qs.24:4 | Qs.24:23"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Sanksi menuduh orang lain berbuat zina"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Mendera orang yang menuduh berzina",
					"ayat" => "Qs.24:4"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Kesaksian penuduh zina tidak diterima",
					"ayat" => "Qs.24:4"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Penuduh zina yang menyesal dan menarik kembali tuduhannya",
					"ayat" => "Qs.24:5"),
				array(
					"id_master" => 10,
					"level" => 1,
					"index" => "Kejahatan mencuri"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Sanksi mencuri"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Pemotongan tangan pencuri"),
				array(
					"id_master" => 10,
					"level" => 4,
					"index" => "Hukum memotong tangan pencuri",
					"ayat" => "Qs.5:38"),
				array(
					"id_master" => 10,
					"level" => 1,
					"index" => "Kejahatan begal, rampok"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Hukum begal dan perampokan"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Taubatnya perampok dan pembegal",
					"ayat" => "Qs.5:34"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Sanksi perampok dan pembegal",
					"ayat" => "Qs.5:33"),
				array(
					"id_master" => 10,
					"level" => 1,
					"index" => "Kejahatan menentang penguasa"),
				array(
					"id_master" => 10,
					"level" => 2,
					"index" => "Sanksi penentang"),
				array(
					"id_master" => 10,
					"level" => 3,
					"index" => "Memerangi penentang",
					"ayat" => "Qs.49:9"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Keutamaan ilmu",
					"ayat" => "Qs.2:247 | Qs.2:269 | Qs.3:7 | Qs.4:162 | Qs.12:68 | Qs.17:107 | Qs.22:54 | Qs.27:15 | Qs.27:40 | Qs.27:52 | Qs.28:14 | Qs.28:80 | Qs.29:41 | Qs.29:43 | Qs.29:49 | Qs.29:64 | Qs.30:56 | Qs.34:6 | Qs.39:9 | Qs.55:4 | Qs.58:11 | Qs.96:4"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Kedudukan orang alim",
					"ayat" => "Qs.2:247 | Qs.3:18 | Qs.4:83 | Qs.5:63 | Qs.6:105 | Qs.7:164 | Qs.17:107 | Qs.21:7 | Qs.22:54 | Qs.27:40 | Qs.27:52 | Qs.28:14 | Qs.28:80 | Qs.29:41 | Qs.29:43 | Qs.29:49 | Qs.29:64 | Qs.35:28 | Qs.39:9 | Qs.58:11"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Menuntut ilmu dan mengamalkannya",
					"ayat" => "Qs.2:151 | Qs.3:137 | Qs.5:63 | Qs.7:175 | Qs.7:176 | Qs.9:122 | Qs.17:12 | Qs.18:66 | Qs.20:114 | Qs.62:5"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Kebodohan dan akibat orang bodoh",
					"ayat" => "Qs.6:119 | Qs.6:144"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Majlis ilmu atau tempat pendidikan"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Duduk dalam majlis ilmu",
					"ayat" => "Qs.58:11"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Memutus pembicaraan guru",
					"ayat" => "Qs.18:70 | Qs.18:75 | Qs.18:78"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Menyampaikan ilmu"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Yang hadir menyampaikan kepada yang tidak hadir",
					"ayat" => "Qs.9:122 | Qs.46:29 | Qs.46:30 | Qs.46:31"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Hukum menuntut ilmu fardhu kifayah",
					"ayat" => "Qs.9:122"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Menyembunyikan ilmu",
					"ayat" => "Qs.2:144 | Qs.2:146 | Qs.2:159 | Qs.2:174 | Qs.3:70 | Qs.3:71 | Qs.3:75 | Qs.3:187 | Qs.4:37 | Qs.4:46 | Qs.4:51 | Qs.5:13 | Qs.5:15 | Qs.5:44 | Qs.5:63 | Qs.5:67 | Qs.6:114 | Qs.7:162 | Qs.7:169"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Etika ilmu"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Etika orang alim"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Memperhatikan kondisi pendengar",
					"ayat" => "Qs.18:67 | Qs.18:68 | Qs.18:73 | Qs.18:82 | Qs.87:9"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Kelapangan dada orang alim",
					"ayat" => "Qs.7:199 | Qs.18:72 | Qs.18:73 | Qs.18:75 | Qs.18:78"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Semua ilmu kembali kepada Allah",
					"ayat" => "Qs.2:32 | Qs.3:5 | Qs.3:7 | Qs.3:66 | Qs.4:25 | Qs.4:45 | Qs.7:62 | Qs.7:187 | Qs.10:40 | Qs.12:76 | Qs.12:77 | Qs.12:96 | Qs.16:70 | Qs.16:91 | Qs.16:101 | Qs.16:125 | Qs.17:54 | Qs.17:55 | Qs.17:60 | Qs.17:84 | Qs.17:85 | Qs.21:80"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Pengamalan orang yang berilmu",
					"ayat" => "Qs.2:44 | Qs.3:188 | Qs.7:159 | Qs.7:181 | Qs.41:33 | Qs.61:2 | Qs.61:3 | Qs.62:5"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Kewajiban orang alim",
					"ayat" => "Qs.7:159 | Qs.7:164 | Qs.7:181"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Etika seorang murid"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Menghormati guru",
					"ayat" => "Qs.18:70 | Qs.18:73 | Qs.18:75 | Qs.18:76 | Qs.18:78"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Memperhatikan keterangan orang alim",
					"ayat" => "Qs.18:70 | Qs.18:72 | Qs.18:73 | Qs.18:75 | Qs.18:76 | Qs.18:78 | Qs.20:114"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Sabar dalam mendapatkan ilmu",
					"ayat" => "Qs.18:69"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Etika dalam majlis ilmu"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Meluaskan ruang belajar",
					"ayat" => "Qs.58:11"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Etika berbisik-bisik",
					"ayat" => "Qs.58:8 | Qs.58:12 | Qs.58:13"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Menegur guru bila terbukti salah",
					"ayat" => "Qs.18:71 | Qs.18:74 | Qs.18:77"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Mengajar dengan cara bertanya",
					"ayat" => "Qs.2:215 | Qs.6:46 | Qs.6:47 | Qs.6:63 | Qs.6:81 | Qs.7:97 | Qs.7:98 | Qs.7:99 | Qs.7:100 | Qs.18:103 | Qs.23:84 | Qs.23:86 | Qs.23:88 | Qs.23:112 | Qs.26:72 | Qs.26:73 | Qs.26:221 | Qs.27:60 | Qs.27:61 | Qs.27:62 | Qs.27:63 | Qs.27:64 | Qs.61:2 | Qs.61:10 | Qs.83:8 | Qs.83:19"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Ilmu Hadis"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Kedudukan sunnah Rasul",
					"ayat" => "Qs.4:59 | Qs.4:65 | Qs.4:69 | Qs.7:158 | Qs.8:1 | Qs.8:20 | Qs.8:24 | Qs.8:46 | Qs.9:71 | Qs.16:44 | Qs.24:56 | Qs.33:21 | Qs.33:36 | Qs.47:33 | Qs.58:13 | Qs.59:7 | Qs.64:12"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Berpegang pada hadits",
					"ayat" => "Qs.3:32 | Qs.3:132 | Qs.4:65 | Qs.4:69 | Qs.7:158 | Qs.8:1 | Qs.8:20 | Qs.8:24 | Qs.8:46 | Qs.9:71 | Qs.24:56 | Qs.33:21 | Qs.47:33 | Qs.58:13 | Qs.59:7 | Qs.64:12"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Meneliti kesahihan hadis",
					"ayat" => "Qs.4:83 | Qs.49:6"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Kemakruhan berbeda pendapat dalam hadits",
					"ayat" => "Qs.4:88"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Fatwa"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Fatwa halal dan haram"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Pengharaman secara bertahap",
					"ayat" => "Qs.2:219 | Qs.4:43"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Kejelasan halal dan haram",
					"ayat" => "Qs.2:173 | Qs.4:13 | Qs.4:26 | Qs.24:1"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Mematuhi perintah Allah dan RasulNya",
					"ayat" => "Qs.2:63 | Qs.2:67 | Qs.2:68 | Qs.2:70 | Qs.2:71 | Qs.2:143 | Qs.2:187 | Qs.2:208 | Qs.2:229 | Qs.2:285 | Qs.3:32 | Qs.3:132 | Qs.3:152 | Qs.3:172 | Qs.4:13 | Qs.4:59 | Qs.4:64 | Qs.4:66 | Qs.4:69 | Qs.4:80 | Qs.5:7 | Qs.5:55 | Qs.5:56 | Qs.5:92 | Qs.5:108 | Qs.6:151 | Qs.6:152 | Qs.6:153 | Qs.6:155 | Qs.7:3 | Qs.7:22 | Qs.7:158 | Qs.7:203 | Qs.8:1 | Qs.8:20 | Qs.8:24 | Qs.8:46 | Qs.9:29 | Qs.9:62 | Qs.9:71 | Qs.9:112 | Qs.18:23 | Qs.22:30 | Qs.22:32 | Qs.22:78 | Qs.23:7 | Qs.24:2 | Qs.24:48 | Qs.24:51 | Qs.24:52 | Qs.24:54 | Qs.24:56 | Qs.31:22 | Qs.33:2 | Qs.33:21 | Qs.33:33 | Qs.33:35 | Qs.33:36 | Qs.33:37 | Qs.33:41 | Qs.33:42 | Qs.33:71 | Qs.35:29 | Qs.37:102 | Qs.37:103 | Qs.42:38 | Qs.43:61 | Qs.47:21 | Qs.47:33 | Qs.48:16 | Qs.48:17 | Qs.49:14 | Qs.57:19 | Qs.57:28 | Qs.58:4 | Qs.58:9 | Qs.58:13 | Qs.59:7 | Qs.59:18 | Qs.60:9 | Qs.60:11 | Qs.64:8 | Qs.64:12 | Qs.64:16 | Qs.65:1 | Qs.65:5 | Qs.65:10 | Qs.70:31 | Qs.72:23 | Qs.87:14"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Menjauhi syubhat",
					"ayat" => "Qs.5:100 | Qs.7:199"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Menyiasati perkara haram",
					"ayat" => "Qs.7:163"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Mengharamkan yang halal dan menghalalkan yang haram",
					"ayat" => "Qs.3:93 | Qs.4:2 | Qs.5:87 | Qs.5:103 | Qs.6:138 | Qs.6:139 | Qs.6:140 | Qs.6:143 | Qs.6:144 | Qs.6:150 | Qs.7:32 | Qs.7:81 | Qs.9:37 | Qs.10:59 | Qs.16:35 | Qs.16:116 | Qs.66:1 | Qs.68:12"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Etika berfatwa"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Tidak tergesa-gesa dalam berfatwa",
					"ayat" => "Qs.4:83 | Qs.17:36"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Berfatwa tanpa dasar pengetahuan",
					"ayat" => "Qs.17:36 | Qs.18:22 | Qs.22:3 | Qs.22:8 | Qs.31:20 | Qs.40:35 | Qs.40:56"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Perbuatan pemberi fatwa sesuai dengan fatwanya",
					"ayat" => "Qs.2:44 | Qs.7:159 | Qs.7:181 | Qs.41:33 | Qs.61:2 | Qs.61:3 | Qs.62:5"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Etika bertanya"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Bertanya pada ahlinya",
					"ayat" => "Qs.2:215 | Qs.4:83 | Qs.4:127 | Qs.4:176 | Qs.12:43 | Qs.12:46 | Qs.16:43 | Qs.21:7"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Berlebihan dalam bertanya",
					"ayat" => "Qs.5:101 | Qs.5:102 | Qs.7:187 | Qs.10:48 | Qs.49:7 | Qs.79:42"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Etika menjawab"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Mengarahkan penanya pada hal yang berfaedah",
					"ayat" => "Qs.2:15 | Qs.2:17 | Qs.2:19 | Qs.2:20 | Qs.2:22 | Qs.2:189 | Qs.2:215 | Qs.2:219 | Qs.2:220 | Qs.2:222 | Qs.5:4 | Qs.7:187 | Qs.8:1 | Qs.17:85 | Qs.18:83 | Qs.20:105"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Menjawab dengan dalil perbuatan",
					"ayat" => "Qs.5:31"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Mimpi"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Jenis mimpi"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Mimpi datangnya dari Allah"),
				array(
					"id_master" => 11,
					"level" => 4,
					"index" => "Mimpi Yusuf as.",
					"ayat" => "Qs.12:4 | Qs.12:5 | Qs.12:100"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Ta'bir mimpi"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Mimpi menjadi nyata setelah ditafsirkan",
					"ayat" => "Qs.12:41"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Pengobatan atau meditasi"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Penyakit"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Berdoa disaat sakit",
					"ayat" => "Qs.21:83"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Berobat"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Kesembuhan"),
				array(
					"id_master" => 11,
					"level" => 4,
					"index" => "Kesembuhan hanya dari Allah",
					"ayat" => "Qs.26:80"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Berobat dengan barang haram"),
				array(
					"id_master" => 11,
					"level" => 4,
					"index" => "Obat-obat yang diharamkan"),
				array(
					"id_master" => 11,
					"level" => 5,
					"index" => "Thirah dan Hamah (meramal nasib)",
					"ayat" => "Qs.7:131 | Qs.27:47"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Jenis obat"),
				array(
					"id_master" => 11,
					"level" => 4,
					"index" => "Obat dengki",
					"ayat" => "Qs.113:5"),
				array(
					"id_master" => 11,
					"level" => 4,
					"index" => "Berobat dengan madu",
					"ayat" => "Qs.16:69"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Berobat kepada dukun"),
				array(
					"id_master" => 11,
					"level" => 4,
					"index" => "Kebohongan dukun",
					"ayat" => "Qs.26:223"),
				array(
					"id_master" => 11,
					"level" => 3,
					"index" => "Sihir dan pengobatan"),
				array(
					"id_master" => 11,
					"level" => 4,
					"index" => "Berobat dengan menggunakan sihir",
					"ayat" => "Qs.113:4"),
				array(
					"id_master" => 11,
					"level" => 4,
					"index" => "Menyingkap perbuatan sihir dan menghilangkannya",
					"ayat" => "Qs.113:4"),
				array(
					"id_master" => 11,
					"level" => 4,
					"index" => "Epilepsy",
					"ayat" => "Qs.2:275"),
				array(
					"id_master" => 11,
					"level" => 1,
					"index" => "Perhitungan tahun"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Satu tahun ada 12 bulan",
					"ayat" => "Qs.9:36 | Qs.2:194 | Qs.5:97 | Qs.9:36 | Qs.9:37"),
				array(
					"id_master" => 11,
					"level" => 2,
					"index" => "Bulan-bulan haram"),
				array(
					"id_master" => 12,
					"level" => 1,
					"index" => "Akhlak"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Akhlak mulia"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Ihsan",
					"ayat" => "Qs.2:83 | Qs.2:112 | Qs.2:177 | Qs.2:195 | Qs.2:229 | Qs.3:134 | Qs.3:148 | Qs.3:172 | Qs.4:125 | Qs.4:128 | Qs.5:85 | Qs.5:93 | Qs.7:56 | Qs.7:161 | Qs.9:91 | Qs.9:100 | Qs.9:120 | Qs.10:26 | Qs.11:115 | Qs.12:22 | Qs.12:78 | Qs.12:90 | Qs.16:30 | Qs.16:90 | Qs.16:128 | Qs.17:7 | Qs.22:37 | Qs.28:14 | Qs.28:77 | Qs.29:69 | Qs.31:3 | Qs.31:22 | Qs.37:80 | Qs.37:105 | Qs.37:110 | Qs.37:121 | Qs.37:131 | Qs.39:10 | Qs.39:34 | Qs.46:12 | Qs.51:16 | Qs.53:31 | Qs.55:60 | Qs.77:44"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menyampaikan amanat",
					"ayat" => "Qs.2:283 | Qs.3:75 | Qs.4:2 | Qs.4:58 | Qs.8:27 | Qs.23:8 | Qs.70:32"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Etika terhadap Allah",
					"ayat" => "Qs.2:32 | Qs.7:143 | Qs.11:45 | Qs.11:47 | Qs.18:24 | Qs.20:12 | Qs.20:84 | Qs.26:51 | Qs.27:19"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Etika terhadap Nabi"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Memanggil Nabi dengan namanya",
					"ayat" => "Qs.24:63 | Qs.49:4 | Qs.49:5"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Meninggikan suara melebihi suara Nabi",
					"ayat" => "Qs.49:1 | Qs.49:2 | Qs.49:3"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Etika berbicara dengan Nabi",
					"ayat" => "Qs.2:104 | Qs.49:3 | Qs.49:4 | Qs.49:5"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Memohon diri kepada Nabi saat meninggalkan majlisnya",
					"ayat" => "Qs.24:62"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Pembicaraan khusus dengan Nabi",
					"ayat" => "Qs.58:12 | Qs.58:13"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Istiqamah (teguh pendirian)",
					"ayat" => "Qs.10:89 | Qs.11:112 | Qs.41:6 | Qs.42:15 | Qs.45:18 | Qs.46:13"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mendamaikan perselisihan antar manusia"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Keutamaan mendamaikan perselisihan antar manusia",
					"ayat" => "Qs.2:182 | Qs.2:224 | Qs.4:35 | Qs.4:85 | Qs.4:114 | Qs.7:142 | Qs.8:1 | Qs.49:9 | Qs.49:10"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Mendamaikan antara suami dan isteri",
					"ayat" => "Qs.2:232 | Qs.4:35 | Qs.4:128"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Inabah (taubat)",
					"ayat" => "Qs.11:75 | Qs.11:88 | Qs.13:27 | Qs.30:31 | Qs.30:33 | Qs.31:15 | Qs.34:9 | Qs.38:24 | Qs.38:34 | Qs.39:8 | Qs.39:17 | Qs.39:54 | Qs.40:13 | Qs.42:10 | Qs.42:13 | Qs.50:8 | Qs.50:33 | Qs.60:4"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Infaq"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Anjuran untuk berinfaq",
					"ayat" => "Qs.2:254 | Qs.2:261 | Qs.3:17 | Qs.3:92 | Qs.3:180 | Qs.14:31 | Qs.17:29 | Qs.25:67 | Qs.26:88 | Qs.32:16 | Qs.35:29 | Qs.36:47 | Qs.42:38 | Qs.51:19 | Qs.57:7 | Qs.57:10 | Qs.57:11 | Qs.57:18 | Qs.63:10 | Qs.64:16 | Qs.64:17 | Qs.73:20 | Qs.107:3"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Infaq, pelindung dari api neraka",
					"ayat" => "Qs.2:177 | Qs.3:17 | Qs.3:134 | Qs.4:39 | Qs.8:60 | Qs.34:39 | Qs.51:19 | Qs.90:14 | Qs.90:15 | Qs.90:16 | Qs.92:18 | Qs.107:3"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Ancaman bagi yang tidak meninfaqkan hartanya",
					"ayat" => "Qs.2:254 | Qs.3:180 | Qs.4:37 | Qs.9:34 | Qs.9:35 | Qs.50:25 | Qs.92:8"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Melindungi janda-janda dan orang miskin",
					"ayat" => "Qs.2:177 | Qs.2:215 | Qs.4:8 | Qs.4:36 | Qs.18:79 | Qs.24:22 | Qs.69:34 | Qs.74:44 | Qs.76:8 | Qs.89:18 | Qs.90:16 | Qs.107:3"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mendahulukan kepentingan orang lain",
					"ayat" => "Qs.2:177 | Qs.59:9"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menyempurnakan takaran dan timbangan",
					"ayat" => "Qs.6:152 | Qs.7:85 | Qs.11:84 | Qs.11:85 | Qs.12:59 | Qs.12:88 | Qs.17:35 | Qs.26:181 | Qs.26:182 | Qs.26:183 | Qs.55:8 | Qs.55:9"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berbuat baik"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Hakikat kebaikan",
					"ayat" => "Qs.2:177 | Qs.2:189"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Keutamaan perbuatan baik"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Keutamaan silaturahmi",
					"ayat" => "Qs.4:1 | Qs.8:75 | Qs.13:21 | Qs.13:25 | Qs.30:38 | Qs.33:6 | Qs.60:8"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Berbuat baik merupakan sebaik-baik amalan",
					"ayat" => "Qs.2:224 | Qs.3:92 | Qs.3:134"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Berbakti kepada kedua orang tua"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Durhaka kepada kedua orang tua termasuk dosa besar",
					"ayat" => "Qs.6:151 | Qs.17:23 | Qs.46:17"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Yang patut dijadikan teman",
					"ayat" => "Qs.12:99 | Qs.12:100"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Hubungan orang kafir dengan orang tuanya yang muslim",
					"ayat" => "Qs.29:8 | Qs.31:15 | Qs.58:22 | Qs.60:1 | Qs.60:8 | Qs.60:13"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Silaturahmi"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Dosa orang yang memutuskan hubungan silaturahmi",
					"ayat" => "Qs.2:27 | Qs.13:25 | Qs.47:23 | Qs.50:25"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Sedekah kepada keluarga",
					"ayat" => "Qs.2:215 | Qs.50:25"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Hubungan dengan saudara yang musyrik",
					"ayat" => "Qs.9:23 | Qs.29:8 | Qs.31:15 | Qs.58:22 | Qs.60:1 | Qs.60:2 | Qs.60:8 | Qs.60:9"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Larangan membunuh anak karena takut miskin",
					"ayat" => "Qs.6:137 | Qs.6:140 | Qs.6:151 | Qs.17:31"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Rendah diri dan khusyuk",
					"ayat" => "Qs.2:238 | Qs.3:17 | Qs.3:43 | Qs.3:199 | Qs.5:83 | Qs.7:55 | Qs.11:23 | Qs.14:37 | Qs.14:38 | Qs.14:40 | Qs.14:41 | Qs.17:109 | Qs.19:3 | Qs.19:4 | Qs.21:83 | Qs.21:87 | Qs.21:90 | Qs.23:2 | Qs.23:76 | Qs.25:64 | Qs.25:65 | Qs.30:26 | Qs.32:16 | Qs.33:35 | Qs.38:41 | Qs.39:9 | Qs.46:15 | Qs.57:16 | Qs.60:5 | Qs.79:45"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Tolong menolong",
					"ayat" => "Qs.5:2 | Qs.48:29"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berserah diri",
					"ayat" => "Qs.20:72 | Qs.26:50 | Qs.39:38 | Qs.40:44"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Takwa"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Keutamaan takwa",
					"ayat" => "Qs.2:103 | Qs.2:189 | Qs.2:197 | Qs.2:203 | Qs.2:224 | Qs.3:15 | Qs.3:76 | Qs.3:120 | Qs.3:123 | Qs.3:133 | Qs.3:172 | Qs.3:179 | Qs.3:186 | Qs.3:198 | Qs.3:200 | Qs.4:77 | Qs.4:128 | Qs.4:129 | Qs.5:35 | Qs.5:65 | Qs.5:93 | Qs.5:100 | Qs.6:155 | Qs.7:26 | Qs.7:35 | Qs.7:96 | Qs.7:156 | Qs.7:169 | Qs.7:201 | Qs.8:29 | Qs.9:4 | Qs.9:7 | Qs.9:36 | Qs.9:108 | Qs.12:57 | Qs.12:90 | Qs.12:109 | Qs.16:31 | Qs.16:128 | Qs.19:63 | Qs.24:52 | Qs.27:53 | Qs.36:45 | Qs.39:61 | Qs.39:73 | Qs.43:67 | Qs.49:13 | Qs.65:2 | Qs.65:3 | Qs.65:4 | Qs.65:5 | Qs.92:5"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Sifat-sifat orang yang bertakwa",
					"ayat" => "Qs.2:3 | Qs.2:4 | Qs.3:115 | Qs.7:201 | Qs.8:34 | Qs.22:32 | Qs.23:57 | Qs.23:61 | Qs.49:3 | Qs.53:32"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Menyeru pada ketakwaan",
					"ayat" => "Qs.2:41 | Qs.2:48 | Qs.2:194 | Qs.2:196 | Qs.2:197 | Qs.2:203 | Qs.2:223 | Qs.2:231 | Qs.2:233 | Qs.2:241 | Qs.2:278 | Qs.2:281 | Qs.2:282 | Qs.2:283 | Qs.3:50 | Qs.3:102 | Qs.3:123 | Qs.3:125 | Qs.3:130 | Qs.3:200 | Qs.4:1 | Qs.4:9 | Qs.4:128 | Qs.4:129 | Qs.4:131 | Qs.5:2 | Qs.5:4 | Qs.5:7 | Qs.5:8 | Qs.5:11 | Qs.5:35 | Qs.5:57 | Qs.5:88 | Qs.5:93 | Qs.5:96 | Qs.5:100 | Qs.5:108 | Qs.5:112 | Qs.6:51 | Qs.6:69 | Qs.6:72 | Qs.6:153 | Qs.6:155 | Qs.7:128 | Qs.8:1 | Qs.8:69 | Qs.9:119 | Qs.22:1 | Qs.30:31 | Qs.33:55 | Qs.33:70 | Qs.36:45 | Qs.37:124 | Qs.39:10 | Qs.39:16 | Qs.49:1 | Qs.49:12 | Qs.57:28 | Qs.58:9 | Qs.59:7 | Qs.59:18 | Qs.60:11 | Qs.64:16 | Qs.65:1 | Qs.65:10 | Qs.71:3"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Jalan takwa",
					"ayat" => "Qs.2:21 | Qs.2:63 | Qs.2:177 | Qs.2:179 | Qs.2:183 | Qs.2:187 | Qs.7:171"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Pahala takwa",
					"ayat" => "Qs.2:212 | Qs.3:15 | Qs.3:120 | Qs.3:133 | Qs.3:172 | Qs.3:179 | Qs.3:198 | Qs.4:77 | Qs.5:65 | Qs.5:100 | Qs.6:32 | Qs.8:29 | Qs.9:4 | Qs.9:7 | Qs.9:36 | Qs.9:109 | Qs.9:123 | Qs.10:62 | Qs.10:63 | Qs.12:57 | Qs.12:109 | Qs.15:45 | Qs.16:30 | Qs.19:63 | Qs.19:85 | Qs.24:52 | Qs.25:15 | Qs.27:53 | Qs.39:20 | Qs.39:73 | Qs.64:16 | Qs.65:2 | Qs.68:34 | Qs.77:41 | Qs.78:31"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Mengagungkan syi'ar Allah tanda ketakwaan hati",
					"ayat" => "Qs.5:2 | Qs.22:30 | Qs.22:32 | Qs.22:36 | Qs.22:37"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Tawadhu (rendah diri)",
					"ayat" => "Qs.7:199 | Qs.15:88 | Qs.17:37 | Qs.22:34 | Qs.25:63 | Qs.26:215 | Qs.31:18 | Qs.31:19"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Taubat"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Keutamaan taubat",
					"ayat" => "Qs.2:160 | Qs.2:222 | Qs.4:26 | Qs.4:27 | Qs.4:64 | Qs.5:34 | Qs.5:39 | Qs.7:153 | Qs.8:38 | Qs.9:3 | Qs.9:11 | Qs.9:74 | Qs.9:112 | Qs.11:3 | Qs.11:52 | Qs.11:90 | Qs.13:27 | Qs.17:25 | Qs.19:60 | Qs.20:82 | Qs.24:31 | Qs.25:70 | Qs.25:71 | Qs.28:67 | Qs.38:24 | Qs.38:25 | Qs.39:54 | Qs.40:7 | Qs.66:4 | Qs.66:8"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Perintah bertaubat",
					"ayat" => "Qs.5:74 | Qs.7:153 | Qs.7:161 | Qs.9:104 | Qs.11:52 | Qs.11:61 | Qs.24:31 | Qs.39:54 | Qs.66:4 | Qs.66:8 | Qs.110:3"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Waktu diterimanya taubat",
					"ayat" => "Qs.3:90 | Qs.4:17 | Qs.4:18 | Qs.6:158 | Qs.10:90 | Qs.10:91"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Cara bertaubat",
					"ayat" => "Qs.2:37 | Qs.2:54 | Qs.2:160 | Qs.3:135 | Qs.4:64 | Qs.4:92 | Qs.4:110 | Qs.4:146 | Qs.5:74 | Qs.6:54 | Qs.7:23 | Qs.11:3 | Qs.12:97 | Qs.16:119 | Qs.24:5 | Qs.25:70 | Qs.25:71 | Qs.66:8"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Tidak putus asa untuk mendapatkan ampunan",
					"ayat" => "Qs.3:135 | Qs.4:116 | Qs.4:146 | Qs.5:34 | Qs.5:39 | Qs.9:102 | Qs.9:118 | Qs.15:59 | Qs.16:119 | Qs.20:82 | Qs.25:70 | Qs.25:71 | Qs.27:11 | Qs.39:53 | Qs.71:10"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Penyesalan adalah taubat",
					"ayat" => "Qs.3:135 | Qs.28:15 | Qs.68:32"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Penyesalan yang tiada berarti",
					"ayat" => "Qs.5:31 | Qs.5:52 | Qs.6:27 | Qs.6:31 | Qs.7:5 | Qs.9:82 | Qs.10:51 | Qs.10:54 | Qs.18:42 | Qs.19:39 | Qs.21:14 | Qs.21:46 | Qs.21:97 | Qs.23:100 | Qs.23:106 | Qs.23:107 | Qs.25:27 | Qs.25:28 | Qs.26:100 | Qs.26:101 | Qs.26:102 | Qs.26:157 | Qs.28:47 | Qs.28:64 | Qs.33:66 | Qs.34:33 | Qs.37:20 | Qs.37:27 | Qs.37:28 | Qs.39:56 | Qs.39:57 | Qs.39:58 | Qs.40:52 | Qs.41:29 | Qs.43:38 | Qs.63:10 | Qs.66:7 | Qs.67:10 | Qs.68:31 | Qs.69:28 | Qs.69:50 | Qs.89:24"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Orang yang diterima dan yang tidak diterima taubatnya"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Taubat orang yang berzina",
					"ayat" => "Qs.4:16"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Taubat pencuri",
					"ayat" => "Qs.5:39"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Taubat pembunuh",
					"ayat" => "Qs.4:92"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Taubat orang yang menuduh zina",
					"ayat" => "Qs.24:5"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Taubat orang kafir",
					"ayat" => "Qs.3:89"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Taubat orang murtad",
					"ayat" => "Qs.3:89"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Taubat orang munafik",
					"ayat" => "Qs.4:146"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Tawakkal",
					"ayat" => "Qs.3:122 | Qs.3:159 | Qs.3:160 | Qs.3:173 | Qs.4:81 | Qs.5:11 | Qs.5:23 | Qs.7:89 | Qs.8:2 | Qs.8:49 | Qs.8:61 | Qs.9:51 | Qs.9:59 | Qs.9:129 | Qs.10:71 | Qs.10:84 | Qs.10:85 | Qs.11:56 | Qs.11:88 | Qs.11:123 | Qs.12:67 | Qs.13:30 | Qs.14:11 | Qs.14:12 | Qs.16:42 | Qs.16:99 | Qs.25:58 | Qs.26:217 | Qs.27:79 | Qs.29:59 | Qs.33:3 | Qs.33:48 | Qs.39:38 | Qs.42:10 | Qs.42:36 | Qs.58:10 | Qs.60:4 | Qs.64:13 | Qs.65:3 | Qs.67:29 | Qs.73:9"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berpendirian",
					"ayat" => "Qs.2:249 | Qs.2:250 | Qs.3:8 | Qs.3:144 | Qs.3:146 | Qs.3:147 | Qs.3:153 | Qs.4:104 | Qs.8:45 | Qs.26:50 | Qs.33:22 | Qs.47:35"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Cinta karena Allah"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Kewajiban mencintai Allah dan RasulNya",
					"ayat" => "Qs.2:165 | Qs.3:31 | Qs.9:24"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Tanda cinta karena Allah",
					"ayat" => "Qs.3:31 | Qs.5:54 | Qs.59:9"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Suka berbuat baik kepada orang bagian dari iman",
					"ayat" => "Qs.59:10"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Keutamaan bersaudara karena Allah"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Cinta Ilahi bagi orang yang bersaudara karena Allah",
					"ayat" => "Qs.8:63"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Hubungan timbal balik dengan saudara",
					"ayat" => "Qs.8:72 | Qs.8:74 | Qs.24:61 | Qs.49:10 | Qs.90:17 | Qs.103:3"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menjaga rahasia",
					"ayat" => "Qs.66:3"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Hikmah",
					"ayat" => "Qs.2:129 | Qs.2:151 | Qs.2:231 | Qs.2:251 | Qs.2:269 | Qs.3:48 | Qs.3:79 | Qs.3:81 | Qs.3:164 | Qs.4:54 | Qs.4:113 | Qs.5:110 | Qs.6:89 | Qs.12:22 | Qs.16:125 | Qs.17:1 | Qs.17:39 | Qs.21:74 | Qs.21:79 | Qs.26:21 | Qs.26:83 | Qs.28:14 | Qs.31:12 | Qs.33:34 | Qs.38:20 | Qs.43:63 | Qs.45:16 | Qs.54:5 | Qs.62:2"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Sabar",
					"ayat" => "Qs.3:134 | Qs.23:96"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Malu"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Malu bagian dari kebenaran",
					"ayat" => "Qs.33:53"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Takut kepada Allah",
					"ayat" => "Qs.2:40 | Qs.2:150 | Qs.2:197 | Qs.2:279 | Qs.2:283 | Qs.3:28 | Qs.3:30 | Qs.4:9 | Qs.4:77 | Qs.5:3 | Qs.5:28 | Qs.5:44 | Qs.5:94 | Qs.6:15 | Qs.7:56 | Qs.7:149 | Qs.7:205 | Qs.8:2 | Qs.8:48 | Qs.9:13 | Qs.9:18 | Qs.13:10 | Qs.13:12 | Qs.13:13 | Qs.13:21 | Qs.14:14 | Qs.16:50 | Qs.16:51 | Qs.17:57 | Qs.20:3 | Qs.21:49 | Qs.21:90 | Qs.22:35 | Qs.23:57 | Qs.23:60 | Qs.24:52 | Qs.27:10 | Qs.31:33 | Qs.32:16 | Qs.33:37 | Qs.33:39 | Qs.35:18 | Qs.36:11 | Qs.39:13 | Qs.39:16 | Qs.39:23 | Qs.49:10 | Qs.50:33 | Qs.52:26 | Qs.55:46 | Qs.59:13 | Qs.67:12 | Qs.70:27 | Qs.70:28 | Qs.71:13 | Qs.74:36 | Qs.76:10 | Qs.79:40 | Qs.87:10 | Qs.98:8"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berharap (raja')",
					"ayat" => "Qs.4:104 | Qs.5:84 | Qs.12:87 | Qs.13:12 | Qs.15:56 | Qs.17:57 | Qs.18:110 | Qs.39:9"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Kasih sayang (rahmat)"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Keutamaan dan perintah berkasih sayang",
					"ayat" => "Qs.17:24 | Qs.24:22 | Qs.90:17"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Rahmat Allah mendahului kemurkaanNya",
					"ayat" => "Qs.2:64 | Qs.3:89 | Qs.3:155 | Qs.4:29 | Qs.4:64 | Qs.4:66 | Qs.4:147 | Qs.6:133 | Qs.7:56 | Qs.14:10 | Qs.23:75 | Qs.23:109 | Qs.24:14 | Qs.24:20 | Qs.24:21 | Qs.27:11 | Qs.33:24 | Qs.36:43 | Qs.36:44 | Qs.40:7 | Qs.40:9"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Putus asa dari rahmat Allah",
					"ayat" => "Qs.12:87 | Qs.15:55 | Qs.15:56 | Qs.17:83 | Qs.30:36 | Qs.39:53"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Rahmat di antara orang-orang beriman",
					"ayat" => "Qs.7:199 | Qs.48:29"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Ridha",
					"ayat" => "Qs.9:51 | Qs.9:59 | Qs.88:9 | Qs.93:5 | Qs.98:8"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Lemah lembut",
					"ayat" => "Qs.7:199 | Qs.17:28 | Qs.25:63 | Qs.48:29"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Zuhud"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Tentang dunia"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Dunia penjara orang mukmin dan surga orang kafir",
					"ayat" => "Qs.2:214 | Qs.3:14 | Qs.7:51 | Qs.20:131 | Qs.28:61 | Qs.42:36"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Kerendahan dunia",
					"ayat" => "Qs.3:14 | Qs.3:157 | Qs.3:185 | Qs.3:197 | Qs.4:74 | Qs.4:77 | Qs.4:94 | Qs.6:32 | Qs.6:130 | Qs.7:51 | Qs.7:169 | Qs.7:176 | Qs.8:67 | Qs.10:58 | Qs.11:15 | Qs.11:95 | Qs.13:26 | Qs.16:96 | Qs.16:107 | Qs.16:117 | Qs.18:8 | Qs.18:45 | Qs.20:72 | Qs.22:47 | Qs.26:88 | Qs.26:205 | Qs.26:207 | Qs.28:60 | Qs.28:61 | Qs.29:64 | Qs.30:55 | Qs.40:39 | Qs.42:36 | Qs.43:32 | Qs.43:35 | Qs.46:35 | Qs.47:36 | Qs.57:20 | Qs.87:17 | Qs.93:4"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Singkatnya umur dunia",
					"ayat" => "Qs.7:24 | Qs.9:38 | Qs.10:24 | Qs.10:45 | Qs.11:68 | Qs.11:95 | Qs.17:52 | Qs.20:103 | Qs.20:104 | Qs.23:112 | Qs.23:113 | Qs.23:114 | Qs.28:61 | Qs.30:55 | Qs.40:39 | Qs.46:35 | Qs.77:46 | Qs.78:40 | Qs.79:46 | Qs.87:17"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Dunia merupakan tempat ujian",
					"ayat" => "Qs.2:155 | Qs.2:212 | Qs.2:214 | Qs.3:140 | Qs.3:141 | Qs.3:142 | Qs.3:152 | Qs.3:166 | Qs.3:179 | Qs.3:186 | Qs.5:48 | Qs.6:42 | Qs.6:53 | Qs.6:70 | Qs.6:130 | Qs.6:165 | Qs.7:51 | Qs.7:94 | Qs.7:129 | Qs.7:163 | Qs.7:168 | Qs.8:17 | Qs.8:28 | Qs.9:16 | Qs.9:126 | Qs.11:118 | Qs.16:112 | Qs.18:7 | Qs.20:72 | Qs.21:35 | Qs.23:30 | Qs.25:20 | Qs.27:40 | Qs.29:2 | Qs.29:3 | Qs.29:10 | Qs.30:41 | Qs.31:33 | Qs.32:21 | Qs.33:11 | Qs.33:28 | Qs.33:29 | Qs.33:72 | Qs.34:21 | Qs.35:37 | Qs.39:49 | Qs.46:20 | Qs.47:4 | Qs.47:31 | Qs.52:47 | Qs.67:2 | Qs.68:17 | Qs.72:17 | Qs.75:36 | Qs.76:2 | Qs.89:15 | Qs.89:16"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Cela dunia",
					"ayat" => "Qs.6:70 | Qs.6:130 | Qs.7:51 | Qs.7:169 | Qs.7:176 | Qs.8:67 | Qs.9:38 | Qs.10:23 | Qs.13:26 | Qs.14:3 | Qs.28:60 | Qs.28:61 | Qs.29:64 | Qs.42:36 | Qs.79:38 | Qs.87:17 | Qs.93:4"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Hakikat zuhud di dunia",
					"ayat" => "Qs.3:157 | Qs.4:74 | Qs.13:26"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Keutamaan zuhud dan pendek harapan",
					"ayat" => "Qs.3:157 | Qs.20:131 | Qs.28:80 | Qs.42:20"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Perhatian terhadap dunia",
					"ayat" => "Qs.2:96 | Qs.2:200 | Qs.2:204 | Qs.2:212 | Qs.3:14 | Qs.3:145 | Qs.3:152 | Qs.4:134 | Qs.7:51 | Qs.7:169 | Qs.7:176 | Qs.9:38 | Qs.9:55 | Qs.9:85 | Qs.10:7 | Qs.11:15 | Qs.13:26 | Qs.14:3 | Qs.16:107 | Qs.28:83 | Qs.29:64 | Qs.30:7 | Qs.31:33 | Qs.35:5 | Qs.42:20 | Qs.45:35 | Qs.46:20 | Qs.53:29 | Qs.56:45 | Qs.57:14 | Qs.62:11 | Qs.63:9 | Qs.64:15 | Qs.75:20 | Qs.76:27 | Qs.79:38 | Qs.87:16 | Qs.102:1 | Qs.102:2 | Qs.104:2 | Qs.104:3"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Ketenangan",
					"ayat" => "Qs.13:28 | Qs.39:23 | Qs.48:18 | Qs.48:26"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Lapang dada",
					"ayat" => "Qs.3:134 | Qs.7:199 | Qs.24:12 | Qs.37:84 | Qs.59:9 | Qs.59:10"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mengadu kepada Allah",
					"ayat" => "Qs.26:117"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Bersyukur"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Bersyukur atas nikmat Allah",
					"ayat" => "Qs.2:152 | Qs.2:172 | Qs.2:239 | Qs.3:43 | Qs.3:123 | Qs.3:144 | Qs.3:145 | Qs.5:6 | Qs.5:89 | Qs.7:58 | Qs.7:144 | Qs.7:189 | Qs.14:7 | Qs.16:121 | Qs.27:40 | Qs.28:17 | Qs.28:73 | Qs.29:17 | Qs.31:12 | Qs.34:13 | Qs.39:66"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Sabar"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Kesabaran Allah atas kejahatan orang kafir",
					"ayat" => "Qs.3:181 | Qs.4:50 | Qs.6:108 | Qs.16:54 | Qs.17:40 | Qs.17:42"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Para nabi adalah orang yang paling berat menerima ujian",
					"ayat" => "Qs.2:87 | Qs.2:91 | Qs.2:217 | Qs.3:21 | Qs.3:161 | Qs.3:183 | Qs.3:184 | Qs.4:113 | Qs.5:49 | Qs.5:70 | Qs.5:110 | Qs.6:10 | Qs.6:25 | Qs.6:34 | Qs.6:112 | Qs.7:60 | Qs.7:61 | Qs.7:66 | Qs.7:67 | Qs.7:77 | Qs.7:82 | Qs.7:88 | Qs.7:90 | Qs.7:109 | Qs.7:127 | Qs.7:131 | Qs.8:30 | Qs.9:40 | Qs.9:61 | Qs.10:65 | Qs.10:71 | Qs.10:76 | Qs.10:78 | Qs.11:12 | Qs.11:27 | Qs.11:32 | Qs.11:53 | Qs.11:54 | Qs.11:55 | Qs.11:62 | Qs.17:47 | Qs.17:103 | Qs.18:106 | Qs.19:46 | Qs.20:40 | Qs.20:63 | Qs.21:3 | Qs.21:5 | Qs.21:36 | Qs.21:41 | Qs.21:68 | Qs.21:74 | Qs.21:76 | Qs.21:87 | Qs.22:42 | Qs.22:43 | Qs.22:44 | Qs.23:33 | Qs.23:38 | Qs.23:70 | Qs.25:4 | Qs.25:5 | Qs.25:7 | Qs.25:8 | Qs.25:9 | Qs.25:20 | Qs.25:31 | Qs.25:41 | Qs.26:14 | Qs.26:27 | Qs.26:29 | Qs.26:34 | Qs.26:35 | Qs.26:111 | Qs.26:112 | Qs.26:116 | Qs.26:117 | Qs.26:123 | Qs.26:141 | Qs.26:153 | Qs.26:154 | Qs.26:160 | Qs.26:167 | Qs.26:169 | Qs.26:176 | Qs.26:185 | Qs.26:186 | Qs.26:187 | Qs.27:13 | Qs.27:47 | Qs.27:49 | Qs.27:56 | Qs.27:70 | Qs.28:24 | Qs.28:36 | Qs.28:48 | Qs.29:24 | Qs.29:29 | Qs.34:43 | Qs.34:45 | Qs.35:4 | Qs.35:25 | Qs.36:14 | Qs.36:15 | Qs.36:18 | Qs.36:30 | Qs.36:69 | Qs.37:36 | Qs.37:97 | Qs.37:106 | Qs.38:4 | Qs.38:6 | Qs.38:7 | Qs.38:14 | Qs.38:41 | Qs.40:5 | Qs.40:24 | Qs.40:25 | Qs.40:26 | Qs.40:28 | Qs.40:37 | Qs.43:7 | Qs.43:30 | Qs.43:52 | Qs.43:53 | Qs.44:14 | Qs.46:8 | Qs.46:22 | Qs.50:12 | Qs.50:13 | Qs.50:14 | Qs.51:39 | Qs.51:52 | Qs.52:30 | Qs.52:33 | Qs.54:9 | Qs.54:18 | Qs.54:23 | Qs.54:24 | Qs.54:25 | Qs.54:33 | Qs.60:1 | Qs.61:5 | Qs.66:10 | Qs.68:2 | Qs.68:51 | Qs.69:41 | Qs.69:42 | Qs.72:19 | Qs.81:22 | Qs.96:10 | Qs.108:3 | Qs.111:4"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Perintah bersabar",
					"ayat" => "Qs.2:45 | Qs.2:153 | Qs.3:120 | Qs.3:146 | Qs.3:186 | Qs.3:200 | Qs.7:128 | Qs.8:46 | Qs.10:109 | Qs.11:49 | Qs.11:115 | Qs.16:127 | Qs.18:28 | Qs.19:65 | Qs.20:132 | Qs.25:20 | Qs.30:60 | Qs.31:17 | Qs.38:17 | Qs.40:55 | Qs.40:77 | Qs.46:35 | Qs.50:39 | Qs.52:48 | Qs.54:27 | Qs.68:48 | Qs.68:49 | Qs.70:5 | Qs.73:10 | Qs.74:7 | Qs.90:17"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Ganjaran sabar",
					"ayat" => "Qs.2:153 | Qs.2:155 | Qs.2:157 | Qs.2:177 | Qs.2:249 | Qs.3:142 | Qs.3:200 | Qs.7:137 | Qs.8:46 | Qs.8:66 | Qs.11:11 | Qs.11:115 | Qs.12:90 | Qs.13:24 | Qs.16:96 | Qs.16:110 | Qs.16:126 | Qs.22:35 | Qs.23:111 | Qs.25:75 | Qs.28:54 | Qs.28:80 | Qs.29:59 | Qs.32:24 | Qs.33:35 | Qs.38:44 | Qs.39:10 | Qs.41:35 | Qs.42:43 | Qs.49:5 | Qs.76:12 | Qs.90:18 | Qs.103:3"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Kapan kita harus bersabar"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Sabar menghadapi penyakit",
					"ayat" => "Qs.2:214"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Sabar dalam menghadapi sesuatu yang kita benci",
					"ayat" => "Qs.2:155 | Qs.2:156 | Qs.2:157 | Qs.2:177 | Qs.2:214 | Qs.2:217 | Qs.3:186 | Qs.7:125 | Qs.7:126 | Qs.16:42 | Qs.18:69 | Qs.28:24 | Qs.37:102 | Qs.94:5 | Qs.94:6"),
				array(
					"id_master" => 12,
					"level" => 5,
					"index" => "Sabar saat berperang",
					"ayat" => "Qs.2:177 | Qs.2:250 | Qs.3:125 | Qs.3:142 | Qs.3:146 | Qs.3:153 | Qs.3:200 | Qs.8:15 | Qs.8:16 | Qs.8:45 | Qs.8:46 | Qs.8:65 | Qs.8:66 | Qs.33:22"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Jujur"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Keutamaan berhati-hati dalam berbuat jujur",
					"ayat" => "Qs.2:177 | Qs.3:17 | Qs.5:119 | Qs.9:119 | Qs.33:8 | Qs.33:23 | Qs.33:24 | Qs.33:35 | Qs.39:33 | Qs.47:21 | Qs.49:15"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mematuhi pemimpin"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Kewajiban mematuhi pemimpin",
					"ayat" => "Qs.4:59 | Qs.24:48 | Qs.24:51"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Mendengar dan patuh pada selain maksiat",
					"ayat" => "Qs.4:59 | Qs.26:151 | Qs.26:152 | Qs.29:8 | Qs.31:15 | Qs.34:31 | Qs.34:32 | Qs.34:33 | Qs.60:12"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Mengikuti pemimpin dalam jihad",
					"ayat" => "Qs.3:146 | Qs.3:152 | Qs.3:153 | Qs.3:172 | Qs.4:59"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Adil",
					"ayat" => "Qs.3:18 | Qs.4:3 | Qs.4:58 | Qs.5:8 | Qs.5:42 | Qs.6:152 | Qs.7:29 | Qs.16:76 | Qs.16:90 | Qs.16:118 | Qs.49:9 | Qs.57:25"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menjaga kehormatan diri",
					"ayat" => "Qs.2:273 | Qs.4:6 | Qs.4:25 | Qs.5:5 | Qs.23:5 | Qs.24:30 | Qs.24:31 | Qs.24:33 | Qs.24:60 | Qs.33:35 | Qs.66:12 | Qs.70:29 | Qs.70:30"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Memaafkan orang yang bersalah",
					"ayat" => "Qs.2:109 | Qs.3:134 | Qs.4:31 | Qs.4:149 | Qs.5:13 | Qs.7:199 | Qs.15:85 | Qs.23:96 | Qs.24:22 | Qs.41:34 | Qs.42:37 | Qs.42:40 | Qs.42:43 | Qs.43:89 | Qs.45:14 | Qs.64:14"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Kepuasan",
					"ayat" => "Qs.9:59 | Qs.20:131"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Memuliakan, menerima dan menyaji tamu",
					"ayat" => "Qs.11:69 | Qs.18:77 | Qs.28:25 | Qs.51:26 | Qs.51:27"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Bersandar kepada Allah",
					"ayat" => "Qs.2:250 | Qs.3:122 | Qs.4:45 | Qs.5:23 | Qs.6:17 | Qs.6:40 | Qs.6:41 | Qs.6:43 | Qs.7:55 | Qs.7:125 | Qs.7:149 | Qs.7:155 | Qs.7:156 | Qs.7:200 | Qs.8:49 | Qs.9:51 | Qs.9:59 | Qs.9:118 | Qs.9:129 | Qs.10:22 | Qs.11:56 | Qs.11:80 | Qs.11:123 | Qs.12:67 | Qs.12:86 | Qs.13:30 | Qs.16:53 | Qs.18:27 | Qs.19:48 | Qs.21:112 | Qs.23:26 | Qs.23:29 | Qs.25:30 | Qs.25:65 | Qs.26:12 | Qs.26:62 | Qs.26:117 | Qs.27:62 | Qs.28:21 | Qs.28:22 | Qs.28:24 | Qs.28:33 | Qs.29:30 | Qs.30:33 | Qs.33:3 | Qs.39:8 | Qs.40:56 | Qs.40:84 | Qs.44:20 | Qs.51:50 | Qs.54:10 | Qs.55:29 | Qs.58:1 | Qs.58:10 | Qs.60:4 | Qs.64:13 | Qs.67:29 | Qs.71:25 | Qs.72:22 | Qs.75:10 | Qs.75:11 | Qs.113:1"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Pujian"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Pujian Allah terhadap diriNya",
					"ayat" => "Qs.6:1 | Qs.7:54 | Qs.7:190 | Qs.8:40 | Qs.13:9 | Qs.13:12 | Qs.25:1 | Qs.25:61 | Qs.28:68 | Qs.28:70 | Qs.30:18 | Qs.31:11 | Qs.31:30 | Qs.32:7 | Qs.35:14 | Qs.67:1"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Pujian manusia terhadap dirinya",
					"ayat" => "Qs.4:49 | Qs.53:32"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Siaga",
					"ayat" => "Qs.2:177 | Qs.3:200"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Waspada",
					"ayat" => "Qs.2:284 | Qs.3:29 | Qs.13:10"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Cinta",
					"ayat" => "Qs.7:199 | Qs.30:21 | Qs.48:29"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Nasihat",
					"ayat" => "Qs.4:63 | Qs.5:79 | Qs.7:159 | Qs.11:34 | Qs.24:17 | Qs.28:20 | Qs.28:76 | Qs.36:20 | Qs.90:17 | Qs.103:3"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Keyakinan",
					"ayat" => "Qs.2:249 | Qs.26:24 | Qs.26:50 | Qs.26:62 | Qs.27:3 | Qs.33:22 | Qs.37:102"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Akhlak-akhlak buruk"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menuruti hawa nafsu",
					"ayat" => "Qs.2:120 | Qs.2:145 | Qs.4:135 | Qs.5:48 | Qs.5:49 | Qs.5:77 | Qs.6:56 | Qs.6:119 | Qs.6:150 | Qs.7:176 | Qs.18:28 | Qs.19:59 | Qs.20:16 | Qs.22:71 | Qs.25:43 | Qs.28:50 | Qs.30:29 | Qs.38:26 | Qs.42:15 | Qs.45:18 | Qs.45:23 | Qs.47:14 | Qs.47:16 | Qs.53:23 | Qs.54:3"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mengikuti prasangka",
					"ayat" => "Qs.3:154 | Qs.4:157 | Qs.6:116 | Qs.6:148 | Qs.10:36 | Qs.10:66 | Qs.53:23 | Qs.53:28"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berbaur dengan orang-orang bodoh",
					"ayat" => "Qs.4:140 | Qs.6:68 | Qs.7:199"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Orang yang paling jelek di sisi Allah",
					"ayat" => "Qs.8:22 | Qs.8:55"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Beretika buruk terhadap Allah",
					"ayat" => "Qs.2:26 | Qs.2:55 | Qs.2:68 | Qs.2:69 | Qs.2:70 | Qs.2:118 | Qs.5:24 | Qs.8:31 | Qs.25:21 | Qs.25:26"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Sombong dan berbangga-bangga"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Celaan berbangga-bangga",
					"ayat" => "Qs.4:36 | Qs.11:10 | Qs.17:37 | Qs.28:83 | Qs.31:18 | Qs.57:20 | Qs.57:23"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Celaan kesombongan",
					"ayat" => "Qs.4:36 | Qs.17:37 | Qs.28:83 | Qs.31:18 | Qs.40:75 | Qs.57:23"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Balasan orang yang sombong",
					"ayat" => "Qs.9:25 | Qs.28:81 | Qs.31:18 | Qs.75:34 | Qs.75:35"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Bangga dengan banyak anak",
					"ayat" => "Qs.18:34 | Qs.57:20 | Qs.102:1"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Bangga dengan banyak harta",
					"ayat" => "Qs.18:34 | Qs.57:20 | Qs.102:1"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Takabbur",
					"ayat" => "Qs.2:34 | Qs.2:206 | Qs.2:247 | Qs.4:36 | Qs.4:172 | Qs.4:173 | Qs.6:93 | Qs.6:157 | Qs.7:36 | Qs.7:40 | Qs.7:48 | Qs.7:75 | Qs.7:76 | Qs.7:133 | Qs.7:146 | Qs.7:206 | Qs.10:75 | Qs.15:31 | Qs.15:33 | Qs.16:23 | Qs.16:29 | Qs.17:37 | Qs.22:9 | Qs.23:46 | Qs.23:67 | Qs.25:21 | Qs.25:60 | Qs.26:5 | Qs.27:14 | Qs.28:39 | Qs.29:39 | Qs.31:7 | Qs.31:18 | Qs.32:15 | Qs.34:31 | Qs.34:43 | Qs.35:43 | Qs.37:13 | Qs.37:35 | Qs.38:74 | Qs.38:75 | Qs.39:59 | Qs.39:60 | Qs.39:72 | Qs.40:35 | Qs.40:60 | Qs.40:76 | Qs.41:15 | Qs.45:8 | Qs.45:31 | Qs.46:10 | Qs.46:20 | Qs.54:2 | Qs.57:23 | Qs.63:5 | Qs.71:7 | Qs.74:23 | Qs.74:49"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menipu",
					"ayat" => "Qs.4:120 | Qs.17:64 | Qs.18:34 | Qs.26:44 | Qs.67:20 | Qs.74:6"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berlebih-lebihan",
					"ayat" => "Qs.3:147 | Qs.4:6 | Qs.6:141 | Qs.7:31 | Qs.7:81 | Qs.10:83 | Qs.17:26 | Qs.17:27 | Qs.17:29 | Qs.25:67"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menyebarkan Kejelekan",
					"ayat" => "Qs.4:27 | Qs.24:11 | Qs.24:15 | Qs.24:19"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Permusuhan",
					"ayat" => "Qs.2:178 | Qs.2:190 | Qs.2:194 | Qs.2:231 | Qs.5:2 | Qs.5:87 | Qs.6:119 | Qs.7:55 | Qs.9:10 | Qs.26:166 | Qs.48:25 | Qs.68:12"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Makan riba",
					"ayat" => "Qs.2:275 | Qs.2:279 | Qs.3:130 | Qs.4:161 | Qs.30:39"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Istinkaf (sombong)",
					"ayat" => "Qs.4:172 | Qs.4:173"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Membuat kerusakan",
					"ayat" => "Qs.2:11 | Qs.2:27 | Qs.2:60 | Qs.2:205 | Qs.2:251 | Qs.3:63 | Qs.4:27 | Qs.5:32 | Qs.5:33 | Qs.5:64 | Qs.7:56 | Qs.7:74 | Qs.7:85 | Qs.7:86 | Qs.7:103 | Qs.8:73 | Qs.9:107 | Qs.11:85 | Qs.12:73 | Qs.13:25 | Qs.16:88 | Qs.17:16 | Qs.18:94 | Qs.26:130 | Qs.26:152 | Qs.26:183 | Qs.27:14 | Qs.27:34 | Qs.27:48 | Qs.28:4 | Qs.28:19 | Qs.28:77 | Qs.28:83 | Qs.29:30 | Qs.29:36 | Qs.30:41 | Qs.38:28 | Qs.47:22 | Qs.89:12"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Kikir dan bakhil",
					"ayat" => "Qs.2:268 | Qs.3:180 | Qs.4:37 | Qs.9:67 | Qs.9:76 | Qs.17:29 | Qs.17:100 | Qs.25:67 | Qs.36:47 | Qs.47:37 | Qs.47:38 | Qs.53:34 | Qs.57:24 | Qs.59:9 | Qs.64:16 | Qs.68:24 | Qs.70:21 | Qs.89:17 | Qs.89:18 | Qs.92:8 | Qs.107:3 | Qs.107:7"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mengungkit-ungkit kebaikan dan menyakiti orang lain",
					"ayat" => "Qs.2:262 | Qs.2:264 | Qs.74:6"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Bathr (Tidak menerima kebenaran,tidak mensyukuri nikmat)",
					"ayat" => "Qs.8:47 | Qs.11:10 | Qs.28:58"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Benci",
					"ayat" => "Qs.5:91 | Qs.102:3"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Zalim dan melampaui batas",
					"ayat" => "Qs.16:90 | Qs.42:42 | Qs.49:9"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Buhtan (bohong, pura-pura)",
					"ayat" => "Qs.4:20 | Qs.4:112 | Qs.4:156 | Qs.24:16 | Qs.33:58 | Qs.60:12"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Tabzir (foya-foya)",
					"ayat" => "Qs.6:141 | Qs.7:31 | Qs.17:26 | Qs.17:27"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Memata-matai",
					"ayat" => "Qs.49:12"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berangan-angan",
					"ayat" => "Qs.4:32 | Qs.15:88 | Qs.28:79 | Qs.53:24"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Memanggil dengan nama (julukan) yang jelek",
					"ayat" => "Qs.49:11"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Pasrah (tanpa usaha)",
					"ayat" => "Qs.5:24"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Pengecut",
					"ayat" => "Qs.2:246 | Qs.4:77 | Qs.5:22 | Qs.5:24 | Qs.8:15 | Qs.33:13 | Qs.33:19 | Qs.47:20"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Dengki"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Ain (dengki) suatu realita",
					"ayat" => "Qs.113:5"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Menjauhi dengki dan kezaliman",
					"ayat" => "Qs.4:32"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Mengucapkan Masyaa' Allah Laa Quwata Illa Billah",
					"ayat" => "Qs.18:39"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Kotoran atau kejahatan",
					"ayat" => "Qs.3:179 | Qs.5:100 | Qs.6:136 | Qs.7:58 | Qs.24:26"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berkhianat",
					"ayat" => "Qs.3:75 | Qs.4:107 | Qs.5:13 | Qs.8:27 | Qs.8:58 | Qs.8:71 | Qs.12:52 | Qs.22:38 | Qs.66:10"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Bermuka dua",
					"ayat" => "Qs.2:14 | Qs.2:76 | Qs.3:119 | Qs.4:81 | Qs.9:8"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Riya",
					"ayat" => "Qs.2:264 | Qs.4:38 | Qs.4:142 | Qs.8:47 | Qs.107:6"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mencaci"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Larangan mengutuk dan mencaci",
					"ayat" => "Qs.4:148 | Qs.49:11"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Mengutuk orang kafir dan mencacinya",
					"ayat" => "Qs.2:88 | Qs.2:89 | Qs.2:159 | Qs.2:161 | Qs.3:87 | Qs.4:46 | Qs.4:47 | Qs.4:52 | Qs.5:13 | Qs.5:60 | Qs.5:64 | Qs.5:78 | Qs.7:44 | Qs.9:30 | Qs.9:68 | Qs.11:18 | Qs.11:60 | Qs.11:68 | Qs.11:95 | Qs.11:99 | Qs.13:25 | Qs.33:57 | Qs.33:64 | Qs.33:68 | Qs.48:6 | Qs.51:10 | Qs.63:4 | Qs.74:19 | Qs.74:20 | Qs.80:17"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mengejek, mengolok-olok",
					"ayat" => "Qs.2:14 | Qs.2:15 | Qs.2:67 | Qs.2:202 | Qs.4:140 | Qs.5:57 | Qs.5:58 | Qs.6:5 | Qs.6:10 | Qs.9:64 | Qs.9:65 | Qs.9:79 | Qs.11:8 | Qs.11:38 | Qs.15:11 | Qs.15:95 | Qs.16:34 | Qs.18:56 | Qs.18:106 | Qs.21:36 | Qs.21:41 | Qs.23:110 | Qs.25:41 | Qs.26:6 | Qs.26:25 | Qs.27:56 | Qs.31:6 | Qs.36:30 | Qs.37:12 | Qs.37:14 | Qs.39:48 | Qs.39:56 | Qs.40:83 | Qs.43:7 | Qs.43:32 | Qs.45:9 | Qs.45:33 | Qs.45:35 | Qs.49:11"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Buruk sangka",
					"ayat" => "Qs.3:154 | Qs.6:116 | Qs.10:36 | Qs.10:60 | Qs.10:66 | Qs.38:27 | Qs.41:50 | Qs.45:32 | Qs.48:6 | Qs.48:12 | Qs.49:12 | Qs.53:23"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Ragu-ragu",
					"ayat" => "Qs.2:10 | Qs.9:45 | Qs.9:110 | Qs.22:11 | Qs.50:25"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menghalang-halangi kebenaran",
					"ayat" => "Qs.2:217 | Qs.3:70 | Qs.3:71 | Qs.3:72 | Qs.3:99 | Qs.4:61 | Qs.4:160 | Qs.4:167 | Qs.5:43 | Qs.5:75 | Qs.7:45 | Qs.7:86 | Qs.8:34 | Qs.8:36 | Qs.8:47 | Qs.9:9 | Qs.9:34 | Qs.11:19 | Qs.14:3 | Qs.14:30 | Qs.16:88 | Qs.16:94 | Qs.17:73 | Qs.22:25 | Qs.31:6 | Qs.47:1 | Qs.47:32 | Qs.47:34 | Qs.58:16 | Qs.63:2"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Kezaliman"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Balasan kezaliman",
					"ayat" => "Qs.2:59 | Qs.2:114 | Qs.2:124 | Qs.3:117 | Qs.4:20 | Qs.4:30 | Qs.4:153 | Qs.4:168 | Qs.5:29 | Qs.5:31 | Qs.6:21 | Qs.6:129 | Qs.6:135 | Qs.6:144 | Qs.7:5 | Qs.7:9 | Qs.7:41 | Qs.7:44 | Qs.7:47 | Qs.7:162 | Qs.7:165 | Qs.7:166 | Qs.8:54 | Qs.11:18 | Qs.11:113 | Qs.20:111 | Qs.25:27 | Qs.25:37 | Qs.28:37 | Qs.28:59 | Qs.29:40 | Qs.42:42 | Qs.53:52"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Kemenangan atas orang zalim",
					"ayat" => "Qs.4:148 | Qs.42:39 | Qs.42:41"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Maafnya orang yang teraniaya",
					"ayat" => "Qs.4:149 | Qs.23:96 | Qs.42:40"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Kezaliman adalah kegelapan pada hari kiamat",
					"ayat" => "Qs.20:111 | Qs.42:42"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Balasan terhadap kezaliman",
					"ayat" => "Qs.42:41"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Ghadar (khianat)",
					"ayat" => "Qs.2:27 | Qs.8:56 | Qs.8:58 | Qs.8:71"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Curang",
					"ayat" => "Qs.6:152 | Qs.83:1 | Qs.83:2 | Qs.83:3"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Marah"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Marah karena Allah",
					"ayat" => "Qs.7:71 | Qs.7:150 | Qs.7:154 | Qs.20:86 | Qs.21:87"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mengumpat, membicarakan orang lain"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Menjauhkan diri dari mengumpat",
					"ayat" => "Qs.49:12 | Qs.68:11"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Balasan orang-orang yang mengumpat",
					"ayat" => "Qs.49:12"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Mengumpat orang yang zalim",
					"ayat" => "Qs.4:148"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Membunuh",
					"ayat" => "Qs.4:29 | Qs.4:30 | Qs.4:92 | Qs.4:93 | Qs.5:29 | Qs.5:30 | Qs.5:32 | Qs.6:137 | Qs.6:140 | Qs.6:151 | Qs.17:33 | Qs.25:68 | Qs.28:15 | Qs.60:12"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menuduh berbuat zina",
					"ayat" => "Qs.24:4 | Qs.24:11 | Qs.24:23 | Qs.33:58"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Dusta"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Dusta itu tercela",
					"ayat" => "Qs.4:50 | Qs.5:41 | Qs.6:93 | Qs.7:37 | Qs.16:105 | Qs.29:68"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Balasan dusta",
					"ayat" => "Qs.4:50 | Qs.6:93 | Qs.6:150 | Qs.7:36 | Qs.7:37 | Qs.7:38 | Qs.9:77 | Qs.16:62 | Qs.29:68"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Perintah menjauhi prasangka buruk",
					"ayat" => "Qs.49:6 | Qs.49:12"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Kufur nikmat",
					"ayat" => "Qs.6:64 | Qs.10:12 | Qs.22:38 | Qs.22:66 | Qs.27:40 | Qs.29:65 | Qs.29:66 | Qs.29:67 | Qs.30:33 | Qs.31:12 | Qs.31:32 | Qs.39:8 | Qs.39:49 | Qs.41:51 | Qs.42:48 | Qs.80:17"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Pembicaraan yang tidak berarti",
					"ayat" => "Qs.23:3 | Qs.31:6 | Qs.88:11"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Homosexual",
					"ayat" => "Qs.7:80 | Qs.7:81 | Qs.11:78 | Qs.26:165 | Qs.27:55 | Qs.29:29"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Makar (khianat)",
					"ayat" => "Qs.3:54 | Qs.6:123 | Qs.6:124 | Qs.7:99 | Qs.7:123 | Qs.8:30 | Qs.10:21 | Qs.12:16 | Qs.12:31 | Qs.12:102 | Qs.13:33 | Qs.13:42 | Qs.14:46 | Qs.16:26 | Qs.16:45 | Qs.27:50 | Qs.27:51 | Qs.34:33 | Qs.35:10 | Qs.35:43 | Qs.40:45 | Qs.71:22 | Qs.86:15"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Bisik-bisik yang tercela",
					"ayat" => "Qs.4:114 | Qs.21:3 | Qs.58:7 | Qs.58:8 | Qs.58:9 | Qs.58:10"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Melanggar janji",
					"ayat" => "Qs.2:27 | Qs.3:77 | Qs.3:82 | Qs.4:21 | Qs.4:155 | Qs.5:13 | Qs.7:102 | Qs.7:135 | Qs.7:169 | Qs.8:56 | Qs.9:12 | Qs.9:13 | Qs.9:77 | Qs.13:25 | Qs.16:91 | Qs.16:92 | Qs.16:94 | Qs.16:95 | Qs.43:50 | Qs.48:10"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Mengadu domba",
					"ayat" => "Qs.9:47 | Qs.68:11"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Hamz dan lamz (berbisik, mencibir sambil menghina)",
					"ayat" => "Qs.9:58 | Qs.9:79 | Qs.49:11 | Qs.68:11 | Qs.83:30 | Qs.104:1"),
				array(
					"id_master" => 12,
					"level" => 1,
					"index" => "Etika dan hak-hak umum"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Etika berbicara"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berbicaralah yang baik atau diam",
					"ayat" => "Qs.17:53"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Keutamaan perkataan baik",
					"ayat" => "Qs.22:24 | Qs.35:10"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Perkataan baik dan perkataan buruk",
					"ayat" => "Qs.14:24 | Qs.14:25 | Qs.14:26 | Qs.24:26 | Qs.28:55 | Qs.39:18"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berkata benar",
					"ayat" => "Qs.33:32 | Qs.33:70"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Sebaik-baik perkataan",
					"ayat" => "Qs.39:18"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Larangan berbuat keji",
					"ayat" => "Qs.4:148 | Qs.6:151 | Qs.7:33 | Qs.16:90 | Qs.23:3 | Qs.24:15 | Qs.24:16 | Qs.24:19 | Qs.24:21 | Qs.25:72 | Qs.26:165 | Qs.27:54 | Qs.27:55 | Qs.29:28"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Merendahkan suara saat berbicara",
					"ayat" => "Qs.31:19 | Qs.49:3"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menundukkan kepala bagi wanita saat berbicara",
					"ayat" => "Qs.33:32"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Gubahan syair"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Syair yang dibolehkan",
					"ayat" => "Qs.26:227"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Syair yang dilarang",
					"ayat" => "Qs.26:224 | Qs.26:225 | Qs.26:226"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Etika berkumpul"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Yang didapat dari perkumpulan baik dan perkumpulan jelek",
					"ayat" => "Qs.4:140 | Qs.6:68 | Qs.23:67"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Memilih kawan berkumpul",
					"ayat" => "Qs.4:144 | Qs.6:52 | Qs.6:68 | Qs.74:45"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menghormati dan meluaskan tempat kepada orang saat berkumpul",
					"ayat" => "Qs.58:11"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Berbisik-bisik dalam tempat perkumpulan",
					"ayat" => "Qs.58:8 | Qs.58:9"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Etika keluar dari tempat perkumpulan",
					"ayat" => "Qs.24:62"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Etika berjalan"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Angkuh ketika berjalan",
					"ayat" => "Qs.4:36 | Qs.17:37 | Qs.31:18"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Rendah diri ketika berjalan",
					"ayat" => "Qs.25:63 | Qs.31:19"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Memberi salam"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Cara memberi salam"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Lafaz salam dan penghormatan",
					"ayat" => "Qs.15:52 | Qs.16:32 | Qs.19:15 | Qs.51:25"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Ucapan salam ahli kitab",
					"ayat" => "Qs.58:8"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Ucapan salam malaikat",
					"ayat" => "Qs.13:24 | Qs.15:46 | Qs.15:52 | Qs.16:32 | Qs.25:75 | Qs.51:25"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menjawab salam"),
				array(
					"id_master" => 12,
					"level" => 4,
					"index" => "Cara menjawab salam",
					"ayat" => "Qs.4:86 | Qs.51:25"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Meminta izin"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Etika meminta izin",
					"ayat" => "Qs.24:27 | Qs.24:28 | Qs.24:58 | Qs.24:59 | Qs.33:53"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Lafaz dan cara meminta izin",
					"ayat" => "Qs.24:61"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Meminta izin untuk menghindari pandangan (yang dilarang)",
					"ayat" => "Qs.24:58"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Meminta izin di hotel dan tempat-tempat umum",
					"ayat" => "Qs.24:29"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Meminta izin ketika akan keluar",
					"ayat" => "Qs.24:62"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Hak tamu"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menghormati dan melayani tamu",
					"ayat" => "Qs.18:77 | Qs.51:26 | Qs.51:27"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Membuat makanan dan berkerja keras untuk melayani tamu",
					"ayat" => "Qs.11:69 | Qs.24:61 | Qs.33:53 | Qs.51:26 | Qs.51:27"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Hak jalanan"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menundukkan pandangan",
					"ayat" => "Qs.24:30 | Qs.24:31"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Hak tetangga"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Menghormati tetangga",
					"ayat" => "Qs.4:36"),
				array(
					"id_master" => 12,
					"level" => 3,
					"index" => "Hak-hak tetangga terdekat",
					"ayat" => "Qs.4:36 | Qs.107:7"),
				array(
					"id_master" => 12,
					"level" => 2,
					"index" => "Memperlakukan binatang"),
				array(
					"id_master" => 13,
					"level" => 1,
					"index" => "Anak-anak"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Mengandung"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Pembentukan janin",
					"ayat" => "Qs.3:6 | Qs.7:189 | Qs.22:5 | Qs.23:12 | Qs.23:13 | Qs.23:14 | Qs.32:8 | Qs.32:9 | Qs.35:11 | Qs.36:77 | Qs.39:6 | Qs.53:46 | Qs.70:39 | Qs.71:14 | Qs.75:37 | Qs.75:38 | Qs.76:2 | Qs.77:20 | Qs.77:21"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Waktu yang paling singkat untuk mengandung",
					"ayat" => "Qs.31:14 | Qs.46:15"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Kelahiran"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Memohon anak",
					"ayat" => "Qs.3:38 | Qs.18:46 | Qs.19:3 | Qs.19:4 | Qs.19:5 | Qs.19:6 | Qs.37:100"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Pemberian nama",
					"ayat" => "Qs.3:36"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Membunuh anak",
					"ayat" => "Qs.6:137 | Qs.6:140 | Qs.6:151 | Qs.16:58 | Qs.16:59 | Qs.25:68 | Qs.60:12 | Qs.81:8 | Qs.81:9"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Anak mengikuti agama ayahnya",
					"ayat" => "Qs.71:27"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Nasab (keturunan)"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Mengikuti nasab ayah",
					"ayat" => "Qs.33:5"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Menasabkan anak kepada selain ayahnya",
					"ayat" => "Qs.33:4 | Qs.33:5"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Anak angkat",
					"ayat" => "Qs.33:4 | Qs.33:5 | Qs.33:37"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Memasukkan anak orang lain kepada suami",
					"ayat" => "Qs.60:12"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Menetapkan keibuan",
					"ayat" => "Qs.58:2"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Penyusuan"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Waktu menyusui yang menyebabkan muhrim",
					"ayat" => "Qs.2:233 | Qs.46:15"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Mengambil upah dengan cara menyusui",
					"ayat" => "Qs.2:233 | Qs.65:6"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Merawat anak"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Orang yang berhak merawat anak",
					"ayat" => "Qs.3:37 | Qs.3:44"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Kasih sayang ibu",
					"ayat" => "Qs.28:10 | Qs.28:13"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Ibu lebih berhak merawat anak",
					"ayat" => "Qs.2:233"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Nafkah untuk keluarga"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Perintah memberi nafkah keluarga",
					"ayat" => "Qs.2:177 | Qs.2:215 | Qs.17:26"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Orang yang paling berhak diberi nafkah",
					"ayat" => "Qs.2:177 | Qs.2:215 | Qs.2:233 | Qs.2:273 | Qs.4:8 | Qs.4:36 | Qs.17:26 | Qs.24:22"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Sederhana dalam memberi nafkah",
					"ayat" => "Qs.2:233 | Qs.17:29 | Qs.25:67 | Qs.65:6 | Qs.65:7"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Pendidikan anak"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Cinta orang tua kepada anak",
					"ayat" => "Qs.12:13 | Qs.12:64 | Qs.12:66 | Qs.12:67 | Qs.12:84 | Qs.12:85"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Anak sebagai fitnah (cobaan)",
					"ayat" => "Qs.3:14 | Qs.8:28 | Qs.9:85 | Qs.18:46 | Qs.63:9 | Qs.64:15"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Mendo'akan anak dengan keberkahan",
					"ayat" => "Qs.19:6 | Qs.25:74 | Qs.46:15"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Bebaikan orang tua bermanfaat untuk anaknya",
					"ayat" => "Qs.18:82"),
				array(
					"id_master" => 13,
					"index" => "Berlaku adil di antara anak-anak",
					"ayat" => "Qs.12:8"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Nasehat orang tua untuk anaknya",
					"ayat" => "Qs.2:132 | Qs.2:133 | Qs.11:42 | Qs.11:43 | Qs.12:5 | Qs.12:67 | Qs.12:87 | Qs.31:13 | Qs.31:16 | Qs.31:17 | Qs.31:18 | Qs.31:19"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Memerintahkan anak untuk selalu berbuat baik",
					"ayat" => "Qs.31:13 | Qs.31:17 | Qs.31:18 | Qs.31:19"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Pengajaran anak"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Mengajarkan anak berdikari",
					"ayat" => "Qs.21:78 | Qs.21:79"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Mengajarkan anak beribadat",
					"ayat" => "Qs.2:132 | Qs.2:133 | Qs.31:17 | Qs.66:6"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Anak yatim"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Keutamaan memelihara anak yatim",
					"ayat" => "Qs.4:36 | Qs.89:17 | Qs.93:9"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Makan harta anak yatim"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Hukum memakan harta anak yatim dan sanksinya",
					"ayat" => "Qs.4:2 | Qs.4:6 | Qs.4:10 | Qs.107:2"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Wali memakan harta anak yatim dengan cara yang benar",
					"ayat" => "Qs.4:6 | Qs.6:152 | Qs.17:34"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Memelihara anak yatim"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Makan bersama-sama anak yatim",
					"ayat" => "Qs.2:220"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Mengembalikan harta anak yatim",
					"ayat" => "Qs.4:6 | Qs.6:152"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Bersedekah kepada anak yatim",
					"ayat" => "Qs.2:83 | Qs.2:177 | Qs.2:215 | Qs.4:8 | Qs.76:8 | Qs.90:15"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Berakhirnya masa keyatiman",
					"ayat" => "Qs.4:6 | Qs.6:152"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Kewajiban anak-anak terhadap orang tua"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Taat kepada orang tua",
					"ayat" => "Qs.9:23 | Qs.17:23 | Qs.17:24 | Qs.29:8 | Qs.31:15 | Qs.37:102"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Berbakti kepada orang tua",
					"ayat" => "Qs.2:83 | Qs.4:36 | Qs.6:151 | Qs.12:99 | Qs.12:100 | Qs.17:23 | Qs.17:24 | Qs.19:14 | Qs.19:32 | Qs.29:8 | Qs.31:14 | Qs.46:15"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Memberi nafkah kedua orang tua",
					"ayat" => "Qs.2:215 | Qs.30:38"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Nasihat anak kepada orang tua",
					"ayat" => "Qs.19:42 | Qs.19:43 | Qs.19:44 | Qs.19:45"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Doa untuk orang tua",
					"ayat" => "Qs.14:41 | Qs.17:23 | Qs.17:24 | Qs.19:47 | Qs.26:86 | Qs.31:14 | Qs.71:28"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Memelihara orang tua",
					"ayat" => "Qs.17:23 | Qs.17:24 | Qs.29:8 | Qs.31:14 | Qs.31:15 | Qs.46:15"),
				array(
					"id_master" => 13,
					"level" => 1,
					"index" => "Perkawinan"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Perintah nikah",
					"ayat" => "Qs.4:3 | Qs.24:32 | Qs.30:21"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Perkawinan merupakan sunnahnya para rasul",
					"ayat" => "Qs.13:38"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Wanita-wanita yang diharamkan menikahinya"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Haram menikahi isteri-isteri Nabi",
					"ayat" => "Qs.33:6 | Qs.33:53"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Wanita-wanita yang diharamkan mengawininya karena nasab"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Yang diharamkan atas wanita karena nasab",
					"ayat" => "Qs.4:23"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Menghimpun dua saudara (kakak-beradik)",
					"ayat" => "Qs.4:23"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Wanita yang diharamkan kawin karena satu susuan",
					"ayat" => "Qs.4:23"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Wanita yang diharamkan kawin karena akad nikah"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Yang diharamkan atas wanita sebab pernikahan",
					"ayat" => "Qs.4:23"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Haram menikahi anak tiri",
					"ayat" => "Qs.4:23"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Haram menikahi ibu tiri",
					"ayat" => "Qs.4:22"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Kawin lebih dari empat"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Nabi kawin lebih dari empat",
					"ayat" => "Qs.33:50"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Menikahi selain wanita muslimah"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Kawin dengan perempuan ahli kitab",
					"ayat" => "Qs.5:5"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Kawin dengan perempuan musyrik",
					"ayat" => "Qs.2:221 | Qs.60:10"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Kawin dengan perempuan kafir yang memeluk Islam",
					"ayat" => "Qs.2:221"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Muhrim"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Muhrim perempuan",
					"ayat" => "Qs.24:31 | Qs.33:55"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Muhrim melihat perhiasan wanita",
					"ayat" => "Qs.33:55"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Kawin dengan wanita yang sedang dalam masa 'iddah",
					"ayat" => "Qs.2:235"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Kawin dengan wanita yang bersuami",
					"ayat" => "Qs.4:24 | Qs.4:25"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Pertunangan"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Disyariatkannya pertunangan",
					"ayat" => "Qs.2:235"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Apa yang dibolehkan bagi pihak laki-laki"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Memilih wanita"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Kebebasan memilih wanita",
					"ayat" => "Qs.2:240"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Cara terbaik memilih wanita",
					"ayat" => "Qs.4:25 | Qs.24:3 | Qs.25:74"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Hukum menikahi perawan",
					"ayat" => "Qs.66:5"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Hukum menikahi janda",
					"ayat" => "Qs.66:5"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Hukum menikahi penzina",
					"ayat" => "Qs.24:3"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Memilih wanita yang shaleh",
					"ayat" => "Qs.4:34 | Qs.24:26 | Qs.25:74 | Qs.66:5"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Hukum menikahi hamba wanita",
					"ayat" => "Qs.4:25 | Qs.24:32"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Melihat wanita",
					"ayat" => "Qs.24:30"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Hukum wanita melihat laki-laki",
					"ayat" => "Qs.24:31"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Memperlihatkan wanita kepada peminang",
					"ayat" => "Qs.28:27"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Hukum nikah",
					"ayat" => "Qs.24:32"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Hukum nikah muhallil",
					"ayat" => "Qs.2:230"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Akad nikah"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Syarat-syarat akad nikah"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Perwalian dalam akad nikah"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Syarat adanya wali dalam akad nikah",
					"ayat" => "Qs.2:232"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Wali kafir atas wanita muslimah",
					"ayat" => "Qs.60:10"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Menolaknya wali",
					"ayat" => "Qs.2:232 | Qs.4:127"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Syarat adanya mahar (mas kawin) dalam nikah"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Mahar merupakan hak isteri"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Perkawinan tanpa mahar",
					"ayat" => "Qs.4:4 | Qs.4:20 | Qs.4:21 | Qs.4:24 | Qs.4:25 | Qs.5:5 | Qs.60:10"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Batas mahar",
					"ayat" => "Qs.2:236 | Qs.4:4"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Sederhana dalam menetapkan mahar",
					"ayat" => "Qs.4:20"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Pembebasan suami dari mahar",
					"ayat" => "Qs.4:25"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Menahan mahar dari isteri",
					"ayat" => "Qs.2:237 | Qs.4:4"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Yang boleh dijadikan mahar",
					"ayat" => "Qs.2:229 | Qs.4:4 | Qs.4:20 | Qs.4:21"),
				array(
					"id_master" => 13,
					"level" => 6,
					"index" => "Menjadikan manfaat sebagai mahar",
					"ayat" => "Qs.28:27"),
				array(
					"id_master" => 13,
					"level" => 6,
					"index" => "Sebab wajibnya mahar",
					"ayat" => "Qs.4:21 | Qs.4:24"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Kewajiban suami isteri"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Kewajiban isteri terhadap suami"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Ketaatan isteri kepada suami",
					"ayat" => "Qs.4:34"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Kedurhakaan isteri"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Cara bergaul dengan isteri yang durhaka",
					"ayat" => "Qs.4:34"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Memperbaiki hubungan antara suami dan isteri yang durhaka",
					"ayat" => "Qs.4:35"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Menjaga kehormatan suami dan rumahnya"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Isteri menjaga rumah suaminya",
					"ayat" => "Qs.4:34"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Menjaga harta suami",
					"ayat" => "Qs.4:34"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Kewajiban suami terhadap isteri"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Berlemah-lembut dengan isteri",
					"ayat" => "Qs.4:19 | Qs.4:34 | Qs.65:6"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Memberi nafkah isteri"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Ukuran nafkah keluarga",
					"ayat" => "Qs.2:233 | Qs.65:6 | Qs.65:7"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Pergaulan"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Pergaulan baik",
					"ayat" => "Qs.2:228 | Qs.2:229 | Qs.2:231 | Qs.4:19 | Qs.65:2"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Lebih condong kepada salah satu sebagian isteri-isteri",
					"ayat" => "Qs.4:129"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Etika bersetubuh",
					"ayat" => "Qs.2:222 | Qs.2:223"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Tabiat wanita dan akhlaknya",
					"ayat" => "Qs.12:28 | Qs.12:30 | Qs.12:50 | Qs.43:18 | Qs.51:29"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Menyetubuhi wanita yang sedang haid",
					"ayat" => "Qs.2:222"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Bersetubuh dengan hamba",
					"ayat" => "Qs.4:3 | Qs.4:24 | Qs.23:6 | Qs.33:50 | Qs.33:52 | Qs.70:30"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Kewajiban bersama (suami-isteri)"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Kesetiaaan",
					"ayat" => "Qs.4:129 | Qs.7:199"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Poligami"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Etika berpoligami"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Kewajiban mengatur giliran di antara isteri-isteri",
					"ayat" => "Qs.4:128 | Qs.4:129 | Qs.33:51"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Berlaku sama terhadap semua isteri",
					"ayat" => "Qs.4:3 | Qs.4:129"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Keakuran di antara isteri-isteri",
					"ayat" => "Qs.66:4"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Wanita sebagai fitnah (cobaan)",
					"ayat" => "Qs.3:14"),
				array(
					"id_master" => 13,
					"level" => 1,
					"index" => "Perceraian"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Talak"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Mendamaikan di antara suami isteri"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Kebencian suami kepada isterinya",
					"ayat" => "Qs.4:128"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Menasihati isteri",
					"ayat" => "Qs.4:34"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Menjauhi isteri",
					"ayat" => "Qs.4:34"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Memukul isteri",
					"ayat" => "Qs.4:34"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Dua orang hakim pada satu pertengkaran",
					"ayat" => "Qs.4:35"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Hukum talak"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Disyariatkannya talak",
					"ayat" => "Qs.2:227 | Qs.2:229 | Qs.2:230 | Qs.2:232 | Qs.2:236 | Qs.4:130 | Qs.33:49"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Bagian-bagian talak"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Talak sunnah (yang sesuai dengan sunnah)",
					"ayat" => "Qs.65:1"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Talak bid'ah (yang tidak sesuai dengan sunnah)",
					"ayat" => "Qs.65:1"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Talak tiga",
					"ayat" => "Qs.2:229"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Lafaz-lafaz talak"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Kebebasan memilih isteri",
					"ayat" => "Qs.33:28 | Qs.33:29"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Rujuk (kembali)"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Talak yang boleh kembali",
					"ayat" => "Qs.2:228 | Qs.2:229 | Qs.2:231 | Qs.65:2"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Talak bain (yang tidak boleh kembali)"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Talak bain bainunah kubra",
					"ayat" => "Qs.2:230"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Talak sebelum dukhul (digauli)",
					"ayat" => "Qs.2:236 | Qs.2:237 | Qs.33:49"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Khulu' (tebusan talak)"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Menzalimi isteri",
					"ayat" => "Qs.2:229 | Qs.2:231 | Qs.4:19 | Qs.65:6 | Qs.2:229"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Hukum khulu'"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Li'an (menuduh isteri berbuat zina)"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Hukum li'an",
					"ayat" => "Qs.24:6"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Cara-cara li'an",
					"ayat" => "Qs.24:6 | Qs.24:7 | Qs.24:8 | Qs.24:9"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Islamnya salah seorang dari suami isteri",
					"ayat" => "Qs.60:10 | Qs.60:11"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Ilaa (sumpah suami untuk tidak menggauli isterinya)",
					"ayat" => "Qs.2:226"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Akibat-akibat perceraian"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Iddah (masa setelah cerai)"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Ayat-ayat 'iddah",
					"ayat" => "Qs.2:228 | Qs.65:4"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Iddah wanita yang tidak haid",
					"ayat" => "Qs.65:4"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Iddah wanita hamil",
					"ayat" => "Qs.65:4"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Iddah anak-anak",
					"ayat" => "Qs.65:4"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Iddah cerai mati"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Masa 'iddah cerai mati",
					"ayat" => "Qs.2:234"),
				array(
					"id_master" => 13,
					"level" => 5,
					"index" => "Tempat 'iddah cerai mati",
					"ayat" => "Qs.2:240"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Iddah wanita yang sudah digauli",
					"ayat" => "Qs.2:228"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Iddah wanita yang belum digauli",
					"ayat" => "Qs.33:49"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Tempat 'iddah",
					"ayat" => "Qs.65:1 | Qs.65:6"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Berhias setelah 'iddah",
					"ayat" => "Qs.2:234"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Merujuk isteri setelah 'iddah",
					"ayat" => "Qs.2:230"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Nafkah selama masa 'iddah"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Nafkah wanita yang sedang menjalani masa 'iddah",
					"ayat" => "Qs.2:233 | Qs.65:6 | Qs.65:7"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Tempat tinggal wanita yang sedang menjalani masa 'iddah",
					"ayat" => "Qs.2:240 | Qs.65:1 | Qs.65:6"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Mut'ah (biaya) untuk isteri yang dicerai",
					"ayat" => "Qs.2:236 | Qs.2:237 | Qs.2:241 | Qs.33:49"),
				array(
					"id_master" => 13,
					"level" => 1,
					"index" => "Zhihar (menyerupakan isteri dengan ibunya)"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Sebab turunnya ayat zhihar",
					"ayat" => "Qs.58:1"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Hukum zhihar",
					"ayat" => "Qs.33:4 | Qs.58:2"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Kafarat zhihar",
					"ayat" => "Qs.58:3 | Qs.58:4"),
				array(
					"id_master" => 13,
					"level" => 1,
					"index" => "Warisan"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Warisan di awal Islam",
					"ayat" => "Qs.2:180 | Qs.4:7 | Qs.8:72"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Kewajiban-kewajiban yang berkaitan dengan warisan",
					"ayat" => "Qs.4:11 | Qs.4:12"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Sebab-sebab terjadinya pewarisan"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Pewarisan karena hubungan kerabat",
					"ayat" => "Qs.4:11 | Qs.4:176 | Qs.8:75"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Pewarisan karena hubungan perkawinan",
					"ayat" => "Qs.4:12"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Pewarisan karena hubungan wala'",
					"ayat" => "Qs.4:33"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Bagian-bagian warisan"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Warisan karena sumpah setia",
					"ayat" => "Qs.4:33"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Ashobah (sisa)"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Ashobah dari jalur anak",
					"ayat" => "Qs.4:11"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Ashobah dari jalur saudara",
					"ayat" => "Qs.4:176"),
				array(
					"id_master" => 13,
					"level" => 3,
					"index" => "Faraidh (bagian tetap)"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Warisan anak",
					"ayat" => "Qs.4:11"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Bagian ayah",
					"ayat" => "Qs.4:11"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Bagian ibu",
					"ayat" => "Qs.4:11"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Bagian anak wanita",
					"ayat" => "Qs.4:11"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Bagian suami",
					"ayat" => "Qs.4:12"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Bagian isteri",
					"ayat" => "Qs.4:12"),
				array(
					"id_master" => 13,
					"level" => 4,
					"index" => "Bagian saudara wanita",
					"ayat" => "Qs.4:176"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Waris kalalah (mayit tidak meninggalkan anak atau orang tua)",
					"ayat" => "Qs.4:12 | Qs.4:176"),
				array(
					"id_master" => 13,
					"level" => 2,
					"index" => "Memberi sebagian warisan kepada selain ahli waris",
					"ayat" => "Qs.4:8"),
				array(
					"id_master" => 14,
					"level" => 1,
					"index" => "Keutamaan jihad dan mujahidin (pejuang)"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Keutamaan jihad"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Perintah berjuang",
					"ayat" => "Qs.2:218 | Qs.3:145 | Qs.3:157 | Qs.3:200 | Qs.4:74 | Qs.4:76 | Qs.4:77 | Qs.4:84 | Qs.4:95 | Qs.4:104 | Qs.5:35 | Qs.8:60 | Qs.8:65 | Qs.9:111 | Qs.9:120 | Qs.49:15 | Qs.61:4 | Qs.61:11 | Qs.66:9"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Jihad yang paling mulia",
					"ayat" => "Qs.2:258 | Qs.40:28 | Qs.40:29 | Qs.40:30 | Qs.40:31 | Qs.40:32 | Qs.40:33 | Qs.40:34 | Qs.40:35 | Qs.40:38 | Qs.40:39 | Qs.40:40 | Qs.40:41 | Qs.40:42 | Qs.40:43 | Qs.40:44"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Keutamaan mujahidin (pejuang)"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Besarnya keutamaan pejuang",
					"ayat" => "Qs.2:154 | Qs.3:142 | Qs.3:195 | Qs.9:20 | Qs.9:88 | Qs.9:111 | Qs.9:120"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Orang yang berjuang lebih utama dari yang tidak berjuang",
					"ayat" => "Qs.3:142 | Qs.4:95"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Kaki-kaki yang berdebu di jalan Allah",
					"ayat" => "Qs.9:120"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Bekerja di jalan Allah",
					"ayat" => "Qs.2:218 | Qs.2:261 | Qs.2:262 | Qs.4:74 | Qs.4:94 | Qs.4:95 | Qs.4:100 | Qs.5:54 | Qs.8:60 | Qs.8:72 | Qs.8:74 | Qs.9:20 | Qs.9:41 | Qs.9:60 | Qs.22:58 | Qs.49:15 | Qs.57:10"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Derajat pejuang",
					"ayat" => "Qs.4:95 | Qs.4:96 | Qs.57:10"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Keutamaan memberi nafkah di jalan Allah",
					"ayat" => "Qs.2:195 | Qs.2:261 | Qs.4:95 | Qs.8:60 | Qs.9:111 | Qs.9:121 | Qs.61:11"),
				array(
					"id_master" => 14,
					"level" => 1,
					"index" => "Hukum berjihad"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Kewajiban berjihad"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Perintah bersabar pada permulaan dakwah",
					"ayat" => "Qs.2:109 | Qs.4:77 | Qs.6:106 | Qs.15:85 | Qs.45:14 | Qs.50:39 | Qs.73:10 | Qs.76:24"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Permulaan perintah berperang",
					"ayat" => "Qs.2:190 | Qs.4:77 | Qs.22:39"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Diwajibkannya berjihad",
					"ayat" => "Qs.2:190 | Qs.2:216 | Qs.2:244 | Qs.5:54 | Qs.8:6 | Qs.8:8 | Qs.8:39 | Qs.8:57 | Qs.9:5 | Qs.9:12 | Qs.9:14 | Qs.9:29 | Qs.9:36 | Qs.9:73 | Qs.9:123 | Qs.47:4 | Qs.47:22"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Hikmah diwajibkannya berjihad",
					"ayat" => "Qs.2:193 | Qs.2:251 | Qs.8:39 | Qs.9:13 | Qs.9:14 | Qs.9:15 | Qs.9:16 | Qs.47:4"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Larangan meninggalkan jihad",
					"ayat" => "Qs.8:15 | Qs.8:16 | Qs.9:24 | Qs.9:81"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Jihad akan terus berkelanjutan",
					"ayat" => "Qs.2:193 | Qs.8:39 | Qs.9:5 | Qs.9:12 | Qs.9:29 | Qs.9:36 | Qs.9:123"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Enggan berjihad",
					"ayat" => "Qs.2:216 | Qs.4:77 | Qs.8:5 | Qs.8:6"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Kewajiban berjihad"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Asal-usul diwajibkannya berjihad",
					"ayat" => "Qs.47:20 | Qs.47:21"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Perang dan tipu muslihat",
					"ayat" => "Qs.30:3"),
				array(
					"id_master" => 14,
					"level" => 1,
					"index" => "Tidak ikut berperang"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Tidak ikut berperang tanpa halangan"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Pelarangan tidak ikut berperang",
					"ayat" => "Qs.4:72 | Qs.9:38 | Qs.9:39 | Qs.9:120"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Halangan tidak ikut berperang"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Dibolehkan tidak ikut berperang karena halangan",
					"ayat" => "Qs.9:91 | Qs.9:92 | Qs.48:17"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Orang sakit dan orang lemah tidak ikut berperang",
					"ayat" => "Qs.4:95 | Qs.9:91"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Tidak ikut berperang karena ketiadaan nafkah",
					"ayat" => "Qs.9:91 | Qs.9:92"),
				array(
					"id_master" => 14,
					"level" => 1,
					"index" => "Sifat-sifat mujahidin"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Niat mujahid"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Berjuang untuk meninggikan kalimat Allah",
					"ayat" => "Qs.2:190 | Qs.2:193 | Qs.2:218 | Qs.2:244 | Qs.3:13 | Qs.4:75 | Qs.4:76 | Qs.4:95 | Qs.8:72 | Qs.8:74 | Qs.9:20 | Qs.9:38 | Qs.9:41 | Qs.47:4 | Qs.61:4 | Qs.61:11"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Sifat-sifat mujahid"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Niat ikhlas untuk berjuang",
					"ayat" => "Qs.2:190 | Qs.47:4"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Taat dan patuh pada pemimpin",
					"ayat" => "Qs.4:59 | Qs.24:48"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Kesabaran pejuang saat bertemu musuh",
					"ayat" => "Qs.2:249 | Qs.2:250 | Qs.8:45 | Qs.33:22"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Berani berperang dan tidak pengecut",
					"ayat" => "Qs.4:77 | Qs.4:104 | Qs.8:15 | Qs.8:45 | Qs.9:38"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Sifat-sifat komandan / pemimpin"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Kewajiban komandan perang",
					"ayat" => "Qs.27:21"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Mengajak berjuang",
					"ayat" => "Qs.2:249 | Qs.4:76 | Qs.4:84 | Qs.8:60 | Qs.8:65"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Musyawarat komandan dengan orang yang berpengalaman",
					"ayat" => "Qs.27:32 | Qs.27:33"),
				array(
					"id_master" => 14,
					"level" => 1,
					"index" => "Persiapan berperang"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Peralatan tempur"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Kendaraan tempur"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Perang dengan menggunakan kuda",
					"ayat" => "Qs.100:1 | Qs.100:2 | Qs.100:3 | Qs.100:4 | Qs.100:5"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Melatih mujahidin"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Persiapan rohani dan jasmani mujahidin",
					"ayat" => "Qs.2:249 | Qs.4:84 | Qs.8:60 | Qs.8:65"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Latihan penggunaan senjata",
					"ayat" => "Qs.8:60"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Mempersiapkan pasukan"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Kesiap-siagaan dalam berbagai situasi",
					"ayat" => "Qs.4:102"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Biaya perang diambil dari kas negara",
					"ayat" => "Qs.9:92"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Keutamaan menyiapkan tentara",
					"ayat" => "Qs.2:195 | Qs.4:95"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Keutamaan infak di jalan Allah",
					"ayat" => "Qs.4:95 | Qs.5:12 | Qs.8:60 | Qs.8:72 | Qs.9:20 | Qs.9:41 | Qs.9:88 | Qs.9:111 | Qs.9:121 | Qs.49:15 | Qs.61:11 | Qs.64:17"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Meminta bantuan orang musyrik dalam perang",
					"ayat" => "Qs.9:83 | Qs.60:1"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Teknik-teknik bertempur"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Pengerahan seluruh pasukan",
					"ayat" => "Qs.4:71 | Qs.9:122"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Berhati-hati terhadap orang yang akan berkhianat",
					"ayat" => "Qs.4:71 | Qs.4:101 | Qs.4:102 | Qs.8:58 | Qs.63:4 | Qs.64:14"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Menyimpang demi perang",
					"ayat" => "Qs.8:16"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Mengintimidasi musuh",
					"ayat" => "Qs.8:57 | Qs.8:60"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Mengatur pasukan"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Menyusun kompi dan pasukan",
					"ayat" => "Qs.61:4"),
				array(
					"id_master" => 14,
					"level" => 1,
					"index" => "Fase-fase pertempuran"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Permulaan perang"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Pemberitahuan dibatalkannya perjanjian",
					"ayat" => "Qs.8:58 | Qs.9:2 | Qs.9:3"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Etika berperang"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Mohon doa orang yang lemah dan orang shaleh",
					"ayat" => "Qs.2:249"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Hukum membunuh wanita, anak-anak dan orang tua",
					"ayat" => "Qs.2:190"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Larangan menyiksa mayat",
					"ayat" => "Qs.2:190"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Membalas dengan yang serupa",
					"ayat" => "Qs.16:126 | Qs.22:60 | Qs.42:40"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Larangan membakar musuh",
					"ayat" => "Qs.2:190"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Penyiksaan dengan api",
					"ayat" => "Qs.2:190"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Menyerang musuh",
					"ayat" => "Qs.8:57 | Qs.47:4 | Qs.66:9"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Mati syahid"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Ganjaran mati syahid dan keutamaannya",
					"ayat" => "Qs.2:154 | Qs.3:157 | Qs.3:169 | Qs.3:170 | Qs.3:171 | Qs.3:195 | Qs.4:69 | Qs.4:74 | Qs.9:111 | Qs.47:4 | Qs.47:5"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Keutamaan orang yang mati syahid"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Besarnya pahala orang yang mati syahid",
					"ayat" => "Qs.3:169 | Qs.3:170 | Qs.4:74 | Qs.22:58 | Qs.47:4 | Qs.47:5 | Qs.47:6"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Surga di bawah kilatan pedang",
					"ayat" => "Qs.47:6"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Cara-cara menghentikan perang"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Musuh memeluk Islam"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Tidak memerangi musuh yang memeluk Islam",
					"ayat" => "Qs.2:193"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Hasil-hasil perang"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Sebab dan syarat kemenangan",
					"ayat" => "Qs.2:249 | Qs.2:250 | Qs.3:122 | Qs.3:125 | Qs.3:147 | Qs.3:200 | Qs.5:23 | Qs.8:45 | Qs.8:46 | Qs.8:65 | Qs.8:66 | Qs.22:40 | Qs.47:7"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Jizyah (upeti)"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Dari siapa jizyah diambil",
					"ayat" => "Qs.9:29"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Tawanan perang"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Memperbudak tawanan",
					"ayat" => "Qs.2:85 | Qs.47:4"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Pembebasan tawanan",
					"ayat" => "Qs.47:4"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Perlakuan terhadap tawanan",
					"ayat" => "Qs.8:67"),
				array(
					"id_master" => 14,
					"level" => 1,
					"index" => "Harta rampasan perang dan fai'"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Hukum harta rampasan perang",
					"ayat" => "Qs.8:1 | Qs.48:19 | Qs.48:20"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Pembagian harta rampasan perang"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Harta rampasan perang dibagi lima",
					"ayat" => "Qs.8:41"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Harta rampasan perang halal bagi tentara",
					"ayat" => "Qs.8:69 | Qs.48:19 | Qs.48:20"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Bagian orang yang tidak ikut berperang",
					"ayat" => "Qs.48:15"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Fai' (harta rampasan yang diambil tanpa melalui perang)"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Mencuri harta rampasan",
					"ayat" => "Qs.3:161"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Pembagian fai'",
					"ayat" => "Qs.59:7"),
				array(
					"id_master" => 14,
					"level" => 1,
					"index" => "Perjanjian"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Perdamaian"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Perjanjian damai dengan musyrikin",
					"ayat" => "Qs.9:8"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Memenuhi perjanjian dengan orang kafir",
					"ayat" => "Qs.9:4"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Melanggar perjanjian"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Pelanggaran oleh orang Islam",
					"ayat" => "Qs.8:58"),
				array(
					"id_master" => 14,
					"level" => 4,
					"index" => "Pengkhianatan orang musyrikin",
					"ayat" => "Qs.9:8 | Qs.9:10 | Qs.9:12 | Qs.9:13"),
				array(
					"id_master" => 14,
					"level" => 2,
					"index" => "Gencatan senjata"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Hukum gencatan senjata",
					"ayat" => "Qs.8:61 | Qs.9:4"),
				array(
					"id_master" => 14,
					"level" => 3,
					"index" => "Gencatan senjata antara Nabi dan orang-orang musyrik",
					"ayat" => "Qs.8:61 | Qs.9:4")
			);
			$indexAyatModel = new IndexAyatModel();
			$indexAyatModel->truncate();
			foreach ($indexAyat as $row) {
				$indexAyatModel->insert($row);
			}
		}
		
	}