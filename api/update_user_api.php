<?php
    /**
     * UPDATE USER - API
     * Autor: Adrià Martínez Mayné
     * Fecha: 06/12/2018
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
    include_once $_SERVER['DOCUMENT_ROOT'] . $rutas['errors_bd'];

    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];

    try {
        $sentencia = $conn->prepare('UPDATE users
                                     SET descripcion="' . $descripcion . '", 
                                         nombre="' . $nombre . '",
                                         apellidos="' . $apellidos . '", 
                                         email="' . $email . '", 
                                         telefono="' . $telefono . '", 
                                         sexo=' . $sexo . ' 
                                     WHERE id =' . $id);
        $sentencia->execute();
        
        $_SESSION['userInfo']['descripcion'] = $descripcion;
        $_SESSION['userInfo']['nombre'] = $nombre;
        $_SESSION['userInfo']['apellidos'] = $apellidos;
        $_SESSION['userInfo']['email'] = $email;
        $_SESSION['userInfo']['telefono'] = $telefono;
        $_SESSION['userInfo']['sexo'] = $sexo;
        header('Location: ' . $rutas['landing_form']);
    } catch(PDOException $e) {
        header('Location: ' . $rutas['profile_form']);
    } finally {
        if (!is_null($conn)) {
            $conn = null;
        }
    }
?>