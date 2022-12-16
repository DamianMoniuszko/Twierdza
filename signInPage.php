<?php

	session_start();

	if((isset($_SESSION['signedIn'])) && ($_SESSION['signedIn']==true))
	{
		header('Location: game.php');
	}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Twierdza</title>
	<link rel="stylesheet" href="styles/styles.css"/>
</head>
<body>
     <form action="signIn.php" method="post">
     	<h2>Zaloguj się</h2>
     	<label>E-mail</label>
     	<input type="email" name="userEmail" placeholder="Email"><br>
     	<label>Hasło</label>
     	<input type="password" name="userPassword" placeholder="Hasło"><br>
     	<button type="submit">Zaloguj</button>
        <a href="index.php">Strona Główna</a>
		<a href="SignUpPage.php">Zarejestruj się</a>
		<?php
		if(isset($_SESSION['signInError'])) echo $_SESSION['signInError'];
		?>
     </form>
</body>
</html>