<?php
require_once '../model/Persona.php';
require_once '../model/Correu.php';
include_once 'functions/checkUser.php';
if(session_status() === PHP_SESSION_NONE) session_start();


//if (!$_POST) {
//    header('Location: ../view/login.php');
//}

//if (empty($_POST['email']) || empty($_POST['password'])) {
//    $_SESSION['errors'] .= 'Hi han camps buits<br>';
//}

//if (checkEmailStructure()) $_SESSION['errors'] .= "El correu no s'ha pogut validar correctament<br>";

if (empty($errors)) {
    if (checkCredentials()) {
        header('Location: ../view/menu.php');
        exit();
    } else {
        $_SESSION['errors'] .= "No s'ha trobat l'usuari<br>";
        header('Location: ../view/login.php');
        exit();
    }
//} else {
//    header('Location: ../view/login.php');
//}
}

?>