<?= $this->extend('layout/main_layout'); ?>
<?= $this->section('content'); ?>
    <div class="search">
        <div class="container">
            <form action="cari" method="get" class="needs-validation">
                <div class="input-group">
                    <input type="text" class="form-control" id="search" name="query"
                           placeholder="Cari Surat & Ayat Contoh : 1:1 / 'Baqarah'" required>
                    <div class="input-group-append">
                        <button type="submit" class="btn" id="submit">
                            <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container search-result">
        <div class="space-b-24">
            <p class="text text--grey text--medium text--regular">
                <strong>Jump to</strong>
            </p>
			<?php
				$no_jump = 0;
				foreach ($jump_to as $row) {
					if (!strpos($row->getAttribute('href'), 'page') && !strpos($row->getAttribute('href'), 'juz'))
						echo str_replace(':', "/", $row);
					
					$no_jump++;
				}
			?>
        </div>
        <p class="text text--grey text--medium text--regular">
            <strong>Result</strong>
        </p>
		<?php
			$no = 0;
			foreach ($results as $row) {
				if ($no > $no_jump)
					echo str_replace(':', "/", $row);
				$no++;
			}
		?>


    </div>
<?= $this->endSection(); ?>