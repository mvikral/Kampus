<div class="content-wrapper">
	<section class="content">
		<h4><strong>Detail Data Admin</strong></h4>
		<table class="table">
			<tr>
				<th>Nama Lengkap</th>
				<td><?php echo $detail->Nama ?></td>
			</tr>
			<tr>
				<th>Nomor Telephon</th>
				<td><?php echo $detail->Tlp ?></td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td><?php echo $detail->Alamat ?></td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<td><?php echo $detail->Tgl_lahir ?></td>
			</tr>
			<tr>
				<th>username</th>
				<td><?php echo $detail->username ?></td>
			</tr>
			<tr>
				<th>email</th>
				<td><?php echo $detail->email ?></td>
			</tr>
			<tr>
				<th>password</th>
				<td><?php echo $detail->password ?></td>
			</tr>
		</table>
		<a href="<?php echo base_url('index.php/admin/index') ?> " class="btn btn-primary">kembali</a>
	</section>
</div>