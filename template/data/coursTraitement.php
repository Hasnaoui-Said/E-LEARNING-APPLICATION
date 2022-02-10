<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET'){
        $type = $_GET['type'] ?? "";
        // create
        if($type == 'add'){
            if(isset($_POST['title'])){
                $title = $_POST['title'] ;
                $price = $_POST['price'] ;
                $description = $_POST['description'] ?? "";
                require_once(dirname(__FILE__) . './models/cours.php');
                $new_Cours = new Cours();
                $new_Cours->setCours($title, $description, $price);
                require_once('./models/data_provider.php');
                $dir = new DataProvider();
                $dir->redirect('./../components/cours.php');
                die();
            }
        }
        // update
        if($type == 'update'){
            if(isset($_POST['title'])){
                $id = $_GET['id'];
                $title = $_POST['title'] ;
                $price = $_POST['price'] ?? "";
                $description = $_POST['description'] ?? "";
                
                require_once(dirname(__FILE__) . './models/cours.php');
                $new_Cours = new Cours();
                $new_Cours->updateCours($title, $description, $price, $id);
                require_once('./models/data_provider.php');
                $dir = new DataProvider();
                $dir->redirect('./../components/cours.php');
                die();
                // native, culture generale au web, tendance.........  
            }
        }
        // delete
        if($type == 'delete'){
            if(isset($_GET['id'])){
                $id = $_GET['id'] ?? "";
                require_once(dirname(__FILE__) . './models/cours.php');
                $new_Cours = new Cours();
                $new_Cours->deleteCoursById($id);
                
                require_once('./models/data_provider.php');
                $dir = new DataProvider();
                $dir->redirect('./../components/students.php');
                die();
            }
        }
    }

?>