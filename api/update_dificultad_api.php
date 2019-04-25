<?php
 /**
     * UPDATE DIFICULTAD - API
     * Autor: Daniel Palacín
     * Fecha: 12/12/2018
     * Revisor: ---
     * Fecha:   ---
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    include_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . $rutas['connection_bd'];
    include_once $_SERVER['DOCUMENT_ROOT'].  $rutas['errors_bd'];

    $id = $_POST['id_usuario'];
    $id_dificultad = $_POST['id_dificultad'];

    try{
        $stm=$conn->prepare('UPDATE users SET id_dificultad=:id_dificultad WHERE id=:id');
        $stm->bindParam(':id_dificultad', $id_dificultad);
        $stm->bindParam(':id', $id);
        $stm->execute();
        $_SESSION['userInfo']['id_dificultad']= $id_dificultad;
        header('Location: ' . $rutas['landing_form']);
    }
    catch (PDOException $e){
        $_SESSION['error'] = errorMessage($e);
    }
    finally {
        $conn=null;
    }
?>