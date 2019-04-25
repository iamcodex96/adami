<?php
    /**
     * INDEX FORM
     * Autor:   Adrià Martínez i Mayné || Justine Visitación Calpito
     * Fecha:   09/11/2018 - 29/11/2018
     * Revisor: ---
     * Fecha:   ---
     */
    
    require_once "forms/vars/rutas.php";
    require_once 'assets/templates/master.php'; // Usar rutas (?)
    require_once "forms/vars/lang/lang_index.php"; // Usar rutas (?)

    if (isset($_SESSION['userInfo'])) {
        $btnLaunchUrl = $rutas['landing_form'];
    } else {
        $btnLaunchUrl = $rutas['login_form'];
    }
?>

<?php startblock('titulo')?>Index<?php endblock() ?>

<?php startblock('own_fonts')?><?php endblock() ?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas["index_css"] ?>">
<?php endblock() ?>

<?php startblock('own_js_header')?><?php endblock() ?>

<?php startblock('principal')?>
    <div class="container">
        <div class="row">
            <div class= "col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 videoinfo">
                <iframe width="100%" height="480" src="<?php echo $rutas['video_YT'] . $lang ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
            </div>
            <div class= "col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 info">
                <h2><?php echo $index['title'] ?></h2>
                <p class="text-justify"><?php echo $index['presentacion1'] ?></p>
                <p class="text-justify"><?php echo $index['presentacion2'] ?></p>
                <p class="text-justify"><?php echo $index['presentacion3'] ?></p>
                <a role="button" class="btn btn-primary btn-lg btn-block mt-3 mb-3 mb-lg-0" href="<?php echo $btnLaunchUrl ?>"><?php echo $index['btnLaunch'] ?></a>
            </div>
        </div>
    </div>
<?php endblock() ?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_index_js"] ?>"></script>
<?php endblock() ?>