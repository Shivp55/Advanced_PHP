<!-- PHP Keywords are introduced. Keywords are words that have a specific meaning. These words cannot be used as a constant, a variable name, a method name, a class name, or anything else in the PHP language. When these keywords are used, PHP recognises them automatically. -->

<!-- Is function a keyword in PHP?
To create a function, use the function keyword. -->

<!-- How do I find keywords in PHP?
The PHP strpos() method can be used to determine whether or not a string includes a given word. The strpos() method returns the position of a substring's first appearance in a string. If the substring cannot be retrieved, false is returned. It's also worth noting that string places begin at 0 instead of  -->


<?php
class Car{
    public $car= 'Octavia';

    public function favCar($name){
        $this->car=$name;
        echo 'My Favourite Car is '.$this->car;
    }

}
$obj =new Car();
echo $obj->favCar('BMW');


?>