<?php
namespace core;
//require_once PATH_APP."core/clase_base.php";
//require_once PATH_APP."core/respuesta.php";


/**
 * Aplicación principal
 *
 * @author Jesús María de Quevedo Tomé <jequeto@gmail.com>
 * @since 20130130
 */
class Aplicacion extends \core\Clase_Base {
	
	/**
	 * Almacenará el objeto resultado de instanciar la clase Controlador que se encargará
	 * de atender la petición HTTP recibida.
	 * 
	 * @var \core\Controlador 
	 */
	public static $controlador;

	
//	public function __construct() {
	public static function iniciar() {

		
		
		// Interpretar url amigable, pasa parmametros /dato1/dato2/dato3/ 
		// a parámetros $_GET[p1]=dato1 $_GET[p2]=dato2  $_GET[p3]=dato3 ....
		\core\Rutas::interpretar_url_amigable();
		
		\core\sgbd\bd::connect();
		
		
		
		// Distribuidor
		\core\Distribuidor::estudiar_query_string();

		// Cerrar conexión a la base de datos
		\core\sgbd\bd::disconnect();	
		
	}
	
} // Fin de la clase