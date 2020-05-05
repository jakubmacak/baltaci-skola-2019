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

mysqli_set_charset($connection,"utf8"); // kodovani

$sqlSelect = "SELECT * FROM restaurace";
$result = vykonejSQLSelect($connection, $sqlSelect);

echo '<div>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<h1>'.$row['nazev'].'</h1>';
    echo '<div>'.$row['adresa'].'</div>';
    echo '<div>'.$row['popis'].'</div>';
    echo '<div>'.$row['telefon'].'</div>';
    echo '<div>'.$row['web'].'</div>';
    echo '<a href="restaurace.php?restaurace='.$row['id'].'">Přejít na detail restaurace</a>';
}
echo '</div>';

?>
</div>
</body>
</html>
