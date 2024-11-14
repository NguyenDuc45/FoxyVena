<?php
function getAllSanpham() {
    try {
        $sql = "SELECT * FROM sanpham";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneSanpham($id_sanpham) {
    try {
        $sql = "SELECT * FROM sanpham WHERE id_sanpham='$id_sanpham'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getSanphamLast() {
    try {
        $sql = "SELECT * FROM sanpham ORDER BY id_sanpham DESC LIMIT 1";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getTop5LuotXem() {
    try {
        $sql = "SELECT * FROM sanpham ORDER BY luotxem DESC LIMIT 5";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addSanpham($ten_sanpham, $id_danhmuc, $gia, $mota) {
    try {
        $sql = "INSERT INTO sanpham(ten_sanpham, id_danhmuc, gia, mota) VALUES ('$ten_sanpham', '$id_danhmuc', '$gia', '$mota')";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function updateSanpham($id_sanpham, $ten_sanpham, $id_danhmuc, $gia, $mota) {
    try {
        $sql = "UPDATE sanpham SET ten_sanpham='$ten_sanpham', id_danhmuc='$id_danhmuc', gia='$gia', mota='$mota' WHERE id_sanpham='$id_sanpham'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function deleteSanpham($id_sanpham) {
    try {
        $sql = "DELETE FROM sanpham WHERE id_sanpham='$id_sanpham'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}