<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Selamat Datang</title>
</head>
<body>

<h2>Koe Lanang Mass</h2>

<form method="post" action="">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" required>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nama dari input
    $name = htmlspecialchars($_POST['name']);
    echo "<h3>Selamat datang, $name!</h3>";
}
?>

</body>
</html>