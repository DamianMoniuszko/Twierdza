<?php
    session_start();
    require_once"MainClass.php";
    // $connection = new mysqli($host, $db_user, $db_password, $db_name);
    $mainClass = new MainClass();
    $connection = $mainClass -> dbConnect();

    
    if($connection -> connect_errno == 0) {
        $userEmail = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $userPassword = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");

        $sql = sprintf(
            "SELECT * FROM users WHERE Email='%s' AND Hasło='%s'",
            mysqli_real_escape_string($connection, $userEmail),
            mysqli_real_escape_string($connection, $userPassword)
        );

        if($result = $connection -> query($sql)) {

            if($result -> num_rows > 0) {

                $data = $result -> fetch_assoc();
                $user = $data['user'];
                $email = $data['userEmail'];
                echo "uzytkownik: $user, email: $userEmail";
                $_SESSION['signedIn'] = True;
                unset($_SESSION['signInError']);
                header('Location: index.php');

                // $_SESSION['user'] = $data['Imie'];
                // $_SESSION['userEmail'] = $data['Hasło'];
                // $_SESSION['userPassword'] = $data['Email'];

                $result -> close();
            } 
            else {
                echo "Uzytkownik nie istnieje";
                $_session['signInError'] = True;
                header('Location: signInPage.php');
            }
        }
    }
    unset($_SESSION['userEmail']);
    unset($_SESSION['userPassword']);
    session_unset();
    ?>
