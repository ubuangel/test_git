	
<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new ('mysql:host=localhost;dbname=biblioteca','root','contraseña',$pdo_options);
			return self::$conexion;
		}		
	} 
?>
