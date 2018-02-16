<!DOCTYPE html>
<html>
<head>
	<title>taggle again</title>
</head>
<body>
	<?php 

		//EX1
		$tableau = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");

		echo $tableau;

		//EX2

		echo "<br>";

		echo $tableau[2];

		//EX3
		echo "<br>";
		echo $tableau[5];

		//EX4

		echo "<br>";
		$tableau[7] = "aôut";
		echo $tableau[7];

		//EX5

		$tabAss = array("61" => "Auvergne" , "69" =>  "Rhône", 66 => "Alpes");

		//EX6

		echo "<br>";

		echo $tabAss["69"];

		// EX7

		echo "<br>";
		$tabAss["27"] = "Metz";

		echo $tabAss["27"];
		echo "<br>";

		//EX8

		foreach ($tabAss as $key => $value) {
			echo "departement: " . $key . " - Ville: " . $value . "<br>";
		}

		//ex9

		//only the values

		echo "<strong>Ex9</strong>";

		foreach ($tabAss as $value) {
			echo "<strong>$value</strong>" . "<br>";
		}



	?>
</body>
</html>