<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Tambah Produk</title>
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
              <form action="<?php echo site_url('product/proses_tambah');?>" method="POST">
                <div class="form-group">
                  <label for="text">Image</label>
                  <input class="form-control-file" type="file" name="image" required>
                </div>
                <div class="form-group">
                  <label for="nama_barang">Nama Barang</label>
                  <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" required>
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select name="kategori_id" class="form-control">
                    <option selected>-- Pilih Kategori --</option>
                    <?php foreach ($kategori as $row) {?>
                      <option value='<?php echo $row->kategori_id?>'><?php echo $row->nama_kategori?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="text">Harga</label>
                  <input class="form-control" type="text" name="harga" placeholder="Harga" required>
                </div>
              <input class="btn btn-info" type="submit" name="tambah" value="Save"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>