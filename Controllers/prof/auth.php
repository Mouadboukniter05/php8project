<?php
session_start();
if(isset($_SESSION["user"])){
    header("location:http://localhost/pfe/Controllers/prof/list.php");
}
    require_once "../../Models/db/Prof.php";

    $msg = "";
    if (isset($_POST["email"]) && isset($_POST["password"])){
        $prof = new Prof();
        $flag = $prof->auth($_POST["email"], $_POST["password"]);

        if ($flag){
            //var_dump($flag);
            $_SESSION["user"]=$flag;
            header("location:list.php");
        }
          
        else
            $msg = "Email or password is inccorect";
    }
    
    include "../../Views/prof/auth.php";