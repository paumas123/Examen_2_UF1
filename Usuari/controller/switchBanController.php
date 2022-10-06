<?php
require_once '../model/UserShop.php';
if (session_status() === PHP_SESSION_NONE) session_start();
include_once "fun/user.php";

$user = getUserEmail($_GET['email']);
$user->swapBan();
header('Location: ../view/users.php');



?>