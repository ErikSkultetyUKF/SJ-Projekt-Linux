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
    }
?>