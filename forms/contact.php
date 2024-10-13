<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once __DIR__ . '/../classes/vendor/autoload.php';

// Check if form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form fields and sanitize input (prevent XSS)
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Set response header to JSON
    header('Content-Type: application/json');

    // Check if all required fields are filled
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        $response = [
            'status' => 0,
            'title' => 'Warning!',
            'message' => 'All form fields are required.'
        ];
        echo json_encode($response);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response = [
            'status' => 0,
            'title' => 'Warning!',
            'message' => 'Invalid email format.'
        ];
        echo json_encode($response);
        exit;
    }

    // Validate phone number 
    if (!empty($phone) && !preg_match('/^\d{10}$/', $phone)) {
        $response = [
            'status' => 0,
            'title' => 'Warning!',
            'message' => 'Invalid phone number format.'
        ];
        echo json_encode($response);
        exit;
    }

    // Recipient email
    $to = "dirtiesprite@proton.me";

    // Subject of the email
    $email_subject = "Contact Form Submission: $subject";

    // Email body
    $email_body = "You have received a new message from the contact form on your website.\n\n" .
             "Here are the details:\n" .
             "Name: $name\n" .
             "Email: $email\n" .
             "Phone: $phone\n" .
             "Subject: $subject\n" .
             "Message:\n$message";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email using PHPMailer (more secure)
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com'; 
        $mail->Port = 465; 
        $mail->Username = 'dsprite496@gmail.com'; 
        $mail->Password = 'rurw mqom txht mxxl'; // App password 
        //$mail->Password = getenv('SMTP_APP_PASSWORD'); // Use env variable for security
        $mail->SMTPSecure = 'tls';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  //Enable verbose debug output(development environment)

        $mail->setFrom($email, $name);
        $mail->addAddress($to);
        $mail->Subject = $email_subject;
        $mail->Body = $email_body;
        //$mail->IsHTML(true); // Enable HTML email format
        //$mail->AltBody = $email_body; // Set email body in plain text for non-HTML mail clients

        $mail->send();

        $response = [
            'status' => 1,
            'title' => 'Success!',
            'message' => 'Message sent successfully.'
        ];
        echo json_encode($response);
        exit;

    } catch (Exception $e) {
        $response = [
            'status' => 0,
            'title' => 'Error',
            'message' => 'Message not sent! Error: ' . $e->getMessage(). '. Please try again.' 
        ];
        echo json_encode($response);
        exit;
    }
} else {
    echo json_encode([
        'status' => 0,
        'title' => 'Error!',
        'message' => 'Invalid request method! Please try again.'
    ]);
    exit;
}

?>