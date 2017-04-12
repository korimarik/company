<?php
/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 16:09
 */

require_once '/models/Department.php';
require_once '/models/Employee.php';
require_once '/models/DepartmentEmployee.php';

class IndexController
{
    public $title;

    public function getAllData()
    {
        $departmentModel = new Department();
        $department      = $departmentModel->getAllDepartments();

        $employeeModel   = new Employee();
        $employee        = $employeeModel->getAllEmployees();

        $mod = new DepartmentEmployee();
        $arr  = $mod->getEmployeeByDepartmentId(1);

        $this->title = 'Головна';

        $contentPage = '/views/index/get-all-data.php';
        require_once '/views/layout/main.php';
    }
}