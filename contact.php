
<?php include "Header.php";?>
<div class="container">
		<div class="row">
			<div class="col-md-12">
			 <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Pesan Berhasil Terkirim!
                    </div>
            <?php

            }

            ?>
			<form action="proses_contact.php" method="post">
				<center><p> <h2> KRITIK DAN SARAN AGAR DESA KOTASAN MAKMUR SEJAHTERA </h1></p></center>
				<div class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama"placeholder="isikan Nama Lengkap ">
				</div>
				<div class="form-group">
				<label for="email">Email</label>
				<input type="Email" class="form-control" name="email"placeholder="isikan Email">
				</div>
				<div class="form-group">
				<label for="pesan">Pesan</label>
				<textarea name="pesan"class="form-control"placeholder="isikan Pesan Anda"></textarea>
				</div>
				<button type="submit" class="btn btn-info">Kirim</button>
				<button type="reset" class="btn btn-danger">Batal</button>
			</form>
			</div>
		</div>
	</div> 
</div>

<?php include "footer.php"; ?>