<?php
function sanphamList(){
   $listSanpham = getAllSanpham();

   $view = 'sanpham/list';
   require_once('master.php');
}

function sanphamDetail(){
   $sanpham = getOneSanpham($_GET["id"]);

   if (isset($_POST["submit"])) {
      $id_sanpham = $sanpham["id_sanpham"];
      $id_taikhoan = $_SESSION["user"]["id_taikhoan"];
      $noidung = $_POST["noidung"];
      
      binhluanAdd($id_sanpham, $id_taikhoan, $noidung);
   }

   $view = 'sanpham/detail';
   require_once('master.php');
}