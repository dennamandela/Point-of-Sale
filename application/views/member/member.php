<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product Komputer</title>
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
        <a class="p-2 text-dark" href="<?php echo site_url('user/cart'); ?>">Cart</a>
        <a class="p-2 text-dark" href="<?php echo site_url('user/Logout'); ?>">Log-Out</a>
      </nav>
    </div>
    <br>
    <div class="row">
      <?php foreach($barang as $r) : ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="<?= base_url(); ?>assets/img/<?= $r->image; ?>" max-width='100%' max-height='100%' height='50%'/>
            <div class="card-body">
              <p class="card-text"><?= $r->nama_barang; ?></p>
              <p>Rp. <?= number_format($r->harga); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="card-action">
                  <a href="<?= base_url(); ?>home/detail/<?= $r->barang_id; ?>" class="waves-effect waves-light btn-flat blue white-text"><i class="fa fa-search-plus"></i> Detail</a>
                  <a href="<?= base_url(); ?>cart/add/<?= $r->barang_id; ?>" class="waves-effect waves-light btn-flat green white-text"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  </body>
</html>