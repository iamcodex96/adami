<?php 
    /**
     * CONTROLED ERRORS - API
     * Autor: Arnau Infante
     * Fecha: 16/11/2018
     * Revisor: 
     */
    
    function errorMessage($e) {
        if(!empty($e->errorInfo[1])) {
            switch($e->errorInfo[1]) {
                case 1062: 
                    $mensaje = 'Este usuario ya existe';
                    break;
                case 1451:
                    $mensaje = 'Registro con elementos seleccionados';
                    break;
                default:
                    $mensaje = $e->errorInfo[1] . " - " . $errorInfo[2];
                    break;
            }
        } else {
            switch($e->getCode()) {
                case 1044:
                    $mensaje = "Usuario y/o contraseña incorrecto";
                    break;
                case 1049:
                    $mensaje = "Base de datos desconocida";
                    break;
                case 2002:
                    $mensaje = "No se encuentra en servidor";
                    break;
                default:
                    $mensaje = $e->getCode() . " - " . $e->getMessage();
                    break;
            }
        }
        return $mensaje;
    }
?>