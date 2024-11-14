<?php
function getAllDanhmuc() {
    try {
        $sql = "SELECT * FROM danhmuc";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneDanhmuc($id_danhmuc) {
    try {
        $sql = "SELECT * FROM danhmuc WHERE id_danhmuc='$id_danhmuc'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addDanhmuc($ten_danhmuc, $anh_danhmuc) {
    try {
        $sql = "INSERT INTO danhmuc(ten_danhmuc, anh_danhmuc) VALUES ('$ten_danhmuc', '$anh_danhmuc')";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function updateDanhmuc($id_danhmuc, $ten_danhmuc, $anh_danhmuc) {
    try {
        $sql = "UPDATE danhmuc SET ten_danhmuc='$ten_danhmuc', anh_danhmuc='$anh_danhmuc' WHERE id_danhmuc='$id_danhmuc'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function deleteDanhmuc($id_danhmuc) {
    try {
        $sql = "DELETE FROM danhmuc WHERE id_danhmuc='$id_danhmuc'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}