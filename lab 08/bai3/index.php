<?php
// Include the PHPMailer autoloader or require the necessary files
// For example, if using PHPMailer, you might have something like:
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Your email configuration settings, such as SMTP server, username, password, etc.
$mail->isSMTP();
$mail->Host = 'mailsend.com';
$mail->SMTPAuth = true;
$mail->Username = 'pronam47@gmail.com';
$mail->Password = 'qagvdaydgyhhuagywfa';
$mail->Port = 587; // Adjust as needed

// Set other email settings
$mail->setFrom('pronam47@gmail.com', 'Hoai Nam');
$mail->Subject = 'Your Subject';
$mail->Body = 'Your email body content';

// List of recipients
$recipients = "longaj78@test.com,boh12@test.com,phiavg@test.com";

// Explode the list into an array
$email_array = explode(",", $recipients);

// Loop through each recipient and send the email
foreach ($email_array as $email) {
    $to = trim($email);
    $mail->addAddress($to);

    // Optionally, you can set a different name for each recipient
    // $mail->addAddress($to, 'Recipient Name');

    // Send the email
    if (!$mail->send()) {
        echo 'Error sending email to ' . $to . ': ' . $mail->ErrorInfo;
    } else {
        echo 'Email sent to ' . $to . '<br>';
    }

    // Clear all addresses for the next iteration
    $mail->clearAddresses();
}
?>