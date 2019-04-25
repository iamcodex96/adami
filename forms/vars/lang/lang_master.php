<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $lang = $_SESSION['language'];

    switch($lang) {
        case 'ca':
            $navbar = array(
                "home" => "Inici",
                "about" => "Sobre ADAMi",
                "enigmas" => "Enigmes",
                "admin" => "Administrador",
                "login" => "Iniciar sessió",
                "register" => "Registra't",
                "profile" => "El meu perfil",
                "logout" => "Tanca la sessió",
            );
            break;
        case 'es':
            $navbar = array(
                "home" => "Inicio",
                "about" => "Sobre ADAMi",
                "enigmas" => "Enigmas",
                "admin" => "Administrador",
                "login" => "Iniciar sesión",
                "register" => "Regístrate",
                "profile" => "Mi perfil",
                "logout" => "Cerrar sesión",
            );
            break;
        case 'en':
            $navbar = array(
                "home" => "Home",
                "about" => "About us",
                "enigmas" => "Riddles",
                "admin" => "Admin",
                "login" => "Log In",
                "register" => "Sign up",
                "profile" => "Profile",
                "logout" => "Logout",
            );
            break;
        case 'it':
            $navbar = array(
                "home" => "Home",
                "about" => "Informazioni",
                "enigmas" => "Enigmi",
                "admin" => "Admin",
                "login" => "Accesso",
                "register" => "Iscriviti",
                "profile" => "Il mio profilo",
                "logout" => "Esci",
            );
            break;
        case 'fr':
            $navbar = array(
                "home" => "Accueil",
                "about" => "À propos",
                "enigmas" => "Énigmes",
                "admin" => "Admin",
                "login" => "Connectez-vous",
                "register" => "Inscrivez-vous",
                "profile" => "Mon profil",
                "logout" => "Déconnexion",
            );
            break;
        case 'ru':
            $navbar = array(
                "home" => "Инициирование",
                "about" => "Об ADAMi",
                "enigmas" => "загадки",
                "admin" => "Администратор",
                "login" => "Начать",
                "register" => "Зарегистрироваться",
                "profile" => "Мой профиль",
                "logout" => "Закрытие сессию",
            );
            break;
        default:
            $navbar = array(
                "home" => "Inicio",
                "about" => "Sobre ADAMi",
                "login" => "Iniciar sesión",
                "register" => "Regístrate",
                "profile" => "Mi perfil",
                "logout" => "Cerrar sesión",
            );
            break;
    }
?>