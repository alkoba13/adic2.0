<?php

/*invocacion de clases*/
use pdomysql AS pdomysql;
use user AS user;
use admin AS admin;


class user
{
	/*
	#Registro de usuarios
	*/
	public static function register($mail, $pass, $r_type){
		$consulta = 'call register_user("'.$mail.'", "'.$pass.'",  "'.$r_type.'")';
    //error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $result =  $PDOMYSQL->consulta($consulta);
    return $result;
  }

  public static function registerSoc($name, $phone, $mail, $pass, $r_type, $img, $negocio, $category){
    $consulta = 'call register_soc("'.$name.'","'.$phone.'","'.$mail.'", "'.user::randomPassword().'",  "'.$r_type.'",  "'.$img.'",  "'.$negocio.'", "'.$category.'")';
    //error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $result =  $PDOMYSQL->consulta($consulta);
    return $result;
  }
  public static function updateProfPicture($img,$userid){
    $consulta = 'call update_profPicture(?,?)';

    $parametros = array($img,$userid);
    //error_log(json_encode($parametros));
    $db_con = new PDOMYSQL;
    $result =  $db_con->consultaSegura($consulta,$parametros);
    return $result;
  }

  public static function login($mail, $pass){
    $consulta = "SELECT * FROM user where username = ? and pass = ? and active = '1'";
    $parametros = array($mail,$pass);
    //error_log($consulta);
    $db_con = new PDOMYSQL;
    $result = $db_con->consultaSegura($consulta,$parametros);
    return $result;
  }
  public static function firstLogin($userid){
    $consulta="UPDATE user SET first_log = ? WHERE iduser = ?";
       $parametros = array(1,$userid);
    //error_log($consulta);
    $db_con = new PDOMYSQL;
    $result = $db_con->consultaSegura($consulta,$parametros);
    return $result;

  }
    public static function loginFacebook($mail){
    $consulta = "SELECT * FROM user where username = ? and active = '1'";
    $parametros = array($mail,$pass);
    //error_log($consulta);
    $db_con = new PDOMYSQL;
    $result =  $db_con->consultaSegura($consulta,$parametros);
    return $result;
  }

  public static function getPost(){
    $date = isset($_SESSION['date'])? $_SESSION['date'] : date('Y-m-d');
    $consulta = 'SELECT post.*,category.nombre as categoria, user_data.name as user_name, user_data.img as user_pic FROM post INNER JOIN user on user.iduser = post.userid INNER JOIN user_data ON user_data.user_id = post.userid INNER JOIN category on post.categoryid = category.idcategory where date ="'.$date.'" order by date desc';
    //error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $result = $PDOMYSQL->consulta($consulta);
    return $result;
  }

  public static function regPost($title, $description, $date, $userid, $file){
    $consulta = 'call register_post("'.$title.'", "'.$description.'",  "'.$date.'",  "'.$userid.'", "'.$file.'")';
    $PDOMYSQL = new PDOMYSQL;
    $result =  $PDOMYSQL->consulta($consulta);
    $check = 'SELECT * FROM post WHERE title = "'.$title.'" and date = "'.$date.'" and userid = "'.$userid.'" ';
    $result2 = $PDOMYSQL->consulta($check);
    return $result2;
  }

  public static function editProfileData($name, $number,$email, $negocio, $user_id){
    $consulta = 'UPDATE user_data SET name="'.$name.'", number="'.$number.'", mail="'.$email.'", negocio="'.$negocio.'" WHERE user_id="'.$user_id.'" ';
    $check = 'SELECT * FROM user_data WHERE name='.$name.', number='.$number.', negocio='.$negocio.' AND user_id='.$user_id.'';
    //error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $update = $PDOMYSQL->consulta($consulta);
    $result = $PDOMYSQL->consulta($check);
    return $result;
  }
  public static function editUserData($user,$user_id){
        $consulta = 'UPDATE user SET username="'.$user.'" WHERE iduser='.$user_id;
    $check = 'SELECT * FROM user WHERE username='.$user.', AND user_id='.$user_id.'';
//    error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $update = $PDOMYSQL->consulta($consulta);
    $result = $PDOMYSQL->consulta($check);
    return $result;
  }

  /*public static function editProfile($name, $phone, $mail, $image, $user_id){
    $consulta = 'call editProfile("'.$name.'", "'.$phone.'",  "'.$mail.'",  "'.$image.'",  "'.$user_id.'")';
    error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $result =  $PDOMYSQL->consulta($consulta);
    return $result;
  }*/

