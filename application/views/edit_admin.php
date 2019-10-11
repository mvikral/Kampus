<div class="content-wrapper">
	<section class="content">
		<?php foreach ($admin as $admin){ ?>
		 <form action="<?php echo base_url().'index.php/admin/update';  ?>" method="post">
		 	
		 	<div class="form-group">
		 		<label>Nama Admin </label>
		 		<input type="hidden" name="id" class="form-control" value=" <?php echo $admin->id ?>">
		 		<input type="text" name="Nama" class="form-control" value=" <?php echo $admin->Nama?>">
		 	</div>
		 	<div class="form-group">
		 		<label>Nomor telephon</label>
		 		<input type="text" name="Tlp" class="form-control" value=" <?php echo $admin->Tlp?>">
		 	</div>
		 	<div class="form-group">
		 		<label>Alamat</label>
		 		<input type="text" name="Alamat" class="form-control" value=" <?php echo $admin->Alamat?>">
		 	</div>
		 	<div class="form-group">
		 		<label>Tanggal lahir (dd-mm-yyyy)</label>
		 		<input type="text" name="Tgl_lahir" class="form-control" value=" <?php echo $admin->Tgl_lahir?>">
		 	</div>
		 	<div class="form-group">
		 		<label>Username</label>
		 		<input type="text" name="username" class="form-control" value=" <?php echo $admin->username	?>">
		 	</div>
		 	<div class="form-group">
		 		<label>email</label>
		 		<input type="text" name="email" class="form-control" value=" <?php echo $admin->email?>">
		 	</div>
		 	<div class="form-group">
		 		<label>paswword</label>
		 		<input type="text" name="password" class="form-control">
		 	</div>
		 	<button type="submit" class="btn btn-primary">Simpan</button>
		 	<button type="reset" class="btn btn-danger">Reset</button> 

		 </form>
		<?php } ?>
	</section>
</div>