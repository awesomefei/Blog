<?php
function isAdmin($username=''){
    global $connection;
    $query = "SELECT role FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    $row = mysqli_fetch_array($result);
    if($row['role'] == 'admin'){
        return true;
    }else{
        return false;
    }
}



function escape($string){
    global $connection;
    mysqli_real_escape_string($connection, trim($string));
}


function confirmQuery($result){
    global $connection;
    if(!$result){
        die("QUERY FAILED ." . mysqli_error($connection));
    }
}

function insert_categories(){
    global $connection;
    if(isset($_POST['submit'])){
    $cat_title = $_POST['cat_title'];
    if($cat_title == "" || empty($cat_title)) {
        echo "this field should not be empty";
    }else{
        $query = "INSERT INTO category(cat_title)";
        $query .= "VALUE('{$cat_title}')";
        $create_category_quert = mysqli_query($connection, $query);
        if(!$create_category_quert){
            die('QUERY FAILED' . mysqli_error($connection));
        }
    }
}  
}

function findAllCategories(){
    global $connection;
    $query = 'SELECT * FROM category ';
    $select_cat = mysqli_query($connection,$query);                                    
    while($row = mysqli_fetch_assoc($select_cat)){
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id'];
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?edit={$cat_id}'>Update</a></td>";

        echo "<tr>";
    }
}

function deleteCategory(){
    global $connection;    
    if(isset($_GET['delete'])){
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM category WHERE cat_id = {$the_cat_id}";
        $delete_query = mysqli_query($connection, $query);
        header('Location: categories.php');
    }  
}

?>