<?php
    /**
     * PROFILE FORM
     * Autor: Justine Visitación Calpito
     * Fecha: 19/11/2018 - 03/12/2018
     * Revisor: Adrià Martínez Mayné
     * Fecha:   04/12/2018 - 06/12/2018
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once "../forms/vars/rutas.php";
    require_once "../assets/templates/master.php"; // Usar rutas (?)
    require_once "../forms/vars/lang/lang_profile.php"; // Usar rutas (?)
    require_once "../api/get_sexos_api.php"; // Usar rutas (?)

    if(isset($_SESSION['userInfo'])) {
        $user = [];
        $user = $_SESSION['userInfo'];
    } else {
        header('Location: ' . $rutas['index']);
    }
?>
<?php startblock('titulo')?>Profile<?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas['profile_css'] ?>">
<?php endblock() ?>

<?php startblock('principal')?>
    <div class="container">
        <div class="row h-100 profile-parent rounded">
            <div id="sideprof" class="m-auto d-block float-left">
                <div class="imagen mx-auto mt-2">
                    <img class="rounded-circle" src="<?php echo $rutas['spaceman_img'] ?>">
                </div>
                <div class="username text-center text-white-30 mt-1">
                    <h2 class="text-white"><?php echo $user['username'] ?></h2>
                    <p class="text-light"><?php echo $user['descripcion'] ?></p>
                </div>
                <div>
                    <ul class="navperfil text-white mt-3 pt-1 list-unstyled rounded">
                        <li class="navperfil-group py-2 activado" onclick="mostrarItem(event,'miperfil')"><?php echo $profile['perfil_titulo'] ?></li>
                        <li class="navperfil-group py-2" onclick="mostrarItem(event,'logros')">Logros</li>
                        <li class="navperfil-group py-2" onclick="mostrarItem(event,'amigos')">Amigos</li>
                    </ul>
                </div>
            </div>
            <div id="prof" class="prof float-left h-100 pt-1">
                <div id="miperfil" class="profile-content p-3 mt-1">
                    <h3><?php echo $profile['perfil_titulo'] ?></h3>
                    <form id="info" action="<?php echo $rutas['update_user_api'] ?>" method="post">
                        <!-- Id -->
                        <input type="hidden" name="id" class="form-control" value="<?php echo $user['id'] ?>" required>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <!-- Descripción -->
                                <label for="descripcion" class="col-form-label col-12 text-left"><?php echo $profile['descripcion'] ?></label>
                                <textarea name="descripcion" class="form-control" maxlength="150"><?php echo $user['descripcion'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- Nombre -->
                                <label for="nombre" class="col-form-label col-12 text-left"><?php echo $profile['nombre'] ?></label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $user['nombre'] ?>" required>
                                <div class="invalid-feedback text-left"><?php echo $profile['nombre_invalido'] ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <!-- Apellidos -->
                                <label for="apellidos" class="col-form-label col-12 text-left"><?php echo $profile['apellidos'] ?></label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $user['apellidos'] ?>" required>
                                <div class="invalid-feedback text-left"><?php echo $profile['apellidos_invalido'] ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- Email -->
                                <label for="email" class="col-form-label col-12 text-left"><?php echo $profile['email'] ?></label>    
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo $user['email'] ?>" required>
                                <div class="invalid-feedback text-left"><?php echo $profile['email_invalido'] ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <!-- Telefono -->
                                <label for="telefono" class="col-form-label col-12 text-left"><?php echo $profile['telefono'] ?></label>    
                                <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $user['telefono'] ?>" required>
                                <div class="invalid-feedback text-left"><?php echo $profile['telefono_invalido'] ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- Sexo -->
                                <label for="sexo" class="col-form-label col-12 text-left"><?php echo $profile['sexo'] ?></label>    
                                <select name="sexo" class="form-control" required>
                                    <?php
                                        foreach ($sexos as $sex) {
                                            if ($sex['id'] === $user['sexo']) {
                                                echo '<option selected="selected" value='. $sex["id"] .'>'. $sex["value"] .'</option>';
                                            } else {
                                                echo '<option value='. $sex["id"] .'>'. $sex["value"] .'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary bg-success border-success col-6 mt-3"><?php echo $profile['btn_submit'] ?></button>
                    </form>
                </div>
                <div id="logros" class="profile-content">
                    <h2>Logros</h2>
                </div>
                <div id="juegos" class="profile-content">
                    <h2>Juegos</h2>
                </div>
                <div id="amigos" class="profile-content">
                    <h2>Amigos</h2>
                </div>
            </div>
        </div>
    </div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_profile_js"] ?>"></script>
    <script src="<?php echo $rutas["profile_js"] ?>"></script>
<?php endblock() ?>