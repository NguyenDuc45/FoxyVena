<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40 d-flex justify-content-center">
                <div class="row col-md-6 mb-sm--30">
                    <div class="col-6">
                        <img class="mb-5" src="<?=BASE_URL . "uploads/" . $taikhoan["hinhanh"] ?>" alt="">
                        <a class="w-100" href="index.php?act=taikhoan_update"><button type="button" class="btn btn-block btn-default border">Thay đổi thông tin</button></a>
                    </div>
                    <div class="col-6">
                        <div class="mb--20">
                            <p>Tên tài khoản</p>
                            <p class="display-6"><?= $taikhoan["ten_taikhoan"] ?></p>
                        </div>
                        <div class="mb--20">
                            <p>Họ tên</p>
                            <p class="display-6"><?= $taikhoan["hoten"] ?></p>
                        </div>
                        <div class="mb--20">
                            <p>Email</p>
                            <p class="display-6"><?= $taikhoan["email"] ?></p>
                        </div>
                        <div class="mb--20">
                            <p>Số điện thoại</p>
                            <p class="display-6"><?= $taikhoan["sdt"] ?></p>
                        </div>
                        <div class="mb--20">
                            <p>Ngày sinh</p>
                            <p class="display-6"><?= $taikhoan["ngaysinh"] ?></p>
                        </div>
                        <div class="mb--20">
                            <p>Địa chỉ</p>
                            <p class="display-6"><?= $taikhoan["diachi"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->