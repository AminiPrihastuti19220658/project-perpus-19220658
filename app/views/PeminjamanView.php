<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
</head>
<body>
    <h1>Daftar Peminjaman</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Denda</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peminjaman as $row) : ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['tanggalpeminjaman']; ?></td>
                    <td><?= $row['tanggalpengembalian']; ?></td>
                    <td><?= $row['denda']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>