<?php

function checkEmail($email)
{
    foreach ($_SESSION['userShop'] as $persona) {
        if ($persona->getEmail() === $email) {
            return true;
        }
    }
    return false;
}

function checkCredentials($email, $pass)
{
    foreach ($_SESSION['userShop'] as $persona) {
        if ($persona->getEmail() === $email) {
            if ($persona->getPass() === $pass) {
                return true;
            }
        }
    }
    return false;
}

?>