<!-- //Inheritance :
When the child class or sub class access the properties and methods of the parent class then it is called Inheritance

The idea of using inheritance is about code management and the possibility of code reuse or code reusability


How do you implement inheritance in PHP code?
Start with a class that already exists.
Use the extends keyword to create a new class.
You can access the parent's public and protected parts, but not private ones.
New properties and methods should be added.
You can also change the behaviour of your children's parents.

Types of Inheritance?
Single
Multiple
Multilevel
Hie rarchical

Is inheritance possible in PHP?
Only single inheritance is supported in PHP, which means that only one class can be derived from a single parent class.
Using interfaces, we can mimic multiple inheritance.

-->

<!-- Single Inheritance
In single level inheritance, the parent class method will be extended by the child class
Contains Extend keyword
Fir implementhing the single inheritance concept, we require two classes one as a parent and the other as the child


-->
<?php
class ParentClass{
    public $car='My favourite car is Audi';
    function returnValue(){
        echo $this->car;
    }
    function setCarName($brand)
    {
        echo $this->car=$brand;
    }
}
class ChildClass extends ParentClass{
     function setNewCar( $brand)
    {
        echo $this->car=$brand;
    }
}

$obj=new ParentClass();
$obj->returnValue();
$obj->setCarName('<hr> My favourite car is Skoda');

$obj1=new ChildClass();
$obj1->setNewCar('<hr> My Fav car is Hyundai');
// echo $obj1->car;
$obj1->setCarName('<hr> My Fav car is Skoda');

?>
