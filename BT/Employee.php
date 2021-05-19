<?php

class Employee
{
    public string $name;
    public string $dateOfBirth;
    public string $address;
    public string $jobPosition;

    public function __construct( $name, $dateOfBirth, $address, $jobPosition)
    {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->jobPosition = $jobPosition;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDateOfBirth(string $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setJobPosition(string $jobPosition)
    {
        $this->jobPosition = $jobPosition;
    }

    public function getJobPosition(): string
    {
        return $this->jobPosition;
    }

}
