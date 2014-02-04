<div>
	<h1>Listado de Frutas</h1>

	<table border='1'>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Categoria</th>
				<th>Descripcion</th>
				<th>Precio</th>
				<th>Fecha_compra</th>
				<!--<th>Fecha_venta</th>-->
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($datos['filas'] as $fila)
			{
                                $precio=\core\Conversiones::decimal_punto_a_coma($fila['precio']);
                                $fecha_compra=\core\Conversiones::fecha_hora_mysql_a_es($fila['fecha_compra']);
				echo "
					<tr>
						<td>{$fila['nombre']}</td>
						<td>{$fila['categoria']}</td>
						<td>{$fila['descripcion']}</td>
						<td>$precio</td>
						<td>$fecha_compra</td>
						
						<td>
					".\core\HTML_Tag::a_boton_onclick("boton", array("frutas", "form_modificar", $fila['id']), "modificar")."  "
//							<a class='boton' href='?menu={$datos['controlador_clase']}&submenu=form_modificar&id={$fila['id']}' >modificar</a>
					.\core\HTML_Tag::a_boton_onclick("boton", array("frutas", "form_borrar", $fila['id']), "borrar").
//							<a class='boton' href='?menu={$datos['controlador_clase']}&submenu=form_borrar&id={$fila['id']}' >borrar</a>
						"</td>
					</tr>
					";
			}
			echo "
				<tr>
					<td colspan='5'></td>
						<td>"
			.\core\HTML_Tag::a_boton("boton", array("frutas", "form_insertar"), "insertar").
					"</td>
				</tr>
			";
			?>
		</tbody>
	</table>
</div>