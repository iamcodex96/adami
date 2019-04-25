<?php
    /**
     * LOGOUT - API
     * Autor: Adrià Martínez i Mayné
     * Fecha: 25/11/2018
     * Revisor: ---
     * Fecha:   ---
     */

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";

    if (isset($_SESSION['userInfo'])) {
        unset($_SESSION['userInfo']);
    }

    header('Location: ' . $rutas['index']);
    die();
?>