<?php
class Employeewage
{
    public $empinput;
    public $isPresent=2;
    public $emprateperHour=20;
    public $empHours=0;
    public $empWage=0;
    public $partTime=1;
    function welcome()
    {
        echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
    }
    function random_number()
    {
        $this->empinput=rand(0,2);
        
    }
    function attendence()
    {
        switch($this->empinput){
        case 1:
                if($this->partTime==$this->empinput)
                {
                    echo "Employee Works for Part Time \n";
                    $this->empHours=4;
                }    
                break;
        case 2:
        if($this->empinput==$this->isPresent)
        {
            echo "Employee is Present and Works FullTime \n";
            $this->empHours=8;
        }
        break;
        default:
            echo "Employee is Absent \n";
            break;
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