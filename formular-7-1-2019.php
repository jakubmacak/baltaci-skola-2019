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


    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <!-- Popper JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <script src="https:/<!-- / -->maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

        <?php
            $name = '';
            $surname = '';
            $email = '';
            $phone = '';
            $contact = [];

            // TODO: kod muzete doplnovat napriklad zde
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $errors = [];

                $name = $_POST["name"];
                if (!overJmeno($name)) {
                    $errors[] = "Pole jmeno nebylo vyplneno spravne";
                }

                $surname = $_POST["surname"];
                if (!overPrijmeni($surname)) {
                    $errors[] = "Pole prijmeni nebylo vyplneno spravne";
                }

                $email = $_POST["email"];
                if (!overEmail($email)) {
                    $errors[] = "Pole email neni spravne vyplneno";
                }

                $phone = $_POST["phone"];

                if (array_key_exists("contact", $_POST)) { // kontrola, jestli byl nejaky checkbox oznacen
	                $contact = $_POST["contact"];
	                if (in_array('telefon', $contact)) { // kontrola, jeslti se v poli nachazi retezec telefon
	                	if (!overTelefon($phone)) {
							$errors[] = "Pole telefon neni spravne vyplneno";
						}
	                };
            	}

            	if (!overPohlavi($_POST)) {
            		$errors[] = 'Pole pohlavi nebylo spravne vyplneno';
            	}

        		if (count($errors) === 0) {
        			echo '<div class="success">Formular byl odeslan</div>';
        		} else {
	                for($i = 0; $i < count($errors); $i++) {
	                    echo '<div class="error">'.$errors[$i].'</div>';
	                }
	            }

            }

            function overJmeno($jmeno) {
                $jmenoBezMezer = trim($jmeno);
                if (strlen($jmenoBezMezer) === 0) {
                    return false;
                } else {
                    return true;
                }
            }

            function overPrijmeni($prijmeni) {
                return strlen(trim($prijmeni)) !== 0;
            }

            function overEmail($email) {
                if (strlen(trim($email)) === 0) {
                    return false;
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return false;
                }
                return true;
            }

            function overTelefon($telefon) {
                if (strlen(trim($telefon)) === 0) {
                    return false;
                }
                //if ($telefon[0] !== '+') {
                //    return false;
                //}
                if (substr($telefon, 0, 1) !== '+') {
                    return false;
                }
                return true;
            }

            function overPohlavi($post) {
            	// if (array_key_exists('gender', $post)) {
            	// 	return true;
            	// } else {
            	// 	return false;
            	// }
            	return array_key_exists('gender', $post);	
            }

        ?>

        <h1>Kontaktní formulář</h1>
        <form action="formular.php" method="POST" novalidate>
            <div class="form-group form-group-text">
                <label for="name">Jméno</label>
                <input class="form-control" type="text" id="name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group form-group-text">
                <label for="surname">Příjmení</label>
                <input type="text" id="surname" name="surname" value="<?php echo $surname; ?>">
            </div>
            <div class="form-group form-group-text">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group form-group-text">
                <label for="phone">Telefon</label>
                <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
            </div>
            <div class="form-group form-group-text">
                <label for="msg">Zpráva</label>
                <textarea id="msg"></textarea>
            </div>
            <div class="form-group">
                <h2>Kontaktujte mě</h2>
                <div class="type-checkbox">
                    <input id="checkbox-email" type="checkbox" value="email" name="contact[]">
                    <label for="checkbox-email">E-mail</label>
                </div>
                <div class="type-checkbox">
                    <input id="checkbox-phone" type="checkbox" value="telefon" name="contact[]">
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
    </div>
</body>
</html>
