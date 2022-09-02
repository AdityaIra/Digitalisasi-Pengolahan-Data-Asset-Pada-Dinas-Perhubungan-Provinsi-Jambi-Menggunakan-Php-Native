<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php 
  error_reporting(0);
  session_start();
  include 'koneksi.php';
  $sql = $koneksi->query("select * from user where id='$_SESSION[id]'");
  $d_sesion = $sql->fetch_assoc(); 
?>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?pimpinanpage=dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?pimpinanpage=user&aksi=profile" class="nav-link">Profile</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="?pimpinanpage=dashboard" class="brand-link">
      <img src="dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="?pimpinanpage=dashboard" class="d-block"><?php echo $d_sesion['nama']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="?pimpinanpage=dashboard" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">MANAJEMEN</li>
          <li class="nav-item">
            <a href="?pimpinanpage=surat_masuk" class="nav-link">
              <i class="fas fa-inbox nav-icon"></i>
              <p>Disposisi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?pimpinanpage=disposisi" class="nav-link">
              <i class="fas fa-exchange-alt nav-icon"></i>
              <p>Disposisi</p>
            </a>
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 
    $pimpinanpage = $_GET['pimpinanpage'];
    $aksi = $_GET['aksi'];

    if ($pimpinanpage == "dashboard") {
        if ($aksi == "") {
            include "pimpinanpage/dashboard/dashboard.php";
        }
    }if ($pimpinanpage == "user") {
        if ($aksi == "") {
            include "pimpinanpage/user/user.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/user/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/user/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/user/hapus.php";
        }elseif ($aksi=="profile") {
            include "pimpinanpage/user/profile.php";
        }
    }if ($pimpinanpage == "ruangan") {
        if ($aksi == "") {
            include "pimpinanpage/ruangan/ruangan.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/ruangan/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/ruangan/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/ruangan/hapus.php";
        }
    }if ($pimpinanpage == "rak") {
        if ($aksi == "") {
            include "pimpinanpage/rak/rak.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/rak/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/rak/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/rak/hapus.php";
        }
    }if ($pimpinanpage == "sifat") {
        if ($aksi == "") {
            include "pimpinanpage/sifat/sifat.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/sifat/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/sifat/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/sifat/hapus.php";
        }
    }if ($pimpinanpage == "barang") {
        if ($aksi == "") {
            include "pimpinanpage/barang/barang.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/barang/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/barang/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/barang/hapus.php";
        }
    }if ($pimpinanpage == "mutasi") {
        if ($aksi == "") {
            include "pimpinanpage/mutasi/mutasi.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/mutasi/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/mutasi/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/mutasi/hapus.php";
        }
    }if ($pimpinanpage == "filter") {
        if ($aksi == "") {
            include "pimpinanpage/filter/filter.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/filter/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/filter/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/filter/hapus.php";
        }
    }if ($pimpinanpage == "surat_masuk") {
        if ($aksi == "") {
            include "pimpinanpage/surat_masuk/surat_masuk.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/surat_masuk/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/surat_masuk/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/surat_masuk/hapus.php";
        }
    }if ($pimpinanpage == "surat_keluar") {
        if ($aksi == "") {
            include "pimpinanpage/surat_keluar/surat_keluar.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/surat_keluar/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/surat_keluar/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/surat_keluar/hapus.php";
        }
    }if ($pimpinanpage == "disposisi") {
        if ($aksi == "") {
            include "pimpinanpage/disposisi/disposisi.php";
        }elseif ($aksi=="tambah") {
            include "pimpinanpage/disposisi/tambah.php";
        }elseif ($aksi=="ubah") {
            include "pimpinanpage/disposisi/ubah.php";
        }elseif ($aksi=="hapus") {
            include "pimpinanpage/disposisi/hapus.php";
        }
    }if ($pimpinanpage == "laporan_bukuper") {
        if ($aksi == "") {
            include "pimpinanpage/laporan_bukuper/laporan_bukuper.php";
        }
    }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard3.js"></script>
<script src="dist/js/pages/dashboard2.js"></script> 
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
