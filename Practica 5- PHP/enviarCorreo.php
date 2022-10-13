<?php
use PHPMail\PHPMail\PHPmail;
use PHPMail\PHPMail\exception;

require 'PHPMailer/exception.php';
require 'PHPMailer/PHPmail.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMail(true);

try {
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'laradelcoro@gmail.com';                     //SMTP username
    $mail->Password   = '22555333';                               //SMTP password
    $mail->SMTPSecure = PHPMail::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $emailTo=$_POST["nuevoEmail"];
    $mail->setFrom('laradelcoro@gmail.com', 'Mail');
    $mail->addAddress($emailTo, 'Joe User');     //Add a recipient

    //Optional name

    //Content
    $miConsulta = $_POST["consulta"];
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Esta es una prueba de correo';
    $mail->Body    = "$miConsulta <b>in bold!</b>";

    $mail->send();
    echo 'Mensaje Enviado :D';
} catch (Exception $e) {
    echo "Message could not be sent. Mail Error: {$mail->ErrorInfo}";
}