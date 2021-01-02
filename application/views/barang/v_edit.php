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
                <a href="<?php echo site_url('product/produk/') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg>Back</a>
              </div>
              <div class="card-body">
              <center> <h3>Edit Data Kategori</h3> </center>
                <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <form action="<?php echo site_url('product/edit')?>" method="post"/>
                          <input type="hidden" name="id" value="<?php echo $barang['barang_id']?>">
                            <div class="form-group">
                              <label>Foto</label>
                              <input type="file" name="image">
                              <img src="<?=base_url()?>assets/img/<?php echo $barang ['image'] ?>" width="100" alt="" name="image">
                            </div>
                            <div class="form-group">
                              <label>Nama Barang</label>
                              <input class="form-control" name="nama_barang" value="<?php echo $barang['nama_barang']?>">
                            </div>
                            <div class="form-group">
                              <label>Kategori</label>
                                <select name="kategori" class="form-control">
                                  <?php foreach ($kategori as $k) {
                                    echo "<option value='$k->kategori_id'";
                                    echo $barang['kategori_id']==$k->kategori_id?'selected':'';
                                    echo">$k->nama_kategori</option>";
                                  } ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Harga</label>
                                <input class="form-control" name="harga" value="<?php echo $barang['harga']?>">
                              </div>
                              <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </body>
        </html>