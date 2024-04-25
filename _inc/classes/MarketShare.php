<?php

    class MarketShare extends Database {

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }

        // Vybrať všetky informácie z db
        public function select() {
            try {
                $sql = "SELECT * FROM market_share";
                $query = $this->db->query($sql);
                $marketShare = $query->fetchAll();
                return $marketShare;

            } catch(PDOException $e) {
                echo($e->getMessage());
            }   
        }
    }
?>