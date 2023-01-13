<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css"/>
    <title>Twierdza</title>
</head>
<body>
<?php
    if (($_SESSION['signedIn']) == 1 ){
    ?>
    <?php
    }
    if(isset($_POST['logout'])){
        $_SESSION['signedIn'] = 0;
        header('Location: index.php');
    }
    ?>
    <header>
        <div class="header__container">
            <h1>
                <?php echo "Witaj ".$_SESSION['user']; ?>
            </h1>
            <nav>
                <ul>
                    <li>
                        <a href="profilePage.php">Profil</a>
                    </li>
                    <li>
                        <a href="index2.php">Strona Główna</a>
                    </li>
                    <li>
                        <a href="logout.php" type="submit" value="Log out" name="logout">Wyloguj się</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
        <?php echo "<b>Drewno </b>".$_SESSION['drewno']; ?>
        <button type="submit">Zbierz</button>
        <?php echo "<p><b>Kamień </b>".$_SESSION['kamien']; ?>
        <button type="submit">Zbierz</button>
        <?php echo "<p><b>Złoto </b>".$_SESSION['zloto']; ?>
        <button type="submit">Zbierz</button>
</body>
</html>