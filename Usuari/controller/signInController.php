<?php
require_once '../model/UserShop.php';
if (session_status() === PHP_SESSION_NONE) session_start();
include_once '../controller/fun/checkSignUp.php';
include_once '../controller/fun/user.php';

//echo "<pre>";
//print_r($_SESSION['userShop']);
//echo "</pre>";

if (!isset($_POST['formSignIn'])) {
    header('Location: /view/signin.php');
    die();
}

if (checkCredentials($_POST['email'], $_POST['pass'])) {
    if (checkBanned($_POST['email'])) {
        $_SESSION['errors'] = 'You are banned! Go Home!';
        header('Location: ../view/signin.php');
        die();
    }else {
        $_SESSION['usuariLogejat'] = getUserEmail($_POST['email']);
        header('Location: ../view/home.php');
        die();
    }

} else {
    $_SESSION['errors'] = 'Invalid credentials';
}


header('Location: ../view/signin.php');
?>