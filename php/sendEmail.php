<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$numerotlf = $_POST['numerotlf'];
$texto = $_POST['texto'];


try{
    //Server settings
    $mail->SMTPDebug  = 0;                     // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'correoproyectophp@gmail.com';                     // SMTP username
    $mail->Password   = 'Secret0_';                               // SMTP password
    $mail->SMTPSecure = 'tls';           // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Recipients
    $mail->setFrom('correoproyectophp@gmail.com', $nombre );  //Desde que correo se envia
    $mail->addAddress('correoproyectophp@gmail.com');     // A que correo se envia

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Asunto';
    $mail->Body    = "Nombre: $nombre <br/>";
    $mail->Body   .= "Apellidos: $apellidos <br/>";
    $mail->Body   .= "Email: $email <br/>";
    $mail->Body   .= "Numero de telefono: $numerotlf <br/>";
    $mail->Body   .= "Texto: $texto <br/>";

    $mail->send();
    $mensaje1 = "Correo enviado correctamente";
    $mensaje = "Mail sent successfully";
        
}catch(Exception $e){
    $mensaje1 = "No se pudo enviar el mensaje, verifique los datos ingresados." .$mail->ErrorInfo;
    $mensaje = "The message could not be sent, check the data entered." . $mail->ErrorInfo;
}
    
$_SESSION['mensaje']=$mensaje1;
$_SESSION['mensajeE']=$mensaje;
//$mail->smtpClose();

header("Location: ../paginas/contacta.php");

session_write_close();

die();