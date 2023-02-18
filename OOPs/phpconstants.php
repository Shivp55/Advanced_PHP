<!-- A constant is an identifier for a simple value.
As the name suggests, that value cannot change during the
execution of the script.
Constants are case-sensitive.
By convention, constant identifiers are always uppercase.

The const keyword is used to declare a class constant.
Syntax:
const DEM0_CONST "value":
Note: Constants does not have a visibility modifiers.

Syntax:
define(name, value, case-insensitive);
Where:
Name is the name of the constant
Value is the value of the constant.
Case-sensitive is either true or false, by default it is false.
-->

<!-- <?php
define('TEST','Welcome to Shivs learning');
const DEMO_CONSTANT='This is Shaishav Parekh';

echo TEST;
echo DEMO_CONSTANT;


?> -->

<!-- Magic Constants 
-predefined constants

-->
<?php
//__LINE__ Constant.
//it returns current line number
echo "__LINE__ <br><br>";
echo "Current Line Number is :".__LINE__ ;
echo "<hr>";

echo "__FILE__ <br><br>";
echo "Current File is :".__FILE__; //returns current file
echo "<hr>";


function test(){
echo "__FUNCTION__ <br><br>";
echo "Current Function is :".__FUNCTION__; //returns current file
echo "<hr>";
}
test();

class DemoClass{
    function demoFunction(){
        echo "__CLASS__<br><br>";
        echo "The current class is :".__CLASS__;
        echo "<hr>";
    }
    function demoMethodName(){
        echo "__METHOD__<br><br>";
        echo "The current method is :".__METHOD__;
        echo "<hr>";
    }
}

$obj=new DemoClass();
$obj->demoFunction();
$obj->demoMethodName();


?>
<!-- 
 Magic constants starts with double underscore.
List of Magic Constants:
LINE
FILE
FUNCTION
CLASS
METHOD
 -->