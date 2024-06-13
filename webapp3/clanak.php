<?php
$dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or die('Error connecting to database');

// Get article ID from query string
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];
    // Fetch article details from database
    $query = "SELECT * FROM tablica WHERE id = $article_id";
    $result = mysqli_query($dbc, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <link rel="stylesheet" href="styles.css">
                <title>' . $row['naslov'] . '</title>
            </head>
            <body>';

        echo '<header>';
        // Header content as per your initial HTML
        echo '</header>';

        echo '<main>';
        echo '<div class="container">';
        echo '<h2>' . $row['naslov'] . '</h2>';
        echo '<p><strong>Autor: </strong>' . $row['autor'] . '</p>';
        echo '<p>' . $row['sadrzaj'] . '</p>';
        echo '</div>';
        echo '</main>';

        echo '<footer>';
        // Footer content as per your initial HTML
        echo '</footer>';

        echo '</body>
            </html>';
    } else {
        echo '<p>Article not found.</p>';
    }
} else {
    echo '<p>Invalid request.</p>';
}

mysqli_close($dbc);
?>
