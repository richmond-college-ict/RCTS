<?php

/*
** PLEAE README THIS WHEN YOU ARE CHANGING THE HOSTNAME, USERNAME AND PASSWORD

* FULLY COMPATIBLE WITH UBUNTU, RED HAT, FEDORA AND CENT OS SERVERS
*/

$host = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "rcgtech";

// Create connection
$con = mysqli_connect($host, $username, $password, $db_name);

// check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
