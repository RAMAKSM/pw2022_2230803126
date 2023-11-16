
<?php
    $mahasiswa = 
    [
        [
        "nama" => "joni",
        "nim" => "123456",
        "jurusan" => "sistem informasi",
        "email" => "joni@gmail.com"
    ],
    [
        "nama" => "budi",
        "nim" => "31456",
        "jurusan" => "sistem informasi",
        "email" => "budi@gmail.com"
    ]
    ];
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
            <li>
                <img src="3.jpg" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nim : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        <?php endforeach; ?>      
    </body>
    </html>