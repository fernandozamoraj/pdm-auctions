<?php

class Authenticator{

    public function IsAdmin()
    {
        if(isset($_SESSION["isAdmin"]))
        {
            if( $_SESSION["isAdmin"] == true)
            {
                return true;
            }
        }

        return false;
    }

    public function SetUserCredentials()
    {
        if(isset($_GET["user"]))
        {
            $userId = $_GET["user"];

            $_SESSION["user"] = $userId;

            if($userId == "pepedemarco")
            {
                $_SESSION["isAdmin"] = true;
            }
            else
            {
                $_SESSION["isAdmin"] = false;
            }
        }
    }
}

?>