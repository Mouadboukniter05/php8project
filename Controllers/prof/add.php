<?php
    require_once "../../Models/db/Prof.php";
    // add($username,$tel,$email,$password,$isprof)
    $msg = "";
    if (isset($_POST["username"]) && isset($_POST["tel"]) &&  isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["isprof"])  ){
        $prof = new Prof();
        $flag = $prof->add($_POST["username"],$_POST["tel"] ,$_POST["email"],$_POST["password"] ,$_POST["isprof"]);

        if ($flag)
            header("location:auth.php");
        else
            $msg = "Email is already exsit";
    }
    
    include "../../Views/prof/registre.php";