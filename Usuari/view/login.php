<?php
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
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>

<!--<form id="login" class="containerLogin" action="../controller/loginController.php" method="post">-->
<!--    <h2>Email<br><input type="email" name="email" size="50px"-->
<!--            --><?php //imprimirEmail(); ?>
<!--    </h2>-->
<!--    <h2>Password<br><input type="password" name="password" size="50px"></h2>-->
<!--    <div class="botons">-->
<!--        <button class="btn" name="btnRegistre"><a href="registre.php">Registre</a></button>-->
<!--        <button class="btn" type="submit" name="btnLogin">Login</button>-->
<!--    </div>-->
<!---->
<!--    <p class="errors">-->
<!--        --><?php //imprimirErrors(); ?>
<!--    </p>-->
<!---->
<!--</form>-->

<div class="container">
    <div class="containerLogin">
        <img class="img" src="img/loginImg.png"/>
        <form class="formLogin" action="../controller/loginController.php" method="post">
            <input type="email" name="email" id="inputEmail" placeholder="Email" required autofocus
                   value="<?= $_SESSION['emailLogin'] ?>">
            <?php unset($_SESSION['emailLogin']) ?>

            <input type="password" name="password" id="inputPassword" placeholder="Password" required>

            <button class="btn" type="submit"><b>Sign in</b></button>
            <a href="registre.php" class="register">Don't have an account?</a>
            <p class="errors">
                <?php imprimirErrors(); ?>
            </p>
        </form>
    </div>
</div>

</body>
</html>