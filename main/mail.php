<?php 
    $name = $_REQUEST['name'];
    $visitor_email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    $email_from = 'info@sauravdutt.tech';
    $email_subject = "New Contact-Form Submission";

    $email_body = "User Name:\n$name. \n" .
                    "User Email:\n$visitor_email.\n".
                    "User Message:\n$message. \n";
    
    $to = 'sauravd069@gmail.com';

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    

    mail($to, $email_subject, $email_body, $headers);

    echo "<script type='text/javascript'>
    alert('Message sent successfully !!');
    window.history.go(-1);
    </script>";


?>
