ini_set('display_errors', 1);

<!DOCTYPE html>
<html>
<head>
	<title>fuckoff</title>
</head>
<body>
	<?php 

		// ex1

		for($i=0; $i<=10 ; $i++ ){
			echo $i . "<br>";
		}

		// EX2

		$random = rand(1,100);
		$number = 0;

		while($number<20){

			
			echo $number*$random . "<br>";
			$number++;
		}

		// EX3

		$number = 100;
		while($number>10){
			$number = $number-$random;
			echo "<strong>number: " . $number . "<br>" . "<strong>random number: </strong>" . $random;
		}

		// EX4
		echo "<br>";
		$number2 = 1;

		while($number2<10){
			
			$number2 = $number2 + $number2/2;
			echo $number2 . "<br>";
		}

		// EX5

		$times;
		for($i=1;$i<=15;$i++){
			$times++;
		}

		echo $times;

		//EX 8

		echo "<br>";
		$j = 200;
		$j-=12;
		echo $j . "<br>";
		$times = 0;
		while($j>0){
			$times++;
			$j-=12;
		}
		echo $times;

	?>

</body>
</html>