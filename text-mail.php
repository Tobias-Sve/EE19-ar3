<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require './PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                                 // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'tobias.riiser@elev.ntig.ga.se';                              // SMTP username
$mail->Password = 'eJK9SeQM12';                              // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('tobias.riiser@elev.ntig.ga.se', 'Mailer');
$mail->addAddress('tobias.riiser.games@gmail.com', 'Anders Andersson');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

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