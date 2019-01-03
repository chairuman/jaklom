<<<<<<< HEAD
=======
<?php
require_once("cek.php");
require_once("../koneksi.php");

?>

>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
<<<<<<< HEAD
		<title>Index | Jaklom</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="css/ionicons.css">
		<link rel="stylesheet" href="css/AdminLTE.css">
		<link rel="stylesheet" href="css/_all-skins.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<link rel="stylesheet" href="css/style.css">
=======
		<title>Profil | Jaklom</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/ionicons.css">
		<link rel="stylesheet" href="../css/AdminLTE.css">
		<link rel="stylesheet" href="../css/_all-skins.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<link rel="stylesheet" href="../css/style.css">
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
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
<<<<<<< HEAD
	              <img src="uploads/users/ class="user-image" alt="User Image">
	              <span class="hidden-xs">Nama</span>
=======
	              <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="user-image" alt="User Image">
	              <span class="hidden-xs"><?php echo $_SESSION["admin"]["name"];?></span>
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
<<<<<<< HEAD
	                <img src="uploads/users/" class="img-circle" alt="User Image">

	                <p>
	                  Nama
=======
	                <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="img-circle" alt="User Image">

	                <p>
	                  <?php echo $_SESSION["admin"]["name"];?>
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
	                </p>
	              </li>
	              <li class="user-footer">
	                <div class="pull-right">
	                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
	                </div>
<<<<<<< HEAD
=======
	                <div class="pull-left">
                  		<a href="profil.php" class="btn btn-default btn-flat">Profile</a>
                	</div>
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
	              </li>
	            </ul>
	          </li>
	        </ul>
	      </div>
	    </nav>
	  </header>

	  <aside class="main-sidebar">
	    <section class="sidebar">
<<<<<<< HEAD
	      <!-- Sidebar user panel -->
	      <div class="user-panel">
	        <div class="pull-left image">
	          <img src="uploads/users/>" class="img-circle sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p><Nama</p>
=======
	      <div class="user-panel">
	        <div class="pull-left image">
	          <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="img-circle sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p><?php echo $_SESSION["admin"]["name"];?></p>
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
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
<<<<<<< HEAD
	          <a href="profil.php">
	            <i class="fa fa-user"></i> <span>Profil Saya</span>
=======
	          <a href="tambah.php">
	            <i class="fa fa-plus"></i> <span>Tambah Mobil</span>
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
	          </a>
	        </li>
	        <li>
	          <a href="order.php">
<<<<<<< HEAD
	            <i class="fa fa-upload"></i> <span>Orderan Saya</span>
=======
	            <i class="fa fa-download"></i> <span>Orderan Masuk</span>
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
	          </a>
	        </li>
	       </ul>
	    </section>
	  </aside>

	  <div class="content-wrapper">
<<<<<<< HEAD
	    <section class="content">
	    	<div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle fotoProfil" src="uploads/users/" alt="User profile picture">

              <h3 class="profile-username text-center">Nama</h3>

              <p class="text-muted text-center">User</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Nama Lengkap</b> <a class="pull-right">Nama</a>
                </li>
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right">Usernama</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">Email</a>
                </li>
              </ul>

              <a href="update.php?id=" class="btn btn-primary btn-block"><b>Ubah Profil</b></a>
=======
	    <section class="content" style="width: 30%;"">
	    	<div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="http://lorempixel.com/output/nightlife-q-c-100-100-3.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $_SESSION["admin"]["name"];?></h3>

              <p class="text-muted text-center">Admin</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Nama Lengkap</b> <a class="pull-right"><?php echo $_SESSION["admin"]["name"];?></a>
                </li>
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><?php echo $_SESSION["admin"]["username"];?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo $_SESSION["admin"]["email"];?></a>
                </li>
              </ul>

              <a href="update.php" class="btn btn-primary btn-block"><b>Update Profil</b></a>
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
            </div>
            <!-- /.box-body -->
          </div>
		</section>
		</div>

	  <footer class="main-footer">
	    <strong>Copyright &copy; 2018 <a href="#">Jaklom</a>.</strong> All rights
	    reserved.
	  </footer>

	  <div class="control-sidebar-bg"></div>
	</div>

<<<<<<< HEAD
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.slimscroll.js"></script>
	<script src="js/fastclick.js"></script>
	<script src="js/adminlte.js"></script>
	<script src="js/demo.js"></script>
=======
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery.slimscroll.js"></script>
	<script src="../js/fastclick.js"></script>
	<script src="../js/adminlte.js"></script>
	<script src="../js/demo.js"></script>
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
	<script>
	  $(document).ready(function () {
	    $('.sidebar-menu').tree()
	  })
	</script>
	</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 03591e9ccd8a9fa97298785f35a63f2b8cba3be1
