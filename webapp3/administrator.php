<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel - Manage Articles</title>
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
        <h2>Admin Panel - Manage News Articles</h2>

        <?php
        $dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or die('Error connecting to database');

        
        if (isset($_POST['delete'])) {
            $article_id = $_POST['id'];
            $delete_query = "DELETE FROM tablica WHERE id = $article_id";
            $delete_result = mysqli_query($dbc, $delete_query);

            if ($delete_result) {
                echo '<p>Article deleted successfully.</p>';
            } else {
                echo '<p>Error deleting article.</p>';
            }
        }

      
        $query = "SELECT * FROM tablica";
        $result = mysqli_query($dbc, $query);

        if (mysqli_num_rows($result) > 0) {
            echo '<table class="table table-striped">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Naslov</th>';
            echo '<th>Autor</th>';
            echo '<th>Kratki opis</th>';
            echo '<th>Arhiva</th>';
            echo '<th>Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['naslov'] . '</td>';
                echo '<td>' . $row['autor'] . '</td>';
                echo '<td>' . $row['kratki_opis'] . '</td>';
                echo '<td>' . ($row['arhiva'] ? 'Da' : 'Ne') . '</td>';
                echo '<td>';
                echo '<form method="POST" action="administracija.php">';
                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                echo '<input type="submit" name="delete" class="btn btn-danger btn-sm" value="Delete">';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No articles found.</p>';
        }

        mysqli_close($dbc);
        ?>
    </div>

    <!-- Forma za prijavu -->
    <div class="container">
        <h2>Prijava</h2>
        <form method="POST" action="login_process.php">
            <div class="form-group">
                <label for="username">Korisničko ime:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Lozinka:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Prijavi se</button>
        </form>
    </div>

</main>

<footer>
    <p>Robert Novosel, rnovosel@tvz.hr - Projektni zadatak PWA 2024</p>
</footer>

</body>
</html>
