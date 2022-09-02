<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <?php 
      error_reporting(0);
      session_start();
      include 'koneksi.php';
      $sql = $koneksi->query("select * from user where id='$_SESSION[id]'");
      $d_sesion = $sql->fetch_assoc(); 
    ?>

    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-settings mr-2 text-success"></i> Profil </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $d_sesion['nama']; ?></span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?adminpage=dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php 
            $adminpage = $_GET['adminpage'];
            $aksi = $_GET['aksi'];

            if ($adminpage == "dashboard") {
                if ($aksi == "") {
                    include "adminpage/dashboard/dashboard.php";
                }
            }if ($adminpage == "grafik") {
                if ($aksi == "") {
                    include "adminpage/grafik/grafik.php";
                }
            }if ($adminpage == "pelanggan") {
                if ($aksi == "") {
                    include "adminpage/pelanggan/pelanggan.php";
                }elseif ($aksi=="tambah") {
                    include "adminpage/pelanggan/tambah.php";
                }elseif ($aksi=="ubah") {
                    include "adminpage/pelanggan/ubah.php";
                }elseif ($aksi=="hapus") {
                    include "adminpage/pelanggan/hapus.php";
                }
            }if ($adminpage == "suplier") {
                if ($aksi == "") {
                    include "adminpage/suplier/suplier.php";
                }elseif ($aksi=="tambah") {
                    include "adminpage/suplier/tambah.php";
                }elseif ($aksi=="ubah") {
                    include "adminpage/suplier/ubah.php";
                }elseif ($aksi=="hapus") {
                    include "adminpage/suplier/hapus.php";
                }
            }if ($adminpage == "produk") {
                if ($aksi == "") {
                    include "adminpage/produk/produk.php";
                }elseif ($aksi=="tambah") {
                    include "adminpage/produk/tambah.php";
                }elseif ($aksi=="ubah") {
                    include "adminpage/produk/ubah.php";
                }elseif ($aksi=="hapus") {
                    include "adminpage/produk/hapus.php";
                }
            }if ($adminpage == "pembelian") {
                if ($aksi == "") {
                    include "adminpage/pembelian/pembelian.php";
                }elseif ($aksi=="tambah") {
                    include "adminpage/pembelian/tambah.php";
                }elseif ($aksi=="ubah") {
                    include "adminpage/pembelian/ubah.php";
                }elseif ($aksi=="hapus") {
                    include "adminpage/pembelian/hapus.php";
                }
            }if ($adminpage == "penjualan") {
                if ($aksi == "") {
                    include "adminpage/penjualan/penjualan.php";
                }elseif ($aksi=="tambah") {
                    include "adminpage/penjualan/tambah.php";
                }elseif ($aksi=="ubah") {
                    include "adminpage/penjualan/ubah.php";
                }elseif ($aksi=="hapus") {
                    include "adminpage/penjualan/hapus.php";
                }elseif ($aksi=="checkout") {
                  include "adminpage/penjualan/transaksi.php";
              }
            }if ($adminpage == "peminjaman") {
                if ($aksi == "") {
                    include "adminpage/peminjaman/peminjaman.php";
                }elseif ($aksi=="tambah") {
                    include "adminpage/peminjaman/tambah.php";
                }elseif ($aksi=="ubah") {
                    include "adminpage/peminjaman/ubah.php";
                }elseif ($aksi=="hapus") {
                    include "adminpage/peminjaman/hapus.php";
                }
            }if ($adminpage == "pengembalian") {
                if ($aksi == "") {
                    include "adminpage/pengembalian/pengembalian.php";
                }elseif ($aksi=="tambah") {
                    include "adminpage/pengembalian/tambah.php";
                }elseif ($aksi=="ubah") {
                    include "adminpage/pengembalian/ubah.php";
                }elseif ($aksi=="hapus") {
                    include "adminpage/pengembalian/hapus.php";
                }
            }if ($adminpage == "histori_pengembalian") {
                if ($aksi == "") {
                    include "adminpage/histori_pengembalian/histori_pengembalian.php";
                }elseif ($aksi=="tambah") {
                    include "adminpage/histori_pengembalian/tambah.php";
                }elseif ($aksi=="ubah") {
                    include "adminpage/histori_pengembalian/ubah.php";
                }elseif ($aksi=="hapus") {
                    include "adminpage/histori_pengembalian/hapus.php";
                }
            }if ($adminpage == "histori_peminjaman") {
                if ($aksi == "") {
                    include "adminpage/histori_peminjaman/histori_peminjaman.php";
                }elseif ($aksi=="tambah") {
                    include "adminpage/histori_peminjaman/tambah.php";
                }elseif ($aksi=="ubah") {
                    include "adminpage/histori_peminjaman/ubah.php";
                }elseif ($aksi=="hapus") {
                    include "adminpage/histori_peminjaman/hapus.php";
                }
            }if ($adminpage == "laporan_bukuper") {
                if ($aksi == "") {
                    include "adminpage/laporan_bukuper/laporan_bukuper.php";
                }
            }
            ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2021</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        function isi_otomatis(){
            var kode_produk = $("#kode_produk").val();
            $.ajax({
                url: 'proses.php',
                data:"kode_produk="+kode_produk ,
            }).success(function (data) {
                var json = data,
                obj = JSON.parse(json);
                $('#nama_produk').val(obj.nama_produk);
                $('#harga_modal').val(obj.harga_modal);
            });
        }
    </script>
  </body>
</html>