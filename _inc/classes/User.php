<?php

    class User extends Database{

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }

        // Vybrať všetkých používateľov z db
        public function select() {
            try {
                $sql = "SELECT * FROM users";
                $query = $this->db->query($sql);
                $users = $query->fetchAll();
                return $users;

            } catch(PDOException $e) {
                echo($e->getMessage());
            }   
        }

        // Vybrať jedného používateľa z db
        public function selectSingle($userId) {
            try {
                $data = array(
                    'userId'=>$userId
                );
                $query = "SELECT * FROM users WHERE id = :userId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);
                
                $articleData = $queryRun->fetch();
                return $articleData; 
  
            } catch(PDOException $e) {   
                    echo $e->getMessage();
            } 
        }

        // Odstrániť článok z db
        public function delete($userId) {
            try {
                $data = array(
                    'userId' => $userId
                );
                $query = "DELETE FROM users WHERE id = :userId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        // Prihlásenie
        public function login($email, $password) {
            try {
                $data = array(
                    'userEmail'=>$email,
                    'userPassword'=>md5($password)
                );

                $sql = "SELECT * FROM users WHERE email = :userEmail AND password = :userPassword";
                $queryRun = $this->db->prepare($sql);
                $queryRun->execute($data);
                $nRows = $queryRun->rowCount(); // Vráti počet vybraných riadok

                if($nRows == 1) { // Vybraný presne 1 riadok
                    $_SESSION['userId'] = $queryRun->fetch()->id;

                    /* Dočasné riešenie ***************************/
                    $queryRun = $this->db->prepare($sql);
                    $queryRun->execute($data);
                    /**********************************************/

                    $_SESSION['username'] = $queryRun->fetch()->username;
                    $_SESSION['loggedIn'] = true;

                    /* Dočasné riešenie ***************************/
                    $queryRun = $this->db->prepare($sql);
                    $queryRun->execute($data);
                    /**********************************************/

                    $_SESSION['isAdmin'] = $queryRun->fetch()->role;
                    return true;
                } else {
                    return false;
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        // Registrácia
        public function register($username, $email, $password) {
            try {
                $data = array(
                    'userUsername' => $username,
                    'userEmail' => $email,
                    'userPassword' => md5($password),
                    'userRole'=>'0'
                );

                $sql = "INSERT INTO users (username, email, password, role) VALUES (:userUsername, :userEmail, :userPassword, :userRole)";
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