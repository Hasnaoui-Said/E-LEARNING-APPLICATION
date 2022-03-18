<?php
    require_once('data_provider.php');
    class User extends DataProvider{
        public function setUser($email, $pass,$username, $phone){

            $db = $this->connect();
            
            if($db == null){
                return;
            }

            $sql = "INSERT INTO users (email, pass, username, phone) VALUES (:email,:pass, :username, :phone)";
            $smt = $db->prepare($sql);

            $smt->execute(
                [
                    ":email"=> $email,
                    ":pass"=> $pass,
                    ":phone"=> $phone,
                    ":username"=> $username,
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
        public function getUsersByEmail($email){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = 'SELECT * FROM users WHERE email = :email';

            $smt = $db->prepare($query);
            $smt->execute([
                ":email"=> $email
            ]);
            $data = $smt->fetch(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            if($data == null)
                return null;
            
            return $data;
        }
        public function getUsersByUserName($username){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = 'SELECT * FROM users WHERE username = :username';

            $smt = $db->prepare($query);
            $smt->execute([
                ":username" => $username
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