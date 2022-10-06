<?php
require_once '../model/Persona.php';
include_once 'functions/checkUser.php';
if(session_status() === PHP_SESSION_NONE) session_start();

//$_SESSION['dades'] = $_POST;

if (!$_POST) {
    header('Location: ../view/registre.php');
}

//if (checkEmailStructure()) $_SESSION['errors'] .= "El correu no s'ha pogut validar correctament<br>";
if (checkPasswordLength()) $_SESSION['errors'] .= 'La contrasenya ha de tenir entre 5 i 15 caràcters<br>';

//Les 2 formes de validar funcionen
if (checkEmail()) $_SESSION['errors'] .= 'Aquest correu ja existeix<br>';
//checkEmail() ? $_SESSION['errors'] .= 'Aquest correu ja existeix<br>' : '';
if (checkRepeatPassword()) $_SESSION['errors'] .= 'Les passwords no coincideixen<br>';


if (!isset($_SESSION['errors'])) {
    $_SESSION['persones'][] = new Persona($_POST['nom'], $_POST['cognom'], $_POST['snCognom'], $_POST['email'], $_POST['password'], $_POST['genere']);
    $_SESSION['emailLogin'] = $_POST['email'];
    header('Location: ../view/login.php');
    exit();
} else {
    $_SESSION['dadesRegistre'] = [$_POST['nom'], $_POST['cognom'], $_POST['snCognom'], $_POST['email']];
    header('Location: ../view/registre.php');
}

?>