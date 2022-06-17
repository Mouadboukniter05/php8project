<?php
    require_once "DB.php";

    class Categorie {

        private $_pdo;

        public function __construct(){
            $this->_pdo = DB::connect();
        }

        public function get($id = null){
            if ($id == null){
                $sql = "select * from categorie";
                $result = $this->_pdo->query($sql);
                return $result->fetchAll();
            }else{
                $sql = "select * from categorie where idCategorie =".$id;
                $result = $this->_pdo->query($sql);
                    return $result->fetch();
               
            }
        }

      
    }