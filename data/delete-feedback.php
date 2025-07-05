<?php
session_start();
if (isset($_SESSION['email'])) {
    include '../controller/connection.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM review_tbl WHERE id='$id'";
    if(mysqli_query($con, $sql)) {
        $sm = "Feedback Deleted";
        header("Location: ../pages/all-feedbacks.php?success=$sm");
        exit;
    } else {
        $em = "Unknown error occurred";
        header("Location: ../pages/all-feedbacks.php?error=$em");
        exit;
    }
}
?>