<?php

class Api extends Controller
{
    public function __construct()
    {
        $this->model = $this->model('ApiModel');
    }

    public function index()
    {
        return $this->api_get();
    }

    public function api_get()
    {
        $data = $this->model->get();

        if ($data > 0) {
            echo json_encode($data);
        } else {
            echo json_encode([
                'status' => 404,
                'data' => 'No data found'
            ]);
        }
    }
}
