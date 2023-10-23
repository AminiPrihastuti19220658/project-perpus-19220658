<!DOCTYPE html>
<html>
<head>
    <title>Create Pengguna</title>
</head>
<body>

<h1>Create Pengguna</h1>

<form action="<?= base_url('pengguna/create') ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label for="emailpengguna">Email Pengguna</label>
    <input type="text" name="email" value="<?=$data['email'] ?? ''?>" required><br>

    <label for="nama_lengkap_pengguna">Nama Lengkap Pengguna</label>
    <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap'] ?? ''?>" required><br>

    <label for="kata_sandi">Kata Sandi</label>
    <input type="text" name="kata_sandi" value="<?=$data['kata_sandi'] ?? ''?>" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>