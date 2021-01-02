<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css');?>"/>
  </head>
    <body id="page-top">
      <div id="wrapper">
        <div id="content-wrapper">
          <div class="container-fluid">
            <div class="card mb-3">
              <div class="card-header">
                <a href="<?php echo site_url('kategori/kategori_produk/') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg>Back</a>
              </div>
              <div class="card-body">
              <center> <h3>Edit Data Kategori</h3> </center>
                <?php foreach($kategori as $k){ ?>
                  <form action="<?php echo site_url('kategori/update');?>" method="POST">
                    <div class="form-group">
                      <label for="text">Nama Kategori</label>
                      <input class="form-control" type="hidden" name="kategori_id" value="<?php echo $k->kategori_id ?>">
                      <input class="form-control" type="text" name="nama_kategori" value="<?php echo $k->nama_kategori ?>">
                    </div>
                    <input class="btn btn-info btn-sm" type="submit" name="simpan" value="Simpan"/>
                  </form>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/dashboard.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/button.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-slim.min.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/tab.js')?>"></script>
    </body>
  </html>