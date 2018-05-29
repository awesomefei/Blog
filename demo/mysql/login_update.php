<?php
include "function.php";?>
<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    //the space after SET is extramelly important
    $query = "UPDATE users SET ";
    $query .="usersname = '$username' ";
    $query .="password = '$password' ";

    $query .="WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
  
   <div class="container">
       <div class="col-xs-6">
           <form action="form.php" method="post">
               <div class="form-group">
                   <label for="username" class="">Username</label>
                    <input type="text" name="username"class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="password" class="">Password</label>
                    <input type="text" name="password" class="form-control">
               </div>
               
               <div class="form-group">
                   <select name="" id="">
                      <?php
                       showAllData();
                       ?>
                   </select>
               </div>
               
               <input type="submit" name="submit" value="Update" class="btn btn-primary">
           </form>
       </div>   
   </div>
</body>
</html>
