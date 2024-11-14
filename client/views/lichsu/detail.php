<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--80 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40">
                <div class="col-lg-8 mb-md--30">
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="table-content table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th class="text-start">Tên sản phẩm</th>
                                            <th class="text-center">Giá</th>
                                            <th class="text-center">Số lượng</th>
                                            <th class="text-center">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listCTDH as $ctdh) {
                                            $sanpham = getOneSanpham($ctdh["id_sanpham"]) ?>
                                            <tr>
                                                <td class="product-thumbnail text-start">
                                                    <img src="<?= PATH_UPLOAD . getAllAnhsanpham($sanpham["id_sanpham"])[0]["url"] ?>" alt="Product Thumnail">
                                                </td>
                                                <td class="product-name text-start wide-column">
                                                    <a href="index.php?act=sanpham_detail&id=<?= $sanpham["id_sanpham"] ?>"><?= $sanpham["ten_sanpham"] ?></a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?= $sanpham["gia"] ?></span>
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="product-price-wrapper">
                                                        <span class="money"><?= $ctdh["soluong"] ?></span>
                                                    </div>
                                                </td>
                                                <td class="product-total-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><strong><?= $sanpham["gia"] * $ctdh["soluong"] ?></strong></span>
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
                            <h5 class="mb--15">Thông tin đơn hàng</h5>
                            <div class="table-content table-responsive">
                                <table class="table order-table">
                                    <tbody>
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <td><?= $donhang["ma_donhang"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Trạng thái</th>
                                            <td>
                                                <?= showStatus("xacnhan", $donhang["trangthai_xacnhan"]) ?>
                                                <?= showStatus("thanhtoan", $donhang["trangthai_thanhtoan"]) ?>
                                                <?= showStatus("giaohang", $donhang["trangthai_giaohang"]) ?>
                                                <form action="index.php?act=lichsu_chitiet&id=<?= $id_donhang ?>" method="post">
                                                    <?= showConfirmation("thanhtoan", $donhang) ?>
                                                    <?= showConfirmation("giaohang", $donhang) ?>
                                                    <?= showConfirmation("huydon", $donhang) ?>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tên người nhận</th>
                                            <td><?= $donhang["ten_nguoinhan"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Địa chỉ</th>
                                            <td><?= $donhang["diachi"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Số điện thoại</th>
                                            <td><?= $donhang["sdt"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Hình thức thanh toán</th>
                                            <td><?= getOneThanhtoan($donhang["id_thanhtoan"])["ten_thanhtoan"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Ghi chú</th>
                                            <td><?= $donhang["ghichu"] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->