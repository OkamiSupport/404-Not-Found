<?php

  //邮件发送
  function sendmail($email,$subject,$message)
  {
    //mail函数预留
    $to = $email;
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $from_email = 'www@someant.com';
    $headers = "From: $from";
    mail($to,$subject,$message,$headers);
  }


?>
