<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\GetDataModel;

class GetDados extends BaseController {

    protected $modelGetData;

    public function __construct()
    {
        $this->modelGetData = new GetDataModel();
    }

    public function principal()
    {
        return view('view_getdados');
    }

    public function getAllDados()
    {
        $data = $this->modelGetData->getAllDados();

        

        return $this->response->setJson($data);
    }


}