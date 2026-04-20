<?= $this->include('template/header'); ?>

<h2><?= $artikel['judul']; ?></h2>

<p><?= $artikel['isi']; ?></p>

<!-- Tombol Kembali -->
<a href="<?= base_url('/artikel'); ?>" class="btn-kembali">
    ← Kembali ke Daftar Artikel
</a>

<?= $this->include('template/footer'); ?>