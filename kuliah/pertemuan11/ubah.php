<?php 
  require 'functions.php';

  //jika tidak ada id di url
  if(!isset($_GET['id'])){
    header("Location: index.php");
    exit;
  }

  //ambi id dari url
  $id = $_GET['id'];

  //query mahasiswa berdasarkan id
  $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");


  //cek apakah tombol ubah sudah ditekan

  if (isset ($_POST['ubah'])){
    if (ubah($_POST) > 0 ) {
      echo "<script>
              alert('Data Berhasil Diubah!');
              document.location.href = 'latihan3.php';
            </script>";
    } else {
      echo "data gagal diubah!";
    }
  }

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Ubah Data Mahasiswa</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
  
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="post">
    <input type="hidden" name="id"  value="<?= $mhs['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $mhs['nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required value="<?= $mhs['nrp']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required value="<?= $mhs['email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $mhs['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah data</button>
      </li>
    </ul>
  </form>

</body>
</html>