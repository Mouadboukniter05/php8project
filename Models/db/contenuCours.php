<?php
    require_once "DB.php";

    class contenucours {

        private $_pdo;

        public function __construct(){
            $this->_pdo = DB::connect();
        }

        public function get($id = null){
            if ($id == null){
                $sql = "select * from contenucours";
                $result = $this->_pdo->query($sql);
                return $result->fetchAll();
            }else{
                $sql = "select * from contenucours where idContent=".$id;
                $result = $this->_pdo->query($sql);
                if ($result->rowCount() >= 1)
                    return $result->fetch();
                else
                    throw new Exception("contenucours inéxistante");
            }
        }
        
        

        public function getDetailCoursePerIdCours($id){
            $sql = "select * from contenucours where idCourse=".$id;
            $result = $this->_pdo->query($sql);
            if ($result->rowCount() >= 1)
                return $result->fetch();
            else
                throw new Exception("cours inéxistante");
    }
            
        public function add($iCourse,$title,$description,$duree,$image,$prix){
           
                $sql = "insert into contenucours (iCourse,title,description,duree,image,prix) values (?,?,?,?,?,?,?,?)";
                $stmt = $this->_pdo->prepare($sql);
                return $stmt->execute(array($iCourse,$title,$description,$duree,$image,$prix));
            
        }

       

      
    }