<?php
session_start();
include "connect.php";

$nis = $_POST['nis'];
$password = $_POST['password'];

if ($nis == "" || $password == "")
{
  header("location: form-login.php?error=wrong");
}
else
{
  $query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

  if($num == 1)
  {

    $_SESSION['tb_siswa'] = $nis;
    echo "<script>alert('Login Berhasil')</script>";

  }
  else
  {

    echo "<script>alert('Login Gagal')</script>";
  }
}


?>
