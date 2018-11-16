<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/adami_project/assets/libs/ti.php" ?>
<?php include  $_SERVER['DOCUMENT_ROOT'] . "/adami_project/forms/rutas.php"?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php startblock('titulo')?>
     
     <?php endblock() ?></title>
    <link rel="stylesheet" href="<?php echo   $rutas["bootstrap_css"] ?>">
    <link rel="stylesheet" href="<?php echo  $rutas["master_css"] ?>">
    
    <script src="<?php echo  $rutas["bootstrap_jquery"] ?>"></script>
    <script src="<?php echo  $rutas["bootstrap_js"] ?>"></script>
    <script src="<?php echo  $rutas["bootstrap_jpopper"] ?>"></script>

    <script>$(function () {
        $(document).scroll(function () {
            var $nav = $(".sticky-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > 1);
        });
        });</script>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="<?php echo $rutas['index'] ?>">
            <img class="mb-4" src="<?php echo $rutas['logo'] ?>" alt="ADAMi" width="72" height="72">
        </a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $rutas['login'] ?>">Iniciar sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $rutas['register'] ?>">Registro</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Datos maestros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="">Ciudades</a>
                </div>
            </li>
            </ul>
        </div>

        </nav>
        <?php startblock('principal')?>
        
        <?php endblock() ?>
</body>
<footer class="position-sticky" >
    
</footer>
</html>