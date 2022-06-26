<?php
class Employeewage
{
    public $empinput;
    public $isPresent=1;
    function welcome()
    {
        echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
    }
    function random_number()
    {
        $this->empinput=rand(0,1);
        
    }
    function attendence()
    {
        if($this->empinput==$this->isPresent)
        {
            echo "Employee is Present";
        }
        else{
            echo "Employee is Absent";
        }
    }
    
}
$obj=new Employeewage();
$obj->welcome();
$obj->random_number();
$obj->attendence();
?>