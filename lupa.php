<<<<<<< HEAD
<?php
require_once('koneksi.php');

if (isset($_POST['reset'])) {
	$email		= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

	$sql  = "SELECT * FROM users WHERE email=:email";
	$stmt = $koneksi->prepare($sql);

	$parameter = array(
		":email" => $email,
	);

	$stmt->execute($parameter);
	$reset = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($reset) {
		header("Location: reset.php");
	}else{
		echo "<script type = \"text/javascript\">
				alert(\"tidak ditemukan akun dengan email tersebut\");
				window.location = (\"lupa.php\")
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
			    <p class="login-box-msg">lupa password</p>
			    <form action="" method="POST">
				    <div class="form-group has-feedback">
				        <input type="email" name="email" class="form-control" placeholder="masukkan email anda" required>
				        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				    </div>
				    <div class="row">
				        <div class="col-xs-8">
				        </div>
				        <div class="col-xs-4">
				          <button type="submit" name="reset" class="btn btn-primary btn-block btn-flat">Reset</button>
				        </div>
				    </div>
			    </form>
			</div>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/icheck.js"></script>
	</body>
=======
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
			    <p class="login-box-msg">lupa password</p>
			    <form action="" method="POST">
				    <div class="form-group has-feedback">
				        <input type="email" name="email" class="form-control" placeholder="masukkan email anda" required>
				        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				    </div>
				    <div class="row">
				        <div class="col-xs-8">
				        </div>
				        <div class="col-xs-4">
				          <button type="submit" name="reset" class="btn btn-primary btn-block btn-flat">Reset</button>
				        </div>
				    </div>
			    </form>
			</div>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/icheck.js"></script>
	</body>
>>>>>>> fabefb1fad09cc0d049fa3beab86dc8e4830df88
</html>