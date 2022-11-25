<?php
class MainCLass {
    public function dbConnect() {
        require_once"config.php";
        return new mysqli($host, $db_user, $db_password, $db_name);
    }

    public function blockEntrace($move_here) {
        if (isset($_SESSION["signedIn"])==false){
            header("location: $move_here");
        }
   }
}
?>