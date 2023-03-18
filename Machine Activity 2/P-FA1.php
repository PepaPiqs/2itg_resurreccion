<?php
class formativeOne //Parent Class
{
    private $memberName;
    private $memberAge;

    public function setName ($memberName)
    {
        $this->memberName = $memberName;
    }

    public function setAge ($memberAge)
    {
        $this->memberAge = $memberAge;
    }

    public function getName()
    {
        return $this->memberName;
    }

    public function getAge()
    {
        return $this->memberAge;
    }

    public function displayInfo()
    {
        echo $this->getName()." is ".$this->getAge();
    }

}


class studentInfo extends formativeOne //Child Class
{

    public function __construct(private $course)
    {
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function printInfo()
    {
        echo "<br>He is enrolled in ".$this->getCourse();
    }

    public function displayInfo() //Overriding Method
    {
        echo "<br>".$this->getName()." is ".$this->getAge()." and studies ".$this->getCourse();
    }


}

class studentAdd extends studentInfo //Multi-Level
{
    public function __construct(private $address)
    {
    }
    public function getAdd()
    {
        return $this -> address;
    }
    public function printInfo()
    {
        echo "<br>"."He is from ".$this->getAdd();
    }
}

class subject extends formativeOne //Hierarchical Inheritance
{
    public function __construct(private $subject)
    {
    }

    public function getSub()
    {
        return $this -> subject;
    }

    public function printInfo2($code2) //Overloaded printInfo
    {
        echo " and codes using ".$this->getSub()." and ".$code2;
    }
}

//Object 1
$person1 = new formativeOne();
$person1 -> setName("Pikoy");
$person1 -> setAge(21);
$person1 -> displayInfo();

//Object 2
$course1 = new studentInfo("Information Technology");
$course1 -> setName("Pikoy");
$course1 -> setAge(21);
$course1 -> printInfo();
$course1 -> displayInfo();

//Object 3
$address1 = new studentAdd("Angeles City");
$address1 -> printInfo();

//Object 4
$subject1 = new subject("PHP");
$subject1 -> printInfo2("Java");
?>
