<?php
class Employeewage
{
    public $empinput;
    public $isPresent=2;
    public $emprateperHour=20;
    public $empHours=0;
    public $empWage=0;
    public $partTime=1;
    public function welcome()
    {
        echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
    }
    public function random_number()
    {
        return rand(0,2);
        
    }
    public function attendence($random_number)
    {
        if($random_number==$this->isPresent)
        {
            echo "Employee is Present and Works FullTime \n";
            $this->empHours=8;
        }
        elseif($random_number==$this->empinput)
        {
            echo "Employee Works for Part Time \n";
            $this->empHours=4;
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
$random_number=$obj->random_number();
$obj->attendence($random_number);
?>