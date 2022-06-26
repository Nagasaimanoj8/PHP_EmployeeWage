<?php
class Employeewage
{
    public $empinput;
    public $isPresent=1;
    public function welcome()
    {
        echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
    }
    public function random_number()
    {
        return rand(0,1);
        
    }
    public function attendence($random_number)
    {
        if($random_number==$this->isPresent)
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
$random_number=$obj->random_number();
$obj->attendence($random_number);
?>