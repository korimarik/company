<?php

/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 16:56
 */

require_once 'Model.php';

class Employee extends Model
{

    private $tableName = 'employee';

    public function getOneEmployee($id)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `id`=' .$id;
        return $this->getOne($query);
    }

    public function getAllEmployees()
    {
        $query = 'SELECT * FROM ' . $this->tableName;
        return $this->getAll($query);
    }
}