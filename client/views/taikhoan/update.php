<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40 d-flex justify-content-center">
                <div class="col-md-6 mb-sm--30">
                    <div class="login-box">
                        <h3 class="mb--35 mb-sm--20">Cập nhật tài khoản</h3>
                        <form class="form form--login" action="index.php?act=taikhoan_update" method="post" enctype="multipart/form-data">
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="ten_taikhoan">Tên tài khoản<span class="required">*</span></label>
                                <input type="text" class="form__input form__input--3" id="ten_taikhoan" name="ten_taikhoan" value="<?= $taikhoan["ten_taikhoan"] ?>" disabled>
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="matkhau">Mật khẩu <span class="required">*</span></label>
                                <input type="password" class="form__input form__input--3" id="matkhau" name="matkhau" value="<?= $taikhoan["matkhau"] ?>">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="re_matkhau">Nhập lại mật khẩu <span class="required">*</span></label>
                                <input type="password" class="form__input form__input--3" id="re_matkhau" name="re_matkhau">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="email">Email<span class="required">*</span></label>
                                <input type="email" class="form__input form__input--3" id="email" name="email" value="<?= $taikhoan["email"] ?>" disabled>
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="hoten">Họ tên<span class="required">*</span></label>
                                <input type="text" class="form__input form__input--3" id="hoten" name="hoten" value="<?= $taikhoan["hoten"] ?>">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="hinhanh">Hình ảnh<span class="required">*</span></label>
                                <input type="file" id="hinhanh" name="hinhanh">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="sdt">Số điện thoại<span class="required">*</span></label>
                                <input type="text" class="form__input form__input--3" id="sdt" name="sdt" value="<?= $taikhoan["sdt"] ?>">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="ngaysinh">Ngày sinh<span class="required">*</span></label>
                                <input type="date" class="form__input form__input--3" id="ngaysinh" name="ngaysinh" value="<?= $taikhoan["ngaysinh"] ?>">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="diachi">Địa chỉ<span class="required">*</span></label>
                                <input type="text" class="form__input form__input--3" id="diachi" name="diachi" value="<?= $taikhoan["diachi"] ?>">
                            </div>
                            <div class="d-flex align-items-center mb--20">
                                <div class="form__group">
                                    <input type="submit" name="sua" value="Sửa thông tin" class="btn btn-submit btn-style-1">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->