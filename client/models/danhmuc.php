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