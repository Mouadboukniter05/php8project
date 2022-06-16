<?php
session_start();
    require_once "../../Models/db/course.php";

    $coursesdb = new course();
    $courses = $coursesdb->get();
   // var_dump($courses);
    include "../../Views/course/allCoureses.php";

    
