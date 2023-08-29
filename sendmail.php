<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions


function send_mail($to,$to_name,$subject,$text){

    try {
        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Enable verbose debug output (change to DEBUG_SERVER for detailed server logs)
        $mail->isSMTP(); // Send using SMTP
        $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth   = true; // Enable SMTP authentication
        $mail->Username   = 'ps005196@gmail.com'; // SMTP username
        $mail->Password   = 'lutiuotlxkidjwov'; // SMTP password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port       = 587; // TCP port to connect to
    
        // Recipients
        $mail->setFrom('ps005196@gmail.com', 'Website Form'); // Sender's email and name
        $mail->addAddress($to,$to_name); 
    
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $text;
    
        $mail->send();
       return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
