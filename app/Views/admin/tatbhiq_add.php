<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
    <h4>Add Tatbhiq</h4>
    <hr class="mb-5">
    <form method="post" action="/tatbhiq/add" class="need_validation">
        <div class="form-row" id="admin">
            <div class="form-group col-md-4">
                <label for="surat">Surat</label>
                <select id="surat" class="form-control" name="chapter_id" required>
                    <option> -</option>
                    <option v-for="chapter in chapters" :key="chapter.id" v-bind:value="chapter.id">{{ chapter.id }} -
                        {{ chapter.name_simple }}
                    </option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="ayat">Ayat</label>
                <select id="ayat" class="form-control" name="ayat" required>
                    <option v-for="ayat in ayatke" :key="ayat"> {{ayat}}</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12" id="ayat_tajwid"></div>
            <div class="col-md-12" id="info"></div>
        </div>
        <div class="form-group">
            <label for="tatbhiq">Uraian Tatbhiq</label>
            <textarea type="text" class="form-control texteditor" id="tatbhiq" name="content" rows="7"></textarea>
        </div>
        <button class="btn btn-4 px-4 mr-2">Simpan</button>
        <a href="<?= base_url(); ?>/tatbhiq" class="btn btn-4 px-4">Batal</a>
    </form>


<?= $this->endSection(); ?>