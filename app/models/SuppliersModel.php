<?php
class SuppliersModel{

    private $table = 'suppliers';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSuppliers()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getSuppliersById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

   public function storeSuppliersData($data)
    {    
        $query = "INSERT INTO suppliers
         VALUES 
         ('',:company_name, :contact_name, :phone_number, :address)";    
        $this->db->query($query);        
        $this->db->bind('company_name', $data['company_name']);
        $this->db->bind('contact_name', $data['contact_name']);
        $this->db->bind('phone_number', $data['phone_number']);
        $this->db->bind('address', $data['address']);

        $this->db->execute();

    }

    public function deleteSuppliersData($id)
    {
        $query = "DELETE FROM suppliers WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
    }
}