<?php

    class Article extends Database {

        private $db;

        public function __construct() {
            $this->db = $this->dbConnection();
        }
        
        // Vybrať všetky články z db
        public function select() {
            try {
                $sql = "SELECT * FROM articles ORDER BY date DESC";
                $query = $this->db->query($sql);
                $articles = $query->fetchAll();
                return $articles;
    
            } catch (PDOException $e){
                echo($e->getMessage());
            }   
        }

        // Vybrať všetky články podľa používateľa z db
        public function selectByUser($userId) {
            try {
                $data = array(
                    'userId'=>$userId
                );
                $query = "SELECT * FROM articles WHERE author_id = :userId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);
                $articles = $queryRun->fetchAll();
                return $articles;
    
            } catch (PDOException $e){
                echo($e->getMessage());
            }   
        }

        // Vybrať jeden článok z db
        public function selectSingle($articleId) {
            try {
                $data = array(
                    'articleId'=>$articleId
                );
                $query = "SELECT * FROM articles WHERE id = :articleId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);
                
                $articleData = $queryRun->fetch();
                return $articleData; 
  
            } catch(PDOException $e) {   
                    echo $e->getMessage();
            } 
        }

        // Vložiť článok do db
        public function insert($articleData) {
            if($this->db) {
                    $data = array(
                        'articleTitle'=>$articleData['title'],
                        'articleAuthorId'=>$articleData['authorId'],
                        'articleAuthor'=>$articleData['author'],
                        'articleText'=>$articleData['text'],
                    );

                    try {
                      $query = "INSERT INTO articles (title, author_id, author, text) 
                      VALUES (:articleTitle, :articleAuthorId, :articleAuthor, :articleText)";
                      $queryRun = $this->db->prepare($query);
                      $queryRun->execute($data);    

                    } catch (PDOException $e) {
                      echo $e->getMessage();
                    }

            } else {
                    echo '<p>Nebolo nadviazané spojenie</p>';
            }
        }

        // Odstrániť článok z db
        public function delete($articleId) {
            try {
                $data = array(
                    'articleId' => $articleId
                );
                $query = "DELETE FROM articles WHERE id = :articleId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
 
        // Upraviť článok v db 
        public function edit($articleId, $newData) {
            try {
                $data = array(
                    'articleId' => $articleId,
                    'articleTitle' => $newData['title'],
                    'articleText' => $newData['text']
                );
            
                $query = "UPDATE articles SET title = :articleTitle, text = :articleText WHERE id = :articleId";
                $queryRun = $this->db->prepare($query);
                $queryRun->execute($data);

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>