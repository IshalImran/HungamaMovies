<?php
// Database configuration
$servername = "yazureprivatedns.net"; // database host name
$username = "Ishal Imran"; //  database username
$password = "9zSXnY+g89e-Df8"; //  database password
$database = "moviedatabase"; // database name

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
