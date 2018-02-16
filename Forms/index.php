<?php 

	//echo "yeah"."<br>";
	$firstname = $_POST["firstname"];
	$name = $_POST["name"];

	//echo $firstname."<br>";
	//echo $name;
	//echo "<br>";

	// EX5

	$gender = $_POST['gender'];
	echo "<br>";
	
	echo $gender;
	if($gender == "Male"){
		echo "Bonjour " . $name . " " . $firstname . ". Vous êtes un homme." ;
	}else{
		echo "Bonjour " . $name . " " . $firstname . ". Vous êtes une femme." ;
	}

	// EX8

	$fileName = $_POST['file'];
	echo "<br>";
	$fileExt =  pathinfo($fileName,PATHINFO_EXTENSION);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>forms</title>
 </head>
 <body>
		
		<!--Ex1&3-->
 		<?php 
 			$name = $_POST["name"];
 			$firstname = $_POST["firstname"];
 		 ?>

		<!-- <form action="user.php" method="get">
			
			<input type="text" name = "name" placeholder="Name">
			
			<input type="text" name="firstname" placeholder="Firstname:">
			<input type="submit">
		</form> -->

		<!--EX2&4-->

		<!-- <form action="user.php" method="post">
			
			<input type="text" name = "name" placeholder="Name">
			
			<input type="text" name="firstname" placeholder="Firstname:">
			<input type="submit">
		</form> -->

		<!-- EX5&6&7-->
		
		<?php
			
			if(!isset($_POST["Submit"])){

		?>
			<form action="index.php" method="post">
				<input type="text" name = "name" placeholder="Name">
				
				<input type="text" name="firstname" placeholder="Firstname:">
				<select name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				<input type="file" name="file">
				<input type="submit" name="Submit">
			
			</form>
		<?php

			}else{

				if($name !="" && $firstname !="" && $fileName!=""){

					echo "it works";

					if($fileExt != "pdf"){
						echo "Veuillez envoyer un fichier pdf";
					
			?>
				<form action="index.php" method="post">
					<input type="text" name = "name" placeholder="Name">
					
					<input type="text" name="firstname" placeholder="Firstname:">
					<select name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<input type="file" name="file">
					<input type="submit" name="Submit">
				
				</form>
				<?php	
					
					}else{
						echo "Correct extension. Form sent.";
					}
				}else{

					echo "Answer all questions correctly";
					echo $name . " " . $firstname . " " . $fileName;
				?>

				<form action="index.php" method="post">
					<input type="text" name = "name" placeholder="Name">
					
					<input type="text" name="firstname" placeholder="Firstname:">
					<select name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<input type="file" name="file">
					<input type="submit" name="Submit">
				
				</form>

				<?php
				
				}
			}

			?>
		
			
 	
 	

 </body>
 </html>