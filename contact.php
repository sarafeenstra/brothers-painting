
<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

// Get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

// The email address that will receive the messages
$to = "sarabartelsfeenstra@gmail.com";
$subject = $_POST['subject'];
$headers = "From: gowiththebros@hotmail.com";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Phone = user entered phone number
// Message = user entered message
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage = " . $message;

if($email != NULL) {
    // Send email and redirect
    if(mail($to, $subject, $txt, $headers)) {
      echo "Succes!";  
      //header("Location:index.html?formSent=true");
    } else {
        //header("Location:index.html");
      echo "Not so succes!";  
    }
}
?>