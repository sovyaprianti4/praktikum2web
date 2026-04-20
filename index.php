<?= $this->include('template/header'); ?>
<form method="get" action="<?= base_url('/artikel'); ?>" class="search-box">
    <input type="text" name="q" placeholder="Cari artikel..." value="<?= $keyword ?? ''; ?>">
    <button type="submit">Cari</button>
</form>
<h2 class="title">Daftar Artikel</h2>

<div class="artikel-container">
    <?php foreach ($artikel as $row): ?>
        <div class="artikel-card">
            <h3>
                <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
                    <?= $row['judul']; ?>
                </a>
            </h3>

            <p>
                <?= substr($row['isi'], 0, 120); ?>...
            </p>

            <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="btn-baca">
                Baca Selengkapnya →
            </a>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->include('template/footer'); ?>