<img src="/examples/images/simplemailer.png" alt="SImpleMailer"/>
# ILEBORA Simple Mailer – A simple email creation and transfer class for PHP

## Features
- Simple quick method chaining for the email setup

## A Simple Example

```php
<?php

 require 'SimpleAutoloader.php'; //Require the Simple Autoloader
 
 use \ILEBORA\SimpleMailer; //Import PHPMailer classes into the global namespace
 
 //Create a new SimpleMailer instance and setup it's config
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
```
