<?php 
    /**
     * Get User By Name - API
     * Autor: Justine Visitacion
     * Fecha: 05/12/2018
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
                                    WHERE (id = :identificador)');
        $sentencia->bindParam(':identificador', $_SESSION['userInfo']['id']);
        $sentencia->execute();
        $resultado = $sentencia->fetch();
        $_SESSION['profileInfo'] = $resultado;
        header('Location: ' . $rutas['profile_form']); 
    } catch (PDOException $e) {
        header('Location: ' . $rutas['register_form']); 
    } finally {
        if (!is_null($conn)) {
            $conn = null;
        }
    }
?>