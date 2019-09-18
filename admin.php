<?php
  session_start(); 
  include 'koneksi.php';
  include 'ceksession.php';
  include 'functions.php';

  if ( isset($_POST["btnadd"])) {
    if ( add($_POST) > 0 ) {
      echo "<link rel='icon' href='img/logo.png'><div class='alert alert-success'>Add template success</div>";
      echo "<meta http-equiv='refresh' content='2;url=admin.php'>";
    } else {
      // echo mysqli_error($koneksi);
      echo "<link rel='icon' href='img/logo.png'><div class='alert alert-danger'>Failed data added</div>";
      echo "<meta http-equiv='refresh' content='2;url=admin.php'>";
    }
  }
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Custom - DnD</title>
  <link rel="icon" href="img/logo.png">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3"><img src="img/lgputih.png" style="width: 70%;"><!-- <sup>2</sup> --></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Custom
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="tambah.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Template</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          <h4>Add Template</h4>
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><p style="font-size: 15px;"><?php echo $_SESSION['email']; ?></p></span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Area Chart -->
              <div class="card shadow mb-4" style="height: 60%;">
                <div class="card-body" style="height: 500px;">
                  <div class="chart-area">
                    <p>Please attention tag href!</p>
                    <form method="post">
                      <input type="text" name="kategori" class="form-control" placeholder="Category">
                      <textarea name="tem" height="500" type="text" class="form-control" placeholder="HTML code" style="margin-top: 2%;"></textarea>
                      <input type="text" name="nama" class="form-control" placeholder="Admin Name" style="margin-top: 2%;">
                      <button type="submit" class="btn btn-primary" name="btnadd" style="margin-top: 2%;">Save</button>
                    </form>

                  </div>
                </div>
              </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>
