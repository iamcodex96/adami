<?php
    /**
     * ENIGMA 3
     * Autor:   Adrià Martínez i Mayné
     * Fecha:   14/11/2018 - 12/12/2018
     * Revisor: ---
     * Fecha:   ---
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once "../forms/vars/rutas.php";

    if (!isset($_SESSION['userInfo'])) {
        header('Location: ' . $rutas['login_form']); 
    }

    require_once '../assets/templates/master.php'; // Usar rutas (?)
    require_once '../forms/vars/lang/lang_enigma_3.php'; // Usar rutas (?)
    require_once '../forms/vars/lang/lang_historia.php'; // Usar rutas (?)
    require_once "../api/get_dificultad_api.php"; // Usar rutas (?)
    $dificultad = $dificultad[0];
?>

<?php startblock('titulo')?>Enigma 3<?php endblock() ?>

<?php startblock('own_fonts')?><?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas['enigma_3_css'] ?>">
<?php endblock() ?>

<?php startblock('own_js_header')?>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/assets/libs/touch-punch/jquery.ui.touch-punch.min.js"></script>
<?php endblock() ?>

<?php startblock('principal')?>
    <div class="container mb-1">
        <div class="row justify-content-around p-3 align-items-center">
            <div class="col-12 col-md-10 col-lg-5 col-xl-5 mx-auto bg-purple p-4">
                <div id="game-info">
                    <p class="text-white"><?php echo $enigma_3['dificultad'] ?>: <span id="dificultad"><?php echo $dificultad['title'] ?></span></p>
                    <p class="text-white"><?php echo $enigma_3['tiempo'] ?>: <span id="tiempo"></span></p>
                    <p class="text-white"><?php echo $enigma_3['pasos'] ?>: <span id="stepCount"></span></p>
                </div>
                <div class="row mx-auto">
                    <button id="start_btn" class="col-5 mx-auto p-2 bg-success align-center text-center" type="button"><?php echo $enigma_3['start'] ?></button>
                </div>
                <div class="row mx-auto">
                    <button id="info_btn" class="col-3 mt-2 pt-1 mx-auto bg-info align-center text-center" type="button" data-toggle="modal" data-target="#instructModal"><i class="material-icons">info</i></button>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-6 col-xl-5 text-center mx-auto bg-purple">
                <img id="original_photo" class="col-12 mt-3" src="<?php echo $rutas['spaceship_img']?>">
                <ul class="col-12 text-success font-weight-bold list-unstyled d-flex flex-wrap hideNums" id="game-container"></ul>
            </div>
        </div>
    </div>

    <div class="modal fade" id="gameModal" tabindex="-1" role="dialog" aria-labelledby="gameModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-purple">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="gameModalLabel"><?php echo $enigma_3['felicidades'] ?></h5>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer text-white">
                    <button type="button" class="btn btn-secondary" id="btn_play_again"><?php echo $enigma_3['playagain'] ?></button>
                    <form action="/api/update_enigma_api.php" method="post">
                        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['userInfo']['id'] ?>">
                        <input type="hidden" name="id_enigma" value="4">
                        <button type="submit" class="btn btn-primary"><?php echo $enigma_3['siguiente'] ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="instructModal" tabindex="-1" role="dialog" aria-labelledby="instructModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-purple">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="instructModalLabel"><?php echo $enigma_3['instrucciones'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify text-white-50"><?php echo $enigma_3['texto_instrucciones'] ?></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="instructModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-purple">
                <div class="modal-body text-justify text-white"><?php echo $historia['enigma3'] ?></div>
                <div class="modal-footer text-white">
                    <button type="button" class="btn btn-success" id="btn_start"><?php echo $enigma_3['siguiente'] ?></button>
                </div>
            </div>
        </div>
    </div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_enigma_3_js"] ?>"></script>
    <script src="<?php echo $rutas["enigma_3_js"] ?>"></script>

    <script>
        riddle.userDiff = <?php echo $dificultad['id'] ?>;
    </script>
<?php endblock() ?>