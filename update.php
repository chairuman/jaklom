<<<<<<< HEAD
=======
<?php
require_once("cek.php");
require_once("koneksi.php");

$id = $_GET['id'];
if (isset($_POST['simpan'])) {
	$name 		= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$username 	= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password	= password_hash($_POST["password"], PASSWORD_DEFAULT);
	$email		= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

	$images = $_FILES['foto']['name'];
	$tmp_dir = $_FILES['foto']['tmp_name'];
	$imageSize = $_FILES['foto']['size'];

	$upload_dir = 'uploads/users/';
	$imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
	$valid_extensions = array('jpeg', 'jpg', 'png');
	$picProfile = $id. ".".$imgExt;
	move_uploaded_file($tmp_dir, $upload_dir.$picProfile);


	$sql = "UPDATE users SET name=:name, username=:username, password=:password, email=:email,photo=:image WHERE id=$id";
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
				alert(\"profil berhasil diperbarui\");
				window.location = (\"index.php\")
				</script>";
	}
	
}
?>

>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Index | Jaklom</title>
<<<<<<< HEAD
		<meta content="width=device-width, initial-scale=1, 
maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link 
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
rel="stylesheet" 
integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
crossorigin="anonymous">
		<link rel="stylesheet" href="css/ionicons.css">
		<link rel="stylesheet" href="css/AdminLTE.css">
		<link rel="stylesheet" href="css/_all-skins.css">
		<link rel="stylesheet" 
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
=======
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="css/ionicons.css">
		<link rel="stylesheet" href="css/AdminLTE.css">
		<link rel="stylesheet" href="css/_all-skins.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
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
<<<<<<< HEAD
	      <a href="#" class="sidebar-toggle" data-toggle="push-menu" 
role="button">
=======
	      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>

	      <div class="navbar-custom-menu">
	        <ul class="nav navbar-nav">
	          <li class="dropdown user user-menu">
<<<<<<< HEAD
	            <a href="#" class="dropdown-toggle" 
data-toggle="dropdown">
	              <img src="uploads/users/" class="user-image" 
alt="User Image">
	              <span class="hidden-xs">Nama</span>
=======
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <img src="uploads/users/<?php echo $_SESSION["user"]["photo"];?>" class="user-image" alt="User Image">
	              <span class="hidden-xs"><?php echo $_SESSION["user"]["name"];?></span>
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
<<<<<<< HEAD
	                <img src="uploads/users/ class="img-circle" 
alt="User Image">

	                <p>
	                  <Nama
=======
	                <img src="uploads/users/<?php echo $_SESSION["user"]["photo"];?>" class="img-circle" alt="User Image">

	                <p>
	                  <?php echo $_SESSION["user"]["name"];?>
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
	                </p>
	              </li>
	              <li class="user-footer">
	                <div class="pull-right">
<<<<<<< HEAD
	                  <a href="logout.php" class="btn btn-default 
btn-flat">Sign out</a>
=======
	                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
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
<<<<<<< HEAD
	          <img src="uploads/users/" class="img-circle 
sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p>Nama></p>
	          <a href="#"><i class="fa fa-circle text-success"></i> 
Online</a>
=======
	          <img src="uploads/users/<?php echo $_SESSION["user"]["photo"];?>" class="img-circle sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p><?php echo $_SESSION["user"]["name"];?></p>
	          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
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
<<<<<<< HEAD
	            <i class="fa fa-upload"></i> <span>Orderan 
Saya</span>
=======
	            <i class="fa fa-upload"></i> <span>Orderan Saya</span>
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
	          </a>
	        </li>
	       </ul>
	    </section>
	  </aside>

	  <div class="content-wrapper">
<<<<<<< HEAD
	    <section class="content">
=======
	    <section class="content" style="width: 50%;">
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
	    	<div class="box box-primary">
	    		<div class="box-header with-border">
              		<h3 class="box-title">Ubah Profil</h3>
            	</div>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nama Lengkap</label>
<<<<<<< HEAD
                  <input type="text" class="form-control" id="name" 
name="name" value="Nama" required>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" 
name="username" value="Username" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" 
name="email" value="Email" required>
                </div>
                <div class="form-group">
                  <label for="password">Password Baru</label>
                  <input type="password" class="form-control" 
id="password" name="password" placeholder="masukkan password baru" 
required>
=======
                  <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION["user"]["name"];?>" required>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION["user"]["username"];?>" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION["user"]["email"];?>" required>
                </div>
                <div class="form-group">
                  <label for="password">Password Baru</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password baru" required>
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
                </div>
                <div class="form-group">
                  <label for="foto">Foto Profil</label>
                  <input type="file" id="foto" name="foto">
                </div>
              </div>
              <div class="box-footer">
<<<<<<< HEAD
                <button type="submit" id="simpan" name="simpan" 
class="btn btn-primary">Simpan</button>
=======
                <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
              </div>
            </form>
          </div>
		</section>
		</div>

	  <footer class="main-footer">
<<<<<<< HEAD
	    <strong>Copyright &copy; 2018 <a 
href="#">Jaklom</a>.</strong> All rights
=======
	    <strong>Copyright &copy; 2018 <a href="#">Jaklom</a>.</strong> All rights
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
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
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
