<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
    <h4 id="judul">Edit Tafsir - <?= $detail->chapter_name ?> : <?= $ayat ?> - <?= $detail->tafsir_resource_name ?></h4>
    <hr class="mb-5">
    <form action="/tafsir/edit/<?= $detail->id_tafsir ?>" method="post">
        <input type="hidden" name="log"
               value="<?= $detail->chapter_name ?> : <?= $ayat ?> - <?= $detail->tafsir_resource_name ?>">
        <div class="form-row" id="admin"></div>
        <div class="form-group">
            <label for="tafsir">Uraian Tafsir</label>
            <textarea type="text" class="form-control texteditor" id="tafsir" name="content" rows="7">
                <?= $detail->content ?>
            </textarea>
        </div>
        <button type="submit" class="btn btn-4 px-4 mr-2">Simpan Perubahan</button>
        <a href="<?= base_url(); ?>/tafsir" class="btn btn-4 px-4">Batal</a>
    </form>

<?= $this->endSection(); ?>