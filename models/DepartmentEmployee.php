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
    // table name
    private $tableName = 'department_employee';

    // get all departments ids by employee id
    public function getDepartmentsByEmployeeId($employeeId)
    {
        $query = 'SELECT `department_id` FROM ' . $this->tableName . ' WHERE `employee_id`=' .$employeeId;
        $result = $this->getAll($query);
        return $this->handleResult($result, 'department_id');
    }

    // get all employees ids by department id
    public function getEmployeesByDepartmentId($departmentId)
    {
        $query = 'SELECT `employee_id` FROM ' . $this->tableName . ' WHERE `department_id`=' .$departmentId;
        $result = $this->getAll($query);
        return $this->handleResult($result, 'employee_id');
    }

    // create array with string of ids of and array with ids by $field value
    private function handleResult($result, $field) {
        $data['array'] = array();

        if(empty($result)) {
            $data['string'] = '0';
        } else {
            $data['string'] = '';
            foreach($result as $item) {
                $data['array'][] = $item[$field];
                $data['string'] .= $item[$field].',';
            }
            $data['string'] = substr($data['string'], 0, -1);
        }

        return $data;
    }

}