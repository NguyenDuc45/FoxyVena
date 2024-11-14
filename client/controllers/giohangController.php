<?php
function giohangList(){
   $view = 'giohang/giohang';
   require_once('master.php');
}

function giohangAdd($id_sanpham) {
   if (!in_array($id_sanpham, $_SESSION["giohang"]))
      array_push($_SESSION["giohang"], $id_sanpham);

   $view = 'giohang/giohang' ; 
   require_once('master.php');
}

function giohangDelete() {
   if (isset($_GET["id"])) {
      $id = $_GET["id"];
      unset($_SESSION["giohang"][array_search($id, $_SESSION["giohang"])]);
   }

   $view = 'giohang/giohang' ; 
   require_once('master.php');
}

function thanhtoan() {
   if (isset($_POST["confirmThanhtoan"])) {
      $ten_nguoinhan = $_POST["ten_nguoinhan"];
      $diachi = $_POST["diachi"];
      $sdt = $_POST["sdt"];
      $id_thanhtoan = $_POST["id_thanhtoan"];
      $ghichu = $_POST["ghichu"];
      addDonhang($ten_nguoinhan, $diachi, $sdt, $id_thanhtoan, $ghichu, $_SESSION["giohang"]);
      echo '<script>alert("Đặt hàng thành công")</script>';

      lichsuList();
   }

   $view = 'giohang/thanhtoan' ; 
   require_once('master.php');
}