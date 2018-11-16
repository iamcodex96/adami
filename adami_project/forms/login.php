<?php
/**
 * LOGIN FORM
 * Autor: Adrià Martínez i Mayné
 * Fecha: 14/11/2018
 * Revisor: --- 
 * Fecha:   ---
 */
include_once "../forms/rutas.php";
?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo $rutas['logo_ico'] ?>">
    <title>Login</title>
    <link href="<?php echo $rutas['bootstrap_css'] ?>" rel="stylesheet">
    <link href=" <?php echo $rutas['login_css'] ?> " rel="stylesheet">
    <script src="<?php echo  $rutas["bootstrap_jquery"] ?>"></script>
    <script src="<?php echo  $rutas["bootstrap_js"] ?>"></script>
    <script src="<?php echo  $rutas["bootstrap_jpopper"] ?>"></script>
  </head>

    <body class="text-center">
        <div class="container">
            <div class="card col-5 m-auto row">
                <div class="card-body">
                    <form class="form-signin" action="<?php echo $rutas['login'] ?>" method="post">
                        <a href="<?php echo $rutas['index'] ?>">
                            <img class="mb-4" src="<?php echo $rutas['logo'] ?>" alt="ADAMi" width="72" height="72">
                        </a>
                        <h1 class="h3 mb-3 font-weight-normal text-light">Sign in</h1>

                        <label for="inputName" class="sr-only">Email, username or phone</label>
                        <input type="text" id="inputName" class="form-control" placeholder="Email, username or phone" required autofocus>

                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

                        <div class="form-check float-left mb-2">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1">
                            <label class="form-check-label text-light" for="defaultCheck1">Remember me</label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block bg-success border-success" type="submit">Sign in</button>

                        <hr>
                        <div class="text-light">
                            <p>You do not have an account? <a href="<?php echo $rutas['register']?>">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>