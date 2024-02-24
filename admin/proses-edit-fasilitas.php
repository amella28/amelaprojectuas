<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['fasilitas_id'];
$nama=$_POST['nama'];
$keterangan=$_POST['keterangan'];


$ubah=$koneksi->query("update Fasilitas set nama='$nama', keterangan='$keterangan' where fasilitas_id='$id'");

if($ubah==true){

    header("location:tampil-fasilitas.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>