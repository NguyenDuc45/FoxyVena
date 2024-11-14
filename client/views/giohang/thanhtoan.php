<!-- Breadcrumb area Start -->
<div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Thanh toán</h1>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pb--80 pb-md--60 pb-sm--40 mt--30">
                <form action="index.php?act=thanhtoan" class="form form--checkout" method="post">
                    <!-- Checkout Area Start -->
                    <div class="col-lg-5">
                        <div class="checkout-title mt--10">
                            <h2>Chi tiết đơn hàng</h2>
                        </div>
                        <div class="checkout-form">
                            <div class="row mb--30">
                                <div class="form__group col-12">
                                    <label for="ten_nguoinhan" class="form__label form__label--2">Họ và tên người nhận
                                        <span class="required">*</span></label>
                                    <input type="text" name="ten_nguoinhan" id="ten_nguoinhan" class="form__input form__input--2">
                                </div>
                            </div>
                            <div class="row mb--30">
                                <div class="form__group col-12">
                                    <label for="diachi" class="form__label form__label--2">Địa chỉ
                                        <span class="required">*</span></label>
                                    <input type="text" name="diachi" id="diachi" class="form__input form__input--2">
                                </div>
                            </div>
                            <div class="row mb--30">
                                <div class="form__group col-12">
                                    <label for="sdt" class="form__label form__label--2">Số điện thoại
                                        <span class="required">*</span></label>
                                    <input type="text" name="sdt" id="sdt" class="form__input form__input--2">
                                </div>
                            </div>
                            <div class="row mb--30">
                                <div class="form__group col-12">
                                    <label for="id_thanhtoan" class="form__label form__label--2">Hình thức thanh toán
                                        <span class="required">*</span></label>
                                    <select id="id_thanhtoan" name="id_thanhtoan" class="form__input form__input--2 nice-select">
                                        <?php $listThanhtoan = getAllThanhtoan();
                                        foreach ($listThanhtoan as $thanhtoan) { ?>
                                            <option value="<?= $thanhtoan["id_thanhtoan"] ?>"><?= $thanhtoan["ten_thanhtoan"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form__group col-12">
                                    <label for="ghichu" class="form__label form__label--2">Ghi chú
                                    </label>
                                    <textarea class="form__input form__input--2 form__input--textarea border" id="ghichu" name="ghichu"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                        <div class="order-details">
                            <div class="checkout-title mt--10">
                                <h2>Đơn hàng của bạn</h2>
                            </div>
                            <div class="table-content table-responsive mb--30">
                                <table class="table order-table order-table-2">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th class="text-end">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $tongtien = 0;
                                        foreach ($_SESSION["giohang"] as $id_sanpham) {
                                            $sanpham = getOneSanpham($id_sanpham);
                                            $tongtien += $sanpham["gia"] ?>
                                            <tr>
                                                <th><?= $sanpham["ten_sanpham"] ?>
                                                    <strong><span>&#10005;</span>1</strong>
                                                </th>
                                                <td class="text-end">$<?= $sanpham["gia"] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr class="order-total">
                                            <th>Tổng tiền</th>
                                            <td class="text-end"><span class="order-total-ammount">$<?= $tongtien ?></span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="checkout-payment">
                                <input type="submit" name="confirmThanhtoan" class="btn btn-fullwidth btn-style-1" value="Đặt hàng">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>