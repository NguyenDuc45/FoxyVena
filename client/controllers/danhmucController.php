<?php
function danhmucList(){
   $listDanhmuc = getAllDanhmuc();
   $view = 'danhmuc/list';
   require_once('master.php');
}

function danhmucDetail(){
   $listSanpham = getAllSanpham_Id($_GET["id"]);
   $view = 'danhmuc/detail';
   require_once('master.php');
}