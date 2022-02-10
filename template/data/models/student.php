<?php
    require_once('data_provider.php');

    class Student extends DataProvider{

        public function setStudent($name, $email, $phone){

            $db = $this->connect();
            if($db == null){
                return;
            }
            
            $enroll_Numbers = $this->getAllNumberEnrollStudents();
            do{
                $enroll_Number = rand(1, 10000000);
            }while(in_array($enroll_Number, $enroll_Numbers));

            $sql = "INSERT INTO student (name, email, phone, enroll_Number) 
                        VALUES (:name, :email, :phone, :enroll_Number)";
            $smt = $db->prepare($sql);
            $smt->execute([
                    ":name"=> $name,
                    ":email"=> $email,
                    ":phone"=> $phone,
                    ":enroll_Number"=> $enroll_Number
              ]);

            $smt = null;
            $db = null;
        }

        public function getAllStudents(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT * FROM student');

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            return $data;
        }
        public function getStudentByEnroll($enroll_number){

            $db = $this->connect();

            if($db == null){
                return;
            }
            $sql = 'SELECT * FROM student WHERE enroll_number = :enroll_number';
            $smt = $db->prepare($sql);
            $smt->execute([
                ':enroll_number'=> $enroll_number
            ]);

            $data = $smt->fetch(PDO::FETCH_ASSOC);

            $smt = null;
            $db = null;
            
            return $data;
        }

        public function getAllNumberEnrollStudents(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT enroll_Number FROM student');

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;
            foreach($data as $nomber){
                $arr[] = $nomber['enroll_Number'] ;
            }
            return $arr;
        }
        public function getAllEmailsStudents(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT email FROM student');

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;
            foreach($data as $nomber){
                $arr[] = $nomber['email'] ;
            }
            return $arr;
        }
        public function getCountStudents(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT count(*) FROM student');

            $number = $query->fetchColumn();

            $query = null;
            $db = null;

            return $number;
        }
        public function updateStudent($enroll_Number, $name, $email, $phone, $solde){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $sql = 'UPDATE student SET name = :name, email = :email, phone = :phone, solde = :solde
                        WHERE enroll_Number = :enroll_Number';
            $smt = $db->prepare($sql);
            $smt->execute([
                ":enroll_Number"=> $enroll_Number,
                ":name"=> $name,
                ":email"=> $email,
                ":phone"=> $phone,
                ":solde"=> $solde
            ]);

            $query = null;
            $db = null;
        }
        public function deleteStudent($enroll_Number){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $sql = 'DELETE FROM student WHERE enroll_Number = :enroll_Number';
            $smt = $db->prepare($sql);
            $smt->execute([
                ':enroll_Number'=> $enroll_Number
            ]);

            $query = null;
            $db = null;
        }
    }

?>