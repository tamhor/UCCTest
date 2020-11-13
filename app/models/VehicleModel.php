<?php

class VehicleModel
{
    protected $table = 'vehicles';
    protected $db;

    public function __construct()
    {
        $this->db = new Databases;
    }

    public function get()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->getAll();
    }
}
