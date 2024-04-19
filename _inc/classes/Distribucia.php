<?php
    class Distribucia extends Database{

    private $db;

    public function __construct(){
        $this->db = $this->db_connection();
    }

    // Vybrať všetky informácie z db
    public function select(){
        try{
            $sql = "SELECT * FROM distribucie";
            $query = $this->db->query($sql);
            $distribucie = $query->fetchAll();
            return $distribucie;

        }catch(PDOException $e){
            echo($e->getMessage());
        }   
    }
}
?>