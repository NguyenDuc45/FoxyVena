<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FoxyVena | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<!-- <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"> -->
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <?php if (!isset($_GET["act"])) { ?>
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>
    <?php } ?>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= BASE_URL ?>" class="nav-link">Trang chủ</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= BASE_URL ?>" class="brand-link">
        <img src="dist/img/logo3.png" alt="FoxyVena Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">FoxyVena</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
            <a href="login.php" class="d-block text-danger">Đăng xuất</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">QUẢN LÝ</li>
            <li class="nav-item">
              <a href="index.php?act=danhmuc" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Danh mục
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?act=sanpham" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Sản phẩm
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?act=taikhoan" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Tài khoản
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?act=binhluan" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Bình luận
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?act=donhang" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Đơn hàng
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?act=thanhtoan" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Hình thức thanh toán
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>