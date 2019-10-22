<?php 
	declare(strict_types=1);
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

	<?php
		/*
			Ukol: Funkce/Metody 1
			Vytvorte metodu, ktera vykresli odstavec (<p>) se zadanym textem. Pokud text neni zadan, pak vykresli odstavec s textem "Prazdny odstavec". Pri reseni ukolu pouzijte defaultni hodnotu argumentu metody. 
		*/
		/* Ukol: Pole 1
			1. Vytvorte dvourozmerne pole $cars, ktere obsahuje alespon 4 automobily. Kazdy automobil je pole o 3 prvcich: Znacka, Rok vyroby a Cena.
			2. Vypiste tuto strukturu tak, aby vypis vypadal nasledovne:
			Car 0
			Volvo
			2015
			300000
			
			Car 1
			BMW
			2016
			350000
			
			Car 2
			Saab
			2015
			280000
			
			Car 3
			Fiat
			2012
			150000
		*/
		
		/* Ukol: Pole 2
			1. Pouzijte v predchozim pripade asociativni pole s klici: "brand", "manufactureDate" a "price".
			2. upravte vypis tak, aby vypadal naledovne:
				Car 0
				Brand: Volvo
				Manufacture date: 2015
				Price: 300000
				
				Car 1
				Brand: BMW
				Manufacture date: 2016
				Price: 350000
				Car 2
				Brand: Saab
				Manufacture date: 2015
				Price: 280000
				Car 3
				Brand: Fiat
				Manufacture date: 2012
				Price: 150000
		*/
		/*
			Ukol: Prace s retezci 1
			Vytvorte metodu, ktera k zadanemu retezci pripoji HTML element "<br/>".
			Tuto metodu pouzijte v nasledujicim pripade pro vypsani informaci na jednotlive radky.
			Vytvorte metodu, prijimajici jeden parametr $email.
			Metoda:
				1. Vypise email velkymi pismeny.
				2. Vypise email s malymi pismeny.
				3. Vypise cast pres zavinacem a po zavinaci.
			Format metody pro zadany email "john@google.com" bude nasledujici:
				Mozne tvary emailove adresy jsou:
				john@google.com
				JOHN@GOOGLE.COM
				Uzivatelske jmeno: john
				Domena: google.com
		*/
		/*
			Ukol na doma.
			Promenna $corruptedText obsahuje text, ktery byl urcitymi zpusoby porusen. Vasim ukolem je napsat takovy kod, ktery tento text opravi. Abyste vedeli, jak presne text opravit, mate original textu ulozeny v promenne $originalText.
			Vase reseni si muzete zkontrolovat pomoci metody compareStrings. Tato metoda vypise, zda se vystup vaseho kodu rovna originalnimu text. V tomto ukolu neni dovoleno nic jineho, nez doplnit kod transformujici text z promenne $corruptedText do promenne $transformedText ve vymezenem prostoru.
		*/
		$originalText = "Myslím, že jsem se už zmínil, že mám tetu jménem Kateřina. Neštěstí nechodí po horách, ale po lidech. Teta Kateřina má syna. Je mu 18 let a jmenuje se Milouš. Neštěstí nechodí nikdy samo. Teta je vdova a Milouš je sirotek, protože strýc František před deseti lety zemřel. Jistě nelituje, že to udělal. Poslouchat celý život přísloví, pořekadla a zrnka moudrosti není maličkost.";
		$corruptedText = "Lorem ipsum      Myslím,že jsem se už zmínil,že mám tetu jménem Kateřina. neštěstí nechodí po horách,ale po lidech. Teta Kateřina má syna. Je mu 18 let a jmenuje se Bohouš. neštěstí nechodí nikdy samo. teta je vdova a Bohouš je sirotek,protože strýc František před deseti lety zemřel. Jistě nelituje,že to udělal. poslouchat celý život přísloví,pořekadla a zrnka moudrosti není maličkost      	";
		// TODO: Zde doplnte kod - zacatek
		$transformedText;
		// TODO: Zde doplnte kod - konec
		compareStrings($originalText, $transformedText);
		function compareStrings(string $a, string $b) {
			if ($a == $b) {
				echo "Textove retezce jsou stejne!";
			} else {
				echo "Textove retezce nejsou totozne!<br/>";
				echo $b;
			}
		}
	?>
</body>
</html>
