<?php
$dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or die('Error connecting to database');

// Collect data from the form
$naslov = mysqli_real_escape_string($dbc, $_POST['naslov']);
$autor = mysqli_real_escape_string($dbc, $_POST['autor']);
$kratki_opis = mysqli_real_escape_string($dbc, $_POST['kratki_opis']);
$sadrzaj = mysqli_real_escape_string($dbc, $_POST['sadrzaj']);
$arhiva = isset($_POST['arhiva']) ? 1 : 0; // Check if checkbox is checked
$kategorija = mysqli_real_escape_string($dbc, $_POST['kategorija']); // Collect selected category

// Insert data into the database
$query = "INSERT INTO tablica (naslov, autor, kratki_opis, sadrzaj, arhiva, kategorija) 
          VALUES ('$naslov', '$autor', '$kratki_opis', '$sadrzaj', '$arhiva', '$kategorija')";

$result = mysqli_query($dbc, $query);

if ($result) {
    echo 'Podaci su uspješno upisani!';
} else {
    echo 'Podaci nisu upisani!';
}

mysqli_close($dbc);
?>
