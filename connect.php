<?php
$host = "localhost";
$server = "root";
$pass = "";
$dbname = "pre-enroll_db";

$con = new mysqli($host, $server, $pass, $dbname);

if($con->connect_error) {
    die("<div class='error'>Connection Error: " . $con->connect_error . "</div>");
} 
?>