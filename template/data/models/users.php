<?php
    require_once('data_provider.php');

    class Users extends DataProvider{

        public function setUser($email, $pass){

            $db = $this->connect();
            
            if($db == null){
                return;
            }

            $sql = "INSERT INTO users (email,pass) VALUES (:email,:pass)";
            $smt = $db->prepare($sql);

            $smt->execute(
                [
                    ":email"=> $email,
                    ":pass"=> $pass,
                ]
            );

            $smt = null;
            $db = null;
        }

        public function getCountUsers(){

            $db = $this->connect();

            if($db == null)
                return;
            
            
            $query = $db->query('SELECT count(*) FROM users');

            $count = $query->fetchColumn();

            return $count;
        }
        public function getAllUsers(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT * FROM users');

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            return $data;
        }
        public function getUsersByPassAndEmail($email, $pass){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = 'SELECT * FROM users WHERE email = :email AND pass = :pass';

            $smt = $db->prepare($query);
            $smt->execute([
                ":email"=> $email,
                ":pass"=> $pass
            ]);
            $data = $smt->fetch(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            if($data == null)
                return null;
            
            return $data;
        }
    }

?>