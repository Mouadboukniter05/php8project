<?php
session_start();
    if(!isset($_SESSION["user"])){
        header("location:http://localhost/pfe/Controllers/prof/auth.php");
    }else if($_SESSION["user"]["isProf"]==1){
        header("location:http://localhost/pfe/Controllers/prof/list.php");
    }else{

    require_once "../../Models/db/course.php";
    require_once "../../Models/db/Categorie.php";
    // add($idProf,$idCategorie,$titreCourse,$prix,$description,$dateAjout,$video,$image)
    $msg = "";
    if (isset($_POST["idCategorie"]) && isset($_POST["titreCourse"]) &&  isset($_POST["prix"]) && isset($_POST["description"]) && isset($_POST["dateAjout"]) && isset($_POST["video"]) && isset($_POST["image"])  ){
        $course = new course();
        $flag = $course->add($_SESSION["user"]["idProf"],$_POST["idCategorie"],$_POST["titreCourse"],$_POST["prix"],$_POST["description"],$_POST["dateAjout"],$_POST["video"] ,$_POST["image"]);
            header("location:http://localhost/pfe/Controllers/prof/list.php");
    }
    $categoriesdb = new Categorie();
    $categories = $categoriesdb->get();
    include "../../Views/course/addcourse.php";

    }
