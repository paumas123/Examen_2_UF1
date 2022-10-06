<?php
require_once '../model/Persona.php';
include_once 'functions/checkUser.php';
if (session_status() === PHP_SESSION_NONE) session_start();

//if (!$_SESSION['persones']) {
//    $_SESSION['persones'] = [];
//}

if (isset($_POST['eliminarUsuari'])) {
    foreach ($_SESSION['persones'] as $persona => $pers) {
        if ($pers->getEmail() === $_SESSION['usuari']->getEmail()) {
            if ($pers->checkIsAdmin()) {
                $_SESSION['errors'] = "No es pot eliminar un administrador";
            }

//            if ($pers->getPassword() !== $_SESSION['usuari']->getPassword()) $_SESSION['errors'] .= 'Contrassenya incorrecte<br>';

            if (!isset($_SESSION['errors'])) {
                unset($_SESSION['persones'][$persona]);
                header('Location: ../view/login.php');
                exit();
            }

            header('Location: ../view/informacioPersonal.php');
            exit();
        }
    }
}

?>