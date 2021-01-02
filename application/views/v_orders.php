<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Transaksi</title>
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
  <body>
    <nav class="navbar navbar-dark fixed-top bg-light flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Farl Com</a>
        <input class="form-control form-control-light ws-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
          <strong></strong>
        </ul>
    </nav>
    
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo site_url ('admin/home') ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('kategori/kategori_produk'); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1888" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Kategori Barang
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('product/produk')?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('order/penjualan'); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('customers/pelanggan'); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Customers
                </a>
              </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Orders</h1>
          </div>
          <?php echo form_open('order/penjualan', array('class'=>'form-horizontal')); ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Barang</label>
            <div class="col-sm-10">
              <input list="barang" name="nama_barang" placeholder="Masukan Nama Barang" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-10">
              <input type="text" name="qty" placeholder="Masukan Quantity" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="submit" class="btn btn-info btn-sm">Simpan</button> | <?php echo anchor('order/selesai_transaksi','Selesai',array('class'=>'btn btn-success btn-sm'))?>
            </div>
          </div>

        <datalist id="barang">
          <?php foreach ($barang as $row) {
            echo "<option value='$row->nama_barang'>";
          } ?>
        </datalist>

          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Qty</th>
                      <th scope="col">Harga</th>
                      <th scope="col">SubTotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; $total=0; foreach($transaksi as $r) { ?>
                      <tr>
                        <th><?php echo $no ?></th>
                        <th><?php echo $r->nama_barang.' - '.anchor('order/hapusitem/'.$r->detail_id, 'Hapus',array('style'=>'color:red;')) ?></th>
                        <th><?php echo $r->qty ?></th>
                        <th>Rp. <?php echo number_format($r->harga) ?></th>
                        <th>Rp. <?php echo number_format($r->qty*$r->harga) ?></th>
                      </tr>
                    <?php $total=$total+($r->qty*$r->harga);
                    $no++; } ?>
                      <tr>
                        <th colspan="4">T O T A L</th>
                        <th>Rp. <?php echo number_format($total); ?></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/dashboard.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  </body>
</html>