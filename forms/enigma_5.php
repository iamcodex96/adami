<?php
    /**
     * ENIGMA 5
     * Autor:   Justine Visitación Calpito
     * Fecha:   14/11/2018 - 14/12/2018
     * Revisor: ---
     * Fecha:   ---
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once './vars/rutas.php';

    if (!isset($_SESSION['userInfo'])) {
        header('Location: ' . $rutas['login_form']); 
    }
    
    require_once '../assets/templates/master.php'; // Usar rutas (?)
    require_once '../forms/vars/lang/lang_enigma_5.php'; // Usar rutas (?)
    require_once '../forms/vars/lang/lang_historia.php'; // Usar rutas (?)
    require_once '../api/get_dificultad_api.php'; // Usar rutas (?)
    $dificultad = $dificultad[0];
?>

<?php startblock('titulo')?><?php echo $enigma_5['titulo'] ?><?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas['enigma_5_css'] ?>">
<?php endblock() ?>

<?php startblock('principal')?>
    <div class="container">
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="instructModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-purple">
                    <div class="modal-body text-justify text-white"><?php echo $historia['enigma5'] ?></div>
                    <div class="modal-footer text-white">
                        <button type="button" class="btn btn-success" id="btn_start"><?php echo $enigma_5['siguiente'] ?></button>
                    </div>
                </div>
            </div>
        </div>
        <div id="gamearea" class="col-12">
            <div id="espacio"></div>
            <div id="espacio"></div>
            <div class="estrellas background">
                <div class="campo_estrellas"></div>
                <div class="campo_estrellas"></div>
            </div>
            <div id = "spaceship">
                <img src="../assets/media/img/spacejam/spaceship.png" height="150" width="150" alt="Starship" />
                <div id="shipCollision"></div>
            </div>
            <div class="estrellas midground">
                <div class="campo_estrellas"></div>
                <div class="campo_estrellas"></div>
            </div>
            <div class="estrellas foreground">
                <div class="campo_estrellas"></div>
                <div class="campo_estrellas"></div>
            </div>
            <div id="meteoritos"></div>
            <div id="disparosR"></div>
            <div id="ui">
                <div id="vidas"></div>
                <progress id="combustible" max = "100"></progress>
                <progress id="gameprogress" max="60"></progress>
                <div id="disparos"></div>
            </div>
            <div id="gameover">
                <h1><?php echo $enigma_5['gameover'] ?></h1>
                <button onclick="gameManager.restartGame()"> <?php echo $enigma_5['restart'] ?> </button>
            </div>
            <div id="moon">
                <img src="../assets/media/img/spacejam/moon.png">
                <div id="texto">
                    <h1><?php echo $enigma_5['moon_txt1'] ?></h1>
                    <hr>
                    <h2><?php echo $enigma_5['moon_txt2'] ?></h2>
                    <form action="/api/update_enigma_api.php" method="post">
                        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['userInfo']['id'] ?>">
                        <input type="hidden" name="id_enigma" value="6">
                        <button type="submit" class="btnnext btn btn-primary"><?php echo $enigma_5['moon_txt3'] ?></button>
                    </form>                
                </div>
            </div>
            <div id="tutorial1" class="tutorial">
                <h1><?php echo $enigma_5['tutorial_txt1'] ?></h1>
                <img class="controles1" src="../assets/media/img/spacejam/controles.png">
                <img class="controles2" src="../assets/media/img/spacejam/controles2.png">
                <h2><?php echo $enigma_5['tutorial_txt2'] ?> 
                    <br/><?php echo $enigma_5['tutorial_txt3'] ?> 
                    <br/> <?php echo $enigma_5['tutorial_txt4'] ?></h2>
                <button type="button" onclick="game_tutorial.loadComienzo()" class="btnnext btn-block btn btn-primary btn-lg">Volver</button>
            </div>
            <div id="tutorial2" class="tutorial">
                <h1 class="text-center"><?php echo $enigma_5['start_txt1'] ?></h1>
                <hr>
                <h2 class="text-center"><?php echo $enigma_5['start_txt2'] ?></h2>
                <button type="button" onclick="game_tutorial.loadgame()" class="btnnext btn btn-primary btn-lg"><?php echo $enigma_5['start_txt3'] ?></button>
                <button type="button" onclick="game_tutorial.loadControles()" class="btncontroles btn btn-info btn-lg">
                    <i class="material-icons">info</i>
                </button>
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
        $("#btn_start").click(function(){
            $('#infoModal').modal('hide');
        });
    </script>
    <script src="<?php echo $rutas["lang_enigma_5_js"] ?>"></script>
    <script src="<?php echo $rutas["enigma_5_js"] ?>"></script>
    <script>gameManager.dificultad = <?php echo $dificultad['id'] ?></script>
<?php endblock() ?>