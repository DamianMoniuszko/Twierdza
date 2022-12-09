<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="styles/styles.css" />
</head>
<body>
     <form action="signIn.php" method="post">
     	<h2>Zaloguj się</h2>
     	<label>E-mail użytkownika</label>
     	<input type="email" name="userEmail" placeholder="Email"><br>
     	<label>Hasło użytkownika</label>
     	<input type="password" name="userPassword" placeholder="Hasło"><br>
     	<button type="submit">Logowanie</button>
        <a href="index.php">Wróć do strony głównej</a>
     </form>
</body>
</html>