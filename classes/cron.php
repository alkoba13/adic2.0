
<?php

require_once('autoloader.php');
require_once('../config.php');

use pdomysql AS pdomysql;
use admin AS admin;
use user AS user;












$time = time();
$fecha = date("Y-m-d (H:i:s)", $time) ;
error_log("cron iniciado: ".$fecha );
$db_con = new PDOMYSQL;
   $consulta=  "SELECT * from user
inner join user_data on user.iduser=user_data.user_id where active=1 and user.role='socio' and (user_data.mail != null or user_data.mail != '') and date_active< date_sub(date_add(now(),INTERVAL 1 month), interval 5 day)";
  
   $socios =  $db_con->consulta($consulta);
   //error_log(json_encode($socios));
foreach ($socios as $key => $value) {
	//error_log($socios[$key]['mail']);
	admin::sendEmailPaymentReminder($socios[$key]['mail']);
sleep (2);
}

$time = time();
$fecha = date("Y-m-d (H:i:s)", $time) ;
error_log("cron terminado: ".$fecha );




/*




//$fecha = date("Y-m-d (H:i:s)", $time) ;
//error_log($fecha);
//admin::cron(null,null,null,$fecha."");
  $socios = user::getRegSoc();
  // error_log(print_r($socios,true));
   for ($i=0; $i < count($socios); $i++) {
   $date = strtotime ( '+1 month' , strtotime ( $socios[$i]['date_active'] ) ) ;
  $date = date ( 'Y-m-d' , $date );
  $nuevafecha = strtotime ( '-5 day' , strtotime ( $date ) ) ;
  $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
  $fecha = date('Y-m-j'); 
  //error_log(print_r($date.' '.$nuevafecha,true));
  if ($nuevafecha==$fecha) {
  //error_log(print_r('expression',true));
  
 // error_log($time);
 // error_log($socios[$i]['username']);
  admin::sendEmailPaymentReminder($socios[$i]['mail']);
   sleep (2);     }
  }*/

return 0;








?>