<! DOCTYPE html>
<html>
        <head>
                <meta charset = "utf-8">
                <meta http-equiv = "Kompatibel dengan X-UA" content = "IE = edge">
                <title> Profil | Jaklom </title>
                <meta content = "width = lebar perangkat, skala awal = 1, skala maksimum = 1, skala pengguna = tidak ada" name = "viewport">
                <link rel = "stylesheet" href = "../ css / bootstrap.css">
                <link href = " https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css " rel = "stylesheet" integritas = "sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2cVoNoT anonim ">
                <link rel = "stylesheet" href = "../ css / ionicons.css">
                <link rel = "stylesheet" href = "../ css / AdminLTE.css">
                <link rel = "stylesheet" href = "../ css / _all-skins.css">
                <link rel = "stylesheet" href = " https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,700,300italic,400italic,600italic">
                <link rel = "stylesheet" href = "../ css / style.css">
        </head>
        <body class = "tahan-transisi skin-blue sidebar-mini">
        <div class = "wrapper">
          <header class = "main-header">
            <a href="index.php" class="logo">
              <span class = "logo-mini"> <b> J </b> ak </span>
              <span class = "logo-lg"> <b> Jak </b> Lom </span>
            </a>
            <nav class = "navbar navbar-static-top">
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class = "sr-only"> Beralih navigasi </span>
                <span class = "icon-bar"> </span>
                <span class = "icon-bar"> </span>
                <span class = "icon-bar"> </span>
              </a>
 
              <div class = "navbar-custom-menu">
                <ul class = "nav navbar-nav">
                  <li class = "dropdown user-menu pengguna">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src = "" class = "user-image" alt = "Gambar Pengguna">
                      <span class = "hidden-xs"> </span>
                    </a>
                    <ul class = "dropdown-menu">
                      <! - Gambar pengguna ->
                      <li class = "user-header">
                        <img src = "" class = "img-circle" alt = "Gambar Pengguna">
 
                        <p>
                          <Nama
                        </p>
                      </li>
                      <li class = "user-footer">
                        <div class = "pull-right">
                          <a href="logout.php" class="btn btn-default btn-flat"> Keluar </a>
                        </div>
                        <div class = "pull-left">
                                <a href="profil.php" class="btn btn-default btn-flat"> Profil </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
 
          <samping class = "main-sidebar">
            <section class = "sidebar">
              <div class = "user-panel">
                <div class = "pull-left image">
                  <img src = "" class = "img-circle sidebarImage" alt = "Gambar Pengguna">
                </div>
                <div class = "info tarik-kiri">
                  <p> Nama </p>
                  <a href="#"> <i class = "fa-circle teks-success"> </i> Online </a>
                </div>
              </div>
              <ul class = "sidebar-menu tree" data-widget = "tree">
                <li class = "header"> NAVIGASI UTAMA </li>
                <li>
                  <a href="index.php">
                    <i class = "fa fa-home"> </i> <span> Dasbor </span>
                  </a>
                </li>
                <li>
                  <a href="tambah.php">
                    <i class = "fa fa-plus"> </i> <span> Tambah Mobil </span>
                  </a>
                </li>
                <li>
                  <a href="order.php">
                    <i class = "fa fa-download"> </i> <span> Orderan Masuk </span>
                  </a>
                </li>
               </ul>
            </section>
          </aside>
 
          <div class = "content-wrapper">
            <section class = "content" style = "width: 30%;" ">
                <div class = "box box-primary">
            <div class = "box-body box-profile">
              <img class = "profil-pengguna-img img-responsif img-circle" src = " http://lorempixel.com/output/nightlife-qc-100-100-3.jpg " alt = "Gambar profil pengguna">
 
              <h3 class = "profile-username text-center"> Nama </h3>
 
              <p class = "text-cented text-center"> Admin </p>
 
              <ul class = "list-group list-group-unbordered">
                <li class = "list-group-item">
                  <b> Nama Lengkap </b> <a class="pull-right"> Nama </a>
                </li>
                <li class = "list-group-item">
                  <b> Nama Pengguna </b> <a class="pull-right"> <Usernama </a>
                </li>
                <li class = "list-group-item">
                  <b> Email </b> <a class="pull-right"> Email </a>
                </li>
              </ul>
 
              <a href="update.php" class="btn btn-primary btn-block"> <b> Perbarui Profil </b> </a>
            </div>
            <! - /.box-body ->
          </div>
                </section>
                </div>
 
          <footer class = "main-footer">
            <strong> Hak Cipta & salin; 2018 <a href="#"> Jaklom </a>. </strong> Semua hak
            pendiam.
          </footer>
 
          <div class = "control-sidebar-bg"> </div>
        </div>
 
        <script src = "../ js / jquery.js"> </script>
        <script src = "../ js / bootstrap.js"> </script>
        <script src = "../ js / jquery.slimscroll.js"> </script>
        <script src = "../ js / fastclick.js"> </script>
        <script src = "../ js / adminlte.js"> </script>
        <script src = "../ js / demo.js"> </script>
        <script>
          $ (dokumen) .ready (function () {
            $ ('. sidebar-menu'). tree ()
          })
        </script>
        </body>
</html>
 