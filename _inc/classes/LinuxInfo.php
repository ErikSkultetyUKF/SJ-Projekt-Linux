<?php
    class LinuxInfo extends Database{

    private $db;

    public function __construct(){
        $this->db = $this->db_connection();
    }

    // Vybrať všetky informácie z db
    public function select(){
        try{
            $sql = "SELECT * FROM linux_info";
            $query = $this->db->query($sql);
            $linuxInfo = $query->fetchAll();
            return $linuxInfo;

        }catch(PDOException $e){
            echo($e->getMessage());
        }   
    }
}
?>