<?php
session_start();
    if(!isset($_SESSION["user"])){
        header("location:http://localhost/pfe/Controllers/prof/auth.php");
    }else if($_SESSION["user"]["isProf"]==1){
        header("location:http://localhost/pfe/Controllers/prof/list.php");
    }else{

    require_once "../../Models/db/Etudinsc.php";
    $etudiantInscritsdb = new  detailsd_unscription();
    $etudiantInscrits = $etudiantInscritsdb->get($_SESSION["user"]["idProf"]);
    include "../../Views/course/EtudiantInscrit.php";

    }
