<?php
    /**
     * REGISTER FORM
     * Autor: David Corredera Pérez
     * Fecha: 14/11/2018 - 16/11/2018
     * Revisor: Adrià Martínez i Mayné
     * Fecha: 30/11/2018
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
    require_once "../forms/vars/lang/lang_register.php"; // Usar rutas (?)

    if (isset($_SESSION['userInfo'])) {
        header('Location: ' . $rutas['landing_form']); 
    } else if (isset($_SESSION['regisInfo'])) {
        $user = $_SESSION['regisInfo'];
        unset($_SESSION['regisInfo']);
    } else {
        $user['nombre'] = '';
        $user['apellidos'] = '';
        $user['username'] = '';
        $user['email'] = '';
    }
?>

<?php startblock('titulo')?>Register<?php endblock() ?>

<?php startblock('own_fonts')?><?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas["login_register_css"] ?>">
<?php endblock() ?>

<?php startblock('own_js_header')?><?php endblock() ?>

<?php startblock('principal')?>
<div class="container">
    <div class="card m-auto col-11 col-sm-10 col-md-8 col-lg-8 col-xl-8 row">
        <div class="card-body text-light">
        <form class="needs-validation" action="<?php echo $rutas['register_api']?>" method="post" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <!-- Nombre -->
                    <label for="nombre" class="col-form-label col-12 text-left"><?php echo $register['nombre'] ?></label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="<?php echo $register['nombre'] ?>" value="<?php echo $user['nombre'] ?>" required>
                    <div class="invalid-feedback text-left"><?php echo $register['nombre_invalido'] ?></div>
                </div>
                <div class="form-group col-md-6">
                    <!-- Apellidos -->
                    <label for="apellidos" class="col-form-label col-12 text-left"><?php echo $register['apellidos'] ?></label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="<?php echo $register['apellidos'] ?>" value="<?php echo $user['apellidos'] ?>" required>
                    <div class="invalid-feedback text-left"><?php echo $register['apellidos_invalido'] ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <!-- Email -->
                    <label for="email" class="col-form-label col-12 text-left"><?php echo $register['email'] ?></label>    
                    <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo $register['email'] ?>" value="<?php echo $user['email'] ?>" required>
                    <div class="invalid-feedback text-left"><?php echo $register['email_invalido'] ?></div>
                </div>
                <div class="form-group col-md-6">
                    <!-- Username -->
                    <label for="username" class="col-form-label col-12 text-left"><?php echo $register['username'] ?></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control" placeholder="<?php echo $register['username'] ?>" value="<?php echo $user['username'] ?>" required>
                        <div class="invalid-feedback text-left"><?php echo $register['username_invalido'] ?></div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <!-- Password -->
                    <label for="password" class="col-form-label col-12 text-left"><?php echo $register['password'] ?></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo $register['password'] ?>" required>
                    <div class="invalid-feedback text-left"><?php echo $register['password_invalido'] ?></div>
                </div>
                <div class="form-group col-md-6">
                    <!-- Password repeat -->
                    <label for="password2" class="col-form-label col-12 text-left"><?php echo $register['password2'] ?></label>
                    <input type="password" name="password2" id="password2" class="form-control" placeholder="<?php echo $register['password2_placeholder'] ?>" required>
                    <div class="invalid-feedback text-left"><?php echo $register['password2_invalido'] ?></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary bg-success border-success col-6 mt-3"><?php echo $register['btn_register'] ?></button>
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
            <div class="text-light">
                <p><?php echo $register['have_account'] ?><a href="<?php echo $rutas['login_form']?>"><?php echo $register['login'] ?></a></p>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_register_js"] ?>"></script>
    <script src="<?php echo $rutas["register_js"] ?>"></script>
<?php endblock() ?>