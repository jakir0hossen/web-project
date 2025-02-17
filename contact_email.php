<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;                      // Disable verbose debug output
        $mail->isSMTP();                           // Use SMTP
        $mail->Host = 'smtp.gmail.com';            // SMTP server
        $mail->SMTPAuth = true;                    // Enable SMTP authentication
        $mail->Username = 'jhbjakir@gmail.com';    // SMTP username (your Gmail address)
        $mail->Password = 'keaxyfvlxszsypaj';      // SMTP password (your Gmail app password)
        $mail->SMTPSecure = 'tls';                 // Enable TLS encryption
        $mail->Port = 587;                         // TCP port to connect to

        // Recipients
        $mail->setFrom('jhbjakir@gmail.com', 'LU Magazine'); // Sender email and name
        $mail->addAddress('jhbjakir@gmail.com', 'Recipient Name'); // Recipient email and name

        // Content
        $mail->isHTML(true);                       // Set email format to HTML
        $mail->Subject = 'New Message from LU Magazine Contact Form'; // Email subject
        $mail->Body    = "Name: $name<br>Email: $email<br>Message: $message"; // Email body

        // Send the email
        $mail->send();
        echo "Email Sent";
    } catch (Exception $e) {
        echo "Email sending failed. Error: {$mail->ErrorInfo}";
    }
}
?>