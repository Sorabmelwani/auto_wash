<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';  //mailtrap SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = '9bc4ccee86cc38';   //username
    $mail->Password = '5ab219937900a1';   //password
    $mail->Port = 25;                    //smtp port

    $mail->setFrom('sorabkumarsk.sk@gmail.com', 'Artisans Web');
    $mail->addAddress('sorabkumarsk.sk@gmail.com', 'Sorab');

    $mail->isHTML(true);

    $mail->Subject = 'Mailtrap Email';
    $mail->Body    = 'Hello User, <p>This is a test mail sent through Mailtrap SMTP</p><br>Thanks';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}