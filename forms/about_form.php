<?php
    /**
     * ABOUT US (MEET THE TEAM) FORM
     * Autor: David Corredera Pérez
     * Fecha: 23/11/2018 - 04/12/2018 
     * Revisor: ---
     * Fecha:   ---
     */
    
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once "../forms/vars/rutas.php";
    require_once "../assets/templates/master.php"; // Usar rutas (?)
    require_once "../forms/vars/lang/lang_about.php"; // Usar rutas (?)
    require_once "vars/members.php"; // Usar rutas (?)
?>

<?php startblock('titulo')?>Meet the team<?php endblock()?>

<?php startblock('own_css')?>
    <link rel="stylesheet" href="<?php echo $rutas["about_css"] ?>">
<?php endblock()?>

<?php startblock('principal')?>
    <div class="container">     
        <div class="row text-center mb-4">
            <div class="col-12 col-lg-4">
                <img src="<?php echo $rutas['logo']?>" class="img-fluid padding-bottom" alt="Responsive image" width="200" height="200">  
            </div>
            <div class="col-12 col-lg-8 text-white text-justify">
                <p><?php echo $about['presentacion'] ?></p>
                <p><?php echo $about['presentacion2'] ?></p>
            </div>
        </div>
        <h1 class="text-center text-white mb-4"><?php echo $about['members_title'] ?></h1>
        <div class="row">
            <?php foreach ($members as $member) { ?>
                <div class="col-12 col-md-4 col-lg-4 mx-auto mb-4 text-center">
                    <div class="card col-10 col-md-8 col-lg-8 col-xl-8 mx-auto text-white" onclick="location.href='member_form.php?member=<?php echo $member['nombre'] ?>'">
                        <img class="img-fluid rounded-circle mx-auto mt-3" src="<?php echo $member['img'] ?>" alt="Member" height="150" width="150">
                        <div class="card-body"> 
                            <h5 class="card-title"><?php echo $member['nombre'] ?></h5>                      
                        </div>
                        <div class="card-footer">
                            <div class="row pl-1 pr-1">
                                <?php if(isset($member['twitter'])) { ?>
                                    <a href="<?php echo $member['twitter'] ?>" class="mx-auto">
                                        <i class="fa fa-twitter text-white"></i>
                                    </a> 
                                <?php } 
                                if(isset($member['instagram'])) { ?>
                                    <a href="<?php echo $member['instagram'] ?>" class="mx-auto">
                                        <i class="fa fa-instagram text-white"></i>
                                    </a>
                                <?php }  
                                if(isset($member['linkedin'])) { ?>
                                    <a href="<?php echo $member['linkedin'] ?>" class="mx-auto">
                                        <i class="fa fa-linkedin text-white"></i>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>  
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php endblock()?>

<?php startblock('own_js_onload')?>
    <script src="<?php echo $rutas["lang_about_js"] ?>"></script>
<?php endblock() ?>