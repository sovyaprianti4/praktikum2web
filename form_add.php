<?= $this->include('template/header'); ?>

<div class="container">
    <div class="card">
        <h2>Tambah Artikel</h2>

        <form action="<?= base_url('index.php/admin/artikel/save'); ?>" method="post">

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" placeholder="Masukkan judul artikel" required>
            </div>

            <div class="form-group">
                <label>Isi</label>
                <textarea name="isi" placeholder="Masukkan isi artikel..." required></textarea>
            </div>

            <button type="submit" class="btn-submit">Simpan</button>
        </form>
    </div>
</div>

<?= $this->include('template/footer'); ?>