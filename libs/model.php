<?php
/**
 * [clase Model de esta clase heredarán todos los archivos de la carpeta model
 *  solo contiene una instancia de la Clase Database]
 */
	class Model{
		function __construct(){
			$this->db = new Database();
		}
	}
?>
