<?php

$method = $_SERVER['REQUEST_METHOD'];
// echo $method;

if($method=="GET"){
	echo "dozvoljene operacije su +,-,*,/";
} else if($method=="POST"){
	$operacija = $_POST["operacija"];
	$prviBr = $_POST["prvi_br"];
	$drugiBr = $_POST["drugi_br"];

	switch ($operacija) {
		case '+':
			$rezultat = $prviBr + $drugiBr;
			break;
		
		case '-':
			$rezultat = $prviBr - $drugiBr;
			break;

		case '/':
			if ($drugiBr == 0) {
				$rezultat = 'Nije dozvoljeno deliti sa nulom';
			} else {
				$rezultat = $prviBr / $drugiBr;
			}
			
			break;

		case '*':
			$rezultat = $prviBr * $drugiBr;
			break;
	}

	echo "Rezultat je: " . $rezultat;
} else {
	echo "Metoda nije dozvoljena!";
}