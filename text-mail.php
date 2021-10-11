<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require './diana-apl/sketch-hostterm/PHPMailer/src/PHPMailer.php';
require './diana-apl/sketch-hostterm/PHPMailer/src/SMTP.php';
require './diana-apl/sketch-hostterm/PHPMailer/src/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); 

$mail->CharSet="UTF-8";
$mail->Host = "smtp.gmail.com";
$mail->SMTPDebug = 1; 
$mail->Port = 465 ; //465 or 587

 $mail->SMTPSecure = 'ssl';  
$mail->SMTPAuth = true; 
$mail->IsHTML(true);                             

// Enable SMTP authentication
$mail->Username = 'scrap.mail.bingo@gmail.com';                                 // SMTP username
$mail->Password = 't0%670waQ6*mShzjI5';                              
// SMTP password
$mail->SMTPSecure = 'tls';                            
// Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    
// TCP port to connect to

$mail->setFrom('scrap.mail.bingo@gmail.com', 'Mailer');
$mail->addAddress('tobias.riiser.games@gmail.com', 'Anders Andersson');     
// Add a recipient
//$mail->addAddress('ellen@example.com');               
// Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         
// Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    
// Optional name
//$mail->isHTML(true);                                 
// Set email format to HTML
    
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>