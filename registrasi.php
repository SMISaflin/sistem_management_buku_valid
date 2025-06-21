<?php
include "koneksi.php";
  $pesanerror = "";
  $pesansukses = "";

  if(isset($_POST['regis'])){
    $email = $_POST['email'];
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registrasi WHERE user = '$user' AND password = '$password'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0){
      $pesanerror = "Username sudah digunakan!!";
    } else {
      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      $query = "INSERT INTO registrasi (email, user, password) VALUES ('$email', '$user', '$passwordHash')";
      $insert = mysqli_query($conn, $query);

      if($insert){
        $pesansukses = "Registrasi Berhasil! <a href = 'Login.php'>Silahkan login</a>";
      } else {
        $pesanerror = "Registrasi Gagal : " . mysqli_error($koneksi);
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Page</title>
  <link rel="stylesheet" href="styleee.css">
  <script>
    function tampilkanpassword() {
                var passwordField = document.getElementById("password");
                var showPasswordCheckbox = document.getElementById("howpassword");
                if (showPasswordCheckbox.checked) {
                    passwordField.type = "text";
                } else {
                    passwordField.type = "password";
                }
            }
  </script>
</head>
<body>
  <div class="container">
    <h1>Silahkan Registrasi Terlebih Dahulu</h1>
    <div class="box-input">
      <form action="" method="post">
          <p style="color: red; font-size: 15px; text-align: center"><?= $pesanerror; ?></p>
          <p style="color: green; font-size: 15px; text-align: center"><?= $pesansukses; ?></p>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>
        
        <label for="user">Username</label>
        <input type="text" name="user" id="user" required>
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        
        <div class="showpassword">
          <input type="checkbox" name="showpassword" id="showpassword" onclick="tampilkanpassword()">
          <label for="showpassword">Tampilkan Password</label>
        </div>
        
        <button type="submit" class="btn-login" name="regis">Daftar</button>
        
        <p class="register">
          Sudah mendaftar? 
          <a href="Login.php">Silakan login!!</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
