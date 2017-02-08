<?php

    $headers          = [];
    $headers[]        = "MIME-Version: 1.0";
    $headers[]        = 'Content-type: text/plain; charset="utf-8"';
    $headers[]        = "From: ". $_POST['name'] ." ". $_POST['surname'] ." <contact@evrenior.com>";
    $headers[]        = "X-Mailer: PHP/".phpversion();
    $from                = 'contact@evrenior.com';
    $sendTo           = 'evrenior@mail.ru';
    $subject            = 'Резюме запрос evrenior.com';
    $fields               =  [
                                        'name'       => 'Name', 
                                        'surname' => 'Surname', 
                                        'phone'      => 'Phone', 
                                        'email'       => 'Email', 
                                        'message' => 'Message'
                                  ]; 
    $okMessage      = 'Thank you for your hiring request. I will get back to you soon';
    $errorMessage  = 'There was an error while submitting the form. Please try again later';
    $responseArray = [
                                        'type'         => 'danger', 
                                        'message' => $errorMessage
                                   ];

    try {
        $emailText = "Вам пришло сообщение из Резюме формы ". $_SERVER["SERVER_NAME"] ."\n";
        
        foreach ($_POST as $key => $value) {
            if (isset($fields[$key])) {
                $emailText .= "$fields[$key]: $value\n";
            }
        }

        mail($sendTo, $subject, $emailText, implode("\r\n", $headers));
        $responseArray['type']         = 'success';
        $responseArray['message'] = $okMessage;
    }
    catch (\Exception $e)
    {
        $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    }

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $encoded = json_encode($responseArray);
        header('Content-Type: application/json');
        echo $encoded;
    }
    else {
        echo $responseArray['message'];
    }