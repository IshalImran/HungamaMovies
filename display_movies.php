<?php
include 'db_connect.php';

$stmt = $conn->query("SELECT * FROM movies");
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie Database</title>
</head>
<body>
    <h2>Movie Database</h2>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Release Year</th>
            <th>Genre</th>
        </tr>
        <?php foreach ($movies as $movie): ?>
        <tr>
            <td><?php echo $movie['title']; ?></td>
            <td><?php echo $movie['release_year']; ?></td>
            <td><?php echo $movie['genre']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
