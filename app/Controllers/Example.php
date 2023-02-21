<?php

namespace App\Controllers;
use codeigniter\API\ResponseTrait;

class Example extends BaseController 
{
    use ResponseTrait;

    public function get_data()
    {
        $data = [
            ['name' => 'João',
            'age' => 30
        ],
        [
            'name' => 'Felipe',
            'age' => 28
        ]
        ];

        return $this->response->setJSON($data);
    }
}