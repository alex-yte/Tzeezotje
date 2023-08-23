<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer/src/Exception.php';
require 'assets/PHPMailer/src/PHPMailer.php';
require 'assets/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail -> CharSet = 'UTF-8';
$mail->setLanguage('uk', 'PHPMailer/language/');
$mail->IsHTML(true);

$mail->setFrom('info@info.info', 'Denis');
$mail->addAddress('den.alex.chirkov@gmail.com');
$mail->Subject="test";

$body = '<h1>Test</h1>';
if(trim(!empty($_POST['fname']))){
    $body.= '<p>Name:' .$_POST['fname'].' </p>';
}
if(trim(!empty($_POST['lname']))){
    $body.= '<p>Last Name:' .$_POST['lname'].' </p>';
}

$mail->Body=$body;

if(!$mail->send()){
    $message= "Error";
}else{
    $message="Sent";
}
$response = ['message'=>$message];

header('content-type: application/json');
echo json_encode($response);

?>