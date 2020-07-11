<?php
require '../PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSMTP();                           
$mail->SMTPAuth   = true;                 
$mail->Host       = "smtp.gmail.com"; 
$mail->Port       = 587;                    
$mail->Username   = "dramakrishna0509@gmail.com"; 
$mail->Password   = "08mm183185"; 
$mail->setFrom('test@gmail.com', 'ICAR',0);
$mail->addAddress('ramakrishna.d@cartrade.com');

$mail->Subject = 'PHPMailer test';

$mail->msgHTML('<h1>Hi, Welcome</h1>');

// $mail->AltBody = 'This is a plaintext message body';

$mail->addAttachment('images/phpmailer_mini.png');


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
