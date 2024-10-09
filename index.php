<?php
include_once __DIR__ . "/./classes/Movie.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <main>
        <h1>Movie</h1>
        <h2>Lista di Film</h2>
        <ul>
            <?php foreach ($movies as $movie) { ?>
                <li>
                    <?php echo $movie->title ?>
                </li>
            <?php } ?>
        </ul>
    </main>
</body>

</html>