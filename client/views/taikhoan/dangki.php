<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40 d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="register-box">
                        <h3 class="mb--35 mb-sm--20">Đăng kí</h3>
                        <form class="form form--login" action="index.php?act=dangki" method="post">
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="ten_taikhoan">Tên tài khoản<span class="required">*</span></label>
                                <input type="text" class="form__input form__input--3" id="ten_taikhoan" name="ten_taikhoan">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="matkhau">Mật khẩu <span class="required">*</span></label>
                                <input type="password" class="form__input form__input--3" id="matkhau" name="matkhau">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="re_matkhau">Nhập lại mật khẩu <span class="required">*</span></label>
                                <input type="password" class="form__input form__input--3" id="re_matkhau" name="re_matkhau">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="email">Email <span class="required">*</span></label>
                                <input type="email" class="form__input form__input--3" id="email" name="email">
                            </div>
                            <div class="form__group">
                                <input type="submit" name="dangki" value="Đăng kí" class="btn btn-submit btn-style-1">
                            </div>
                            <p><?php if (isset($error)) {echo $error;} ?></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->