<?php

/*invocacion de clases*/
use pdomysql AS pdomysql;
use admin AS admin;
class admin
{

    public static function sendEmailWelCome($mail, $user, $pass, $nameContact){
    $subject = "Activacion 'A donde ir en la ciudad'";
    //Cuerpo del email
    $email_message = file_get_contents("../templates/email/bienvenido.html");
    $email_message = str_replace('####ANUNCIANTE####', $nameContact, $email_message);
    $email_message = str_replace('####USER####', $user, $email_message);
    $email_message = str_replace('####PASS####', $pass, $email_message);
    /*$email_message = preg_replace('/\\\\/','', $email_message);*/
    $headers = "From: info@adondeirenlaciudad.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    return mail($mail, $subject, $email_message, $headers);
    }

    public static function sendEmailAgainWelCome($mail, $user, $pass, $nameContact){
    $subject = "Activacion 'A donde ir en la ciudad'";
    //Cuerpo del email
    $email_message = file_get_contents("../templates/email/volver.html");
    $email_message = str_replace('####ANUNCIANTE####', $nameContact, $email_message);
    $headers = "From: info@adondeirenlaciudad.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    return mail($mail, $subject, $email_message, $headers);
    }
    public static function sendEmailChangePass($mail, $user, $pass, $nameContact){error_log(print_r($mail,true));
    $subject = "Cambio de contraseña 'A donde ir en la ciudad'";
    //Cuerpo del email
    $email_message = file_get_contents("../templates/email/cambio.html");
    $email_message = str_replace('####ANUNCIANTE####', $nameContact, $email_message);
    $email_message = str_replace('####USER####', $user, $email_message);
    $email_message = str_replace('####PASS####', $pass, $email_message);
    $headers = "From: info@adondeirenlaciudad.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    return mail($mail, $subject, $email_message, $headers);
    }
    public static function sendEmailPaymentReminder($mail){
    $subject = "Recordatorio 'A donde ir en la ciudad'";
    //Cuerpo del email
    $email_message = file_get_contents("../templates/email/recordatorio.html");
    $email_message = str_replace('####NOOXXO####', '4152 3132 5027 4466', $email_message);
    $email_message = str_replace('####BANCO####', 'BANCOMER', $email_message);
    $email_message = str_replace('####NAME####', '', $email_message);
    $email_message = str_replace('####CUENTA####', '012060011745350812', $email_message);
    $email_message = str_replace('####CORREO####', 'mexappstore@gmail.com', $email_message);
   /* $email_message = str_replace('####BANCO####', $nameContact, $email_message);
    $email_message = str_replace('####OTRA####', $user, $email_message);
    $email_message = str_replace('####NAME####', $pass, $email_message);
    $email_message = str_replace('####OTRA_CLABE####', $pass, $email_message);
    $email_message = str_replace('####CUENTA####', $pass, $email_message);
    $email_message = str_replace('####SUCURSAL####', $pass, $email_message);
    $email_message = str_replace('####CLABE_INTER####', $pass, $email_message);
    $email_message = str_replace('####TELS####', $pass, $email_message);*/
    //error_log('message');
    $headers = "From: info@adondeirenlaciudad.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    return mail($mail, $subject, $email_message, $headers);
    }
  //envio de Email
  public static function sendEmailActivation($mail, $user, $pass, $nameContact){
    $subject = "Activacion 'A donde ir en la ciudad'";
    //Cuerpo del email
    $email_message = file_get_contents("../templates/email/bienvenido_socio.html");
    $email_message = str_replace('###NOMBRE_CONTACTO###', $nameContact, $email_message);
    $email_message = str_replace('###USUARIO###', $user, $email_message);
    $email_message = str_replace('###MAIL###', $mail, $email_message);
    $email_message = str_replace('###PASSWORD###', $pass, $email_message);
    //$email_message = preg_replace('/\\\\/','', $email_message);
    $headers = "From: bienvenido@adondeirenlaciudad.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    return mail($mail, $subject, $email_message, $headers);
  }
  public static function cron($mail=null, $user=null, $nameContact=null,$fecha=null){
    if($mail==null)
        $mail="raganaxi@gmail.com,alkoba.sandoval13@gmail.com";
    $subject = "cron 'A donde ir en la ciudad'";
    if ($fecha==null) {
        $fecha="";
    }
    
    //Cuerpo del email
    $email_message = file_get_contents("../templates/email/cron.html");
    $email_message = str_replace('####NOOXXO####', '4152 3132 5027 4466', $email_message);
    $email_message = str_replace('###BANCO###', 'BANCOMER', $email_message);
    $email_message = str_replace('###NAME###', '', $email_message);
    $email_message = str_replace('###CUENTA###', '012060011745350812', $email_message);
    $email_message = str_replace('###CORREO###', 'mexappstore@gmail.com', $email_message);
    
    $headers = "From: info@adondeirenlaciudad.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    return mail($mail, $subject, $email_message, $headers);
  }
}

?>
