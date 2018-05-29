<?php 
$name = "somename";
$value = 100;
$expiration = time()+(60*60*24*7);

setcookie($name,$value,$expiration);
//$_COOKIE;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
    </title>
</head>
<body>
    <?php 
    if(isset($_COOKIE['somename'])) {
        $someOne = $_COOKIE[' '];
        echo $someOne;
    } else {
        $someOne = '';
    }
    ?>
</body>
</html>