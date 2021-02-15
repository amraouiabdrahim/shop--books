<?php
include('../function/db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                  
    $mail->SMTPAuth   = true;                                   
    $mail->Password   = '';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      
    $mail->Port       = 587;                                    

    
    $mail->setFrom($email , $name);
    $mail->addAddress('', 'Support-Library');    
    $mail->addReplyTo($email , $name);


    
   


    
    $mail->isHTML(true);                                  
    $mail->Subject = 'New Entry: Contact Us';
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    $_SESSION['success'] = "Merci, votre message a bien été envoyé !";
    header ('location: ../home.php');

} catch (Exception $e) {

$_SESSION['status'] = "votre message n'a pas été envoyé. Mailer Error: {$mail->ErrorInfo} ";
header ('location: ../contact-us.php');
}