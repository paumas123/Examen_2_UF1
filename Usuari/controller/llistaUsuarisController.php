<?php
require_once '../model/Persona.php';
include_once 'eliminarUsuariController.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (isset($_GET['btnEliminar'])) {
    unset($_SESSION['persones'][$_GET['btnEliminar']]);
    header('Location: ../view/llistaUsuaris.php');
    exit();
}

if (isset($_POST['btnEditar'])) {
    $_SESSION['persones'][$_POST['key']] = new Persona($_POST['nom'], $_POST['cognom'], $_POST['snCognom'], $_POST['email'], $_POST['password'], $_POST['genere']);
    header('Location: ../view/llistaUsuaris.php');
    exit();
}

?>