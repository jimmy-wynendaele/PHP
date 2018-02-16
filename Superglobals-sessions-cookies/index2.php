<?php 
	
	session_start();

	echo $_SESSION['prenom'] . "<br>";
	echo $_SESSION['nom'] . "<br>";
	echo $_SESSION['age'] . "<br>";

	echo $_COOKIE['loginText'] . "<br>";
	echo $_COOKIE['passwordText'] . "<br>";

	$_COOKIE['loginText'] = $_POST['login'];
	$_COOKIE['passwordText'] = $_POST['password'];

	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookies and shit</title>
</head>
<body>
	<p>Change login and password</p>
	<form action="index2.php" method="POST">
			<input type="text" name="login" placeholder="login">
			<input type="text" name="password" placeholder="password">
			<input type="submit" name="Submit">
	</form>

	<?php 
		if(isset($_POST['Submit'])){

			$login = $_POST['login'];
 			$password = $_POST['password'];
			
			setcookie('loginText',$login,time()+100);
 			setcookie('passwordText',$password,time()+100);
		}
		echo '<br>';
		echo 'new login: ' . $_COOKIE['loginText'] . '<br>';
		echo 'new password: ' . $_COOKIE['passwordText'];
	 ?>
</body>
</html>