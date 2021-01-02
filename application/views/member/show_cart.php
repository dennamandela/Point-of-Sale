<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <style>
      .bd-placeholder-img{
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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pricing.css'); ?>"/>
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Toko Komputer</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?php echo site_url('user/index'); ?>">Home</a>
        <a class="p-2 text-dark" href="<?php echo site_url('#'); ?>">Cart</a>
        <a class="p-2 text-dark" href="<?php echo site_url('user/Logout'); ?>">Log-Out</a>
      </nav>
    </div>
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
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  </body>
</html>