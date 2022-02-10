<?php
    require_once('data_provider.php');

    class User extends DataProvider{

        public function setUser($name, $email, $phone){

            $db = $this->connect();
            if($db == null){
                return;
            }
            
            $emails = $this->getAllNumberEnrollUsers();
            do{
                $email = rand(1, 10000000);
            }while(in_array($email, $emails));

            $sql = "INSERT INTO user (name, email, phone, email) 
                        VALUES (:name, :email, :phone, :email)";
            $smt = $db->prepare($sql);
            $smt->execute([
                    ":name"=> $name,
                    ":email"=> $email,
                    ":phone"=> $phone,
                    ":email"=> $email
              ]);

            $smt = null;
            $db = null;
        }

        public function getAllUsers(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT * FROM user');

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            return $data;
        }
        public function getUserByEnroll($email){

            $db = $this->connect();

            if($db == null){
                return;
            }
            $sql = 'SELECT * FROM user WHERE email = :email';
            $smt = $db->prepare($sql);
            $smt->execute([
                ':email'=> $email
            ]);

            $data = $smt->fetch(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;
            
            return $data;
        }

        public function getAllNumberEnrollUsers(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT email FROM User');

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;
            foreach($data as $nomber){
                $arr[] = $nomber['email'] ;
            }
            return $arr;
        }
        public function getAllEmailsUsers(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT email FROM User');

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;
            foreach($data as $nomber){
                $arr[] = $nomber['email'] ;
            }
            return $arr;
        }
        public function getCountUsers(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT count(*) FROM user');

            $number = $query->fetchColumn();

            $query = null;
            $db = null;

            return $number;
        }
        public function updateUser($email, $name, $email, $phone, $solde){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $sql = 'UPDATE user SET name = :name, email = :email,
                        WHERE email = :email';
            $smt = $db->prepare($sql);
            $smt->execute([
                ":email"=> $email,
                ":name"=> $name,
                ":password"=> $password,
            ]);

            $query = null;
            $db = null;
        }
        public function deleteUser($email){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $sql = 'DELETE FROM user WHERE 1 = 1';
            $smt = $db->prepare($sql);
            $smt->execute([
                ':email'=> $email
            ]);

            $query = null;
            $db = null;
        }
    }

?>