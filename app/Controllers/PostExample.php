<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\ModelExample;

class PostExample extends BaseController
{
    protected $modelExample;

    public function __construct()
    {
        $this->modelExample = new ModelExample();
    }
    public function post_data()
    {
        $name = $this->request->getPost('name');
        $age = $this->request->getPost('age');

        $data = [
            'name' => $name,
            'age' => $age
        ];

        $response = $this->modelExample->saveUserAndAge($data);

        // var_dump(file_get_contents('php://input'));
        
        return $this->response->setJSON($data);

    }
}