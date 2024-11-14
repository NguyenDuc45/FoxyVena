<div class="tab-pane show active p-5" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
    <div class="row">
        <?php foreach ($listSanpham as $sanpham) : ?>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
            <div class="airi-product h-100">
                <div class="product-inner">
                    <figure class="product-image">
                        <!-- Hình ảnh sản phẩm  -->
                        <div class="product-image--holder">
                            <a href="index.php?act=sanpham_detail&id=<?= $sanpham["id_sanpham"] ?>">
                                <img src="<?= PATH_UPLOAD . getAllAnhsanpham($sanpham["id_sanpham"])[0]["url"] ?>" alt="Product Image" class="primary-image">
                                <img src="<?= PATH_UPLOAD . getAllAnhsanpham($sanpham["id_sanpham"])[0]["url"] ?>" alt="Product Image" class="secondary-image">
                            </a>
                        </div>
                        <!-- End hình ảnh  -->

                        <div class="airi-product-action">
                            <div class="product-action">
                                <!-- icon giỏ hàng -->
                                <a class="add_to_cart_btn action-btn" href="index.php?act=giohang_add&id=<?= $sanpham["id_sanpham"] ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="Thêm vào giỏ hàng">
                                    <i class="dl-icon-cart29"></i>
                                </a>
                            </div>
                        </div>
                    </figure>

                    <!-- Giá sản phẩm, tên  -->
                    <div class="product-info">
                        <h3 class="product-title">
                            <a href="index.php?act=sanpham_detail&id=<?= $sanpham["id_sanpham"] ?>"><?= $sanpham["ten_sanpham"] ?></a>
                        </h3>
                        <span class="product-price-wrapper">
                            <span class="money"><?= $sanpham["gia"] ?>đ</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>