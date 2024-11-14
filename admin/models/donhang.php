<?php
function getAllDonhang() {
    try {
        $sql = "SELECT * FROM donhang ORDER BY id_donhang DESC";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllDonhang_Taikhoan($id_taikhoan) {
    try {
        $sql = "SELECT * FROM donhang WHERE id_taikhoan='$id_taikhoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllDonhang_DaThanhToan() {
    try {
        $sql = "SELECT * FROM donhang WHERE trangthai_thanhtoan = 1";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getTongDoanhThu($from, $to) {
    try {
        $listDonhang = getAllDonhang_DaThanhToan();

        $total = 0;
        foreach ($listDonhang as $donhang)
            $total += getTongtien_Dơnhang($donhang["id_donhang"]);

        // if ($from == 0 && $to == 0)
        //     return $listDonhang;

        return $total;
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

function deleteDonhang($id_donhang) {
    try {
        $sql = "DELETE FROM donhang WHERE id_donhang='$id_donhang'";
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

function deleteChiTietDonhang($id_donhang) {
    try {
        $sql = "DELETE FROM chitietdonhang WHERE id_donhang='$id_donhang'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getTongtien_Dơnhang($id_donhang) {
    $listCTDH = getAllChiTietDonHang($id_donhang);
    $total = 0;

    foreach ($listCTDH as $ctdh)
        $total += getOneSanpham($ctdh["id_sanpham"])["gia"] * $ctdh["soluong"];

    return $total;
}

function showStatus($type, $input, $span) {
    // if ($type == "xacnhan") {
    //     $status = ($input == 0) ? "Chưa xác nhận" : "Đã xác nhận";
    //     $color  = ($input == 0) ? "text-danger" : "text-success";
    // }

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
    
    if ($span == true)
        echo '<span class="' . $color . '">' . $status . '</span>';
    else echo '<p class="' . $color . '">' . $status . '</p>';
}

function showChangeStatusButton($name, $donhang) {
    if (($name == "trangthai_xacnhan" && $donhang["trangthai_xacnhan"] == 0 && $donhang["trangthai_xacnhan"] != 2 && $donhang["trangthai_giaohang"] == 0)
        || (($name == "trangthai_xacnhan" && $donhang["trangthai_xacnhan"] != 2 && $donhang["trangthai_thanhtoan"] == 0 && $donhang["trangthai_giaohang"] == 0)))
        echo '<input class="btn btn-dark" type="submit" name="'.$name.'" value="Thay đổi trạng thái">';

    if ($name == "trangthai_giaohang" && $donhang["trangthai_xacnhan"] == 1 && ($donhang["trangthai_giaohang"] == 0))
        echo '<input class="btn btn-dark" type="submit" name="'.$name.'" value="Thay đổi trạng thái">';
}

function changeStatus($type, $id_donhang) {
    $donhang = getOneDonhang($id_donhang);

    if ($type == "xacnhan") {
        if ($donhang["trangthai_xacnhan"] == 0) {
            $sql = "UPDATE donhang SET trangthai_xacnhan=1 WHERE id_donhang='$id_donhang'";
            $stmt = $GLOBALS["conn"]->prepare($sql);
            $stmt->execute();
        } else {
            if ($donhang["trangthai_thanhtoan"] == 0 && ($donhang["trangthai_giaohang"] == 0)) {
                $sql = "UPDATE donhang SET trangthai_xacnhan=0 WHERE id_donhang='$id_donhang'";
                $stmt = $GLOBALS["conn"]->prepare($sql);
                $stmt->execute();
            }
        }
    }

    if ($type == "giaohang") {
        if ($donhang["trangthai_giaohang"] == 0 && $donhang["trangthai_xacnhan"] == 1) {
            $sql = "UPDATE donhang SET trangthai_giaohang=2 WHERE id_donhang='$id_donhang'";
            $stmt = $GLOBALS["conn"]->prepare($sql);
            $stmt->execute();
        }
    }
}