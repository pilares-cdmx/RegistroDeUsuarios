<?php
/**
 * [Database description]
 */
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
		 * @return [type] [description]
		 */
		public function connect(){
			try{
				/** @var string [almacena los parametros para establecer la conexion con la base de datos] */
				$connection = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
				/** @var array [Almacena variables globales de la clase PDO. PDO representa la cone] */
				$options =[
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_EMULATE_PREPARES => false,
				];
				$pdo = new PDO($connection,$this->user,$this->password,$options);
				return $pdo;
			}catch (PDOException $e) {
   				 print "¡Error!: " . $e->getMessage() . "<br/>";
   				 die();
				}

		}
	}
?>
