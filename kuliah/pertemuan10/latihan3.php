<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Daftar Mahasiswa</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
  
  <h3>Daftar Mahaasiswa</h3>

  <a href="">Tambah data mahasiswa</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php  $i=1;
    foreach($mahasiswa as $mhs) :  ?>

    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $mhs['gambar']; ?> " width="60"></td>
      <td><?= $mhs['nama']; ?></td>
      <td>
        <a href="">lihat detail</a>
      </td>

      <td>
        <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Hasil</a>
      </td>
    </tr>

    <?php endforeach; ?>

  </table>

</body>
</html>