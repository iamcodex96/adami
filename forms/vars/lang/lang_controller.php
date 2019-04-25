<?php
    /**
     * MASTER FORM
     * Autor: Adrià Martínez i Mayné
     * Fecha: 30/11/2018
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once "../rutas.php";

    if (isset($_GET['lang']) && (isset($_GET['url']))) {
        $_SESSION['language'] = $_GET['lang'];
        header('Location: ' . $_GET['url']); 
    } else {
        header('Location: ' . $rutas['index']); 
    }
?>