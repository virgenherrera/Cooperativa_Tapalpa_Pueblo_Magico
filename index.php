<?php
include_once 'php/funciones.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="es-MX"><head>
    <meta charset="utf-8">
    <title>Cooperativa Tapalpa Pueblo Magico S.C. de R.L.</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
<meta name="description" content="Description">
<meta name="keywords" content="Keywords">



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
    	<li><a href="http://cooperativatapalpapueblomagico.com/" class="active">Quienes Somos</a>
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
        <li><a href="servicios-que-ofrecemos.php">Servicios que ofrecemos</a>
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
                                <h2 class="art-postheader"><span class="art-postheadericon">Quienes Somos</span></h2>
                                                
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <a name="Quienes-Somos"><h3>Quienes  somos</h3></a>
        <p>Fundada el 26 de junio del 2003, donde con apoyo del  gobierno del estado de Jalisco de la secretaria de desarrollo rural aporto $1&rsquo;500,000.00  como capital semilla, dinero destinado a 150 socios para prestamos a negocios  productivos.</p>
        <p><br>
          La cooperativa forma parte del SIFRA (Sistema De  Financiamiento Rural y Alternativo).</p>
        <p><br>
          La cooperativa de maneja con grupos llamados Gamep&rsquo;s (grupos  de ayuda mutua y esfuerzo propio) donde los socios se integran de esta manera  para estar trabajando en conjunto.</p><br>

    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 50%" >
        
<a name="MisionyVision"><h3><p><strong>VISIÓN</strong></p></h3></a>
        <p>Conservar e incrementar  nuestro liderazgo en la región, en el desarrollo integral de los principios  básicos del Cooperativismo a través de la participación de los socios.  Otorgando un servicio de calidad, desarrollando constantemente los recursos  humanos siendo estos el principal capital de nuestra cooperativa.</p>

    </div><div class="art-layout-cell layout-item-2" style="width: 50%" >
        <h3>MISIÓN</h3>
        <p>Mantener y  superar los niveles Económicos, Administrativos y Financieros mediante la  organización, planeación y capacitación de los socios tomando en cuenta la guía  de los principales valores del cooperativismo universal importante y necesario  para trabajar y convivir en beneficio común.</p><br>
</div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <a name="Valores"><h3>VALORES</h3></a>
        <div style="text-align:justify"><p>Los directivos y empleados de nuestra cooperativa, basaran sus sistemas de operación y decisiones en la aplicación de los siguientes valores:</p>
        <ul>
        	<li><b>Honestidad</b><br>
Es aquella cualidad humana por la que la persona se determina a elegir actuar siempre con base en la verdad y en la auténtica justicia (dando a cada quien lo que le corresponde, incluida ella misma).</li>
			<li><b>Respeto</b><br>
El respeto es aceptar y comprender tal y como son los demás, aceptar y comprender su forma de pensar aunque no sea igual que la nuestra</li>
			<li><b>Trabajo</b><br>
Acción que ofrece a cada hombre la oportunidad de crecer, desarrollar todas sus capacidades congénitas, realizarse como persona. Perfeccionando así su humanidad y manteniendo el predominio y superioridad efectiva que debe ejercer sobre las cosas.</li>
			<li><b>Responsabilidad</b><br>
            Administrar con eficacia el tiempo y los recursos para obtener el máximo beneficio, capacidad humana para poder optar entre diferentes opciones y actuar, haciendo uso de la libre voluntad, de la cual resulta la necesidad que asumir todas aquellas consecuencias que de estos actos se deriven.</li>
            <li><b>Confianza</b><br>
            Es la creencia en que una persona o grupo será capaz y deseará actuar de manera adecuada en una determinada situación y pensamientos.</li>
            <li><b>Ayuda Mutua</b><br>
            Intercambio recíproco y voluntario de recursos, habilidades y servicios por un beneficio mutuo entre ambas partes.</li>
            <li><b>Lealtad</b><br>
            Es un corresponder, una obligación que se tiene con los demás, compromiso de defender lo que creemos; y en quienes creemos.</li>
            <li><b>Libertad</b><br>
            Se refiere a la capacidad de actuar según nuestras propias decisiones y escoger cada uno de los pasos que queremos dar y sus diferentes aspectos</li>
            <li><b>Democracia</b><br>
            Obliga a las personas al respeto de las normas de convivencia social y desde
Luego a los ordenamientos jurídicos, estimando el bien común, un bien más valioso que el bien de un sólo individuo</li>
			<li><b>Igualdad</b><br>
            El estado ideal de una sociedad, aquella en la cual los derechos y obligaciones sean para todos iguales.</li>
            <li><b>Solidaridad</b><br>
            Colaboración mutua de la personas,  sentimiento que mantiene a las personas unidas en todo momento. Abrirse  a la posibilidad de recibir ayuda, y también estar dispuesto a darla. Implica la búsqueda de una fraternidad que comienza entre dos personas, se extiende a la sociedad, alcanza a un país entero, trasciende las fronteras y abarca a la humanidad en su conjunto</li>
        </ul></div>
    </div>
</div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <a name="Organigrama"><h3>Organigrama</h3><br></a>
        <img src="images/organigrama.fw.png" alt="Organigrama" width="597" height="658">
    </div>
    
    </div>
</div>
</div>

<!--<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 25%" >
        <p>campo de texto&nbsp;25%<br></p>
    </div><div class="art-layout-cell layout-item-2" style="width: 75%" >
        <p>campo de texto&nbsp;75%<br></p>
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
            </div><footer class="art-footer clearfix">
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