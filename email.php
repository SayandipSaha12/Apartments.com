<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verify file paths - adjust these to your actual file locations
$phpmailer_path = __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
$smtp_path = __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';
$exception_path = __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';

// Check if files exist
if (!file_exists($phpmailer_path) || !file_exists($smtp_path) || !file_exists($exception_path)) {
    die("Error: Required PHPMailer files not found. Please verify your file paths.");
}

require $phpmailer_path;
require $smtp_path;
require $exception_path;

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Enable verbose debug output
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Use your actual SMTP host (e.g., smtp.gmail.com for Gmail)
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@gmail.com'; // Your email address
    $mail->Password = 'your_app_password';    // Your email password or app-specific password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Set timeout
    $mail->Timeout = 30;
    
    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');
    $mail->addReplyTo('your_email@gmail.com', 'Your Name');
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email Subject';
    $mail->Body = '<h1>This is HTML email body</h1><p>This is a test email sent using PHPMailer.</p>';
    $mail->AltBody = 'This is the plain text version of the email content';
    
    // Attempt to send email
    if (!$mail->send()) {
        throw new Exception('Email could not be sent. Mailer Error: ' . $mail->ErrorInfo);
    }
    
    echo "Message has been sent successfully!";
    
} catch (Exception $e) {
    echo "Message could not be sent. Error details:<br>";
    echo "Error message: " . $e->getMessage() . "<br>";
    echo "File: " . $e->getFile() . "<br>";
    echo "Line: " . $e->getLine() . "<br>";
}
?>