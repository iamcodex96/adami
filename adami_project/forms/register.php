<?php
/**
 * LOGIN FORM
 * Autor: Davicorpe
 * Fecha: 14/11/2018
 * Revisor: --- 
 * Fecha:   ---
 */
include_once "../forms/rutas.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="<?php echo $rutas['bootstrap_css'] ?>" rel="stylesheet">
    <link href="<?php echo $rutas['register_css'] ?> " rel="stylesheet">
    
    <script src="<?php echo  $rutas["bootstrap_jquery"] ?>"></script>
    <script src="<?php echo  $rutas["bootstrap_js"] ?>"></script>
    <script src="<?php echo  $rutas["bootstrap_jpopper"] ?>"></script>
</head>
<body >
    <!--<h1 class="text-center" style="color:white;">Registro</h1>-->
    <div class="card text-center col-10 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto my-5">
        <div class="card-body form-signup">
            <form action="#" method="post">
                <label for="txtHotel" class="col-form-label col-12 text-left">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce tu nombre">
                
                <label for="txtHotel" class="col-form-label col-12 text-left">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Introduce tus apellidos">
            
                <label for="txtHotel" class="col-form-label col-12 text-left">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Introduce nombre de usuario">
                
                <label for="txtHotel" class="col-form-label col-12 text-left">Contraseña</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Introduce la contraseña">
                
                <label for="txtHotel" class="col-form-label col-12 text-left">Repite la contraseña</label>
                <input type="text" name="password2" id="password2" class="form-control" placeholder="Vuelve a introducir la contraseña">
            
                <label for="txtHotel" class="col-form-label col-12 text-left">Email</label>    
                <input type="email" name="email" id="email" class="form-control" placeholder="Introduce el email">

                <button type="submit" name="enviar" class="btn btn-lg btn-success btn-block mt-3">Register</button>
                <hr>
                <div class="text-light">
                    <p>You already have an account? <a href="<?php echo $rutas['login']?>">Login</a></p>
                </div>
            </form>     
        </div>
    </div>
</body>
</html>

