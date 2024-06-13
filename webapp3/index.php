<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Unos</title>
</head>
<body>

<header>
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
</header>

<main>
    <div class="container">
        <h2 class="news-title">Latest News</h2>
        <div class="news-container">
            <?php
            $dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or die('Error connecting to database');
            $query = "SELECT * FROM tablica WHERE arhiva = 0 ORDER BY id DESC";
            $result = mysqli_query($dbc, $query);

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
                echo '<p>No news articles found.</p>';
            }

            mysqli_close($dbc);
            ?>
        </div>
    </div>
</main>

<footer>
    <p>Robert Novosel, rnovosel@tvz.hr - Projektni zadatak PWA 2024</p>
</footer>

</body>
</html>
