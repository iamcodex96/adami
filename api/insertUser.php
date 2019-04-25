<?php
    /**
     * NEW USER REGISTER - API
     * Autor: Arnau Infante
     * Fecha: 16/11/2018
     * Revisor: ---
     * Fecha:   ---
     */

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . $rutas['connection_bd'];
    include_once $_SERVER['DOCUMENT_ROOT']. $rutas['errors_bd'];

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];

    try {
        if(strcmp($password, $password2) == 0) {
            $sentencia = $conn->prepare('INSERT INTO users (username, password, email, nombre, apellidos)
                                         VALUES (:username, :password, :email, :nombre, :apellidos)');
            $sentencia->bindParam(':nombre', $nombre);
            $sentencia->bindParam(':apellidos', $apellidos);
            $sentencia->bindParam(':username', $username); 
            $sentencia->bindParam(':password', $password);
            $sentencia->bindParam(':email', $email);
            $sentencia->execute();
            
            include_once $_SERVER['DOCUMENT_ROOT'] . $rutas['getUserByName'];
            header('Location: ' . $rutas['landing_form']);
        } else {
            $_SESSION['error'] = "Las contraseñas no coinciden";
            $user['nombre'] = $nombre;
            $user['apellidos'] = $apellidos;
            $user['username'] = $username;
            $user['email'] = $email;
            $_SESSION['regisInfo'] = $user;
            header('Location: ' . $rutas['register_form']); 
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = errorMessage($e);
        $_SESSION['identifier'] = $identificador;
        header('Location: ' . $rutas['register_form']); 
    } finally {
        if (!is_null($conn)) {
            $conn = null;
        }
    }
?>