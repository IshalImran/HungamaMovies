<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $release_year = $_POST['release_year'];
    $genre = $_POST['genre'];

    // Insert new movie into the database
    $stmt = $conn->prepare("INSERT INTO movies (title, release_year, genre) VALUES (:title, :release_year, :genre)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':release_year', $release_year);
    $stmt->bindParam(':genre', $genre);
    $stmt->execute();

    // Redirect back to display_movies.php after adding movie
    header("Location: display_movies.php");
    exit();
}
?>

