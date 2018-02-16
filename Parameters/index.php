<?php 
	
	//EX1

	echo $_GET["nom"];
	echo $_GET["prenom"];

	//EX2

	echo "<br>";
	if($_GET["age"]){
		echo $_GET["age"];
	}else{
		echo "age doesn't show up";
	}

	//EX3
	echo "<br>";
	echo $_GET['dateDebut']."<br>";
	echo $_GET['dateFin'];

	//EX4 

	echo "<br>";
	echo $_GET['langage']."<br>";
	echo $_GET['serveur'];

 ?>