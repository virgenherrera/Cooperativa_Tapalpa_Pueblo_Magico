<?php
include_once 'php/funciones.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="es-MX"><head>
    <meta charset="utf-8">
    <title>Servicios que Ofrecemos</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<style>.art-content .art-postcontent-0 .layout-item-0 { margin-bottom: 5px;  }
.art-content .art-postcontent-0 .layout-item-1 { border-spacing: 10px 0px; border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#DBD6C6;border-right-color:#DBD6C6;border-bottom-color:#DBD6C6;border-left-color:#DBD6C6; padding-right: 10px;padding-left: 10px; border-radius: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style>

   <!--FBML-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=276041512488182";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!--Fin FBML-->

</head>
<body>
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">


            </div>

                <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="990" height="350" id="art-flash-object">
                    	<param name="movie" value="container.swf">
                    	<param name="quality" value="high">
                    	<param name="scale" value="default">
                    	<param name="wmode" value="transparent">
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=15&amp;clipx=-200&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=1400&amp;cliph=350&amp;width=990&amp;height=350&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=false&amp;hasBottomCorners=true">
                        <param name="swfliveconnect" value="true">
                    	<!--[if !IE]>-->
                    	<object type="application/x-shockwave-flash" data="container.swf" width="990" height="350">
                    	    <param name="quality" value="high">
                    	    <param name="scale" value="default">
                    	    <param name="wmode" value="transparent">
                        	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=15&amp;clipx=-200&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=1400&amp;cliph=350&amp;width=990&amp;height=350&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=false&amp;hasBottomCorners=true">
                            <param name="swfliveconnect" value="true">
                    	<!--<![endif]-->
                    		<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></div>
                    	<!--[if !IE]>-->
                    	</object>
                    	<!--<![endif]-->
                    </object>
                    </div>
                    </div>
<nav class="art-nav clearfix">
    <ul class="art-hmenu">
    	<li><a href="http://cooperativatapalpapueblomagico.com/">Quienes Somos</a>
        	<ul>
            	<li><a href="index.php#Quienes-Somos">Quienes Somos</a></li>
                <li><a href="index.php#MisionyVision">Mision y Vision</a></li>
                <li><a href="index.php#Valores">Valores</a></li>
                <li><a href="index.php#Organigrama">Organigrama</a></li>
            </ul>
        </li>
        <li><a href="como-ser-socio.php">Como ser Socio</a>
        	<ul>
            	<li><a href="como-ser-socio.php#ComoserSocio">Como ser Socio</a></li>
                <li><a href="como-ser-socio.php#Requisitos">Requisitos</a></li>
                <li><a href="como-ser-socio.php#DerechosyObligaciones">Derechos y Obligaciones</a></li>
            </ul>
        </li>
        <li><a href="servicios-que-ofrecemos.php" class="active">Servicios que ofrecemos</a>
        	<ul>
            	<li><a href="servicios-que-ofrecemos.php#Servicios">Servicios que ofrecemos</a></li>
                <li><a href="servicios-que-ofrecemos.php#Tasas">Tasas de interes</a></li>
                <li><a href="servicios-que-ofrecemos.php#Recuperacion">Recuperacion de Credito</a></li>
            </ul>
        </li>
        <li><a href="directorio-socios.php">Directorio de Socios</a>
        	<ul>
				<?php
                $links = consulta_bucle('SELECT DISTINCT localidad FROM registros');
                while($link = mysql_fetch_array($links)){
                    echo '<li><a href="directorio-socios.php#' . $link['localidad'] .'">'. $link['localidad'] . '</a></li>';
                }//FIN while links
                ?>
        	</ul>
		</li>
        <li><a href="contactanos.php">Contactanos</a></li>
	</ul> 
</nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <h2 class="art-postheader"><span class="art-postheadericon">Servicios que Ofrecemos</span></h2>
                                                
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <a name="Servicios"><h3>Servicios que Ofrecemos</h3></a>
        <ul>
          <li>Préstamos para negocios Productivos</li>
          <ul>
            <li>Servicios</li>
            <li>Comercio</li>
            <li>Agricultura</li>
            <li>Ganadería</li>
          </ul>
          <li>Prestamos  exprés</li>
          <li>Pago de  servicios (teléfono, sky, luz, refrendos, etc.)</li>
          <li>Viajes turísticos.</li>
          <li>Compra y  venta de dólares</li>
        </ul>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 65%" >
        <a name="Tasas"><h3>Tasas de interés</h3></a>
        <ul>
          <li>Interés Normal del 2% (sobre Saldos  insolutos.)</li>
          <li>Interés Moratorios 3%</li>
          <li>Préstamo Express  3%</li>
        </ul>
        
    </div><div class="art-layout-cell layout-item-2" style="width: 35%" >
        <a href="files/ejemplo_pago_creditos.xlsx" target="new"><h4>Ejemplo de pago de amortizaciones al crédito</h4></a>
        
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <a name="Recuperacion"><h3>Recuperación de créditos.</h3></a>
        <div style="text-align:justify">
            <ol>
              <li>Al recibir el socio su financiamiento se la hará  entrega de un plan de pagos de acuerdo a su proyecto de inversión especificando  sus fechas de pago y montos a pagar en dichas fechas.</li>
              <li>Al llegar la primera fecha de pago el socio pasará a  la oficina de la cooperativa en donde la secretaria le ratificara o modificará  su abono y le indicará el número de cuenta a la cual depositar en caso de no  contar con el.</li>
              <li>El socio recurrirá al banco para realizar el  depósito a la cuenta de la cooperativa.</li>
              <li>Regresará a la oficina a entregar su ficha  (quedándose con copia) y  para que se le  registre en su hoja de control de pagos, la cual firmará de conformidad  checando que se haya registrado correctamente su abono.</li>
              <li>El Gerente le entregara su recibo de abono a su  crédito.</li>
            </ol>
        </div>
        <p>Para proyectos de comercio  o servicio este procedimiento se efectuará cada mes y para el caso de  agropecuarios solo se realizará una sola vez siempre y cuando no hayan  realizado abonos parciales.</p><br>
    </div>
    </div>
</div>
</div>
<!--<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 33%" >
        <p>campo de texto 25%<br></p>
    </div><div class="art-layout-cell layout-item-2" style="width: 67%" >
        <p>campo de texto 75%<br></p>
    </div>
    </div>
</div>
</div>-->
</div>
                                
                </article></div>
                        <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Facebook</h3>
        </div>
        <div class="art-blockcontent"><p><div class="fb-like" data-href="https://www.facebook.com/pages/Cooperativa-Tapalpa-Pueblo-M&#xe1;gico-SC-de-RL/" data-send="false" data-width="80%" data-show-faces="true" data-colorscheme="dark"></div></p></div>
</div>

<div class="art-block clearfix">
<div class="art-blockheader">
        <a class="twitter-timeline" data-dnt=true href="https://twitter.com/CooperativaTapa" data-widget-id="268522061998198787">Tweets por @CooperativaTapa</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>

</div>
                    </div>
                </div>
            </div>
            <footer class="art-footer clearfix">
<div style="position:relative;display:inline-block;padding-left:35px;padding-right:35px">
<p><a href="index.php">Quienes Somos</a> | <a href="como-ser-socio.php">Como ser Socio</a> | <a href="servicios-que-ofrecemos.php">Servicios que ofrecemos</a> | <a href="directorio-socios.php">Directorio de socios</a> | <a href="contactanos.php">Contactanos</a></p>
<p><hr>Cooperativa Tapalpa Pueblo Magico S.C. de R.L. Copyright © 2011. Reservados todos los derechos.</p>
<br></div>
</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links">Designed by <a href="http://www.tapalpawebs.com/" target="_blank">Hugo_Enrique@TapalpaWebs</a>.</span>
    </p>
</div>


</body></html>