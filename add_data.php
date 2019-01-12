<!DOCTYPE html>
<html>
  <head>
    <title>TAMBAH DATA</title>
  </head>
  <body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <table>
        <tr>
          <td>NIS</td>
          <td><input type="text" name="nis"/></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" size="40"/></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat"/></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="Simpan"/></td>
        </tr>
      </table>
    </form>
  </body>
</html>

<!---PHP script begin --->
<?php
  require_once "./connect.php";

  //jika field nis dan nama diisi lalu disubmit
  if(isset($_POST['nis']) && isset($_POST['nama']))
  {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    //tambahkan data baru ke tabel
    $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "', '" .$nama. "', '" .$alamat. "')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
      echo "Data berhasil ditambahakan";
    }
    else {
      echo "Gagal menambahkan data <br />";
      echo mysqli_error($connect);
    }
  }

  echo "<hr />";
  //memanggil file record.php untuk menampilkan hasil
  require_once "./record.php";
 ?>
