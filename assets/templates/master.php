<?php
    /**
     * MASTER FORM
     * Autor: Arnau Infante Pinós || Adrià Martínez i Mayné || Justine Visitación Calpito || David Corredera Pérez
     * Fecha: 09/11/2018 - 29/11/2018
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['language'])) {
        $_SESSION['language'] = "es";
    }
    
    require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/lang/lang_master.php"; // Usar rutas (?)
    require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/libs/ti/ti.php';           // Usar rutas (?)
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['language'] ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="<?php echo $rutas["logo_ico"] ?>">
        <link rel="icon" href="<?php echo $rutas["logo_ico"] ?>">
        <!-- Title -->
        <title><?php startblock('titulo')?><?php endblock() ?></title>
        <!-- Fonts and Icons -->
        <link rel="stylesheet" type="text/css" href="<?php echo $rutas["material_icons_font"] ?>"/>
        <link rel="stylesheet" href="<?php echo $rutas["font_awesome_font"] ?>"/>
        <?php startblock('own_fonts')?><?php endblock() ?>
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo $rutas["bootstrap_core_css"] ?>">
        <link rel="stylesheet" href="<?php echo $rutas["master_css"] ?>">
        <?php startblock('own_css')?><?php endblock() ?>
        <!-- Scripts -->
        <!-- Bootstrap Core JS -->
        <script src="<?php echo $rutas["jquery"] ?>"></script>
        <script src="<?php echo $rutas["popper"] ?>"></script>
        <script src="<?php echo $rutas["bootstrap_js"] ?>"></script>
        <?php startblock('own_js_header')?><?php endblock() ?>
  </head>
  <body class="text-center">
    <div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto text-left">
            <nav class="navbar navbar-dark fixed-top navbar-expand-lg mb-2">
                <!-- Nav-Logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" onclick=""></span>
                </button>
                <a class="navbar-brand" href="<?php echo $rutas['index'] ?>">
                    <img class="mb-1" src="<?php echo $rutas['logo'] ?>" alt="ADAMi" width="64" height="64">
                </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <!-- Nav-Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item sub" onclick="">
                            <a class="nav-link active" href="<?php echo $rutas['index']?>"><?php echo $navbar['home'] ?></a>
                        </li>
                        <?php if (isset($_SESSION['userInfo'])) { ?>
                            <li class="nav-item sub" onclick="">
                                <a class="nav-link" href="<?php echo $rutas['landing_form']?>"><?php echo $navbar['enigmas'] ?></a>
                            </li> 
                        <?php } ?>
                        <li class="nav-item sub" onclick="">
                            <a class="nav-link" href="<?php echo $rutas['about_form']?>"><?php echo $navbar['about'] ?></a>
                        </li>
                        <?php if (isset($_SESSION['userInfo']) && ($_SESSION['userInfo']['role'] == 1)) { ?>
                            <li class="nav-item sub" onclick="">
                                <a class="nav-link" href="<?php echo $rutas['admin_form']?>"><?php echo $navbar['admin'] ?></a>
                            </li> 
                        <?php } ?>
                    </ul>
                    <!-- Nav-Right -->
                    <ul class="navbar-nav">
                        <!-- Selección de idioma -->
                        <li class="dropdown nav-item">
                            <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="material-icons">language</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-with-icons sub">
                                <a id="lang_ca" class="dropdown-item" href="">Català</a>
                                <a id="lang_en" class="dropdown-item" href="">English</a>
                                <a id="lang_es" class="dropdown-item" href="">Español</a>
                                <a id="lang_fr" class="dropdown-item" href="">Français</a>
                                <a id="lang_it" class="dropdown-item" href="">Italiano</a>
                                <a id="lang_ru" class="dropdown-item" href="">Pусский</a>
                            </div>
                        </li>
                        <!-- Sesión iniciada -->
                        <?php if(isset($_SESSION['userInfo'])) { ?>
                            <li class="dropdown nav-item">
                                <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="material-icons">account_circle</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-with-icons sub">
                                    <a class="dropdown-item" href="<?php echo $rutas['profile_form']?>"><?php echo $navbar['profile'] ?></a>
                                    <a id="btn_logout" class="dropdown-item " href="<?php echo $rutas['logout_api']?>"><?php echo $navbar['logout'] ?></a>
                                </div>
                            </li>
                        <!-- Sesión no iniciada -->
                        <?php } else { ?>
                            <li class="dropdown nav-item">
                                <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="material-icons">account_circle</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-with-icons sub">
                                    <a class="dropdown-item" href="<?php echo $rutas['login_form']?>"><?php echo $navbar['login'] ?></a>
                                    <a class="dropdown-item " href="<?php echo $rutas['register_form']?>"><?php echo $navbar['register'] ?></a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </header>

      <main role="main" class="inner">
        <?php startblock('principal')?><?php endblock() ?>
      </main>

      <footer class="mt-auto">
        <div class="inner">
          <p class="text-light">Made with <i class="material-icons">favorite</i> by <a class="text-warning font-weight-bold" href="<?php echo $rutas['about_form'] ?>">ADAMi</a>.</p>
        </div>
      </footer>
    </div>
    <!-- Scripts -->
    <script src="<?php echo $rutas["user_manager_js"] ?>"></script>
    <script src="<?php echo $rutas["inactive_cookie"] ?>"></script>
    

    <?php if((isset($_SESSION['userInfo']['login'])) && (($_SESSION['userInfo']['login']) == 1)) { 
        $_SESSION['userInfo']['login'] = 0;?>
        <script> setUsuarios('login', '<?php echo $_SESSION['userInfo']['username']; ?>'); </script>
    <?php } ?>

    <?php if(isset($_SESSION['userInfo'])) { ?>
       <script> username = '<?php echo $_SESSION['userInfo']['username']; ?>';</script>
    <?php } ?>
    <?php startblock('own_js_onload')?><?php endblock() ?>
  </body>
</html>