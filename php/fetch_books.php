<?php
// Database connection details
/*
include 'db.php';

$sql = "SELECT * FROM BookTable";
$stmt = $conn->prepare($sql);
$stmt->execute();

$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($books);
*/


$host = 'localhost';
$dbname = 'collection';
$username = 'NarkuUser';
$password = 'V0113yb@11ru135';

// Connecting to MariaDB
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to fetch data
    $sql = "SELECT * FROM BookTable";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all rows and convert to JSON format
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($books);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>