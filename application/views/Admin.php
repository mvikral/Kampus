<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- HEader -->
   <section class="content-header">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Admin</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </section>
<!-- isi table --> 
    <section class="content">
        <table class="table">
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Detail</th>
            <th>Hapus</th>
            <th>Edit</th>
          </tr>
            
            <?php foreach ($admin as $admin) : ?>
          <tr>
            <td><?php echo $admin->id ?></td>
            <td><?php echo $admin->username ?></td>
            <td><?php echo $admin->email ?></td>
            <td><?php echo anchor('Admin/detail/'. $admin->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')  ?></td>
            <td onclick="javascript : return confirm('Yakin hapus ?')"><?php echo anchor('admin/hapus/'.$admin->id,'<div class="btn btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
            <td><?php echo anchor('Admin/edit/'.$admin->id, '<div class="btn btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
            </td>
          </tr>
        <?php endforeach ;  ?>
        </table> 
  </section> 
 </div>