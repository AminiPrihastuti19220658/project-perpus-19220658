<!DOCTYPE html>
<html>
<head>
    <title>Create Peminjaman</title>
</head>
<body>

<h1>Create Peminjaman</h1>
 
<form action="<?= base_url('peminjaman/create') ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />

    <label for="buku">Nama Buku</label>
    <input type="text" name="tb_buku_id" value="<?=$data['tb_buku_id'] ?? ''?>" required><br>

    <label for="tgl_peminjaman_buku">Tanggal Peminjaman</label>
    <input type="text" name="tgl_peminjaman" value="<?=$data['tgl_peminjaman'] ?? ''?>" required><br>

    <label for="tgl_pengembalian_buku">Tanggal Pengembalian</label>
    <input type="text" name="tgl_pengembalian" value="<?=$data['tgl_pengembalian'] ?? ''?>" required><br>

    <label for="dendabuku">Denda</label>
    <input type="text" name="denda" value="<?=$data['denda'] ?? ''?>" required><br>
    
    <label for="petugas">Petugas</label>
    <input type="text" name="tb_pengguna_id_peminjaman" value="<?=$data['tb_pengguna_id_peminjaman'] ?? ''?>" required><br>

    <label for="peminjam">Peminjam</label>
    <input type="text" name="tb_anggota_id" value="<?=$data['tb_anggota_id'] ?? ''?>" required><br>

    <label for="koleksi">Koleksi</label>
    <input type="text" name="tb_koleksibuku_id" value="<?=$data['tb_koleksibuku_id'] ?? ''?>" required><br>


    <input type="submit" value="Submit">
</form>

</body>
</html>