<!DOCTYPE html>
<html>
<head>
	<title>HI</title>
</head>
<body>
	<?php

	// ex1

	$nom = 'Boris';
	echo "$nom" . "<br>";

	// ex2

	$nom2 = 'Junior';
	$prenom = 'Archibald';
	$age= 98;

	echo $nom2 . ' ' . $prenom . ' ' . $age . "<br>";

	// ex3

	$km = 1;
	echo $km . "<br>";
	$km = 5;
	echo $km . "<br>";
	$km = 125;
	echo $km . "<br>";

	//ex4

	$texte = "fuck off";
	$number = 12312122;
	$floatNumber = 123.498;
	$booleanVar = true;

	echo "<strong>$texte</strong>" . "\t" . $number . "\t" . $floatNumber . "\t" . $booleanVar . "<br>";

	// ex5

	$number2;
	echo $number2 . "<br>";
	$number2 = 1000;
	echo $number2 . "<br>";

	// ex6

	$nom3 = "Franklin";
	echo "Bonjour " . $nom3 . ", comment vas-tu?" . "<br>";

	// ex7

	$nom4 = "Fils de";
	$prenom2 = "John";
	$age2 = 3;
	echo "Bonjour " . $prenom2 . " " . $nom4 . ". Tu as " . $age2 . " ans" . "<br>";

	// ex8

	$var1;
	$var2;
	$var3;

	$var1 = 3+4;
	$var2 = 5*20;
	$var3 = 45/5;

	echo $var1 . " " . $var2 . " " . $var3 . " " ;

	?>
</body>
</html>