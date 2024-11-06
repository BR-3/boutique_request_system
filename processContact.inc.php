<?php
require './PHPMailer-master/PHPMailerAutoload.php';

$email = $_POST['emailInput'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$topic = $_POST['topic'];
$message = $_POST['messageInput'];

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->SMTPDebug=0; 
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'mcoo275test@gmail.com';
$mail->Password = 'movgeamxavnglckd';
$mail->setFrom($email);
$mail->addAddress('mcoo275test@gmail.com');
$mail->Subject = 'Message from ' . $firstName . ' ' . $lastName . ' ' . $email . ': ' . $topic;
$mail->Body = $message;
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    $successMessage = "Message sent successfully.";
    header("Location: contact.php?&success=$successMessage"); // possibly send success messgae
}