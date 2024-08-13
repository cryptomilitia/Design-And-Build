<?php

//Check if form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form fields and sanitize input (prevent XSS)
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars($_POST['message']); 

    // Check if all fields are filled
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        echo "<div class='required-msg text-bg-warning'>
                <h2>Warning!</h2>
                <p>All form fields are required</p>
              </div>";
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='error-msg text-bg-danger'>
                <h2>Error!</h2>
                <p>Invalid email format</p>
              </div>";
        exit();
    }

    // Recipient email
    $to = "materedesignandbuild.com";

    // Subject of the email
    $email_subject = "Contact Form Submission: $subject";

    // Email body
    $email_body = "You have received a new message from the contact form on your website.\n\n".
                  "Here are the details:\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Phone: $phone\n".
                  "Subject: $subject\n".
                  "Message:\n$message";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<div class='success-msg text-bg-success'>
                <h2>Success!</h2>
                <p>Message sent successfully. We will reply shortly</p>
            </div>";
    } else {
        echo "<div class='fail-msg text-bg-danger'>
                <h2>Failed!</h2>
                <p>Message not sent! Please try again</p>
            </div>";
    }
} else {
    echo "<div class='error-msg text-bg-danger'>
            <h2>Error!</h2>
            <p>Invalid request method! Please try again</p>
        </div>";
}
?>

<style>

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .success-msg,
    .required-msg,
    .fail-msg, 
    .error-msg {
        font-size: 25px;
        font-weight: bold;
        padding: 25px;
        text-align: center;
    }

</style>

<!-- Include Bootstrap JS and dependencies from the latest version -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
