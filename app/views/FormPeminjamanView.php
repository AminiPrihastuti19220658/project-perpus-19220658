<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
</head>
<body>
    <h1>Form Peminjaman</h1>
    
    <?php if(isset($peminjaman)): ?>
        <!-- Form untuk edit peminjaman -->
        <?= form_open('/peminjaman/update/'.$peminjaman['id']); ?>
    <?php else: ?>
        <!-- Form untuk tambah peminjaman -->
        <?= form_open('/peminjaman/store'); ?>
    <?php endif; ?>
    
    <label for="id_anggota">ID Anggota:</label>
    <input type="text" name="id_anggota" id="id_anggota" 
           value="<?= isset($peminjaman) ? $peminjaman['id_anggota'] : ''; ?>" required>
    
    <label for="id_buku">ID Buku:</label>
    <input type="text" name="id_buku" id="id_buku" 
           value="<?= isset($peminjaman) ? $peminjaman['id_buku'] : ''; ?>" required>

    <label for="tanggal_pinjam">Tanggal Pinjam:</label>
    <input type="text" name="tanggal_pinjam" id="tanggal_pinjam" 
           value="<?= isset($peminjaman) ? $peminjaman['tanggal_pinjam'] : ''; ?>" required>

    <label for="tanggal_kembali">Tanggal Kembali:</label>
    <input type="text" name="tanggal_kembali" id="tanggal_kembali" 
           value="<?= isset($peminjaman) ? $peminjaman['tanggal_kembali'] : ''; ?>" required>
    
    <button type="submit"><?= isset($peminjaman) ? 'Update' : 'Tambah'; ?> Peminjaman</button>
    
    <?= form_close(); ?>
    
</body>
</html>
