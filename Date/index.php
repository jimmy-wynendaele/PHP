<?php
	
	echo "<strong>EX1</strong>";
	echo '<br>';
	echo date('d/m/Y');
	echo '<br>';
	echo "<strong>EX2</strong>";
	echo '<br>';
	echo date('d-m-Y');
	echo '<br>';
	echo "<strong>EX3</strong>";
	echo '<br>';
	echo date('l d F Y');
	echo '<br>';
	setlocale(LC_ALL, 'fr_FR');
	echo "En français: " . strftime('%A %e %B %Y');
	echo '<br>';
	echo "<strong>EX4</strong>" . "<br>";
	echo getTimestamp();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Date</title>
 </head>
 <body>
 	
 </body>
 </html>