<?php
session_start();
require '../controller/connection.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$census_code = $_POST['census_code'];

if (empty($census_code)) {
    echo json_encode(['status' => 'error', 'message' => 'Census code is required.']);
    exit;
}

$stmt = $con->prepare("SELECT tic_email FROM techday WHERE census_number = ?");
$stmt->bind_param("s", $census_code);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $school = $result->fetch_assoc();
    $email = $school['tic_email']; 

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit;
    }

    $otp = rand(100000, 999999);

    $_SESSION['otp'] = $otp;
    $_SESSION['census_code'] = $census_code;

    $mail = new PHPMailer(true);

    try {
        // SMTP server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  
        $mail->SMTPAuth   = true;
        $mail->Username   = 'evildev360@gmail.com';  //  Gmail address
        $mail->Password   = 'ycxg zmzh irhu evqf'; //  App Password here
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email headers and content
        $mail->setFrom('evildev360@gmail.com', 'Richmond College');
        $mail->addAddress($email); // Recipient email
        $mail->isHTML(true);
        $mail->Subject = 'Your OTP Code';
        $mail->Body    = 'Your OTP code for project submission is: <strong>' . $otp . '</strong>';

        // Send the email
        $mail->send();
        header('location: ../pages/otp-verification.php?email='.$email.'');
    } catch (Exception $e) {
        error_log($e->getMessage(), 3, '../logs/error.log'); // Log the error
        echo json_encode(['status' => 'error', 'message' => 'Failed to send email. Error: ' . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Census code not found.']);
}
?>

