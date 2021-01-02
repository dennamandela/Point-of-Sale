<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Reports</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
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
      <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css'); ?>"/>
	</head>
	<body>
    <form action="<?php echo site_url('product/cari'); ?>" method="POST">
		<nav class="navbar navbar-dark fixed-top bg-light flex-md-nowrap p-0 shadow">
  		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Farl Com</a>
  			<input class="form-control form-control-light w-100" type="text" placeholder="Search" aria-label="Search" name="keyword">
  		<ul class="navbar-nav px-3">
    		<li class="nav-item text-nowrap">
          Logged in as <a href="#" class="navbar-link"><?php echo ($this->session->userdata('username')); ?></a>
    		</li>
  		</ul>
		</nav>
    </form>
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  Kategori Barang
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url ('product/produk') ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('order'); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('order/laporan_transaksi'); ?>">
                  Default Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login'); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                  Log-out
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Laporan Transaksi</h1>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <?php echo form_open('order/laporan_transaksi', array('class'=>'form-inline')); ?>
                    <div class="form-group">
                      <label for="exampleInputName2">Tanggal</label>
                      <input type="text" name="tanggal1" class="form-control" placeholder="Tanggal Mulai">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2"> - </label>
                      <input type="text" name="tanggal2" class="form-control" placeholder="Tanggal Selesai">
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Tampilkan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Lengkap</th>
                        <th>Total Transaksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                      <tr class="gradeU">
                        <td><?php echo $no ?></td>
                        <td><?php echo $r->tanggal_transaksi ?></td>
                        <td><?php echo $r->username ?></td>
                        <td><?php echo $r->total ?></td>
                      </tr>
                    <?php $no++; $total=$total+$r->total; } ?>
                      <tr>
                        <td colspan="3">Total</td>
                        <td><?php echo $total;?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
