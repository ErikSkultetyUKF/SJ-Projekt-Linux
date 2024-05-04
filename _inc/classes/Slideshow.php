<?php

    class Slideshow extends Database {

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }

        // Vybrať všetky informácie z db
        public function select() {
            try {
                $sql = "SELECT * FROM slides";
                $query = $this->db->query($sql);
                $slides = $query->fetchAll();
                return $slides;

            } catch(PDOException $e) {
                echo($e->getMessage());
            }   
        }
    }
?>