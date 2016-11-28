<?php
    $to = "evrenior@mail.ru";
    $subject = "PHP Test message";
    $message = "Hello buddy";
    $headers   = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/plain; charset=iso-8859-1";
    $headers[] = "From: Sender Name <contact@evrenior.com>";
    $headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
    $headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
    $headers[] = "Subject: {$subject}";
    $headers[] = "X-Mailer: PHP/".phpversion();

    mail($to, $subject, $email, implode("\r\n", $headers));
?>