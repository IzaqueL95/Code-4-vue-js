<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function getData()
    {
        $data = [
                'message' => 'Hello from codeigniter'
        ];
        return $this->response->setJson($data);
    }
}
