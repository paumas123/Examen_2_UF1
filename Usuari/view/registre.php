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
    <link rel="stylesheet" href="css/registre.css">
    <title>Registre</title>
</head>
<body>

<div class="container">
    <div class="containerRegistre">
        <form class="formRegistre" action="../controller/registreController.php" method="post">
            <input type="text" name="nom" id="inputNom" placeholder="Name" required autofocus
                   value="<?= $_SESSION['dadesRegistre'][0] ?>">

            <input type="text" name="cognom" id="inputCognom" placeholder="Surname" required
                   value="<?= $_SESSION['dadesRegistre'][1] ?>">

            <input type="text" name="snCognom" id="inputSnCognom" placeholder="2nd Surname" required
                   value="<?= $_SESSION['dadesRegistre'][2] ?>">

            <input type="email" name="email" id="inputEmail" placeholder="Email" required
                   value="<?= $_SESSION['dadesRegistre'][3] ?>">

            <input type="password" name="password" id="inputPassword" placeholder="Password" required>

            <input type="password" name="repeatPassword" id="inputPassword" placeholder="Repeat password"
                   required>

            <div class="termsAndConidtions">
                <label>
                    <input type="checkbox" required>He llegit i accepto els Termes i condicions
                </label>
            </div>

            <label>
                <select name="genere" id="selectGenere" required>
                    <option value="" hidden selected>Gender</option>
                    <option value="H">Home</option>
                    <option value="D">Dona</option>
                </select>
            </label>

            <button class="btn" type="submit"><b>Registration</b></button>
            <a href="login.php" class="login">Do you already have an account?</a>

            <?php unset($_SESSION['dadesRegistre']) ?>

            <p class="errors">
                <?php imprimirErrors(); ?>
            </p>
        </form>
    </div>
</div>

</body>
</html>