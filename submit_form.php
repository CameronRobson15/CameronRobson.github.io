<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['Phone']);
    $message = htmlspecialchars($_POST['message']);

    // Email configuration
    $to = 'Cameron.robson15@gmail.com';
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to the top of the website
        header('Location: /#contact');
        exit;
    } else {
        echo 'There was an error sending your message. Please try again later.';
    }
}
?>
