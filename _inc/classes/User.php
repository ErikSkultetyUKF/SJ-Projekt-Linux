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
                    'userPassword'=>md5($password)
                );

                $sql = "SELECT * FROM users WHERE email = :userEmail AND password = :userPassword";
                $queryRun = $this->db->prepare($sql);
                $queryRun->execute($data);
                $nRows = $queryRun->rowCount();

                if($nRows == 1) {
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['isAdmin'] = $queryRun->fetch()->role;
                    return true;
                } else {
                    return false;
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        public function register($email, $password) {
            try {
                $data = array(
                    'userEmail' => $email,
                    'userPassword' => md5($password),
                    'userRole'=>'0'
                );

                $sql = "INSERT INTO users (email, password,role) VALUES (:userEmail, :userPassword, :userRole)";
                $queryRun = $this->db->prepare($sql);
                $queryRun->execute($data);
                return true;

            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>