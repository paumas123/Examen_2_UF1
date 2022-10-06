<?php
require_once '../model/Persona.php';
include_once '../controller/eliminarUsuariController.php';
include_once '../controller/functions/checkUser.php';
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/tipusLletra.css">
    <link rel="stylesheet" href="css/llistaUsuaris.css">
    <title>Llista d'Usuaris</title>
</head>

<body>
<?php require 'header.php' ?>

<table class="taulaUsuaris">
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Segon Cognom</th>
        <th>Email</th>
        <th>Password</th>
        <th>Genere</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php foreach ($_SESSION['persones'] as $key => $persona) { ?>
        <form class="formInformacioPersonal" action="../controller/llistaUsuarisController.php" method="post">
            <tr>
                <th><input name="nom" value="<?= $persona->getNom(); ?>"></th>
                <th><input name="cognom" value="<?= $persona->getCognom(); ?>"></th>
                <th><input name="snCognom" value="<?= $persona->getSnCognom(); ?>"></th>
                <th><input name="email" value="<?= $persona->getEmail(); ?>"></th>
                <th><input name="password" value="<?= $persona->getPassword(); ?>"></th>
                <th><input name="genere" value="<?= $persona->getGenere(); ?>"></th>
                <input hidden name="key" value="<?= $key ?>">

                <th>
                    <?php if ($persona->checkIsAdmin()) {
                        echo "<span class='material-symbols-outlined'>block</span>";
                    } else { ?>
                        <button type="submit" name="btnEditar" class="btn">Edit</button>
                    <?php } ?>
                </th>
        </form>

        <th>
            <?php if ($persona->checkIsAdmin()) {
                echo "<span class='material-symbols-outlined'>block</span>";
            } else { ?>
                <a href="../controller/llistaUsuarisController.php?btnEliminar=<?= $key ?>">
                    <button class="btn">Delete</button>
                </a>
            <?php } ?>
        </th>
        </tr>
    <?php } ?>
</table>
<a href="../controller/init.php"><!--Reset Users-->
    <button class="btnDades" <!--onclick="--><?php /*require '../controller/init.php'; */ ?>">Reset Users</button>
</a>
</body>

</html>