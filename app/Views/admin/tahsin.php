<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
<h4>Tahsin</h4>
<hr class="mb-5">
<div class="menu text-center text-md-right mb-3">
    <a href="<?= base_url(); ?>/tahsin/add" class="btn btn-4">Tambah Data</a>
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
    <table class="table table-striped" id="datatables-tahsin">
        <thead>
            <tr>
                <th scope="col">Surat</th>
                <th scope="col">Input By</th>
                <th scope="col">Updated</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
	        foreach ($tahsins as $row) {
		        $ayat = explode(":", $row->ayat_id);
		        ?>
                <tr>
                    <td><?=$row->chapter_name . " : $ayat[1]"?></td>
                    <td><?= $row->user_name ?></td>
                    <td><?= $row->updated ?></td>
                    <td><?= '<a href="' . base_url('tahsin/edit') . "/" . $row->ayat_id . '" class="badge badge-1">Edit</a>'; ?></td>
                </tr>
		        <?php
	        }
        ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>