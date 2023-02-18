<!-- An abstract class is a class that contains atleast one abstract method.
The abstract method is a function declaration without any body and it has the only name of the method and its parameters.

Abstract class could not create object

Why use Abstract Class?
When the parent class
->Knows what to do and
->Need its child class to do some tasks.

Abstract Classes have abstract methods in it which they need their child classes to override when inheriting.

***Note***
1. Abstract methods do not have a body
2.Abstract method's visibility can either be public or protected but not private

-->

<?php

abstract class Components{
    public abstract function getEngine();
    public abstract function chasis();
    protected abstract function getTransmission($type);
    protected abstract function getBody($color);
}
class BMW extends Components{
    public function getEngine()
    {
        return "<br>Engine Installed <br>";
    }
    public function chasis()
    {
        return "<br> Chasis Installed <br>";
    }
    protected function getTransmission($type)
    {
        return "<br> $type Transmission Installed <br>";
    }
    protected function getBody($color)
    {
        return "<br> $color Body Installed <br>";
    }
    public function getData()
    {
        echo $this->getEngine();
        echo $this->chasis();
        echo $this->getTransmission('Automatic');
        echo $this->getBody('Red');
        
    }
}

$obj=new BMW;
$obj->getData();
echo $obj->chasis();

?>