<?php
$dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or die('Error connecting to database');

// Assuming category is passed via query string (e.g., ?category=sport)
if (isset($_GET['category'])) {
    $category = mysqli_real_escape_string($dbc, $_GET['category']);
    // Fetch articles from database based on category
    $query = "SELECT * FROM tablica WHERE arhiva = 0 AND category = '$category'";
    $result = mysqli_query($dbc, $query);

    echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="styles.css">
            <title>' . $category . ' News</title>
        </head>
        <body>';

    echo '<header>';
    // Header content as per your initial HTML
    echo '<img src="assets/F1.svg.webp" alt="formula1 logo" width="10%" height="5%" class="formula_logo"> 
    <div class="flex_col">
        <h1 class="formula title">Formula 1</h1>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="unos.php">unos</a></li>
            <li><a href="kategorija.php">kategorija</a></li>
            <li><a href="administrator.php">admin</a></li>
            <li><a href="unos.html">Unos</a></li>
        </ul>
    </div>';
    echo '</header>';

    echo '<main>';
    echo '<div class="container">';
    echo '<h2>' . $category . ' News</h2>';

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="news-item">';
            echo '<h3>' . $row['naslov'] . '</h3>';
            echo '<p><strong>Autor: </strong>' . $row['autor'] . '</p>';
            echo '<p>' . $row['kratki_opis'] . '</p>';
            echo '<a href="clanak.php?id=' . $row['id'] . '">Pročitaj više</a>';
            echo '</div>';
        }
    } else {
        echo '<p>No news articles found in this category.</p>';
    }

    echo '</div>';
    echo '</main>';

    echo '<footer>
        <p>Robert Novosel, rnovosel@tvz.hr - Projektni zadatak PWA 2024</p>
    </footer>';

    echo '</body>
        </html>';
} else {
    echo '<p>Category not specified.</p>';
}

mysqli_close($dbc);
?>
