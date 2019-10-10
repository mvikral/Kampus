  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/D2logo.jpg" alt="D2logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dota 2 University</span>
    </a>


  <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/mahasiswa/index') ?> " class="nav-link">
              <i class="fa fa-graduation-cap"></i>
              <p>Mahasiswa</p>
            </a>
          </li>
                    <li class="nav-item">
            <a href="<?php echo base_url('Admin/index') ?> " class="nav-link">
              <i class="fa fa-user"></i>
              <p>Admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('auth') ?> " class="nav-link">
              <i class="fa fa-lock"></i>
              <p>Penambahan Admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fa fa-sign-out"></i>
              <p>Exit</p>
            </a>
          </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>