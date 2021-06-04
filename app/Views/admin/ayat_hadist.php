<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
    <h4>Ayat Hadist Ekonomi</h4>
    <hr class="mb-5">
    <div class="menu text-center text-md-right mb-3">
        <a href="<?= base_url(); ?>/ayat-hadist/add" class="btn btn-4">Tambah Data</a>
    </div>
    <!-- tampilkan alert jika berhasil -->
    <?php
        
        if (session('info')) {
            ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
	            <?= session('info') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }
    ?>
    <div class="table-responsive mb-4">
        <table class="table table-striped" id="datatables-ayat-hadits">
            <thead>
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Input By</th>
                <th scope="col">updated</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
			<?php
				foreach ($ayatHadits as $row) {
					?>
                    <tr>
                        <td><?= $row->title ?></td>
                        <td><?= $row->name ?></td>
                        <td><?= $row->updated ?></td>
                        <td><?= '<a href="' . base_url('ayat-hadist/edit') . "/" . $row->id_ayat_hadits . '" class="badge badge-1">Edit</a>'; ?></td>
                    </tr>
					<?php
				}
			?>
            </tbody>
        </table>
    </div>
<?= $this->endSection(); ?>