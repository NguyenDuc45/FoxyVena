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

function getAllSanpham_Id($id_danhmuc) {
    try {
        $sql = "SELECT * FROM sanpham WHERE id_danhmuc='$id_danhmuc'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllSanpham_Home() {
    try {
        $sql = "SELECT * FROM sanpham ORDER BY id_sanpham LIMIT 15";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllSanpham_Tuongtu($id_danhmuc, $id_sanpham) {
    try {
        $sql = "SELECT * FROM sanpham WHERE id_danhmuc='$id_danhmuc' AND NOT id_sanpham='$id_sanpham'";
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

function tangLuotXemSanPham($id_sanpham) {
    try {
        $sanpham = getOneSanpham($id_sanpham);
        $luotxem = $sanpham["luotxem"] + 1;

        $sql = "UPDATE sanpham SET luotxem='$luotxem' WHERE id_sanpham='$id_sanpham'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}