<?php
require_once '../model/UserShop.php';
if (session_status() === PHP_SESSION_NONE) session_start();
include_once '../controller/fun/checkSignUp.php';

unset($_SESSION['usuariLogejat']);

header('Location: ../view/home.php');

?>