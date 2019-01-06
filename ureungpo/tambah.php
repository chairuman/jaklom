<<<<<<< HEAD
=======
<?php
require_once("cek.php");
require_once("../koneksi.php");

if (isset($_POST['tambah'])) {
	$namaMobil   = filter_input(INPUT_POST, 'namaMobil', 
FILTER_SANITIZE_STRING);
	$nomorPolisi = filter_input(INPUT_POST, 'nomorPolisi', 
FILTER_SANITIZE_STRING);
	$hargaSewa   = filter_input(INPUT_POST, 'harga', 
FILTER_SANITIZE_STRING);
	$deskripsi 	 = filter_input(INPUT_POST, 'deskripsi', 
FILTER_SANITIZE_STRING);

	$images = $_FILES['foto']['name'];
	$tmp_dir = $_FILES['foto']['tmp_name'];
	$imageSize = $_FILES['foto']['size'];

	$upload_dir = '../uploads/admin/';
	$imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
	$valid_extensions = array('jpeg', 'jpg', 'png');
	$picProfile = date('dmYHis'). ".".$imgExt;
	move_uploaded_file($tmp_dir, $upload_dir.$picProfile);

	$sql = "INSERT INTO mobil (jenisMobil, nomorPolisi, harga, 
deskripsi, status, fotoMobil) VALUES (:jenisMobil, :nomorPolisi, :harga, 
:deskripsi, :status,:image)";

	$stmt = $koneksi->prepare($sql);
	$parameter = array(
				":jenisMobil" => $namaMobil,
				":nomorPolisi" => $nomorPolisi,
				":harga" => $hargaSewa,
				":deskripsi" => $deskripsi,
				":status" => $_POST['status'],
				":image" => $picProfile

	);

	$tambahMobil = $stmt->execute($parameter);
	if ($tambahMobil = TRUE) {
		echo "<script type = \"text/javascript\">
			alert(\"data berhasil ditambahkan\");
			window.location = (\"tambah.php\")
			</script>";
	}else{
		echo "<script type = \"text/javascript\">
			alert(\"data gagal ditambahkan\");
			window.location = (\"tambah.php\")
			</script>";
	}

	
}
?>

>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tambah | Jaklom</title>
<<<<<<< HEAD
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/ionicons.css">
		<link rel="stylesheet" href="../css/AdminLTE.css">
		<link rel="stylesheet" href="../css/_all-skins.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
=======
		<meta content="width=device-width, initial-scale=1, 
maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link 
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
rel="stylesheet" 
integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
crossorigin="anonymous">
		<link rel="stylesheet" href="../css/ionicons.css">
		<link rel="stylesheet" href="../css/AdminLTE.css">
		<link rel="stylesheet" href="../css/_all-skins.css">
		<link rel="stylesheet" 
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
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
<<<<<<< HEAD
	      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
=======
	      <a href="#" class="sidebar-toggle" data-toggle="push-menu" 
role="button">
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>

	      <div class="navbar-custom-menu">
	        <ul class="nav navbar-nav">
	          <li class="dropdown user user-menu">
<<<<<<< HEAD
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <img src="" class="user-image" alt="User Image">
	              <span class="hidden-xs"></span>
=======
	            <a href="#" class="dropdown-toggle" 
data-toggle="dropdown">
	              <img src="<?php echo "../uploads/admin/" . 
$_SESSION['admin']['photo'];?>" class="user-image" alt="User Image">
	              <span class="hidden-xs"><?php echo 
$_SESSION["admin"]["name"];?></span>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
<<<<<<< HEAD
	                <img src="" class="img-circle" alt="User Image">
=======
	                <img src="<?php echo "../uploads/admin/" . 
$_SESSION['admin']['photo'];?>" class="img-circle" alt="User Image">
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983

	                <p>
	                  <?php echo $_SESSION["admin"]["name"];?>
	                </p>
	              </li>
	              <li class="user-footer">
	                <div class="pull-right">
<<<<<<< HEAD
	                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
	                </div>
	                <div class="pull-left">
                  		<a href="profil.php" class="btn btn-default btn-flat">Profile</a>
=======
	                  <a href="logout.php" class="btn btn-default 
btn-flat">Sign out</a>
	                </div>
	                <div class="pull-left">
                  		<a href="profil.php" class="btn 
btn-default btn-flat">Profile</a>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
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
<<<<<<< HEAD
	          <img src="" class="img-circle sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p><</p>
	          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
=======
	          <img src="<?php echo "../uploads/admin/" . 
$_SESSION['admin']['photo'];?>" class="img-circle sidebarImage" 
alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p><?php echo $_SESSION["admin"]["name"];?></p>
	          <a href="#"><i class="fa fa-circle text-success"></i> 
Online</a>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
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
<<<<<<< HEAD
	            <i class="fa fa-download"></i> <span>Orderan Masuk</span>
=======
	            <i class="fa fa-download"></i> <span>Orderan 
Masuk</span>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
	          </a>
	        </li>
	       </ul>
	    </section>
	  </aside>

	  <div class="content-wrapper">
	    <section style="width: 50%;" class="content">
	    	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Mobil</h3>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
              	<div class="form-group">
                  <label for="namaMobil">Nama Mobil</label>
<<<<<<< HEAD
                  <input type="text" class="form-control" id="namaMobil" name="namaMobil" placeholder="Nama Mobil" required>
                </div>
                <div class="form-group">
                  <label for="nomorPolisi">Nomor Polisi</label>
                  <input type="text" class="form-control" id="nomorPolisi" name="nomorPolisi" placeholder="Nomor Polisi" required>
                </div>
                <div class="form-group">
                  <label for="harga">Harga Sewa Perhari</label>
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Perhari" required>
                </div>
                <div class="form-group">
                	<label for="status">Status</label>
	                <select id="status" name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
=======
                  <input type="text" class="form-control" id="namaMobil" 
name="namaMobil" placeholder="Nama Mobil" required>
                </div>
                <div class="form-group">
                  <label for="nomorPolisi">Nomor Polisi</label>
                  <input type="text" class="form-control" 
id="nomorPolisi" name="nomorPolisi" placeholder="Nomor Polisi" required>
                </div>
                <div class="form-group">
                  <label for="harga">Harga Sewa Perhari</label>
                  <input type="text" class="form-control" id="harga" 
name="harga" placeholder="Harga Perhari" required>
                </div>
                <div class="form-group">
                	<label for="status">Status</label>
	                <select id="status" name="status" 
class="form-control select2 select2-hidden-accessible" style="width: 
100%;" tabindex="-1" aria-hidden="true">
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
	                  <option selected="selected">tersedia</option>
	                  <option>tidak tersedia</option>
	                </select>
              	</div>
              	<div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
<<<<<<< HEAD
                  <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="Tuliskan Deskripsi ..."></textarea>
=======
                  <textarea name="deskripsi" id="deskripsi" 
class="form-control" rows="3" placeholder="Tuliskan Deskripsi 
..."></textarea>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
                </div>
                <div class="form-group">
                  <label for="foto">Foto Mobil</label>
                  <input type="file" id="foto" name="foto">
                </div>
              </div>
              
              <div class="box-footer">
<<<<<<< HEAD
                <button name="tambah" type="submit" class="btn btn-primary">Tambah</button>
=======
                <button name="tambah" type="submit" class="btn 
btn-primary">Tambah</button>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
              </div>
            </form>
          </div>
		</section>
		</div>

	  <footer class="main-footer">
<<<<<<< HEAD
	    <strong>Copyright &copy; 2018 <a href="#">Jaklom</a>.</strong> All rights
=======
	    <strong>Copyright &copy; 2018 <a 
href="#">Jaklom</a>.</strong> All rights
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
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
