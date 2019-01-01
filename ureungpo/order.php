<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Orderan | Jaklom</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/ionicons.css">
		<link rel="stylesheet" href="../css/AdminLTE.css">
		<link rel="stylesheet" href="../css/_all-skins.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
	  <header class="main-header">
	    <a href="index.php" class="logo">
	      <span class="logo-mini"><b>J</b>ak</span>
	      <span class="logo-lg"><b>Jak</b>Lom</span>
	    </a>
	    <nav class="navbar navbar-static-top">
	      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>

	      <div class="navbar-custom-menu">
	        <ul class="nav navbar-nav">
	          <li class="dropdown user user-menu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="user-image" alt="User Image">
	              <span class="hidden-xs"><?php echo $_SESSION["admin"]["name"];?></span>
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
	                <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="img-circle" alt="User Image">

	                <p>
	                  <?php echo $_SESSION["admin"]["name"];?>
	                </p>
	              </li>
	              <li class="user-footer">
	                <div class="pull-right">
	                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
	                </div>
	                <div class="pull-left">
                  		<a href="profil.php" class="btn btn-default btn-flat">Profile</a>
                	</div>
	              </li>
	            </ul>
	          </li>
	        </ul>
	      </div>
	    </nav>
	  </header>

	  <aside class="main-sidebar">
	    <section class="sidebar">
	      <div class="user-panel">
	        <div class="pull-left image">
	          <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="img-circle sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p><?php echo $_SESSION["admin"]["name"];?></p>
	          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	        </div>
	      </div>
	      <ul class="sidebar-menu tree" data-widget="tree">
	        <li class="header">MAIN NAVIGATION</li>
	        <li>
	          <a href="index.php">
	            <i class="fa fa-home"></i> <span>Dashboard</span>
	          </a>
	        </li>
	        <li>
	          <a href="tambah.php">
	            <i class="fa fa-plus"></i> <span>Tambah Mobil</span>
	          </a>
	        </li>
	        <li>
	          <a href="order.php">
	            <i class="fa fa-download"></i> <span>Orderan Masuk</span>
	          </a>
	        </li>
	       </ul>
	    </section>
	  </aside>

	  <div class="content-wrapper">
	  	<section class="content-header">
      		<h1>
        	Orderan Masuk
      		</h1>
    	</section>
	    <section class="content">
	    	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Semua Mobil</h3>
            </div>
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              	<div class="row">
              		<div class="col-sm-6">
              			<div class="dataTables_length" id="example1_length">
              				<label>Show 
              					<select name="example1_length" aria-controls="example1" class="form-control input-sm">
              						<option value="10">10</option>
              						<option value="25">25</option>
              						<option value="50">50</option>
              						<option value="100">100</option>
              					</select> entries
              				</label>
              			</div>
              		</div>
              		<div class="col-sm-6">
              			<div id="example1_filter" class="dataTables_filter">
              				<label class="pull-right">Search:
              					<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
              				</label>
              			</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-sm-12">
              			<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                			<thead>
                				<tr role="row">
                					<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Jenis Mobil</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nama Pemesan</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">HP Pemesan</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Email Pemesan</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tgl Pakai</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tgl Kembali</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Biaya</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status</th>
                				</tr>
                			</thead>
                			<tbody>
                				<?php while ($semua = $tampilTabel->fetch()):?>
                				<tr role="row" class="odd">
                  					<td><?php echo $semua['jenisMobil'];?></td>
                  					<td><?php echo $semua['namaPemesan'];?></td>
                  					<td><?php echo $semua['hpPemesan'];?></td>
                  					<td><?php echo $semua['emailPemesan'];?></td>
                  					<td><?php echo $semua['tanggalPakai'];?></td>
                  					<td><?php echo $semua['tanggalKembali'];?></td>
                  					<td><?php echo $semua['biayaSewa'];?></td>
                  					<td>
                  						<a  href="konfirmasi.php?id=<?php echo $semua['idSewa'];?>&mobil=<?php echo $semua['idMobil'];?>" class="btn btn-success btn-sm">
                							konfirmasi
              							</a>
                  					</td>
                				</tr>
                			<?php endwhile;?>
                			</tbody>
              			</table>
          			</div>
          		</div>
          		<div class="row">
          			<div class="col-sm-5">
          				<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
          			</div>
          			<div class="col-sm-7">
          				<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
          					<ul class="pagination">
          						<li class="paginate_button previous disabled" id="example1_previous">
          							<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
          						</li>
          						<li class="paginate_button active">
          							<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
          						</li>
          						<li class="paginate_button ">
          							<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
          						</li>
          						<li class="paginate_button ">
          							<a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
          						</li>
          						<li class="paginate_button ">
          							<a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
          						</li>
          						<li class="paginate_button ">
          							<a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
          						</li>
          						<li class="paginate_button ">
          							<a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
          						</li>
          						<li class="paginate_button next" id="example1_next">
          							<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
          						</li>
          					</ul>
          				</div>
          			</div>
          		</div>
          	</div>
		</section>
		</div>

	  <footer class="main-footer">
	    <strong>Copyright &copy; 2018 <a href="#">Jaklom</a>.</strong> All rights
	    reserved.
	  </footer>

	  <div class="control-sidebar-bg"></div>
	</div>

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery.slimscroll.js"></script>
	<script src="../js/fastclick.js"></script>
	<script src="../js/adminlte.js"></script>
	<script src="../js/demo.js"></script>
	<script>
	  $(document).ready(function () {
	    $('.sidebar-menu').tree()
	  })
	</script>
	</body>
</html>