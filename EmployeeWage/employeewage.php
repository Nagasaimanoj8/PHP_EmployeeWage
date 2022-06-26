<?php
class Employeewage
{
    public $empinput;
    public $isPresent=1;
    public $emprateperHour=20;
    public $empHours=0;
    public $empWage=0;
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
            $this->empHours=8;
        }
        else{
            echo "Employee is Absent";
       }
       $this->empWage=$this->emprateperHour*$this->empHours;
       echo "DailyWage:$this->empWage";
    }
    
}
$obj=new Employeewage();
$obj->welcome();
$obj->random_number();
$obj->attendence();
?>