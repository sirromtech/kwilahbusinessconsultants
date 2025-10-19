<?php
$to = "nathanpyamis@gmail.com"; // Your email
$subject = "New Contact Form Submission";

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subj = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

$body = "Name: $name\nEmail: $email\nSubject: $subj\nMessage:\n$message";
$headers = "From: $email";

// Send message to you
$mailSent = mail($to, $subject, $body, $headers);

// Auto-reply to user
$replySubject = "Thank you for contacting Kwilah Business Consultants";
$replyBody = "Hi $name,\n\nThank you for reaching out to Kwilah Kwilah Business Consultants. We've received your message and will get back to you shortly.\n\nBest regards,\nKwilah Team";
$replyHeaders = "From: nathanpyamis@gmail.com"; // Updated to your Gmail

$autoReplySent = mail($email, $replySubject, $replyBody, $replyHeaders);

if ($mailSent && $autoReplySent) {
  echo "Thank you! Your message has been sent and a confirmation email has been delivered.";
} else {
  echo "Sorry, there was an error sending your message.";
}
?>

