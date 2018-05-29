<?php
class Car{
    
    var $wheel = 4;
    
    function MoveWheels(){
        echo 'Move Wheels'. "<br>";
    }
}
//if(class_exists("Car")){
//    
//    echo "Nice";
//}else{
//    echo "No";
//}

$bmw = new Car();
$bmw->MoveWheels();
echo $bmw->wheel . "<br>";
$bmw->wheel = 8;
echo $bmw->wheel;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>