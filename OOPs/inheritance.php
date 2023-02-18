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
<!-- <?php
        class ParentClass
        {
            public $car = 'My favourite car is Audi';
            function returnValue()
            {
                echo $this->car;
            }
            function setCarName($brand)
            {
                echo $this->car = $brand;
            }
        }
        class ChildClass extends ParentClass
        {
            function setNewCar($brand)
            {
                echo $this->car = $brand;
            }
        }

        $obj = new ParentClass();
        $obj->returnValue();
        $obj->setCarName('<hr> My favourite car is Skoda');

        $obj1 = new ChildClass();
        $obj1->setNewCar('<hr> My Fav car is Hyundai');
        // echo $obj1->car;
        $obj1->setCarName('<hr> My Fav car is Skoda');

        ?> -->



<!-- Multilevel Inheritance -->
<!-- <?php
        class A
        {
            public function grandParent()
            {
                return "Grand Father's Age is 80";
            }
        }
        class B extends A
        {
            public function father()
            {
                return "Father's age is 50";
            }
        }
        class C extends B
        {
            public function son()
            {
                return "Son's age is 30";
            }
            public function getHistory()
            {
                echo "Class A :" . $this->grandParent();
                echo "<hr> Class B :" . $this->father();
                echo "<hr> Class C :" . $this->son();
            }
        }
        $obj = new C;
        $obj->getHistory();



        ?> -->


<!-- Hierarchical Inheritance 
What is hierarchical inheritance?
Hierarchical inheritance is when more than one class is inherited from the base class. All features that are common in child classes are included in the base class under hierarchical inheritance. Physics, Chemistry, and Biology, for example, are all derived from Science class.

What is an example of hierarchical?
A group of people or objects organised in order of rank, or the people who rank at the top of such a system, is defined as a hierarchy. The corporate ladder is an example of hierarchy. The numerous ranks of priests in the Catholic church are an illustration of hierarchy.

How do you implement hierarchical inheritance?
To create hierarchical inheritance, at least three classes are required: two derived classes and one base class. Two child classes can inherit the properties of the common parent class in this situation.
-->

<?php
class CategoryA
{
    public function categoryName()
    {
        return "Grand Father's Age is 80";
    }
}
class CategoryB extends CategoryA
{
    public function yourName()
    {
        return "Father's age is 50";
    }
    public function getHistory()
    {
        echo "CategoryA :" . $this->categoryName();

        echo "<hr> CategoryB :" . $this->yourName();
    }
}
class CategoryC extends CategoryA
{
    public function siblingName()
    {
        return "Son's age is 30";
    }
    public function getHistory()
    {
        echo "<hr> CategoryA :" . $this->categoryName();

        echo "<hr> CategoryC :" . $this->siblingName();
    }
}
$obj=new CategoryB;
$obj->getHistory();
$obj1=new CategoryC;
$obj1->getHistory();



?>