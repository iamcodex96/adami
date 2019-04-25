<?php 
    /**
     * LOGIN - API
     * Autor: Arnau Infante || Adrià Martínez i Mayné
     * Fecha: 16/11/2018 - 25/11/2018
     * Revisor: ---
     * Fecha:   ---
     */
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . $rutas['connection_bd'];
    include_once $_SERVER['DOCUMENT_ROOT'] . $rutas['errors_bd'];

    $identificador = $_POST['inputName'];
    $password = $_POST['inputPassword'];

    try {
        $sentencia = $conn->prepare('SELECT *
                                    FROM users
                                    WHERE (username = :identificador OR email = :identificador OR telefono = :identificador)
                                    AND password = :password');
        $sentencia->bindParam(':identificador', $identificador); 
        $sentencia->bindParam(':password', $password); 
        $sentencia->execute();

        $rows = $sentencia->rowCount();

        if($rows > 0) {
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
            $_SESSION['userInfo'] = $resultado;
            $_SESSION['userInfo']['login'] = 1;
            header('Location: ' . $rutas['landing_form']);
        } else {
            $_SESSION['error'] = "Usuario/contraseña incorrectos.";
            $_SESSION['identifier'] = $identificador;
            header('Location: ' . $rutas['login_form']);  
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = errorMessage($e);
        $_SESSION['identifier'] = $identificador;
        header('Location: ' . $rutas['login_form']);  
    } finally {
        if (!is_null($conn)) {
            $conn = null;
        }
    }
?>