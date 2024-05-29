<?php

    class Contact extends Database {

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }
        
        // Vybrať všetky kontakty z db
        public function select() {
            try {
                $sql = "SELECT * FROM contact";
                $query = $this->db->query($sql);
                $contact = $query->fetchAll();
                return $contact;
    
            } catch (PDOException $e){
                echo($e->getMessage());
            }   
        }

        // Vybrať jeden kontakt z db
        public function selectSingle($contactId) {
            try {
                $data = array(
                    'contactId'=>$contactId
                );
                $query = "SELECT * FROM contact WHERE id = :contactId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);
                
                $contactData = $queryRun->fetch();
                return $contactData; 
  
            } catch(PDOException $e) {   
                    echo $e->getMessage();
            } 
        }

        // Vložiť kontakt do db
        public function insert($contactData) {
            if($this->db) {
                $data = array(
                    'contactName'=>$contactData['name'],
                    'contactEmail'=>$contactData['email'],
                    'contactMessage'=>$contactData['message'],
                    'contactAcceptStatus'=>$contactData['acceptStatus'],
                );

                try {
                    $query = "INSERT INTO contact (name, email, message, accept_status) 
                    VALUES (:contactName, :contactEmail, :contactMessage, :contactAcceptStatus)";
                    $queryRun = $this->db->prepare($query);
                    $queryRun->execute($data);    

                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

            } else {
                    echo '<p>Nebolo nadviazané spojenie</p>';
            }
        }

        // Odstrániť kontakt z db
        public function delete($contactId) {
            try {
                $data = array(
                    'contactId' => $contactId
                );
                $query = "DELETE FROM contact WHERE id = :contactId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        // Upraviť kontakt v db
        public function edit($contactId, $newData) {
            try {
                $data = array(
                    'contactId' => $contactId,
                    'contactName' => $newData['name'],
                    'contactEmail' => $newData['email'],
                    'contactMessage' => $newData['message']
                );
            
                $query = "UPDATE contact SET name = :contactName, email = :contactEmail, message = :contactMessage WHERE id = :contactId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);
             
    
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>