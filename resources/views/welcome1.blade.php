<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
             <div><a class="navbar-brand" align="justify-content-between" href="{{ url('/') }}"><img src="{{ ('img/logo.png') }}" width="180px" align="align-items-center"></a></div><!-- <div><a class="navbar-brand" align="justify-content-between" href="index.php">Informasi Pangan Jogja</a></div> -->
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
             <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form> -->
            <!-- Navbar-->
             <!-- <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul> -->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"> Utama </div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard 
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Tambah Informasi</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Forms
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> -->
                            <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Form tambah sembako.php">Tambah Informasi Sembako</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>-->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Login
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                            <!-- <a class="nav-link" href="{{ route('register') }}">Register</a> -->
                                            <!-- <a class="nav-link" href="password.html">Forgot Password</a> -->
                                        </nav>
                                    </div>
                                   <!--  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a> -->
                                    <!-- <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div> -->
                                </nav>
                            </div>
                            <!-- <div class="sb-sidenav-menu-heading">Informasi</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Chart Perubahan Harga Sembako
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabel Infromasi Sembako
                            </a> -->
                        </div>
                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div> -->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">INFORMASI HARGA PANGAN</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Harga Stabil</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Harga Turun</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Harga Naik</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Main content -->
    <section class="content">
      <div class="row">
            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Telur Ayam<br>Rp 18.000<img src="{{ ('img/Telur.png') }}" width="70px" height="60px" align="right"></div>
                                    <!-- <div class="card-body">Rp 21.000</div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Tetap <i class="fas fa-arrow-circle-right text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>

                    <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                   <div class="card-body">Beras<br>Rp 80.000<img src="{{ ('img/beras.png') }}" width="95px" height="60px" align="right"></div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Turun <i class="fas fa-arrow-circle-down text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
              
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai<br>Rp 8.000<img src="{{ ('img/cabe.png') }}"  width="95px" height="60px" align="right"></div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>

                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Minyak Goreng<br>Rp 10.000<img src="{{ ('img/minyak goreng.png') }}"  width="95px" height="60px" align="right"></div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>

                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>

                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>

                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
                <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
        
                <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
                <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
           <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
           <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
          <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
          <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
           <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
          <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
         
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>

                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
                <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
        
                <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
                <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
           <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
           <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
          <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
          <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
           <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cabai</div>
                                    <div class="card-body">Rp 8.000</div>
                                   <!--  <div class="icon">
                                      <img src="apalah.png" width="100px" align="right">
                                    </div> -->
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small-box-footer text-white">Harga Naik <i class="fas fa-arrow-circle-up text-white"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Chart Perubahan Harga Sembako
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Informasi Sembako
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                      <!--   <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabel Informasi Sembako
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Sembako</th>
                                                <th>Harga Awal</th>
                                                <th>Harga Akhir</th>
                                                <th>Tanggal perubahan</th>
                                                <th>Gambar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Beras IR</td>
                                                <td>Rp 20.000</td>
                                                <td>Rp 25.000</td>
                                                <td>1 September 2020</td>
                                                <td><img src="Beras.jpg" height="50" width="100"/></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Informasi Pangan Jogja 2020</div>
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>  
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <!-- <script src="{{asset('js/jquery.js')}}"></script> -->
        <!-- <script src="{{asset('js/app1.js')}}"></script> -->
    </body>
</html>
