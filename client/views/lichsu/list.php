<!-- Breadcrumb area Start -->
<div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Lịch sử<br>mua hàng</h1>
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
                <div class="col-lg-8 mb-md--30">
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="table-content table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-start">Mã đơn hàng</th>
                                            <th class="text-center">Tổng tiền</th>
                                            <th class="text-center">Ngày đặt</th>
                                            <th class="text-center">Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listDonhang as $donhang) {
                                            $total = 0;
                                            $listChitietdonhang = getAllChiTietDonHang($donhang["id_donhang"]);
                                            foreach ($listChitietdonhang as $ctdh)
                                                $total += getOneSanpham($ctdh["id_sanpham"])["gia"] ?>
                                            <tr>
                                                <td class="text-start">
                                                    <span class="product-price-wrapper">
                                                        <a href="index.php?act=lichsu_chitiet&id=<?= $donhang["id_donhang"] ?>">
                                                            <span class="money"><?= $donhang["ma_donhang"] ?></span>
                                                        </a>
                                                    </span>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?= $total ?>đ</span>
                                                    </span>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?= $donhang["created_at"] ?></span>
                                                    </span>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?= showStatus_List($donhang["id_donhang"]) ?></span>
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
            </div>
        </div>
    </div>
</div>