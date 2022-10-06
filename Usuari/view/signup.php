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
    <title>Sign Up</title>
</head>
<body>
<?php include 'template/navbar.php';?>

<div class="content">
    <form action="../controller/signUpController.php" method="post">
        <h3>SignUp Form</h3>
        <table>
            <tr>
                <th>
                    <label for="idInputMail">Email</label>
                </th>
                <th>
                    <input type="email" name="email" id="idInputMail"
                           style="<?php if($_SESSION['errors']['emptyEmail']) echo "border: 2px solid red"; ?>                   "
                           value="">
                </th>

            </tr>
            <tr>
                <th>
                    <label for="idInputPass">Password</label>
                </th>
                <th>
                    <input type="password" name="pass" id="idInputPass"
                           style="<?php if($_SESSION['errors']['emptyPass']) echo "border: 2px solid red"; ?>"
                           value="">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="idInputFullName">Full Name</label>
                </th>
                <th>
                    <input type="text" name="fullName" id="idInputFullName"
                           style="<?php if($_SESSION['errors']['emptyFullName']) echo "border: 2px solid red"; ?>"
                           value="">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="idInputBirthDate">BirthDate</label>
                </th>
                <th>
                    <input type="date" name="birthDate" id="idInputBirthDate"
                           style="<?php if($_SESSION['errors']['emptyBirthDate']) echo "border: 2px solid red"; ?>"
                           value="">

                </th>
            </tr>
        </table>
        <div class="smallText">
            <small style="color: red; font-weight: bold">
                <?php
                if(isset($_SESSION['errors']['emptyInput'])) echo $_SESSION['errors']['emptyInput'] . "<br>";
                if(isset($_SESSION['errors']['emailInUse'])) echo $_SESSION['errors']['emailInUse'];
                unset($_SESSION['errors']);
                ?>
                <br>
            </small>
        </div>
        <div class="buttons">
            <input type="submit" name="formSignUp" value="Register">
            <input type="reset" value="Reset">
        </div>


    </form>

</div>
</body>
</html>


