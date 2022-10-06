<?php
require_once '../model/UserShop.php';
if (session_status() === PHP_SESSION_NONE) session_start();
include_once '../controller/fun/checkSignUp.php';

if($_GET['email']){
    unset($_SESSION['userShop'][$_GET['email']]);
}

header('Location: ../view/users.php');

?>