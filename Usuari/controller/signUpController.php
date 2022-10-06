<?php
require_once '../model/UserShop.php';
if (session_status() === PHP_SESSION_NONE) session_start();
include_once '../controller/fun/checkSignUp.php';

if (!isset($_POST['formSignUp'])) {
    header('Location: /view/signup.php');
    die();
}

//echo "<pre>";
//print_r($_SESSION['userShop']);
//echo "</pre>";

if (empty($_POST['email'])) $_SESSION['errors']['emptyEmail'] = true;
if (empty($_POST['pass'])) $_SESSION['errors']['emptyPass'] = true;
if (empty($_POST['fullName'])) $_SESSION['errors']['emptyFullName'] = true;
if (empty($_POST['birthDate'])) $_SESSION['errors']['emptyBirthDate'] = true;

if (checkEmail($_POST['email'])) $_SESSION['errors']['emailInUse'] = "Email already in use";

if (empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['fullName']) || empty($_POST['birthDate'])) {
    $_SESSION['errors']['emptyInput'] = "Some input filed is empty";
}


if (!isset($_SESSION['errors'])) {
    $_SESSION['userShop'][] = new UserShop($_POST['email'], $_POST['pass'], $_POST['fullName'], $_POST['birthDate']);
    $_SESSION['info'] = "User successfully created";
    header('Location: ../view/signin.php');
    exit();
}

header('Location: ../view/signup.php');
exit();
?>