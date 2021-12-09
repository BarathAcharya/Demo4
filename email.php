<?php
if ($_POST['submit']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST["subject"];
    $message = $_POST['message'];
    $from = 'From: webdesignandhosting.in'; 
    $to = 'barath270@gmail.com'; 
    $subject = 'Email Inquiry from website';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    if (mail ($to, $subject, $body, $from)) { 
       $success = "Thank you for contacting us! One of Our Representative will get back to you soon.";
    } else {
        $success = "Message Sending Failed, try again";
    }
}

?>