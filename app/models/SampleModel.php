<?php
class SampleModel{

    private $table = 'sample';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSample()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getSampleById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

   public function storeSampleData($data)
    {    
        $query = "INSERT INTO ".$this->table." (name) VALUES (:sample)";

        $this->db->query($query);        
        $this->db->bind('sample', $data['name']);

        $this->db->execute();
     
    }
}