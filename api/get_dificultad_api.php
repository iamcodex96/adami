<?php
    /**
     * GET SEXOS - API
     * Autor: Adrià Martínez i Mayné
     * Fecha: 12/12/2018
     * Revisor: ---
     * Fecha:   ---
     */
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";
    require $_SERVER['DOCUMENT_ROOT'] . $rutas['connection_bd'];

    try {
        $sentencia = $conn->prepare('SELECT id,' . $lang . ' AS title FROM dificultad WHERE id = ' . $_SESSION['userInfo']['id_dificultad'] );
        $sentencia->execute();

        $dificultad = $sentencia->fetchAll(\PDO::FETCH_ASSOC);
        $conn = null;
    } catch (PDOException $e) {

    } finally {
        if (!is_null($conn)) {
            $conn = null;
        }
    }
?>