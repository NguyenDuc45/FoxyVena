<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40 d-flex justify-content-center">
                <div class="col-md-6 mb-sm--30">
                    <div class="login-box">
                        <h3 class="mb--35 mb-sm--20">Đăng nhập</h3>
                        <form class="form form--login" action="index.php?act=dangnhap" method="post">
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="ten_taikhoan">Tên tài khoản<span class="required">*</span></label>
                                <input type="text" class="form__input form__input--3" id="ten_taikhoan" name="ten_taikhoan">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="matkhau">Mật khẩu <span class="required">*</span></label>
                                <input type="password" class="form__input form__input--3" id="matkhau" name="matkhau">
                            </div>
                            <div class="d-flex align-items-center mb--20">
                                <div class="form__group">
                                    <input type="submit" name="dangnhap" value="Đăng nhập" class="btn btn-submit btn-style-1">
                                </div>
                                <!-- <div class="form__group">
                                    <label class="form__label checkbox-label" for="store_session">
                                        <input type="checkbox" name="store_session" id="store_session">
                                        <span>Ghi nhớ đăng nhập</span>
                                    </label>
                                </div> -->
                            </div>
                            <a class="forgot-pass" href="index.php?act=taikhoan_forgotpassword">Quên mật khẩu</a> <br>
                            <a class="forgot-pass" href="index.php?act=dangki">Đăng kí</a> 
                            <p><?php if (isset($error)) echo $error ?></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->