<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <?php
    //comment first line
    /*
    */
    function say($message){
        echo $message.'<br>';
    }
    say(123);
    $title = "official";
    $number = 10;        
    $name = "<h1> Hello <hi>";

    echo $title . " " . $number;
    echo $name;
    echo "<br>";
    echo 55+11;
    echo "<br>";
    echo 55/23;
    echo "<br>";
    $numList = array(1,2,3,4,5,6);
    $_test = [10,20,30,40,50];
    echo $_test[0]."<br>";
    echo "numList[0] = " . $numList[0]."<br>";
    print_r($numList);
    echo "<br>";
    $name = array("first name" => 'Ann');
    print_r($name);
    echo '<br>' . $name['first name'];
    echo '<br>';
    echo rand(1,10);
    ?>
    
    <!--<h1><?php 
        echo $title . " " . $number;
             $name = "<h1> Hello <hi>";
        ?></h1> 
    -->
    
</body>
</html>