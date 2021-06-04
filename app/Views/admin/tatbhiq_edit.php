<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
    <h4 id="title">Edit Tatbhiq</h4>
    <hr class="mb-5">
    <form method="post" action="/tatbhiq/edit/<?= $detail->ayat_id ?>">
        <div class="form-row" id="admin">
            <div class="col-md-12" id="ayat_tajwid"></div>
        </div>
        <div class="form-group">
            <label for="tatbhiq">Uraian Tatbhiq</label>
            <textarea class="texteditor" id="tatbhiq" name="content" rows="10"><?= $detail->content ?></textarea>
        </div>
        <button class="btn btn-4 px-4 mr-2" type="submit">Simpan</button>
        <a href="<?= base_url(); ?>/tatbhiq" class="btn btn-4 px-4">Batal</a>
    </form>

<?= $this->endSection(); ?>