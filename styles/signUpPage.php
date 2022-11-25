<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.scss" />
    <title>Sign Up</title>
</head>
<h1>Sign Up</h1>
<body id="body">
    <form action="signUpPage.php" method="get">
        <label>Nazwa</label>
        <input type="text" name="name" id="">
        <label>E-mail</label>
        <input type="email" name="userEmail" id="">
        <label>Hasło</label>
        <input type="text" name="userPassword">
        <label>Powtórz hasło</label>
        <input type="text" name="userPassword">
        <input type="submit" value="OK">
    </form>
<?php
    if (isset($_GET['userName'])) {
        $userName = $_GET['userName'];
        echo "<p>Nazwa uzytkownika : $userName </p>";
    } else {
        echo "<p>Nie podałeś nazwy użytkownika</p>";
    }
    if (isset($_GET['userEmail'])) {
        $userEmail = $_GET['userEmail'];
        echo "<p>Adres e-mail użytkownika: $userEmail </p>";
    } else {
        echo "<p>Nie podałeś adresu e-mail</p>";
    }
?>
</body>
</html>