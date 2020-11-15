<?php


class ApiModel
{
    protected $db;
    public $name;

    public function __construct()
    {
        $this->db = new Databases;
    }

    public function header()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: GET");
        header("Access-Control-Allow-Credentials: true");
        header("Content-Type: application/json; charset=UTF-8");
    }

    public function get()
    {
        $this->header();
        $this->db->query('SELECT vehicles.*, categories.name AS category FROM vehicles, categories
        WHERE vehicles.category_id = categories.id');
        return $this->db->get();
    }
}
