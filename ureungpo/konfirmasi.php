<?php 
require_once("cek.php");
require_once("../koneksi.php");

$idSewa = $_GET['id'];
$mobil = $_GET['mobil'];
$status = 'confirmed';
$statusMobil = 'tidak tersedia';
$sql = "UPDATE orderan SET status=:status WHERE idSewa=:sewa";
$updateMobil = "UPDATE mobil SET status=:status WHERE idMobil=:mobil";
$stmt = $koneksi->prepare($sql);
$update = $koneksi->prepare($updateMobil);

$parameter = array(
	":status" => $status,
	":sewa"  => $idSewa);

$mobilku = array(
	":status" => $statusMobil,
	":mobil" => $mobil
);
$konfirmasi = $stmt->execute($parameter);
$perbaiki = $update->execute($mobilku);

if ($konfirmasi && $perbaiki= TRUE) {
	echo "<script type = \"text/javascript\">
			alert(\"orderan berhasil dikonfirmasi\");
			window.location = (\"index.php\")
			</script>";
	
}

?>