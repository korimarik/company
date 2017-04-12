<?php

/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 17:49
 */

require_once 'Model.php';


class DepartmentEmployee extends Model
{
    private $tableName = 'department_employee';

    public function getDepartmentByEmployeeId($employeeId)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `employee_id`=' .$employeeId;
        return $this->getAll($query);
    }

    public function getEmployeeByDepartmentId($departmentId)
    {
        $query = 'SELECT * FROM ' . $this->tableName . ' WHERE `department_id`=' .$departmentId;
        return $this->getAll($query);
    }

}