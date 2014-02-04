<?php

namespace modelos;

class frutas extends \core\sgbd\bd {
	
	public static $tabla = 'frutas';
	
	
	public static function create_table() {
		
		$consulta = "
			create table ".self::$tabla."
			( id integer unsigned auto_increment  primary key
			    ,nombre varchar(20) unique not null 
			    ,categoria varchar(20) not null 
			    ,descripcion varchar (250) not null 
			    ,precio decimal (5,2) not null
			    ,fecha_compra timestamp not null 
			    ,fecha_venta timestamp null
			)
			engine = mysam;	
		";
		
		return self::execute($consulta);
		
	}
	
	
	/**
	 * El parámetro fila es un array que trae detro en otro array asociado al índice 'values' los valores de las columnas a insertar.
	 * Si hay errores en el mismos array se devuelven dentro del índice 'errores'.
	 * @param array &$fila = array('values' =>array('col1' => valo1, ), 'errores' => array('col1' => 'error1', ))
	 * @return boolean
	 */
	public static function insertar(array &$fila ) {
		
		
		$validacion = true;
		if ( ! isset($fila['values']['fruta']) or ! is_string($fila['values']['fruta'])) {
			$validacion = false;
			$fila['errores']['fruta'] = "Esta columna no puede esta vacía y debe ser un string.";
		}
		if ( ! isset($fila['values']['descripcion']) ) {
			$fila['values']['descripcion'] = null;
		}
		elseif ( ! is_string($fila['values']['descripcion'])) {
			$validacion = false;
			$fila['errores']['descripcon'] = "Esta columna debe ser un string.";
		}
		
		if ($validacion) {
		
			return self::insertar_fila($fila['values'], self::$tabla);
		}
		else {
			return false;
		}
	}
			
	 
	
	
	public static function borrar(array &$fila ) {
		
		
		$validacion = true;
		if ( ! isset($fila['values']['id']))  {
			$validacion = false;
			throw new \Exception(".....");
		}
		
		
		if ($validacion) {
		
			$consulta = "
				delete from ".self::$tabla."
					where nombre = '{$fila['values']['fruta']}' or id = {$fila['values']['id']}
				;		
			";

			return self::ejecutar_consulta($consulta);
		}
		else {
			return false;
		}
	}
		
	
}