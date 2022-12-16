<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css"/>
    <title>Twierdza</title>
</head>
<body>
    
    <header>
        <div class="header__container">
            <h1>
                Twierdza
            </h1>
            <nav>
                <ul>
                    <li><a href="game.php">Gra</a></li>
                    <li><a href="logout.php" type="submit" value="Log out" name="logout">Wyloguj się</a></li>
                </ul>
            </nav>
        </div>
    </header>
<section>
    <h2><?php echo "Witaj ".$_SESSION['user']; ?></h2>
    <p>t</p>
    <p>t</p>
    <p>t</p>
</section>
<footer>
    <p>&copy 2022 Michał Zieleniecki Damian Moniuszko Krystian Konończuk</p>
</footer>
</body>
</html>