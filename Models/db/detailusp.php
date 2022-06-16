<?php
    require_once "DB.php";

    class Contenudetailsd_unscription {

        private $_pdo;

        public function __construct(){
            $this->_pdo = DB::connect();
        }

        public function getMycourses($id){
           
                $sql = "select * from detailsd_unscription where idEtudient =".$id;
                $result = $this->_pdo->query($sql);
                if ($result->rowCount() >= 1)
                    return $result->fetchAll();
                else
                    false;
            
        }
            
        public function add($idEtudient,$dateinscripton,$idCourse){
                $sql = "insert into detailsd_unscription (idEtudient,dateinscripton,idCourse) values (?,?,?)";
                $stmt = $this->_pdo->prepare($sql);
                return $stmt->execute(array($idEtudient,$dateinscripton,$idCourse));
        }

       

      
    }