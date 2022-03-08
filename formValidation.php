<?php
session_start();

$validUser = 'admin';
$validPass = 'password';

if (isset($_POST['username'])
    && isset($_POST['password'])
    && $_POST['username'] === $validUser
    && $_POST['password'] === $validPass) {

    $_SESSION['connect'] = true;
} else {
    $_SESSION['connect'] = false;
}

header('Location: /');
