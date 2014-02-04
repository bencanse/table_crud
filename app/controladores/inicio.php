<?php
namespace controladores;

class inicio extends \core\Controlador {
	
	public function index(array $datos = array()) {

		$datos['view_content'] = \core\Vista::generar(__FUNCTION__, $datos, true);
		
               // $datos['view_content']="prueba por index";
                $http_body = \core\Vista_Plantilla::generar('plantilla_principal', $datos);
		
                \core\HTTP_Respuesta::enviar($http_body);
		
	}
	
	
	
	
	
} // Fin de la clase