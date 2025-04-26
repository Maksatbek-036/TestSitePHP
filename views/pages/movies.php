<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet">
</head>
<body>
    <h1>Movies List</h1>
    <ul>
        <?php
        // Sample array of movies
        $movies = [
            'The Shawshank Redemption',
            'The Godfather',
            'The Dark Knight',
            'Pulp Fiction',
            'The Lord of the Rings: The Return of the King'
        ];

        // Loop through the movies and display each one
        foreach ($movies as $movie) {
            echo "<li>$movie</li>";
        }
        ?>
    </ul>
</body>
</html>