<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
<form action="signIn.php" method="post">
        <label>E-mail</label>
        <input type="email" name="userEmail" id="">
        <label>Hasło</label>
        <input type="text" name="userPassword">
        <input type="submit" value="OK">
        <?php
        if(isset($_SESSION['signInError'])) {
            echo "<p> style='color:red'>Niepoprawna nazwa lub hasło</p>";
        }
        ?>
    </form>
</body>
</html>