<?php 

session_start();

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombo; cai di klik
if(isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

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

  <a href="logout.php">Logout</a>
  
  <h3>Daftar Mahaasiswa</h3>

  <a href="tambah.php">Tambah data mahasiswa</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian..." 
    autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if(empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style:italic;">data mahasiswa tidak ditemukan!</p>
      </td>
    </tr>
    <?php endif; ?>

    <?php  $i=1;
    foreach($mahasiswa as $mhs) :  ?>

    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $mhs['gambar']; ?> " width="60"></td>
      <td><?= $mhs['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a>
      </td>
    </tr>

    <?php endforeach; ?>

  </table>

</body>
</html>