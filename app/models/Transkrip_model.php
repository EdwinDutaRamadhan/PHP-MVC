<?php

class Transkrip_model{
    private $table = 'transkrip';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getTranskrip(){
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }
}