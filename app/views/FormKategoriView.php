<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kategori</title>
</head>
<body>
    <h1>Form Kategori</h1>
    
    <?php if(isset($kategori)): ?>
        <!-- Form untuk edit kategori -->
        <?= form_open('/kategori/update/'.$kategori['id']); ?>
    <?php else: ?>
        <!-- Form untuk tambah kategori -->
        <?= form_open('/kategori/store'); ?>
    <?php endif; ?>
    
    <label for="nama_kategori">Nama Kategori:</label>
    <input type="text" name="nama_kategori" id="nama_kategori" 
           value="<?= isset($kategori) ? $kategori['nama_kategori'] : ''; ?>" required>
    
    <button type="submit"><?= isset($kategori) ? 'Update' : 'Tambah'; ?> Kategori</button>
    
    <?= form_close(); ?>
    
</body>
</html>
