{extends file="base.tpl"}

{block name="css"}
    <link rel="stylesheet" type="text/css" href="{$css}dd.css" />
    <link rel="stylesheet" type="text/css" href="{$css}flags.css" />
    <link rel="stylesheet" href="{$css}bootstrap.css">
    <link rel="stylesheet" href="{$css}fontawesome-all.css">
    <link rel="stylesheet" href="{$css}bootstrap-datepicker.css">
    <link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="{$css}style.css" type="text/css" media="all" />
{/block}

{block name="header"}
    <!-- header -->
    <header id="home">
        {include file="navbar.tpl"}
        {include file="banner.tpl"}
    </header>
{/block}


{block name="content"}
    {include file="stats.tpl"}
    {include file="middle.tpl"}
    {include file="services.tpl"}
    {include file="booking.tpl"}
    {include file="slider.tpl"}
    {include file="contact.tpl"}
    {include file="map.tpl"}
{/block}

{block name="footer"}
    {include file="footer.tpl"}
{/block}

{block name="js"}
    <script type="text/javascript" src="{$js}jquery-2.2.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{$js}bootstrap.js"></script>
    <script src="{$js}bootstrap-datepicker.js"></script>
    <script src="{$js}jquery.dd.min.js"></script>
    <script src="{$js}jquery.vide.min.js"></script>
    <script src="{$js}jssor.slider-27.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="{$js}easing.js"></script>
    <script src="{$js}move-top.js"></script>
    <script src="{$js}numscroller-1.0.js"></script>
    <script src="{$js}SmoothScroll.min.js"></script>
    <script src="{$js}SmoothScroll.min.js"></script>
    <script src="{$js}index.js"></script>
    <script src="{$js}booking.js"></script>
{/block}

