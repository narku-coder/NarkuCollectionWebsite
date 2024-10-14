<?php
include 'db.php'; // Database connection

$title = $_POST['title'];
$author = $_POST['author'];
$year_published = $_POST['yearPublished'];
$publisher = $_POST['publisher'];

// Step 3: Insert data into the database using a prepared statement
$sql = "INSERT INTO BookTable (title, author, year_published, publisher) VALUES (?, ?, ?, ?)";

// Prepare statement
$stmt = $conn->prepare($sql);
echo $sql;
// Bind parameters (s = string, i = integer, d = double)
$stmt->bind_param("ssis", $title, $author, $year_published, $publisher);
echo $sql;
// Execute the query
if ($stmt->execute()) {
    echo "New book added successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Step 4: Close the connection
$stmt->close();
$conn->close();
?>