<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booklet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("DB Connection failed: " . mysqli_connect_error());
}
?>
