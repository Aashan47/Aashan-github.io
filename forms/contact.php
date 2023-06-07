<?php
  // Set the recipient email address
  $recipient_email = 'aashanjaved567@gmail.com';

  // Get the form submission data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set the email headers
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

  // Construct the email message
  $email_message = "<html><body>";
  $email_message .= "<h1>New Contact Form Submission</h1>";
  $email_message .= "<p><strong>Name:</strong> $name</p>";
  $email_message .= "<p><strong>Email:</strong> $email</p>";
  $email_message .= "<p><strong>Subject:</strong> $subject</p>";
  $email_message .= "<p><strong>Message:</strong><br>$message</p>";
  $email_message .= "</body></html>";

  // Send the email
  $email_sent = mail($recipient_email, $subject, $email_message, $headers);

  // Check if the email was sent successfully
  if ($email_sent) {
    echo "Email sent successfully.";
  } else {
    echo "Error: Failed to send email.";
  }
?>
