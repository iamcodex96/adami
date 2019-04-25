<?php
    /**
     * OPEN BD - API
     * Autor: Arnau Infante Pinós || David Corredera Pérez
     * Fecha: 16/11/2018
     * Revisor: Adrià Martínez Mayné
     * 25/11/2018
     */

    include_once $_SERVER['DOCUMENT_ROOT']. "/forms/vars/rutas.php";
    include_once $_SERVER['DOCUMENT_ROOT']. $rutas['errors_bd'];

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $servername = "hostingmysql328.nominalia.com";
    $username = "daw2a02";
    $password = "JSFiddle1234";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=daw2a02;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        $_SESSION['error'] = errorMessage($e);
        echo $_SESSION['error'];
    }
?>