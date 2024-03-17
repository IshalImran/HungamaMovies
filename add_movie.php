<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Movie</title>
</head>
<body>
    <h2>Add New Movie</h2>
    <form method="post" action="add_movie_process.php">
        <label>Title:</label>
        <input type="text" name="title" required><br>
        <label>Release Year:</label>
        <input type="text" name="release_year" required><br>
        <label>Genre:</label>
        <input type="text" name="genre" required><br>
        <input type="submit" value="Add Movie">
    </form>
</body>
</html>
