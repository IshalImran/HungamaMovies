<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search and Filter Movies</title>
</head>
<body>
    <h2>Search and Filter Movies</h2>
    <form method="get" action="display_movies.php">
        <label>Title:</label>
        <input type="text" name="title"><br>
        <label>Genre:</label>
        <input type="text" name="genre"><br>
        <label>Release Year:</label>
        <input type="text" name="release_year"><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>
