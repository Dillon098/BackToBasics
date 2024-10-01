<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'yourdad@example.com';  // Replace with your dad's email address
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $emailBody = "<h1>Contact Form Submission</h1>";
    $emailBody .= "<p><strong>Name:</strong> $name</p>";
    $emailBody .= "<p><strong>Email:</strong> $email</p>";
    $emailBody .= "<p><strong>Phone:</strong> $phone</p>";
    $emailBody .= "<p><strong>Message:</strong> $message</p>";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo '<p>Thank you for your message. We will get back to you soon.</p>';
    } else {
        echo '<p>Sorry, something went wrong. Please try again later.</p>';
    }
}
?>
