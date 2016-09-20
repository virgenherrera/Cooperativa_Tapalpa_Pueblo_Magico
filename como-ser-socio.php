<?php
include_once 'php/funciones.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="es-MX"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Como ser un Socio</title>
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
        <li><a href="como-ser-socio.php" class="active">Como ser Socio</a>
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
                                <h2 class="art-postheader"><span class="art-postheadericon">Como ser Socio</span></h2>
                                                
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <a name="ComoserSocio"><h3>Como ser Socio</h3></a>
        <p>El consejo de Administración hará saber mediante un comunicado público el periodo de ingreso para nuevos socios, Normalmente son en las reuniones de comisión permanente celebradas cada dos meses, o en la Asamblea Anual que se lleva a cabo en el mes de Febrero. Considerando los criterios siguientes en orden de importancia:</p>
        <ul>
        	<li>Familiares directos de los socios (mayores de 18 años).</li>
            <li>Trabajadores de la cooperativa y sus familiares directos.</li>
            <li>Personas pertenecientes al municipio o residentes por mas de 10 años.</li>
            <li>Personas que presenten un proyecto factible de financiar.</li>
            <li>Personas Foráneas.</li>
        </ul>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <a name="Requisitos"><h3>Requisitos para ser socio</h3></a>
        <div style="text-align:justify">
        <ul>
          <li>Llenar  una solicitud de ingreso dirigida al consejo de administración.</li>
          <li>Compromiso  de cumplir con la ley, las bases constitutivas, el reglamento interior y las  demás disposiciones que se elaboren para el buen funcionamiento de la  cooperativa, esto es aceptar y cumplir con sus derechos y obligaciones que en  ellos se establecen.</li>
          <li>Acta  de nacimiento para comprobar que es mayor de edad 18 años, o cualquier otro  documento oficial que compruebe su mayoría de edad (IFE, CURP)</li>
          <li>Comprobante  de domicilio </li>
          <li>Poseer  espíritu de trabajo, honradez, y estar en pleno goce de sus derechos civiles.</li>
          <li>Pagar  un certificado de aportación (parte social 500 pesos)</li>
          <li>Consumir  los servicios que la cooperativa preste, adquirir su seguro de vida si la  cooperativa ofrece ese servicio.</li>
          <li>Ser  aceptado y participar activa y responsablemente en un GAMEP de la cooperativa.</li>
          <li>Llenar  una solicitud de financiamiento.</li>
          <li>Aportar  una  Garantía Original para el crédito</li>
        </ul>
        </div>
    </div>
    
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 30%; text-align:left" >
        <a name="DerechosyObligaciones"><h3>Derechos de los socios</h3></a>
        <ul>
        <li>Acudir y participar en las asambleas generales de socios.</li>
        <li>Tener un solo voto, sea cual fuere el número de certificados de aportación suscritos y pagados.</li>
        <li>Desempeñar cargos y comisiones que le encomiende la asamblea general o los consejos directivos. Un socio no podrá ocupar simultáneamente dos o más cargos de elección en los consejos y comisiones.</li>
        <li>Percibir la parte que le corresponda de los rendimientos de cada ejercicio anual.</li>
        <li>Solicitar y obtener, mediante los conductos establecidos previamente, informes a los consejos de administración y vigilancia, respecto de la marcha de la sociedad.</li>
        </ul>
    </div><div class="art-layout-cell layout-item-2" style="width: 70%; text-align:justify" >
        <h3>Obligaciones de los socios</h3>
        <ul>
        	<li>Responder con el valor de los certificados o aportaciones que suscriben de todas las aportaciones realizadas y obligaciones contraídas por la sociedad, mientras forme parte de la cooperativa.</li>
            <li>Desembolsar las aportaciones comprometidas: ya sea como aportación social o cualquier otra cuenta que se solicite y que este debidamente fundamentada y validada por la Asamblea general.</li>
            <li>Asistir a las reuniones de  los consejos y comisiones: ya sea en las asambleas ordinarias o extraordinarias u otras a las que convoque el consejo de administración.</li>
            <li>Cumplir con  los acuerdos debidamente pactados: la gestión democrática implica el cumplimiento de los acuerdos que según la mayoría exigida legalmente se hayan adoptado independientemente.</li>
            <li>Participar en las actividades de la cooperativa en la forma y cuantía establecida por los estatutos sociales y en los acuerdos de la Asamblea General.</li>
            <li>No realizar actividades de competencia con la cooperativa, salvo autorización. La autorización la dará exclusivamente la Asamblea General o el Consejo de Administración.</li>
            <li>Participar en las actividades de formación, capacitación y promoción cooperativa.</li>
            <li>Guardar secreto sobre los asuntos y datos de la cooperativa cuando su difusión pueda perjudicar a la misma. Si bien los socios tienen derecho a conocer todo aquello que este relacionado con la gestión de la cooperativa, al mismo tiempo, deberán asumir la responsabilidad de mantener en secreto todos aquellos asuntos, que por su trascendencia, deban permanecer en el ámbito interno de la cooperativa.</li>
            <li>Mantener lazos de fraternidad con los demás socios y procurar conservar la unidad y la armonía en la sociedad.</li>
            <li>Observar una conducta solidaria respecto a las necesidades y aspiraciones de los demás socios  y de responsabilidad personal en sus compromisos con la cooperativa.</li>
        </ul>
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