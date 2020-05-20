<?php
// declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESTAURACE</title>
    <form action="pridani-restaurace.php" method="post">
        <!-- TODO: pridat dalsi pole -->
        <label for="nazev">Nazev</label><input type="text" id="nazev" name="nazev">
        <button type="submit">Odeslat</button>
    </form>
</head>
<body>

<?php
// pripojeni k databazi
$connection = pripojitSeKDatabazi();

function vykonejSQLInsert($connection, $sql) {
    if (!mysqli_query($connection, $sql)) {
        echo "Vyskytla se chyba: " . mysqli_error($connection);
    }
}

function pripojitSeKDatabazi() {
    $dbname = 'restaurace';
    $username = 'root';
    $password =  'root';
    $host = 'localhost';

    try {
        return mysqli_connect($host, $username, $password, $dbname);
    } catch (Exception $e) {
        die("Neni mozne se pripojit k DB:" . $e->getMessage());
    }
}

mysqli_set_charset($connection,"utf8"); // kodovani

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $chyby = [];
    $nazev = '';
    if (!isset($_POST["nazev"]) || strlen($_POST["nazev"]) === 0) {
        $chyby[] = "Název není zadán";
    } else {
        $nazev = $_POST["nazev"];
    }

    // TODO: ziskavat data z $_POST + kontrola
    $telefon  = '123';
    $adresa = 'adresa';
    $popis = 'popis';
    $web = 'web';

    if (count($chyby) === 0) {
        $sql = "INSERT INTO restaurace (`nazev`, `adresa`,`popis`, `telefon`, `web`) VALUES ('" . $nazev . "', '" . $adresa . "', '" . $popis . "', '" . $telefon . "', '" . $telefon . "')";
        vykonejSQLInsert($connection, $sql);
        header('Location: index.php');
    } else {
        for ($i = 0; $i < count($chyby); $i++) {
            echo $chyby[$i].'<br>';
        }
    }

}



?>
</div>
</body>
</html>
