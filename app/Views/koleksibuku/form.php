<!DOCTYPE html>
<html>
<head>
    <title>Create Koleksi Buku</title>
</head>
<body>

<h1>Create Koleksi Buku</h1>

<form action="<?= base_url('koleksibuku/create') ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label for="nomor_koleksi">Nomor Koleksi</label>
    <input type="text" name="nomor_koleksi" value="<?=$data['nomor_koleksi'] ?? ''?>" required><br>

    <label for="status_koleksi">Status Koleksi</label>
    <input type="text" name="status_koleksi" value="<?=$data['status_koleksi'] ?? ''?>" required><br>
    
    <label for="tb_buku_id">Judul Buku</label>
    <input type="text" name="tb_buku_id" value="<?=$data['tb_buku_id'] ?? ''?>" required><br>


    <input type="submit" value="Submit">
</form>

</body>
</html>