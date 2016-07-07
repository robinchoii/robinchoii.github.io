<?php

if(empty($_POST['name'])      ||
 empty($_POST['email'])     ||
 empty($_POST['phone'])     ||
 empty($_POST['message']) ||
 !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
  echo "No arguments Provided!";
  return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'robinchoii@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
  // if(isset($_POST['submit'])) {
  //       $name = $_POST['name'];
  //       $email = $_POST['email'];
  //       $message = $_POST['message'];
  //       $from = $_POST['name'];
  //       $to = "robinchoii@gmail.com";
  //       $subject = "Message from " + $name;
  //       $body = "From: $name\n E-Mail: $email\n Message:\n $message";

  //     if (!$_POST['name']) {
  //       $errName = 'Please enter your name';
  //     }
  //     // <!-- Check if email has be entered and is valid -->
  //     if (!$_POST['email'] || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //       $errEmail = "Please enter a valid email address";
  //     }
  //     // <!-- Check is message has been entered -->
  //     if (!$_POST['message']) {
  //       $errMessage = "Please enter a message";
  //     }
  //     if (!$errName && !$errEmail && !$errMessage) {
  //       if (mail ($to, $subject, $body, $from)) {
  //         $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
  //       } else {
  //         $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
  //       }
  //     }
  //   }
?>
<!--         // $human = intval($_POST['human']);
        // $headers = 'From: robinchoii@gmail.com' . "\r\n" .
        //            'Reply-To: $email' . "\r\n" .
        //           'X-Mailer: PHP/' . phpversion();
        // mail($to, $subject, $body, $headers);
        // echo $result = "<div class="alert alert-success">Thank you! I will keep in touch</div>";


      // if ($human !== 5) {
      //   $errHuman = "Human or no?";
      // }
 -->