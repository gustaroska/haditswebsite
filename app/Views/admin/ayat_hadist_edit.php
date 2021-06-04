<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
    <h4>Edit Ayat Hadist Ekonomi</h4>
    <hr class="mb-5">
    <form method="post" action="/ayat-hadist/edit/<?= $detail->id_ayat_hadits ?>">
        <div class="form-group row" id="admin">
            <label for="judul" class="col-sm-1 col-form-label">Judul</label>
            <div class="col-sm-11">
                <input type="hidden" id="getAyatHadits">
                <input id="judul" type="text" class="form-control" name="title" value="<?=$detail->title?>"/>
            </div>
        </div>
        <div class="form-group">
            <label for="ayat_hadits" class="sr-only">Ayat Hadist Ekonomi</label>
            <textarea id="ayat_hadits" class="texteditor" name="content" rows="10"><?=$detail->content?></textarea>
        </div>
        <button type="submit" class="btn btn-4 px-4 mr-2">Simpan Perubahan</button>
        <a href="<?= base_url(); ?>/ayat-hadist" class="btn btn-4 px-4">Batal</a>
    </form>
<?= $this->endSection(); ?>