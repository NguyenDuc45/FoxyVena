<?php 
function homeIndex(){
    $view = 'home' ;
    $listSanpham = getAllSanpham_Home();
    require_once('master.php');
}

function redirectToLogin($act, $routes) {
    if (!isset($_SESSION["user"])) {
        foreach ($routes as $route) {
            if ($act == $route) {
                return true;
            }
        }
    }

    return false;
}