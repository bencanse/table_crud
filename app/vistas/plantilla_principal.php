<!DOCTYPE HTML>
<html >
	<head>
		<title></title>
		<meta name="Description" content="Explicación de la página" /> 
		<meta name="Keywords" content="palabras en castellano e ingles separadas por comas" /> 
		<meta name="Generator" content="esmvcphp framewrok" /> 
	 	<meta name="Origen" content="esmvcphp framework" /> 
		<meta name="Author" content="Jesús María de Quevedo Tomé" /> 
		<meta name="Locality" content="Madrid, España" /> 
		<meta name="Lang" content="" /> 
		<meta name="Viewport" content="maximum-scale=10.0" /> 
		<meta name="revisit-after" content="1 days" /> 
		<meta name="robots" content="INDEX,FOLLOW,NOODP" /> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf8" /> 
		<meta http-equiv="Content-Language" content=""/>
	
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="favicon.ico" rel="icon" type="image/x-icon" /> 
		
		<link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT; ?>recursos/css/principal.css" />
		<style type="text/css" >
			/* Definiciones hoja de estilos interna */
		</style>
		<?php if (isset($_GET["administrator"])): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT; ?>recursos/css/administrator.css" />
		<?php endif; ?>
		
		
		<script src="<?php echo URL_ROOT?>recursos/js/jquery/jquery-1.10.2.min.js"></script>
		
	</head>

	<body onload='onload();' style="background-color:#EBEBEB">
	
		<!-- Contenido que se visualizará en el navegador, organizado con la ayuda de etiquetas html -->
		<div id="inicio"></div>
		<div id="encabezado">
			<img src="<?php echo URL_ROOT; ?>recursos/imagenes/trg0ki1391370510.gif" alt="logo" style ="margin-left:30%;"title="Logo"/>
			<!--<img src="<?php echo URL_ROOT; ?>recursos/imagenes/departamento_informatica.png" alt="logo" title="Logo departamento"  onclick="window.location.assign('http://www.iespalomeras.net/index.php?option=com_wrapper&view=wrapper&Itemid=86');" />-->
			
		</div>
		
		
		
		<div id="div_menu" >
			<fieldset style="background-color:#C0C0C0">
			    
				<legend>Menú</legend>
					<ul id="css3menu1" class="topmenu">
					    <li class="topfirst"><a href="<?php echo \core\URL::generar("inicio/index"); ?>" style="height:32px;line-height:32px;"><img src="<?php echo URL_ROOT; ?>recursos/imagenes/menu/home.png" alt=""/>Inicio</a></li>
					    <li class="toplast"><a style="height:32px;line-height:32px;"><span><img src="<?php echo URL_ROOT; ?>recursos/imagenes/menu/service2.png" alt=""/>Frutas</span></a>
					    <ul>
						<li><a href="<?php echo \core\URL::generar("frutas/index"); ?>"><img src="<?php echo URL_ROOT; ?>recursos/imagenes/menu/service3.png" alt=""/>Tabla de Frutas</a></li>
					    </ul>
					    </li>

					</ul>
			
			</fieldset>
		</div>

		<div id="view_content">
			
			<?php
				echo $datos['view_content'];
			?>
			
		</div>

	
		<div id="pie" style="float:left;">
			<br/>
			<br/>
			<br/>
			<br/>
			Pie del documento.<br />
			Documento creado por Alfonso López Velasco y Sergio Benito Cano.
			FRUTAS PALOMERAS<br />
		</div>
		
		<?php echo \core\HTML_Tag::post_request_form(); ?>
		
	</body>

</html>