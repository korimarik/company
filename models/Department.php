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

    // table name
    private $tableName = 'department';


    // get specific record by id
    public function getOneDepartment($id)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `id`=' .$id;
        return $this->getOne($query);
    }

    // get several records by list of ids
    public function getMultipleDepartments($ids)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `id` IN(' .$ids . ')';
        return $this->getAll($query);
    }

    // get child departments by parent department id
    public function getChildDepartments($parentId)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `parent_department_id`=' .$parentId;
        return $this->getAll($query);
    }

    // get all existed departments
    public function getAllDepartments()
    {
        $query = 'SELECT * FROM ' . $this->tableName;
        return $this->getAll($query);
    }

}