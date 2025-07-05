<?php
session_start();
if (isset($_SESSION['email'])) {
	if (isset($_POST['change_pwd'])) {
	    include '../controller/connection.php';
	    $old_pwd = $_POST['old_pwd'];
	    $new_pwd = $_POST['new_pwd'];
	    $c_new_pwd = $_POST['c_new_pwd'];
	    $email = $_GET['email'];

	    $sql1 = "SELECT password, email FROM user_tbl WHERE email='$email'";
	    $result1 = mysqli_query($con, $sql1);
	    if (mysqli_num_rows($result1)  < 2) {
	        $data = mysqli_fetch_assoc($result1);
	        $o_pwd = $data['password'];
	        if (password_verify($old_pwd, $o_pwd)) {
	            if ($new_pwd == $c_new_pwd) {
	                $sql2 = "UPDATE user_tbl SET password='" . password_hash($new_pwd, PASSWORD_DEFAULT) . "' WHERE email='$email'";
	                if (mysqli_query($con, $sql2)) {
	                    $sm = "The password has been changed successfully!";
	                    header("Location: ../pages/settings.php?success=$sm");
	                    exit;
	                }
	            } else {
	                $em = "Enter the New Password Correctly!";
	                header("Location: ../pages/settings.php?error=$em");
	                exit;
	            }
	        } else {
	            $em = "Incorrect Old Passowrd";
	            header("Location: .../pages/settings.php?error=$em");
	            exit;
	        }
	    }

	}
} //$2y$10$OgCPGWJ970ihZX4V51aCneg8fmZ/nmGz9IWDfv4LdIT9LSvQ4PRMq
?>