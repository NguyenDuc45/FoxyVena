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

function getOneTaikhoan_Id($id_taikhoan) {
    try {
        $sql = "SELECT * FROM taikhoan WHERE id_taikhoan='$id_taikhoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneTaikhoan_Tentaikhoan($ten_taikhoan) {
    try {
        $sql = "SELECT * FROM taikhoan WHERE ten_taikhoan='$ten_taikhoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addTaikhoan($ten_taikhoan, $matkhau, $email) {
    try {
        $sql = "INSERT INTO taikhoan(ten_taikhoan, matkhau, email) VALUES ('$ten_taikhoan', '$matkhau', '$email')";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function updateTaikhoan($id_taikhoan, $matkhau, $hoten, $hinhanh, $sdt, $ngaysinh, $diachi) {
    try {
        if ($hinhanh == "")
            $sql = "UPDATE taikhoan SET matkhau='$matkhau', hoten='$hoten', sdt='$sdt', ngaysinh='$ngaysinh', diachi='$diachi' WHERE id_taikhoan='$id_taikhoan'";
        else $sql = "UPDATE taikhoan SET matkhau='$matkhau', hoten='$hoten', hinhanh='$hinhanh', sdt='$sdt', ngaysinh='$ngaysinh', diachi='$diachi' WHERE id_taikhoan='$id_taikhoan'";
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
        $sql = "SELECT * FROM taikhoan WHERE ten_taikhoan='$ten_taikhoan' AND matkhau='$matkhau'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        $taikhoan = $stmt->fetch();

        if (is_array($taikhoan))
            return true;
        else return false;
    } catch (\Exception $e) {
        debug($e);
    }
}

function checkTaikhoanTontai($ten_taikhoan, $email) {
    try {
        $sql = "SELECT * FROM taikhoan WHERE ten_taikhoan='$ten_taikhoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        $check_ten_taikhoan = $stmt->fetch();

        $sql = "SELECT * FROM taikhoan WHERE email='$email'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        $check_email = $stmt->fetch();

        if (is_array($check_ten_taikhoan) || is_array($check_email))
            return true;
        else return false;
    } catch (\Exception $e) {
        debug($e);
    }
}

function quenMatKhau($ten_taikhoan, $email) {
    try {
        $sql = "SELECT * FROM taikhoan WHERE ten_taikhoan='$ten_taikhoan' AND email='$email'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        $taikhoan = $stmt->fetch();

        if (is_array($taikhoan))
            return true;
        else return false;
    } catch (\Exception $e) {
        debug($e);
    }
}