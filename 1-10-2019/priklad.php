<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Titulek</title>
</head>
<body>

<?php
	// definice promennych
	$cislo = 54; // definujte cislo
	$text = 'Hello world'; // definujte textovy retezec
	$pole = ['red', 'green', 'blue']; // definujte pole
	$logickaHodnota = true; // definujte logickou hodnotu
?>

<?php
	// nedefinovana hodnota
	echo $nedefinovano;
?>

<h1>PHP</h1>
<h2>Výpis</h2>
<?php
	// vypis
	echo '<div>Číslo je '.$cislo.'</div>';
	echo ('<div>Číslo je '.$cislo.'</div>');
	print '<div>Číslo je '.$cislo.'</div>';
	print('<div>Číslo je '.$cislo.'</div>');
	echo $text;
?>
<div>Číslo je <?php echo $cislo; ?></div>

<h2>Logická hodnota</h2>
<?php
	// logicka hodnota
	if ($logickaHodnota) {
		echo '<div>ANO</div>';
	} else {
		echo '<div>NE</div>';
	}

	if ($cislo < 55) {
		echo '<div>'. $cislo . ' je menší než 55</div>';
	} else {
		echo '<div>'. $cislo . ' je větší nebo rovno 55';
	}
?>

<h2>Aritmetické operace</h2>
<?php
	// operace
	echo 1+1;
	echo '<br>';
	echo $cislo + 1;
	echo '<br>';
	echo $cislo/8;
	echo '<br>';
	echo ($cislo % 5);
?>

<h2>Pole</h2>
<?php
	// prace s polem
	echo $pole; // nelze
	echo '<div>Délka pole je '.count($pole).'</div>';
	echo '<div>První prvek v poli je '.$pole[0].'</div>';
	echo $pole[20]; // nedefinovany index
?>

<h2>Průchod pole pomocí for cyklu</h2>
<?php
	for ($i = 0; $i < count($pole); $i++) {
		echo '<div> Prvek na pozici ' . $i . ' je ' . $pole[$i] . '</div>';
	}

	for ($i = 0; $i < count($pole); $i++) {
		echo '<div><span style="color:'.$pole[$i].'">'.$pole[$i].'</span></div>';
	}
?>


</body>
</html>
