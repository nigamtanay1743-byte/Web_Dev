<?php

$server = "localhost";
$username = "root";  
$password = "";      
$dbname = "portfolio_db";

$conn = new mysqli($server, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name  = $conn->real_escape_string($_POST['name']);
$phone = $conn->real_escape_string($_POST['phone']);
$email = $conn->real_escape_string($_POST['email']);

$sql = "INSERT INTO contacts (name, phone, email) 
        VALUES ('$name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Thank you! Your message has been submitted.</h2>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
