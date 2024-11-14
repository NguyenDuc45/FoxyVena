<div id="content" class="main-content-wrapper">
    <div class="shop-page-wrapper">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <?php foreach ($listDanhmuc as $danhmuc) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="banner-box banner-type-3 banner-type-3-1 banner-hover-1">
                            <div class="banner-inner">
                                <div class="banner-image">
                                    <img src="<?= PATH_UPLOAD . $danhmuc["anh_danhmuc"] ?>" alt="Banner">
                                </div>
                                <div class="banner-info">
                                    <h2 class="banner-title-2" style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: black;"><?= $danhmuc["ten_danhmuc"] ?></h2>
                                </div>
                                <a class="banner-link banner-overlay" href="index.php?act=danhmuc_detail&id=<?= $danhmuc["id_danhmuc"] ?>">Shop Now</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>