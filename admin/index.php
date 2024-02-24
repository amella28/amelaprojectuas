<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "Header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<p>Ini adalah website Desa Kotasan, Website ini sebagai project sederhana yang dilaksanakan untuk memenuhi Ujian Akhir Semester pada Mata Kuliah Pemrograman web 2 dan Semoga Mendapatkan Nilai yag bagus,,Aamiin</p>
					</div>
            </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>