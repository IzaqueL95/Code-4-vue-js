<?php

namespace App\Models;

use CodeIgniter\Model;

use PDO;
class ModelExample extends Model {

    public function saveUserAndAge($data)
    {
        $conn = new PDO('mysql:host=localhost;dbname=vueblog', 'root','');
        $query = 'INSERT INTO dados
                 (nome,idade)
                 VALUES
                 (
                    :nome,
                    :idade
                 )';
        $statment = $conn->prepare($query);

        $statment->bindValue(':nome', $data['name']);
        $statment->bindValue(':idade', $data['age']);

        return $statment->execute();

        // unset($conn);
                 
    }
}