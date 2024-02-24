<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$keterangan=$_POST['keterangan'];

include "../koneksi.php";

$simpan=$koneksi->query ("INSERT INTO Fasilitas (`nama`, `keterangan`) VALUES ('$nama','$keterangan')");

if($simpan==true){

    header("location:tampil-fasilitas.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>