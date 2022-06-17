<?php
    require_once "DB.php";

    class detailsd_unscription {

        private $_pdo;

        public function __construct(){
            $this->_pdo = DB::connect();
        }

        public function get($idprof){
           
                $sql = "select c.titreCourse  , etu.username from prof pr , course c , detailsd_unscription du , prof etu where pr.idProf = ".$idprof." AND  pr.idProf = c.idProf and c.idCourse = du.idCourse and du.idEtudient = etu.idProf";
                $sql.=" group by c.titreCourse";
                $result = $this->_pdo->query($sql); 
                return $result->fetchAll();
        }
        public function getMyCourse($idet){
           
            $sql = "select pr.username,c.titreCourse,du.dateinscripton,c.idCourse from prof etu , course c , prof pr ,detailsd_unscription du where etu.idProf = 14 and etu.idProf = du.idEtudient and c.idCourse = du.idCourse and pr.idProf = c.idProf;";
            $sql.=" group by c.titreCourse";
            $result = $this->_pdo->query($sql); 
                return $result->fetchAll();

        
    }   

       

      
    }


// $cc = new detailsd_unscription();
// var_dump($cc->getMyCourse(14));