<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
    <h4>Add Tafsir</h4>
    <hr class="mb-5">
    <form action="/tafsir/add" method="post" class="was-validated">
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
            <div class="form-group col-md-4">
                <label for="tafsir_resources_select">Nama Tafsir</label>
                <select id="tafsir_resources_select" class="form-control" name="tafsir_resource_id" required>
                    <option> -</option>
                    <option v-for="tafsir in tafsir_resources" :key="tafsir.id" v-bind:value="tafsir.id">{{ tafsir.name
                        }}
                    </option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12" id="info"></div>
            <label for="tafsir">Uraian Tafsir</label>
            <textarea type="text" class="form-control texteditor" id="tafsir" name="content"
                      rows="7"></textarea>
        </div>
        <button class="btn btn-4 px-4 mr-2" type="submit">Simpan</button>
        <a href="<?= base_url(); ?>/tafsir" class="btn btn-4 px-4">Batal</a>
    </form>

<?= $this->endSection(); ?>