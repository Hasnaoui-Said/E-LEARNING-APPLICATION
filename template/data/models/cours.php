<?php
    require_once('data_provider.php');

    class Cours extends DataProvider{

        public function setCours($title, $description, $price){

            $db = $this->connect();
            if($db == null){
                return;
            }

            $sql = "INSERT INTO cours (title, description, price) VALUES (:title, :description, :price)";
            $smt = $db->prepare($sql);

            $smt->execute(
                [
                    ":title"=> $title,
                    ":description"=> $description,
                    ":price"=> $price
                ]
            );

            $smt = null;
            $db = null;
        }

        public function getAllCours(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT * FROM cours');

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            return $data;
        }

        public function getCoursById($id){

            $db = $this->connect();

            if($db == null)
                return;

            $query = 'SELECT * FROM cours WHERE id = :id';

            $smt = $db->prepare($query);
            $smt->execute([
                ":id"=>$id
            ]);

            $data = $smt->fetch(PDO::FETCH_ASSOC);

            $smt = null;
            $db = null;

            return $data;
        }
        public function getCountCours(){

            $db = $this->connect();

            if($db == null)
                return;

            $query = $db->query('SELECT count(*) FROM cours');

            $number = $query->fetchColumn();

            $query = null;
            $db = null;

            return $number;
        }

        public function deleteCoursById($id){
            $db = $this->connect();
            if($db == null)
                return;
            $query = "DELETE FROM cours WHERE id = :id";
            $smt = $db->prepare($query);
            $smt->execute([
                ':id'=>$id
            ]);

            $smt = null;
            $db = null;
        }

        public function updateCours($title, $description, $price, $id){
            $db = $this->connect();
            if($db == null)
                return;

            $query = "UPDATE cours SET title = :title, description = :description, price = :price WHERE id = :id";
            $smt = $db->prepare($query);
            $smt->execute([
                ":id"=> $id,
                ":title"=> $title,
                ":description"=> $description,
                ":price"=> $price
            ]);

            $smt == null;
            $db == null;
        }

    }

?>