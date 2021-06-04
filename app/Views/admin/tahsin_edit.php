<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
<h4 id="title">Edit Tahsin</h4>
<hr class="mb-5">
<form method="post" action="/tahsin/edit/<?= $detail->ayat_id; ?>">
    <div class="form-row" id="admin">
        <div class="col-md-12" id="ayat_tahsin"></div>
    </div>
    <div class="form-group">
        <label for="tahsin">Uraian Tahsin & Tajwid</label>
        <textarea type="text" class="form-control texteditor" id="tahsin" name="content" rows="7">
                <?= $detail->content; ?>
            </textarea>
    </div>
    <div class="form-group">
        <label for="link_youtube">ID Video Youtube</label>
        <input name="link_youtube" type="text" class="form-control" id="link_youtube"
               placeholder="masukan id video youtube contoh : PO00R3xIciU">
    </div>
    <button type="submit" class="btn btn-4 px-4 mr-2">Simpan</button>
    <a href="<?= base_url(); ?>/tahsin" class="btn btn-4 px-4">Batal</a>
</form>

<?= $this->endSection(); ?>