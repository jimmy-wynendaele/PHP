<!DOCTYPE html>
<html>
<head>
	<title>taggle</title>
</head>
<body>
	<?php 
	ini_set('display_errors', 1);

	function booleanFunction(){

		
		echo true;

	}

	booleanFunction();

	//EX2

	echo "<br>";
	function repeat($string){
		echo $string;
	}

	repeat('dick');

	// EX 3

	echo "<br>";
	function concat($first,$second){
		echo $first.$second;
	}

	concat('what are you ','looking at?');

	//EX4

	echo "<br>";

	$number1 = rand(0,5);
	$number2 = rand(0,5);

	function compare($first,$second){
		if($first>$second){
			echo "first number is greater";
		}else if($first<$second){
			echo "first number is less";
		}else{
			echo "first number is equal to second one";
		}
	}
	compare($number1,$number2);

	//EX5 

	echo "<br>";
	$number3 = rand(2,5);
	$string2 = "This is boring";

	function concat2($number,$string){
		echo $number . $string;
	}

	concat2($number3,$string2);

	// EX6

	echo "<br>";
	function salutations($nom,$prenom,$age){
		echo "bonjour " . $prenom . " " . $nom . ". Tu as " . $age . " ans!";
	}

	salutations('Crampon', 'Kurt', 24);

	//EX7
	echo "<br>";

	function tellMe($age, $gender){
		if($age>=18){
			if($gender=='Male'){
				echo "you are a major male";
			}else{
				echo 'you are a major female';
			}
		}else{
			if($gender=='Male'){
				echo "you are a minor male";
			}else{
				echo 'you are a minor female';
			}
		}
	}


	tellMe(rand(0,100), "Male");

	//EX8

	echo"<br>";
	function sum($numb1 = 2,$numb2 = 4,$numb3 = 6){
		echo $numb1 + $numb2 + $numb3;
	}

	sum();

	//test 
	echo "<br>";
	echo "hello";
	echo "<br>";
	$array1 = array('john','marc','bouc','Arnold','Bass',);
	echo $array1[array_rand($array1)];

	?>
	
</body>
</html>