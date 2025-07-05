<?php
include("controller/connection.php");

$ip_address = $_SERVER['REMOTE_ADDR'];

$sql = "INSERT INTO page_views (ip_address) VALUES ('$ip_address')";

$con->query($sql);

$con->close();
?>
