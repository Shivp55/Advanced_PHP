<!--The visibility of a property a method or a constant can be defined by prefixing the declaration with the access modifiers.

It allows you to control where your class members can be accessed from for instance to prevent a certain variable to be modified from outside the class

AccessModifier      classlevel  functionleveL   variablelevel
public              no          yes             yes
protected           no          yes             yes
private             no          yes             yes


Abstract            yes         yes             no
Final               yes         yes             no
Static              no          yes             yes
-->

<!--
Public- It can be accesssed from everywhere

Private- It can be accessed only within the class

Protected- It can be accessed by the class it declared and by the classes that inherit the above declared class.

Why use AccessModifier?
(i).TO validate and restrict data.
(ii).To keep private things private.


Variable Level AccessModifier
-->
<!--<?php
    class MyClass{
        public $public ='Public';
        protected $protected='Protected';
        private $private='Private';
        function printValues(){
            echo $this->protected;
            echo $this->public;
            echo $this->private;
        }
    }
    class AnotherClass extends MyClass{
        function printValuesFromDerivedClass(){ //Can call public and protected
            echo '<hr>';
            echo $this->protected;
            echo $this->public;
            echo $this->private;
        }
    }

    $obj=new MyClass();
    // echo $obj->public;
    // echo $obj->protected;
    // echo $obj->private;
    $obj->printValues();

    $obj=new AnotherClass();
    // echo $obj->public;
    // echo $obj->protected;
    // echo $obj->private;
    $obj->printValuesFromDerivedClass();


?> -->


<!-- Function Level AccessModifier -->
<?php
class ThisClass{
    // lets use constructor .must be public
    function __construct(){
        echo "This is constructor <hr>";

    }
    public function publicFunction()
    {
        echo 'THis is public function <hr> ';
    }
    protected function protectedFunction()
    {
        echo "This is protected Function <hr>";
    }
    private function privateFunction(){
        echo "This is private Function <hr>";
    }
    public function baseFunction()
    {
        $this->publicFunction();
        $this->protectedFunction();
        $this->privateFunction();
    }

}
class SecondClass extends ThisClass{
    public function functionCall()
    {
        $this->publicFunction();
        $this->protectedFunction();
        $this->privateFunction();
    }
}


$obj=new ThisClass();
$obj->baseFunction();

// $obj1=new SecondClass();
// $obj1->functionCall();

?>