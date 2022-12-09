<?php
    session_start();
    require_once"MainClass.php";
    // $connection = new mysqli($host, $db_user, $db_password, $db_name);
    $mainClass = new MainClass();
    $connection = $mainClass -> dbConnect();
    
    function filtruj($zmienna)
    {
        if(get_magic_quotes_gpc())
            $zmienna = stripslashes($zmienna);
    }
    
    if (isset($_POST['rejestruj']))
    {
        $login = filtruj($_POST['login']);
        $haslo1 = filtruj($_POST['haslo1']);
        $haslo2 = filtruj($_POST['haslo2']);
        $email = filtruj($_POST['email']);
        $ip = filtruj($_SERVER['REMOTE_ADDR']);
        
        // sprawdzamy czy login nie jest już w bazie
        if (mysql_num_rows(mysql_query("SELECT login FROM users WHERE login = '".$login."';")) == 0)
        {
            if ($haslo1 == $haslo2) // sprawdzamy czy hasła takie same
            {
                mysql_query("INSERT INTO `uzytkownicy` (`login`, `haslo`, `email`, `rejestracja`, `logowanie`, `ip`)
                    VALUES ('".$login."', '".md5($haslo1)."', '".$email."', '".time()."', '".time()."', '".$ip."');");
                
                echo "Konto zostało utworzone!";
            }
            else echo "Hasła nie są takie same";
        }
        else echo "Podany login jest już zajęty.";
    }
?>