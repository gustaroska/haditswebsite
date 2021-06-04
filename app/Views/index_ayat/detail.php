<?= $this->extend('layout/main_layout'); ?>
<?= $this->section('content'); ?>
    <div class="container">
        <div class="header mt-5">
			<?php
				if (isset($index_master)) {
					echo "<h1>$index_master[master]</h1>";
					echo "<p>Berikut daftar ayat Al-Quran yang menjelaskan tentang <strong>$index_master[master]</strong></p>";
					echo '<div class="devider mb-5"></div>';
				} else
					echo "<h1> Tidak ditemukan</h1>";
			?>
        </div>
        <div class="main-content">
            <table class="table index-ayat" id="datatables-index-ayat" width="100%">
                <thead>
                <tr>
                    <th>Index Ayat</th>
                    <th>Ayat</th>
                </tr>
                </thead>
                <tbody>
				<?php
					if (isset($index_master))
						foreach ($index_ayat as $item) {
							$ayat = "";
							if (isset($item->ayat))
								foreach (explode("|", $item->ayat) as
								         $row) {
									$ayat .= "<a target='_blank' href='/" .
                                        str_replace('Qs.', '',
                                            str_replace(':', '/', $row)) . "'>$row</a>";
								}
							?>
                            <tr>
                                <td width="30%" class="level-<?= $item->level ?>"><?= $item->index ?></td>
                                <td><?= $ayat ?></td>
                            </tr>
						<?php }
				?>
                </tbody>
            </table>
        </div>
    </div>
<?= $this->endSection(); ?>