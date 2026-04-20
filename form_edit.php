<?= $this->include('template/header'); ?>

<div class="container">
    <div class="card">
        <h2>Edit Artikel</h2>

        <form action="<?= base_url('index.php/admin/artikel/update/'.$artikel['id']); ?>" method="post">

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" value="<?= $artikel['judul']; ?>" required>
            </div>

            <div class="form-group">
                <label>Isi</label>
                <textarea name="isi" required><?= $artikel['isi']; ?></textarea>
            </div>

            <div class="button-group">
                <button type="submit" class="btn-submit">Update</button>
                <a href="<?= base_url('index.php/admin/artikel'); ?>" class="btn-back">Kembali</a>
            </div>

        </form>
    </div>
</div>

<?= $this->include('template/footer'); ?>