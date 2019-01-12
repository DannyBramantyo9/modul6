<?php
require_once "./connect.php";

$sql = 'SELECT * FROM tb_siswa';
$result = mysqli_query($connect, $sql);
if ($result) {
  if (mysqli_num_rows($result)) {
    ?>
    <table border= 1 cellspascing =1 cellpadding=5>
       <tr>
         <td>#</td>
         <td widht=100>NIS</td>
         <td widht=150>NAMA</td>
         <td>Alamat</td>
       </tr>
      <?php
         $i = 1;
         while ($row = mysqli_fetch_row($result)) {
           ?>
           <tr>
             <td>
               <?php echo $i;?>
             </td>
             <td>
               <?php echo $row[0]; ?>
             </td>
             <td>
               <?php echo $row[1]; ?>
             </td>
             <td>
               <?php echo $row[2]; ?>
             </td>
           </tr>
           <?php
             $i++;
         }
       ?>
    </table>
       <?php
  }


    else {
        echo "Data tidak ditemukan";
    }
  mysqli_close($connect);
}
     ?>