  public static function getProfile($userId){
    $consulta2 = 'SELECT user.*, user_data.* FROM user inner join user_data on user.iduser = user_data.user_id WHERE iduser ='.$userId.'';
    //$consulta = 'SELECT * FROM user_data where user_id = "'.$userId.'" ';
    //error_log(print_r($consulta2, true));
    $PDOMYSQL = new PDOMYSQL;
    $result =  $PDOMYSQL->consulta($consulta2);
    return $result;
  }

  public static function getSoc(){
    $date = isset($_SESSION['date'])? $_SESSION['date'] : date('Y-m-d');
    $consulta = 'SELECT user.*, user_data.name, user_data.number, user_data.negocio FROM user inner join user_data on user.iduser = user_data.user_id WHERE role ="socio" and active = 0';
    //error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $result =  $PDOMYSQL->consulta($consulta);
    return $result;
  }

  public static function getRegSoc(){
    $date = isset($_SESSION['date'])? $_SESSION['date'] : date('Y-m-d');
    $consulta = 'SELECT user.*, user_data.name, user_data.number, user_data.negocio,user_data.mail  FROM user inner join user_data on user.iduser = user_data.user_id WHERE role ="socio" and active = 1';
    //error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $result =  $PDOMYSQL->consulta($consulta);
    return $result;
  }

  public static function getStanbySoc(){
    $date = isset($_SESSION['date'])? $_SESSION['date'] : date('Y-m-d');
    $consulta = 'SELECT user.*, user_data.name, user_data.number, user_data.negocio, user_data.mail FROM user inner join user_data on user.iduser = user_data.user_id WHERE role ="socio" and active = 2';
    //error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $result =  $PDOMYSQL->consulta($consulta);
    return $result;
  }

