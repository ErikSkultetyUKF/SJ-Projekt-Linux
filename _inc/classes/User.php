<?php

    class User extends Database{

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }

        public function login($email, $password) {
            try {

                $data = array(
                    'userEmail'=>$email,
                    'userPassword'=>$password,
                );

                $sql = "SELECT * FROM users WHERE email = :userEmail AND password = :userPassword";
                $queryRun = $this->db->prepare($sql);
                $queryRun->execute($data);
                $nRows = $queryRun->rowCount();

                if($nRows == 1) {
                    $_SESSION['logged_in'] = true;
                    return true;
                } else {
                    return false;
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>