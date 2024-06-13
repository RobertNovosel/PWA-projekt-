<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery-1.11.0.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
   <script src="js/form-validation.js"></script> 
    <link rel="stylesheet" href="styles.css">
    <title>Tech Talk</title>
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

<div class="container">
    <h2 class="news-title">Tech Talk</h2> <!-- Naslov iznad kartica -->
    <div class="news-container">
        <?php
        // Prikazivanje Tech Talk članaka iz baze
        $dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or die('Error connecting to database');
        $query = "SELECT * FROM tablica WHERE kategorija = 'tech_talk' AND arhiva = 0"; // Samo ne-arhivirani Tech Talk članci
        $result = mysqli_query($dbc, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="news-item">';
            echo '<h4>' . $row['naslov'] . '</h4>';
            echo '<p>' . $row['kratki_opis'] . '</p>';
            echo '<a href="citaj_vise.php?id=' . $row['id'] . '">Pročitaj više</a>';
            echo '</div>'; // zatvara news-item
        }
        mysqli_close($dbc);
        ?>
    </div>
</div>

<footer>
    <p>Robert Novosel, rnovosel@tvz.hr - Projektni zadatak PWA 2024</p>
</footer>

</body>
</html>
