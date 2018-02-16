<?php 

	echo "yeah"."<br>";
	$firstname = $_POST["firstname"];
	$name = $_POST["name"];

	echo $firstname."<br>";
	echo $name;
	echo "<br>";

	// EX5

	$gender = $_POST['gender'];
	echo "<br>";
	

	if($gender == "male"){
		echo "Bonjour " . $name . " " . $firstname . ". Vous êtes un homme." ;
	}else{
		echo "Bonjour " . $name . " " . $firstname . ". Vous êtes une femme." ;
	}

 ?>