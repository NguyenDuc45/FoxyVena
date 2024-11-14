<?php
function giohangTotal($listIdSanpham) {
    $total = 0;
    if (isset($listIdSanpham)) {
        foreach ($listIdSanpham as $id_sanpham) {
            $total += getOneSanpham($id_sanpham)["gia"];
        }
    }
    
    return $total;
}