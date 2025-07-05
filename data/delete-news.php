<?php 
include('../controller/connection.php');
$id = $_GET['id'];

$sql = "DELETE FROM `news_tbl` WHERE id='$id'";

if ($con->query($sql) === TRUE) {
    header('Location: ../pages/news-list.php?code=del_success');
    exit();  
} else {
    header('Location: ../pages/news-list.php?code=sql_error');
    exit();  }
?>
