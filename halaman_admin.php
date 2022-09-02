<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
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
        <a href="?adminpage=dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?adminpage=user&aksi=profile" class="nav-link">Profile</a>
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
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-2 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="?adminpage=dashboard" class="d-block"><?php echo $d_sesion['nama']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="?adminpage=dashboard" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">MASTER</li>
          <li class="nav-item">
            <a href="?adminpage=user" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?adminpage=jalan" class="nav-link">
              <i class="fas fa-road nav-icon"></i>
              <p>Jalan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?adminpage=fasilitas_keselamatan" class="nav-link">
              <i class="fas fa-plus-square nav-icon"></i>
              <p>Fasilitas Keselamatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?adminpage=kabupaten" class="nav-link">
              <i class="fas fa-bullhorn nav-icon"></i>
              <p>Kabupaten</p>
              </a>
          </li>
          <li class="nav-item">
            <a href="?adminpage=ruangan" class="nav-link">
              <i class="fas fa-door-closed nav-icon"></i>
              <p>Ruangan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?adminpage=rak" class="nav-link">
              <i class="fas fa-archive nav-icon"></i>
              <p>Rak</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?adminpage=sifat" class="nav-link">
              <i class="fas fa-adjust nav-icon"></i>
              <p>Sifat Disposisi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?adminpage=kepada" class="nav-link">
              <i class="fas fa-award nav-icon"></i>
              <p>Kepada</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?adminpage=lelang" class="nav-link">
              <i class="fas fa-shopping-cart nav-icon"></i>
              <p>Lelang</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Inventaris
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?adminpage=barang" class="nav-link">
                  <i class="fas fa-align-justify nav-icon"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?adminpage=mutasi" class="nav-link">
                  <i class="fas fa-sitemap nav-icon"></i>
                  <p>Mutasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?adminpage=filter" class="nav-link">
                  <i class="fas fa-filter nav-icon"></i>
                  <p>Filter Mutasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MANAJEMEN</li>
          <li class="nav-item">
            <a href="?adminpage=surat_masuk" class="nav-link">
              <i class="fas fa-inbox nav-icon"></i>
              <p>Surat Masuk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?adminpage=surat_keluar" class="nav-link">
              <i class="fas fa-paper-plane nav-icon"></i>
              <p>Surat Keluar</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="?adminpage=disposisi" class="nav-link">
              <i class="fas fa-exchange-alt nav-icon"></i>
              <p>Disposisi</p>
            </a>
          </li> -->
          <li class="nav-header">LAPORAN</li>
          <li class="nav-item">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
              Laporan
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?adminpage=ruanganlap" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Ruangan</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="?adminpage=kondisi" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Kondisi</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="?adminpage=mutasilap" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Mutasi</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="?adminpage=histori" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Histori</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="?adminpage=jalanlap" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Jalan</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="?adminpage=fasilitaskeselamatanlap" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Fasilitas Keselamatan</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="?adminpage=surat_masuklap" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Surat Masuk</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="?adminpage=surat_keluarlap" class="nav-link">
                  <i class="fas fa-paper-plane nav-icon"></i>
                  <p>Surat Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?adminpage=lelanglap" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Lelang</p>
                </a>
              </li><!-- 
          <li class="nav-item">
            <a href="?adminpage=surat_keluar" class="nav-link">
              <i class="far fa-paper-plane nav-icon"></i>
              <p>Surat Keluar</p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="?adminpage=disposisi" class="nav-link">
              <i class="fas fa-exchange-alt nav-icon"></i>
              <p>Disposisi</p>
            </a>
          </li> -->
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
    $adminpage = $_GET['adminpage'];
    $aksi = $_GET['aksi'];

    if ($adminpage == "dashboard") {
        if ($aksi == "") {
            include "adminpage/dashboard/dashboard.php";
        }
    }if ($adminpage == "user") {
        if ($aksi == "") {
            include "adminpage/user/user.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/user/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/user/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/user/hapus.php";
        }elseif ($aksi=="profile") {
            include "adminpage/user/profile.php";
        }
    }if ($adminpage == "grafik") {
        if ($aksi == "") {
            include "adminpage/grafik/grafik.php";
        }
    }if ($adminpage == "kabupaten") {
        if ($aksi == "") {
          include "adminpage/kabupaten/kabupaten.php";
        } elseif ($aksi == "tambah") {
          include "adminpage/kabupaten/tambah.php";
        } elseif ($aksi == "ubah") {
          include "adminpage/kabupaten/ubah.php";
        } elseif ($aksi == "hapus") {
          include "adminpage/kabupaten/hapus.php";
        }
    }if ($adminpage == "ruangan") {
        if ($aksi == "") {
            include "adminpage/ruangan/ruangan.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/ruangan/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/ruangan/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/ruangan/hapus.php";
        }
    }if ($adminpage == "rak") {
        if ($aksi == "") {
            include "adminpage/rak/rak.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/rak/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/rak/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/rak/hapus.php";
        }
    }if ($adminpage == "sifat") {
        if ($aksi == "") {
            include "adminpage/sifat/sifat.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/sifat/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/sifat/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/sifat/hapus.php";
        }
    }if ($adminpage == "kepada") {
        if ($aksi == "") {
            include "adminpage/kepada/kepada.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/kepada/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/kepada/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/kepada/hapus.php";
        }
    }if ($adminpage == "barang") {
        if ($aksi == "") {
            include "adminpage/barang/barang.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/barang/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/barang/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/barang/hapus.php";
        }
    }if ($adminpage == "fasilitas_keselamatan") {
        if ($aksi == "") {
            include "adminpage/fasilitas_keselamatan/fasilitas_keselamatan.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/fasilitas_keselamatan/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/fasilitas_keselamatan/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/fasilitas_keselamatan/hapus.php";
        }
    }if ($adminpage == "jalan") {
        if ($aksi == "") {
            include "adminpage/jalan/jalan.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/jalan/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/jalan/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/jalan/hapus.php";
        }
    }if ($adminpage == "lelang") {
        if ($aksi == "") {
            include "adminpage/lelang/lelang.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/lelang/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/lelang/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/lelang/hapus.php";
        }
    }if ($adminpage == "jalanlap") {
        if ($aksi == "") {
            include "adminpage/jalanlap/jalanlap.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/jalanlap/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/jalanlap/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/jalanlap/hapus.php";
        }
    }if ($adminpage == "surat_masuklap") {
        if ($aksi == "") {
            include "adminpage/surat_masuklap/surat_masuklap.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/surat_masuklap/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/surat_masuklap/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/surat_masuklap/hapus.php";
        }
    }if ($adminpage == "surat_keluarlap") {
        if ($aksi == "") {
            include "adminpage/surat_keluarlap/surat_keluarlap.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/surat_keluarlap/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/surat_keluarlap/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/surat_keluarlap/hapus.php";
        }
    }if ($adminpage == "disposisilap") {
        if ($aksi == "") {
            include "adminpage/disposisilap/disposisilap.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/disposisilap/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/disposisilap/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/disposisilap/hapus.php";
        }
    }if ($adminpage == "fasilitaskeselamatanlap") {
        if ($aksi == "") {
            include "adminpage/fasilitaskeselamatanlap/fasilitaskeselamatanlap.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/fasilitaskeselamatanlap/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/fasilitaskeselamatanlap/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/fasilitaskeselamatanlap/hapus.php";
        }
    }if ($adminpage == "mutasi") {
        if ($aksi == "") {
            include "adminpage/mutasi/mutasi.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/mutasi/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/mutasi/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/mutasi/hapus.php";
        }
    }if ($adminpage == "filter") {
        if ($aksi == "") {
            include "adminpage/filter/filter.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/filter/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/filter/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/filter/hapus.php";
        }
    }if ($adminpage == "ruanganlap") {
        if ($aksi == "") {
            include "adminpage/ruanganlap/ruanganlap.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/ruanganlap/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/ruanganlap/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/ruanganlap/hapus.php";
        }
    }if ($adminpage == "kondisi") {
        if ($aksi == "") {
            include "adminpage/kondisi/kondisi.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/kondisi/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/kondisi/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/kondisi/hapus.php";
        }
    }if ($adminpage == "mutasilap") {
        if ($aksi == "") {
            include "adminpage/mutasilap/mutasilap.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/mutasilap/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/mutasilap/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/mutasilap/hapus.php";
        }
    }if ($adminpage == "lelanglap") {
        if ($aksi == "") {
            include "adminpage/lelanglap/lelanglap.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/lelanglap/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/lelanglap/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/lelanglap/hapus.php";
        }
    }if ($adminpage == "histori") {
        if ($aksi == "") {
            include "adminpage/histori/histori.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/histori/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/histori/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/histori/hapus.php";
        }
    }if ($adminpage == "surat_masuk") {
        if ($aksi == "") {
            include "adminpage/surat_masuk/surat_masuk.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/surat_masuk/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/surat_masuk/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/surat_masuk/hapus.php";
        }elseif ($aksi=="prosesemail") {
            include "adminpage/surat_masuk/prosesemail.php";
        }
    }if ($adminpage == "surat_keluar") {
        if ($aksi == "") {
            include "adminpage/surat_keluar/surat_keluar.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/surat_keluar/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/surat_keluar/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/surat_keluar/hapus.php";
        }
    }if ($adminpage == "disposisi") {
        if ($aksi == "") {
            include "adminpage/disposisi/disposisi.php";
        }elseif ($aksi=="tambah") {
            include "adminpage/disposisi/tambah.php";
        }elseif ($aksi=="ubah") {
            include "adminpage/disposisi/ubah.php";
        }elseif ($aksi=="hapus") {
            include "adminpage/disposisi/hapus.php";
        }
    }if ($adminpage == "laporan_bukuper") {
        if ($aksi == "") {
            include "adminpage/laporan_bukuper/laporan_bukuper.php";
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
<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $('#dataTable1').DataTable();
  } );
</script>
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
<!-- <script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
</script> -->
</body>
</html>
