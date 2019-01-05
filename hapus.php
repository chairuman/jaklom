<?php
require_once("koneksi.php");
require_once("cek.php");

$id = $_GET['id'];
$sql = "DELETE FROM orderan WHERE idSewa=$id";
$hapus = $koneksi->prepare($sql);
$hapus->execute();
if ($hapus=TRUE) {
	echo "<script type = \"text/javascript\">
				alert(\"berhasil dihapus\");
				window.location = (\"index.php\")
				</script>";
}