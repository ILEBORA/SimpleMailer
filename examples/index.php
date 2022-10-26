<?php
/**
 * This is a simple example for sending a message using PHP's mail() function.
 */
 require '../SimpleAutoloader.php';
 
 use \ILEBORA\SimpleMailer;
 
 //Create a new SimpleMailer instance and set it up
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
