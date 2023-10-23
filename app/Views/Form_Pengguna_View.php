<!-- app/Views/Form_pengguna_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengguna</title>
</head>
<body>
    <h1>Form Pengguna</h1>
    <form action="/proses_pengguna" method="post">
        <!-- Form Pengguna Content -->
        <label for="username">Nama Pengguna:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
