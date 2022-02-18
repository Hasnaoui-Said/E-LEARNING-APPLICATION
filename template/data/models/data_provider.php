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
        static function isLoged(){
            return (
                isset($_SESSION['auth']) &&
                isset($_SESSION['auth']['email']) &&
                isset($_SESSION['auth']['pass']) &&
                (time() - $_SESSION['auth']['session_gc_lifetime'] < 60 * 60)
                );
        }
    }
?>