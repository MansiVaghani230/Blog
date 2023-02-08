<?php

   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $usermessage = $_POST['message'];
    $to = "mansivaghani63@gmail.com";
    $subject = "Message";

$header = "From: " . $name . "\r\n" ;

    $text = "You have received an email from " .$name."\r\nEmail: " . $email . "\r\n Message: " . $message ;

    if($email != null){
        mail($to, $subject, $text, $headers);
        header('Location: welcome.php');
    }
   ?>