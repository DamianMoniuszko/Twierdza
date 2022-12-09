<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="styles/styles.css" />
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Zaloguj się</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>E-mail użytkownika</label>
     	<input type="text" name="uname" placeholder="E-mail"><br>

     	<label>Hasło użytkownika</label>
     	<input type="password" name="password" placeholder="Hasło"><br>

     	<button type="submit">Logowanie</button>
     </form>
</body>
</html>