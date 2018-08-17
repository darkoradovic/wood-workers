<?php

   $email_form = 'Me@jkj.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                   "User Email: $email.\n".
                    "User Message: $message.\n";


    $to = "darmior5@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers = "Reply-to: $visitors_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");

?>