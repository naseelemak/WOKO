<?php
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 4; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = 'wokomailer@gmail.com';
    $mail->Password = 'Wokofyp121';

    $mail->setFrom('wokomailer@gmail.com', 'WOKO');
    $mail->addAddress('taseelemak@gmail.com');
    $mail->Subject = 'SMTP email test';
    $mail->Body = 'Hi';

    if ($mail->send())
        echo "Mail sent successfully";
    else
        echo $mail->ErrorInfo;

?>