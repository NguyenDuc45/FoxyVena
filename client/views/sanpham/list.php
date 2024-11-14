<div id="content" class="main-content-wrapper">
    <div class="page-content-inner enable-page-sidebar">
        <div class="container-fluid">
            <div class="row shop-sidebar pt--45 pt-md--35 pt-sm--20 pb--60 pb-md--50 pb-sm--40 d-flex justify-content-center">
                <div class="col-lg-9 order-lg-2" id="main-content">
                    <div class="shop-toolbar">
                        <div class="shop-toolbar__inner">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-md-start text-center mb-sm--20">
                                    <div class="shop-toolbar__left">
                                        <p class="product-pages">Đang hiển thị <?= sizeof($listSanpham) ?> kết quả</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-products">
                        <div class="row grid-space-20 xxl-block-grid-4">
                            <?php foreach ($listSanpham as $sanpham) { ?>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="index.php?act=sanpham_detail&id=<?= $sanpham["id_sanpham"] ?>">
                                                        <img src="<?= PATH_UPLOAD . getAllAnhsanpham($sanpham["id_sanpham"])[0]["url"] ?>" alt="Product Image" class="primary-image">
                                                        <img src="<?= PATH_UPLOAD . getAllAnhsanpham($sanpham["id_sanpham"])[0]["url"] ?>" alt="Product Image" class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="index.php?act=sanpham_detail&id=<?= $sanpham["id_sanpham"] ?>"><?= $sanpham["ten_sanpham"] ?></a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$<?= $sanpham["gia"] ?></span>
                                                </span>
                                            </div>
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