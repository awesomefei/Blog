<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'cms';

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

//the thrid one indicates password
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//if($connection) {
//    echo "we are connected";
//}else{
//    echo "no";
//}

?>