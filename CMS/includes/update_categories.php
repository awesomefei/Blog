<form action="" method="post">
    <div class="form-group">
       <label for="cat_title">Update Category</label>
<?php                                   
if(isset($_GET['edit'])){
    $cat_id = $_GET['edit'];
    $query = "SELECT * FROM category WHERE cat_id = $cat_id";
    $select_cat_id = mysqli_query($connection,$query);
    
    while($row = mysqli_fetch_assoc($select_cat_id)){
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id'];
    
?>
        <input value="<?php
                      if(isset($cat_title)){
                          echo $cat_title;
                      }
                      ?>" 
                class="form-control" type="text" name='cat_title'>
<?php
    }
}
?>

<?php
//update query
   if(isset($_POST['update_category'])){
    $the_cat_title = $_POST['cat_title'];
    $query = "UPDATE category SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id}";
    $update_query = mysqli_query($connection, $query);
    if(!$update_query){
        die("Query failed" . mysqli_error());
    }
}   
?>                             
                               
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name='update_category' value="Update Category">
    </div>
</form>