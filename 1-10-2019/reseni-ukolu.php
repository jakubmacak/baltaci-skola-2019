<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>

    <?php
        $cislo1 = 5;
        $cislo2 = 6;

        $desetinne1 = 1.1;
        $desetinne2 = 2.2;

        $pole = [10, 20, 30, 40];

        $logickaHodnota = false;

        $soucet = $cislo1 + $cislo2;
    ?>

    <?php echo '<div>'.$soucet.'</div>'?>

    <?php
        if ($desetinne1 * $desetinne2 > 10) {
            echo '<div>Součin čísel '.$desetinne1.' a '.$desetinne2.' je větší než 10</div>';
        } else {
            echo '<div>Součin čísel '.$desetinne1.' a '.$desetinne2.' je roven '.$desetinne1*$desetinne2.'</div>';
        }
    ?>

    <?php
        for ($i = 0; $i < count($pole); $i++) {
            echo $pole[$i] . '<br>';
        }
    ?>

    <?php
        $soucetPole = 0;
        for ($i = 0; $i < count($pole); $i++) {
            $soucetPole = $soucetPole + $pole[$i];
        }
        echo '<div>'.$soucetPole.'</div>';
    ?>

    <?php
        $soucinPole = 1;
        for ($i = 0; $i < count($pole); $i++) {
            echo '<div> před součinem: '.$soucinPole.'</div>';
            $soucinPole = $soucinPole * $pole[$i];
            echo '<div> po součinu: '.$soucinPole.'</div>';
        }
        echo '<div>'.$soucinPole.'</div>';
    ?>

    <div class="
        <?php
            if ($logickaHodnota) {
                echo 'ano';
            } else {
                echo 'ne';
            }
        ?>
    "></div>



</head>
<body>
