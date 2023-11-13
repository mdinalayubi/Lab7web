<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
    <h1>Menggunakan Variable</h1>
    <?php
    $nim = "312210293";
    $nama = 'Muhammad Din Al Ayubi';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
    <h1>Predefine Variable</h1>
    <?php
    echo "Selamat Datang " . $_GET ["nama"];
    ?>
</body>
</html>