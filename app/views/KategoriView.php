<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
</head>
<body>
    <h1>Daftar Kategori</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Kategori DDC</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kategori as $row) : ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><?= $row['kategoriddc']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>