<?php
    require_once(dirname(__FILE__) . './models/student.php');
    require_once('./models/data_provider.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET'){
        $type = $_GET['type'] ?? "";
        // create
        if($type == 'add'){
            if(isset($_POST['name']) && isset($_POST['email'])){
                $name = $_POST['name'] ;
                $email = $_POST['email'] ;
                $phone = $_POST['phone'] ?? "";
                $new_student = new Student();
                $new_student->setStudent($name, $email, $phone);
                $dir = new DataProvider();
                $dir->redirect('./../components/students.php');
                die();
            }
        }
        // update
        if($type == 'update'){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_GET['enroll'])){
                $enroll = $_GET['enroll'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'] ?? "";
                $solde = $_POST['solde'] ?? 0;

                $new_student = new Student();
                // echo "$enroll, $name, $email, $phone, $solde";
                $new_student->updateStudent($enroll, $name, $email, $phone, $solde);
                $dir = new DataProvider();
                $dir->redirect('./../components/students.php');
                die();
                // native, culture generale au web, tendance.........  
            }
        }
        // delete
        if($type == 'delete'){
            if(isset($_GET['enroll'])){
                $enroll = $_GET['enroll'];
                // $new_student = new Student();
                // $myStudent = $new_student->getStudentByEnroll($enroll);
                $delete_student = new Student();
                $delete_student->deleteStudent($enroll);

                $dir = new DataProvider();
                $dir->redirect('./../components/students.php');
                die();
            }
        }
    }

?>