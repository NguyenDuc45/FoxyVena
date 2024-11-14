<?php
if (!function_exists("require_file")) {
    function require_file($folderPath) {
        $files = scandir($folderPath);
        $files = array_diff($files, [".", ".."]);

        foreach ($files as $file) {
            require_once $folderPath . $file;
        }
    }
}

if (!function_exists("debug")) {
    function debug($data) {
        echo "<pre>";
        print_r($data);
        die;
    }
}