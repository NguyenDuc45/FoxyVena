<div id="content" class="main-content-wrapper">
    <div class="page-content-inner enable-full-width">
        <div class="container-fluid">
            <div class="row pt--40">
                <div class="col-md-6 product-main-image d-flex justify-content-center">
                    <img src="<?= PATH_UPLOAD . getAllAnhsanpham($sanpham["id_sanpham"])[0]["url"] ?>" alt="Ảnh sản phẩm">
                </div>
                <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                    <div class="product-summary">
                        <div class="clearfix"></div>
                        <h3 class="product-title"><?= $sanpham["ten_sanpham"] ?></h3>
                        <!-- <span class="product-stock in-stock float-right">
                            <i class="dl-icon-check-circle1"></i>
                            in stock
                        </span> -->
                        <div class="product-price-wrapper mb--40 mb-md--10">
                            <span class="money"><?= $sanpham["gia"] ?>đ</span>
                            <!-- <span class="old-price">
                                <span class="money">$60.00</span>
                            </span> -->
                        </div>
                        <div class="clearfix"></div>
                        <p class="product-short-description mb--45 mb-sm--20"><?= $sanpham["mota"] ?></p>
                        <p class="product-short-description mb--45 mb-sm--20">Lượt xem: <?= $sanpham["luotxem"] ?></p>
                        <form action="#" class="form--action mb--30 mb-sm--20">
                            <div class="product-action flex-row align-items-center">
                                <!-- <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                </div> -->
                                <a href="index.php?act=giohang_add&id=<?= $sanpham["id_sanpham"] ?>">
                                    <button type="button" class="btn btn-style-1 btn-large add-to-cart">
                                        Thêm vào giỏ hàng
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row pt--80 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40 d-flex justify-content-center">
                <div class="col-lg-8 mb-md--30">
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="row mb--40 mb-md--30">
                                <div class="col-12 text-center">
                                    <h2>Bình luận</h2>
                                    <hr class="separator center mt--25 mt-md--15">
                                </div>
                            </div>
                            <div class="table-content table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-start">Người bình luận</th>
                                            <th class="text-center">Nội dung</th>
                                            <th class="text-center">Thời gian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $listBinhluan = getAllBinhluan_Sanpham($sanpham["id_sanpham"]);
                                        foreach ($listBinhluan as $binhluan) { ?>
                                            <tr>
                                                <td class="product-name text-start">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?= getOneTaikhoan_Id($binhluan["id_taikhoan"])["hoten"] ?></span>
                                                    </span>
                                                </td>
                                                <td class="product-name text-start">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?= $binhluan["noidung"] ?></span>
                                                    </span>
                                                </td>
                                                <td class="product-total-price align-middle">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?= $binhluan["created_at"] ?></span>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <?php if (isset($_SESSION["user"])) { ?>
                                    <form action="index.php?act=sanpham_detail&id=<?= $sanpham["id_sanpham"] ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-border border-width-2" name="noidung" placeholder="Nhập bình luận của bạn" autocomplete="off">
                                        </div>
                                        <input class="btn btn-submit" type="submit" name="submit" value="Gửi bình luận">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt--35 pt-md--25 pt-sm--15 pb--75 pb-md--55 pb-sm--35">
                <div class="col-12">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12 text-center">
                            <h2>Sản phẩm tương tự</h2>
                            <hr class="separator center mt--25 mt-md--15">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="airi-element-carousel product-carousel nav-vertical-center" data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true, 
                                    "prevArrow": "dl-icon-left", 
                                    "nextArrow": "dl-icon-right" 
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":450, "settings": {"slidesToShow": 1} }
                                    ]'>
                                <?php $listsanpham_tuongtu = getAllSanpham_Tuongtu($sanpham["id_danhmuc"], $sanpham["id_sanpham"]);
                                foreach ($listsanpham_tuongtu as $sanpham_tuongtu) { ?>
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="index.php?act=sanpham_detail&id=<?= $sanpham_tuongtu["id_sanpham"] ?>">
                                                        <img src="<?= PATH_UPLOAD . getAllAnhsanpham($sanpham_tuongtu["id_sanpham"])[0]["url"] ?>" alt="Product Image" class="primary-image">
                                                        <img src="<?= PATH_UPLOAD . getAllAnhsanpham($sanpham_tuongtu["id_sanpham"])[0]["url"] ?>" alt="Product Image" class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="add_to_cart_btn action-btn" href="index.php?act=giohang_add&id=<?= $sanpham_tuongtu["id_sanpham"] ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="index.php?act=sanpham_detail&id=<?= $sanpham_tuongtu["id_sanpham"] ?>"><?= $sanpham_tuongtu["ten_sanpham"] ?></a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$<?= $sanpham_tuongtu["gia"] ?></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= tangLuotXemSanPham($sanpham["id_sanpham"]) ?>