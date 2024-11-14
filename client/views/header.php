<header class="header header-fullwidth header-style-4">
    <div class="header-outer">
        <div class="header-inner fixed-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-4 order-1">
                        <div class="header-left d-flex">
                            <!-- Logo Start Here -->
                            <a href="<?= BASE_URL ?>" class="logo-box">
                                <figure class="logo--normal">
                                    <img src="assets/img/logo/logo2.png" alt="Logo" height="80" />
                                </figure>
                                <figure class="logo--transparency">
                                    <img src="assets/img/logo/logo-white.png" alt="Logo" />
                                </figure>
                            </a>
                            <!-- Logo End Here -->

                            <ul class="header-toolbar">
                                <li class="header-toolbar__item d-none d-lg-block">
                                    <a href="#sideNav" class="toolbar-btn">
                                        <i class="dl-icon-menu2"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <?php require_once PATH_VIEW . 'topbar.php'; ?>

                    <div class="col-lg-2 col-md-9 col-8 order-2 order-lg-3">
                        <ul class="header-toolbar text-end">
                            <li class="header-toolbar__item user-info-menu-btn">
                                <a href="#">
                                    <i class="fa fa-user-circle-o"></i>
                                </a>
                                <ul class="user-info-menu">
                                    <li>
                                        <a href="<?= BASE_URL ?>?act=taikhoan_detail">Tài khoản</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=giohang">Giỏ hàng</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=lichsu">Lịch sử mua hàng</a>
                                    </li>
                                    <li>
                                        <?php if (isset($_SESSION["user"])) { ?>
                                            <a href="<?= BASE_URL ?>?act=taikhoan_logout">Đăng xuất</a>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-toolbar__item">
                                <a href="#searchForm" class="search-btn toolbar-btn">
                                    <i class="dl-icon-search1"></i>
                                </a>
                            </li>
                            <li class="header-toolbar__item d-lg-none">
                                <a href="#" class="menu-btn"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-sticky-header-height"></div>
    </div>
</header>