<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp'); 
function showAllData(){
    global $connection;  

    $query = "SELECT * FROM users";
        
    $result = mysqli_query($connection, $query);
        
    if(!$result){
        die('Query Failed' . mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
        
?>