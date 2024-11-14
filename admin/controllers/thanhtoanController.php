<?php
function thanhtoanList() {
    $listThanhtoan = getAllThanhtoan();
    require_once PATH_VIEW . "thanhtoan/list.php";
}

function thanhtoanAdd() {
    if (isset($_POST["themmoi"])) {
        $ten_thanhtoan = $_POST["ten_thanhtoan"];
        addThanhtoan($ten_thanhtoan);
    }

    require_once PATH_VIEW . "thanhtoan/add.php";
}

function thanhtoanUpdate() {
    $id_thanhtoan = $_GET["id"];
    $thanhtoan = getOneThanhtoan($id_thanhtoan);

    if (isset($_POST["sua"])) {
        $ten_thanhtoan = $_POST["ten_thanhtoan"];
        updateThanhtoan($id_thanhtoan, $ten_thanhtoan);

        $listThanhtoan = getAllThanhtoan();
        require_once PATH_VIEW . "thanhtoan/list.php";
    } 
    else require_once PATH_VIEW . "thanhtoan/update.php";
}

function thanhtoanDelete() {
    $id_thanhtoan = $_GET["id"];

    deleteThanhtoan($id_thanhtoan);

    $listThanhtoan = getAllThanhtoan();
    require_once PATH_VIEW . "thanhtoan/list.php";
}