<?php
session_start();
    if(!isset($_SESSION["user"])){
        header("location:http://localhost/pfe/Controllers/prof/auth.php");
    }else{
    require_once "../../Models/db/course.php";
    require_once "../../Models/db/contenuCours.php";
    require_once "../../Models/db/Prof.php";
    $contenuCourdb = new contenucours();
    $coursedb = new  course();
    $profdb = new Prof();
    $course = $coursedb->get($_GET["id"]);
    $detailsCours = $contenuCourdb->getDetailCoursePerIdCours($course["idCourse"]);
    $profcr = $profdb->getProfs($course["idCourse"]);
    
    include "../../Views/course/getCourse.php";

    }
