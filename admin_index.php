<?= $this->include('template/header'); ?>

<div class="container">

    <h2>Admin Artikel</h2>

    <!-- Tombol -->
    <div class="top-action">
        <a href="<?= base_url('index.php/admin/artikel/add'); ?>" class="btn-add">
            + Tambah Artikel
        </a>

        <a href="<?= base_url('index.php/artikel'); ?>" class="btn-back">
            ← Kembali
        </a>
    </div>

    <!-- Tabel -->
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($artikel as $row): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['judul']; ?></td>
                <td>
                    <?= $row['status'] ? 'Aktif' : 'Draft'; ?>
                </td>
                <td>
                    <a href="<?= base_url('index.php/admin/artikel/edit/'.$row['id']); ?>" class="btn-edit">Ubah</a>
<a href="<?= base_url('index.php/admin/artikel/delete/'.$row['id']); ?>" 
   class="btn-delete"
   onclick="return confirm('Yakin ingin menghapus artikel ini?')">
   Hapus
</a>              
  </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?= $this->include('template/footer'); ?>