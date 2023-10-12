<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if required fields are set
  if (!isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    echo 'Please fill in all the required fields';
    exit;
  }

  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $message = $_POST['message'];

  // Process and send email using a mail function or a library like PHPMailer
  // ...
  // Here's an example using the mail function
  $to = 'devbhuva1206@gmail.com';
  $subject = 'New message from website contact form';
  $message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    echo 'Email sent successfully!';
  } else {
    // Error sending email
    echo 'Error occurred while sending email';
  }
}
?>