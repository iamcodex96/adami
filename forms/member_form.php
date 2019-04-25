<?php
    /**
     * 
     * Autor:   Daniel Palacín
     * Fecha:   23/11/2018 - 04/12/2018
     * Revisor: David Corredera
     * Fecha:   05/12/2018
     */
    
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once "../forms/vars/rutas.php";
    require_once "../assets/templates/master.php"; // Usar rutas (?)
    require_once "vars/members.php"; // Usar rutas (?)

    if (isset($_GET['member']) && (isset($members[$_GET['member']]))) {
        $_SESSION['member'] = $_GET['member'];
        $member_name = $_GET['member'];
    } else if (isset($_SESSION['member']) && (isset($members[$_SESSION['member']]))) {
        $member_name = $_SESSION['member'];
    } else {
        header('Location: about_form.php');
    }

    $member = $members[$member_name];
?>

<?php startblock('titulo')?>Team Member<?php endblock()?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas["about_css"] ?>">
<?php endblock()?>

<?php startblock('principal') ?> 
    <div class="container">
        <div class="card">
            <div class="card-body text-white">
                <img class="rounded-circle mx-auto d-block" src="<?php echo $member['img']?>" height=150 with=150>
                <h2 class="card-title text-center"><?php echo $member['nombre'] . ' ' . $member['apellidos']?></h2>
                <div class="col-8 mx-auto">
                    <hr>
                </div>
                <?php 
                    foreach ($member as $key => $value) {
                        if($key!='nombre' && $key!='img'&& $key!='apellidos' && $key!='twitter' && $key!='instagram' && $key!='linkedin'){ ?>
                            <h3 class="text-left"><?php echo $key ?></h3> 
                            <p class="text-justify"><?php echo $value ?></p>
                            <div class="col-8 mx-auto">
                                <hr>
                            </div>
                        <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_team_js"] ?>"></script>
<?php endblock() ?>