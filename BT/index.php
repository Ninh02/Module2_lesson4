<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
$employeeManager=new EmployeeManager();
$employeeManager->add(new Employee("Nguyen Van A","1-2-1990","Ha Noi","ke toan"));
$employeeManager->add(new Employee("Nguyen Van B","2-2-1991","Phu Tho","nhan vien"));
$employeeManager->add(new Employee("Nguyen Van C","4-2-1992","Vinh Phuc","to truong"));
$employees=$employeeManager->getEmployees();
foreach ($employees as $employee){
    echo $employee->getName().",".
        $employee->getDateOfBirth().",".
        $employee->getAddress().",".
        $employee->getJobPosition()."<br>";
}
