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
        for($i=0;$i<count($this->employees);$i++){
            if($this->employees[$i]==$employee){
                array_splice($this->employees,$this->employees[$i-1],1);
            }
        }
        print_r($this->employees);
    }
}
