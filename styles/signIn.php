<?php
    session_start();
    $_SESSION['user'] = $data['Imie'];
    $_SESSION['userEmail'] = $data['Hasło'];
    $_SESSION['userPassword'] = $data['Email'];
    require_once"config.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    
    if($connection -> connect_errno == 0) {
        $userEmail = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $userPassword = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");

        $sql = sprintf(
            "SELECT * FROM users WHERE email='%s' AND Hasło='%s'",
            mysqli_real_escape_string($connection, $userEmail),
            mysqli_real_escape_string($connection, $userPassword)
        );

        if($result = $connection -> query($sql)) {

            if($result -> num_roms > 0) {

                $data = $result -> fetch_assoc();
                $user = $data['user'];
                $email = $data['userEmail'];
                echo "uzytkownik: $user, email: $userEmail";
                $_session['signedIn'] = True;
                unset($_SESSION['signInError']);
                header('Location: index.php');

                $result -> close();
            } 
            else {
                header('Location: signInPage.php');
                echo "Uzytkownik nie istnieje";
                $_session['signInError'] = True;

            }
        }
    }
    unset($_SESSION['userEmail']);
    unset($_SESSION['userPassword']);
    session_unset();
    ?>
