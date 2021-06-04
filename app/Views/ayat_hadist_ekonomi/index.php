<?= $this->extend('layout/main_layout'); ?>
<?= $this->section('content'); ?>
    <div class="container">
        <div class="header mt-5">
            <h2>Ayat Hadist Ekonomi</h2>
            <div class="devider mb-5"></div>
        </div>
        <div class="main-content">
            <div class="table-responsive mb-4">
                <table class="table table-striped" id="datatables-ayat-hadits">
                    <thead>
                    <tr>
                        <th scope="col">Daftar Ayat Hadist Ekonomi</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
						foreach ($ayatHadits as $row) {
							echo "<tr>";
							echo "<td>$row->title</td>";
							echo "<td class='text-center'><a class='btn btn-1 px-4' href='/ayat-hadist-ekonomi/$row->id_ayat_hadits'>Lihat</a></td>";
							echo "</tr>";
						} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>