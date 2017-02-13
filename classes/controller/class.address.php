<?php
use pdomysql AS pdomysql;
use Address AS Address;

class address{

	private  $idaddress=null;
	private $direccion=null;
	private $colonia=null;
	private $municipio=null;
	private $estado=null;
	private $pais=null;
	private $cp=null;
	private $lat=null;
    private $long=null;
    private $user_id=null;
    private $bandera=null;
    private $column=array(
    'idaddress',
    'direccion',
    'colonia',
    'municipio',
    'estado',
    'pais',
    'cp',
    'lat',
    '`long`',
    );

    public function __construct($data=array()){
        $idaddress = isset($data['idaddress']) ? $data['idaddress'] : null;
        $direccion = isset($data['direccion']) ? $data['direccion'] : null;
        $colonia = isset($data['colonia']) ? $data['colonia'] : null;
        $municipio = isset($data['municipio']) ? $data['municipio'] : null;
        $estado = isset($data['estado']) ? $data['estado'] : null;
        $pais = isset($data['pais']) ? $data['pais'] : null;
        $cp = isset($data['cp']) ? $data['cp'] : null;
        $lat = isset($data['lat']) ? $data['lat'] : null;
        $long = isset($data['long']) ? $data['long'] : null;
        $user_id = isset($data['user_id']) ? $data['user_id'] : null;
        $bandera = isset($data['bandera']) ? $data['bandera'] : null;

    }
 
   public function getAddress($order=array()){
    $cOrder='ORDER BY '.$this->column[$order['column']].' '.$order['dir'];
    	$consulta ="SELECT * from address WHERE user_id=? ".$cOrder;
//        error_log(print_r($consulta,true));
    	$db_con= new PDOMYSQL;
        $parametros = array($this->user_id);
        $result=$db_con->consultaSeguraIndex($consulta,$parametros);
        return $result;
    }
  


    public function setAddress(){
        $consulta = "INSERT INTO address (direccion,colonia,municipio,estado,pais,cp,lat,`long`,user_Id) values(?,?,?,?,?,?,?,?,?)";
        $parametros=array($this->direccion,$this->colonia,$this->municipio,$this->estado,$this->pais,$this->cp,$this->lat,$this->long,$this->user_id);
        $db_con=new PDOMYSQL;
        $result=$db_con->consultaSegura($consulta,$parametros);
        return true;
    }


    public function updateAddress(){
        $consulta="UPDATE address SET direccion =?, colonia = ?, municipio = ?, estado = ?, pais = ?, cp = ?, lat = ?, `long` = ?, user_id = ? WHERE idaddress = ?";
        $parametros=array($this->direccion,$this->colonia,$this->municipio,$this->estado,$this->pais,$this->cp,$this->lat,$this->long,$this->user_id,$this->idaddress);
        $db_con=new PDOMYSQL;
        $result=$db_con->consultaSegura($consulta,$parametros);
    
            return true; 
    }

    public function deleteAddress(){
        $consulta="UPDATE address SET bandera =? WHERE idaddress = ?";
        $parametros=array($this->bandera,$this->idaddress);
        $db_con=new PDOMYSQL;
        $result=$db_con->consultaSegura($consulta,$parametros);
        if(!empty($result)){
            return true;
        }else{
            return false;
        }
    }

    public function setIdaddress($idaddress){$this->idaddress=$idaddress;}
    public function getIdaddress(){return $this->idaddress;} 
    public function setDireccion($direccion){$this->direccion=$direccion;}
    public function getDireccion(){return $this->direccion;} 
    public function setColonia($colonia){$this->colonia=$colonia;}
    public function getColonia(){return $this->colonia;} 
    public function setMunicipio($municipio){$this->municipio=$municipio;}
    public function getMunicipio(){return $this->municipio;} 
      public function setEstado($estado){$this->estado=$estado;}
    public function getEstado(){return $this->estado;} 
       public function setPais($pais){$this->pais=$pais;}
    public function getPais(){return $this->pais;}
    public function setCp($cp){$this->cp=$cp;}
    public function getCp(){return $this->cp;}
        public function setLat($lat){$this->lat=$lat;}
    public function getLat(){return $this->lat;}
    public function setLong($long){$this->long=$long;}
public function getLong(){return $this->long;}
     public function setUser_id($user_id){$this->user_id=$user_id;}
    public function getUser_id(){return $this->user_id;}
 public function setBandera($bandera){$this->bandera=$bandera;}
    public function getBandera(){return $this->bandera;}
    }

 
?>