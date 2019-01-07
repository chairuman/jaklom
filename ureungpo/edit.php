<<<<<<< HEAD
=======
<?php
require_once("cek.php");
require_once("../koneksi.php");

$idMobil 	= $_GET['id'];
$sql 		= "SELECT * FROM mobil WHERE idMobil= $idMobil";
$namaMobil 	= $koneksi->prepare($sql);
$namaMobil->execute();
$tampil 	= $namaMobil->fetch();

if (isset($_POST['simpan'])) {
	$namaMobil   = filter_input(INPUT_POST, 'namaMobil', FILTER_SANITIZE_STRING);
	$nomorPolisi = filter_input(INPUT_POST, 'nomorPolisi', FILTER_SANITIZE_STRING);
	$hargaSewa   = filter_input(INPUT_POST, 'harga', FILTER_SANITIZE_STRING);
	$deskripsi 	 = filter_input(INPUT_POST, 'deskripsi', FILTER_SANITIZE_STRING);

	$query = "UPDATE mobil SET jenisMobil=:namaMobil, nomorPolisi=:nomorPolisi, harga=:harga, status=:status, deskripsi=:deskripsi WHERE idMobil=$idMobil";
	$eksekusi = $koneksi->prepare($query);

	$parameter = array(
		":namaMobil" => $namaMobil,
		":nomorPolisi" => $nomorPolisi,
		":harga" => $hargaSewa,
		":status" => $_POST['status'],
		":deskripsi" => $deskripsi

	);

	$simpan = $eksekusi->execute($parameter);
	if ($simpan = TRUE) {
		echo '<script type="text/javascript">';
  		echo 'setTimeout(function () { swal("SUKSES!","Data berhasil diubah!","success");';
  		echo '}, 1000);</script>';
	}
}

?>

>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Edit | Jaklom</title>
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
<<<<<<< HEAD
	              <img src="" class="user-image" alt="User Image">
	              <span class="hidden-xs"></span>
=======
	              <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="user-image" alt="User Image">
	              <span class="hidden-xs"><?php echo $_SESSION["admin"]["name"];?></span>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
<<<<<<< HEAD
	                <img src="" class="img-circle" alt="User Image">

	                <p>
	                 Nama
=======
	                <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="img-circle" alt="User Image">

	                <p>
	                  <?php echo $_SESSION["admin"]["name"];?>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
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
<<<<<<< HEAD
	          <img src="" class="img-circle sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p>Nama</p>
=======
	          <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="img-circle sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p><?php echo $_SESSION["admin"]["name"];?></p>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
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
<<<<<<< HEAD
              		<h3 class="box-title">Edit Data Mobil Mobil</h3>
=======
              		<h3 class="box-title">Edit Data Mobil <?php echo $tampil['jenisMobil'];?></h3>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
            	</div>
            <form action="" method="POST">
              <div class="box-body">
              	<div class="form-group">
                  <label for="namaMobil">Nama Mobil</label>
<<<<<<< HEAD
                  <input type="text" class="form-control" id="namaMobil" name="namaMobil"value="" required>
                </div>
                <div class="form-group">
                  <label for="nomorPolisi">Nomor Polisi</label>
                  <input type="text" class="form-control" id="nomorPolisi" name="nomorPolisi" value="" required>
                </div>
                <div class="form-group">
                  <label for="harga">Harga Sewa Perhari</label>
                  <input type="text" class="form-control" id="harga" name="harga" value="" required>
=======
                  <input type="text" class="form-control" id="namaMobil" name="namaMobil"value="<?php echo $tampil['jenisMobil'];?>" required>
                </div>
                <div class="form-group">
                  <label for="nomorPolisi">Nomor Polisi</label>
                  <input type="text" class="form-control" id="nomorPolisi" name="nomorPolisi" value="<?php echo $tampil['nomorPolisi'];?>" required>
                </div>
                <div class="form-group">
                  <label for="harga">Harga Sewa Perhari</label>
                  <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $tampil['harga'];?>" required>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
                </div>
                <div class="form-group">
                	<label for="status">Status</label>
	                <select id="status" name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
	                  <option selected="selected">tersedia</option>
	                  <option>tidak tersedia</option>
	                </select>
              	</div>
              	<div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
<<<<<<< HEAD
                  <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
=======
                  <textarea name="deskripsi" id="deskripsi" class="form-control"><?php echo $tampil['deskripsi'];?></textarea>
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
                </div>
              </div>
              <div class="box-footer">
                <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
>>>>>>> 7caf3e9ec04bbc142e987fe2df4ff2068ce26983
