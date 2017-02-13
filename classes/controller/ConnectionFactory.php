<?php


	define( "DB_DSN","mysql:35.162.158.50;dbname=adic" );
	define( "DB_USERNAME", "webmaster" );
	define( "DB_PASSWORD", "adicmasterMagicmikes@" );
	define( "DB_HOST", "35.162.158.50" );
	define( "DB_NAME", "adic");
class ConnectionFactory{

	private static $factory;
	private $db;
	
	public static function getFactory(){
	    if (!self::$factory){
	        self::$factory = new ConnectionFactory();
	    }
	    return self::$factory;
	}
	
	public function getConnection(){
	    if (is_null($this->db)) 
	    {
	    	$this->db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
  			$this->db->set_charset('utf8');
	    }
	    return $this->db;
	}
	
	public function closeConnection(){
	   if (!is_null($this->db)){
	       $db = $this->db;
	       $db->close();
	       $this->db = null;
	   }
	}
}
?>