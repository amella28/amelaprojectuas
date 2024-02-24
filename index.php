<?php include "Header.php";?>
<!-- Awal script Slider/ Carousel -->
		
		<div id="contoh-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#contoh-carousel" data-slide-to="1"></li>
        <li data-target="#contoh-carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
      	<!-- Awal script Slider pertama -->
        <div class="item active">
          <img src="foto/1.jpg" alt="Berisi keterangan gambar">
          <div class="carousel-caption"> 
          	<h1>Desa Kotasan</h1>
            <h4>Desa Maju Rakyat Makmur</h4>
            <p>Selamat Datang Di Desa Kotasan</p>
            <a href="detail_slider1.html"></a>
          </div>
        </div><!-- Akhir script Slider pertama -->
        	<!-- Awal script Slider kedua -->
        <div class="item">
          <img src="foto/pemandangan.jpg" alt="Berisi keterangan gambar">
          <div class="carousel-caption">
            <h1>Desa Kotasan</h1>
            <h4>Desa Maju Rakyat Makmur</h4>
            <p>Selamat Datang Di Desa Kotasan</p>
          </div>
        </div><!-- Akhir script Slider kedua -->
				<!-- Awal script Slider ketiga -->
        <div class="item">
          <img src="foto/3.jpg"  width="100%" heiht="10px"alt="Berisi keterangan gambar">
          <div class="carousel-caption">
            <h1>Desa Kotasan</h1>
            <h4>Desa Maju Rakyat Makmur</h4>
            <p>Selamat Datang Di Desa Kotasan</p>
          </div>
        </div><!-- Akhir script Slider ketiga -->
    </div>
		<!-- Awal script Button Geser Kiri dan Kanan -->
    <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
		
    <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a><!-- Akhir script Button Geser Kiri dan Kanan -->
		
    </div><!-- Akhir script Slider/Carousel -->
    <!-- jumbotron -->
    <div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">

						<h2><b>Desa Kotasan</b> </h2>
						<p>Desa adalah pemukiman atau komunitas manusia yang berkelompok,
						Lebih besar dari dusun tetapi lebih kecil dari kota, dengan 
						populasi biasanya berkisar dari beberapa ratus hingga beberapa ribu.
						masyarakat desa adalah sekelompok orang atau individu yang tinggal  disuatu tempat dan saling terkait satu sama yang lain. 
						Biasanya dalam suatu masyarakat desa akan terjadi interaksi 
						yang teratur atau terstruktur Salah satu nya ialah Desa Kotasan. Desa Kotasan merupakan salah satu desa yang ada di kecamatan Galang, Kabupaten Deli Serdang, provinsi Sumatra Utara, Indonesia. Desa ini memiliki tujuh dusun dan memiliki dua masjid,tiga mushola,empat sekolah dasar dan memiliki lapangann sepak bola yang sangat luas bersebelahan dengan pemakaman umum yang berada diperbatasan dusun empat dan dusun lima. </p>
						<p><a class="btn btn-warning btn-lg" href="selengkapnya.php" role="button">Selengkapnya</a>
						</p>
					</div>
      		</div>
		</div>
	</div><!-- Akhir Jumbotron -->
	<!-- info kotasan -->
	<div class="container">
	<div class="row">
	<div class="panel panel-default">
		<div class="panel-body">
		<center><h2 style="text-muted">Info Seputar Desa Kotasan</h2></center>
				<div class="row">
					<div class="col-md-6">
					<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
						<h4>Perumahan Desa Kotasan</h4>
						<img src="foto/per.jpg" class="img-thumbnail img-responsive">
						<p> <b> <h3> Griya Kotasan Asri </b> <br>
						<br>Status Rumah Subsidi : 29 Unit <br>
						Terjual Subsidi : 75 Unit <br>
						Komersil : 0 Unit <br>
						Terjual Komersil : 0 Unit <br> </h3>
						<a class="btn btn-danger btn-xs" href="https://sikumbang.tapera.go.id/lokasi-perumahan/LBP1920262020T001"role="button" target="_blank"role="button">Info Pemesanan</a></p>
					</div>
				<div class="row">
					<div class="col-md-6">
					<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
						<h4>Sd 10195 Kotasan</h4>
						<img src="foto/yuy.jpg" width="400" class="img-thumbnail img-responsive">
						<p> <b> <h3>Sd 101965 Kotasan </b> <br>
						<br>Guru : 9 <br>
  						Siswa Laki-laki : 79 <br>
  						Siswa Perempuan : 70 <br></h3>
						<a class="btn btn-danger btn-xs" href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/10c5bed7-2ef5-e011-b9c6-b36b8e9c2be9"role="button" target="_blank">Info Selengkapnya</a></p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Akhir Panel -->
	<?php include "footer.php"; ?>