<?php
session_start();
require_once '../controller/connection.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST['password'])) {
        $em = "Password must contain only numbers and letters!";
        header("Location: ../login.php?error=$em");
        exit;
    } else {
        $pswd = $_POST['password'];
    }

    $sql1 = "SELECT * FROM user_tbl ut INNER JOIN role_tbl rt ON (ut.user_id = rt.role_id) WHERE email='$email'";
    $result1 = mysqli_query($con, $sql1);

    if (mysqli_num_rows($result1) == 1) {
        $user = mysqli_fetch_assoc($result1);
        $user_email = $user['email'];
        $db_pwd = $user['password'];
        $user_name = $user['name'];
        if ($email === $user_email) {
            if (password_verify($pswd, $db_pwd)) {
                $_SESSION['email'] = $email;
                $_SESSION['email'] = $email;
                header("location: ../pages/dashboard.php");
            } else {
                $em = "Incorrect Password";
                header("location: ../login.php?error=$em");
                exit;
            }
        } else {
            $em = "Incorrect Email";
            header("location: ../login.php?error=$em");
            exit;
        }
    } else {
        $em = "No email!";
        header("location: ../login.php?error=$em");
        exit;
    }
}
