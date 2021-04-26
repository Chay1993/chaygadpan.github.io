<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert= '';

if(isset(@_POST['submit'])){
    $name = $POST['name'];
    $email = $POST['email'];
    $message = $POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '56402592.t03l01@gmail.com';
        $mail->Password = 'chay1103100202608';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setForm = ('56402592.t03l01@gmail.com');
        $mail->addAddress = ('56402592.t03l01@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body = '<h3>Name : $name <br>Email : $email <br>Message : $message</h3>';

        $mail->send();
        $alert =    '<div class="alert-success">
                        <span>Message Sent! thank you for contacting us.</span>
                    </div>';
    } catch (Exception $e){
        $alert =    '<div class="alert-error">
                        <span>'.$e->getMessage().'</span>
                    </div>';
    }
}
?>