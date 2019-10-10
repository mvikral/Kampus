<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

    <title>Register page</title>
  </head>
  <body>
<div class="content-wrapper">
    <div class="col-lg-5 col-lg-offset-2">
    <h1>Penambahan Data Admin</h1>
                <div class="panel-body">
                <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
    <?php echo validation_errors('<div class="alert alert-danger">','</div>') ?>
 <form action="<?php echo base_url();?>auth/validation" method="post">
    <div class="col-lg-8 col-lg-offset-2">
      <div class="form-group">
        <label for="username">Username :  </label>
        <input class="form-control" name="username" id="username" type="text">
      </div>
      <div class="form-group">
        <label for="email">email :  </label>
        <input class="form-control" name="email" id="email" type="text">
      </div>
      <div class="form-group">
        <label for="password">password :  </label>
        <input class="form-control" name="password" id="password" type="password">
      </div>
      <div>
        <button class="btn btn-primary" name="register">Save</button>
      </div>
</form>

    </div></div></div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?> Assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>