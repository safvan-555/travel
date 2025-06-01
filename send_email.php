<?php
require 'libraries/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';


if (empty($name) || empty($phone)) {
    echo json_encode([
        'success' => false,
        'message' => 'Please fill all required fields'
    ]);
    return;
}


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your_email@gmail.com'; 
    $mail->Password   = 'your_app_password';   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port       = 465;

    $mail->setFrom('your_email@gmail.com', 'Tour Booking');
    $mail->addAddress('recipient@example.com', 'Recipient Name');
    $mail->addReplyTo($email, $name); 
    $mail->isHTML(true);
    $mail->Subject = 'New Tour Booking: ' . $tour_type;

    $email_body = "
        <h2>New Tour Booking Request</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> " . ($phone ?: 'Not provided') . "</p>
        <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
        <hr>
        <p>This email was sent from your website booking form.</p>
    ";
    
    $mail->Body = $email_body;
    $mail->AltBody = strip_tags($email_body); 

    $mail->send();
    
    echo json_encode([
        'success' => true,
        'message' => 'Your booking request has been sent successfully!'
    ]);
    
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
    ]);
}