<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "styles/main.css" > 
    <title>Twierdza</title>
    <style>
        <?php include("main.scss"); ?>
    </style>
</head>
<body>
    
    <header>
        <div class="header__container">
            <?php define("LOGO", "LOGO")?>
            <h1>
                <?php echo LOGO ?>
            </h1>
            <nav>
                <ul>
                    <li><input type="button" value="Zaloguj się" class="homebutton" id="btnHome" onClick="window.location = 'index.php'" /></li>
                
                    <!-- <li> <button =  "SignUpPage.php"> Zarejestruj się </li></button> -->
                    <li><input type="button" value="Zarejestruj się" class="homebutton" id="btnHome" onClick="window.location = 'signUpPage.php'" /></li>
                </ul>
            </nav>
        </div>
    </header>
<section>
    <?php
    $title = "Witaj na naszej stronie!" 
    ?>
    <h1><?php echo "$title"?></h1>
    <p><center>Hello </center></p>
    <p></p>
    <p></p>
</section>
<footer>
    <p><a> Autorzy: </a></p>
    <p>&copy 2022 Michał Zieleniecki Damian Moniuszko Krystian Konończuk</p>
</footer>
</body>
</html>
