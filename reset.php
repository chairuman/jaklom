<?php
require_once('koneksi.php');

if (isset($_POST['update'])) {
	$password	= password_hash($_POST["password"], PASSWORD_DEFAULT);

	$sql  = "UPDATE users SET password = :password";
	$stmt = $koneksi->prepare($sql);

	$parameter = array(
		":password" => $password,
	);

	$update = $stmt->execute($parameter);
	if ($update==TRUE) {
		echo "<script type = \"text/javascript\">
				alert(\"password berhasil diganti silakan login dengan password baru anda\");
				window.location = (\"login.php\")
				</script>";
	}else{
		echo "<script type = \"text/javascript\">
				alert(\"uuups. terjadi kesalahan, coba lagi\");
				window.location = (\"reset.php\")
				</script>";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Lupa Password | Jaklom</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/ionicons.css">
		<link rel="stylesheet" href="css/AdminLTE.css">
		<link rel="stylesheet" href="css/blue.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="login.php"><b>Jak</b>Lom</a>
			</div>
			<div class="login-box-body">
			    <p class="login-box-msg">masukkan password baru anda</p>
			    <form action="" method="POST">
				    <div class="form-group has-feedback">
				        <input type="password" name="password" class="form-control" placeholder="masukkan password baru anda" required>
				        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
				    </div>
				    <div class="row">
				        <div class="col-xs-8">
				        </div>
				        <div class="col-xs-4">
				          <button type="submit" name="update" class="btn btn-primary btn-block btn-flat">Update</button>
				        </div>
				    </div>
			    </form>
			</div>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/icheck.js"></script>
	</body>
</html>