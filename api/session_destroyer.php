<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    session_unset();
    session_destroy();
    //LOGOUT
    header('Location: ' . $rutas['index']);
?>