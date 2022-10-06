<?php

function getUserEmail($email)
{
    foreach ($_SESSION['userShop'] as $user) {
        if ($user->getEmail() === $email) {
            return $user;
        }
    }
}

function checkBanned($email){
    foreach ($_SESSION['userShop'] as $user) {
        if ($user->getEmail() === $email) {
           return $user->getBanned();
        }
    }
    return false;
}

?>