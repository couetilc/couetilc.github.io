<?php
  $to = "couetilc@gmail.com";
  $email = $_REQUEST['email'] ;
  $name = $_REQUEST['name'] ;
  //$site = $_REQUEST['site'] ;
  $subject = 'Message from $name (couetilc.github.io)' ;
  $message = $_REQUEST['message'] ;
  $headers = "noreply@gmail.com";
  $body = "From: $name \n\n Email: $email \n\n Message: $message";
  $sent = mail($to, $subject, $body, $headers) ;
  if($sent)
    {echo "<script language=javascript>alert('Send Successful');</script>";}
  else
    {echo "<script language=javascript>alert('Send Failed')</script>";}
?>