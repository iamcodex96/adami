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

    if (!isset($_SESSION['userInfo']) || ($_SESSION['userInfo']['role'] != 1)) {
        header('Location: ' . $rutas['login_form']); 
    }

    if (isset($_COOKIE['estacion'])) {
        $numero = $_COOKIE['estacion'];
    }
?>

<?php startblock('titulo')?>Login<?php endblock() ?>

<?php startblock('own_fonts')?><?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas["enigma_3_css"] ?>">
<?php endblock() ?>

<?php startblock('own_js_header')?><?php endblock() ?>

<?php startblock('principal')?>
    <div class="container py-5">
        <div class="card m-auto col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 row bg-purple">
            <div class="card-body text-light">
                <h2 class="card-title text-center">Seleccionar estación:</h2>
                <select name="sexo" id="select" class="form-control" required>
                    <?php for ($i=0; $i < 6; $i++) {
                        if($numero == $i) { ?>
                            <option value="<?php echo $i ?>" selected><?php echo $i ?></option>
                    <?php } else if ($i == 0) { ?>
                        <option value="<?php echo $i ?>">-</option>
                    <?php } else { ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php }
                    } ?>
                </select>
                <button type="button" id="btn_set_estacion" class="btn btn-success mt-4">Definir estación</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="instructModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-purple">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="instructModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify text-white-50">Se ha creado la cookie correctamente.</div>
            </div>
        </div>
    </div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_admin_js"] ?>"></script>
    <script>
        $('#btn_set_estacion').click(function(){
            var estacion_seleccionada = $('#select').find(":selected").text();
            document.cookie = 'estacion=' + estacion_seleccionada;
            
            $('#instructModalLabel').text(estacion_seleccionada + "");
            $('#infoModal').modal({
                backdrop: 'static',
                keyboard: false,
                show: true
            });
            var reload = function() {
                location.reload();
            }
            setTimeout(reload, 4000);
        });
    </script>
<?php endblock() ?>