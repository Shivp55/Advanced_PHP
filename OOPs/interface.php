<!-- INterface alow you to specify which methods a class should implement

-> compulsory public

We use the implements keyword to implement an interface to child class

all abstraction rules apply while using interfaces
Same as multiple inheritance

cannot contain Body
cannot contain variables
-->

<?php

interface Components{
    public function __construct($car);
    public function getEngine();
    public  function chasis();
    public function getTransmission($type);
    public function getBody($color);
}
interface SafetyFeatures{
    public function airBags();
    public function getBasicFeatures();
}
class BMW implements Components,SafetyFeatures{
    protected $name;
    public function __construct($name)
    {
        echo $this->$name=$name;
    }
    public function getEngine()
    {
        return "<br>Engine Installed <br>";
    }
    public function chasis()
    {
        return "<br> Chasis Installed <br>";
    }
    public function getTransmission($type)
    {
        return "<br> $type Transmission Installed <br>";
    }
    public function getBody($color)
    {
        return "<br> $color Body Installed <br>";
    }
    public function airBags()
    {
        return "<br>Airbags installed<br>";
    }
    public function getBasicFeatures()
    {
        return "<br>All Basic Features installed<br>";
    }

    public function getData()
    {
        echo $this->getEngine();
        echo $this->chasis();
        echo $this->getTransmission('Automatic');
        echo $this->getBody('Red');
        echo $this->airBags();
        echo $this->getBasicFeatures();
        
    }
}

$obj=new BMW('Octavia') ;

$obj->getData();


?>

