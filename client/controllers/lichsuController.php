<?php 
function lichsuList(){
    $listDonhang = getAllDonhang_Taikhoan($_SESSION["user"]["id_taikhoan"]);
    $view = 'lichsu/list' ;
    require_once('master.php');
}

function lichsuDetail(){
    $id_donhang = $_GET["id"];

    if (isset($_POST["confirmThanhtoan"]))
        changeStatus("thanhtoan", $id_donhang);

    if (isset($_POST["confirmGiaohang"]))
        changeStatus("giaohang", $id_donhang);

    if (isset($_POST["confirmHuydon"]))
        changeStatus("huydon", $id_donhang);

    $donhang = getOneDonhang($id_donhang);
    $listCTDH = getAllChiTietDonHang($donhang["id_donhang"]);
    $view = 'lichsu/detail' ;
    require_once('master.php');
}