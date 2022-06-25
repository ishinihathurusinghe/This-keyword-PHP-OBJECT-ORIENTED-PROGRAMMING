<?php

class Employee{
    var $first_name;
    var $last_name;

    function full_name(){
        return $this->first_name . ' ' . $this->last_name;
    }
}

$employee = new Employee;

$employee->first_name ='George';
$employee->last_name ='GHHH';

echo $employee->full_name();



?>