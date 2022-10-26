<?php
/**
 * This is a simple example for sending a message using PHP's mail() function.
 */
 require '../SimpleAutoload.php';
 
 use \ILEBORA\SimpleMailer;
 
 //Create a new SimpleMailer instance and config
 $mail = (new SimpleMailer())
				->to("RECEPIENT EMAIL")
				->from("SENDER EMAIL")
				->subject("EMAIL SUBJECT")
				->body("YOUR MESSAGE");

if($mail->send()){
  echo 'Success:: ILEBORA Simple Mailer works fine!';
}else{
  echo 'Error:: '.$mail->error;
}
