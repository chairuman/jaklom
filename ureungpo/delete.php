<?php 
require_once("cek.php");
require_once("../koneksi.php");

$idMobil = $_GET['id'];
$sql = "DELETE FROM mobil WHERE idMobil=$idMobil";
$hapus = $koneksi->prepare($sql);
$hapus->execute();

if ($hapus= TRUE) {
	echo "<script type = \"text/javascript\">
				alert(\"data berhasil dihapus\");
				window.location = (\"index.php\")
				</script>";
}
?>