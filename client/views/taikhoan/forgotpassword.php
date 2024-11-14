<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40 d-flex justify-content-center">
                <div class="col-md-6 mb-sm--30">
                    <div class="login-box">
                        <h3 class="mb--35 mb-sm--20">Quên mật khẩu</h3>
                        <form class="form form--login" action="index.php?act=taikhoan_forgotpassword" method="post">
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="ten_taikhoan">Tên tài khoản<span class="required">*</span></label>
                                <input type="text" class="form__input form__input--3" id="ten_taikhoan" name="ten_taikhoan">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="email">Email <span class="required">*</span></label>
                                <input type="email" class="form__input form__input--3" id="email" name="email">
                            </div>
                            <div class="d-flex align-items-center mb--20">
                                <div class="form__group">
                                    <input type="submit" name="quenmatkhau" value="Lấy lại mật khẩu" class="btn btn-submit btn-style-1">
                                </div>
                            </div>
                            <p><?php if (isset($error)) echo $error ?></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->