<?php
$host = 'yazureprivatedns.net';
$dbname = 'moviedatabase';
$username = 'Ishal Imran';
$password = '9zSXnY+g89e-Df8';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO to throw exceptions on errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
