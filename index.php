<<<<<<< HEAD
=======
<?php
require_once("cek.php");
require_once("koneksi.php");

$sql  = "SELECT * FROM mobil WHERE status='tersedia'";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
$tampil = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
>>>>>>> chairuman
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Index | Jaklom</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="css/ionicons.css">
		<link rel="stylesheet" href="css/AdminLTE.css">
		<link rel="stylesheet" href="css/_all-skins.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<link rel="stylesheet" href="css/style.css">
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
	              <img src="uploads/users/" class="user-image" alt="User Image">
	              <span class="hidden-xs">Nama</span>
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
	                <img src="uploads/users/" class="img-circle" alt="User Image">

	                <p>Nama </p>
	              </li>
	              <li class="user-footer">
	                <div class="pull-right">
	                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
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
	      <!-- Sidebar user panel -->
	      <div class="user-panel">
	        <div class="pull-left image">
	          <img src="uploads/users/" class="img-circle sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p>Nama</p>
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
	          <a href="profil.php">
	            <i class="fa fa-user"></i> <span>Profil Saya</span>
	          </a>
	        </li>
	        <li>
	          <a href="order.php">
	            <i class="fa fa-upload"></i> <span>Orderan Saya</span>
	          </a>
	        </li>
	       </ul>
	    </section>
	  </aside>

	  <div class="content-wrapper">
	    <section class="content">
	    	<div class="row">
	    		<div class=\"col-lg-4\">
	    			<div class=\"box box-widget widget-user\">
						<img class=\"img-responsive pad\" src="" alt=\"Photo\">
			            <div class=\"box-footer\">
			              	<a href=\"detail.php?id=" "\"><h3 class=\"widget-user-username text-center\">" . "</h3></a>
			              	<h5 class=\"widget-user-desc text-center\">"  " Per hari" . "</h5>
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

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.slimscroll.js"></script>
	<script src="js/fastclick.js"></script>
	<script src="js/adminlte.js"></script>
	<script src="js/demo.js"></script>
	<script>
	  $(document).ready(function () {
	    $('.sidebar-menu').tree()
	  })
	</script>
	</body>
</html>