  public static function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); /*remember to declare $pass as an array*/
    $alphaLength = strlen($alphabet) - 1; /*put the length -1 in cache*/
    for ($i = 0; $i < 8; $i++) {
      $n = rand(0, $alphaLength);
      $pass[] = $alphabet[$n];
    }
    return implode($pass); /*turn the array into a string*/
  }

  public static function changeAccess($user, $oldPass, $newPass) {
    $consulta = 'UPDATE user SET pass = "'.$newPass.'" WHERE iduser = '.$user.' AND pass = "'.$oldPass.'"';
    $check = 'SELECT * FROM user WHERE pass = "'.$newPass.'" and iduser = '. $user .'';
      $queryDataU = "SELECT * FROM user_data WHERE user_id = $user";
    $PDOMYSQL = new PDOMYSQL;
    $update = $PDOMYSQL->consulta($consulta);
    $result = $PDOMYSQL->consulta($check);
    $rsDataUsr = $PDOMYSQL->consulta($queryDataU);
    //error_log(print_r($update, true));
    //error_log(print_r($result, true));
    admin::sendEmailChangePass($rsDataUsr[0]["mail"],$result[0]["username"], $result[0]["pass"], $rsDataUsr[0]["name"]);
    return $result;
  }

  public static function activateUser($user,$type) {
    $consulta = 'UPDATE user SET active = 1, date_active = NOW() WHERE iduser = '.$user.'';
    $check = 'SELECT * FROM user WHERE active = 1 and iduser = '. $user .'';
		$queryDataU = "SELECT * FROM user_data WHERE user_id = $user";
    $PDOMYSQL = new PDOMYSQL;
    $update =  $PDOMYSQL->consulta($consulta);
    $result = $PDOMYSQL->consulta($check);
		$rsDataUsr = $PDOMYSQL->consulta($queryDataU);
    if ($type==1) {
        admin::sendEmailWelCome($rsDataUsr[0]["mail"],$result[0]["username"], $result[0]["pass"], $rsDataUsr[0]["name"]);
    }else{ admin::sendEmailAgainWelCome($rsDataUsr[0]["mail"],$result[0]["username"], $result[0]["pass"], $rsDataUsr[0]["name"]);
    }
//    error_log(print_r($result, true));
    return $result;
  }

  public static function deactivateUser($user) {
    $consulta = 'UPDATE user SET active = 2 WHERE iduser = '.$user.'';
    $check = 'SELECT * FROM user WHERE active = 2 and iduser = '. $user .'';
    $PDOMYSQL = new PDOMYSQL;
    $update =  $PDOMYSQL->consulta($consulta);
    $result = $PDOMYSQL->consulta($check);
//   error_log(print_r($result, true));
    return $result;
  }

  public static function deleteUser($user){
    $consulta = 'UPDATE user SET active = 3 WHERE iduser = '.$user.'';
    $check = 'SELECT * FROM user WHERE active = 3 and iduser = '. $user .'';
    $PDOMYSQL = new PDOMYSQL;
    $update =  $PDOMYSQL->consulta($consulta);
    $result = $PDOMYSQL->consulta($check);
//   error_log(print_r($result, true));
    return $result;
  }

  public static function reg_address($calle, $numero, $municipio, $estado, $pais, $cp, $uid){
    $consulta = 'INSERT INTO address (calle, numero, municipio, estado, pais, cp, user_Id) VALUES ("'.$calle.'", "'.$numero.'", "'.$municipio.'", "'.$estado.'", "'.$pais.'", "'.$cp.'", "'.$uid.'")';
    $check = 'SELECT * FROM address WHERE user_id = '.$uid.' and calle = '.$calle.' and numero = '.$numero.' and municipio = '.$municipio.' and estado = '.$estado.' and pais = '.$pais.' and cp = '.$$cp.' ';
    $PDOMYSQL = new PDOMYSQL;
    $consulta =  $PDOMYSQL->consulta($consulta);
    $result = $PDOMYSQL->consulta($check);
//    error_log(print_r($result, true));
    return $result;
  }

  public static function userExist($email) {
    $consulta = 'SELECT * from user WHERE username = ?';
    $parametros = array($email);
    $db_con = new PDOMYSQL;
    $result =  $db_con->consultaSegura($consulta,$parametros);
    return $result;
  }
  public static function registerOnMailDefault($email){
    $pass=self::randomPassword();

    $consulta = 'call register_user(?,?,?)';
    $parametros = array($email,$pass,'usuario');

    $db_con = new PDOMYSQL;
    $result =  $db_con->consultaSegura($consulta,$parametros);
    $check=self::userExist($email);
    return $check;
  }
  public static function tokenActivate($token,$iduser){
    $consulta ="UPDATE tbl_tokens SET active=1,user_id=? WHERE tx_token=?";
    $parametros = array($iduser,$token);
    $db_con = new PDOMYSQL;
    $result =  $db_con->consultaSegura($consulta,$parametros);
    return self::tokenValidate($token);
  }
  public static function tokenValidate($token){
    $consulta ="SELECT * FROM tbl_tokens WHERE tx_token=? and DATE(DATE_ADD(creation_date, INTERVAL 1 month)) >= now() and active=1 ";
    $parametros = array($token);
    error_log($consulta);
    $db_con = new PDOMYSQL;
    $result =  $db_con->consultaSegura($consulta,$parametros);
    if (empty($result)) {
      return false;
    }
    else{
      return true;
    }
  }
  /*obtener un toquen unico ligado al usuario*/
  public static function obtenToken512($email,$id,$ip,$id_dispositivo){
    if ($email==""||$id==""||$ip==""||$id_dispositivo=="") {
      return false;
    }
    $token="";
    for ($i=0; $i < 5; $i++) {
      $tmpToken= openssl_digest($email.Time(), 'sha512');
      $consulta = "SELECT * FROM tbl_tokens WHERE tx_token=?";
      $parametros = array($tmpToken);
//      error_log($consulta);
      $db_con = new PDOMYSQL;
      $result =  $db_con->consultaSegura($consulta,$parametros);
      if (empty($result)) {
        $token=$tmpToken;
        break;
      }
    }
    /*verificamos si el token se guardara o devolveremos error*/
    if (strlen($token)>0) {
      $consulta = "INSERT INTO tbl_tokens (tx_token,user_id,creation_date,ip,id_dispositivo,active) values(?,?,now(),?,?,1)";
      $parametros = array($token, $id,$ip, $id_dispositivo);
      //error_log($consulta);
      $db_con = new PDOMYSQL;
      $result =  $db_con->consultaSegura($consulta,$parametros);
    }
    else{
      return false;
    }
    return $token;
  }
  public static function tokenValidateDelete($token){
    $consulta="UPDATE tbl_tokens SET active = 0 WHERE tx_token=?";
    $parametros = array($token);
//    error_log($consulta);
    $PDOMYSQL = new PDOMYSQL;
    $result =  $PDOMYSQL->consultaSegura($consulta,$parametros);
    return $result;
  }

 /*fin de la clase */
}
?>
