<?php
function dangNhap(){
    if (isset($_POST["dangnhap"])) {
        if (checkTaikhoan($_POST["ten_taikhoan"], $_POST["matkhau"])) {
            $_SESSION["user"] = getOneTaikhoan_Tentaikhoan($_POST["ten_taikhoan"]);
            header("Location: index.php");
        }
    }

    $view = 'taikhoan/dangnhap' ;
    require_once('master.php');
}

function dangKi(){
    if (isset($_POST["dangki"])) {
        if (!checkTaikhoanTontai($_POST["ten_taikhoan"], $_POST["email"])) {
            if ($_POST["matkhau"] == $_POST["re_matkhau"]) {
                addTaikhoan($_POST["ten_taikhoan"], $_POST["matkhau"], $_POST["email"]);
                echo '<script>alert("Đăng kí thành công")</script>';
                header("Location: index.php?act=dangnhap");
            } else $error = "Mật khẩu xác nhận không khớp";
        } else $error = "Tên tài khoản hoặc email đã tồn tại";
    }

    $view = 'taikhoan/dangki' ;
    require_once('master.php');
}

function taikhoanDetail(){
    if (!isset($_SESSION["user"])) {
        $view = 'taikhoan/dangnhap' ;
        require_once('master.php');
    } else {
        $taikhoan = getOneTaikhoan_Id($_SESSION["user"]["id_taikhoan"]);
        $view = 'taikhoan/detail' ;
        require_once('master.php');
    }    
}

function taikhoanUpdate() {
    if (isset($_POST["sua"])) {
        $id_taikhoan = $_SESSION["user"]["id_taikhoan"];
        $matkhau = $_POST["matkhau"];
        $hoten = $_POST["hoten"];
        $sdt = $_POST["sdt"];
        $ngaysinh = $_POST["ngaysinh"];
        $diachi = $_POST["diachi"];

        $hinhanh = $_FILES["hinhanh"]["name"];
        $target_dir = PATH_UPLOAD;
        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
        if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
        
        updateTaikhoan($id_taikhoan, $matkhau, $hoten, $hinhanh, $sdt, $ngaysinh, $diachi);

        $taikhoan = getOneTaikhoan_Id($_SESSION["user"]["id_taikhoan"]);
        $_SESSION["user"] = $taikhoan;
        $view = 'taikhoan/detail' ;
        require_once('master.php');
    }

    $taikhoan = getOneTaikhoan_Id($_SESSION["user"]["id_taikhoan"]);
    $view = 'taikhoan/update' ;
    require_once('master.php');
}

function taikhoanForgotPassword() {
    if (isset($_POST["quenmatkhau"])) {
        if (quenMatKhau($_POST["ten_taikhoan"], $_POST["email"])) {
            $error = 'Mật khẩu của bạn là ' . getOneTaikhoan_Tentaikhoan($_POST["ten_taikhoan"])["matkhau"];
            $view = 'taikhoan/dangnhap' ;
            require_once('master.php');
        } else $error = "Tên tài khoản hoặc email không hợp lệ";
    }

    $view = 'taikhoan/forgotpassword' ;
    require_once('master.php');
}

function taikhoanLogout(){
    if (isset($_SESSION["user"])) {
        unset($_SESSION["user"]);
        $view = 'home' ;
        $listSanpham = getAllSanpham_Home();
        require_once('master.php');
    }
}