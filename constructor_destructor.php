<?php

    class demoClass{
        public $category = 'E-learning';
        public $company = 'Shiv-Infotech';

        // public function __construct(){     simple constructor
        //     echo "The best ".$this->category. "platform is ".$this->company;
        // }
        public function __construct($category,$company){ //parameterised COnstructor
            $this->category=$category;
            $this->company=$company;
            
        }
        public function __destruct(){
            //destructor will be called after the last line of the code is executed or die or exit function is called
            // it is basically used for session destroy to not get data back after session is destroyed
            echo "The best ".$this-> category ." platform is ". $this->company;
        }
        public function testFunction(){
            echo " This is test function <br>";
            exit;
            echo "This is test function after exit";
        }

    }
    // $obj=new demoClass();
$obj=new demoClass('E-commerce','Shiv');
$obj->testFunction();



?>