<?php

    class Newsletter extends Database {

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }
        
        // Vybrať všetky newslettery z db
        public function select() {
            try {
                $sql = "SELECT * FROM newsletters";
                $query = $this->db->query($sql);
                $newsletters = $query->fetchAll();
                return $newsletters;
    
            } catch (PDOException $e){
                echo($e->getMessage());
            }   
        }

        // Vybrať jeden newsletter z db
        public function selectSingle($newsletterId) {
            try {
                $data = array(
                    'newsletterId'=>$newsletterId
                );
                $query = "SELECT * FROM newsletters WHERE id = :newsletterId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);
                
                $newsletterData = $queryRun->fetch();
                return $newsletterData; 
  
            } catch(PDOException $e) {   
                    echo $e->getMessage();
            } 
        }

        // Vložiť kontakt do db
        public function insert() {
            if($this->db) {
                if(isset($_POST['newsletterSubmit'])) {
                    $data = array(
                        'newsletterTitle'=>$_POST['title'],
                        'newsletterAuthor'=>$_POST['author'],
                        'newsletterText'=>$_POST['text'],
                    );

                    try {
                      $query = "INSERT INTO newsletters (title, author, text) 
                      VALUES (:newsletterTitle, :newsletterAuthor, :newsletterText)";
                      $queryRun = $this->db->prepare($query);
                      $queryRun->execute($data);    

                    } catch (PDOException $e) {
                      echo $e->getMessage();
                    }

                } else {
                    echo '<p>Newsletter nebol odoslaný</p>';
                }
            } else {
                    echo '<p>Nebolo nadviazané spojenie</p>';
            }
        }

        // Odstrániť newsletter z db
        public function delete() {
            try {
                $data = array(
                    'newsletterId' => $_POST['deleteNewsletter']
                );
                $query = "DELETE FROM newsletters WHERE id = :newsletterId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
 
        // Upraviť newsletter v db 
        public function edit($newsletterId, $newData) {
            try {
                $data = array(
                    'newsletterId' => $newsletterId,
                    'newsletterTitle' => $newData['title'],
                    'newsletterAuthor' => $newData['author'],
                    'newsletterText' => $newData['text']
                );
            
                $query = "UPDATE newsletters SET title = :newsletterTitle, author = :newsletterAuthor, text = :newsletterText WHERE id = :newsletterId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>