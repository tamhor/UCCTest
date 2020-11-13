<?php

class Vehicle extends Controller
{
    public function index()
    {
        $data = $this->model('VehicleModel')->get();
        print_r($data);
        die;

        $this->view('vehicle/index', $data);
    }
}
