<?php
session_start();
if (isset($_SESSION['email'])) {
    if(isset($_POST['change_email'])) {
        include '../controller/connection.php';
        $new_email = $_POST['new_email'];
        $email = $_GET['email'];
        $sql = "UPDATE user_tbl SET email='$new_email' WHERE email='$email'";
        if(mysqli_query($con, $sql)) {
            $sm = "Email Updated to $new_email. Now you should logout from the website now.";
            header("Location: ../pages/settings.php?success=$sm");
            exit;
        } else {
            $em = "Unknown error occurred";
            header("Location: ../pages/settings.php?error=$em");
            exit;
        }
    }
}

?>