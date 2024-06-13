<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Spajanje na bazu podataka
    $dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or die('Error connecting to database');

    // Priprema upita i izvršavanje
    $query = "SELECT * FROM tablica WHERE korisnicko_ime = '$username'";
    $result = mysqli_query($dbc, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Provjera lozinke
        if (password_verify($password, $user['lozinka'])) {
            // Prijava uspješna, postavi sesiju ili koristi token za autorizaciju
            $_SESSION['tablica_id'] = $user['id'];
            $_SESSION['korisnicko_ime'] = $username;
            $_SESSION['razina'] = $user['razina'];

            // Preusmjeravanje na administracijsku stranicu nakon prijave
            header('Location: administracija.php');
            exit();
        } else {
            echo '<p>Neispravna lozinka.</p>';
        }
    } else {
        echo '<p>tablica nije pronađen.</p>';
    }

    mysqli_close($dbc);
}
?>
