<?php
 /**
  * [View Clase encargad de la representación visual de las interfaces]
 */
	class View{
		function __construct(){

		}
		/*la vista que se cargará*/
		function render($nombre){
			require 'views/'.$nombre.'.php';
		}
	}
?>
