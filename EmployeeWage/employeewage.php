<?php
class Employeewage
{
    public $isPresent=1;
    public $emprateperHour=20;
    public $empHours=0;
    public $empWage=0;
    function welcome()
    {
        echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
    }
     public function random_number()
    {
        return rand(0,1);
        
    }
    public function Daily_Employee_Wage($random_number)
    {
        if($random_number==$this->isPresent)
        {
            echo "Employee is Present \n";
            $this->empHours=8;
        }
        else{
            echo "Employee is Absent \n";
       }
       $this->empWage=$this->emprateperHour*$this->empHours;
       echo "DailyWage:$this->empWage";
    }
    
}
$obj=new Employeewage();
$obj->welcome();
$random=$obj->random_number();
$obj->Daily_Employee_Wage($random);
?>