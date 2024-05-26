<?php

    class ContentCreator extends Database {

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }

        // Vybrať všetkých tvorcov z db
        public function select() {
            try {
                $sql = "SELECT * FROM content_creators";
                $query = $this->db->query($sql);
                $contentCreators = $query->fetchAll();
                return $contentCreators;

            } catch (PDOException $e) {
                echo($e->getMessage());
            }   
        }
    }
?>