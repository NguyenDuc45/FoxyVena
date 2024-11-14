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