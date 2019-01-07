<<<<<<< HEAD
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar | Jaklom</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, 
user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/ionicons.css">
  <link rel="stylesheet" href="css/AdminLTE.css">
  <link rel="stylesheet" href="css/blue.css">
  <link rel="stylesheet" 
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 </head>
 <body class="hold-transition register-page">
  <div class="register-box">
   <div class="register-logo">
       <a href="#"><b>Jak</b>Lom</a>
   </div>
     <div class="register-box-body">
       <p class="login-box-msg">daftar akun baru</p>
    <form action="" method="POST">
     <div class="form-group has-feedback">
         <input type="text" name="name" class="form-control" 
placeholder="nama lengkap" required>
         <span class="glyphicon glyphicon-user 
form-control-feedback"></span>
     </div>
     <div class="form-group has-feedback">
         <input type="text" name="username" class="form-control" 
placeholder="username" required>
         <span class="glyphicon glyphicon-user 
form-control-feedback"></span>
     </div>
     <div class="form-group has-feedback">
         <input type="email" name="email" class="form-control" 
placeholder="email" required>
         <span class="glyphicon glyphicon-envelope 
form-control-feedback"></span>
     </div>
        <div class="form-group has-feedback">
            <input type="password" id="password" name="password" 
class="form-control" placeholder="password" required>
            <span class="glyphicon glyphicon-lock 
form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
            </div>
            <div class="col-xs-4">
               <button type="submit" name="register" class="btn 
btn-primary btn-block btn-flat">Daftar</button>
            </div>
        </div>
    </form>
       <a href="#" class="text-center">sudah punya akun?</a>
     </div>
  </div>


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/icheck.js"></script>
 </body>
</html>
=======
<?php
require_once('koneksi.php');

if(isset($_POST['register'])){
	$name 		= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$username 	= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password	= password_hash($_POST["password"], PASSWORD_DEFAULT);
	$email		= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

	$sql  = "INSERT INTO users (name, username, email, password) VALUES (:name, :username, :email, :password)";
	$stmt = $koneksi->prepare($sql);

	$parameter = array(
		":name" 	=> $name,
		":username" => $username,
		":password" => $password,
		":email"	=> $email
	);

	$simpanData = $stmt->execute($parameter);
	if($simpanData == TRUE){
		echo "<script type = \"text/javascript\">
				alert(\"akun berhasil didaftarkan. silakan login\");
				window.location = (\"login.php\")
				</script>";
	}else{
		echo "<script type = \"text/javascript\">
				alert(\"akun gagal didaftarkan,username atau email telah digunakan.\");
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
		<title>Daftar | Jaklom</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/ionicons.css">
		<link rel="stylesheet" href="css/AdminLTE.css">
		<link rel="stylesheet" href="css/blue.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body class="hold-transition register-page">
		<div class="register-box">
			<div class="register-logo">
			    <a href="register.php"><b>Jak</b>Lom</a>
			</div>
		  	<div class="register-box-body">
		    	<p class="login-box-msg">daftar akun baru</p>
				<form action="" method="POST">
					<div class="form-group has-feedback">
					    <input type="text" name="name" class="form-control" placeholder="nama lengkap" required>
					    <span class="glyphicon glyphicon-user form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
					    <input type="text" name="username" class="form-control" placeholder="username" required>
					    <span class="glyphicon glyphicon-user form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
					    <input type="email" name="email" class="form-control" placeholder="email" required>
					    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
				    <div class="form-group has-feedback">
				        <input type="password" id="password" name="password" class="form-control" placeholder="password" required>
				        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
				    </div>
				    <div class="row">
				        <div class="col-xs-8">
				        </div>
				        <div class="col-xs-4">
				          	<button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Daftar</button>
				        </div>
				    </div>
				</form>
		    	<a href="login.php" class="text-center">sudah punya akun?</a>
		  	</div>
		</div>


		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/icheck.js"></script>
	</body>
</html>
>>>>>>> 2d026d27246056b88b5b5209a8e88a88518bff91
