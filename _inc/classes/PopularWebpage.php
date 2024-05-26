<?php

    class PopularWebpage extends Database {

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }

        // Vybrať všetky stránky z db
        public function select() {
            try {
                $sql = "SELECT * FROM popular_webpages";
                $query = $this->db->query($sql);
                $popularWebpages = $query->fetchAll();
                return $popularWebpages;

            } catch(PDOException $e) {
                echo($e->getMessage());
            }   
        }
    }
?>