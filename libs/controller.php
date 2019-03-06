
<?php
/*clases base que heredarán las siguientes clases, se concentra la funcionalidad*/
	class Controller{
		function __construct(){
			//se crea una nueva variable
			$this->view = new View();
		}
		/**
		 * [loadModel description]
		 * @param  [type] $model [description]
		 */
		function loadModel($model){
			/** @var string [description] */
			$url = 'models/'.$model.'model.php';
			if(file_exists($url)){
				require $url;
				$modelName = $model.'Model';
				$this->model = new $modelName();
			}

		}
	}
?>
