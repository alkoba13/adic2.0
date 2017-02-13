<?php
class PDOMYSQL
{
	public $error = null;
	public $PDO = null;
	public $mensaje=null;


	public function __construct(){

		$hostname = DB_HOST;
		$dbname = DB_NAME;
		$username = DB_USERNAME;
		$pw = DB_PASSWORD;

		try{
			$this->PDO = new PDO("mysql:host=$hostname;dbname=$dbname","$username","$pw",array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
		}catch(PDOException $e){
			$this->error ="Existe una falla al realizar la conexion".$e->getMessage()."/n";
			exit;
		}
	}
//ejecutar consulta
	public  function consulta($query){
		$query = $this->PDO->prepare($query);
		$query->execute();
		$datos = array();
		/*for ($i = 0; $row = $query->fetch();$i++){
			$datos[] = $row;
		}*/
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$datos[] =$row;
		}
		return $datos;
	}
	public  function consultaSegura($query, $arreglo){
		$datos=array();
		try {			
			$statement  = $this->PDO->prepare($query);
			$statement->execute($arreglo);
			$datos = array();
			while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {				
				$datos[] =$row;				
			}
		} catch (PDOException $e) {
			error_log($e);
			$error="error";
			$mensaje="ocurrio un problema en la consulta";
			return false;
			
		}
		
		return $datos;
	}
    public  function consultaSeguraIndex($query, $arreglo){
		$data=array();
		try {			
			$statement  = $this->PDO->prepare($query);
			$statement->execute($arreglo);
         $data = $statement->fetchAll(PDO::FETCH_BOTH);
        $today = new DateTime(date('Y-m-d'));

        }
	 catch (PDOException $e) {
			error_log($e);
			$error="error";
			$mensaje="ocurrio un problema en la consulta";
			return false;
		}
		return $data;
	}



	//regresa nuestra consulta en json
	public static function returntable($query){
		$conexion = new PDOMYSQL();
		$datos=$conexion->consulta($query);
		$datos['success'] = true;
		$datos = json_encode($datos, JSON_UNESCAPED_UNICODE);
		return $datos;
	}


     //regresa nuestra consulta en json
	public static function ReturnSuggestions($query){
		$conexion = new PDOMYSQL();
		$datos=$conexion->consulta($query);
		$datos = json_encode($datos, JSON_UNESCAPED_UNICODE);
		return $datos;
	}

}
?>
