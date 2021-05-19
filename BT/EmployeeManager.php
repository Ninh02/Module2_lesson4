<?php
class EmployeeManager{
    private array $employees;
    public function __construct(){
        $this->employees=[];
    }
    public function add($employee){
        $this->employees[]=$employee;
    }
    public function getEmployees(): array
    {
        return $this->employees;
    }
    public function delete($employee): array
    {
        unset($this->employees[$employee]);
    }
}
