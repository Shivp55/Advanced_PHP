<!--  Used to increase the code reusability 

A Trait is similar to a class, but only intended to group
functionality in a fine-grained and consistent way.
It is not possible to instantiate a Trait on its own.

No object of trait


**Uses of Trait**
Reduces code duplication.
Used to declare methods that can be used in multiple classes.
Cannot be instantiated.
Methods can be in any visibility.
Can have methods and abstract methods.
-->

<?php
trait demoTrait{
    function Function1()
    {
        return "This is demo function 1";
    }

}
trait demoTrait2{
    function Function2()
    {
        return "This is demo function 2";
    }
}

class DemoClass{
    use demoTrait,demoTrait2;
}

$obj=new DemoClass();
echo $obj->Function1();
echo $obj->Function2();

?>