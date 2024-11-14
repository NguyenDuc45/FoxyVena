<?php
function getAllAnhsanpham($id_sanpham) {
    try {
        $sql = "SELECT * FROM anhsanpham WHERE id_sanpham='$id_sanpham'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addAnhsanpham($id_sanpham, $url) {
    try {
        $sql = "INSERT INTO anhsanpham(id_sanpham, url) VALUES ('$id_sanpham', '$url')";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function updateAnhsanpham($id_anhsanpham, $url) {
    try {
        $sql = "UPDATE anhsanpham SET url='$url' WHERE id_anhsanpham='$id_anhsanpham'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}