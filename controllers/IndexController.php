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
        // get list of all departmensts
        $departmentModel = new Department();
        $department      = $departmentModel->getAllDepartments();

        // get list of all employees
        $employeeModel   = new Employee();
        $employee        = $employeeModel->getAllEmployees();

        // page title
        $this->title = 'Головна';

        $contentPage = '/views/index/get-all-data.php'; // name of page file


        require_once '/views/layout/main.php'; // require main layout file
    }
}