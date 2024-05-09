<?php

    class Distribution extends Database {

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }

        // Vybrať všetky informácie z db
        public function select() {
            try {
                $sql = "SELECT * FROM distributions";
                $query = $this->db->query($sql);
                $distributions = $query->fetchAll();
                return $distributions;

            } catch(PDOException $e) {
                echo($e->getMessage());
            }   
        }
        public function selectSingle() {
            if(isset($_GET['id']) && is_numeric($_GET['id'])) {
                $id = $_GET['id'];
                try {
                    $sql = "SELECT * FROM distributions WHERE id = ?";
                    $query = $this->db->prepare($sql);
                    $query->execute([$id]);
                    $distributions = $query->fetch();

                    if($distributions) {
                        return $distributions;
                    } else {
                        header("HTTP/1.0 400 Bad Request");
                        header("Location: 404.php");
                        die();
                    }

                } catch(PDOException $e) {
                    echo($e->getMessage());
                }   
            } else {
                header("HTTP/1.0 400 Bad Request");
                header("Location: 404.php");
                die();
            }
        }
    }
?>