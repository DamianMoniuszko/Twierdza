<?php
    session_start();
    require_once"MainClass.php";
    $mainClass = new MainClass();
    $connection = $mainClass -> dbConnect();
    
    if($connection -> connect_errno == 0) {
        $name = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
        $email = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $password = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");
        $passwordRepeat = htmlentities($_POST['userPasswordRepeat'], ENT_QUOTES, "UTF-8");
        

        $sql = sprintf(
            "SELECT * FROM users WHERE  Name = '%s' AND Email='%s' AND Password='%s'",
            mysqli_real_escape_string($connection, $name),
            mysqli_real_escape_string($connection, $email),
            mysqli_real_escape_string($connection, $password)
        );

        if($result = $connection -> query($sql)) {

            if($result -> num_rows > 0) {
                echo "użytkownik już istnieje";
            }
            else {
                if($password == $passwordRepeat) {
                    if(strlen($password) >= 8) {
                        $sql = "INSERT INTO users(id, Name, Password, Email) VALUES ('','$name','$password','$email')"; 
                        $result = $connection -> query($sql);
                        echo "zarejestrowano";
                        header('Location: game.php');
                    }
                    else{
                        $_SESSION['signUpCountError'] ='<span style="color:red">Hasło musi zawierać min. 8 znaków!</span>';
                header('Location: SignUpPage.php');;
                    }
                }
                else{
                    echo "hasła nie są identyczne";
                }
            }
        }
    }
?>