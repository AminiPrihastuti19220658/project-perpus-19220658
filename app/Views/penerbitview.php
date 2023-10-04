<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penerbit</title>
</head>
<body>
    <h1>Daftar Penerbit</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($publishers)): ?>
                <?php foreach ($publishers as $publisher): ?>
                    <tr>
                        <td><?= $publisher['id']; ?></td>
                        <td><?= $publisher['name']; ?></td>
                        <td><?= $publisher['address']; ?></td>
                        <td><?= $publisher['phone']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Tidak ada data penerbit.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
