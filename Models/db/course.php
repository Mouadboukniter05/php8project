<?php
    require_once "DB.php";

    class course {

        private $_pdo;

        public function __construct(){
            $this->_pdo = DB::connect();
        }

        public function get($id = null){
            if ($id == null){
                $sql = "select * from course";
                $result = $this->_pdo->query($sql);
                return $result->fetchAll();
            }else{
                $sql = "select * from course where idCourse=".$id;
                $result = $this->_pdo->query($sql);
                return $result->fetch();
            }
        }
        
        public function get6first(){
            
                $sql = "SELECT * FROM course,prof where course.idProf=prof.idProf  ORDER BY RAND () LIMIT 6";
                $result = $this->_pdo->query($sql);
                return $result->fetchAll();
        }

        public function getCoursePerProf($id){
                $sql = "select * from course where idProf=".$id;
                $result = $this->_pdo->query($sql);
                return $result->fetchAll();
                
        }

        public function getCoursePerCategorie($id){
            $sql = "select * from course where 	idCategorie=".$id;
            $result = $this->_pdo->query($sql); 
            return $result->fetchAll();
    }

        public function checkid($id){
            $sql = "select * from course where id =".$id;
            $result = $this->_pdo->query($sql);
            if ($result->rowCount() > 0)
                return true;
            else
                return false;
        }
        public function add($idProf,$idCategorie,$titreCourse,$prix,$description,$dateAjout,$video,$image){
           
                $sql = "insert into course (idProf,idCategorie,titreCourse,prix,description,dateAjout,video,image) values (?,?,?,?,?,?,?,?)";
                $stmt = $this->_pdo->prepare($sql);
                return $stmt->execute(array($idProf,$idCategorie,$titreCourse,$prix,$description,$dateAjout,$video,$image));
            
               
        }      
    }