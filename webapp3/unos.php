<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Unos</title>
    <script>
        $(function() {
            $("form[name='forma_box']").validate({
                rules: {
                    naslov: {
                        required: true,
                        minlength: 5
                    },
                    autor: {
                        required: true,
                        minlength: 3
                    },
                    kratki_opis: {
                        required: true,
                        minlength: 10
                    },
                    sadrzaj: {
                        required: true,
                        minlength: 20
                    }
                },
                messages: {
                    naslov: {
                        required: "Naslov je obavezan",
                        minlength: "Naslov mora imati barem 5 znakova"
                    },
                    autor: {
                        required: "Autor je obavezan",
                        minlength: "Autor mora imati barem 3 znaka"
                    },
                    kratki_opis: {
                        required: "Kratki opis je obavezan",
                        minlength: "Kratki opis mora imati barem 10 znakova"
                    },
                    sadrzaj: {
                        required: "Sadržaj je obavezan",
                        minlength: "Sadržaj mora imati barem 20 znakova"
                    }
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
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

<form name="forma_box" action="skripta.php" method="POST" class="forma_box">
    <label for="naslov">Naslov:</label>
    <input type="text" id="naslov" name="naslov" required>
    
    <label for="autor">Autor:</label>
    <input type="text" id="autor" name="autor" required>
    
    <label for="kratki_opis">Kratki opis:</label>
    <textarea id="kratki_opis" name="kratki_opis" rows="4" cols="50" required></textarea>
    
    <label for="sadrzaj">Sadržaj:</label>
    <textarea id="sadrzaj" name="sadrzaj" rows="10" cols="50" required></textarea>
    
    <label for="arhiva">Arhiva:</label>
    <input type="checkbox" id="arhiva" name="arhiva">
    
    <label for="kategorija">Kategorija:</label>
    <select id="kategorija" name="kategorija">
        <option value="latest_news">Latest News</option>
        <option value="tech_talk">Tech Talk</option>
    </select>
    
    <input type="submit" value="Pošalji">
</form>

<footer>
    <p>Robert Novosel, rnovosel@tvz.hr - Projektni zadatak PWA 2024</p>
</footer>

</body>
</html>
