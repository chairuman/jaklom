<?php
require_once("cek.php");
require_once("../koneksi.php");

$sql  = "SELECT count(*) FROM orderan WHERE status='pending'";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
$hitungOrder = $stmt->fetchColumn(); 

$user = "SELECT count(*) FROM users";
$siap = $koneksi->prepare($user);
$siap->execute();
$hitungUser = $siap->fetchColumn();

$mobil = "SELECT count(*) FROM mobil";
$cars = $koneksi->prepare($mobil);
$cars->execute();
$hitungMobil = $cars->fetchColumn();

$tersedia = "SELECT count(*) FROM mobil WHERE status='tidak tersedia'";
$ada = $koneksi->prepare($tersedia);
$ada->execute();
$hitungTersedia = $ada->fetchColumn();

$tabel = "SELECT * FROM mobil";
$tampilTabel = $koneksi->query($tabel);
$tampilTabel->setFetchMode(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Jaklom</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ionicons.css">
    <link rel="stylesheet" href="../css/AdminLTE.css">
    <link rel="stylesheet" href="../css/_all-skins.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="../css/style.css">
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
                <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $_SESSION["admin"]["name"];?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_SESSION["admin"]["name"];?>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                  <div class="pull-left">
                      <a href="profil.php" class="btn btn-default btn-flat">Profile</a>
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
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo "../uploads/admin/" . $_SESSION['admin']['photo'];?>" class="img-circle sidebarImage" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $_SESSION["admin"]["name"];?></p>
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
            <a href="tambah.php">
              <i class="fa fa-plus"></i> <span>Tambah Mobil</span>
            </a>
          </li>
          <li>
            <a href="order.php">
              <i class="fa fa-download"></i> <span>Orderan Masuk</span>
            </a>
          </li>
         </ul>
      </section>
    </aside>

    <div class="content-wrapper">
      <section class="content-header">
          <h1>
          Dashboard
          </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $hitungOrder; ?></h3>

                <p>Orderan Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $hitungMobil;?></h3>

                <p>Mobil Direntalkan</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-car"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $hitungUser;?></h3>

                <p>User Terdaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $hitungTersedia;?></h3>

                <p>Mobil tidak tersedia</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Semua Mobil</h3>
            </div>
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_length" id="example1_length">
                      <label>Show 
                        <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                        </select> entries
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div id="example1_filter" class="dataTables_filter">
                      <label class="pull-right">Search:
                        <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Jenis Mobil</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 225px;">Nomor Polisi</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Harga Sewa</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Status</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 113px;">Gambar</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 70px;"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($semua = $tampilTabel->fetch()):?>
                        <tr role="row" class="odd">
                            <td><?php echo $semua['jenisMobil'];?></td>
                            <td><?php echo $semua['nomorPolisi'];?></td>
                            <td><?php echo "Rp.".$semua['harga'];?></td>
                            <td><?php echo $semua['status'];?></td>
                            <td><img class="gambarTable" src="<?php echo "../uploads/admin/" . $semua['fotoMobil'];?>"></td>
                            <td>
                              <a href="edit.php?id=<?php echo $semua['idMobil'];?>" class="btn btn-warning btn-xs">
                              <i class="fa fa-edit"></i>
                            </a>
                              <a href="delete.php?&id=<?php echo $semua['idMobil'];?>" name="delete" class="btn btn-danger btn-xs">
                              <i class="fa fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                      <?php endwhile;?>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
    </section>
    </div>

    <footer class="main-footer">
      <strong>Copyright &copy; 2018 <a href="#">Jaklom</a>.</strong> All rights
      reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
  </div>

  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/jquery.slimscroll.js"></script>
  <script src="../js/fastclick.js"></script>
  <script src="../js/adminlte.js"></script>
  <script src="../js/demo.js"></script>
  <script>
    $(document).ready(function () {
      $('.sidebar-menu').tree()
    })
  </script>
  </body>
</html>
