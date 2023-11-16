<?php
$mahasiswa = ["joni","123456", "Sistem Informasi","joni@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
            <?php endforeach; ?>
    </ul>

</body>
</html>