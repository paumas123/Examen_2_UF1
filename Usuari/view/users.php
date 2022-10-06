<?php
require_once '../model/UserShop.php';
if (session_status() === PHP_SESSION_NONE) session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cart.css">
    <title>Products</title>
</head>
<body>
<?php include 'template/navbar.php';?>

<div class="content" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <table>
        <h1>Users</h1>
        <tr>
            <th>Email</th>
            <th>Password</th>
            <th>Full Name</th>
            <th>Older Than 18?</th>
            <th>Active?</th>
            <th>Options</th>
        </tr>

        <?php

        echo "<pre>";
        print_r($_SESSION['userShop']);
        echo "</pre>";

        foreach ($_SESSION['userShop'] as $key => $user) { ?>
            <tr>
                <td><?= $user->getEmail(); ?></td>
                <td><?= $user->getPass(); ?></td>
                <td><?= $user->getFullName(); ?></td>

                <?php if($user->checkMajorEdat()) { ?>
                    <td style='text-align: center;'><a href=''><img src='assets/icons/ok.png' alt=''></a></td>
                <?php } else { ?>
                    <td style='text-align: center;'><a href=''><img src='assets/icons/nook.png' alt=''></a></td>
                <?php } ?>

                <?php if(!$user->getBanned()) { ?>
                    <td style='text-align: center;'><a href='../controller/switchBanController.php?email=<?= $user->getEmail(); ?>'><img src='assets/icons/ok.png' alt=''></a></td>
                <?php } else { ?>
                    <td style='text-align: center;'><a href='../controller/switchBanController.php?email=<?= $user->getEmail(); ?>'><img src='assets/icons/nook.png' alt=''></a></td>
                <?php } ?>

                <td><a class="btn" href='../controller/removeUserController.php?email=<?= $key ?>'>Remove</a></td>
            </tr>
        <?php } ?>
    </table>
</div>


</body>
</html>