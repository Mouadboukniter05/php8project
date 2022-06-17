<?php
    require_once "DB.php";

    class Prof {

        private $_pdo;

        public function __construct(){
            $this->_pdo = DB::connect();
        }
        // kanjibio etudiant
        public function getEtudiant($id = null){
            if ($id == null){
                $sql = "select * from prof where isProf = 1";
                $result = $this->_pdo->query($sql);
                return $result->fetchAll();
            }else{
                $sql = "select * from prof where isProf = 1 and idProf =".$id;
                $result = $this->_pdo->query($sql);
               
                    return $result->fetch();
               
            }
        }
        //kanjibo les profs
        public function getProfs($id = null){
            if ($id == null){
                $sql = "select * from prof where isProf = 0";
                $result = $this->_pdo->query($sql);
                return $result->fetchAll();
            }else{
                $sql = "select * from prof where isProf = 0 and idProf =".$id;
                $result = $this->_pdo->query($sql);
                    return $result->fetch();
              
            }
        }
        public function auth($email,$password){
            $sql = "select * from prof where email = '$email' and password = '$password' ";
            $result = $this->_pdo->query($sql);
            if ($result->rowCount() > 0)
                return $result->fetch();
            else
                return false;
        }
        

        public function checkEmail($email){
            $sql = "select * from prof where email = '$email' ";
            $result = $this->_pdo->query($sql);
            if ($result->rowCount() > 0)
                return true;
            else
                return false;
        }

        public function checkid($id){
            $sql = "select * from prof where id =".$id;
            $result = $this->_pdo->query($sql);
            if ($result->rowCount() > 0)
                return true;
            else
                return false;
        }
        public function add($username,$tel,$email,$password,$isprof){
            if (!$this->checkEmail($email)){
                $sql = "insert into prof (username,telephone,email,password,isProf) values (?,?,?,?,?)";
                $stmt = $this->_pdo->prepare($sql);
                return $stmt->execute(array($username,$tel,$email,$password,$isprof));
            }
            else
                return false;
        }

        public function uppass($id,$password){
            if ($this->checkid($id)){
                $sql = "update prof set password=? where id=?";
                $stmt = $this->_pdo->prepare($sql);
                return $stmt->execute(array($password,$id));
            }
            else
                return false;
        }

        public function update($id,$nom,$oldnom, $prenom,$tel,$email){
            if ($this->checkid($id)){
                $params = array(
                    "id" => $id,
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "email"=>$email
                );
                
                if ($oldnom != $nom){
                    if (!$this->check($email)){
                        $sql = "update prof set nom = :nom , prenom = :prenom,tel = :tel,email = :email  where id = :id";
                    }
                    else
                        return false;
                }
                $stmt = $this->_pdo->prepare($sql);
                return $stmt->execute($params);
            }
            else 
                return false;
        }
    }