<?php

$koneksi = new PDO("mysql:host=localhost;dbname=sekolah","root","");

$koneksi->query("UPDATE `siswa` SET `id`='456',`nama`='yusatrio' WHERE 1");
if(isset($_POST['simpandata'])){
   $Id = $_POST['Data Siswa'];
    $namasiswa = $_POST['Nama'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Siswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

<div class="container"  style="margin-top:50px"> 
  <h2>Tambah Data Siswa</h2>
  <form method="post">
    <div class="form-group">
      <label for="Data Siswa">Id</label>
      <input type="Number" class="form-control" id="Data Siswa" placeholder="Masukan Id mu" name="Data Siswa">
    </div>
    <div class="form-group">
      <label for="Nama">Nama Siswa</label>
      <input type="Text" class="form-control" id="Nama" placeholder="Masukan Nama Siswa" name="Nama">
    </div>

    <button type="submit" name="simpandata" class="btn btn-primary">Save</button>
  </form>
</div>

</body>
</html>
    