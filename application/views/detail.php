<div class="content-wrapper">
	<section class="content">
		<h4><strong>Detail Data Mahasiswa</strong></h4>
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
				<th>Jurusan</th>
				<td><?php echo $detail->Jurusan ?></td>
			</tr>
			<tr>
				<th>Kelas</th>
				<td><?php echo $detail->Kelas ?></td>
			</tr>
			<tr>
				<th>IPK</th>
				<td><?php echo $detail->IPK ?></td>
			</tr>
		</table>
		<a href="<?php echo base_url('index.php/mahasiswa/index') ?> " class="btn btn-primary">kembali</a>
	</section>
</div>