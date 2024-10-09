<?php
include_once __DIR__ . "/./db.php";
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
                <ul>
                    <li>
                        Titolo:
                        <?php
                    echo $movie->title;
                    // echo $movie->genre->isForChild();
                    ?>
                    </li>
                    <li>
                        Durata:
                        <?php
                    echo $movie->filmLength;
                    ?>
                    </li>
                </ul>

            </li>

            <?php } ?>
        </ul>
    </main>
</body>

</html>