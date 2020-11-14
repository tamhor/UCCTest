<?php

class Vehicle extends Controller
{
    public function __construct()
    {
        $this->model = $this->model('VehicleModel');
    }

    public function index()
    {
        return $this->view('vehicle/index');
    }

    public function api_get()
    {
        $data = $this->model->get();

        if ($data > 0) {
            // echo json_encode([
            //     'status' => 200,
            //     'data' => $data,
            // ]);
            echo json_encode($data);
        } else {
            echo json_encode([
                'status' => 404,
                'data' => 'No data found'
            ]);
        }
    }

    public function api_post()
    {
        $data = json_decode(file_get_contents("php://input"));

        $item = $this->model;

        $item->name = $data->name;
        $item->engine_displacement = $data->engine_displacement;
        $item->engine_power = $data->engine_power;
        $item->price = $data->price;
        $item->location = $data->location;
        $item->category_id = $data->category_id;

        if ($data != null) {
            $item->insert();
            echo json_encode(
                [
                    'status' => 200,
                    'message' => 'Vehicle create succesfully',
                    'data' => $item,
                ]
            );
        } else {
            echo json_encode(
                [
                    'status' => 400,
                    'message' => 'Vehicle could not be created',
                ]
            );
        }
    }
}
