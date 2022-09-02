<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$name = $_POST['name'];
$from_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->SMTPDebug=0; //this is very verbose, just for testing, change to 4
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = '---------------------';
$mail->Password = '---------------------';
$mail->setFrom('----------------------');
$mail->addAddress($from_email);
$mail->Subject = $subject;
$mail->Body = $message;

//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

