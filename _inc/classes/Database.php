<?php

    class Database {

        // Pridelenie zadefinovaných informácii o db
        private $host = DATABASE['HOST'];
        private $dbName = DATABASE['DBNAME'];
        private $userName = DATABASE['USERNAME'];
        private $password = DATABASE['PASSWORD'];

        // Spojenie s db
        protected function dbConnection() {
            try {
                $connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName . ";charset=utf8", 
                                      $this->userName, 
                                      $this->password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                return $connection;
                
            } catch(PDOException $e) {
                die("Chyba pripojenia k databáze: " . $e->getMessage());
            }
        }
    }
?>