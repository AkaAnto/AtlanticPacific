<?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 10:50:25
         compiled from "../view/templates/jardines_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172075838955a285b9f362e5-21926772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c096181ad516363eeee5725e5e9402d24b3d0e1d' => 
    array (
      0 => '../view/templates/jardines_gallery.tpl',
      1 => 1436159923,
      2 => 'file',
    ),
    'f96e0691266dbaec688aa38848a0a2449682c2e8' => 
    array (
      0 => '../view/templates/base.tpl',
      1 => 1436706995,
      2 => 'file',
    ),
    'e939bce11f59a916e04dcd343611aa6cee495f6c' => 
    array (
      0 => '../view/templates/top_menu.tpl',
      1 => 1436709457,
      2 => 'file',
    ),
    '3d439c10c5730c186274dad4969cdb92a16ae985' => 
    array (
      0 => '../view/templates/works.tpl',
      1 => 1436159919,
      2 => 'file',
    ),
    '90f9031657b7acf3d58a0ff9cd0433bd267564e7' => 
    array (
      0 => '../view/templates/content_gallery.tpl',
      1 => 1436159926,
      2 => 'file',
    ),
    '5b9dfb7885d972a3ea2741f58ff3e05f570b305d' => 
    array (
      0 => '../view/templates/footer.tpl',
      1 => 1436707008,
      2 => 'file',
    ),
    '8f0a21d2e66b34c1f810016514049040fbabd360' => 
    array (
      0 => '../view/templates/last_footer.tpl',
      1 => 1436706018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172075838955a285b9f362e5-21926772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55a285ba1cc611_30488836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a285ba1cc611_30488836')) {function content_55a285ba1cc611_30488836($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>

    <meta charset="utf-8">
    <title> .:: Jardín Altamar ::. </title> 


        <!-- For Mobiles  -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
mobiles_css.css' rel='stylesheet' type='text/css'>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
wide.css" id="layout">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
colors/default.css" id="colors">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
css.css" id="colors">
        
        



        <!-- Java Script  -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
custom.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
selectnav.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
flexslider.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
twitter.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
fancybox.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
isotope.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
bootstrap.js"></script>
        
        


        

<!-- Styles Switcher -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
switcher.css">
<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
switcher.js"></script>

</head>
<body>

<div id="wrapper" class="container">
    <div class="ie-dropdown-fix" >
           <?php /*  Call merged included template "top_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '172075838955a285b9f362e5-21926772');
content_55a285ba0b34a4_16277032($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "top_menu.tpl" */?>  
    </div>         
        <?php if (isset($_smarty_tpl->tpl_vars['error_message']->value)){?>
        <div class="alert alert-error" contenteditable="true">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</strong> 
        </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['info_message']->value)){?>
        <div class="alert alert-info" contenteditable="true">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong><?php echo $_smarty_tpl->tpl_vars['info_message']->value;?>
</strong> 
        </div>
        <?php }?>
    

        <?php /*  Call merged included template "content_gallery.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('content_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '172075838955a285b9f362e5-21926772');
content_55a285ba139191_75035505($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "content_gallery.tpl" */?>



     <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '172075838955a285b9f362e5-21926772');
content_55a285ba1b1843_49331048($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?> 


      <?php /*  Call merged included template "last_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("last_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '172075838955a285b9f362e5-21926772');
content_55a285ba1c14c8_86232926($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "last_footer.tpl" */?> 
            
</div>

        


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40566302-4', 'uexel.us');
  ga('send', 'pageview');
      
      
      $(window).load(function() {
        var $container = $('#portfolio-wrapper');
        $select = $('#filters select');
       	
        // initialize Isotope
        $container.isotope({
            // options...
            resizable: false, // disable normal resizing
            // set columnWidth to a percentage of container width
            
            masonry: {
                columnWidth: $container.width() / 12
            }
        });
 $container.isotope({
            itemSelector : '.portfolio-item'
        
        });
        // update columnWidth on window resize
        $(window).smartresize(function(){
            $container.isotope({
                // update columnWidth to a percentage of container width
                masonry: {
                    columnWidth: $container.width() / 12
                }
            });
        });
	  
        $select.change(function() {
            var filters = $(this).val();
	
            $container.isotope({
                filter: filters
            });
        });
	  
        var $optionSets = $('#filters .option-set'),
        $optionLinks = $optionSets.find('a');

        $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
  
            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                // changes in layout modes need extra logic
                changeLayoutMode( $this, options )
            } else {
                // otherwise, apply new options
                $container.isotope( options );
            }
		
            return false;
        });
    });

</script>

    </body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 10:50:26
         compiled from "../view/templates/top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a285ba0b34a4_16277032')) {function content_55a285ba0b34a4_16277032($_smarty_tpl) {?><div class="span1" style="margin-top: -14px; width: 90px;">
    <a href="/" ><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
portada/logo_jardines.png" width="100px" height="100px" class="logo"/></a>
</div>

