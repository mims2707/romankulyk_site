<?php
//проверяем значения полученые при проверке скриптом формы

 print_r($_POST);

  $txtname = trim($_POST['contactname']);

  $txtemail = trim($_POST['contactemail']);

  $txtmessage = trim($_POST['contactmessage']);

  // от кого
  $fromMail = 'mims2707@romankulyk.com';
  $fromName = 'Feedback';

  // Сюда введите Ваш email
  $emailTo = 'mims2707@gmail.com';

  $subject = 'Форма обратной связи';
  $subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
  $headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
  $headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

  // тело письма
  $body = "Получено письмо с сайта romankulyk.com\n\nИмя: $txtname\ne-mail: $txtemail \nСообщение: $txtmessage";
  if(mail($emailTo, $subject, $body, $headers, '-f'. $fromMail )){
   echo 'ok';
  }

 //die_json($json);
?>