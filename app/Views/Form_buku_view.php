<!DOCTYPE html>
<html>
<head>
    <title>Form Buku View</title>
</head>
<body>
    <h1>Form Buku View</h1>
    <form action="proses_form.php" method="POST">
        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" required><br><br>

        <label for="penulis">Penulis:</label>
        <input type="text" id="penulis" name="penulis" required><br><br>

        <label for="penerbit">Penerbit:</label>
        <input type="text" id="penerbit" name="penerbit" required><br><br>

        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" id="tahun_terbit" name="tahun_terbit" required><br><br>

        <input type="submit" value="Tampilkan Buku">
    </form>
</body>
</html>