<div class="span9">
    <div id="navigation" class="margintop" style="background-color: rgb(114, 182, 38); background-image: none;">               
        <ul id="nav">
            <li><a href="/" <?php if (isset($_smarty_tpl->tpl_vars['home']->value)&&$_smarty_tpl->tpl_vars['home']->value==true){?>class="active"<?php }?>>Inicio</a></li>

            <li><a href="nosotros/" <?php if (isset($_smarty_tpl->tpl_vars['about']->value)&&$_smarty_tpl->tpl_vars['about']->value==true){?>class="active"<?php }?>>Nosotros</a></li>

            <li><a href="productos/" <?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value==true){?>class="active"<?php }?>>Productos</a></li>

            <li><a href="galeria/" <?php if (isset($_smarty_tpl->tpl_vars['gallery']->value)&&$_smarty_tpl->tpl_vars['gallery']->value==true){?>class="active"<?php }?>>Galería</a></li>

            <li><a href="contacto/" <?php if (isset($_smarty_tpl->tpl_vars['contact']->value)&&$_smarty_tpl->tpl_vars['contact']->value==true){?>class="active"<?php }?>>Contacto</a></li>
        </ul>

    </div> 
    
</div>
 
<div class="span1 pull-left" id="header">
    <ul class="social-icons">

        <li class="facebook"><a href="#">Facebook</a></li>
        <li class="twitter"><a href="#">Twitter</a></li>
      
    </ul>

</div>
        
 <div class="nav-shadow span7"></div>
<div class="clear"></div>

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 10:50:26
         compiled from "../view/templates/content_gallery.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a285ba139191_75035505')) {function content_55a285ba139191_75035505($_smarty_tpl) {?><div class="row-fluid">
    <div id="page-title">
        
        <h2>Trabajos Realizados</h2>
        <?php echo smarty_function_products_categories(array(),$_smarty_tpl);?>

        <!-- Filtros -->
        <div id="filters" class="pull-right">
                <ul class="option-set" data-option-key="filter">
                	 <li><a href="#filter" class="selected" data-option-value="*">Todos</a></li>
                	 <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                        <li><a href="#filter" data-option-value=".<?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_nombre'];?>
</a></li>
                     <?php } ?>  
                </ul>
        </div>

    </div>

</div>

<div id="portfolio-wrapper">
			
	<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		<div class="span3 portfolio-item <?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
">
			 <?php /*  Call merged included template "works.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("works.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '172075838955a285b9f362e5-21926772');
content_55a285ba1670a1_92833527($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "works.tpl" */?>    
		</div>
	<?php } ?>  
		
</div>

        
        
 <?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 10:50:26
         compiled from "../view/templates/works.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a285ba1670a1_92833527')) {function content_55a285ba1670a1_92833527($_smarty_tpl) {?>
<?php echo smarty_function_works(array('category_id'=>$_smarty_tpl->tpl_vars['category']->value['c_id']),$_smarty_tpl);?>

<?php  $_smarty_tpl->tpl_vars['work'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['work']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['works']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['work']->key => $_smarty_tpl->tpl_vars['work']->value){
$_smarty_tpl->tpl_vars['work']->_loop = true;
?>        
<div class="span3">
    <div class="picture">
        <a href="<?php echo $_smarty_tpl->tpl_vars['works_directoy']->value;?>
<?php echo $_smarty_tpl->tpl_vars['work']->value['foto'];?>
" rel="image" title="<?php echo $_smarty_tpl->tpl_vars['work']->value['nombre'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['works_directoy']->value;?>
<?php echo $_smarty_tpl->tpl_vars['work']->value['foto'];?>
" alt="" style="width:270px; height:180px;"/>
            <div class="image-overlay-zoom"></div>
        </a>
    </div>
    <div class="item-description alt">
        <h5><a href=""><?php echo $_smarty_tpl->tpl_vars['work']->value['nombre'];?>
</a></h5>
        <p><?php echo $_smarty_tpl->tpl_vars['work']->value['descripcion'];?>
</p>
    </div>
</div>
<?php } ?>    
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 10:50:26
         compiled from "../view/templates/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a285ba1b1843_49331048')) {function content_55a285ba1b1843_49331048($_smarty_tpl) {?>
<div id="footer" class="container paddingbottom" >
    <div class="row-fluid">
        <div class="span4">
            <div class="footer-headline" style="border-bottom: solid #fff 2px;"><h4>Suscribete</h4></div>
            <p>Recibe nuestras promociones</p><p>Escribe tu E-mail aquí</p>
            <div class="input-append">
                <input  id="appendedInputButton"  type="text" class="span7" placeholder="abc@ejemplo.com">
                <button class="btn" type="button">Subscribete!</button>
            </div>

        </div>

                            <!-- Subscribe  -->
        <div class="span8">
            <div class="footer-headline" style="border-bottom: solid #fff 2px;"><h4>Publicidad</h4></div>
        </div>
     </div>
</div>
                
        <?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 10:50:26
         compiled from "../view/templates/last_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a285ba1c14c8_86232926')) {function content_55a285ba1c14c8_86232926($_smarty_tpl) {?>
<div id="copyright" class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div id="footer-bottom">
               <p align="center">Jardín Altamar  © Copyright 2014 . Todos los derechos reservados. </p>

                <div id="scroll-top-top">
                    <a href="" title="Subir"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>