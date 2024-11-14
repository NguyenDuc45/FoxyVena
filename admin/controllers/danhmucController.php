<?php
function danhmucList() {
    $listDanhmuc = getAllDanhmuc();
    require_once PATH_VIEW . "danhmuc/list.php";
}

function danhmucAdd() {
    if (isset($_POST["themmoi"])) {
        $ten_danhmuc = $_POST["ten_danhmuc"];

        $fileExtension = pathinfo($_FILES["anh_danhmuc"]["name"], PATHINFO_EXTENSION);
        $anh_danhmuc = date("YmdhisB") . "." . $fileExtension;
        $target_dir = PATH_UPLOAD;
        $target_file = $target_dir . $anh_danhmuc;

        if (move_uploaded_file($_FILES["anh_danhmuc"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }

        addDanhmuc($ten_danhmuc, $anh_danhmuc);
    }

    require_once PATH_VIEW . "danhmuc/add.php";
}

function danhmucUpdate() {
    $id_danhmuc = $_GET["id"];
    $danhmuc = getOneDanhmuc($id_danhmuc);

    if (isset($_POST["sua"])) {
        $ten_danhmuc = $_POST["ten_danhmuc"];

        $fileExtension = pathinfo($_FILES["anh_danhmuc"]["name"], PATHINFO_EXTENSION);
        $anh_danhmuc = date("YmdhisB") . "." . $fileExtension;
        $target_dir = PATH_UPLOAD;
        $target_file = $target_dir . $anh_danhmuc;

        if (move_uploaded_file($_FILES["anh_danhmuc"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }

        if (!$_FILES["anh_danhmuc"]["name"])
            $anh_danhmuc = getOneDanhmuc($id_danhmuc)["anh_danhmuc"];

        updateDanhmuc($id_danhmuc, $ten_danhmuc, $anh_danhmuc);

        $listDanhmuc = getAllDanhmuc();
        require_once PATH_VIEW . "danhmuc/list.php";
    } 
    else require_once PATH_VIEW . "danhmuc/update.php";
}

function danhmucDelete() {
    $id_danhmuc = $_GET["id"];

    deleteDanhmuc($id_danhmuc);

    $listDanhmuc = getAllDanhmuc();
    require_once PATH_VIEW . "danhmuc/list.php";
}