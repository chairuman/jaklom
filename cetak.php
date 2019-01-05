<?php 
require_once("koneksi.php");
$id = $_GET['id'];
$sql = "SELECT * FROM orderan WHERE idSewa=$id";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
$cetak =  $stmt->fetch();
$mulai = strtotime($cetak['tanggalPakai']);
$akhir = strtotime($cetak['tanggalKembali']);
$total = ($akhir - $mulai)/60/60/24;
$mobil= $cetak['idMobil'];
$query = "SELECT * FROM mobil WHERE idMobil=$mobil";
$jalan = $koneksi->prepare($query);
$jalan->execute();
$tampil = $jalan->fetch();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invoice | Jaklom</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/ionicons.css">
	<link rel="stylesheet" href="css/AdminLTE.css">
	<link rel="stylesheet" href="css/_all-skins.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Jaklom, Inc.
          <small class="pull-right"><?php echo "Tanggal: ". date("d/m/Y");?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Jaklom, Inc.</strong><br>
          Phone: (0651) 7553205<br>
          Email: info@jaklom.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong><?php echo $cetak['namaPemesan'];?></strong><br>
          <?php echo "Phone: ". $cetak['hpPemesan'];?><br>
          <?php echo "Email: ". $cetak['emailPemesan'];?>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b><?php echo "Invoice #". rand(100,100000); ?></b><br>
        <b><?php echo "Order ID: " ."</b>". $cetak['idSewa'];?><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Jenis Mobil</th>
            <th>Tanggal Pakai</th>
            <th>Tanggal Kembali</th>
            <th>Harga Perhari</th>
            <th>Lama Penyewaan</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td><?php echo $cetak['jenisMobil'];?></td>
            <td><?php echo $cetak['tanggalPakai'];?></td>
            <td><?php echo $cetak['tanggalKembali'];?></td>
            <td><?php echo "Rp. ".$tampil['harga'];?></td>
            <td><?php echo $total. " hari";?></td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-xs-6">
       
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>Harga Perhari</th>
              <td><?php echo "Rp. ". $tampil['harga'];?></td>
            </tr>
            <tr>
              <th>Total Waktu</th>
              <td><?php echo $total. " hari";?></td>
            </tr>
            <tr>
              <th>Harga Total:</th>
              <td><?php echo $cetak['biayaSewa'];?></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>