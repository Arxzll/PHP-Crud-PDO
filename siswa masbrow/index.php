<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $koneksi = new PDO ('mysql: host=localhost;dbname=sekolah','root'.'');
    $query = $koneksi ->query('select * from siswa');
    $data = $query->fetchAll();
    ?>
    <h1>List Data Siswa</h1>
    <?php foreach ($data as $data) : ?>
    <p>Username : <?= $data['Username']?> </p>
    <p>Nama : <?= $data['Nama']?></p>
    <p>Password :<?= $data['Password']?></p>
    <hr>
    <?php endforeach ?>
</body>
</html>