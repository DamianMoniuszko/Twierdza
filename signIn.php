<?php
    session_start();
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
                $email = $data['email'];
                echo "uzytkownik: $user, email: $email";
                $_session['signedIn'] = True;
                unset($_SESSION['signInError']);
                header('Location: index.php');

                $result -> close();
            } else {
                header('Location: index.php');
                $_session['signInError'] = true;
                echo "Uzytkownik nie istnieje";
            }
        }
    }
    ?>
