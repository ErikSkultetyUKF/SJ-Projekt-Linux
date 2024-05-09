<?php

    class Contact extends Database {

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }
        
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

        public function insert() {
            if($this->db) {
                if(isset($_POST['submitted'])) {
                    $data = array(
                        'contactName'=>$_POST['name'],
                        'contactEmail'=>$_POST['email'],
                        'contactMessage'=>$_POST['message'],
                        'contactAcceptStatus'=>$_POST['acceptStatus'],
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
                    echo '<p>Formulár nebol odoslaný</p>';
                }
            } else {
                    echo '<p>Nebolo nadviazané spojenie</p>';
            }
        }
        public function delete() {
            try {
                $data = array(
                    'contactId' => $_POST['deleteContact']
                );
                $query = "DELETE FROM contact WHERE id = :contactId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
  
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