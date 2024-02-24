<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "Header.php";?>
<div class="container">
		<div class="row">
			<div class="col-md-8">	
				<form action="proses-input-fasilitas.php" method="post">
					<div class="form-group">
						<h3>Fasilitas Desa</h3>
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Fasilitas">
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan:</label>
						<textarea name="keterangan" id="editor"></textarea>
            <script>
    CKEDITOR.replace('editor', {
      removePlugins: 'easyimage',
      removeButtons: 'PasteFromWord',
     
      
      filebrowserUploadUrl: 'upload-image-fasilitas.php',
      filebrowserUploadMethod: 'form'
    });
  </script>
						
					</div>
					<button type="submit" class="btn btn-info">Simpan</button>
					<button type="reset" class="btn btn-danger">Batal</button>
				</form>
		</div>
	</div>
</div>
<?php include "footer.php";?>