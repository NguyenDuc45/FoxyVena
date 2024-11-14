<?php
function binhluanAdd($id_sanpham, $id_taikhoan, $noidung) {
    try {
        $sql = "INSERT INTO binhluan(id_sanpham, id_taikhoan, noidung) 
            VALUES ('$id_sanpham', '$id_taikhoan', '$noidung')";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}