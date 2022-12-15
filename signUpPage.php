<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css" />
    <title>Sign Up</title>
</head>
<h1>Zarejestruj się</h1>
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
        <input type="submit" value="OK">
        <a href="index.php">Wróć do strony głównej</a>
    </form>
</body>
</html>