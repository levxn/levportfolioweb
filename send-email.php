<?php
if(isset($_POST['submit'])) {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['comments'];

  // Set recipient email address
  $to = "mslevin.active.com";

  // Set email headers
  $headers = "From: ".$name." <".$email.">\r\n";
  $headers .= "Reply-To: ".$email."\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  // Compose email message
  $email_message = "Name: ".$name."\n";
  $email_message .= "Email: ".$email."\n\n";
  $email_message .= "Subject: ".$subject."\n\n";
  $email_message .= "Message:\n".$message."\n";

  ini_set('SMTP', 'smtp.gmail.com');
  ini_set('max_execution_time', 120); // 120 seconds (2 minutes)
  ini_set('memory_limit', '256M'); // 256 megabytes

  // Send email
  if(mail($to, $subject, $email_message, $headers)) {
    // Email sent successfully
    echo "Thanks for submitting.";
  } else {
    // Failed to send email
    echo "Submit Failed. Retry.";
  }
}

// if(isset($_POST['submit'])) {
//   // Get form data
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $subject = $_POST['subject'];
//   $message = $_POST['comments'];

//   // Set recipient email address
//   $to = "mslevin.active@gmail.com";

//   // Set email headers
//   $headers = "From: ".$name." <".$email.">\r\n";
//   $headers .= "Reply-To: ".$email."\r\n";
//   $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

//   // Set additional ini values
//   ini_set('SMTP', 'smtp.gmail.com');
//   ini_set('smtp_port', '25');
//   ini_set('sendmail_from', 'info@example.com');

//   // Compose email message
//   $email_message = "Name: ".$name."\n";
//   $email_message .= "Email: ".$email."\n\n";
//   $email_message .= "Subject: ".$subject."\n\n";
//   $email_message .= "Message:\n".$message."\n";

//   // Set maximum execution time and memory limit for the script
//   ini_set('max_execution_time', 10); // 300 seconds (5 minutes)
//   ini_set('memory_limit', '256M'); // 256 megabytes

//   // Send email
//   if(mail($to, $subject, $email_message, $headers)) {
//     // Email sent successfully
//     echo "Thanks for submitting.";
//   } else {
//     // Failed to send email
//     echo "Failed to submit. Retry";
//   }
// }
?>
