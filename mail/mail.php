<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields and sanitize input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Create the email content
    $email_message = "
    Name: ".$name."
    Email: ".$email."
    Phone: ".$phone."
    Subject: ".$subject."
    Message: ".$message."
    ";

    // Recipient email and subject
    $to = "hetp1815@gmail.com";  // Replace with your email
    $subject = "New Message from Website";

    // Send the email
    if (mail($to, $subject, $email_message)) {
        // Redirect to a success page
        header("Location: ../mail-success.html");
    } else {
        // If email sending fails
        echo "Error: Email not sent.";
    }
} else {
    // Redirect if accessed directly without form submission
    header("Location: ../contact-form.html");
    exit;
}
?>
