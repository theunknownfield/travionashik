<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "nashik";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$placename = $_POST['placename'];
$review = $_POST['review'];


// Insert data into database
$sql = "INSERT INTO review (name, email,placename,review) VALUES ('$name', '$email', '$placename','$review')";

if ($conn->query($sql) === TRUE) {
    echo "Review is submitted";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
