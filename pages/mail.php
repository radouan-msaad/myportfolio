<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendMail($from,$to,$subject,$msg){
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
require '../PHPMailer/Exception.php';
$mail = new PHPMailer(true);
   try {
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP(true);                       
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'gsomeone375@gmail.com';//SMTP username
    $mail->Password   = 'cxnpcjmrtlvzunkz';   //SMTP password
    $mail->SMTPSecure = 'tls';  //tls ssl          
    $mail->Port       = 587;    //465 587
    //Recipients
    $mail->setFrom('gsomeone375@gmail.com',$from);
    $mail->addAddress($to);  //Add a recipient
    //Content
    $mail->isHTML(true);     
    $mail->Subject = $subject;
    $mail->Body    = $msg;
    $mail->send();
    $result ='success';
 } catch (Exception $e) {
    $result ='Error :'.$mail->ErrorInfo;
 }
 return $result;

 }
?>
