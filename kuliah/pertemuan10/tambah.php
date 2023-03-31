<?php 
  require 'functions.php';

  if (isset ($_POST['tambah'])){
    if (tambah($_POST) > 0 ) {
      echo "<script>
              alert('Data Berhasil Ditambahkan!');
              document.location.href = 'latihan3.php';
            </script>";
    } else {
      echo "data gagal ditambahkan!";
    }
  }

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Tambahn Data Mahasiswa</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
  
  <h3>Form Tambahn Data Mahasiswa</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambahn data</button>
      </li>
    </ul>
  </form>

</body>
</html>