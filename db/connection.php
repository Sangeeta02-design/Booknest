<?php
$servername = "localhost";
$username = "root";
$password = "MySQL@2002";
$dbname = "librarydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
