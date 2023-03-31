<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Detail Mahasiswa</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
  
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/akucantik.jpg" width="100"></li>
    <li>NRP : 2130511089</li>
    <li>Nama : Putri Ramadani</li>
    <li>Email : mettdo@gmail.com</li>
    <li>Jurusan : Teknik Informatika</li>
    <li><a href="ubah.php?id= <?= $mhs['id']; ?>">ubah</a> | <a href="hapus.php?id= <?= $mhs['id']; ?>" onclick="return confirm 
    ('Apakah anda yakin?');"> hapus</a></li>
    <li> <a href="index.php">Kembali ke daftar mahsiswa</a> </li>
  </ul>

</body>
</html>