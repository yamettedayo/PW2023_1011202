<?php 
// koneksi ke Database dan pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_1011202');

//Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


//Ubah data ke dalam bentuk array
//$row = mysqli_fetch_row($result); //array numerik
//$row = mysqli_fetch_assoc($result); //array associative
//$row = mysqli_fetch_array($result); //keduanya
//var_dump($row);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

var_dump($rows);
//Tampung ke variable Mahasiswa
$mahasiswa = $rows;

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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php  $i=1;
    foreach($mahasiswa as $mhs) :  ?>

    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $mhs['gambar']; ?> " width="60"></td>
      <td><?= $mhs['nrp']; ?></td>
      <td><?= $mhs['nama']; ?></td>
      <td><?= $mhs['email']; ?></td>
      <td><?= $mhs['jurusan']; ?></td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>

    <?php endforeach; ?>

  </table>

</body>
</html>