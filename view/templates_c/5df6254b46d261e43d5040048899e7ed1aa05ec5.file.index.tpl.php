<?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44728445355a276204ea2d1-76174222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5df6254b46d261e43d5040048899e7ed1aa05ec5' => 
    array (
      0 => 'view/templates/index.tpl',
      1 => 1537065528,
      2 => 'file',
    ),
    '0139c99266bb744288522bb41c85e49976da5559' => 
    array (
      0 => 'view/templates/base.tpl',
      1 => 1537026978,
      2 => 'file',
    ),
    'd15c8e4a668ea30c234895ba0a8e4d7c27c39f33' => 
    array (
      0 => 'view/templates/navbar.tpl',
      1 => 1537016859,
      2 => 'file',
    ),
    'e85d844f1161a73aaccb592870c3e8fb021c4948' => 
    array (
      0 => 'view/templates/banner.tpl',
      1 => 1537025763,
      2 => 'file',
    ),
    '52f3f0abfcc446185054d89ad017f9187bd35d33' => 
    array (
      0 => 'view/templates/stats.tpl',
      1 => 1537026601,
      2 => 'file',
    ),
    '942928a4996a06225dc9464844082d162b7af66d' => 
    array (
      0 => 'view/templates/middle.tpl',
      1 => 1537035683,
      2 => 'file',
    ),
    'a59ab083519f9e8a571b9345155b019652996225' => 
    array (
      0 => 'view/templates/services.tpl',
      1 => 1537036421,
      2 => 'file',
    ),
    '4c2f5a2220b0bf44fa0235bf0706d3115536b8e7' => 
    array (
      0 => 'view/templates/booking.tpl',
      1 => 1537065974,
      2 => 'file',
    ),
    '8066b90e8e53053e3f6cf5048acfe2102c8cc921' => 
    array (
      0 => 'view/templates/slider.tpl',
      1 => 1537052608,
      2 => 'file',
    ),
    '8d3e0f7f08ce4048eabf01764b7397acf79a80cb' => 
    array (
      0 => 'view/templates/contact.tpl',
      1 => 1537085406,
      2 => 'file',
    ),
    '97e15a264c9f110bbb3e6d0c7fe8ce250c445c5c' => 
    array (
      0 => 'view/templates/map.tpl',
      1 => 1537059375,
      2 => 'file',
    ),
    '97524dc7cb4d808a1106bf8db46e3c6ae83697b8' => 
    array (
      0 => 'view/templates/footer.tpl',
      1 => 1537059808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44728445355a276204ea2d1-76174222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55a2762075b611_52818466',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a2762075b611_52818466')) {function content_55a2762075b611_52818466($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
dd.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
flags.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
bootstrap-datepicker.css">
    <link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
style.css" type="text/css" media="all" />



    <title></title>
</head>
<body id="body">

    
    <!-- header -->
    <header id="home">
        <?php /*  Call merged included template "navbar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1d7dd01_26833322($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "navbar.tpl" */?>
        <?php /*  Call merged included template "banner.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1d83e09_04335381($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "banner.tpl" */?>
    </header>


    
    <?php /*  Call merged included template "stats.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1d8ab53_79007231($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "stats.tpl" */?>
    <?php /*  Call merged included template "middle.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("middle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1d8eb36_05056568($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "middle.tpl" */?>
    <?php /*  Call merged included template "services.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("services.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1d94509_24255478($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "services.tpl" */?>
    <?php /*  Call merged included template "booking.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("booking.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1d99c33_77154932($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "booking.tpl" */?>
    <?php /*  Call merged included template "slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1da4d31_07127039($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "slider.tpl" */?>
    <?php /*  Call merged included template "contact.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1dc6445_13454009($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "contact.tpl" */?>
    <?php /*  Call merged included template "map.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1dceb46_35663514($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "map.tpl" */?>


    
    <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '44728445355a276204ea2d1-76174222');
content_5b9e0fe1dd47d8_62600057($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery-2.2.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
bootstrap.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
bootstrap-datepicker.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery.dd.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery.vide.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jssor.slider-27.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
easing.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
move-top.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
numscroller-1.0.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
SmoothScroll.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
SmoothScroll.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
index.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
booking.js"></script>

</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/navbar.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1d7dd01_26833322')) {function content_5b9e0fe1d7dd01_26833322($_smarty_tpl) {?><!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.html" style="font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif'; font-size: 30px;">
                Atlantic Pacific Shipping Line
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-lg-5">

                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link scroll" href="#home" id="topInicio">Inicio</a>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link scroll" href="#booking" id="topBooking">Booking Ferry</a>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link scroll" href="#about" id="topNosotros">Nosotros</a>
                        </li>

                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link scroll" href="#services" id="topServicios">Servicios</a>
                        </li>

                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link scroll" href="#projects" id="topGaleria">Galería</a>
                        </li>

                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link scroll" href="#contact" id="topContactenos">Contáctenos</a>
                        </li>

                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <div style="display: table; height:100%; width: 100%;">
                                        <div style="display: table-cell; vertical-align: middle; text-align: center;">
                                                <!--
                                                    COMBO BOX DE IDIOMAS
                                                -->
                                                <select name="countries" id="countries" style="width:150px; text-align: left;" onchange="run_site();">
                                                        <option value="en" data-image="resources/flags/images/msdropdown/icons/blank.gif" data-imagecss="flag gb">
                                                                English
                                                        </option>

                                                        <option value="es" data-image="resources/flags/images/msdropdown/icons/blank.gif" data-imagecss="flag es">
                                                                Español
                                                        </option>

                                                        <option value="it" data-image="resources/flags/images/msdropdown/icons/blank.gif" data-imagecss="flag it">
                                                                Italiano
                                                        </option>

                                                        <option value="po" data-image="resources/flags/images/msdropdown/icons/blank.gif" data-imagecss="flag pt">
                                                                Português
                                                        </option>

                                                        <option value="de" data-image="resources/flags/images/msdropdown/icons/blank.gif" data-imagecss="flag de">
                                                                Deutsch
                                                        </option>

                                                        <option value="fr" data-image="resources/flags/images/msdropdown/icons/blank.gif" data-imagecss="flag fr">
                                                                François
                                                        </option>
                                                </select>
                                        </div>
                                </div>

                        </li>
                </ul>
        </div>
</nav>
<!-- //navbar ends here -->
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/banner.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1d83e09_04335381')) {function content_5b9e0fe1d83e09_04335381($_smarty_tpl) {?><!-- banner -->
<div class="banner-w3l">
    <div class="container">
        <div class="banner-left-wthree">
            <h3 class="mt-2 mb-lg-4 mb-sm-3 mb-2 text-white font-weight-bold" id="bannerText">
                Soluciones de<br>Transporte y<br>Logística Marina
            </h3>
            <a href="#contact" class="btn scroll mt-md-5 mt-4" id="bannerButton">Contáctenos</a>
        </div>
    </div>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/stats.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1d8ab53_79007231')) {function content_5b9e0fe1d8ab53_79007231($_smarty_tpl) {?><div class="stats-w3layouts py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold text-uppercase mb-sm-5 mb-4" id="bienvenido">
            <span class="font-weight-bold text-center">APSL</span>Bienvenidos
        </h3>
        <div class="stats-info numscroller roller-title-number-1 scrollzip isShown" data-slno="1">
            <div class="row">
                <p id="nosotros">
                    Atlantic Pacific Shipping Line es una compañía de soluciones,
                    transporte y logística marina de propiedad y operación propias que
                    ofrece servicios en mercados nacionales e internacionales a través de
                    líneas operativas de negocios: Carga Rodada (Contenedores) , Ferris,
                    Logística, Soluciones de Contrato Marino, Transporte de petróleo en alta mar
                    así como el transporte, distribución y venta de petróleo.
                </p>
            </div>
            <div class="row my-4">
                <div class="col-8 right-text-about pl-sm-5 pl-3 mt-lg-3"> </div>
            </div>
            <div class="row">&nbsp;</div>
        </div>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/middle.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1d8eb36_05056568')) {function content_5b9e0fe1d8eb36_05056568($_smarty_tpl) {?><!-- middle section -->
<div class="middle-w3l text-center py-sm-5 py-4">
    <div class="container py-xl-5 py-lg-3">
        <p class="text-white mx-auto font-weight-bold" id="apoyamos">
            Apoyamos los  segmentos de negocios primarios con operaciones corporativas centralizadas, que incluyen compras, recursos humanos, tecnología de la información, relaciones públicas y publicidad, capacitación, viajes y desarrollo de instalaciones.
        </p>
    </div>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/services.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1d94509_24255478')) {function content_5b9e0fe1d94509_24255478($_smarty_tpl) {?><!-- Services -->
<div class="serives-agile py-5" id="services">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold text-uppercase mb-sm-5 mb-4" id="nServicios">
            <span class="font-weight-bold text-center">S</span>Nuestros Servicios
        </h3>
        <div class="row welcome-bottom">
            <div class="col-sm-4 welcome-grid">
                <i class="fas fa-ship"></i>
                <h4 class="my-3" id="t01">Naves</h4>
                <p>
                <ul>
                    <li id="l01a">Buques de alta velocidad Ferrys HSC</li>
                    <li id="l01b">Buques RORO</li>
                    <li id="l01c">Asistencia a Naves en Puerto y Escolta en Barcos Petroleros</li>
                    <li id="l01d">Transporte de barcaza de elevación pesada</li>
                    <li id="l01e">Cargo y Freight Forwarder</li>
                    <li id="l01f">Global Ship Management</li>
                </ul>
                </p>
            </div>

            <div class="col-sm-4 welcome-grid my-sm-0 my-4">
                <i class="fas fa-fire-extinguisher"></i>
                <h4 class="my-3" id="t02">Combustibles</h4>
                <p>
                <ul>
                    <li id="l02a">Ventas y Distribución de Combustible</li>
                    <li id="l02b">Gas Natural Licuado</li>
                </ul>
                </p>
            </div>
            <div class="col-sm-4 welcome-grid">
                <i class="fas fa-flask"></i>
                <h4 class="my-3" id="t03">Especiales</h4>
                <p>
                <ul>
                    <li id="l03a">Transporte de Petróleo</li>
                    <li id="l03b">Transporte de sustancia Químicas</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="row welcome-bottom">
            <div class="col-sm-4 welcome-grid mt-sm-5 my-sm-0 my-4">
                <i class="far fa-lightbulb"></i>
                <h4 class="my-3" id="t04">Gestión</h4>
                <p>
                <ul>
                    <li id="l04a">Gestión de proyectos</li>
                    <li id="l04b">Envío y logística</li>
                    <li id="l04c">Transporte de carga y logística global de proyectos</li>
                    <li id="l04d">Servicios offshore</li>
                </ul>
                </p>
            </div>
            <div class="col-sm-4 welcome-grid mt-sm-5">
                <i class="fas fa-life-ring"></i>
                <h4 class="my-3" id="t05">Salvamento</h4>
                <p>
                <ul>
                    <li id="l05a">Salvamento marino, remoción de naufragios y respuesta de emergencia</li>
                    <li id="l05b">Conformidad OPA 90</li>
                    <li id="l05c">Soluciones marinas</li>
                    <li id="l05d">Remolque Oceánico</li>
                </ul>
                </p>
            </div>
            <div class="col-sm-4 welcome-grid mt-sm-5 mt-4">
                <i class="fab fa-gripfire"></i>

                <h4 class="my-3" id="t06">Ingeniería</h4>
                <p>
                <ul>
                    <li id="l06a">Arquitectura Naval</li>
                    <li id="l06b">Diseño de Embarcaciones</li>
                    <li id="l06c">Gestión de Construcción de Naves</li>
                    <li id="l06d">Ingeniería</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/booking.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1d99c33_77154932')) {function content_5b9e0fe1d99c33_77154932($_smarty_tpl) {?><div class="serives-agile py-5" id="booking">
    <div class="col-md-10" style="margin-left: 15%">
        <h3 class="tittle text-center font-weight-bold text-uppercase mb-sm-5 mb-4" id="nBooking">
            <span class="font-weight-bold text-center">B</span>Booking
        </h3>

        <div class="row">
            <div class="col-md-12">
                <!-- Tab Nav -->
                <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active">
                        <a class="btn btn-default btn-square" href="#routetab" id="route-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                            <i class="fas fa-arrow-circle-right"> </i> Detalles de Ruta
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a disabled class="btn btn-default btn-square btn-inactive" href="#cargotab" role="tab" id="cargo-tab" data-toggle="tab" aria-controls="cargotab" aria-expanded="false">
                            <i class="fas fa-arrow-circle-right"> </i> Detalles de Carga
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a disabled class="btn btn-default btn-square btn-inactive" href="#passengertab" role="tab" id="passenger-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
                            <i class="fas fa-arrow-circle-right"> </i> Pasajeros
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a disabled class="btn btn-default btn-square btn-inactive" href="#paymenttab" role="tab" id="payment-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
                            <i class="fas fa-arrow-circle-right"> </i> Cotización
                        </a>
                    </li>
                </ul>

                <!-- Tabs -->
                <div class="tab-content" id="myTabContent">
                    <!-- First Tab -->
                    <div class="tab-pane active in" role="tabpanel" id="routetab" aria-labelledby="home-tab">
                        <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Suministre la siguiente información</h5>
                        <div class="tab-content-holder col-md-5">
                            <br/>
                            <form class="form-horizontal booking-form" style="margin-left: 15px">
                                <div class="form-group">
                                    <input class="form-control" placeholder="NÚMERO DUT" id="dut" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="route">
                                        <option selected value="0">SELECCIONE UNA RUTA</option>
                                        <option value="elsalvador_costarica">El Savador - Costa Rica</option>
                                        <option value="costarica_elsalvador">Costa Rica - El Savador</option>
                                    </select>
                                </div>
                                <div class="input-group date" style="margin-top: -10px">
                                    <input id="outbounddate" placeholder="FECHA DE SALIDA" type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                </div>
                                <a class="btn btn-default btn-square" onclick="goToSecondStep()" style="margin-top: 10px">
                                    <i class="fas fa-arrow-circle-right"> </i> Siguiente
                                </a>
                            </form>
                        </div>
                    </div>
                    <!-- Second Tab -->
                    <div class="tab-pane" role="tabpanel" id="cargotab" aria-labelledby="cargo-tab">
                        <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Información de la Carga</h5>
                        <div class="tab-content-holder col-md-5">
                            <br/>
                            <form class="form-horizontal booking-form" style="margin-left: 15px">
                                <div class="form-group">
                                    <select class="form-control" id="vehicle_type">
                                        <option selected value ="0">Seleccione Vehiculo</option>
                                        <option value="Furgon con cabezal">Furgon con cabezal</option>
                                        <option value="Furgon sin cabezal">Furgon sin cabezal </option>
                                        <option value="Camión">Camión</option>
                                        <option value="Equipo pesado">Equipo pesado</option>
                                        <option value="Autobus">Autobus</option>
                                        <option value="Auto">Auto</option>
                                        <option value="Moto Grande">Moto Grande</option>
                                        <option value="Moto Chica">Moto Chica</option>
                                        <option value="Bicicleta">Bicicleta</option>
                                    </select>
                                    <select class="form-control" id="cargo_high">
                                        <option selected value ="0" >Seleccione Altura</option>
                                        <option  value="0 - 4 mts">0 - 4 mts de Altura</option>
                                        <option  value="+ 4 mts">Más Alto que 4 mts</option>
                                    </select>
                                    <select class="form-control" id="cargo_width">
                                        <optio selected value ="0">Seleccione Ancho</option>
                                            <option value="0 - 2,6 mts">0 - 2,6 mts de Ancho</option>
                                            <option value="+ 2,6 mts">Más Ancho que 2,6 mts</option>
                                    </select>
                                    <div class="form-group">
                                        <input id="cargo_length" type="number" min="1" max="20" class="form-control col-md-10" placeholder="LARGO" style="display: inline-flex" />
                                        <label class="col-md-2" style="display: inline">MTS</label>
                                    </div>
                                    <div class="form-group">
                                        <input id="vehicle_weight" type="number" min="1" max="20" class="form-control col-md-10" placeholder="PESO" style="display: inline-flex" />
                                        <label class="col-md-2" style="display: inline">KG</label>
                                    </div>
                                    <input id="license_plate" type="text" min="1" max="20" class="form-control" placeholder="PLACA VEHICULO" />
                                    <input id="cargo_owner_full_name" type="text" min="1" max="20" class="form-control" placeholder="NOMBRE COMPLETO DUEÑ0 DE CARGA" />
                                    <input id="cargo_owner_passport_number" type="text"  class="form-control" placeholder="PASAPORTE Ó NÚMERO DE COMPAÑIA" />
                                    <input id="cargo_type" type="text"  class="form-control" placeholder="TIPO DE CARGA" />
                                    <div class="form-group">
                                        <input id="cargo_weight" type="number" min="1" max="20" class="form-control col-md-10" placeholder="PESO DE LA CARGA" style="display: inline-flex" />
                                        <label class="col-md-2" style="display: inline">KG</label>
                                    </div>
                                    <textarea id="cargo_description" type="text"  class="form-control" placeholder="DESCRIPCIÓN DE CARGA"></textarea>
                                    <div align="center" style="margin-top: 15px; margin-bottom: 5px">
                                        <a class="btn btn-primary btn-square" onclick="addCargo()" style="background-color: #337ab7; color: #FFF;">
                                            <i class="fas fa-plus-circle"> </i> Agregar Carga
                                        </a>
                                    </div>
                                </div>

                                <a class="btn btn-default btn-square" onclick="goToThirdStep();">
                                    <i class="fas fa-arrow-circle-right" > </i> Siguiente
                                </a>
                            </form>
                        </div>
                        <div id ="booking-preview" class="tab-content-holder col-md-7 hide booking-preview" style="border-left: 1px solid grey; overflow-y: scroll">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4 class="title-contact" align="center" style="color:#005292; ">Detalle del Booking</h4>
                                    <br/>
                                    <div class="col-md-12">
                                        <p id="dut-number"><b> NÚMERO DUT: </b>WDSG46OLXV</p>
                                        <div id="route-detail">

                                        </div>
                                        <br/>
                                        <table class="table hide" id="cargo-list-table">
                                            <thead>
                                            <tr>
                                                <th>Detalles Vehículo</th>
                                                <th>Dueño de Carga</th>
                                                <th>Detalles Carga</th>
                                                <th>Precio</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                        <table class="table hide" id="passenger-list-table">
                                            <thead>
                                            <tr>
                                                <th>Tipo Pasajero</th>
                                                <th>Información Pasajero</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Third Tab -->
                    <div class="tab-pane fade" role="tabpanel" id="passengertab" aria-labelledby="profile-tab">
                        <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Add the passenger information</h5>
                        <div class="tab-content-holder col-md-5">
                            <br/>
                            <form class="form-horizontal booking-form" style="margin-left: 15px">
                                <div class="form-group">
                                    <select class="form-control" id="passenger_type">
                                        <option>Select Passenger Type</option>
                                        <option value="Persona Particular">Pasajero Particular</option>
                                        <option value="Persona en Auto a bordo (Max 4)">Pasajero en Auto a bordo (Max 4)</option>
                                        <option value="Pasajero en Autobus a bordo (Max 50)">Pasajero en Autobus a bordo (Max 50)</option>
                                        <option value="Pasajero Ayudante de gandola (1 por gandola)">Pasajero Ayudante de gandola (1 por gandola)</option>
                                        <option value="Pasajero Conductor de gandola (1 por gandola)">Pasajero Conductor de gandola (1 por gandola)</option>
                                        <option value="Pasajero Conductor de autobus (1 por autobus)">Pasajero Conductor de autobus (1 por autobus)</option>
                                    </select>
                                    <input id="passenger_full_name" type="text" class="form-control" placeholder="PASSENGER FULL NAME" />
                                    <input id="passenger_passport" type="text" class="form-control" placeholder="PASSENGER PASSPORT NUMBER" />
                                    <div align="center" style="margin-top: 15px; margin-bottom: 5px">
                                        <a class="btn btn-primary btn-square" onclick="addPassenger()" style="background-color: #337ab7; color: #FFF;">
                                            <i class="fas fa-plus-circle"> </i> Add Passenger
                                        </a>
                                    </div>
                                </div>

                                <a class="btn btn-default btn-square" onclick="goToFourthStep();">
                                    <i class="fas fa-arrow-circle-right" > </i> Next
                                </a>
                            </form>

                        </div>
                        <div id="booking-preview2" class="tab-content-holder col-md-7 hide booking-preview" style="border-left: 1px solid grey; overflow-y: scroll">
                        </div>
                    </div>
                    <!-- Fourth Tab -->
                    <div class="tab-pane fade" role="tabpanel" id="paymenttab" aria-labelledby="payment-tab">
                        <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Add your information</h5>
                        <div class="tab-content-holder col-md-5">
                            <br/>
                            <form class="form-horizontal booking-form" style="margin-left: 15px">
                                <div class="form-group">
                                    <input id="client_name" type="text"  class="form-control" placeholder="YOUR FULL NAME" />
                                    <input id="client_passport" type="text"  class="form-control" placeholder="YOUR PASSPORT NUMBER" />
                                    <input id="client_number" type="text"  class="form-control" placeholder="YOUR PHONE NUMBER" />
                                    <input id="client_email" type="email"  class="form-control" placeholder="YOUR EMAIL" />

                                </div>
                                <p><b>By clicking Finish you agree with our <a href="#"> terms of services</a> and declare all information provided by you as legal and valid. </b></p>
                                <br/>
                                <a class="btn btn-default btn-square" onclick="finish();">
                                    <i class="fas fa-arrow-circle-right" > </i> Finish
                                </a>
                            </form>

                        </div>
                        <div id="booking-preview3" class="tab-content-holder col-md-7 hide booking-preview" style="border-left: 1px solid grey; overflow-y: scroll">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1da4d31_07127039')) {function content_5b9e0fe1da4d31_07127039($_smarty_tpl) {?><div class="gallery py-5" id="projects"  style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold text-uppercase mb-sm-5 mb-4" id="gal">
            <span class="font-weight-bold text-center">G</span>Galería
        </h3>
    </div>


    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img alt="galeria" style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/spin.svg" />
        </div>

        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/031.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/031-s190x90.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/032.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/032-s190x90.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/033.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/033-s190x90.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/034.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/034-s190x90.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/035.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/035-s190x90.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/036.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/036-s190x90.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/037.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/037-s190x90.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/038.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/038-s190x90.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/039.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/039-s190x90.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/040.jpg" />
                <img data-u="thumb" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
slider/040-s190x90.jpg" />
            </div>
        </div>

        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>

        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>

    </div>
    <!-- #endregion Jssor Slider End -->
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/contact.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1dc6445_13454009')) {function content_5b9e0fe1dc6445_13454009($_smarty_tpl) {?><!-- video section -->
<div class="video-w3l py-5" data-vide-bg="video/1">
    <div class="container-fluid py-lg-5 py-md-4">
        <div class="row py-xl-3">
            <div class="col-lg-9 ">
                <h2 class="video-agile text-capitalize text-white mb-2" id="sol01">
                    Está buscando soluciones para su compañía?
                </h2>
                <p id="sol02">
                    Nuestra especialidad es el Transporte y Movimientos de Carga. Contamos con personal altamente capacitado, con 25 años de experiencia en logística y negocios marítimos en Panamá, ofreciendo productos y servicios de alta calidad con los mejores precios.
                </p>
            </div>
            <div class="col-lg-3">
                <a href="#contact" class="btn scroll mt-4" id="cntct">Contáctenos</a>
            </div>
        </div>
    </div>
</div>


<div class="contact-w3l py-5" id="contact">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold text-uppercase mb-sm-5 mb-4" id="btContactUs">&nbsp; </h3>
        <div class="row" style="width:100%">
            <div class="col-lg-6 contact-agileits-w3layouts">
                <h4 class="contact-title text-uppercase text-dark mb-sm-4 mb-3" id="ndir01">Nuestra Dirección</h4>
                <h5 class="font-weight-light text-dark" id="ndir02" style="font-size: 15px;">
                    Si tiene alguna pregunta acerca de los servicios que ofrecemos, sírvase utilizar el formulario a continuación para ponerse en contacto con nuestros asesores. Le enviaremos respuesta en un plazo no mayor a 24 horas.
                    <br><br>
                </h5>

                <p class="para-agileits-w3layouts">
                    <i class="fas fa-map-marker pr-3"></i>
                    <span id="ndir03">
								Zona Libre de Colón<br>
								Área de France Field<br>
								Panamá
							</span>
                </p>

                <p class="para-agileits-w3layouts my-sm-3 my-2">
                    <i class="fas fa-phone pr-3"></i>+507 368-7905</p>

                <p class="para-agileits-w3layouts mt-sm-3 my-2">
                    <i class="far fa-envelope-open pr-2"></i>
                    <a href="mailto:sales@smartlogisticscargo.com">sales@smartlogisticscargo.com</a>
                </p>

            </div>
            <div class="col-lg-6" style="padding: 0px;">
                <iframe src="view/forms/index2.html" width="100%" height="485" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/map.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1dceb46_35663514')) {function content_5b9e0fe1dceb46_35663514($_smarty_tpl) {?><!-- map -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4741.91517995632!2d-79.88520925533072!3d9.35204663592083!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spa!4v1522682370268"
            allowfullscreen></iframe>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-16 10:10:09
         compiled from "view/templates/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9e0fe1dd47d8_62600057')) {function content_5b9e0fe1dd47d8_62600057($_smarty_tpl) {?><!-- footer -->
<footer>
    <div class="w3ls-footer-grids py-sm-4 py-3">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-md-4 w3l-footer">
                    <h1 class="mb-sm-3 mb-2">
                        <a href="home.html">
                            ATPA
                        </a>
                    </h1>
                    <p id="salida">
                        Tu Compañía Naviera<br>
                        Desarrollamos y gestionamos rutas de envío comerciales en la Costa del Pacífico en el modo Feeder
                    </p>

                </div>
                <div class="col-md-4 w3l-footer my-md-0 my-4">
                    <h3 class="mb-sm-3 mb-2" id="botDir0">Dirección</h3>
                    <ul>
                        <li>
                            <i class="fas fa-location-arrow float-left"></i>
                            <p class="ml-4" id="botDir1">
                                Zona Libre de Colón<br>
                                France Field<br>
                                Panamá
                            </p>

                            <div class="clearfix"></div>
                        </li>
                        <li class="my-3">
                            <i class="fas fa-phone float-left"></i>
                            <p class="ml-4">+507 368-7905</p>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <i class="far fa-envelope-open float-left"></i>
                            <a href="mailto:sales@smartlogisticscargo.com" class="ml-3">sales@smartlogisticscargo.com</a>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 w3l-footer">
                    <h3 class="mb-sm-3 mb-2">Menú</h3>
                    <div class="nav-w3-l">
                        <ul>
                            <li>
                                <a href="home.html" id="botInicio">Inicio</a>
                            </li>
                            <li class="mt-2">
                                <a href="#about" class="scroll" id="botNosotros">Nosotros</a>
                            </li>
                            <li class="mt-2">
                                <a href="#services" class="scroll" id="botServicios">Servicios</a>
                            </li>

                            <li class="mt-2">
                                <a href="#projects" class="scroll" id="botGaleria">Galería</a>
                            </li>
                            <li class="mt-2">
                                <a href="#contact" class="scroll" id="botContactenos">Contáctenos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row border-top mt-4 pt-lg-4 pt-3 text-lg-left text-center">
                <p class="col-lg-8 copy-right-grids mt-lg-1" id="derechos">© 2018 ATPAShipping. Todos los derechos reservados</p>
            </div>
        </div>
    </div>
</footer><?php }} ?>