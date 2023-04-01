<?php 
require 'functions.php'; 

if(isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('username baru berhasi ditambhakan. Silahkan Login');
              document.location.href = 'login.php';
            </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Form Registrasi</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
  <h3>Form registrasi</h3>

  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password : 
          <input type="password" name="password1" required>
        </label>
      </li>
      <li>
        <label>
          Konfirmasi Password : 
          <input type="password" name="password2" required>
        </label>
      </li>
      <li>
        <button type="submit" name="registrasi">Registrasi</button>
      </li>
    </ul>
  </form>

</body>
</html>