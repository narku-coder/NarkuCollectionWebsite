<?php
// Basic connection settings
$servername = 'localhost';
$username = 'NarkuUser';
$password = 'V0113yb@11ru135';
$dbname = 'Collection';

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    echo 'Connection successful';
}
?>