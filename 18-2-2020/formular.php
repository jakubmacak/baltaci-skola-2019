<?php
// declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Samostatny ukol PHP - formular</title>
    <link href="style.css" rel="stylesheet" type="text/css" />

    <!-- Latest compiled JavaScript -->
    <script src="https:/<!-- / -->maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

    <h1>Kontaktní formulář</h1>
    <form method="post">
        <div class="form-group form-group-text">
            <label for="firstname">Jméno</label>
            <input class="form-control" type="text" id="firstname" name="firstname">
        </div>
        <div class="form-group form-group-text">
            <label for="secondname">Příjmení</label>
            <input type="text" id="secondname" name="secondname">
        </div>
        <div class="form-group form-group-text">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group form-group-text">
            <label for="phone">Telefon</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div class="form-group form-group-text">
            <label for="msg">Zpráva</label>
            <textarea id="msg"></textarea>
        </div>
        <div class="form-group">
            <h2>Kontaktujte mě</h2>
            <div class="type-checkbox">
                <input id="checkbox-email" type="checkbox" value="E-mail" name="kontakt-email">
                <label for="checkbox-email">E-mail</label>
            </div>
            <div class="type-checkbox">
                <input id="checkbox-phone" type="checkbox" value="Telefon" name="kontakt-telefon">
                <label for="checkbox-phone">Telefon</label>
            </div>
        </div>
        <div class="form-group">
            <h2>Pohlaví</h2>
            <div class="type-radio">
                <input type="radio" id="radio-man" value="man" name="gender">
                <label for="radio-man">Muž</label>
            </div>
            <div class="type-radio">
                <input type="radio" id="radio-woman" value="woman" name="gender">
                <label for="radio-woman">Žena</label>
            </div>
            <div class="type-radio">
                <input type="radio" id="radio-other" value="other" name="gender">
                <label for="radio-other">Jiné</label>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Odeslat">
        </div>
    </form>

    <?php
    // pripojeni k databazi
    $connection = pripojitSeKDatabazi();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jmeno = $_POST["firstname"];
        $prijmeni = $_POST["secondname"];
        $email = $_POST["email"];
        $telefon = $_POST["phone"];

        // Sql prikaz
        // TODO: zde doplnte vasi praci
        $sql = "INSERT INTO vzkazy (column1, ...)
                    VALUES ('hodnota1', ...)";

        // Vykonani SQL prikazu
        vykonejSQL($connection, $sql);
    }





    /*****************************
     * Funkce pro praci s databazi
     ******************************/
    function vykonejSQL($connection, $sql) {
        if (!mysqli_query($connection, $sql)) {
            echo "Vyskytla se chyba: " . mysqli_error($connection);
        }
    }

    function pripojitSeKDatabazi() {
        $dbname = // TODO doplnit
        $username = // TODO doplnit
        $password = // TODO doplnit
        $host = 'localhost';

        try {
            return mysqli_connect($host, $username, $password, $dbname);
        } catch (Exception $e) {
            die("Neni mozne se pripojit k DB:" . $e->getMessage());
        }
    }

    ?>
</div>
</body>
</html>po
