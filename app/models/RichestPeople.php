<?php
class RichestPeople{

private $db;

public function __construct(){
    $this->db = new Database();
}

public function getRichestPeople(){
    $this->db->query('SELECT * FROM RichestPeople ORDER BY vermogen');
    $result = $this->db->resultSet();
    return $result;
}

public function getRichestPerson($id){
    $this->db->query("SELECT * FROM RichestPeople where id = :id");
    $this->db->bind(":id", $id, PDO::PARAM_INT);
    return $this->db->single();
}

public function deleteRichestPerson($id){
    $this->db->query("DELETE FROM RichestPeople
                      WHERE id = :id");
    $this->db->bind(':id', $id);
    return $this->db->execute();
}
}