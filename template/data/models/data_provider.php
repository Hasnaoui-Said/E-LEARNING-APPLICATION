<?php
    require_once(dirname(__FILE__) .'./../../config/config.php');

    class DataProvider{

        public function connect(){
            try{
                return new PDO(CONFIG['db'], CONFIG['db_user'], CONFIG['db_password']);
            }catch(PDOException $e){
                return null;
            }
        }
        public function redirect($page){
            header("location: $page");
        }
    }
?>