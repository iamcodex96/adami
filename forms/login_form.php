<?php
    /**
     * LOGIN FORM
     * Autor: Adrià Martínez i Mayné
     * Fecha: 14/11/2018 - 30/11/2018
     * Revisor: David Corredera Pérez
     * Fecha: 19/11/2018
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['language'])) {
        $_SESSION['language'] = "es";
    }

    require_once "../forms/vars/rutas.php";
    require_once '../assets/templates/master.php'; // Usar rutas (?)
    require_once "../forms/vars/lang/lang_login.php"; // Usar rutas (?)

    if (isset($_SESSION['userInfo'])) {
        header('Location: ' . $rutas['landing_form']); 
    } else if (isset($_SESSION['identifier'])) {
        $user['identifier'] = $_SESSION['identifier'];
        unset($_SESSION['identifier']);
    } else {
        $user['identifier'] = '';
    }
?>

<?php startblock('titulo')?>Login<?php endblock() ?>

<?php startblock('own_fonts')?><?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas["login_register_css"] ?>">
<?php endblock() ?>

<?php startblock('own_js_header')?><?php endblock() ?>

<?php startblock('principal')?>
<div class="container">
    <div class="card m-auto col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 row">
        <div class="card-body text-light">
            <form class="form-signin" action="<?php echo $rutas['login_api'] ?>" method="post">
                <a href="<?php echo $rutas['index'] ?>">
                    <img class="mb-4" src="<?php echo $rutas['logo'] ?>" alt="ADAMi" width="72" height="72">
                </a>
                <h1 class="h3 mb-3 font-weight-normal"><?php echo $login['title'] ?></h1>
                <!-- Username -->
                <label for="inputName" class="sr-only"><?php echo $login['identifier_placeholder'] ?></label>
                <input type="text" name="inputName" id="inputName" class="form-control" placeholder="<?php echo $login['identifier_placeholder'] ?>" value="<?php echo $user['identifier'] ?>" required autofocus>
                <!-- Password -->
                <label for="inputPassword" class="sr-only"><?php echo $login['password'] ?></label>
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="<?php echo $login['password'] ?>" required>
                <!-- Submit -->
                <button class="btn btn-lg btn-primary btn-block bg-success border-success mt-3" id="btn_login" type="submit"><?php echo $login['btn_inici'] ?></button>
                <hr>
                <!-- Error -->
                <?php if(isset($_SESSION['error'])) { ?>
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            <span class='sr-only'>Close</span>
                        </button>
                        <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </div>
                <?php } ?>
                <!-- Link al Registro -->
                <div>
                    <p><?php echo $login['no_account'] ?> <a id="register_link" href="<?php echo $rutas['register_form']?>"><?php echo $login['register'] ?></a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_login_js"] ?>"></script>
<?php endblock() ?>