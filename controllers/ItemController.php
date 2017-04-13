<?php

/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 13.04.2017
 * Time: 10:14
 */
require_once '/models/Department.php';
require_once '/models/Employee.php';
require_once '/models/DepartmentEmployee.php';


class ItemController
{
    public $title;

    public function department()
    {
        // id validation
        if (!isset($_GET['id']) || empty($_GET['id'])) {
            header('Location: /#empty_id');
            exit;
        }
        $id = (int)$_GET['id'];

        $modelDepartment = new Department();
        $infoDepartment = $modelDepartment->getOneDepartment($id); // information about department

        $childDepartmentList = $modelDepartment->getChildDepartments($id); // list of department's child departments

        $modelDepartmentEmployee = new DepartmentEmployee();
        $employeeList = $modelDepartmentEmployee->getEmployeesByDepartmentId($id);
        $modelEmployee = new Employee();
        $listEmployees = $modelEmployee->getMultipleEmployees($employeeList['string']); // list of department employees


        // set page's title
        if (isset($infoDepartment['department_name'])) {
            $this->title = $infoDepartment['department_name'] . ' | Відділи';
        } else {
            $this->title = 'Неіснуючий | Відділи';
        }

        $contentPage = '/views/item/department.php'; // name of page file
        require_once '/views/layout/main.php'; // require main layout file
    }

    public function employee()
    {
        // id validation
        if (!isset($_GET['id']) || empty($_GET['id'])) {
            header('Location: /#empty_id');
            exit;
        }
        $id = (int)$_GET['id'];

        $modelEmployee = new Employee();
        $infoEmployee = $modelEmployee->getOneEmployee($id); // information about employee

        $childEmployeeList = $modelEmployee->getChildEmployees($id); // list of employee's child employees

        $modelDepartmentEmployee = new DepartmentEmployee();
        $departmentList = $modelDepartmentEmployee->getDepartmentsByEmployeeId($id);

        $modelDepartment = new Department();
        $listDepartments = $modelDepartment->getMultipleDepartments($departmentList['string']); // list of employee's department


        // set page's title
        if (isset($infoEmployee['employee_name'])) {
            $this->title = $infoEmployee['employee_name'] . ' | Співробітники';
        } else {
            $this->title = 'Неіснуючий | Співробітники';
        }


        $contentPage = '/views/item/employee.php'; // name of page file
        require_once '/views/layout/main.php'; // require main layout file
    }
}