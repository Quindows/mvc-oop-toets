<?php

class Country{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getCountries(){
        $this->db->query('SELECT * FROM countries');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getCountry($id){
        $this->db->query("SELECT * FROM countries where id = :id");
        $this->db->bind(":id", $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function createCountry($post){
        $this->db->query("INSERT INTO countries 
                          SET Name = :name,
                              CapitalCity = :capitalCity,
                              Continent = :continent,
                              Population = :population");
        $this->db->bind(':name', $post['Name'], PDO::PARAM_STR);
        $this->db->bind(':capitalCity', $post['CapitalCity'], PDO::PARAM_STR);
        $this->db->bind(':continent', $post['Continent'], PDO::PARAM_STR);
        $this->db->bind(':population', $post['Population'], PDO::PARAM_INT);
        return $this->db->execute();
    }

    public function updateCountry($post){
        //var_dump($post);exit();
        $this->db->query("UPDATE countries 
                          SET Name = :name, CapitalCity = :capitalCity, Continent = :continent, Population = :population
                          WHERE id = :id");
        $this->db->bind(':name', $post['Name']);
        $this->db->bind(':capitalCity', $post['CapitalCity']);
        $this->db->bind(':continent', $post['Continent']);
        $this->db->bind(':population', $post['Population']);
        $this->db->bind(':id', $post['id']);
        return $this->db->execute();
    }

    public function deleteCountry($id){
        $this->db->query("DELETE FROM countries
                          WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}