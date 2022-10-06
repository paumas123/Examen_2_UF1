<?php
require_once '../model/Persona.php';
include_once 'functions/checkUser.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (isset($_POST['modificarUsuari'])) {
    foreach ($_SESSION['persones'] as $persona => $pers) {
        if ($pers->getEmail() === $_SESSION['usuari']->getEmail()) {
            if ($pers->checkIsAdmin()) {
                $_SESSION['errors'] = "No es pot editar un administrador";
            }
//            $persona = [];
//            unset($_SESSION['persones'][$persona]);
//            $_SESSION['persones'][$persona] = new Persona($_POST['email'], 'sisi', 'sisi', 'sisi', 'asdasd', 'H');

//            unset($pers);

//            echo $pers->getEmail();
//            echo $_POST['email'];
//            die();


            //Miro que en el cas que el correu que posi és el del mateix usuari, continui amb el codi
            //sinó, si el correu no es el de l'usuari mirarà si aquest existeix
            if ($pers->getEmail() === $_POST['email']) ;
            else if (checkEmail()) $_SESSION['errors'] .= 'Aquest correu ja existeix<br>';


            //Mira si les contrasenyes són iguals a la de l'usuari
            if ($pers->getPassword() === $_POST['password'] && $pers->getPassword() === $_POST['repeatPassword']) ;

            //Si la passw no es la de l'usuari, tornarà a verificar que tingui una longitud entre 5 i 15 i que coincideixin
            if (checkPasswordLength()) $_SESSION['errors'] .= 'La contrasenya ha de tenir entre 5 i 15 caràcters<br>';
            else if (checkRepeatPassword()) $_SESSION['errors'] .= 'Les passwords no coincideixen<br>';


            if (!isset($_SESSION['errors'])) {
                $_SESSION['persones'][$persona] = new Persona($_POST['nom'], $_POST['cognom'], $_POST['snCognom'], $_POST['email'], $_POST['password'], $_POST['genere']);
                $_SESSION['usuari'] = '';
                $_SESSION['usuari'] = $_SESSION['persones'][$persona];

//                $_SESSION['errors'] .= "Per veure els canvis tanca i obre la sessió";
//                print_r($_SESSION['persones'][$persona]);
//                die();
            }

            header('Location: ../view/informacioPersonal.php');
            exit();
        }
    }
}

?>