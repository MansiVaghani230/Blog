<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "mansivaghani63@gmail.com";

    $errors = array();

    if($_POST['name'] == null) {
        $errors['name'] = "Name should not be empty";
    }
    if($_POST['email'] == null) {
        $errors['email'] = "Email should not be empty";
    }
    if($_POST['subject'] == null) {
        $errors['subject'] = "Subject should not be empty";
    }
    if($_POST['message'] == null) {
        $errors['message'] = "Message should not be empty";
    }


    $header = "From: " . $name . "\r\n" ;
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $text = "You have received an email from " .$name."\r\nEmail: " . $email . "\r\n Message: " . $message ;

    if($email != null){
        mail($to, $subject, $text, $headers);
        header('Location: contactus.php?status=success');
    } else {
        $query = http_build_query($errors);
        header('Location: contactus.php?' . $query);
    }

   ?>