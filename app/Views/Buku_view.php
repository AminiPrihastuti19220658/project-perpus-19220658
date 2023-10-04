<!-- app/Views/Buku_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
    <h1>Buku</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>tb_kategori_id </th>
                <th>tb_penerbit_id</th>
                <th>judul </th>
                <th>edisi</th>
                <th>cetakan</th>
                <th>sinopsis</th>
                <th>halaman</th>
                <th>penulis</th>
                <th>tahun</th>
                <th>cover_file</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $row) : ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['tb_kategori_id']; ?></td>
                    <td><?= $row['tb_penerbit_id']; ?></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['edisi']; ?></td>
                    <td><?= $row['cetakan']; ?></td>
                    <td><?= $row['sinopsis']; ?></td>
                    <td><?= $row['halaman']; ?></td>
                    <td><?= $row['penulis']; ?></td>
                    <td><?= $row['tahun']; ?></td>
                    <td><?= $row['cover_file']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>