<?php
$_ENV['HOST'];

$host = 'localhost';
$db = 'contact_manager';
$user = 'root';  // change this to your MySQL username
$pass = '';  // change this to your MySQL password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
