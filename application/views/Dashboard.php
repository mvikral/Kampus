<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- HEader -->
   <section class="content-header">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Mahasiswa</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </section>
<!-- isi table --> 
    <section class="content">
        <button btn class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
        <table class="table">
          <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Nomor telephon</th>
            <th>Alamat</th>
            <th>Tanggal lahir</th>
            <th>Hapus</th>
            <th>Edit</th>
          </tr>
            
            <?php foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <td><?php echo $mhs->NPM?></td>
            <td><?php echo $mhs->Nama ?></td>
            <td><?php echo $mhs->Tlp ?></td>
            <td><?php echo $mhs->Alamat ?></td>
            <td><?php echo $mhs->Tgl_lahir ?></td>
            <td onclick="javascript : return confirm('Yakin hapus ?')"><?php echo anchor('mahasiswa/hapus/'.$mhs->NPM,'<div class="btn btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

            <td><?php echo anchor('mahasiswa/edit/'.$mhs->NPM, '<div class="btn btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
            </td>
          </tr>
        <?php endforeach ;  ?>
        </table> 
  </section> 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Mahasiswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
       <form method="post" action="<?php echo base_url(). 'mahasiswa/tambah_data'; ?>">
        <div class="form-group">
           <label>Nama Mahasiswa</label>
           <input type="text" name="Nama" class="form-control">
         </div>
        <div class="form-group">
           <label>Nomor Telephon</label>
           <input type="text" name="Tlp" class="form-control">
         </div>
        <div class="form-group">
           <label>Alamat</label>
           <input type="text" name="Alamat" class="form-control">
         </div>
        <div class="form-group">
           <label>Tanggal Lahir</label>
           <input type="text" name="Tgl_lahir" class="form-control">
         </div>
    <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
       </form>
      </div>

    </div>
  </div>
</div>
 </div>