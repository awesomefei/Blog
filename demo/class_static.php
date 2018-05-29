<?php 
class Car{
    
    static $wheel = 4;
    
    function MoveWheels(){
        Car::$wheel = 10;;
    }
    
}


$bmw = new Car();
Car::MoveWheels();
echo Car::$wheel;
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