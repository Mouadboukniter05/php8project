<?php
session_start();
    if(!isset($_SESSION["user"])){
        header("location:http://localhost/pfe/Controllers/prof/auth.php");
    }
    else if($_SESSION['user']['isProf']==0){
        // ila kan ostad dih list
        header("location:http://localhost/pfe/Controllers/prof/list.php");
    }
    else{
        // hada tilmid
    require_once "../../Models/db/detailusp.php";
    require_once "../../Models/db/course.php";

    //echo "ss";
    if(isset($_POST["idCourse"])){
        // bach tconnecta me3a la table detailsd_unscription
            $dspdb = new Contenudetailsd_unscription();
           // echo "ss";
        // ajoutiha fe la table
        //add($idEtudient,$dateinscripton,$idCourse)
        
            $flag = $dspdb->add($_SESSION["user"]["idProf"],date("Y/m/d h:m:s"),$_POST['idCourse']);
                header("location:http://localhost/pfe/Controllers/prof/list.php");
    }else{
        //awal mara 
        $coursedb = new course();
        $course = $coursedb->get($_GET["id"]);
    include "../../Views/course/paiment.php";
    }
    }
