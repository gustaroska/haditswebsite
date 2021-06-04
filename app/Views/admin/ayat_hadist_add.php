<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
    <h4>Add Ayat Hadist Ekonomi</h4>
    <hr class="mb-5">
    <form action="/ayat-hadist/add" method="post" class="need_validation">
        <div class="form-group row" id="admin">
            <label for="judul" class="col-sm-1 col-form-label">Judul</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="judul" name="title" required/>
            </div>
        </div>
        <div class="form-group">
            <label for="ayat_hadits" class="sr-only">Ayat Hadist Ekonomi</label>
            <textarea type="text" class="form-control texteditor" id="ayat_hadits" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-4 px-4 mr-2">Simpan</button>
        <a href="<?= base_url(); ?>/ayat-hadist" class="btn btn-4 px-4">Batal</a>
    </form>
<?= $this->endSection(); ?>