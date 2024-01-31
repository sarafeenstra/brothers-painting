<?php
  // /**
  // * Requires the "PHP Email Form" library
  // * The "PHP Email Form" library is available only in the pro version of the template
  // * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  // * For more info and help: https://bootstrapmade.com/php-email-form/
  // */

  // // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'sarabartelsfeenstra@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();

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
