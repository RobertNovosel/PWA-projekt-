<?php
$dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or die('Error connecting to database');


if (isset($_GET['id'])) {
    $article_id = $_GET['id'];

    // Dohvati članak iz baze podataka
    $query = "SELECT * FROM tablica WHERE id = $article_id";
    $result = mysqli_query($dbc, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Početak HTML
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

        // Header
        echo '<header>
                <img src="assets/F1.svg.webp" alt="formula1 logo" width="10%" height="5%" class="formula_logo"> 
                <div class="flex_col">
                    <h1 class="formula title">Formula 1</h1>
                    <ul class="navbar">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="tech.php">kategorija tech talk</a></li>
                        <li><a href="index.php">kategorija latest news</a></li>
                        <li><a href="administrator.php">admin</a></li>
                        <li><a href="unos.php">objavi</a></li>
                    </ul>
                </div>
            </header>';

        // Main content - prikaz članka
        echo '<main>
                <div class="container">
                    <h2>' . $row['naslov'] . '</h2>';
        echo '<p><strong>Autor: </strong>' . $row['autor'] . '</p>';
        echo '<p>' . $row['sadrzaj'] . '</p>';
        echo '</div>
            </main>';

        // Footer
        echo '<footer>
                <p>Robert Novosel, rnovosel@tvz.hr - Projektni zadatak PWA 2024</p>
            </footer>';

        // Zatvaranje HTML-a
        echo '</body>
            </html>';
    } else {
        echo '<p>Članak nije pronađen.</p>';
    }
} else {
    echo '<p>Neispravan zahtjev.</p>';
}

mysqli_close($dbc);
?>
