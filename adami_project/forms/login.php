<?php
/**
 * LOGIN FORM
 * Authors: Adrià Martínez i Mayné
 */
include_once "../forms/rutas.php";
?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $rutas['logo_ico'] ?>">
    <title>Login</title>
    <link href="../assets/styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/styles/css/login.css" rel="stylesheet">
  </head>

    <body class="text-center">
        <form class="form-signin">
            <a href="<?php echo $rutas['index'] ?>" title="ADAMi">
                <img class="mb-4" src="<?php echo $rutas['logo'] ?>" alt="" width="72" height="72">
            </a>

            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <hr>
            <div class="checkbox mb-3">
                <label><input type="checkbox" value="remember-me"> Remember me</label>
            </div>
            <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
        </form>
    </body>
</html>