<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hello@hemantap.com.np";
    $subject = "New Subscription";
    $email = $_POST["subscribe-form-email"];

    // Create the email message
    $message = "New subscription request from: " . $email;

    // Set headers
    $headers = "From: webmaster@example.com" . "\r\n" .
        "Reply-To: webmaster@example.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect back to the same page with a success message
    header("Location: /?status=success");
    exit();
}
?>
