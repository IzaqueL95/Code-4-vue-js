<?php

namespace App\Models;

use CodeIgniter\Model;
use PDO;

class GetDataModel extends Model {

    public function getAllDados()
    {
        $conn = new PDO('mysql:host=localhost;dbname=vueblog', 'root','');

        $query = 'SELECT * FROM dados';

        $statment = $conn->prepare($query);

        $statment->execute();

        return $resp = $statment->fetchAll(PDO::FETCH_ASSOC)[0];

        // var_dump($resp);
    }

}