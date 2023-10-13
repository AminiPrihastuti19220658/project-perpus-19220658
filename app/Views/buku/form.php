<!DOCTYPE html>
<html>
<head>
    <title>Create Buku</title>
</head>
<body>

<h1>Create buku</h1>

<form action="<?= base_url('buku/create') ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label for="judul">Judul Buku</label>
    <input type="text" name="judul" value="<?=$data['judul'] ?? ''?>" required><br>

    <label for="edisi">Edisi</label>
    <input type="text" name="edisi" value="<?=$data['edisi'] ?? ''?>" required><br>
   
    <label for="cetakan">Cetakan</label>
    <input type="text" name="cetakan" value="<?=$data['cetakan'] ?? ''?>" required><br>

    <label for="sinopsis">Sinopsis</label>
    <input type="text" name="sinopsis" value="<?=$data['sinopsis'] ?? ''?>" required><br>

    <label for="halaman">Halaman</label>
    <input type="text" name="halaman" value="<?=$data['halaman'] ?? ''?>" required><br>

    <label for="penulis">Penulis</label>
    <input type="text" name="penulis" value="<?=$data['penulis'] ?? ''?>" required><br>
    
    <label for="tahun">Tahun</label>
    <input type="text" name="tahun" value="<?=$data['tahun'] ?? ''?>" required><br>

    <label for="cover_file">Cover file</label>
    <input type="text" name="cover_file" value="<?=$data['cover_file'] ?? ''?>" required><br>
   
    <label for="tb_kategori_id">Kategori Buku</label>
    <input type="text" name="tb_kategori_buku" value="<?=$data['tb_kategori_buku'] ?? ''?>" required><br>

    <label for="tb_penerbit_id">Penerbit Buku</label>
    <input type="text" name="tb_penerbit_id" value="<?=$data['tb_penerbit_id'] ?? ''?>" required><br>



    <input type="submit" value="Submit">
</form>

</body>
</html>