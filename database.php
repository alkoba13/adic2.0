<?php
define( "DB_PROVIDER", "mysql:host=mysql.hostinger.mx;dbname=u913897248_aadic" );
define( "DB_USER", "u913897248_aadic" );
define( "DB_PASSWORD", "u913897248_adicBD" );
define( "DB_HOST", "mysql.hostinger.mx" );
define( "DB_DB", "u913897248_adic" );

$serverName = "mysql.hostinger.mx";
$bdUser = "u913897248_aadic";
$dbPass = "u913897248_adicBD";
$dbName = "u913897248_adic";

$conn = new mysqli($serverName, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
  die("connection failed: ", $conn->connect_error);
}


// aqui empieza el ORM
//https://www.ufncion13.com/creando-un-pequeno-orm-en-php/#
/*
abstract class DatabaseProvider {
  protected $resource;
  public abstract function connect($host, $user, $pass, $dbname);
  public abstract function disconnect();
  public abstract function getErrorNo();
  public abstract function getError();
  public abstract function query($q);
  public abstract function numRows($resource);
  public abstract function fetchArray($resource);
  public abstract function isConnected();
  public abstract function escape($var);
  public abstract function getInsertedID();
  public abstract function changeDB($database);
  public abstract function setCharset($charset);
}

require_once ('DatabaseProvider.php');
class MySqlProvider extends DatabaseProvider {
  public function connect($host, $user, $pass, $dbname) {
    $this->resource = new mysqli($host, $user, $pass, $dbname);
    if ($this->resource->connect_errno) {
      // Connection fails
      error_log($this->resource->connect_error);
    }
    return $this->resource;
  }
  public function disconnect() {
    return $this->resource->close();
  }
  public function getErrorNo() {
    return $this->resource->errno;
  }
  public function getError() {
    return $this->resource->error;
  }
  public function query($q) {
    return $this->resource->query($q);
  }
  public function numRows($resource) {
    $num_rows = 0;
    if ($resource) {
      $num_rows = $resource->num_rows;
    }
    return $num_rows;
  }
  public function fetchArray($result) {
    return $result->fetch_assoc();
  }
  public function isConnected() {
    return !is_null($this->resource);
  }
  public function escape($var) {
    return $this->resource->real_escape_string($var);
  }
  public function getInsertedID() {
    return $this->resource->insert_id;
  }
  public function changeDB($database) {
    return $this->resource->select_db($database);
  }
  public function setCharset($charset) {
    return $this->resource->set_charset($charset);
  }
}

class Database {
  private $provider;
  private $params;
  private static $_con;
  public function __construct($provider, $host, $user, $pass, $db) {
    if (!class_exists($provider)) {
        throw new Exception("The provider doesn't exists or it wasn't implemented");
    }
    $this->provider = new $provider;
    $this->provider->connect($host, $user, $pass, $db);
    if (!$this->provider->isConnected()) {
      throw new Exception("We couldn't connect to the database >> $db");
    } else {
      $this->provider->setCharset('utf-8');
    }
  }
  public static function getConnection($provider, $host, $user, $pass, $db) {
    if (self::$_con) {
      return self::$_con;
    } else {
      $class = __CLASS__;
      self::$_con = new $class($provider, $host, $user, $pass, $db);
      return self::$_con;
    }
  }
  private function replaceParams() {
    $b = current($this->params);
    next($this->params);
    return $b;
  }
  private function prepare($sql, $params) {
    $escaped = '';
    if ($params) {
      foreach ($params as $key => $value) {
        if (is_bool($value)) {
          $value = $value ? 1 : 0;
        } elseif (is_double($value)) {
          $value = str_replace(',', '.', $value);
        } elseif (is_numeric($value)) {
          if (is_string($value)) {
            $value = "'" . $this->provider->escape($value) . "'";
          } else {
            $value = $this->provider->escape($value);
          }
        } elseif (is_null($value)) {
          $value = "NULL";
        } else {
          $value = "'" . $this->provider->escape($value) . "'";
        }
        $escaped[] = $value;
      }
    }
    $this->params = $escaped;
    $q = preg_replace_callback("/(\?)/i", array($this, "replaceParams"), $sql);
    return $q;
  }
  private function sendQuery($q, $params) {
    $query = $this->prepare($q, $params);
    $result = $this->provider->query($query);
    if ($this->provider->getErrorNo()) {
      error_log($this->provider->getError());
    }
    return $result;
  }
  public function executeScalar($q, $params = null) {
    $result = $this->sendQuery($q, $params);
    if (!is_null($result)) {
      if (!is_object($result)) {
        return $result;
      } else {
        $row = $this->provider->fetchArray($result);
        return $row[0];
      }
    }
    return null;
  }
  public function execute($q, $array_index = null, $params = null) {
    $result = $this->sendQuery($q, $params);
    if ((is_object($result) || $this->provider->numRows($result) || $result) && ($result !== true && $result !== false)) {
      $arr = array();
      while ($row = $this->provider->fetchArray($result)) {
        if ($array_index) {
          $arr[$row[$array_index]] = $row;
        } else {
          $arr[] = $row;
        }
      }
      return $arr;
    }
    return $this->provider->getErrorNo() ? false : true;
  }
  public function changeDB($database) {
    $this->provider->changeDB($database);
  }
  public function getInsertedID() {
    return $this->provider->getInsertedID();
  }
  public function getError() {
    return $this->provider->getError();
  }
  public function __destruct() {
    $this->provider->disconnect();
  }
}

class ORM {
  private static $database;
  protected static $table;
  function __construct() {
    self::getConnection();
  }
  private static function getConnection() {
    require_once ('Database.php');
    self::$database = Database::getConnection(DB_PROVIDER, DB_HOST, DB_USER, DB_PASSWORD, DB_DB);
  }
  public static function find($id) {
    $results = self::where('id', $id);
    return $results[0];
  }
  public static function where($field, $value) {
    $obj = null;
    self::getConnection();
    $query = "SELECT * FROM " . static ::$table . " WHERE " . $field . " = ?";
    $results = self::$database->execute($query, null, array($value));
    if ($results) {
      $class = get_called_class();
      for ($i = 0;$i < sizeof($results);$i++) {
        $obj[] = new $class($results[$i]);
      }
    }
    return $obj;
  }
  public static function all($order = null) {
    $objs = null;
    self::getConnection();
    $query = "SELECT * FROM " . static ::$table;
    if ($order) {
      $query.= $order;
    }
    $results = self::$database->execute($query, null, null);
    if ($results) {
      $class = get_called_class();
      foreach ($results as $index => $obj) {
        $objs[] = new $class($obj);
      }
    }
    return $objs;
  }
  public function save() {
    $values = get_object_vars($this);
    $filtered = null;
    foreach ($values as $key => $value) {
      if ($value !== null && $value !== '' && strpos($key, 'obj_') === false && $key !== 'id') {
        if ($value === false) {
          $value = 0;
        }
        $filtered[$key] = $value;
      }
    }
    $columns = array_keys($filtered);
    if ($this->id) {
      $columns = join(" = ?, ", $columns);
      $columns.= ' = ?';
      $query = "UPDATE " . static ::$table . " SET $columns WHERE id =" . $this->id;
    } else {
      $params = join(", ", array_fill(0, count($columns), "?"));
      $columns = join(", ", $columns);
      $query = "INSERT INTO " . static ::$table . " ($columns) VALUES ($params)";
    }
    $result = self::$database->execute($query, null, $filtered);
    if ($result) {
      $result = array('error' => false, 'message' => self::$database->getInsertedID());
    } else {
      $result = array('error' => true, 'message' => self::$database->getError());
    }
    return $result;
  }
}

class Users extends ORM {
  public $id, $role, $active, $username, $pass, $reg_type;
  protected static $table = 'user';
  public function __construct($data) {
    parent::__construct();
    if ($data && sizeof($data)) {
      $this->populateFromRow($data);
    }
  }
  public function populateFromRow($data) {
    $this->id = isset($data['id']) ? intval($data['id']) : null;
    $this->nombre = isset($data['nombre']) ? $data['nombre'] : null;
  }
}
*/
