<?php 

	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Variables superglobales - sessions - cookies</title>
 </head>
 <body>

		<form action="index.php" method="POST">
			<input type="text" name="login" placeholder="Type your login">
			<input type="text" name="password" placeholder="Type your password">
			<input type="submit" name="Submit">
		</form>

 	<?php 

 		// EX1

 		echo "<strong>exerice 1</strong>" . "<br>";
 		$userInfo = $_SERVER['HTTP_USER_AGENT'];
 		echo $userInfo . "<br>";
 		$userIP = $_SERVER['REMOTE_ADDR'];
 		$serverIP = $_SERVER['SERVER_ADDR'];
 		echo "user IP: " . $userIP . "<br>" . "server IP: " . $serverIP . '<br>';
 		$serverName = $_SERVER['SERVER_NAME'];
 		echo 'server name: ' . $serverName . "<br>";


 		//EX2

 		echo "<br>";
 		echo "<strong>exerice 2</strong>" . "<br>";

 		session_start();

 		$_SESSION['prenom'] = "John";
 		$_SESSION['nom'] = "Doe";
 		$_SESSION['age'] = 126;

 		//EX3
 		echo "<br>";

 		if(isset($_POST['Submit'])){

 			$login = $_POST['login'];
 			$password = $_POST['password'];

 			setcookie('loginText',$login,time()+100);
 			setcookie('passwordText',$password,time()+100);

 		}

 	 ?>

 	 <a href="index2.php">LINK</a>
 
 </body>
 </html>