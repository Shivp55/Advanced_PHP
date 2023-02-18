<?php
class Car{
    public $color='red';
    public $carInfo=[
        'brand'=>'Skoda',
        'model'=>'Octavia',
        'class'=>'Sedan',
        'color'=>'green',
        'music_system'=>'JBL',
        'wheel'=>'Alloy'
    ];
    public $isAvailable=false;

    public function testFunction($data){
        // echo $data;
        foreach ($data as $key => $value) {
            echo $key .":".$value."<br>";
            # code...
        }
    }

}

$obj=new Car();
echo $obj->color; echo "<br>";
// echo $obj->testFunction("Welcome to Shiv's Empire ");
// $obj->testFunction($carInfo);
$obj->testFunction([
    'brand'=>'Skoda',
    'model'=>'Octavia',
    'class'=>'Sedan',
    'color'=>'green',
    'music_system'=>'JBL',
    'wheel'=>'Alloy'
]);


?>