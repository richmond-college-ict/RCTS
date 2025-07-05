<?php 
include('../controller/connection.php');
$id = $_GET['id'];

$sql = "DELETE FROM `nextgen` WHERE id='$id'";

if ($con->query($sql) === TRUE) {
    header('Location: ../pages/nextgen.php?code=del_success');
    exit();  
} else {
    header('Location: ../pages/nextgen.php?code=sql_error');
    exit();  }
?>
