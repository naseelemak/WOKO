<?php
    date_default_timezone_set('Etc/UTC');
    require 'phpmailer/PHPMailerAutoload.php';
    
    include 'functions-mailer.php';

    $msg = '';


    function sendConfirmation($name, $username, $email, $key)
    {
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPDebug = 4; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = 'wokomailer@gmail.com';
        $mail->Password = 'hidden';

        $mail->setFrom('wokomailer@gmail.com', 'The WOKO Team');
        $mail->addAddress('taseelemak@gmail.com');
        $mail->Subject = 'Confirm your email address';
        $mail->Body = format_confirmation($name, $username, $key);

        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Confirmation email sent! Please check your inbox.';
        }
    }
    
    function sendContact($name, $email, $category, $message)
    {
        /**
         * This example shows how to handle a simple contact form.
         */        
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        
        //Tell PHPMailer to use SMTP - requires a local mail server
        //Faster and safer than using mail()
        $mail->isSMTP();
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->Username = 'wokomailer@gmail.com';
        $mail->Password = 'hidden';

        $mail->setFrom('wokomailer@gmail.com', 'The WOKO Team');
        
        //Send the message to yourself, or whoever should receive contact for submissions
        $mail->addAddress('taseelemak@gmail.com', 'Jaedon');
        
        //Put the submitter's address in a reply-to header
        //This will fail if the address provided is invalid,
        //in which case we should ignore the whole request
        if ($mail->addReplyTo($email, $name)) 
        {
            $mail->Subject = '['. $category .'] WOKO contact form';            
            //Keep it simple - don't use HTML
            $mail->isHTML(false);
            //Build a simple message body
            $mail->Body = <<<EOT
Email: {$email}
Name: {$name}
Category: {$category}

Message: {$message}
EOT;
            //Send the message, check for errors
            if (!$mail->send()) 
            {
                //The reason for failing to send will be in $mail->ErrorInfo
                //but you shouldn't display errors to users - process the error, log it on your server.
                $msg = 'Sorry, something went wrong. Please try again later.';
            } 
            else 
            {
                $msg = 'Message sent! Thanks for contacting us.';
            }
        } 
        else 
        {
            $msg = 'Invalid email address, message ignored.';
        }
        
        return $msg;
    }

    function sendPasswordReset($name, $email, $id, $code)
    {
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = 'wokomailer@gmail.com';
        $mail->Password = 'hidden';

        $mail->setFrom('wokomailer@gmail.com', 'The WOKO Team');
        $mail->addAddress("taseelemak@gmail.com");
        $mail->Subject = 'Password reset';
        $mail->Body = format_reset($name, $id, $code);

        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Password reset email sent! Please check your inbox.';
        }
    }

?>
