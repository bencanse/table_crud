
<form method='post' name='<?php echo \core\Array_Datos::contenido("form_name", $datos); ?>' action="?menu=<?php echo \core\Controlador::get_controlador_instanciado(); ?>&submenu=validar_<?php echo \core\Controlador::get_metodo_invocado(); ?>" >
	
	<?php echo \core\HTML_Tag::form_registrar($datos["form_name"], "post"); ?>
	
	<input id='id' name='id' type='hidden' value='<?php echo \core\Array_Datos::values('id', $datos); ?>' />
	Nombre: <input id='nombre' name='nombre' type='text' size='100'  maxlength='100' value='<?php echo \core\Array_Datos::values('nombre', $datos); ?>'/>
	<?php echo \core\HTML_Tag::span_error('nombre', $datos); ?>
	<br />
	categoria: <input id='categoria' name='categoria' type='text' size='100'  maxlength='100' value='<?php echo \core\Array_Datos::values('categoria', $datos); ?>'/>
	<?php echo \core\HTML_Tag::span_error('categoria', $datos); ?>
	<br />
	precio: <input id='precio' name='precio' type='text' size='100'  maxlength='100' value='<?php echo \core\Array_Datos::values('precio', $datos); ?>'/>
	<?php echo \core\HTML_Tag::span_error('precio', $datos); ?>
	<br />
	Descripcion:<br />
	<textarea id='descripcion' name='descripcion' type='textarea' cols='100'  rows='10' ><?php echo \core\Array_Datos::values('descripcion', $datos); ?></textarea>
	<?php echo \core\HTML_Tag::span_error('descripcion', $datos); ?>

	<br />
	<?php echo \core\HTML_Tag::span_error('errores_validacion', $datos); ?>
	
	<input type='submit' value='Enviar'>
	<input type='reset' value='Limpiar'>
	<button type='button' onclick='location.assign("?menu=<?php echo \core\Controlador::get_controlador_instanciado(); ?>&submenu=index");'>Cancelar</button>
</form>
