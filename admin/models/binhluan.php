<?php
function getAllBinhluan() {
    try {
        $sql = "SELECT * FROM binhluan";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllBinhluan_Sanpham($id_sanpham) {
    try {
        $sql = "SELECT * FROM binhluan WHERE id_sanpham='$id_sanpham'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneBinhluan($id_binhluan) {
    try {
        $sql = "SELECT * FROM binhluan WHERE id_binhluan='$id_binhluan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function deleteBinhluan($id_binhluan) {
    try {
        $sql = "DELETE FROM binhluan WHERE id_binhluan='$id_binhluan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function hideBinhluan($id_binhluan) {
    try {
        $sql = "UPDATE binhluan SET trangthai=0 WHERE id_binhluan='$id_binhluan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function unhideBinhluan($id_binhluan) {
    try {
        $sql = "UPDATE binhluan SET trangthai=1 WHERE id_binhluan='$id_binhluan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}