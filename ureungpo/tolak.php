<?php
require_once("../koneksi.php");
require_once("cek.php");

$idSewa = $_GET['id'];
$status = 'ditolak';
$sql = "UPDATE orderan SET status=:status WHERE idSewa=:sewa";
$stmt = $koneksi->prepare($sql);
$parameter = array(
	":status" => $status,
	":sewa" => $idSewa
);

$tolak = $stmt->execute($parameter);
if ($tolak==TRUE) {
	echo "<script type = \"text/javascript\">
			alert(\"orderan telah ditolak\");
			window.location = (\"order.php\")
			</script>";
}