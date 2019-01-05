<?php
require_once("cek.php");
require_once("koneksi.php");

$idMobil 	= $_GET['id'];
$jenisMobil = $_GET['mobil'];
$harga = $_GET['price'];

if (isset($_POST['booking'])) {
	$name 			= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$email 			= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$telpon 		= filter_input(INPUT_POST, 'telpon', FILTER_SANITIZE_STRING);
	$tanggalPakai 	= filter_input(INPUT_POST, 'tanggalMulai', FILTER_SANITIZE_STRING);
	$tanggalKembali = filter_input(INPUT_POST, 'tanggalKembali', FILTER_SANITIZE_STRING);
	$biayaSewa		= filter_input(INPUT_POST, 'total', FILTER_SANITIZE_STRING);

	$sql = "INSERT INTO orderan (idMobil, jenisMobil, namaPemesan, emailPemesan, hpPemesan, tanggalPakai, tanggalKembali, biayaSewa) VALUES (:idMobil, :jenisMobil, :namaPemesan, :emailPemesan, :hpPemesan, :tanggalPakai, :tanggalKembali, :biayaSewa)";

	$stmt = $koneksi->prepare($sql);

	$parameter = array(
		":idMobil" 			=> $idMobil,
		":jenisMobil" 		=> $jenisMobil,
		":namaPemesan" 		=> $name,
		":emailPemesan" 	=> $email,
		":hpPemesan" 		=> $telpon,
		":tanggalPakai" 	=> $tanggalPakai,
		":tanggalKembali" 	=> $tanggalKembali,
		":biayaSewa" 		=> $biayaSewa,
	);

	$simpanData = $stmt->execute($parameter);
	if ($simpanData=TRUE) {
		echo "<script type = \"text/javascript\">
				alert(\"pesanan anda berhasil diproses. Silakan tunggu konfimasi admin\");
				window.location = (\"index.php\")
				</script>";
	}else{
		echo "<script type = \"text/javascript\">
				alert(\"pesanan anda tidak diproses\");
				return location.reload(true);
				</script>";
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Pesan | Jaklom</title>
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
	              <img src="uploads/users/<?php echo $_SESSION["user"]["photo"];?>" class="user-image" alt="User Image">
	              <span class="hidden-xs"><?php echo $_SESSION["user"]["name"];?></span>
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
	                <img src="uploads/users/<?php echo $_SESSION["user"]["photo"];?>" class="img-circle" alt="User Image">

	                <p>
	                  <?php echo $_SESSION["user"]["name"];?>
	                </p>
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
	          <img src="uploads/users/<?php echo $_SESSION["user"]["photo"];?>" class="img-circle sidebarImage" alt="User Image">
	        </div>
	        <div class="pull-left info">
	          <p><?php echo $_SESSION["user"]["name"];?></p>
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
	    <section style="width: 50%;" class="content">
	    	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Lengkapi Form Pemesanan Mobil</h3>
            </div>
            <form action="" method="POST">
              <div class="box-body">
              	<div class="form-group">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                  <label for="email">Alamat Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" required>
                </div>
                <div class="form-group">
                  <label for="telpon">Nomor HP</label>
                  <input type="tel" class="form-control" id="telpon" name="telpon" placeholder="Nomor HP" required>
                </div>
                <div class="form-group">
                  <label for="tanggalMulai">Tanggal Pemakaian</label>
                  <input type="date" class="form-control" id="tanggalMulai" name="tanggalMulai" onchange="hitung()" required>
                </div>
                <div class="form-group">
                  <label for="tanggalKembali">Tanggal Pengembalian</label>
                  <input type="date" class="form-control" id="tanggalKembali" name="tanggalKembali" onchange="hitung()" required>
                </div>
                <div class="form-group">
                	<label for="hargaHarian">Harga Perhari</label>
                	<input type="text" class="form-control" id="hargaHarian" name="hargaHarian" value="<?php echo "Rp." . $harga;?>" required disabled>
                </div>
                <div class="form-group">
                  <label for="total">Biaya Total</label>
                  <input type="text" class="form-control" id="total" name="total"required readonly>
                </div>
              </div>
              <div class="box-footer">
                <button name="booking" type="submit" class="btn btn-primary">Submit</button>
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
	<script>
		function GetDays(){
			var awal  = new Date(document.getElementById('tanggalMulai').value);
			var akhir = new Date(document.getElementById('tanggalKembali').value);
			return parseInt((akhir - awal) / (24*3600*1000));
		}
		function hitung(){
			if (document.getElementById('tanggalMulai')) {
				var hari  = GetDays();
				var harga = "<?php echo $harga;?>";
				var hasil = hari * harga;
				document.getElementById('total').value="Rp." +hasil; 
			}
		}
		  
	</script>
	</body>
</html>