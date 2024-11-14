<?php
function donhangList() {
    $listDonhang = getAllDonhang();
    require_once PATH_VIEW . "donhang/list.php";
}

function donhangDetail() {
    $id_donhang = $_GET["id"];

    if (isset($_POST["trangthai_xacnhan"]))
        changeStatus("xacnhan", $id_donhang);

    if (isset($_POST["trangthai_giaohang"]))
        changeStatus("giaohang", $id_donhang);

    $donhang = getOneDonhang($id_donhang);
    
    $thanhtoan = getOneThanhtoan($donhang["id_thanhtoan"]);
    $taikhoan = getOneTaikhoan($donhang["id_taikhoan"]);
    $listCTDH = getAllChiTietDonHang($donhang["id_donhang"]);

    if (isset($_POST["delete"])) {
        deleteChiTietDonhang($id_donhang);
        deleteDonhang($id_donhang);

        $listDonhang = getAllDonhang();
        require_once PATH_VIEW . "donhang/list.php";
        return;
    }

    require_once PATH_VIEW . "donhang/detail.php";
}