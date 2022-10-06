<?php
require_once '../model/Persona.php';
include_once '../controller/functions/imprimirErrors.php';
if (session_status() === PHP_SESSION_NONE) session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tipusLletra.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/informacioPersonal.css">
    <title>Informació Personal</title>
</head>

<body>
<?php require 'header.php' ?>

<div class="container">
    <div class="containerDades">
        <form class="formInformacioPersonal" action="../controller/editarUsuariController.php" method="post">
            <input type="text" name="nom" id="inputNom" placeholder="Name" value="<?= $_SESSION['usuari']->getNom() ?>"
                   required autofocus>

            <input type="text" name="cognom" id="inputCognom" placeholder="Surname"
                   value="<?= $_SESSION['usuari']->getCognom() ?>"
                   required>

            <input type="text" name="snCognom" id="inputSnCognom" placeholder="Segon cognom"
                   value="<?= $_SESSION['usuari']->getSnCognom() ?>" required>

            <input type="email" name="email" id="inputEmail" placeholder="Email"
                   value="<?= $_SESSION['usuari']->getEmail() ?>" required>

            <input type="password" name="password" id="inputPassword" placeholder="Password" required>

            <input type="password" name="repeatPassword" id="inputPassword" placeholder="Repeat password" required>

            <label>
                <select name="genere" id="selectGenere" required>
                    <option hidden selected><?= ($_SESSION['usuari']->getGenere() === "H") ? "Home" : "Dona"; ?></option>
                    <option value="H">Home</option>
                    <option value="D">Dona</option>
                </select>
            </label>

            <button class="btn" type="submit" name="modificarUsuari"><b>Apply Changes</b></button>

        </form>

        <form action="../controller/eliminarUsuariController.php" method="post">
            <button class="btn" type="submit" name="eliminarUsuari"><b>Delete account</b></button>
        </form>

        <p class="errors">
            <?php imprimirErrors(); ?>
        </p>
    </div>
</div>


</body>
</html>
