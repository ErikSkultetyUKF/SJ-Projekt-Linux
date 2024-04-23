<?php

    class Contact extends Database {

        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }
        
        public function select() {
            try{
                $sql = "SELECT * FROM contact";
                $query = $this->db->query($sql);
                $contact = $query->fetchAll();
                return $contact;
    
            }catch(PDOException $e){
                echo($e->getMessage());
            }   
        }

        public function insert() {
            if($this->db){
                // Spojenie s db;
                if(isset($_POST['submitted'])) {
                   // Formulár bol odoslaný;
                   $data = array('contactName'=>$_POST['name'],
                      'contactEmail'=>$_POST['email'],
                      'contactMessage'=>$_POST['message'],
                      'contactAcceptStatus'=>$_POST['acceptStatus'],
                    );

                    try {
                      $query = "INSERT INTO contact (name, email, message, accept_status) 
                      VALUES (:contactName, :contactEmail, :contactMessage, :contactAcceptStatus)";
                      $query_run = $this->db->prepare($query);
                      $query_run->execute($data);    

                    }catch(PDOException $e) {
                      echo $e->getMessage();
                    }


                } else {
                    echo 'Formulár nebol odoslaný';
                }
              } else {
                echo 'Nemám spojenie';
              }
        }
    }

?>