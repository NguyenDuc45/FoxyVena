<?php
function taikhoanList() {
    $listTaikhoan = getAllTaikhoan();
    require_once PATH_VIEW . "taikhoan/list.php";
}

function taikhoanDetail() {
    $id_taikhoan = $_GET["id"];
    $taikhoan = getOneTaikhoan($id_taikhoan);
    $listDonhang = getAllDonhang_Taikhoan($id_taikhoan);
    require_once PATH_VIEW . "taikhoan/detail.php";
}

function taikhoanAdd() {
    if (isset($_POST["themmoi"])) {
        $ten_taikhoan = $_POST["ten_taikhoan"];
        $matkhau = $_POST["matkhau"];
        $hoten = $_POST["hoten"];
        $email = $_POST["email"];
        $sdt = $_POST["sdt"];
        $ngaysinh = $_POST["ngaysinh"];
        $diachi = $_POST["diachi"];
        addTaikhoan($ten_taikhoan, $matkhau, $hoten, $email, $sdt, $ngaysinh, $diachi);
    }

    require_once PATH_VIEW . "taikhoan/add.php";
}

function taikhoanUpdate() {
    $id_taikhoan = $_GET["id"];
    $taikhoan = getOneTaikhoan($id_taikhoan);

    if (isset($_POST["sua"])) {
        $matkhau = $_POST["matkhau"];
        $hoten = $_POST["hoten"];
        $sdt = $_POST["sdt"];
        $ngaysinh = $_POST["ngaysinh"];
        $diachi = $_POST["diachi"];
        updateTaikhoan($id_taikhoan, $matkhau, $hoten, $sdt, $ngaysinh, $diachi);

        $listTaikhoan = getAllTaikhoan();
        require_once PATH_VIEW . "taikhoan/list.php";
    } 
    else require_once PATH_VIEW . "taikhoan/update.php";
}

function taikhoanDelete() {
    $id_taikhoan = $_GET["id"];

    deleteTaikhoan($id_taikhoan);

    $listTaikhoan = getAllTaikhoan();
    require_once PATH_VIEW . "taikhoan/list.php";
}