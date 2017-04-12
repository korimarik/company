<?php

/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 16:56
 */

require_once 'Model.php';

class Department extends Model
{
    private $tableName = 'department';

    public function getOneDepartment($id)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `id`=' .$id;
        return $this->getOne($query);
    }

    public function getAllDepartments()
    {
        $query = 'SELECT * FROM ' . $this->tableName;
        return $this->getAll($query);
    }

}