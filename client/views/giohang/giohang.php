<!-- Breadcrumb area Start -->
<div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Giỏ hàng</h1>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--80 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40">
                <form class="cart-form" action="index.php?act=thanhtoan" method="post">
                    <div class="col-lg-8 mb-md--30">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="table-content table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                                <th class="text-start">Tên sản phẩm</th>
                                                <th class="text-center">Giá</th>
                                                <!-- <th class="text-center">Số lượng</th> -->
                                                <th class="text-center">Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($_SESSION["giohang"] as $id_sanpham) {
                                                $sanpham = getOneSanpham($id_sanpham) ?>
                                                <tr>
                                                    <td class="product-remove text-start"><a href="index.php?act=giohang_delete&id=<?= $sanpham["id_sanpham"] ?>"><i class="dl-icon-close"></i></a></td>
                                                    <td class="product-thumbnail text-start">
                                                        <img src="<?= PATH_UPLOAD . getAllAnhsanpham($sanpham["id_sanpham"])[0]["url"] ?>" alt="Product Thumnail">
                                                    </td>
                                                    <td class="product-name text-start wide-column align-middle">
                                                        <a href="product-details.html"><?= $sanpham["ten_sanpham"] ?></a>
                                                    </td>
                                                    <td class="product-price align-middle">
                                                        <span class="product-price-wrapper">
                                                            <span class="money"><?= $sanpham["gia"] ?></span>
                                                        </span>
                                                    </td>
                                                    <!-- <td class="product-quantity align-middle">
                                                        <div class="quantity">
                                                            <input type="number" class="quantity-input" name="qty" id="qty-1" value="1" min="1">
                                                        </div>
                                                    </td> -->
                                                    <td class="product-total-price align-middle">
                                                        <span class="product-price-wrapper">
                                                            <span class="money"><strong><?= $sanpham["gia"] ?></strong></span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-collaterals">
                            <div class="cart-totals">
                                <h5 class="mb--15">Cart totals</h5>
                                <div class="table-content table-responsive">
                                    <table class="table order-table">
                                        <tbody>
                                            <tr>
                                                <th>Tổng tiền</th>
                                                <td>$<?= giohangTotal($_SESSION["giohang"]) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <input class="btn btn-fullwidth btn-style-1" type="submit" name="thanhtoan" value="Thanh toán">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->