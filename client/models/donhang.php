<?php
function getAllDonhang() {
    try {
        $sql = "SELECT * FROM donhang";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllDonhang_Taikhoan($id_taikhoan) {
    try {
        $sql = "SELECT * FROM donhang WHERE id_taikhoan='$id_taikhoan' ORDER BY id_donhang DESC";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneDonhang($id_donhang) {
    try {
        $sql = "SELECT * FROM donhang WHERE id_donhang='$id_donhang'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllChiTietDonHang($id_donhang) {
    try {
        $sql = "SELECT * FROM chitietdonhang WHERE id_donhang='$id_donhang'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addDonhang($ten_nguoinhan, $diachi, $sdt, $id_thanhtoan, $ghichu, $listId_sanpham) {
    $id_taikhoan = $_SESSION["user"]["id_taikhoan"];
    $ten_thanhtoan = getOneThanhtoan($id_thanhtoan)["ten_thanhtoan"];
    $ma_donhang = $id_taikhoan . date("YmdHis");

    try {
        if ($ten_thanhtoan == "Tiền mặt") {
            $sql = "INSERT INTO donhang(ma_donhang, id_taikhoan, ten_nguoinhan, diachi, sdt, id_thanhtoan, ghichu) 
                VALUES ('$ma_donhang', '$id_taikhoan', '$ten_nguoinhan', '$diachi', '$sdt', '$id_thanhtoan', '$ghichu')";
        } else {
            $sql = "INSERT INTO donhang(ma_donhang, id_taikhoan, ten_nguoinhan, diachi, sdt, id_thanhtoan, ghichu, trangthai_thanhtoan) 
                VALUES ('$ma_donhang', '$id_taikhoan', '$ten_nguoinhan', '$diachi', '$sdt', '$id_thanhtoan', '$ghichu', 1)";
        }
        
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        addChitietdonhang($listId_sanpham);
        unset($_SESSION["giohang"]);
    } catch (\Exception $e) {
        debug($e);
    }
}

function getDonhangLast() {
    try {
        $sql = "SELECT * FROM donhang ORDER BY id_donhang DESC LIMIT 1";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addChitietdonhang($listId_sanpham) {
    try {
        $id_donhang = getDonhangLast()["id_donhang"];
        foreach ($listId_sanpham as $id_sanpham) {
            $sql = "INSERT INTO chitietdonhang(id_sanpham, id_donhang) 
            VALUES ('$id_sanpham', '$id_donhang')";
            $stmt = $GLOBALS["conn"]->prepare($sql);
            $stmt->execute();
        }
    } catch (\Exception $e) {
        debug($e);
    }
}

function showStatus($type, $input) {
    if ($type == "xacnhan") {
        if ($input == 0) {
            $status = "Chưa xác nhận";
            $color = "text-danger";
        }
        else if ($input == 1) {
            $status = "Đã xác nhận";
            $color = "text-success";
        }
        else {
            $status = "Đã hủy đơn";
            $color = "text-danger";
        }
    }

    if ($type == "thanhtoan") {
        $status = ($input == 0) ? "Chưa thanh toán" : "Đã thanh toán";
        $color  = ($input == 0) ? "text-danger" : "text-success";
    }

    if ($type == "giaohang") {
        if ($input == 0) {
            $status = "Chưa giao hàng";
            $color = "text-danger";
        }
        else if ($input == 1) {
            $status = "Đã giao hàng";
            $color = "text-success";
        }
        else {
            $status = "Đang giao hàng";
            $color = "text-warning";
        }
    }

    echo '<p class="' . $color . '">' . $status . '</p>';
}

function showStatus_List($id_donhang) {
    $donhang = getOneDonhang($id_donhang);

    // $status1 = ($donhang["trangthai_xacnhan"] == 0) ? "Chưa xác nhận" : "Đã xác nhận";
    // $color1  = ($donhang["trangthai_xacnhan"] == 0) ? "text-danger" : "text-success";

    if ($donhang["trangthai_xacnhan"] == 0) {
        $status1 = "Chưa xác nhận";
        $color1 = "text-danger";
    }
    else if ($donhang["trangthai_xacnhan"] == 1) {
        $status1 = "Đã xác nhận";
        $color1 = "text-success";
    }
    else {
        $status1 = "Đã hủy đơn";
        $color1 = "text-danger";
    }

    $status2 = ($donhang["trangthai_thanhtoan"] == 0) ? "Chưa thanh toán" : "Đã thanh toán";
    $color2  = ($donhang["trangthai_thanhtoan"] == 0) ? "text-danger" : "text-success";

    if ($donhang["trangthai_giaohang"] == 0) {
        $status3 = "Chưa giao hàng";
        $color3 = "text-danger";
    }
    else if ($donhang["trangthai_giaohang"] == 1) {
        $status3 = "Đã giao hàng";
        $color3 = "text-success";
    }
    else {
        $status3 = "Đang giao hàng";
        $color3 = "text-warning";
    }

    if ($donhang["trangthai_giaohang"] != 0)
        echo '<p class="' . $color3 . '">' . $status3 . '</p>';
    else if ($donhang["trangthai_thanhtoan"] != 0)
        echo '<p class="' . $color2 . '">' . $status2 . '</p>';
    else
        echo '<p class="' . $color1 . '">' . $status1 . '</p>';
}

function showConfirmation($type, $donhang) {
    if ($type == "thanhtoan")
        if ($donhang["trangthai_thanhtoan"] == 0 && $donhang["trangthai_xacnhan"] == 1)
            echo '<input type="submit" class="btn btn-link" name="confirmThanhtoan" value="Xác nhận thanh toán">';

    if ($type == "giaohang")
        if ($donhang["trangthai_giaohang"] == 2 && ($donhang["trangthai_thanhtoan"] == 1) && $donhang["trangthai_xacnhan"] == 1)
            echo '<input type="submit" class="btn btn-link" name="confirmGiaohang" value="Xác nhận nhận hàng">';

    if ($type == "huydon")
        if ($donhang["trangthai_xacnhan"] != 2)
            echo '<input type="submit" class="btn btn-link" name="confirmHuydon" value="Xác nhận hủy đơn">';
}

function changeStatus($type, $id_donhang) {
    $donhang = getOneDonhang($id_donhang);

    if ($type == "thanhtoan") {
        if ($donhang["trangthai_thanhtoan"] == 0 && ($donhang["trangthai_giaohang"] == 2)) {
            $sql = "UPDATE donhang SET trangthai_thanhtoan=1 WHERE id_donhang='$id_donhang'";
            $stmt = $GLOBALS["conn"]->prepare($sql);
            $stmt->execute();
        }
    }

    if ($type == "giaohang") {
        if ($donhang["trangthai_giaohang"] == 2 && $donhang["trangthai_thanhtoan"] == 1) {
            $sql = "UPDATE donhang SET trangthai_giaohang=1 WHERE id_donhang='$id_donhang'";
            $stmt = $GLOBALS["conn"]->prepare($sql);
            $stmt->execute();
        }
    }

    if ($type == "huydon") {
        if ($donhang["trangthai_xacnhan"] == 0) {
            $sql = "UPDATE donhang SET trangthai_xacnhan=2 WHERE id_donhang='$id_donhang'";
            $stmt = $GLOBALS["conn"]->prepare($sql);
            $stmt->execute();
        }
    }
}