<?php
if (!isset($_SESSION["user_admin"]))
    header("Location: login.php");