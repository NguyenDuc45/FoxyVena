<?php
function binhluanList() {
    $listBinhluan = getAllBinhluan();
    require_once PATH_VIEW . "binhluan/list.php";
}

function binhluanDelete() {
    $id_binhluan = $_GET["id"];

    deleteBinhluan($id_binhluan);

    $listBinhluan = getAllBinhluan();
    require_once PATH_VIEW . "binhluan/list.php";
}

function binhluanHide() {
    $id_binhluan = $_GET["id"];

    hideBinhluan($id_binhluan);

    $listBinhluan = getAllBinhluan();
    require_once PATH_VIEW . "binhluan/list.php";
}

function binhluanUnhide() {
    $id_binhluan = $_GET["id"];

    unhideBinhluan($id_binhluan);

    $listBinhluan = getAllBinhluan();
    require_once PATH_VIEW . "binhluan/list.php";
}