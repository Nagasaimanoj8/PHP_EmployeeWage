<?php
class Employeewage
{
    public $empinput;
    public $isPresent=2;
    public $emphrs=0;
    public $partTime=1;
    public $empWage=0;
    public $empRatePerHour=20;
    public $totalWage=0;
    public $emp_Days_PerMonth=20;
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
        switch($random_number)
        {
            case 2:
                $random_number==$this->isPresent;
                echo "Employee is Present Work only For fullTime \n";   
                $this->emphrs=8;
                break;
            case 1:
                $random_number==$this->partTime;
                echo "Employee is Present Works For PartTime \n";
                $this->emphrs=4;
                break;
            case 0;
                echo "Employee is Absent \n";
                break;
        }
        $this->empWage=$this->empRatePerHour*$this->emphrs;
        echo "DailyWage:$this->empWage \n";
        $this->totalWage+=$this->empWage;
    }
}
$obj=new Employeewage();
$obj->welcome();
$day=1;
while($day<=$obj->emp_Days_PerMonth)
{
$random_number=$obj->random_number();
$obj->attendence($random_number);
$day++;
}
echo " Total Employee Wage in Month is:".$obj->totalWage;
?>