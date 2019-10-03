<div class="content-wrapper">
	<section class="content">
		<?php foreach ($mahasiswa as $mhs){ ?>
		 <form action="<?php echo base_url().'mahasiswa/update';  ?>" method="post">
		 	
		 	<div class="form-group">
		 		<label>Nama Mahasiswa</label>
		 		<input type="hidden" name="NPM" class="form-control" value=" <?php echo $mhs->NPM ?>">
		 		<input type="text" name="Nama" class="form-control" value=" <?php echo $mhs->Nama?>">
		 	</div>
		 	<div class="form-group">
		 		<label>Nomor telephon</label>
		 		<input type="text" name="Tlp" class="form-control" value=" <?php echo $mhs->Tlp?>">
		 	</div>
		 	<div class="form-group">
		 		<label>Alamat</label>
		 		<input type="text" name="Alamat" class="form-control" value=" <?php echo $mhs->Alamat?>">
		 	</div>
		 	<div class="form-group">
		 		<label>Tanggal lahir (dd-mm-yyyy)</label>
		 		<input type="text" name="Tgl_lahir" class="form-control" value=" <?php echo $mhs->Tgl_lahir?>">
		 	</div>

		 	<button type="submit" class="btn btn-primary">Simpan</button>
		 	<button type="reset" class="btn btn-danger">Reset</button> 

		 </form>
		<?php } ?>
	</section>
</div>