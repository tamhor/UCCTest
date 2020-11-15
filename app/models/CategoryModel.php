<?php


class CategoryModel
{
    protected $table = 'categories';
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
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->get();
    }
}
