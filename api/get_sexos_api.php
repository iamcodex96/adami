<?php
    /**
     * GET SEXOS - API
     * Autor: Adrià Martínez i Mayné
     * Fecha: 06/11/2018
     * Revisor: ---
     * Fecha:   ---
     */
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . $rutas['connection_bd'];

    try {
        $sentencia = $conn->prepare('SELECT id, ' . $lang . ' AS value FROM sexo');
        $sentencia->execute();

        $sexos = $sentencia->fetchAll(\PDO::FETCH_ASSOC);
    } catch (PDOException $e) {

    } finally {
        if (!is_null($conn)) {
            $conn = null;
        }
    }
?>