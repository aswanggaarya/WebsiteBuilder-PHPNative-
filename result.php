<?php include 'koneksi.php'; session_start(); include 'ceksession.php';?>
<?php  
	function query($query)
	{
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	$gambar = query("SELECT * FROM gambar");
  
?>
<!DOCTYPE html>
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

      <!-- Nav Item - Navbar -->
      <li class="nav-item">
        <a class="nav-link" href="navbar.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Navbar</span></a>
      </li>

      <!-- Nav Item - Image -->
      <li class="nav-item">
        <a class="nav-link" href="image.php">
          <i class="far fa-images"></i>
          <span>Image</span></a>
      </li>

      <!-- Nav Item - Result -->
      <li class="nav-item active">
        <a class="nav-link" href="result.php">
          <i class="far fa-lightbulb"></i>
          <span>Result</span></a>
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

          <h4>Add Image</h4>

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

         
          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Area Chart -->
              <div class="card shadow mb-4" style="height: 95%;">
                <div class="card-body">
                  <div class="chart-area">
                    <table class="table table-sm">
					  <thead>
					    <tr style="color: #1184F0;">
					      <th scope="col">No</th>
					      <th scope="col">Image</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <?php $i = 1; ?>
					  <?php foreach( $gambar as $row ) : ?>
					  <tbody>
					    <tr>
					      <td><?= $i; ?></td>
					      <td><img src="img/<?php echo $row["gambar"]; ?>" width="80"></td>
					      <td>
					      	<a href="">Ubah</a> |
					      	<a href="hapus.php?id=<?php echo $row["idgambar"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
					      </td>
					    </tr>
					  </tbody>
					<?php $i++; ?>
					<?php endforeach; ?>
					</table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      

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
