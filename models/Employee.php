<?php

/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 16:56
 */

require_once 'Model.php';
require_once 'DepartmentEmployee.php';

class Employee extends Model
{

    // table name
    private $tableName = 'employee';

    // get specific record by id
    public function getOneEmployee($id)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `id`=' .$id;
        return $this->getOne($query);
    }

    // get several records by list of ids
    public function getMultipleEmployees($ids)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `id` IN(' .$ids . ')';
        return $this->getAll($query);
    }

    // get child employees by parent employee id
    public function getChildEmployees($parentId)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `parent_employee_id`=' .$parentId;
        return $this->getAll($query);
    }

    // get all existed employees
    public function getAllEmployees()
    {
        $query = 'SELECT * FROM ' . $this->tableName;
        return $this->getAll($query);
    }
}