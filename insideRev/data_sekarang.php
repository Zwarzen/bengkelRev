<?php include '_header.php'?>
<?php
  include 'script/data_pelanggan/koneksi.php';
?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        
        <div class="sidebar-brand-text mx-3">Admin Bengkel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item active" href="data_sekarang.php">Data Sekarang</a>
            <a class="collapse-item" href="data_pegawai.php">Data Pegawai</a>
            <a class="collapse-item" href="data_harga.php">Data Harga</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="data_perbaikan.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Perbaikan</span></a>
      </li>
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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <div class="container-fluid" style="height: 100%;">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Hari Ini</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

        <div class="row">

            <!-- Pendapatan perbulan -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pelanggan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php  
                          include 'script/data_pelanggan/koneksi.php';

                                  $query=mysqli_query($koneksi,"SELECT count(id_pelanggan) From tb_pelanggan");
                                  $hasil=count($query);

                                  echo "$hasil";


                        ?>
                          
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pendapatan Perbulan -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Pegawai</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php  
                          include 'script/data_pegawai/koneksi.php';
                                  $sql    ="SELECT nama_pegawai FROM tb_pegawai";
                                  $count    =count('nama_pegawai');
                                  echo "$count";
                          ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pendapatan Perbulan -->
           

            <!-- Pending Requests Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sudah Perbaikan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php  
                          include 'script/data_pelanggan/koneksi.php';
                                  $query=mysqli_query($koneksi,"SELECT count(id_pelanggan) From tb_pelanggan");
                                  $hasil=count($query);

                                  echo "$hasil";
                          ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cogs fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Data Pelanggan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <div class = "col-sm-10">
        <h1>Tambah Data</h1>
        <div style="padding-bottom: 210px;">

            <fieldset style = "padding: 10px;">

          <table>
                      
          <form action = "script/data_pelanggan/simpan.php" method = "post">
                  <fieldset style = "padding: 10px;">
                    
                    <div>
                      <label for = "nama_pelanggan">Nama Pelanggan</label>
                        <input class = "form-control" type = "text" name = "nama_pelanggan" id = "" required="true">
                    </div>
                    
                    <div>
                      <label for = "pembayaran">Pembayaran</label>
                        <input class = "form-control" type = "text" name = "pembayaran" id = "" required="true">
                    </div>
                    <div>
                      <label for = "alamat">Alamat</label>
                        <input class = "form-control" type = "text" name = "alamat" id = "" required="true">
                    </div>
                    <div>
                      <label for = "no_telp">Nomor Telpon</label>
                        <input class = "form-control" type = "text" name = "no_telp" id = "" required="true">
                    </div>
                    <div>
                      <label for = "status">Status</label>
                        <input class = "form-control" type = "text" name = "status" id = "" required="true">
                    </div>

                    <input class = "btn btn-success" type = "submit" name = "submit" value = "Submit" style = "margin-top: 10px;">
                  </fieldset>
              </form>
          </table>
              </form>
            </fieldset>
        </div>
        <!--- col-sm-10 --->
      </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
    </div>
<?php include '_footer.php'?>