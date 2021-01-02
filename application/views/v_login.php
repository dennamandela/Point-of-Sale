<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/signin2.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <form action="<?php echo site_url('login/cek_user'); ?>" method="POST">
      <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <!-- Icon -->
          <div class="fadeIn first">
            <img src="assets/img/asus.jpg" id="icon" alt="User Icon" />
          </div>

           <!-- Login Form -->
            <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
            <input type="submit" class="fadeIn fourth" value=" Log in">

          <!-- Remind Passowrd -->
          <div id="formFooter">
            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#modal_register">Register</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Modal Register -->

    <div class="modal fade" id="modal_register" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo site_url().'login/akun_daftar'?>">
          <div class="modal-body">
            <div class="form-group">
              <label class="control-label col-xs-3">Username:</label>
              <div class="col-xs-8">
                <input type="text" class="form-control" id="username" name="username">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Email:</label>
              <div class="col-xs-8">
                <input type="text" class="form-control" id="email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Password:</label>
              <div class="col-xs-8">
                <input type="password" class="form-control" id="password" name="password">
                <input class="form-control" name="level" value="admin" type="hidden">
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-info">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- END MODAL REGISTER -->

    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/dashboard.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/button.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-slim.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/tab.js')?>"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>