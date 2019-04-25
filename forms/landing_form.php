<?php
    /**
     * LANDING FORM
     * Autor: Adrià Martínez i Mayné || Arnau Infante Pinós
     * Fecha: 25/11/2018 - 12/12/2018
     * Revisor: ---
     * Fecha:   ---
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once "../forms/vars/rutas.php";
    require_once '../assets/templates/master.php'; // Usar rutas (?)
    require_once "../api/get_dificultades_api.php"; // Usar rutas (?)
    require_once "../api/get_enigmas_api.php"; // Usar rutas (?)
    require_once "../forms/vars/lang/lang_landing.php"; // Usar rutas (?)

    if (!isset($_SESSION['userInfo'])) {
        header('Location: ' . $rutas['login_form']); 
    } else {
        $user = $_SESSION['userInfo'];
    }
    if(isset($_COOKIE['estacion'])) {
        $estacion = (int)$_COOKIE['estacion'];
    } else {
        $estacion = 0;
    }
?>

<?php startblock('titulo')?>Principal<?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas["landing_css"] ?>">
<?php endblock() ?>

<?php startblock('ownJS_header')?><?php endblock() ?>

<?php startblock('principal')?>
    <?php if(!isset($user['id_dificultad']) || ($user['id_dificultad'] == 0)) {?>
        <div class="container">
            <div class="row">
                <h2 class="col-12 text-white text-center mx-auto mt-3"><?php echo $landing['escoger']?></h2>
                <div class="col-8 col-md-6 mx-auto">
                    <hr>
                </div>
            </div>
            <div class="row mb-3">
                <?php
                foreach ($dificultades as $dificultad) {
                    if ($dificultad['id'] != 0) { ?>
                        <div class="card col-5 col-xl-2 mx-auto my-3" onclick="submitForm(<?php echo $dificultad['id'] ?>)">
                            <div class="card-body">
                                <form id="<?php echo $dificultad['id'] ?>" action="<?php echo $rutas['update_dificultad_api']?>" method="POST"> 
                                    <input class="btn text-white font-weight-bold" type="submit" name="btnDificultad" value ="<?php echo $dificultad['title'] ?>" checked> 
                                    <input type="hidden" name="id_dificultad" id="id_dificultad" value="<?php echo $dificultad['id'] ?>" autocomplete="off">
                                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $user['id']?>" autocomplete="off">    
                                </form>
                            </div>
                        </div>
                <?php } } ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="container">
            <div class="row">
                <?php foreach ($enigmas as $enigma) { ?>
                    <div class="card col-8 col-md-5 col-xl-2 py-3 mx-auto my-4">
                        <?php if($user['completado'] == 1) { ?>
                            <img class="card-img-top" src="<?php echo $enigma['img']?>" width="150" height="150">
                            <div class="card-body text-center text-white">
                                <h5 class="card-title text-white"><?php echo $enigma['title']?></h5>
                                <a href="<?php echo $enigma['url']?>" class="btn btn-success mx-auto mt-4"><?php echo $landing['btn_start']?></a>
                            </div>
                        <?php } else if($enigma['id'] > $user['id_enigma']) { ?>
                            <img class="card-img-top" src="<?php echo $rutas['locked_img']?>" width="150" height="150">
                        <?php } else if(($user['id_enigma'] >= $enigma['id']) && ($estacion != $enigma['id'])) { ?>
                            <img class="card-img-top" src="<?php echo $enigma['img']?>" width="150" height="150">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white"><?php echo $enigma['title']?></h5>
                            </div>
                            <p class="text-light">Este enigma se puede jugar en la estacion <?php echo $enigma['id'] ?></p>
                        <?php } else { ?>
                            <img class="card-img-top" src="<?php echo $enigma['img']?>" width="150" height="150">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white"><?php echo $enigma['title']?></h5>
                                <a href="<?php echo $enigma['url']?>" class="btn btn-success mx-auto"><?php echo $landing['btn_start']?></a>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?>
            </div>
        </div>
    <?php }?>
<?php endblock()?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_landing_js"] ?>"></script>
    <script>
        function submitForm(id) {
            $('#' + id).submit();
        }
    </script>
<?php endblock() ?>