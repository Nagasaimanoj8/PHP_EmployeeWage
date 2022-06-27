<?php
class Employeewage
{
    private $isPresent=2;
    private $emphrs=0;
    private $partTime=1;
    private $empWage=0;
    public $empRatePerHour=20;
    public $totalWage=0;
    public $emp_Days_PerMonth=20;
    public $emp_Working_Hours=100;
    public $working_Hours=0;
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
        $this->working_Hours+=$this->emphrs;
    }
}
$obj=new Employeewage();
$obj->welcome();
$day=1;

while($day<=$obj->emp_Days_PerMonth && $obj->working_Hours<=$obj->emp_Working_Hours)
{
$random_number=$obj->random_number();
$obj->attendence($random_number);
$day++;
}
echo " Total Employee Wage in Month is:".$obj->totalWage,$obj->working_Hours;
?>