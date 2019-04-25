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
    require_once '../forms/vars/lang/lang_enigma_4.php'; // Usar rutas (?)
    require_once "../api/get_dificultad_api.php"; // Usar rutas (?)
    $dificultad = $dificultad[0];
    $col=10;
    $row=4;
?>

<?php startblock('titulo')?>Enigma 4<?php endblock() ?>

<?php startblock('own_fonts')?><?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas['enigma_4_css'] ?>">
<?php endblock() ?>

<?php startblock('own_js_header')?>
    <script src="<?php echo $rutas["enigma_4_js"] ?>"></script>
<?php endblock() ?>

<?php startblock('principal')?>
    <div class="container">     
        <div class="card mx-auto mt-4 bg-transparent justify-content-center">
            <div id="fondo" class="center">
                <div class="title">
                    <h3></h3>
                    <div class="row justify-content-center">
                        <button class="col-sm-auto bg-info mr-3 mt-1 mb-2 white" data-toggle="modal" data-target="#instrucciones"><i class="material-icons">info</i></button>
                        <button class='btn-primary col-sm-auto mr-3 mb-2 mt-1' id="start" onclick="start()"><?php echo $enigma_4['start']?></button>
                        <h3><?php echo $enigma_4['tiempo']?></h3> 
                        <h3 class="col-sm-1" id=time>50'</h3>
                        <h3 class="col-sm-1" id=descuento></h3>
                        <h2 id="puntos" class="col-sm-auto">0/6</h2>
                    </div>
                </div>
            <?php
            $z=0;
                for($i=0;$i<$row;$i++){ ?>
                    <div class="clearfix"> <?php
                    for($j=0;$j<$col;$j++){
                        ?>
                        <div class="float-left elem bg-transparent" >
                            <div class="content" id ="<?php echo "con".$z?>">
                                <img class="elem" onclick="press(<?php echo $z ?>)" id ="<?php echo $z?>" src="../assets/media/img/logo.png">
                            </div>
                        </div>
                        <?php $z++;} ?>
                    </div>
            <?php } 
            ?>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="over">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $enigma_4['reintentar'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $enigma_4['texto_reintentar']?></p>
                </div>
                <div class="modal-footer">
                    <a href="enigma_4_form.php"><button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $enigma_4['reintentar']?></button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="succes">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-purple">
                <div class="modal-header">
                    <h5 class="modal-title white"><?php echo $enigma_4['felicidades']?></h5>
                </div>
                <div class="modal-body">
                    <p class="white"><?php echo $enigma_4['texto_felicidades']?></p>
                </div>
                <div class="modal-footer text-white">
                    <a href="enigma_4_form.php"><button type="button" class="btn btn-secondary" id="btn_play_again"><?php echo $enigma_4['reintentar'] ?></button></a>
                        <form action="/api/update_enigma_api.php" method="post">
                            <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['userInfo']['id'] ?>">
                            <input type="hidden" name="id_enigma" value="5">
                            <button type="submit" class="btn btn-primary"><?php echo $enigma_4['siguiente'] ?></button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="instrucciones" tabindex="-1" role="dialog" aria-labelledby="instructModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-purple">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="instructModalLabel"><?php echo $enigma_4['instrucciones'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify text-white-50"><?php echo $enigma_4['texto_instrucciones'] ?></div>
            </div>
        </div>
    </div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>

<?php endblock() ?>