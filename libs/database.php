<?php
/**
 * [Database description]
 */
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
	class Database{
		private $host;
		private $db;
		private $user;
		private $password;
		private $charset;
		/**
		 * [__construct description]
		 */
		public function __construct(){
			$this->host = constant('HOST');
			$this->db = constant('DB');
			$this->user = constant('USER');
			$this->password = constant('PASSWORD');
			$this->charset = constant('CHARSET');
		}
		/**
		 * [connect description]
		 * @return [PDO] [Almacena todos los parámetros necesarios para establecer la conexión]
		 */
		public function connect(){
			try{
				/** @var string [almacena los parametros para establecer la conexion con la base de datos] */
				$connection = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
				/** @var array [Almacena variables globales de la clase PDO. PDO representa la conexion de PHP con el servidor de base de datos] */
				$options =[
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_EMULATE_PREPARES => false,
				];
				/**
				 * [$pdo description]
				 * @var PDO
				 * @return $pdo con datos de conexion
				 */
				$pdo = new PDO($connection,$this->user,$this->password,$options);
				return $pdo;
			}catch (PDOException $e) {
   				 print "¡Error!: " . $e->getMessage() . "<br/>";
   				 die();
				}

		}
	}
?>
