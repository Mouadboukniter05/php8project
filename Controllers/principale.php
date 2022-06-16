<?php
session_start();
    require_once "../Models/db/course.php";
    $coursesdb = new course();
    $courses = $coursesdb->get6first();
   // var_dump($courses);
    include "../Views/principale.php";

    
