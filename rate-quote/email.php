<?php

if (count($_POST) > 0) {
  $clientEmail = $_POST['email'];
  $clientName  = $_POST['name'];
  $clientPhone = $_POST['phone'];


$to      = 'm.brown@crmtg.biz';
$subject = 'Client Rate Quote';
$message = "Hello, you had a new query for credit made by the client:  $clientName  your e-mail is $clientEmail and your contact number is $clientPhone";
$headers = 'From: m.brown@crmtg.biz' . "\r\n" .
           'Reply-To: m.brown@crmtg.biz' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

$retval = mail($to, $subject, $message, $headers);
if( $retval == true ) {
  echo 1;
} else {
  echo 0;
}

} else return 0;
/**
  $to      = 'hiury@energynow.com.br';
  $subject = 'Subject';
  $message = "Hello! ";
  $headers = 'From: hiuryoliveira117@gmail.com' . "\r\n" .
             'Reply-To: hiuryoliveira117@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  $retval = mail($to, $subject, $message, $headers);

  if( $retval == true ) {
    echo "Message sent successfully...";
  }else {
    echo "Message could not be sent...";
  }
*/