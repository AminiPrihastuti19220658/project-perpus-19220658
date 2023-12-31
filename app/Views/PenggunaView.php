<!-- app/Views/Pengguna_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
</head>
<body>
    <h1>Daftar Pengguna</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengguna as $row) : ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td><?= $row['email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
