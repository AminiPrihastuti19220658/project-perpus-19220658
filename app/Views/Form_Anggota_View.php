<!-- app/Views/Form_anggota_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Anggota</title>
</head>
<body>
    <h1>Form Anggota</h1>
    <form action="/proses_anggota" method="post">
        <!-- Form Anggota Content -->
        <label for="nama">Nama Anggota:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
