<?php
$mahasiswa = [
    ["joni","123456", "Sistem Informasi","joni@gmail.com"],
    ["budi","654321", "teknik informatika","budi@gmail.com"],
    ["angga","789654", "ilmu komputer","angga@gmail.com"],
    ["rio","896546", "teknik jaringan","rio@gmail.com"],

]
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
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li>

    </ul>
    <?php endforeach; ?>
</body>
</html>