<?php
    /**
     * ENIGMA 1
     * Autor: David Corredera Pérez
     * Fecha: 20/11/2018 - 13/12/2018
     * Revisor: 
     * Fecha:
     */

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['language'])) {
        $_SESSION['language'] = "es";  
    }

    $lang = $_SESSION['language'];

    require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/rutas.php";

    if (!isset($_SESSION['userInfo'])) {
        header('Location: ' . $rutas['login_form']); 
    }
    
    require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/questions.php"; // Usar rutas
    require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/vars/lang/lang_enigma_1.php"; // Usar rutas
    require_once '../forms/vars/lang/lang_historia.php'; // Usar rutas (?)
    require_once $_SERVER['DOCUMENT_ROOT'] . "/assets/templates/master.php"; // Usar rutas
?>

<?php startblock('titulo')?>Enigma 1<?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas["enigma_1_css"] ?>">
<?php endblock() ?>

<?php startblock('principal')?>
    <div class="container mb-4">      
        <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="instructModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-purple">
                    <div class="modal-body text-justify text-white"><?php echo $historia['enigma1'] ?></div>
                    <div class="modal-footer text-white">
                        <button type="button" class="btn btn-success" id="btn_start" onclick="empezar()"><?php echo $enigma1['empezar'] ?></button>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" id="dificultat" name="dificultat" value="<?php echo $_SESSION['userInfo']['id_dificultad'] ?>">

        <h2 id="timer" class="text-white mt-2">15</h2>
        <div class="col-12 border-0">
            <h2 class="text-center text-white" id="pregunta"></h2>
        </div>
        <div id="contenedorRespuestas" class="text-white">
            <div class="card col-11 col-md-8 mx-auto border-0 bg-transparent">
                <div class="card-body respuesta" id="pregunta1" onclick="comprobarResultado(0)"> 
                    <h3 class="text-center" id="1"></h3>             
                </div>
            </div>
            <div class="card col-11 col-md-8 mx-auto border-0 bg-transparent">
                <div class="card-body respuesta" id="pregunta2" onclick="comprobarResultado(1)"> 
                    <h3 class="text-center" id="2"></h3>             
                </div>
            </div>
            <div class="card col-11 col-md-8 mx-auto border-0 bg-transparent">
                <div class="card-body respuesta" id="pregunta3" onclick="comprobarResultado(2)"> 
                    <h3 class="text-center" id="3"></h3>             
                </div>
            </div>
        </div>

        <h4 id="examen_incorrecto" class="text-white mt-5"><?php echo $enigma1['examen_incorrect'] ?></h4>
        <h4 id="examen_correcto" class="text-white mt-5"><?php echo $enigma1['examen_correct'] ?></h4>

        <div id="infoPreguntas" class="mt-5">
            <p id="preguntas" class="text-white"><?php echo $enigma1['questions'] ?></p>
            <p id="correctas" class="text-white"><?php echo $enigma1['correct'] ?></p>
            <p id="incorrectas" class="text-white"><?php echo $enigma1['incorrect'] ?></p>
        </div>

        <button class="col-6 col-md-4 btn btn-info btn-lg my-3 rounded" id="siguiente" onClick="siguientePregunta()"><?php echo $enigma1['next'] ?></button>
        
        <div id="btnEnd" class="row mx-auto mb-5 text-center">
            <div class="col-6 mx-auto">
                <button class="btn btn-secondary" id="volver" onClick="volverJugar()"><?php echo $enigma1['back'] ?></button>
            </div>
            <div class="col-6 mx-auto">
                <form action="/api/update_enigma_api.php" method="post">
                    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['userInfo']['id'] ?>">
                    <input type="hidden" name="id_enigma" value="2">
                    <button type="submit" class="btn btn-primary" id="finalizar"><?php echo $enigma1['end'] ?></button>
                </form>
            </div>
        </div>

        <div id="btnsSiNo" class="mx-auto">
            <button class="btn btn-info mb-5" id="si" onClick="cambiarDificultad(1)"><?php echo $enigma1['yes'] ?></button>
            <button class="btn btn-info mb-5" id="no" onClick="cambiarDificultad(0)"><?php echo $enigma1['no'] ?></button>
        </div>
    </div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_enigma_1_js"] ?>"></script>
    <script src="<?php echo $rutas["enigma_1_js"] ?>"></script>
<?php endblock() ?>