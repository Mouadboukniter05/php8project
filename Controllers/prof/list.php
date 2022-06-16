<?php
session_start();
    require_once "../../Models/db/Prof.php";
    require_once "../../Models/db/course.php";
    require_once "../../Models/db/Categorie.php";
    require_once "../../Models/db/Etudinsc.php";

    if(!isset($_SESSION["user"])){
        header("location:http://localhost/pfe/Controllers/prof/auth.php");
    }else if($_SESSION["user"]["isProf"]==1){
        // student space
        $etudiantInscritsdb = new  detailsd_unscription();
        $mycourses = $etudiantInscritsdb->getMyCourse($_SESSION["user"]["idProf"]);
        include "../../Views/prof/indexe.php";
        
    }else{
    //teacher space
    $coursesdb = new course();
    $categoriedb = new Categorie();
    $courses = $coursesdb->getCoursePerProf($_SESSION["user"]["idProf"]);
    include "../../Views/prof/indexp.php";
    }