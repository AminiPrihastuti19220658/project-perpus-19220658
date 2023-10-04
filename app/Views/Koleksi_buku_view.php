<!-- app/Views/KoleksiBuku_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku</title>
</head>
<body>
    <h1>Koleksi Buku</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>tb_buku_id</th>
                <th>nomor_koleksi</th>
                <th>status_koleksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($koleksibuku as $row) : ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['tb_buku_id']; ?></td>
                    <td><?= $row['nomor_koleksi']; ?></td>
                    <td><?= $row['status_koleksi']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>