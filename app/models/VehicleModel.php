<?php


class VehicleModel
{
    protected $table = 'vehicles';
    protected $db;

    public $name;
    public $engine_displacement;
    public $engine_power;
    public $price;
    public $location;
    public $category_id;

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

    public function insert()
    {
        $this->header();
        $query = "INSERT INTO 
                " . $this->table . "
                SET
                    name = :name,
                    engine_displacement = :engine_displacement,
                    engine_power = :engine_power,
                    price = :price,
                    location = :location,
                    category_id = :category_id";

        $this->db->query($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->engine_displacement = htmlspecialchars(intval($this->engine_displacement));
        $this->engine_power = htmlspecialchars(intval($this->engine_power));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->location = htmlspecialchars(strip_tags($this->location));
        $this->category_id = htmlspecialchars(intval($this->category_id));

        $this->db->bind(':name', $this->name);
        $this->db->bind(':engine_displacement', $this->engine_displacement);
        $this->db->bind(':engine_power', $this->engine_power);
        $this->db->bind(':price', $this->price);
        $this->db->bind(':location', $this->location);
        $this->db->bind(':category_id', $this->category_id);
        $this->db->execute();

        return true;
    }
}
