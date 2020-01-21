<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$cislo1 = intval($_POST['cislo1']);
	$cislo2 = intval($_POST['cislo2']);

	$operace = $_POST['operace'];

	if ($operace === 'plus') {
		echo $cislo1 + $cislo2;
	} else if ($operace === 'minus') {
		echo $cislo1 - $cislo2;
	} else if ($operace === 'krat') {
		echo $cislo1 * $cislo2;
	} else if ($operace === 'deleno') {
		if ($cislo2 === 0) {
			echo 'chyba';
		} else {
			echo $cislo1 / $cislo2;
		}
	}
}


?>
<form action="index.php" method="post">
Cisla:<br>
<input type="text" name="cislo1">
<br>
<input type="text" name="cislo2">
<br>


<!-- Operace:<br>
plus <input type="radio" name="operace" value="plus">
<br>
minus <input type="radio" name="operace" value="minus">
<br>
krat <input type="radio" name="operace" value="krat">
<br>
deleno <input type="radio" name="operace" value="deleno"> -->

<select name="operace">
	<option value="plus">+</option>
	<option value="minus">-</option>
	<option value="deleno">*</option>
	<option value="krat">/</option>
</select>


<br>
<br>
<input type="submit" name="Odeslat">
</form>

