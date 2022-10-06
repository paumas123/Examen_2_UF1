<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/form.css">
    <title>Sign In</title>
</head>
<body>
<?php include 'template/navbar.php';?>

<div class="content">

    <form action="../controller/signInController.php" method="post">
        <h3>Login</h3>
        <table>
            <tr>
                <th>
                    <label for="idInputMail">Email</label>
                </th>
                <th>
                    <input type="email" name="email" id="idInputMail"">
                </th>

            </tr>
            <tr>
                <th>
                    <label for="idInputPass">Password</label>
                </th>
                <th>
                    <input type="password" name="pass" id="idInputPass">
                </th>
            </tr>


        </table>
        <div class="smallText">
            <small style="color: red; font-weight: bold">
                <?php
                if (isset($_SESSION['errors'])) echo($_SESSION['errors']) . "<br>";
                if (isset($_SESSION['userBanned'])) echo $_SESSION['userBanned'];
                if (isset($_SESSION['info'])) echo($_SESSION['info']);

                unset($_SESSION['errors']);
                unset($_SESSION['userBanned']);
                unset($_SESSION['info']);
                ?>
            </small>
        </div>
        <div class="buttons">
            <input type="submit" name="formSignIn" value="SignIn">
            <input type="reset" value="Reset">
        </div>


    </form>


</div>
</body>
</html>
