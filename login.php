<?php
require_once('koneksi.php');

if(isset($_POST['login'])){
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

	$sql  = "SELECT * FROM users WHERE username=:username OR email=:email";
	$stmt = $koneksi->prepare($sql);

	$parameter = array(
		":username" => $username,
		":email" => $username
	);

	$stmt->execute($parameter);

	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($user) {
	 	if (password_verify($password, $user["password"])) {
	 		session_start();
	 		$_SESSION["user"] = $user;
	 		header("Location: index.php");
	 	}else{
	 		echo "<script type = \"text/javascript\">
				alert(\"Maaf username atau password salah. periksa kembali\");
				window.location = (\"login.php\")
				</script>";
	 	}
	}else{
		echo "<script type = \"text/javascript\">
				alert(\"Maaf anda belum terdaftar. daftar dulu\");
				window.location = (\"register.php\")
				</script>";
	} 
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Masuk | Jaklom</title>
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
			    <p class="login-box-msg">silakan masuk dengan akun anda</p>
			    <form action="" method="POST">
				    <div class="form-group has-feedback">
				        <input type="text" name="username" class="form-control" placeholder="username atau email" required>
				        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				    </div>
				    <div class="form-group has-feedback">
				        <input type="password" name="password" class="form-control" placeholder="Password" required>
				        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
				    </div>
				    <div class="row">
				        <div class="col-xs-8">
				        </div>
				        <div class="col-xs-4">
				          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Masuk</button>
				        </div>
				    </div>
			    </form>
			    <a href="lupa.php">Lupa password</a><br>
			    <a href="register.php" class="text-center">Belum punya akun?</a>
			</div>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/icheck.js"></script>
	</body>
</html>