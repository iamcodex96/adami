<?php 
    /**
     * Get User By Name - API
     * Autor: Adrià Martínez i Mayné
     * Fecha: 26/11/2018
     * Revisor: ---
     * Fecha:   ---
     */
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . $rutas['connection_bd'];
    
    try {
        $sentencia = $conn->prepare('SELECT *
                                    FROM users
                                    WHERE (username = :identificador)');
        $sentencia->bindParam(':identificador', $username);
        $sentencia->execute();
        $resultado = $sentencia->fetch();
        $_SESSION['userInfo'] = $resultado;
    } catch (PDOException $e) {
        header('Location: ' . $rutas['register_form']); 
    } finally {
        if (!is_null($conn)) {
            $conn = null;
        }
    }
?>