<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Titulek</title>
</head>
<body>

<!-- 	<form action="index.php" method="GET">
		<input type="text" name="value">
		<input type="text" name="value2">
		<input type="submit" value="Odeslat">
	</form>

	<?php
		$promenna = $_GET['value'];
		$promenna2 = $_GET['value2'];
		echo $promenna;
		echo '<br>';
		echo $promenna2;
	?>
 -->


	<form action="index.php" method="POST">
		<div>
			<label for="valuePost">Hodnota 1</label>
			<input type="text" name="valuePost" id="valuePost">
		</div>
		<div>
			<label for="valuePost2">Hodnota 2</label>
			<input type="text" name="valuePost2" id="valuePost2">
		</div>
		<input type="submit" value="Secti">
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$post1 = intval($_POST['valuePost']);
			$post2 = intval($_POST['valuePost2']);
			echo 'Soucet je: ' . ($post1 + $post2);
		}
	?>

</body>
</html>
