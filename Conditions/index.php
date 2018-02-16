<?php
	
	//EXERCICE 1

	$age = 44;
	if($age>=18){
		echo "Vous êtes majeur" . "<br>";
	}else{
		echo "Vous êtes mineur" . "<br>";
	}

	// EXERCIE 2

	$isEasy = False;
	if($isEasy){
		echo "it's easy" . "<br>";
	}else{
		echo "it's fucking difficult" . "<br>";
	}

	// EX 3

	$age = 28;
	$gender = "man";

	if($age<18){
		if($gender == "woman"){
			echo "you're minor and woman";
		}else{
			echo "you're minor and male";
		}
	}
	else{
		if($gender == "man"){
			echo "you're an adult and male";
		}else{
			echo "you're an adult and woman";
		}
	}

	//EX4

	echo "<br>";

	$magnitude = rand(1,9);
	echo $magnitude . "<br>";
	switch($magnitude){
		case 1:
			echo "Micro-séisme impossible à ressentir.";
			break;
		case 2:
			echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
			break;
		case 3:
			echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
			break;
		case 4:
			echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
			break;
		case 5:
			echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
			break;
		case 6:
			echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
			break;
		case 7:
			echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
			break;
		case 8:
			echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
			break;
		case 9:
			echo "Séisme capable de tout détruire sur une très vaste zone.";
			break;
	}

	//ex 5

	
	


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 </body>
 </html>