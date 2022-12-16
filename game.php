<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twierdza</title>
</head>
<body>
<?php
    echo "Witaj ".$_SESSION['user'];
    
    if (($_SESSION['signedIn']) == 1 ){
    ?>
    <form><input type="submit" value="Log out" name="logout"></form>
    <?php
    }
    if(isset($_POST['logout'])){
        $_SESSION['signedIn'] = 0;
        header('Location: index.php');
    }
    ?>
</body>
</html>