<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Prepare and execute the SQL query to delete the movie
    $stmt = $conn->prepare("DELETE FROM movies WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    // Redirect back to display_movies.php after deletion
    header("Location: display_movies.php");
    exit();
}
?>
