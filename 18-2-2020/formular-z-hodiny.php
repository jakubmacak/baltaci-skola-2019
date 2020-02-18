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
    <style type="text/css">
        td{
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
        }
    </style>

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
            <textarea id="msg" name="msg"></textarea>
        </div>
        <div class="form-group">
            <h2>Kontaktujte mě</h2>
            <div class="type-checkbox">
                <input id="checkbox-email" type="checkbox" value="E-mail" name="kontakt[]">
                <label for="checkbox-email">E-mail</label>
            </div>
            <div class="type-checkbox">
                <input id="checkbox-phone" type="checkbox" value="Telefon" name="kontakt[]">
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
        $zprava = $_POST["msg"];
        $kontakt = $_POST['kontakt'];
        $kontaktovatTelefonem = false;
        $kontatovatEmailem = false;

        if (in_array("E-mail", $kontakt)) {
            $kontatovatEmailem = true;
        }

        if (in_array("Telefon", $kontakt)) {
            $kontatovatEmailem = true;
        }

        $pohlavi = $_POST["gender"];

        // Sql prikaz
        // TODO: zde doplnte vasi praci
        $sql = "INSERT INTO fomrular (`jmeno`, `prijmeni`,`email`, `telefon`, `zprava`, `kontaktovatTelefonem`, `kontaktovatEmailem`, `pohlavi`) VALUES ('".$jmeno."', '".$prijmeni."', '".$email."', '".$telefon."', '".$zprava."', '".$kontatovatEmailem."', '".$kontatovatEmailem."', '".$pohlavi."')";

        echo $sql;

        // Vykonani SQL prikazu
        vykonejSQLInsert($connection, $sql);

    }


    $sqlSelect = "SELECT * FROM fomrular";
    $result = vykonejSQLSelect($connection, $sqlSelect);

    echo '<table>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$row['jmeno'].'</td>';
        echo '<td>'.$row['prijmeni'].'</td>';
        echo '</tr>';
    }
    echo '</table>';




    /*****************************
     * Funkce pro praci s databazi
     ******************************/
    function vykonejSQLSelect($connection, $sql) {
        if (!mysqli_query($connection, $sql)) {
            echo "Vyskytla se chyba: " . mysqli_error($connection);
        } else {
            return mysqli_query($connection, $sql);
        }
    }

    function vykonejSQLInsert($connection, $sql) {
        if (!mysqli_query($connection, $sql)) {
            echo "Vyskytla se chyba: " . mysqli_error($connection);
        }
    }



    function pripojitSeKDatabazi() {
        $dbname = 'formular';
        $username = 'root';
        $password = '';
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
</html>
