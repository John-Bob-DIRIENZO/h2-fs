<?php

function checkConnect()
{
    session_start();

    if (isset($_SESSION['connect']) && $_SESSION['connect'] === true) {
        echo 'vous êtes connecté';
    } else {
        echo 'casse toi !';
    }
}
