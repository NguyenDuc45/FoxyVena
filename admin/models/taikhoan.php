<?php
function getAllTaikhoan() {
    try {
        $sql = "SELECT * FROM taikhoan";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneTaikhoan($id_taikhoan) {
    try {
        $sql = "SELECT * FROM taikhoan WHERE id_taikhoan='$id_taikhoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addTaikhoan($ten_taikhoan, $matkhau, $hoten, $email, $sdt, $ngaysinh, $diachi) {
    try {
        $sql = "INSERT INTO taikhoan(ten_taikhoan, matkhau, hoten, email, sdt, ngaysinh, diachi) VALUES ('$ten_taikhoan', '$matkhau', '$hoten', '$email', '$sdt', '$ngaysinh', '$diachi')";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function updateTaikhoan($id_taikhoan, $matkhau, $hoten, $sdt, $ngaysinh, $diachi) {
    try {
        $sql = "UPDATE taikhoan SET matkhau='$matkhau', hoten='$hoten', sdt='$sdt', ngaysinh='$ngaysinh', diachi='$diachi' WHERE id_taikhoan='$id_taikhoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function deleteTaikhoan($id_taikhoan) {
    try {
        $sql = "DELETE FROM taikhoan WHERE id_taikhoan='$id_taikhoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function checkTaikhoan($ten_taikhoan, $matkhau) {
    try {
        $sql = "SELECT * FROM taikhoan WHERE ten_taikhoan='" . $ten_taikhoan . "' AND matkhau='" . $matkhau . "'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}