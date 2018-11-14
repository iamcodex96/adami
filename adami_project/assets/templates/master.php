<?php
/**
 * MASTER FORM
 * Authors: Adrià Martínez i Mayné
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/adami_project/assets/libs/ti.php';
include $_SERVER['DOCUMENT_ROOT'] .'/adami_project/forms/rutas.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?php startblock('title') ?><?php endblock() ?>
        </title>

        <link rel="stylesheet" href="<?php echo $rutas['bootstrap_css'] ?>">
        <link rel="stylesheet" href="<?php echo $rutas['master_css'] ?>">
        <?php startblock('ownCss')?><?php endblock()?>
        <script src="<?php echo $rutas['bootstrap_jquery'] ?>"></script>
        <script src="<?php echo $rutas['bootstrap_jpopper'] ?>"></script>
        <script src="<?php echo $rutas['bootstrap_js'] ?>"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                <a class="navbar-brand mr-3" href="/adami_project/">
                    <img src="" width="30" height="30" alt="ADAMI">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/adami_project/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/adami_project/forms/login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/adami_project/forms/register.php">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main role="main" class="container">
            <?php startblock('principal') ?><?php endblock() ?>
        </main>
        <footer class="page-footer">
            <div class="container">
                <span class="text">Place sticky footer content here.</span>
            </div>
        </footer>
        
    </body>
</html>