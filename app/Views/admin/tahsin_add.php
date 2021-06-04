<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
    <h4>Add Tahsin</h4>
    <hr class="mb-5">
    <form action="/tahsin/add" method="post" class="need_validation">
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
            <label for="tahsin">Uraian Tahsin & Tajwid</label>
            <textarea type="text" class="form-control texteditor" id="tahsin" name="content" rows="7"
                      ></textarea>
        </div>
        <div class="form-group">
            <label for="link_youtube">ID Video Youtube</label>
            <input type="text" class="form-control" id="link_youtube" name="link_youtube"
                   placeholder="masukan id video youtube contoh : PO00R3xIciU" required>
        </div>
        <button type="submit" class="btn btn-4 px-4 mr-2">Simpan</button>
        <a href="<?= base_url(); ?>/tahsin" class="btn btn-4 px-4">Batal</a>
    </form>
<?= $this->endSection(); ?>