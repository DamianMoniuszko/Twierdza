<?php

    session_start();

    if((isset($_SESSION['signedIn'])) && ($_SESSION['signedIn']==true))
	{
		header('Location: index2.php');
	}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css" />
    <title>Twierdza</title>
</head>
<h1>Rejestracja</h1>
<body id="body">
    <form action="signUp.php" method="post">
        <label>Nazwa</label>
        <input type="text" name="name" id="">
        <label>E-mail</label>
        <input type="email" name="userEmail" id="">
        <label>Hasło</label>
        <input type="password" name="userPassword">
        <label>Powtórz hasło</label>
        <input type="password" name="userPasswordRepeat">
        <button type="submit">Zarejestruj się</button>
        <a href="signInPage.php">Masz konto?</a>
        <a href="index.php">Strona główna</a>
        <?php
		    if(isset($_SESSION['signUpError'])) echo $_SESSION['signUpError'];
		?>
    </form>
</body>
</html>