<?php
 /**
     * UPDATE DIFICULTAD - API
     * Autor: Adrià Martínez Mayné
     * Fecha: 12/12/2018
     * Revisor: ---
     * Fecha:   ---
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";
    require $_SERVER['DOCUMENT_ROOT'] . $rutas['connection_bd'];
    require_once $_SERVER['DOCUMENT_ROOT'].  $rutas['errors_bd'];

    $id = $_POST['id_usuario'];
    $id_enigma = $_POST['id_enigma'];

    try{
        if ($id_enigma > 5) {
            $conn = null;
            require $_SERVER['DOCUMENT_ROOT'] . $rutas['connection_bd'];

            $stm=$conn->prepare('UPDATE users SET id_dificultad=0, id_enigma=5, completado=1 WHERE id=:id');
            $stm->bindParam(':id', $id);
            $stm->execute();

            $_SESSION['userInfo']['id_dificultad'] = 0;
            $_SESSION['userInfo']['completado'] = 1;
            $_SESSION['userInfo']['id_enigma']= $id_enigma;
        } else {
            $stm=$conn->prepare('UPDATE users SET id_enigma=:id_enigma WHERE id=:id');
            $stm->bindParam(':id_enigma', $id_enigma);
            $stm->bindParam(':id', $id);
            $stm->execute();
            
            $_SESSION['userInfo']['id_enigma']= $id_enigma;
        }

        header('Location: ' . $rutas['landing_form']);
    }
    catch (PDOException $e){
        $_SESSION['error'] = errorMessage($e);
    }
    finally {
        $conn=null;
    }
?>