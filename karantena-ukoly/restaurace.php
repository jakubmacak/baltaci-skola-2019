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
</head>
<body>

<?php
// pripojeni k databazi
$connection = pripojitSeKDatabazi();


/*****************************
 * Funkce pro praci s databazi
 ******************************/
function vykonejSQL($connection, $sql) {
    if (!mysqli_query($connection, $sql)) {
        echo "Vyskytla se chyba: " . mysqli_error($connection);
    }
}

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

if (count($_GET) === 0 || !$_GET['restaurace']) {
    echo 'ID nezadano';
    die();
}

mysqli_set_charset($connection,"utf8"); // kodovani

$id = $_GET['restaurace'];
$sqlSelect = "SELECT * FROM restaurace WHERE id = ".$id;
$result = vykonejSQLSelect($connection, $sqlSelect);

echo '<table>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<h1>'.$row['nazev'].'</h1>';
    echo '<div>'.$row['adresa'].'</div>';
    echo '<div>'.$row['popis'].'</div>';
    echo '<div>'.$row['telefon'].'</div>';
    echo '<div>'.$row['web'].'</div>';
}
echo '</table>';

$sqlSelect = "SELECT jidlo.nazev, jidlo.cena, jidlo.je_polevka, menu.datum FROM jidlo JOIN menu ON menu.id = jidlo.menu_id JOIN restaurace ON restaurace.id = menu.restaurace_id WHERE restaurace.id = ".$id;
$result = vykonejSQLSelect($connection, $sqlSelect);

if (mysqli_num_rows($result) === 0) {
    echo '<div>Restaurace nenalezena</div>';
} else {
    echo '<h1>MENU</h1>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div><strong>Datum: ' . $row['datum'] . '</strong></div>';
        echo '<div>Název: ' . $row['nazev'] . '</div>';
        echo '<div>Cena: ' . $row['cena'] . '</div>';
        if ($row['je_polevka']) {
            echo '<div>Typ: polévka</div>';
        } else {
            echo '<div>Typ: hlavní jídlo</div>';
        }
        echo '<hr />';
    }
}

echo '<a href="index.php">Zpět na přehled restaurací</a>';

?>
</div>
</body>
</html>
