<?php
    /**
     * ENIGMA 2
     * Autor:   Arnau Infante Pinós
     * Fecha:   14/11/2018 - 08/12/2018
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
    require_once "../forms/vars/lang/lang_enigma_2.php"; // Usar rutas (?)
    require_once '../forms/vars/lang/lang_historia.php'; // Usar rutas (?)

    $usuario = $_SESSION['userInfo'];
?>

<?php startblock('titulo')?>Enigma 2<?php endblock() ?>

<?php startblock('own_fonts')?><?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas['enigma_2_css'] ?>">
<?php endblock() ?>

<?php startblock('own_js_header')?><?php endblock() ?>

<?php startblock('principal')?>
    <input type='hidden' id="dificultat" value="<?php echo $usuario['id_dificultad']?>">
    
    <div class="container mb-2">
        <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="instructModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-purple">
                    <div class="modal-body text-justify text-white"><?php echo $historia['enigma2'] ?></div>
                    <div class="modal-footer text-white">
                        <button type="button" class="btn btn-success" id="btn_start"><?php echo $enigma_2['empezar'] ?></button>
                    </div>
                </div>
            </div>
        </div>
        <h1 id="timer" class="text-white mx-auto mb-3"></h1>
        <div class="joc mx-auto my-2">
        </div>
    </div>
    <div class="modal fade" id="gameModal" tabindex="-1" role="dialog" aria-labelledby="gameModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-purple">
                <div class="modal-header">
                    <h5 id="info" class="modal-title text-white"><?php echo $enigma_2['ganador']?></h5>
                    <h5 id="info2" class="modal-title text-white"><?php echo $enigma_2['perdedor']?></h5>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer text-white">
                    <button type="button" class="btn btn-secondary" id="restart"><?php echo $enigma_2['restart'] ?></button>
                    <form action="/api/update_enigma_api.php" method="post">
                        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['userInfo']['id'] ?>">
                        <input type="hidden" name="id_enigma" value="3">
                        <button type="submit" id="btnSiguiente" class="btn btn-primary"><?php echo $enigma_2['siguiente'] ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>
    <script>
        $('#infoModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true
        });
    </script>
    <script src="<?php echo $rutas["enigma_2_js"] ?>"></script>
<?php endblock() ?>