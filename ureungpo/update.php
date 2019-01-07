<<<<<<< HEAD
<?php
require_once("cek.php");
require_once("../koneksi.php");

if (isset($_POST['update'])) {
	$name 		= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$username 	= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password	= password_hash($_POST["password"], PASSWORD_DEFAULT);
	$email		= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

	$images = $_FILES['foto']['name'];
	$tmp_dir = $_FILES['foto']['tmp_name'];
	$imageSize = $_FILES['foto']['size'];

	$upload_dir = '../uploads/admin/';
	$imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
	$valid_extensions = array('jpeg', 'jpg', 'png');
	$picProfile = date('dmYHis'). ".".$imgExt;
	move_uploaded_file($tmp_dir, $upload_dir.$picProfile);

	$sql = "UPDATE ureungpo SET name=:name, username=:username, password=:password, email=:email,photo=:image";
	$stmt = $koneksi->prepare($sql);

	$parameter = array(
		":name" => $name,
		":username" => $username,
		":password" => $password,
		":email" => $email,
		":image" => $picProfile
	);

	$update = $stmt->execute($parameter);
	if ($update == TRUE) {
		echo "<script type = \"text/javascript\">
				alert(\"profil berhasil diperbarui. silakan login kembali\");
				window.location = (\"logout.php\")
				</script>";
	}else{
		echo "<script type = \"text/javascript\">
				alert(\"profil gagal diperbarui\");
				window.location = (\"update.php\")
				</script>";
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Update Profil | Jaklom</title>
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
	    <section class="content" style="width: 50%;">
	    	<div class="box box-primary">
	    		<div class="box-header with-border">
              		<h3 class="box-title">Perbarui Profil</h3>
            	</div>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION["admin"]["name"];?>" required>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION["admin"]["username"];?>" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION["admin"]["email"];?>" required>
                </div>
                <div class="form-group">
                  <label for="password">Password Baru</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password baru" required>
                </div>
                <div class="form-group">
                  <label for="foto">Foto Profil</label>
                  <input type="file" id="foto" name="foto">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" id="update" name="update" class="btn btn-primary">Update</button>
              </div>
            </form>
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
=======
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Update Profil | Jaklom</title>
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
	    <section class="content" style="width: 50%;">
	    	<div class="box box-primary">
	    		<div class="box-header with-border">
              		<h3 class="box-title">Perbarui Profil</h3>
            	</div>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION["admin"]["name"];?>" required>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION["admin"]["username"];?>" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION["admin"]["email"];?>" required>
                </div>
                <div class="form-group">
                  <label for="password">Password Baru</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password baru" required>
                </div>
                <div class="form-group">
                  <label for="foto">Foto Profil</label>
                  <input type="file" id="foto" name="foto">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" id="update" name="update" class="btn btn-primary">Update</button>
              </div>
            </form>
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
>>>>>>> fabefb1fad09cc0d049fa3beab86dc8e4830df88
</html>