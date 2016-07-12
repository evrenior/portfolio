<?php

// configure
$from = 'contact@evrenior.com';
$sendTo = 'evrenior@mail.ru';
$subject = 'Резюме запрос evrenior.com';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in email
$okMessage = 'Thank you for your hiring request! I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending

try
{
    $emailText = "Вам пришло сообщение из Контакт формы резюме\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }
    
    $headers   = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = 'Content-type: text/plain; charset="utf-8"';
    $headers[] = "From: ". $_POST['name']. " " . $_POST['surname'] ." <contact@evrenior.com>";
    $headers[] = "X-Mailer: PHP/".phpversion();

    mail($sendTo, $subject, $emailText, implode("\r\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
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
?>